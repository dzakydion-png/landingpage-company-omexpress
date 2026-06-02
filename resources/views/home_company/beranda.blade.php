@extends('home_company.layouts.main')

@section('title', 'Beranda')

@section('content')
<!-- Hero Video Section -->
<section id="hero-section" style="position: relative; height: 100vh; overflow: hidden;">
    <!-- Video Background -->
    <video autoplay muted loop playsinline style="position: absolute; top: 50%; left: 50%; min-width: 100%; min-height: 100%; width: auto; height: auto; transform: translate(-50%, -50%); object-fit: cover; z-index: 1;">
        <source src="https://res.cloudinary.com/dbsrkdji8/video/upload/v1780236174/FILPEN_OKI_-_revisi_retake_1_kg4x4s.mp4" type="video/mp4">
    </video>


    <!-- Hero Content -->
    <div style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem; width: 100%;">
            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <h1 style="font-size: 3.5rem; font-weight: 800; color: #ffffff; margin-bottom: 1.5rem; line-height: 1.15;">
                    <span class="hero-text">Menyambung</span>
                    <span class="hero-text">Kebahagiaan dari</span>
                    <span class="hero-text">Generasi ke Generasi</span>
                </h1>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <a href="{{ route('tracking') }}" class="btn-jne-red" style="padding: 1rem 2rem; font-size: 1.05rem;">
                        <i class="fas fa-search"></i> Lacak Pengiriman
                    </a>
                    <a href="{{ route('cek_ongkir') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; background: transparent; color: white; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1.05rem; border: 2px solid rgba(255,255,255,0.5);" onmouseover="this.style.background='white'; this.style.color='#001f5c';" onmouseout="this.style.background='transparent'; this.style.color='white';">
                        <i class="fas fa-calculator"></i> Cek Ongkir
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Quick Services Section -->
{{-- <section style="padding: 0 0 4rem; background: #ffffff; margin-top: -2rem; position: relative; z-index: 5;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-top: -5rem;">
            @php
            $quickServices = [
                ['icon' => 'fa-truck-moving', 'title' => 'Cargo Darat', 'desc' => 'Pengiriman via jalur darat', 'color' => '#2596be'],
                ['icon' => 'fa-ship', 'title' => 'Cargo Laut', 'desc' => 'Pengiriman via jalur laut', 'color' => '#001f5c'],
                ['icon' => 'fa-plane', 'title' => 'Cargo Udara', 'desc' => 'Pengiriman via jalur udara', 'color' => '#FFD700'],
                ['icon' => 'fa-home', 'title' => 'Pindahan', 'desc' => 'Jasa pindahan rumah/kantor', 'color' => '#25D366'],
            ];
            @endphp
            @foreach($quickServices as $service)
            <div class="jne-card hover-card" style="padding: 2rem; text-align: center; background: white; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: {{ $service['color'] }};"></div>
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, {{ $service['color'] }}20, {{ $service['color'] }}10); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem;">
                    <i class="fas {{ $service['icon'] }}" style="font-size: 1.75rem; color: {{ $service['color'] }};"></i>
                </div>
                <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ $service['title'] }}</h3>
                <p style="font-size: 0.875rem; color: #666666;">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

