# Dokumen Detail Menjalankan Project & Fitur

Project ini adalah aplikasi Laravel 11 + Vite (Tailwind/Flowbite) untuk manajemen pengiriman (Admin & Driver) dan website publik (company profile).

## 1) Prasyarat (Windows)

Pastikan tools ini terpasang dan bisa dipanggil dari terminal:
- PHP `>= 8.2`
- Composer
- Node.js `>= 18` + npm
- (Opsional) MySQL/MariaDB jika tidak memakai SQLite

> Catatan terminal: di workspace ini kamu pakai **Git Bash** (path format `/c/...`). Semua contoh perintah di bawah aman dipakai di Git Bash.

### Kondisi di PC kamu (hasil pengecekan)
- Node.js + npm: terdeteksi
- PHP: ada dari XAMPP di path `/c/xampp/php/php.exe` (perintah `php` belum masuk PATH Git Bash)
- Composer: belum terdeteksi sebagai command `composer` di Git Bash

Artinya:
- Untuk menjalankan Laravel dari Git Bash, gunakan `/c/xampp/php/php.exe` sebagai pengganti `php`.
- `composer install` tidak bisa dijalankan sampai Composer dipasang (opsional jika `vendor/` sudah ada dan kamu hanya ingin menjalankan aplikasi).

## 2) Lokasi Folder Project (WAJIB)

Sebelum menjalankan perintah apa pun, pastikan terminal berada di folder root project.

- Git Bash:
  - `cd /c/Users/HP/Documents/om_express/omekspress`

- PowerShell (opsional):
  - `cd C:\Users\HP\Documents\om_express\omekspress`

> Semua perintah di dokumen ini dijalankan dari folder root tersebut, kecuali jika disebutkan berbeda.

## 3) Step-by-step Menjalankan Project (Mode Lokal)

### Step A — Cek versi tools (diagnostik cepat)

**Path:** root project

Jalankan:
- `php -v` (jika `php` sudah ada di PATH)
- atau ` /c/xampp/php/php.exe -v` (untuk Git Bash di PC kamu)
- `composer -V` (jika Composer sudah terpasang)
- `node -v`
- `npm -v`

Jika ada yang “command not found”, install dulu tool yang belum ada.

### Step B — Install dependency

**Path:** root project

1) PHP dependency:
- `composer install`

Jika Composer belum ada, kamu bisa:
- Skip dulu langkah ini (kalau folder `vendor/` sudah ada), atau
- Install Composer for Windows, lalu buka ulang terminal dan jalankan `composer install`.

2) Frontend dependency:
- `npm install`

> Kalau sudah pernah install, perintah ini akan jauh lebih cepat.

### Step C — Setup file environment (.env)

**Path:** root project

Jika file `.env` belum ada:
- Git Bash: `cp .env.example .env`

Generate app key:
- `php artisan key:generate` (jika `php` sudah ada di PATH)
- atau `/c/xampp/php/php.exe artisan key:generate` (untuk Git Bash di PC kamu)

### Step D — Database (pilih salah satu: SQLite atau MySQL)

#### Opsi 1 (disarankan untuk lokal cepat): SQLite

**Path:** root project

1) Pastikan `.env` berisi:
- `DB_CONNECTION=sqlite`

2) Buat file database:
- `mkdir -p database`
- `touch database/database.sqlite`

3) Jalankan migrasi + seeder:
- `php artisan migrate:fresh --seed` (jika `php` sudah ada di PATH)
- atau `/c/xampp/php/php.exe artisan migrate:fresh --seed` (untuk Git Bash di PC kamu)

Seeder akan membuat akun default (lihat bagian Login di bawah).

#### Opsi 2: MySQL/MariaDB

**Path:** root project

1) Buat database kosong di MySQL (misal: `cargo_and_delivery`)

