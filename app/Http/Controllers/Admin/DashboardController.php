<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ShippingRate;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $publishedArticles = Article::where('is_published', true)->count();
        $totalRates = ShippingRate::count();
        $activeRates = ShippingRate::where('is_active', true)->count();

        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedArticles',
            'totalRates',
            'activeRates'
        ));
    }
}
