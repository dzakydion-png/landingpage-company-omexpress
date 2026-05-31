<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller
{
    public function index()
    {
        $rates = ShippingRate::orderBy('sort_order')
            ->orderBy('id')
            ->paginate(12);

        return view('admin.shipping_rates.index', compact('rates'));
    }

    public function create()
    {
        return view('admin.shipping_rates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'route_label' => ['required', 'string', 'max:255'],
            'service_type' => ['required', 'string', 'max:100'],
            'price_from' => ['nullable', 'integer', 'min:0'],
            'price_text' => ['required', 'string', 'max:120'],
            'note' => ['nullable', 'string'],
            'min_weight_kg' => ['nullable', 'numeric', 'min:0'],
            'is_active' => ['nullable'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        ShippingRate::create([
            'route_label' => $validated['route_label'],
            'service_type' => $validated['service_type'],
            'price_from' => $validated['price_from'] ?? null,
            'price_text' => $validated['price_text'],
            'note' => $validated['note'] ?? null,
            'min_weight_kg' => $validated['min_weight_kg'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil ditambahkan.');
    }

    public function edit(ShippingRate $shippingRate)
    {
        return view('admin.shipping_rates.edit', compact('shippingRate'));
    }

    public function update(Request $request, ShippingRate $shippingRate)
    {
        $validated = $request->validate([
            'route_label' => ['required', 'string', 'max:255'],
            'service_type' => ['required', 'string', 'max:100'],
            'price_from' => ['nullable', 'integer', 'min:0'],
            'price_text' => ['required', 'string', 'max:120'],
            'note' => ['nullable', 'string'],
            'min_weight_kg' => ['nullable', 'numeric', 'min:0'],
            'is_active' => ['nullable'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $shippingRate->update([
            'route_label' => $validated['route_label'],
            'service_type' => $validated['service_type'],
            'price_from' => $validated['price_from'] ?? null,
            'price_text' => $validated['price_text'],
            'note' => $validated['note'] ?? null,
            'min_weight_kg' => $validated['min_weight_kg'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil diperbarui.');
    }

    public function destroy(ShippingRate $shippingRate)
    {
        $shippingRate->delete();

        return redirect()->route('admin.shipping-rates.index')->with('status', 'Tarif berhasil dihapus.');
    }
}