{{-- Penghargaan (Awards) Section - Slider - HIDDEN
<section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Pencapaian Kami</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Penghargaan</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Kepercayaan pelanggan adalah pencapaian terbesar kami</p>
        </div>

        <!-- Awards Slider -->
        <div style="position: relative;">
            <div class="awards-slider" style="overflow: hidden;">
                <div class="awards-track" style="display: flex; transition: transform 0.5s ease;">
                    @php
                    $awards = [
                        ['year' => '2024', 'title' => 'Best Cargo Service', 'org' => 'Indonesia Logistics Award', 'img' => 'award_1.jpg'],
                        ['year' => '2023', 'title' => 'Customer Choice', 'org' => 'Transport Excellence', 'img' => 'award_2.jpg'],
                        ['year' => '2022', 'title' => 'Top Performer', 'org' => 'Logistics Indonesia', 'img' => 'award_3.jpg'],
                        ['year' => '2021', 'title' => 'Service Excellence', 'org' => 'Business Award', 'img' => 'award_4.jpg'],
                        ['year' => '2020', 'title' => 'Trusted Brand', 'org' => 'Consumer Award', 'img' => 'award_5.jpg'],
                    ];
                    @endphp
                    @foreach($awards as $index => $award)
                    <div class="award-slide" style="min-width: 33.333%; padding: 0 1rem; box-sizing: border-box;">
                        <div class="jne-card hover-card" style="background: white; border-radius: 12px; overflow: hidden;">
                            <!-- Award Image - Landscape/Rectangle -->
                            <div style="height: 180px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); position: relative; overflow: hidden;">
                                <img src="{{ asset('assets/awards/' . $award['img']) }}" alt="{{ $award['title'] }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'">
                                <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,31,92,0.9) 0%, transparent 60%);"></div>
                                <div style="position: absolute; top: 1rem; left: 1rem; background: #FFD700; color: #001f5c; padding: 0.375rem 0.875rem; border-radius: 4px; font-size: 0.8rem; font-weight: 700;">
                                    {{ $award['year'] }}
                                </div>
                                <div style="position: absolute; bottom: 1rem; right: 1rem;">
                                    <i class="fas fa-trophy" style="font-size: 2.5rem; color: #FFD700; opacity: 0.8;"></i>
                                </div>
                            </div>
                            <!-- Award Info -->
                            <div style="padding: 1.5rem; text-align: center;">
                                <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ $award['title'] }}</h3>
                                <p style="font-size: 0.85rem; color: #666666;">{{ $award['org'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Slider Navigation -->
            <button class="award-prev" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 20px rgba(0,0,0,0.15); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s;" onmouseover="this.style.background='#2596be'; this.querySelector('i').style.color='white';" onmouseout="this.style.background='white'; this.querySelector('i').style.color='#001f5c';">
                <i class="fas fa-chevron-left" style="color: #001f5c; font-size: 1rem;"></i>
            </button>
            <button class="award-next" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 20px rgba(0,0,0,0.15); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s;" onmouseover="this.style.background='#2596be'; this.querySelector('i').style.color='white';" onmouseout="this.style.background='white'; this.querySelector('i').style.color='#001f5c';">
                <i class="fas fa-chevron-right" style="color: #001f5c; font-size: 1rem;"></i>
            </button>
        </div>
    </div>
</section>
--}}

<!-- Apa Kata Mereka (Testimonials) Section - Single Slider -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div class="testimonial-grid">
            <!-- Left - Badge -->
            <div class="badge-container">
                <div class="badge-wrapper">
                    <!-- Anniversary Badge -->
                    <div class="anniversary-badge">
                        <div class="badge-pattern"></div>
                        <div class="badge-content">
                            <span class="badge-number">10+</span>
                            <span class="badge-label">Tahun</span>
                            <span class="badge-sublabel">Melayani Indonesia</span>
                        </div>
                        <!-- Animated ring -->
                        <div class="badge-ring"></div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="badge-star">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="badge-dot badge-dot-1"></div>
                    <div class="badge-dot badge-dot-2"></div>
                </div>
                <!-- Stats below badge on mobile -->
                <div class="badge-stats">
                    <div class="badge-stat">
                        <i class="fas fa-truck"></i>
                        <span>50K+ Pengiriman</span>
                    </div>
                    <div class="badge-stat">
                        <i class="fas fa-smile"></i>
                        <span>99% Kepuasan</span>
                    </div>
                </div>
            </div>

            <!-- Right - Testimonial Slider -->
            <div class="testimonial-content">
                <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Testimoni</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; margin-bottom: 2rem; line-height: 1.2;">Apa Kata Mereka</h2>

                <!-- Testimonial Slider - Single View -->
                <div class="testimonial-slider" style="position: relative;">
                    <div class="testimonial-container" style="overflow: hidden;">
                        @php
                        $testimonials = [
                            ['name' => 'Budi Santoso', 'role' => 'Pelanggan', 'text' => 'Kerjasama dengan OMEXPRESS sangat memuaskan. Sistem integrasi yang seamless dan pelayanan yang profesional membuat proses pengiriman menjadi lebih efisien.', 'rating' => 5],
                            ['name' => 'Siti Aminah', 'role' => 'Pelanggan', 'text' => 'OMEXPRESS adalah mitra yang dapat diandalkan. Koordinasi tim yang baik dan tracking real-time sangat membantu operasional pengiriman kami.', 'rating' => 5],
                            ['name' => 'Agus Wijaya', 'role' => 'Pelanggan', 'text' => 'Bermitra dengan OMEXPRESS memberikan pengalaman yang luar biasa. Armada yang terawat dan tim yang responsif membuat pengiriman cargo selalu tepat waktu.', 'rating' => 5],
                            ['name' => 'Dewi Lestari', 'role' => 'Pelanggan', 'text' => 'OMEXPRESS menunjukkan profesionalisme tinggi dalam setiap pengiriman. Jangkauan luas dan layanan customer service yang excellent menjadi nilai tambah kerjasama kami.', 'rating' => 5],
                        ];
                        @endphp
                        @foreach($testimonials as $index => $testi)
                        <div class="testimonial-slide" style="display: {{ $index === 0 ? 'block' : 'none' }}; animation: fadeIn 0.5s ease; padding-top: 1rem;">
                            <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 2rem 2rem 2rem 2rem; border-radius: 16px; border-left: 4px solid #2596be; position: relative; overflow: visible;">
                                <!-- Quote Icon -->
                                <div style="position: absolute; top: -15px; left: 2rem; width: 40px; height: 40px; background: #2596be; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 1;">
                                    <i class="fas fa-quote-left" style="color: white; font-size: 1rem;"></i>
                                </div>
                                <!-- Rating -->
                                <div style="display: flex; gap: 0.25rem; margin-bottom: 1rem; margin-top: 0.75rem;">
                                    @for($i = 0; $i < $testi['rating']; $i++)
                                    <i class="fas fa-star" style="color: #FFD700; font-size: 1rem;"></i>
                                    @endfor
                                </div>
                                <!-- Testimonial Text -->
                                <p style="color: #555555; font-style: italic; line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;"><span style="font-size: 1.5rem; color: #2596be; font-weight: 700; margin-right: 0.25rem;">"</span>{{ $testi['text'] }}<span style="font-size: 1.5rem; color: #2596be; font-weight: 700; margin-left: 0.25rem;">"</span></p>
                                <!-- Author -->
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <div>
                                        <div style="font-weight: 700; color: #001f5c; font-size: 1.05rem;">{{ $testi['name'] }}</div>
                                        <div style="font-size: 0.85rem; color: #666666;">{{ $testi['role'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Slider Dots -->
                    <div style="display: flex; justify-content: center; gap: 0.5rem; margin-top: 1.5rem;">
                        @foreach($testimonials as $index => $testi)
                        <button class="testi-dot" data-index="{{ $index }}" style="width: 12px; height: 12px; border-radius: 50%; border: none; cursor: pointer; transition: all 0.3s; background: {{ $index === 0 ? '#2596be' : '#e5e7eb' }};"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Partners Section -->
<section style="padding: 4rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Mitra Pengiriman</span>
            <h2 style="font-size: 2rem; font-weight: 800; color: #001f5c; margin-top: 0.5rem; line-height: 1.2;">Partner Logistik Kami</h2>
            <p style="color: #666666; max-width: 500px; margin: 0.75rem auto 0; font-size: 0.95rem;">Bekerja sama dengan perusahaan logistik terpercaya di Indonesia</p>
        </div>

        <!-- Partners Logo Grid -->
        <div class="logo-marquee-container" style="overflow: hidden; width: 100%; padding: 20px 0;">
    <div class="logo-track" style="display: flex; gap: 40px; animation: scroll 40s linear infinite; width: max-content;">
        @php
        $partners = [
            ['name' => 'JNE', 'img' => 'jne.jpg'],
            ['name' => 'JNE Express', 'img' => 'jne_express.jpg'],
            ['name' => 'J&T Express', 'img' => 'jnt.jpg'],
            ['name' => 'Lion Parcel', 'img' => 'lion_parcel.png'],
            ['name' => 'Pos Indonesia', 'img' => 'posind.jpg'],
        ];
        @endphp
        
        {{-- List logo (diulang 2x agar animasi mulus tanpa jeda) --}}
        @for($i = 0; $i < 5; $i++)
            @foreach($partners as $partner)
            <div class="partner-card" style="background: white; padding: 1.5rem 2rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); text-align: center; min-width: 180px; flex: 0 0 auto;">
                <div style="height: 60px; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('assets/' . $partner['img']) }}" alt="{{ $partner['name'] }}" style="max-height: 55px; max-width: 130px; object-fit: contain;">
                </div>
            </div>
            @endforeach
        @endfor
    </div>
</div>
    </div>
</section>

<!-- Waspada (Warning) Section -->
<section style="padding: 3rem 0; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 2rem;">
            <div style="display: flex; align-items: center; gap: 1.5rem;">
                <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 2rem; color: #FFD700;"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: white; margin-bottom: 0.25rem;">Waspada!</h3>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1rem;">Waspada terhadap penipuan mengatasnamakan OMEXPRESS. Selalu verifikasi melalui channel resmi kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Promo Terkini Section - HIDDEN
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2.5rem;">
            <div>
                <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Penawaran Spesial</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.5rem; line-height: 1.2;">Promo Terkini</h2>
            </div>
            <a href="#" style="display: inline-flex; align-items: center; gap: 0.5rem; color: #001f5c; text-decoration: none; font-weight: 600; transition: color 0.3s;" onmouseover="this.style.color='#2596be';" onmouseout="this.style.color='#001f5c';">
                Lihat Semua <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            @php
            $promos = [
                ['title' => 'Diskon 20% Cargo Darat', 'desc' => 'Untuk pengiriman ke Jawa & Sumatera', 'valid' => 'Hingga 31 Jan 2026', 'color' => '#2596be'],
                ['title' => 'Gratis Packing Kayu', 'desc' => 'Untuk pengiriman barang elektronik', 'valid' => 'Hingga 28 Feb 2026', 'color' => '#001f5c'],
                ['title' => 'Cashback 15%', 'desc' => 'Untuk pelanggan baru', 'valid' => 'Hingga 15 Jan 2026', 'color' => '#25D366'],
            ];
            @endphp
            @foreach($promos as $promo)
            <div class="jne-card hover-card" style="overflow: hidden;">
                <div style="background: {{ $promo['color'] }}; padding: 2rem; color: white; position: relative; overflow: hidden;">
                    <div style="position: absolute; right: -20px; top: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                    <span style="display: inline-block; background: rgba(255,255,255,0.2); padding: 0.375rem 0.875rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600; margin-bottom: 1rem;">PROMO</span>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">{{ $promo['title'] }}</h3>
                    <p style="font-size: 0.9rem; opacity: 0.9;">{{ $promo['desc'] }}</p>
                </div>
                <div style="padding: 1.25rem; background: white; display: flex; align-items: center; justify-content: space-between;">
                    <span style="font-size: 0.8rem; color: #666666;"><i class="fas fa-clock" style="margin-right: 0.5rem; color: #2596be;"></i>{{ $promo['valid'] }}</span>
                    <a href="#" style="color: #001f5c; font-weight: 600; text-decoration: none; font-size: 0.875rem;" onmouseover="this.style.color='#2596be';" onmouseout="this.style.color='#001f5c';">
                        Detail <i class="fas fa-chevron-right" style="font-size: 0.7rem;"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
--}}

<!-- Produk & Layanan Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Solusi Lengkap</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Produk & Layanan</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Berbagai pilihan layanan pengiriman untuk memenuhi kebutuhan Anda</p>
        </div>

        <div class="services-grid">
            @php
            $services = [
                [
                    'icon' => 'fa-plane',
                    'title' => 'Layanan Udara',
                    'desc' => 'Pengiriman cepat via udara untuk paket dengan berat minimum 1 kg ke seluruh Indonesia',
                    'features' => ['Minimum 1 kg', 'Pengiriman cepat', 'Jangkauan nasional'],
                    'color' => '#2596be',
                    'badge' => 'Tercepat',
                    'badge_icon' => 'fa-bolt',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Layanan Udara* untuk pengiriman cepat. Mohon informasi lebih lanjut mengenai:%0A- Tarif pengiriman%0A- Estimasi waktu%0A- Jangkauan area%0A%0ATerima kasih!'
                ],
                [
                    'icon' => 'fa-truck-moving',
                    'title' => 'Layanan Darat',
                    'desc' => 'Pengiriman cargo via jalur darat dengan berat minimum 10 kg, ekonomis dan terpercaya',
                    'features' => ['Minimum 10 kg', 'Harga ekonomis', 'Tracking online'],
                    'color' => '#25D366',
                    'badge' => 'Ekonomis',
                    'badge_icon' => 'fa-tags',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Layanan Darat* untuk pengiriman cargo. Mohon informasi lebih lanjut mengenai:%0A- Tarif per kg%0A- Estimasi waktu pengiriman%0A- Minimum berat pengiriman%0A%0ATerima kasih!'
                ],
                [
                    'icon' => 'fa-plane-departure',
                    'title' => 'Cargo Udara',
                    'desc' => 'Layanan cargo udara untuk pengiriman barang dalam jumlah besar dengan waktu cepat',
                    'features' => ['Kapasitas besar', 'Waktu cepat', 'Aman & terpercaya'],
                    'color' => '#9333ea',
                    'badge' => 'Kapasitas Besar',
                    'badge_icon' => 'fa-boxes',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Cargo Udara* untuk pengiriman barang dalam jumlah besar. Mohon informasi lebih lanjut mengenai:%0A- Kapasitas maksimal%0A- Tarif cargo%0A- Prosedur pengiriman%0A%0ATerima kasih!'
                ],
                [
                    'icon' => 'fa-warehouse',
                    'title' => 'Maklon Logistic',
                    'desc' => 'Buka Usaha Jasa Logistik Sendiri, Cukup 100 Ribu',
                    'features' => ['Tim Operasional, Ready', 'Pulau Jawa dan Luar Pulau Jawa', 'Cocok untuk pemula maupun yang sudah punya usaha logistik'],
                    'color' => '#f59e0b',
                    'badge' => 'Peluang Bisnis',
                    'badge_icon' => 'fa-star',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Maklon Logistic* untuk membuka usaha jasa logistik. Mohon informasi lebih lanjut mengenai:%0A- Syarat dan ketentuan%0A- Modal yang dibutuhkan%0A- Sistem kerjasama%0A- Wilayah operasional%0A%0ATerima kasih!'
                ],
            ];
            @endphp
            @foreach($services as $index => $svc)
            <a href="https://wa.me/6281180892925?text={{ $svc['wa_message'] }}" target="_blank" class="service-card-link" style="text-decoration: none; display: block;">
                <div class="jne-card hover-card service-card" style="padding: 2rem; background: white; position: relative; overflow: hidden; height: 100%; cursor: pointer; transition: all 0.3s ease;">
                    <!-- Badge Ribbon -->
                    <div class="service-badge" style="position: absolute; top: 12px; right: -35px; background: {{ $svc['color'] }}; color: white; padding: 0.35rem 2.5rem; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; transform: rotate(45deg); box-shadow: 0 2px 10px rgba(0,0,0,0.15); z-index: 2;">
                        <i class="fas {{ $svc['badge_icon'] }}" style="margin-right: 0.25rem;"></i>{{ $svc['badge'] }}
                    </div>

                    <!-- Pulse indicator -->
                    <div class="pulse-indicator" style="position: absolute; top: 1rem; left: 1rem; z-index: 2;">
                        <span class="ping-dot" style="position: absolute; display: inline-flex; width: 10px; height: 10px; border-radius: 50%; background: {{ $svc['color'] }}; opacity: 0.75; animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;"></span>
                        <span style="display: inline-flex; width: 10px; height: 10px; border-radius: 50%; background: {{ $svc['color'] }};"></span>
                    </div>

                    <!-- Top accent line -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: {{ $svc['color'] }};"></div>

                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; margin-top: 0.5rem;">
                        <i class="fas {{ $svc['icon'] }}" style="font-size: 1.5rem; color: white;"></i>
                    </div>
                    <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.75rem; font-size: 1.25rem;">{{ $svc['title'] }}</h3>
                    <p style="font-size: 0.9rem; color: #666666; line-height: 1.7; margin-bottom: 1.25rem;">{{ $svc['desc'] }}</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0;">
                        @foreach($svc['features'] as $feature)
                        <li style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: #555555; margin-bottom: 0.5rem;">
                            <i class="fas fa-check-circle" style="color: #25D366; font-size: 0.75rem;"></i>{{ $feature }}
                        </li>
                        @endforeach
                    </ul>

                    <!-- WhatsApp CTA Button -->
                    <div class="wa-cta" style="display: flex; align-items: center; gap: 0.5rem; padding: 0.75rem 1rem; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); color: white; border-radius: 8px; font-weight: 600; font-size: 0.85rem; transition: all 0.3s; margin-top: auto;">
                        <i class="fab fa-whatsapp" style="font-size: 1.1rem;"></i>
                        <span>Hubungi Kami</span>
                        <i class="fas fa-arrow-right" style="margin-left: auto; font-size: 0.75rem; transition: transform 0.3s;"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('layanan') }}" class="btn-jne-red" style="padding: 1rem 2.5rem;">
                <i class="fas fa-arrow-right"></i> Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

