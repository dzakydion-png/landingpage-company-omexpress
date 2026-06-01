<?php

use App\Http\Controllers\Api\RegionApiController;
use App\Http\Controllers\Api\ShippingRateApiController;
use Illuminate\Support\Facades\Route;

Route::get('/v1/health', function () {
    return response()->json(['status' => 'ok', 'version' => '1.0']);
});

Route::get('/regions', [RegionApiController::class, 'index']);
Route::get('/shipping-rates', [ShippingRateApiController::class, 'index']);
