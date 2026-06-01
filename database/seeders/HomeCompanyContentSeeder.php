<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Region;
use App\Models\ShippingRate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class HomeCompanyContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Cara Memilih Layanan Cargo yang Tepat untuk Bisnis',
                'category' => 'Panduan',
                'excerpt' => 'Panduan singkat untuk memilih layanan pengiriman berdasarkan berat, tujuan, dan urgensi barang.',
                'content' => 'Pilih layanan berdasarkan karakter barang, SLA, dan rute tujuan agar biaya tetap efisien.',
                'published_at' => Carbon::parse('2026-05-12'),
            ],
            [
                'title' => 'Tips Packing Aman agar Barang Tetap Utuh',
                'category' => 'Tips',
                'excerpt' => 'Beberapa teknik packing sederhana yang membantu mengurangi risiko kerusakan saat pengiriman.',
                'content' => 'Gunakan pelindung sudut, filler, dan label fragile untuk barang yang sensitif.',
                'published_at' => Carbon::parse('2026-04-28'),
            ],
            [
                'title' => 'Mengapa Tracking Real-Time Penting untuk Operasional',
                'category' => 'Insight',
                'excerpt' => 'Tracking yang transparan membantu tim dan pelanggan memantau status barang tanpa menunggu lama.',
                'content' => 'Tracking real-time mengurangi komplain dan membuat proses koordinasi lebih cepat.',
                'published_at' => Carbon::parse('2026-04-10'),
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['slug' => Str::slug($article['title'])],
                [
                    'title' => $article['title'],
                    'category' => $article['category'],
                    'excerpt' => $article['excerpt'],
                    'content' => $article['content'],
                    'published_at' => $article['published_at'],
                    'is_published' => true,
                ]
            );
        }

        $regions = [
            ['name' => 'Sumatera', 'slug' => 'sumatera'],
            ['name' => 'Jawa Barat', 'slug' => 'jawa-barat'],
            ['name' => 'Jawa Tengah', 'slug' => 'jawa-tengah'],
        ];

        $regionMap = collect($regions)->mapWithKeys(function ($region) {
            $model = Region::updateOrCreate(
                ['slug' => $region['slug']],
                ['name' => $region['name']]
            );

            return [$region['slug'] => $model->id];
        });

        $rates = [
            [
                'region_slug' => 'sumatera',
                'destination' => 'Jakarta - Medan',
                'base_price' => 450000,
                'estimation' => '2-4 hari kerja',
            ],
            [
                'region_slug' => 'jawa-barat',
                'destination' => 'Jakarta - Bandung',
                'base_price' => 275000,
                'estimation' => '1-2 hari kerja',
            ],
            [
                'region_slug' => 'jawa-tengah',
                'destination' => 'Jakarta - Semarang',
                'base_price' => 325000,
                'estimation' => '2-3 hari kerja',
            ],
        ];

        foreach ($rates as $rate) {
            $regionId = $regionMap[$rate['region_slug']] ?? null;
            if (!$regionId) {
                continue;
            }

            ShippingRate::updateOrCreate(
                [
                    'region_id' => $regionId,
                    'destination' => $rate['destination'],
                ],
                [
                    'base_price' => $rate['base_price'],
                    'estimation' => $rate['estimation'],
                    'is_active' => true,
                ]
            );
        }
    }
}