<!-- Mengapa Memilih Kami Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Keunggulan Kami</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; margin-bottom: 1.5rem; line-height: 1.2;">Mengapa Memilih OMEXPRESS?</h2>
                <p style="color: #555555; line-height: 1.9; margin-bottom: 2.5rem; font-size: 1.05rem;">
                    Kami berkomitmen untuk memberikan pelayanan terbaik dengan armada modern, tim profesional, dan sistem tracking real-time untuk setiap pengiriman Anda.
                </p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    @php
                    $features = [
                        ['icon' => 'fa-shield-alt', 'title' => 'Aman & Terpercaya', 'desc' => 'Garansi keamanan barang'],
                        ['icon' => 'fa-clock', 'title' => 'Tepat Waktu', 'desc' => 'Pengiriman sesuai estimasi'],
                        ['icon' => 'fa-map-marked-alt', 'title' => 'Jangkauan Luas', 'desc' => '500+ kota di Indonesia'],
                        ['icon' => 'fa-headset', 'title' => 'Support 24/7', 'desc' => 'Customer service siap membantu'],
                    ];
                    @endphp
                    @foreach($features as $feat)
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas {{ $feat['icon'] }}" style="color: white;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 0.25rem; font-size: 1rem;">{{ $feat['title'] }}</h4>
                            <p style="font-size: 0.85rem; color: #666666;">{{ $feat['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div style="position: relative;">
                <img src="{{ asset('assets/FOTO DEPAN GUDANG PNG.png') }}" alt="OMEXPRESS Service" style="border-radius: 16px; box-shadow: 0 25px 60px rgba(0,0,0,0.15); width: 100%;" onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600&q=80'">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; inset: 0; opacity: 0.05;">
        <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: repeating-linear-gradient(45deg, white 0, white 1px, transparent 1px, transparent 50px);"></div>
    </div>

    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem; text-align: center; position: relative;">
        <span style="display: inline-block; background: rgba(37, 150, 190, 0.2); color: #2596be; padding: 0.5rem 1.25rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem;">
            <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>SIAP MENGIRIM?
        </span>
        <h2 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.2;">Kirim Barang Anda Sekarang</h2>
        <p style="font-size: 1.125rem; color: rgba(255,255,255,0.85); margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.8;">
            Dapatkan penawaran terbaik untuk kebutuhan pengiriman cargo Anda. Tim kami siap membantu 24/7.
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
            <a href="{{ route('cek_ongkir') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2.5rem; background: white; color: #001f5c; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1.05rem;" onmouseover="this.style.background='#FFD700'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='white'; this.style.transform='translateY(0)';">
                <i class="fas fa-calculator"></i>Cek Tarif Ongkir
            </a>
        </div>
    </div>
</section>

<style>
/* Fade In Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Ping Animation for Pulse Indicator */
@keyframes ping {
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
}
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        /* Geser tepat 50% dari total track agar transisi ke copy-an logo berikutnya mulus */
        transform: translateX(-50%);
    }
}

/* Opsional: Berhenti saat di-hover */
.logo-track:hover {
    display: flex;
    gap: 40px; 
    animation: scroll 40s linear infinite; /* Kuncinya ada di 'linear' */
    width: max-content;
    will-change: transform;
}
.logo-track {
    will-change: transform;
}

/* Services Grid - 4 columns on desktop, 2x2 on mobile */
.services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.services-grid .service-card {
    width: 100%;
    display: flex;
    flex-direction: column;
}

/* Service Card Link Styles */
.service-card-link {
    display: flex !important;
    height: 100%;
}

.service-card-link:hover .service-card {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 31, 92, 0.2);
}

