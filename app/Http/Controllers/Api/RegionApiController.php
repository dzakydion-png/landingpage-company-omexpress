<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\JsonResponse;

class RegionApiController extends Controller
{
    public function index(): JsonResponse
    {
        $regions = Region::query()
            ->orderBy('name')
            ->get(['id', 'name', 'slug']);

        return response()->json([
            'data' => $regions,
        ]);
    }
}
