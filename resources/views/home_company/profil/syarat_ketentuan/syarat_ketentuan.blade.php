@extends('home_company.layouts.main')

@section('title', 'Syarat dan Ketentuan')

@section('content')
<!-- Hero Section - JNE Style -->
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); padding: 5rem 0 4rem; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; inset: 0; opacity: 0.05;">
        <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: repeating-linear-gradient(45deg, white 0, white 1px, transparent 1px, transparent 50px);"></div>
    </div>

    <!-- Decorative Elements -->
    <div style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; background: rgba(37, 150, 190, 0.1); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: 30%; left: 5%; width: 60px; height: 60px; background: rgba(255, 215, 0, 0.1); border-radius: 50%;"></div>

    <div style="position: relative; max-width: 1280px; margin: 0 auto; padding: 0 1rem; text-align: center;">
        <span style="display: inline-block; background: rgba(37, 150, 190, 0.2); color: #2596be; padding: 0.5rem 1.25rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem; letter-spacing: 0.05em;">
            <i class="fas fa-file-contract" style="margin-right: 0.5rem;"></i>KETENTUAN
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.1;">Syarat dan Ketentuan</h1>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.85); max-width: 600px; margin: 0 auto 1.5rem;">Pengiriman Barang di OMEXPRESS</p>
        <nav style="display: flex; justify-content: center; margin-top: 1.5rem;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; display: flex; align-items: center;" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.7)';"><i class="fas fa-home" style="margin-right: 0.5rem;"></i>Beranda</a></li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: rgba(255,255,255,0.7);">Profil</li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: #ffffff; font-weight: 600;">Syarat dan Ketentuan</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section style="padding: 5rem 1rem; background: #ffffff;">
    <div style="max-width: 900px; margin: 0 auto;">

        <!-- Article Header -->
        <div style="margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; gap: 1.5rem; color: #666666; font-size: 0.9rem; margin-bottom: 1rem;">
                <span style="display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-calendar-alt" style="color: #2596be;"></i>{{ date('d F Y') }}</span>
                <span style="display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-user" style="color: #2596be;"></i>Admin</span>
            </div>
        </div>

        <!-- Banner Image -->
        <div style="margin-bottom: 3rem; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,31,92,0.15);">
            <div style="background: linear-gradient(135deg, #001f5c 0%, #001847 100%); padding: 3.5rem 2.5rem; text-align: center; position: relative;">
                <div style="position: absolute; right: 2rem; top: 50%; transform: translateY(-50%); opacity: 0.1;">
                    <i class="fas fa-file-contract" style="font-size: 10rem; color: white;"></i>
                </div>
                <h2 style="color: #ffffff; font-size: 2rem; font-weight: 800; line-height: 1.4; position: relative; z-index: 1;">
                    SYARAT DAN KETENTUAN<br>
                    PENGIRIMAN BARANG<br>
                    <span style="background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); color: #ffffff; padding: 0.625rem 2rem; display: inline-block; margin-top: 1.25rem; border-radius: 4px; font-size: 1.25rem;">DI OMEXPRESS</span>
                </h2>
            </div>
        </div>

        <!-- Main Title -->
        <h2 style="font-size: 1.5rem; font-weight: 800; color: #001f5c; margin-bottom: 2.5rem; line-height: 1.5;">
            Syarat dan Ketentuan Pengiriman Barang di OMEXPRESS Yang Kamu Harus Tahu :
        </h2>

        <!-- Terms Content -->
        <div style="color: #374151; line-height: 1.9;">

            <!-- Point 1 -->
            <div style="margin-bottom: 2.5rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 2rem; border-radius: 12px; border-left: 4px solid #001f5c;">
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #001f5c; margin-bottom: 1rem;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: #2596be; color: white; border-radius: 50%; font-size: 0.85rem; margin-right: 0.75rem;">1</span>
                    Isi kiriman merupakan tanggung jawab pihak pengirim sepenuhnya
                </h3>
                <p style="margin-bottom: 1rem; color: #555555;">Pengirim dilarang memasukkan kedalam kemasan titipan barang-barang sebagai berikut:</p>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Uang tunai (dalam bentuk mata uang manapun), surat-surat berharga (Cek, Bilyet, Giro, Saham, Sertifikat, Ijazah dan sejenisnya), arloji, perhiasan logam dan sejenisnya</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Surat Pos, Warkat Pos, Kartu Pos</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Barang-barang yang mudah meledak, berbahaya, beracun atau dapat merusak barang lainnya</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Narkotika, Ganja atau barang sejenis obat terlarang lainnya</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Barang cetak, rekaman dan barang lainnya yang dapat mengganggu ketertiban umum</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <i class="fas fa-times-circle" style="color: #2596be; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Barang ilegal yang melanggar ketentuan perundangan-undangan untuk dikirim diwilayah surat ijin/ lampiran dan instansi terkait</span>
                    </li>
                </ul>
            </div>

            <!-- Point 2 -->
            <div style="margin-bottom: 2.5rem; padding: 1.5rem 0; border-bottom: 1px solid #e5e7eb;">
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #001f5c; margin-bottom: 0.75rem;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: #2596be; color: white; border-radius: 50%; font-size: 0.85rem; margin-right: 0.75rem;">2</span>
                    Tanggung Jawab Isi Kiriman
                </h3>
                <p style="color: #555555; padding-left: 2.5rem;">
                    Isi kiriman yang tidak sesuai dengan keterangan yang diberikan merupakan tanggung jawab pengirim dan suatu pelanggaran yang dapat dituntut melalui jalur hukum yang berlaku. Terhadap kiriman yang dicurigai pengemasan berhak melakukan pemeriksaan sesuai dengan ketentuan perundangan yang berlaku di Indonesia.
                </p>
            </div>

            <!-- Point 3 -->
            <div style="margin-bottom: 2.5rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 2rem; border-radius: 12px; border-left: 4px solid #001f5c;">
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #001f5c; margin-bottom: 1rem;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: #2596be; color: white; border-radius: 50%; font-size: 0.85rem; margin-right: 0.75rem;">3</span>
                    Pengangkut tidak bertanggung jawab atas hal-hal sebagai berikut:
                </h3>
                <ul style="list-style: none; padding-left: 0;">
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Semua resiko teknis yang terjadi selama dalam pengangkutan, yang menyebabkan barang kiriman tidak berfungsi atau berkurang fungsinya</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Keterlambatan penyampaian kiriman ke kota tujuan yang diakibatkan oleh keadaan memaksa</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Penyitaan, perang serta pemusnahan terhadap suatu kiriman oleh Instansi Pemerintah terkait</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Tuntutan dalam bentuk apapun setelah (1 satu) bulan terhitung tanggal pengiriman</span>
                    </li>
                    <li style="margin-bottom: 0.625rem; display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Kekeliruan, kerusakan atau kehilangan yang diakibatkan oleh force majeure</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <i class="fas fa-exclamation-triangle" style="color: #FFD700; margin-right: 0.75rem; margin-top: 0.25rem;"></i>
                        <span>Kebocoran, kerusakan untuk jenis pengiriman barang cair, pecah belah, makanan tanpa packing sesuai standar</span>
                    </li>
                </ul>
            </div>

            <!-- Point 4 -->
            <div style="margin-bottom: 2.5rem; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); padding: 2rem; border-radius: 12px; color: white;">
                <h3 style="font-size: 1.05rem; font-weight: 700; color: white; margin-bottom: 1rem; display: flex; align-items: flex-start;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: white; color: #2596be; border-radius: 50%; font-size: 0.85rem; margin-right: 0.75rem; flex-shrink: 0;">4</span>
                    Kebijakan Penggantian
                </h3>
                <p style="color: rgba(255,255,255,0.95); margin-bottom: 1rem;">
                    Bilamana terjadi kerusakan, kehancuran atau kehilangan atas barang kiriman, OMEXPRESS memberikan kebijaksanaan penggantian maksimum <strong>10 (sepuluh) kali biaya pengiriman</strong> untuk barang yang rusak, kurang atau hilang saja.
                </p>
                <div style="background: rgba(255,255,255,0.15); padding: 1rem; border-radius: 8px;">
                    <p style="font-weight: 600; margin-bottom: 0.5rem; color: white;">
                        <i class="fas fa-info-circle" style="margin-right: 0.5rem;"></i>
                        Klaimasi terkait harus dilengkapi dengan:
                    </p>
                    <ul style="list-style: none; padding-left: 0; margin: 0;">
                        <li style="margin-bottom: 0.375rem; display: flex; align-items: flex-start; color: rgba(255,255,255,0.95);">
                            <i class="fas fa-check" style="margin-right: 0.5rem; margin-top: 0.25rem;"></i>
                            <span>Surat Berita Acara kerusakan/ kehilangan yang ditanda tangani</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; color: rgba(255,255,255,0.95);">
                            <i class="fas fa-check" style="margin-right: 0.5rem; margin-top: 0.25rem;"></i>
                            <span>Dokumen pendukung: faktur, kwitansi, bukti tanda terima asli</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Points 5-9 -->
            @php
            $points = [
                ['num' => 5, 'title' => 'Penyelesaian Klaim', 'content' => 'Semua klaim diselesaikan oleh kantor kirim perusahaan dengan pihak customer, pengajuan klaim tersebut harus dilengkapi dengan Surat Berita Acara dan dokumen pendukung yang valid.'],
                ['num' => 6, 'title' => 'Ongkos Kirim Tagih Tujuan', 'content' => 'Jika ongkos kirim tagih tujuan dan pihak penerima tidak mau membayar maka, pihak pengirim harus membayar untuk ongkos kirim tersebut. Untuk fasilitas ini customer harus mengisi Form tagih tujuan.'],
                ['num' => 7, 'title' => 'Bukti Tanda Terima', 'content' => 'Setiap barang titipan yang akan dikirim ke tujuan harus didaftarkan dan diberi Bukti Tanda Terima (BTT) melalui akses serah terima di gudang penerimaan barang OMEXPRESS.'],
                ['num' => 8, 'title' => 'Data Pengiriman', 'content' => 'Pihak customer pengirim harus memberikan data yang lengkap seperti: alamat pengirim/ penerima dan nomor telepon pengirim/ penerima atau isi barang kiriman tersebut.'],
                ['num' => 9, 'title' => 'Perubahan Data', 'content' => 'Perubahan data pengirim dan pembatalan hanya bisa dilakukan di hari yang sama saat barang dikirim (maksimal pukul 17.00 waktu setempat).'],
            ];
            @endphp

            @foreach($points as $point)
            <div style="margin-bottom: 2rem; padding: 1.5rem 0; border-bottom: 1px solid #e5e7eb;">
                <h3 style="font-size: 1.05rem; font-weight: 700; color: #001f5c; margin-bottom: 0.75rem;">
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 28px; height: 28px; background: #2596be; color: white; border-radius: 50%; font-size: 0.85rem; margin-right: 0.75rem;">{{ $point['num'] }}</span>
                    {{ $point['title'] }}
                </h3>
                <p style="color: #555555; padding-left: 2.5rem;">{{ $point['content'] }}</p>
            </div>
            @endforeach

        </div>

        <!-- Footer Note -->
        <div style="margin-top: 3rem; padding: 2.5rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 16px; text-align: center; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2596be 0%, #001f5c 100%);"></div>
            <p style="color: #555555; line-height: 1.9; margin-bottom: 1.5rem; font-size: 1.05rem;">
                Demikian ketentuan tata cara dan syarat-syarat pengiriman yang berlaku di PT. Perisai Cakrawala Indonesia (OMEXPRESS) untuk dapat dipatuhi dan dijadikan pedoman. Atas perhatian dan kerja sama semua pihak, kami atas nama PT. Perisai Cakrawala Indonesia (OMEXPRESS) mengucapkan terima kasih.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-top: 2rem;">
                <a href="{{ route('kontak') }}" class="btn-jne-red">
                    <i class="fas fa-phone-alt"></i> Hubungi Kami
                </a>
                <a href="{{ route('home') }}" class="btn-jne-outline">
                    <i class="fas fa-home"></i> Kembali ke Beranda
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
