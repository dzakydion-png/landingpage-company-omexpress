<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShippingRate;
use Illuminate\Http\JsonResponse;

class ShippingRateApiController extends Controller
{
    public function index(): JsonResponse
    {
        $regionSlug = request('region_slug');

        $rates = ShippingRate::query()
            ->with('region:id,name,slug')
            ->when($regionSlug, function ($query) use ($regionSlug) {
                $query->whereHas('region', function ($regionQuery) use ($regionSlug) {
                    $regionQuery->where('slug', $regionSlug);
                });
            })
            ->where('is_active', true)
            ->orderBy('id')
            ->get();

        $formatted = $rates->map(function (ShippingRate $rate) {
            $discounted = $rate->base_price !== null
                ? (int) round($rate->base_price * 0.85)
                : null;

            return [
                'id' => $rate->id,
                'region' => $rate->region?->name,
                'region_slug' => $rate->region?->slug,
                'destination' => $rate->destination,
                'estimation' => $rate->estimation,
                'price' => $discounted !== null ? $this->formatRupiah($discounted) : null,
            ];
        });

        return response()->json([
            'data' => $formatted,
        ]);
    }

    private function formatRupiah(int $amount): string
    {
        return 'Rp ' . number_format($amount, 0, ',', '.') . '/Kg';
    }
}
