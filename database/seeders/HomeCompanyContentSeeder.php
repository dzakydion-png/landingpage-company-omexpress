<?php

namespace Database\Seeders;

use App\Models\Article;
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

        $rates = [
            [
                'route_label' => 'Jakarta - Jawa Barat',
                'service_type' => 'Cargo Darat',
                'price_from' => 450000,
                'price_text' => 'Rp 450.000',
                'note' => 'Tarif estimasi untuk cargo minimum 10 kg.',
                'min_weight_kg' => 10,
                'sort_order' => 1,
            ],
            [
                'route_label' => 'Jakarta - Jawa Tengah / Yogyakarta',
                'service_type' => 'Cargo Darat',
                'price_from' => 575000,
                'price_text' => 'Rp 575.000',
                'note' => 'Cocok untuk pengiriman rutin antar kota besar.',
                'min_weight_kg' => 10,
                'sort_order' => 2,
            ],
            [
                'route_label' => 'Jakarta - Kalimantan / Sulawesi',
                'service_type' => 'Cargo Udara',
                'price_from' => 850000,
                'price_text' => 'Mulai Rp 850.000',
                'note' => 'Menyesuaikan kota tujuan, jenis armada, dan volume.',
                'min_weight_kg' => 10,
                'sort_order' => 3,
            ],
        ];

        foreach ($rates as $rate) {
            ShippingRate::updateOrCreate(
                [
                    'route_label' => $rate['route_label'],
                    'service_type' => $rate['service_type'],
                ],
                $rate + ['is_active' => true]
            );
        }
    }
}
