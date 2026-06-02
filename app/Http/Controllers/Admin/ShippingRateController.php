<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller
{
public function index(Request $request)
{
    // Gunakan query builder agar fleksibel
    $query = ShippingRate::with('region')->orderByDesc('id');

    if ($request->filled('service_type')) {
        $query->where('service_type', $request->service_type);
    }

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('destination', 'like', "%{$search}%")
              ->orWhereHas('region', function($q) use ($search) {
                  $q->where('name', 'like', "%{$search}%");
              });
        });
    }

    // Pastikan ini menggunakan paginate() agar method links() atau hasPages() tersedia
    $rates = $query->paginate(12)->withQueryString(); 

    return view('admin.shipping_rates.index', compact('rates'));
}

    public function create()
    {
        $regions = Region::query()->orderBy('name')->get();

        return view('admin.shipping_rates.create', compact('regions'));
    }

   // Pastikan di dalam ShippingRateController.php
public function store(Request $request) {
    // Tambahkan 'nullable' agar tidak error saat input kosong
    $validated = $request->validate([
        'region_id' => 'required',
        'service_type' => 'required',
        'destination' => 'required',
        'base_price' => 'nullable|numeric',
        'estimation' => 'required',
        'vehicle_type' => 'nullable', 
        'fleet_type' => 'nullable',
    ]);

    // Simpan data
    \App\Models\ShippingRate::create([
        'region_id' => $validated['region_id'],
        'service_type' => $validated['service_type'],
        'destination' => $validated['destination'],
        'base_price' => $validated['base_price'],
        'estimation' => $validated['estimation'],
        'specific_details' => [
            'vehicle_type' => $request->vehicle_type,
            'fleet_type' => $request->fleet_type
        ],
    ]);
    return redirect()->route('admin.shipping-rates.index');
}

    public function edit(ShippingRate $shippingRate)
    {
        $regions = Region::query()->orderBy('name')->get();

        return view('admin.shipping_rates.edit', compact('shippingRate', 'regions'));
    }

    public function update(Request $request, ShippingRate $shippingRate)
    {
        // 1. Validasi input, termasuk field baru
        $validated = $request->validate([
            'region_id' => ['required', 'exists:regions,id'],
            'service_type' => ['required', 'string'],
            'destination' => ['required', 'string', 'max:255'],
            'base_price' => ['nullable', 'integer', 'min:0'],
            'estimation' => ['required', 'string', 'max:120'],
            'vehicle_type' => ['nullable', 'string'], // Tambahkan
            'fleet_type' => ['nullable', 'string'],   // Tambahkan
            'is_active' => ['nullable'],
        ]);

        // 2. Logika detail spesifik (JSON)
        $specificDetails = $shippingRate->specific_details ?? []; 
        
        if ($request->service_type == 'motor' || $request->service_type == 'mobil') {
            $specificDetails = ['vehicle_type' => $request->vehicle_type];
        } elseif ($request->service_type == 'charter') {
            $specificDetails = ['fleet_type' => $request->fleet_type];
        } else {
            // Jika pindah ke layanan darat/udara, kosongkan detail spesifik
            $specificDetails = null; 
        }

        // 3. Update data
        $shippingRate->update([
            'region_id' => $validated['region_id'],
            'service_type' => $validated['service_type'],
            'destination' => $validated['destination'],
            'base_price' => $validated['base_price'],
            'estimation' => $validated['estimation'],
            'specific_details' => $specificDetails,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil diperbarui.');
    }

    public function destroy(ShippingRate $shippingRate)
    {
        $shippingRate->delete();

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil dihapus.');
    }
}
