# Scope Landingpage Company Profile

Dokumen ini menjelaskan batasan folder `landingpage-company-profile-source`.

## Yang Ikut Disalin

### Daftar file yang sama persis
File yang sudah disamakan isi dan perilakunya untuk scope landingpage company profile:

- `resources/views/home_company/`
- `app/Http/Controllers/HomeCompany/`
- `routes/web.php` untuk route publik company profile
- `public/assets/`
- `public/assets2/`
- `public/img/`
- `public/build/`

### Daftar file yang cuma pendukung runtime
File/folder ini tidak dipakai sebagai fitur landingpage, tetapi perlu agar project clone Laravel bisa jalan sendiri:

- `artisan`
- `.env`
- `.env.example`
- `.editorconfig`
- `.gitattributes`
- `.gitignore`
- `composer.json`
- `composer.lock`
- `package.json`
- `package-lock.json`
- `phpunit.xml`
- `postcss.config.js`
- `tailwind.config.js`
- `vite.config.js`
- `doc_client.md`
- `DOKUMEN_JALANKAN_DAN_FITUR.md`
- `MANUAL_BOOK.md`
- `app/`
- `bootstrap/`
- `config/`
- `database/` hanya sebagai placeholder Laravel (`.gitignore`)
- `public/`
- `resources/`
- `routes/`
- `storage/`
- `tests/`
- `vendor/`
- `app/Models/User.php`

### Bagian yang sudah dibersihkan dari clone
Folder atau file berikut sebelumnya ada di source, tetapi sekarang sudah dihapus dari clone karena bukan scope landingpage company profile:

- `app/Http/Controllers/Admin/`
- `app/Http/Controllers/Driver/`
- `app/Http/Controllers/Auth/`
- `app/Http/Controllers/Api/`
- `app/Http/Middleware/RoleMiddleware.php`
- `resources/views/admin/`
- `resources/views/driver/`
- `resources/views/auth/`
- `resources/views/components/`
- `resources/views/layouts/`
- `resources/views/welcome.blade.php`
- semua model internal selain `User.php`
- semua migration, seeder, dan factory internal
- `database/database.sqlite`

### Daftar file yang tidak ada di clone sebagai fitur penuh omekspress
Bagian ini adalah modul source asli yang ada di omekspress, tetapi tidak dijadikan target clone penuh karena di luar scope company profile:

- `app/Http/Controllers/Admin/`
- `app/Http/Controllers/Driver/`
- `resources/views/admin/`
- `resources/views/driver/`
- route admin dan driver di `routes/web.php`
- modul autentikasi login/logout di luar halaman publik company profile
- dashboard admin dan dashboard driver
- modul packages, products, trucks, drivers, capacities, shipping, reports, dan AJAX endpoints untuk operasi internal

## Yang Tidak Menjadi Scope

### Fitur di luar landingpage company profile
- Modul bisnis internal seperti admin panel dan driver panel
- Manajemen package, product, truck, driver, capacity, shipping, dan report
- Login/logout dan role-based dashboard di luar halaman publik
- AJAX endpoint internal untuk operasional admin
- Perubahan besar pada alur aplikasi inti di luar kebutuhan landingpage
- Rewrite ke framework lain seperti React/Vite full rewrite atau stack baru yang mengubah perilaku source

### Hal yang tidak diubah sebagai target utama
- Struktur project Laravel asli secara umum, selain kebutuhan clone terpisah
- Branding dan isi halaman lain di luar scope company profile
- Fitur tambahan yang tidak ada di source company profile

## Catatan

Project ini dibuat sebagai clone Laravel terpisah untuk landingpage company profile. Jadi:

- Untuk scope company profile, isi halaman dan asset yang dipakai sudah disamakan dengan source.
- Untuk seluruh codebase Laravel, project ini tidak ditujukan sebagai salinan penuh semua modul `omekspress`.

## Ringkasan Paling Sederhana

Kalau diringkas ke satu kalimat:

- Yang sama persis adalah halaman publik company profile beserta asset yang dipakai.
- Yang cuma pendukung adalah file Laravel minimum supaya project bisa jalan sendiri.
- Yang sudah dibersihkan dari clone adalah modul admin, driver, auth, API, model internal, dan migration internal omekspress.