<?php

namespace App\Http\Controllers\HomeCompany;

use App\Http\Controllers\Controller;
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
        return view('home_company.coming_soon', [
            'title' => 'Tracking'
        ]);
    }

    /**
     * Halaman Cek Ongkir
     */
    public function cekOngkir()
    {
        return view('home_company.coming_soon', [
            'title' => 'Cek Ongkir'
        ]);
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
        return view('home_company.coming_soon', [
            'title' => 'Artikel'
        ]);
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