.service-card-link:hover .wa-cta {
    background: linear-gradient(135deg, #128C7E 0%, #075E54 100%);
    transform: scale(1.02);
}

.service-card-link:hover .wa-cta .fa-arrow-right {
    transform: translateX(4px);
}

.service-card-link:hover .service-badge {
    animation: badgePulse 0.5s ease;
}

@keyframes badgePulse {
    0%, 100% { transform: rotate(45deg) scale(1); }
    50% { transform: rotate(45deg) scale(1.05); }
}

/* Service Badge Overflow Fix */
.service-card {
    overflow: hidden !important;
}

/* Partner Cards */
.partner-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 35px rgba(0,31,92,0.12);
}

.partner-card:hover img {
    transform: scale(1.05);
}

/* Testimonial Grid */
.testimonial-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.testimonial-content {
    order: 2;
}

/* Anniversary Badge Styles */
.badge-container {
    text-align: center;
    position: relative;
    order: 1;
}

.badge-wrapper {
    position: relative;
    display: inline-block;
}

.anniversary-badge {
    width: 280px;
    height: 280px;
    background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 20px 60px rgba(37, 150, 190, 0.35);
    position: relative;
    overflow: hidden;
}

.badge-pattern {
    position: absolute;
    inset: 0;
    opacity: 0.1;
    background: repeating-linear-gradient(45deg, white 0, white 2px, transparent 2px, transparent 20px);
}