2) Ubah `.env` (contoh):
- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=cargo_and_delivery`
- `DB_USERNAME=root`
- `DB_PASSWORD=`

3) Jalankan migrasi + seeder:
- `php artisan migrate:fresh --seed` (jika `php` sudah ada di PATH)
- atau `/c/xampp/php/php.exe artisan migrate:fresh --seed` (untuk Git Bash di PC kamu)

### Step E — Jalankan aplikasi (dev)

**Path:** root project

Paling praktis (Laravel server + queue listen + log viewer + Vite sekaligus):
- `composer run dev` (butuh Composer)

Alternatif (pisah 2 terminal):
- Terminal 1: `php artisan serve` (jika `php` sudah ada di PATH)
- atau Terminal 1 (Git Bash PC kamu): `/c/xampp/php/php.exe artisan serve --host=127.0.0.1 --port=8000`
- Terminal 2: `npm run dev`

Catatan Vite:
- Agar bisa diakses dari browser lokal: `npm run dev -- --host 127.0.0.1 --port 5173`

Akses web:
- Jika pakai `php artisan serve`: biasanya `http://127.0.0.1:8000`

## 4) Login Default

Dari dokumentasi manual:
- Admin: `admin / admin`
- Driver:
  - `driver / driver`
  - `driver2 / driver`
  - `driver3 / driver`

Catatan penting:
- Akun driver terhubung ke data driver via `driver_id` (dibuat oleh seeder) supaya driver hanya melihat pengiriman yang ditugaskan ke dia.

## 5) Fitur yang Tersedia

### 5.1 Website Publik (Company Profile)
Definisi route publik ada di [routes/web.php](routes/web.php).
Fitur utamanya:
- Beranda `/`
- Profil perusahaan
- Syarat & ketentuan
- Visi misi (coming soon)
- Struktur organisasi (coming soon)
- Layanan
- Tracking (coming soon)
- Cek ongkir (coming soon)
- Cek resi (coming soon)
- Artikel (coming soon)
- Galeri (menampilkan gambar/video dari folder `public/assets2` dan/atau `public/assets` sesuai implementasi)

### 5.2 Sistem Admin
Ringkasan (detail ada di [MANUAL_BOOK.md](MANUAL_BOOK.md)):
- Dashboard statistik (pending / in_process / received / returned)
- Master data:
  - Products (hitung volume otomatis dari dimensi)
  - Trucks (kapasitas max weight & volume)
  - Drivers (data driver)
  - Cities (seed)
- Packages:
  - Buat package (customer, alamat, city)
  - Tambah/hapus item (berdasarkan product)
  - Hitung total berat & volume otomatis
  - Aturan: package hanya bisa diedit saat status `pending`
- Capacities:
  - Buat jadwal capacity (schedule + truck + driver)
  - Assign package (manual)
  - Bulk assign berdasarkan kota (otomatis berhenti jika kapasitas penuh)
  - Process capacity (status menjadi `in_process` dan tidak bisa diubah)
- Shipping:
  - Monitor pengiriman berjalan / selesai
  - Mark paket `received` / `returned`
  - Complete shipping
- Reports:
  - Lihat riwayat pengiriman completed
  - Detail statistik + print report

### 5.3 Sistem Driver
Ringkasan:
- Dashboard driver
- Shipping:
  - Lihat tugas yang ditugaskan ke driver tersebut
  - Update status per paket: `received` / `returned`
  - Complete shipping
- Reports:
  - Riwayat pengiriman, filter tanggal, detail statistik, print

### 5.4 API (Sanctum) — `/api/v1/*`
Definisi route API ada di [routes/api.php](routes/api.php).
- Auth: login/logout, user
- Dashboard stats
- CRUD: products, trucks, drivers, packages, capacities
- Shipping endpoints: list/detail, receive/return paket, complete shipping

## 6) Troubleshooting singkat

- Blank page / assets tidak load:
  - Pastikan `npm run dev` atau `composer run dev` berjalan.
- Error key:
  - Jalankan `php artisan key:generate` atau `/c/xampp/php/php.exe artisan key:generate`.
- Error migrate:
  - Pastikan DB sesuai `.env` dan file SQLite ada jika pakai SQLite.
- Setelah ubah `.env`:
  - Jalankan `php artisan config:clear`.
