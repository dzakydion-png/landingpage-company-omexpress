<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller
{
    public function index()
    {
        $rates = ShippingRate::with('region')
            ->orderBy('id')
            ->paginate(12);

        return view('admin.shipping_rates.index', compact('rates'));
    }

    public function create()
    {
        $regions = Region::query()->orderBy('name')->get();

        return view('admin.shipping_rates.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'region_id' => ['required', 'exists:regions,id'],
            'destination' => ['required', 'string', 'max:255'],
            'base_price' => ['required', 'integer', 'min:0'],
            'estimation' => ['required', 'string', 'max:120'],
            'is_active' => ['nullable'],
        ]);

        ShippingRate::create([
            'region_id' => $validated['region_id'],
            'destination' => $validated['destination'],
            'base_price' => $validated['base_price'],
            'estimation' => $validated['estimation'],
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil ditambahkan.');
    }

    public function edit(ShippingRate $shippingRate)
    {
        $regions = Region::query()->orderBy('name')->get();

        return view('admin.shipping_rates.edit', compact('shippingRate', 'regions'));
    }

    public function update(Request $request, ShippingRate $shippingRate)
    {
        $validated = $request->validate([
            'region_id' => ['required', 'exists:regions,id'],
            'destination' => ['required', 'string', 'max:255'],
            'base_price' => ['required', 'integer', 'min:0'],
            'estimation' => ['required', 'string', 'max:120'],
            'is_active' => ['nullable'],
        ]);

        $shippingRate->update([
            'region_id' => $validated['region_id'],
            'destination' => $validated['destination'],
            'base_price' => $validated['base_price'],
            'estimation' => $validated['estimation'],
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