.badge-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.badge-number {
    font-size: 5rem;
    font-weight: 900;
    color: #FFD700;
    line-height: 1;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.badge-label {
    font-size: 1.25rem;
    color: white;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.badge-sublabel {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.9);
    margin-top: 0.25rem;
}

.badge-ring {
    position: absolute;
    inset: 10px;
    border: 2px dashed rgba(255,255,255,0.3);
    border-radius: 50%;
    animation: spin 20s linear infinite;
}

@keyframes spin {
    100% { transform: rotate(360deg); }
}

.badge-star {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 55px;
    height: 55px;
    background: #FFD700;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
    animation: pulse 2s ease-in-out infinite;
}

.badge-star i {
    color: #001f5c;
    font-size: 1.4rem;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.badge-dot {
    position: absolute;
    border-radius: 50%;
}

.badge-dot-1 {
    bottom: 15px;
    left: -25px;
    width: 35px;
    height: 35px;
    background: #001f5c;
}

.badge-dot-2 {
    top: 50%;
    right: -35px;
    width: 20px;
    height: 20px;
    background: #FFD700;
    opacity: 0.6;
}

.badge-stats {
    display: none;
    justify-content: center;
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.badge-stat {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, #001f5c 0%, #001847 100%);
    color: white;
    padding: 0.625rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

.badge-stat i {
    color: #FFD700;
}

/* Award Slider */
.award-slide {
    flex-shrink: 0;
}

/* Responsive for Hero */
@media (max-width: 768px) {
    section:first-child h1 {
        font-size: 2rem !important;
    }
    .hero-text {
        display: block;
    }
    section:first-child p {
        font-size: 1rem !important;
    }
    section [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    section [style*="grid-template-columns: repeat(3"] {
        grid-template-columns: 1fr !important;
    }
    section [style*="grid-template-columns: 1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
    /* Services grid - 2x2 on mobile */
    .services-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1rem;
    }
    .service-badge {
        font-size: 0.55rem !important;
        padding: 0.25rem 2rem !important;
        right: -40px !important;
        top: 8px !important;
    }
    .wa-cta {
        font-size: 0.75rem !important;
        padding: 0.6rem 0.75rem !important;
    }
    .wa-cta span {
        display: none;
    }
    .wa-cta::after {
        content: 'Chat WA';
        font-size: 0.75rem;
    }
    .award-slide {
        min-width: 50% !important;
    }
    .award-prev, .award-next {
        display: none !important;
    }

    /* Testimonial Section Mobile */
    .testimonial-grid {
        grid-template-columns: 1fr !important;
        gap: 2.5rem !important;
    }

    .badge-container {
        order: 1;
    }

    .testimonial-content {
        order: 2;
    }

    /* Anniversary Badge Mobile */
    .badge-wrapper {
        padding: 1rem;
        overflow: visible;
    }

    .anniversary-badge {
        width: 160px;
        height: 160px;
    }

    .badge-number {
        font-size: 2.75rem;
    }

    .badge-label {
        font-size: 0.85rem;
    }

    .badge-sublabel {
        font-size: 0.65rem;
    }

    .badge-star {
        width: 36px;
        height: 36px;
        top: 0;
        right: 0;
    }

    .badge-star i {
        font-size: 0.9rem;
    }

    .badge-dot-1 {
        width: 20px;
        height: 20px;
        left: 0;
        bottom: 10px;
    }

    .badge-dot-2 {
        width: 12px;
        height: 12px;
        right: 0;
        top: 40%;
    }

    .badge-ring {
        inset: 6px;
    }

    /* Show stats on mobile */
    .badge-stats {
        display: flex;
        margin-top: 1rem;
    }

    .badge-stat {
        font-size: 0.7rem;
        padding: 0.5rem 0.75rem;
    }
}

@media (max-width: 480px) {
    section [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: 1fr !important;
    }
    section [style*="grid-template-columns: repeat(2"] {
        grid-template-columns: 1fr !important;
    }
    section:first-child h1 {
        font-size: 1.8rem !important;
    }
    .award-slide {
        min-width: 100% !important;
    }
    .partners-grid {
        gap: 1rem !important;
    }
    .partner-card {
        min-width: 140px !important;
        padding: 1rem 1.25rem !important;
    }
    /* Services grid - keep 2x2 on small mobile too */
    .services-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 0.75rem;
    }
    .services-grid .service-card {
        padding: 1.25rem !important;
    }
    .services-grid .service-card h3 {
        font-size: 1rem !important;
    }
    .services-grid .service-card p {
        font-size: 0.8rem !important;
    }
    .services-grid .service-card li {
        font-size: 0.75rem !important;
    }
    .service-badge {
        font-size: 0.5rem !important;
        padding: 0.2rem 1.75rem !important;
        right: -42px !important;
        top: 6px !important;
    }
    .pulse-indicator {
        display: none !important;
    }
    .wa-cta {
        font-size: 0.7rem !important;
        padding: 0.5rem 0.6rem !important;
    }

    /* Anniversary Badge Small Mobile */
    .anniversary-badge {
        width: 140px;
        height: 140px;
    }

    .badge-number {
        font-size: 2.25rem;
    }

    .badge-label {
        font-size: 0.75rem;
    }

    .badge-sublabel {
        font-size: 0.6rem;
    }

    .badge-star {
        width: 30px;
        height: 30px;
    }

    .badge-star i {
        font-size: 0.75rem;
    }

    .badge-dot-1 {
        width: 16px;
        height: 16px;
    }

    .badge-dot-2 {
        width: 10px;
        height: 10px;
    }

    .badge-stats {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
    }

    .badge-stat {
        font-size: 0.65rem;
        padding: 0.4rem 0.6rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ===== AWARDS SLIDER =====
    const awardsTrack = document.querySelector('.awards-track');
    const awardSlides = document.querySelectorAll('.award-slide');
    const awardPrev = document.querySelector('.award-prev');
    const awardNext = document.querySelector('.award-next');
    let awardIndex = 0;
    const awardsToShow = window.innerWidth <= 480 ? 1 : (window.innerWidth <= 768 ? 2 : 3);
    const maxAwardIndex = Math.max(0, awardSlides.length - awardsToShow);

    function updateAwardSlider() {
        const slideWidth = awardSlides[0]?.offsetWidth || 0;
        awardsTrack.style.transform = `translateX(-${awardIndex * slideWidth}px)`;
    }

    if (awardPrev && awardNext) {
        awardPrev.addEventListener('click', function() {
            awardIndex = awardIndex > 0 ? awardIndex - 1 : maxAwardIndex;
            updateAwardSlider();
        });

        awardNext.addEventListener('click', function() {
            awardIndex = awardIndex < maxAwardIndex ? awardIndex + 1 : 0;
            updateAwardSlider();
        });
    }

    setInterval(function() {
        awardIndex = awardIndex < maxAwardIndex ? awardIndex + 1 : 0;
        updateAwardSlider();
    }, 4000);

    // ===== TESTIMONIAL SLIDER =====
    const testiSlides = document.querySelectorAll('.testimonial-slide');
    const testiDots = document.querySelectorAll('.testi-dot');
    let testiIndex = 0;

    function showTestimonial(index) {
        testiSlides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
            if (i === index) {
                slide.style.animation = 'fadeIn 0.5s ease';
            }
        });
        testiDots.forEach((dot, i) => {
            dot.style.background = i === index ? '#2596be' : '#e5e7eb';
        });
        testiIndex = index;
    }

    testiDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            showTestimonial(index);
        });
    });

    // Auto slide for testimonials
    setInterval(function() {
        testiIndex = (testiIndex + 1) % testiSlides.length;
        showTestimonial(testiIndex);
    }, 5000);

    // Handle resize
    window.addEventListener('resize', function() {
        updateAwardSlider();
    });
});
</script>
@endsection
