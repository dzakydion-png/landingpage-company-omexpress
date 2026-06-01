<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\ShippingRateController;
use App\Http\Controllers\HomeCompany\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil/perusahaan', [HomeController::class, 'profilPerusahaan'])->name('profil.perusahaan');
Route::get('/profil/syarat-ketentuan', [HomeController::class, 'syaratKetentuan'])->name('profil.syarat_ketentuan');
Route::get('/profil/visi-misi', [HomeController::class, 'visiMisi'])->name('profil.visi-misi');
Route::get('/profil/struktur-organisasi', [HomeController::class, 'strukturOrganisasi'])->name('profil.struktur-organisasi');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/tracking', [HomeController::class, 'tracking'])->name('tracking');
Route::get('/cek-ongkir', [HomeController::class, 'cekOngkir'])->name('cek_ongkir');
Route::get('/cek-resi', [HomeController::class, 'cekResi'])->name('cek_resi');
Route::get('/ongkir-6-kota', [HomeController::class, 'ongkir6Kota'])->name('ongkir_6_kota');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [HomeController::class, 'artikelDetail'])->name('artikel.show');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
	Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
	Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

	Route::middleware(['auth', 'admin'])->group(function () {
		Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
		Route::resource('articles', ArticleController::class)->except(['show']);
		Route::post('articles/upload-image', [ArticleController::class, 'uploadImage'])->name('articles.upload-image');
		Route::resource('regions', RegionController::class)->except(['show']);
		Route::resource('shipping-rates', ShippingRateController::class)->except(['show']);
	});
});
