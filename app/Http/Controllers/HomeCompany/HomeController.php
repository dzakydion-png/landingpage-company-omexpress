<?php

namespace App\Http\Controllers\HomeCompany;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Halaman Beranda
     */
    public function index()
    {
        return view('home_company.beranda');
    }

    /**
     * Halaman Profil Perusahaan
     */
    public function profilPerusahaan()
    {
        return view('home_company.profil.profil_perusahaan.profil_perusahaan');
    }

    /**
     * Halaman Syarat dan Ketentuan
     */
    public function syaratKetentuan()
    {
        return view('home_company.profil.syarat_ketentuan.syarat_ketentuan');
    }

    /**
     * Halaman Visi Misi
     */
    public function visiMisi()
    {
        return view('home_company.coming_soon', [
            'title' => 'Visi & Misi'
        ]);
    }

    /**
     * Halaman Struktur Organisasi
     */
    public function strukturOrganisasi()
    {
        return view('home_company.coming_soon', [
            'title' => 'Struktur Organisasi'
        ]);
    }

    /**
     * Halaman Layanan
     */
    public function layanan()
    {
        return view('home_company.layanan.layanan');
    }

    /**
     * Halaman Tracking
     */
    public function tracking()
    {
        $trackingSteps = [
            [
                'title' => 'Resi Diterima',
                'desc' => 'Nomor resi sudah terdaftar di sistem dan sedang divalidasi.',
                'status' => 'done',
                'time' => '08:15',
            ],
            [
                'title' => 'Dalam Proses Pickup',
                'desc' => 'Paket dijadwalkan untuk diambil oleh tim operasional.',
                'status' => 'done',
                'time' => '10:40',
            ],
            [
                'title' => 'Menuju Sortir Center',
                'desc' => 'Paket dibawa ke pusat sortir untuk proses berikutnya.',
                'status' => 'current',
                'time' => '12:30',
            ],
            [
                'title' => 'Siap Dikirim',
                'desc' => 'Paket akan diteruskan ke tujuan akhir setelah sortir selesai.',
                'status' => 'pending',
                'time' => 'Estimasi sore ini',
            ],
        ];

        return view('home_company.tracking.index', compact('trackingSteps'));
    }

    /**
     * Halaman Cek Ongkir
     */
    public function cekOngkir()
    {
        return view('home_company.cek_ongkir.index');
    }

    /**
     * Halaman Cek Resi
     */
    public function cekResi()
    {
        return view('home_company.coming_soon', [
            'title' => 'Cek Resi'
        ]);
    }

    /**
     * Halaman Ongkir 6 Kota
     */
    public function ongkir6Kota()
    {
        return view('home_company.coming_soon', [
            'title' => 'Ongkir 6 Kota'
        ]);
    }

    /**
     * Halaman Artikel
     */
    public function artikel()
    {
        $paginator = Article::query()
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(6)
            ->withQueryString();

        $articles = $paginator->getCollection()
            ->map(function (Article $article): array {
                return [
                    'title' => $article->title,
                    'slug' => $article->slug,
                    'category' => $article->category ?? 'Artikel',
                    'date' => $article->published_at?->translatedFormat('d F Y') ?? $article->created_at->translatedFormat('d F Y'),
                    'excerpt' => $article->excerpt,
                    'thumbnail' => $article->cover_image ?: asset('assets/Logo OmExpress (1).png'),
                ];
            })->values();

        $highlights = [
            'Edukasi pengiriman untuk pelanggan dan bisnis',
            'Update layanan OMEXPRESS dan operasional',
            'Tips logistik yang praktis dan mudah diterapkan',
        ];

        return view('home_company.artikel.index', compact('articles', 'highlights', 'paginator'));
    }

    /**
     * Halaman Detail Artikel
     */
    public function artikelDetail(string $slug)
    {
        $article = Article::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('home_company.artikel.show', compact('article'));
    }

    /**
     * Halaman Galeri
     */
    public function galeri()
    {
        $assetsPath = public_path('assets2');
        $images = [];
        $videos = [];

        // Allowed image extensions
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $videoExtensions = ['mp4', 'webm', 'mov'];

        if (is_dir($assetsPath)) {
            $files = scandir($assetsPath);

            foreach ($files as $file) {
                if ($file === '.' || $file === '..') continue;

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $filePath = 'assets2/' . $file;

                // Categorize based on filename
                $category = 'lainnya';
                $title = pathinfo($file, PATHINFO_FILENAME);

                // Determine category from filename
                if (stripos($file, 'BALIKPAPAN') !== false) {
                    $category = 'balikpapan';
                    $title = 'Pengiriman Balikpapan';
                } elseif (stripos($file, 'BATAM') !== false) {
                    $category = 'batam';
                    $title = 'Pengiriman Batam';
                } elseif (stripos($file, 'BERAU') !== false) {
                    $category = 'berau';
                    $title = 'Pengiriman Berau';
                } elseif (stripos($file, 'MAKASSAR') !== false) {
                    $category = 'makassar';
                    $title = 'Pengiriman Makassar';
                } elseif (stripos($file, 'MATARAM') !== false) {
                    $category = 'mataram';
                    $title = 'Pengiriman Mataram';
                } elseif (stripos($file, 'MINAHASA') !== false) {
                    $category = 'minahasa';
                    $title = 'Pengiriman Minahasa';
                } elseif (stripos($file, 'GUDANG') !== false) {
                    $category = 'gudang';
                    $title = 'Gudang Omexpress';
                } elseif (stripos($file, 'TRUK') !== false || stripos($file, 'VENDOR') !== false) {
                    $category = 'armada';
                    $title = 'Armada Omexpress';
                } elseif (stripos($file, 'IMG_E') !== false) {
                    $category = 'aktivitas';
                    $title = 'Aktivitas Pengiriman';
                }

                if (in_array($extension, $imageExtensions)) {
                    $images[] = [
                        'path' => $filePath,
                        'filename' => $file,
                        'title' => $title,
                        'category' => $category,
                    ];
                } elseif (in_array($extension, $videoExtensions)) {
                    $videos[] = [
                        'path' => $filePath,
                        'filename' => $file,
                        'title' => $title,
                        'category' => $category,
                    ];
                }
            }
        }

        // Get unique categories for filter
        $categories = collect($images)->pluck('category')->unique()->sort()->values()->toArray();

        return view('home_company.gallery.gallery', compact('images', 'videos', 'categories'));
    }

    /**
     * Halaman Kontak
     */
    public function kontak()
    {
        return view('home_company.coming_soon', [
            'title' => 'Kontak'
        ]);
    }
}
