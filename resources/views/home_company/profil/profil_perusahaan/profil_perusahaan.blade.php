@extends('home_company.layouts.main')

@section('title', 'Profil Perusahaan')

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
            <i class="fas fa-building" style="margin-right: 0.5rem;"></i>TENTANG KAMI
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.1;">Profil Perusahaan OMEXPRESS</h1>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.85); max-width: 600px; margin: 0 auto 1.5rem;">Mengenal lebih dekat PT Perisai Cakrawala Indonesia</p>
        <nav style="display: flex; justify-content: center; margin-top: 1.5rem;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; display: flex; align-items: center;" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.7)';"><i class="fas fa-home" style="margin-right: 0.5rem;"></i>Beranda</a></li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: #ffffff; font-weight: 600;">Profil Perusahaan</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Tentang Kami Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <!-- Image Gallery -->
            <div class="about-gallery">
                <div class="gallery-desktop">
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <img src="{{ asset('assets/FOTO DEPAN GUDANG PNG.png') }}" alt="Warehouse" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; height: 200px; object-fit: cover; transition: transform 0.3s;" class="hover-card">
                        <img src="{{ asset('assets/REVISI TRUK VENDOR.png') }}" alt="Truck" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; height: 260px; object-fit: cover; transition: transform 0.3s;" class="hover-card">
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 1rem; padding-top: 2.5rem;">
                        <img src="{{ asset('assets/BERAU-001.jpg') }}" alt="Delivery" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; height: 260px; object-fit: cover; transition: transform 0.3s;" class="hover-card">
                        <img src="{{ asset('assets/MATARAM-001.jpg') }}" alt="Team" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; height: 200px; object-fit: cover; transition: transform 0.3s;" class="hover-card">
                    </div>
                </div>
                <!-- Mobile Gallery - Horizontal Scroll -->
                <div class="gallery-mobile">
                    <div class="gallery-scroll">
                        <div class="gallery-item">
                            <img src="{{ asset('assets/FOTO DEPAN GUDANG PNG.png') }}" alt="Warehouse">
                            <div class="gallery-overlay">
                                <span><i class="fas fa-warehouse"></i> Gudang</span>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('assets/REVISI TRUK VENDOR.png') }}" alt="Truck">
                            <div class="gallery-overlay">
                                <span><i class="fas fa-truck"></i> Armada</span>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('assets/BERAU-001.jpg') }}" alt="Delivery">
                            <div class="gallery-overlay">
                                <span><i class="fas fa-shipping-fast"></i> Pengiriman</span>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('assets/MATARAM-001.jpg') }}" alt="Team">
                            <div class="gallery-overlay">
                                <span><i class="fas fa-users"></i> Tim</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-indicator">
                        <span></span><span></span><span></span><span></span>
                    </div>
                    <p class="gallery-hint"><i class="fas fa-hand-pointer"></i> Geser untuk melihat lebih banyak</p>
                </div>
            </div>

            <!-- Content -->
            <div>
                <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Tentang Kami</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; margin-bottom: 1.5rem; line-height: 1.2;">PT Perisai Cakrawala Indonesia (OMEXPRESS)</h2>
                <p style="color: #555555; line-height: 1.9; margin-bottom: 1.5rem; font-size: 1.05rem;">
                    OMEXPRESS adalah perusahaan jasa pengiriman barang cargo yang melayani pengiriman ke seluruh wilayah Indonesia melalui jalur darat, laut, dan udara. Dengan pengalaman lebih dari 10 tahun, kami berkomitmen untuk memberikan layanan pengiriman yang cepat, aman, dan terpercaya.
                </p>
                <p style="color: #555555; line-height: 1.9; margin-bottom: 2.5rem; font-size: 1.05rem;">
                    Kami memahami bahwa setiap pengiriman memiliki nilai tersendiri bagi pelanggan, oleh karena itu kami selalu mengutamakan keamanan dan ketepatan waktu dalam setiap proses pengiriman.
                </p>

                <!-- Stats -->
                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
                    <div style="text-align: center; padding: 1.5rem 0.75rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; border-left: 4px solid #2596be;">
                        <div style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-bottom: 0.25rem;">10+</div>
                        <div style="font-size: 0.8rem; color: #666666; font-weight: 500;">Tahun Pengalaman</div>
                    </div>
                    <div style="text-align: center; padding: 1.5rem 0.75rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; border-left: 4px solid #2596be;">
                        <div style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-bottom: 0.25rem;">500+</div>
                        <div style="font-size: 0.8rem; color: #666666; font-weight: 500;">Kota Terjangkau</div>
                    </div>
                    <div style="text-align: center; padding: 1.5rem 0.75rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; border-left: 4px solid #2596be;">
                        <div style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-bottom: 0.25rem;">50K+</div>
                        <div style="font-size: 0.8rem; color: #666666; font-weight: 500;">Pengiriman</div>
                    </div>
                    <div style="text-align: center; padding: 1.5rem 0.75rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; border-left: 4px solid #2596be;">
                        <div style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-bottom: 0.25rem;">99%</div>
                        <div style="font-size: 0.8rem; color: #666666; font-weight: 500;">Kepuasan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Visi & Misi</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Tujuan dan Arah Perusahaan</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
            <!-- Visi -->
            <div class="jne-card" style="padding: 2.5rem; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #2596be 0%, #001f5c 100%);"></div>
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 30px rgba(37, 150, 190, 0.25);">
                    <i class="fas fa-eye" style="font-size: 1.75rem; color: white;"></i>
                </div>
                <h3 style="font-size: 1.75rem; font-weight: 800; color: #001f5c; margin-bottom: 1rem;">Visi</h3>
                <p style="color: #555555; line-height: 1.9; font-size: 1.05rem;">
                    Menjadi platform LogiTech terdepan yang mendemokratisasi logistik, memungkinkan setiap individu dan UKM di Indonesia memiliki bisnis pengiriman yang menguntungkan dan berkelanjutan, tanpa hambatan modal awal.
                </p>
            </div>

            <!-- Misi -->
            <div class="jne-card" style="padding: 2.5rem; position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #001f5c 0%, #2596be 100%);"></div>
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 30px rgba(0, 31, 92, 0.25);">
                    <i class="fas fa-bullseye" style="font-size: 1.75rem; color: white;"></i>
                </div>
                <h3 style="font-size: 1.75rem; font-weight: 800; color: #001f5c; margin-bottom: 1rem;">Misi</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                        <div style="width: 24px; height: 24px; background: rgba(37, 150, 190, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-check" style="color: #2596be; font-size: 0.65rem;"></i>
                        </div>
                        <span style="color: #555555; line-height: 1.7; font-size: 1rem;">Menyediakan akses sistem logistik dengan skema Asset-Light.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                        <div style="width: 24px; height: 24px; background: rgba(37, 150, 190, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-check" style="color: #2596be; font-size: 0.65rem;"></i>
                        </div>
                        <span style="color: #555555; line-height: 1.7; font-size: 1rem;">Menciptakan model bisnis yang fokus pada high-margin melalui efisiensi pengiriman 1 Kg.</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                        <div style="width: 24px; height: 24px; background: rgba(37, 150, 190, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-check" style="color: #2596be; font-size: 0.65rem;"></i>
                        </div>
                        <span style="color: #555555; line-height: 1.7; font-size: 1rem;">Menjaga Stabilitas sistem dengan jaminan SLA tertinggi.</span>
                    </li>
                    {{-- <li style="display: flex; align-items: flex-start;">
                        <div style="width: 24px; height: 24px; background: rgba(37, 150, 190, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-check" style="color: #2596be; font-size: 0.65rem;"></i>
                        </div>
                        <span style="color: #555555; line-height: 1.7; font-size: 1rem;">Mengembangkan SDM yang profesional dan berkomitmen tinggi</span>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Kami Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Solusi Lengkap</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Produk & Layanan</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Berbagai pilihan layanan pengiriman untuk memenuhi kebutuhan Anda</p>
        </div>

        <div class="services-grid">
            @php
            $services = [
                ['icon' => 'fa-plane', 'title' => 'Layanan Udara', 'desc' => 'Pengiriman cepat via udara untuk paket dengan berat minimum 1 kg ke seluruh Indonesia', 'features' => ['Minimum 1 kg', 'Pengiriman cepat', 'Jangkauan nasional']],
                ['icon' => 'fa-truck-moving', 'title' => 'Layanan Darat', 'desc' => 'Pengiriman cargo via jalur darat dengan berat minimum 10 kg, ekonomis dan terpercaya', 'features' => ['Minimum 10 kg', 'Harga ekonomis', 'Tracking online']],
                ['icon' => 'fa-plane-departure', 'title' => 'Cargo Udara', 'desc' => 'Layanan cargo udara untuk pengiriman barang dalam jumlah besar dengan waktu cepat', 'features' => ['Kapasitas besar', 'Waktu cepat', 'Aman & terpercaya']],
                ['icon' => 'fa-warehouse', 'title' => 'Maklon Logistic', 'desc' => 'Buka Usaha Jasa Logistik Sendiri, Cukup 100 Ribu', 'features' => ['Tim Operasional, Ready', 'Pulau Jawa dan Luar Pulau Jawa', 'Cocok untuk pemula maupun yang sudah punya usaha logistik']],
            ];
            @endphp
            @foreach($services as $svc)
            <div class="jne-card hover-card service-card" style="padding: 2rem; background: white;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <i class="fas {{ $svc['icon'] }}" style="font-size: 1.5rem; color: white;"></i>
                </div>
                <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.75rem; font-size: 1.25rem;">{{ $svc['title'] }}</h3>
                <p style="font-size: 0.9rem; color: #666666; line-height: 1.7; margin-bottom: 1.25rem;">{{ $svc['desc'] }}</p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($svc['features'] as $feature)
                    <li style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: #555555; margin-bottom: 0.5rem;">
                        <i class="fas fa-check-circle" style="color: #25D366; font-size: 0.75rem;"></i>{{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Dewan Direksi Section -->
{{-- <section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Tim Kami</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Dewan Direksi</h2>
        </div>

        @php
            $directors = [
                ['name' => 'Mochammad Syarif', 'position' => 'Direktur Utama', 'img' => '../assets/personal_ex.png'],
                ['name' => 'Ahmad Hidayat', 'position' => 'Direktur Operasional', 'img' => '../assets/personal_ex.png'],
                ['name' => 'Siti Rahayu', 'position' => 'Direktur Keuangan', 'img' => '../assets/personal_ex.png'],
                ['name' => 'Budi Santoso', 'position' => 'Direktur SDM', 'img' => '../assets/personal_ex.png'],
            ];
        @endphp

        <!-- Desktop Grid -->
        <div class="directors-desktop" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
            @foreach($directors as $director)
            <div class="jne-card" style="overflow: hidden;">
                <div style="height: 280px; background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%); position: relative; overflow: hidden;">
                    <img src="{{ asset('img/' . $director['img']) }}" alt="{{ $director['name'] }}" style="width: 100%; height: 100%; object-fit: cover; object-position: top; transition: transform 0.5s;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 60%; background: linear-gradient(to top, rgba(0,31,92,0.8), transparent);"></div>
                </div>
                <div style="padding: 1.5rem; text-align: center; background: white;">
                    <h3 style="font-weight: 700; color: #001f5c; font-size: 1.125rem; margin-bottom: 0.25rem;">{{ $director['name'] }}</h3>
                    <p style="color: #2596be; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">{{ $director['position'] }}</p>
                    <div style="display: flex; justify-content: center; gap: 0.5rem;">
                        <a href="#" style="width: 36px; height: 36px; background: #f5f5f5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666666; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='#0077B5'; this.style.color='white';" onmouseout="this.style.background='#f5f5f5'; this.style.color='#666666';">
                            <i class="fab fa-linkedin-in" style="font-size: 0.875rem;"></i>
                        </a>
                        <a href="#" style="width: 36px; height: 36px; background: #f5f5f5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666666; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='#1DA1F2'; this.style.color='white';" onmouseout="this.style.background='#f5f5f5'; this.style.color='#666666';">
                            <i class="fab fa-twitter" style="font-size: 0.875rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Mobile Carousel -->
        <div class="directors-mobile">
            <div class="directors-scroll">
                @foreach($directors as $index => $director)
                <div class="director-card">
                    <div class="director-img-wrapper">
                        <img src="{{ asset('img/' . $director['img']) }}" alt="{{ $director['name'] }}">
                        <div class="director-badge">{{ $index + 1 }}/{{ count($directors) }}</div>
                    </div>
                    <div class="director-info">
                        <h3>{{ $director['name'] }}</h3>
                        <p class="director-position">{{ $director['position'] }}</p>
                        <div class="director-socials">
                            <a href="#" class="social-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-btn twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="directors-nav">
                <div class="directors-dots">
                    @foreach($directors as $index => $director)
                    <span class="{{ $index === 0 ? 'active' : '' }}"></span>
                    @endforeach
                </div>
                <p class="directors-hint"><i class="fas fa-arrows-alt-h"></i> Geser untuk melihat anggota lainnya</p>
            </div>
        </div>
    </div>
</section> --}}

<!-- Pelayanan Terbaik Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div class="pelayanan-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <!-- Left: Title & Description -->
            <div>
                <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Pelayanan Terbaik</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; margin-bottom: 1.5rem; line-height: 1.2;">Komitmen Kami Untuk Anda</h2>
                <p style="color: #555555; line-height: 1.9; margin-bottom: 2rem; font-size: 1.05rem;">
                    Kami berkomitmen untuk memberikan pelayanan terbaik kepada setiap pelanggan. Dengan armada yang terawat, tim profesional, dan sistem tracking modern, kami memastikan setiap pengiriman Anda sampai dengan aman dan tepat waktu.
                </p>
                <a href="{{ route('layanan') }}" class="btn-jne-red" style="padding: 0.875rem 2rem; font-size: 1rem;">
                    <i class="fas fa-arrow-right"></i> Lihat Layanan Kami
                </a>
            </div>

            <!-- Right: Jenis-jenis Layanan -->
            <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                <div style="display: flex; align-items: flex-start; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 1.25rem; border-radius: 12px; transition: all 0.3s;" class="hover-card">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                        <i class="fas fa-truck" style="color: white;"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 0.25rem; font-size: 1.05rem;">Armada Modern & Terawat</h4>
                        <p style="font-size: 0.9rem; color: #666666; line-height: 1.6;">Kendaraan dalam kondisi prima untuk pengiriman optimal</p>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 1.25rem; border-radius: 12px; transition: all 0.3s;" class="hover-card">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                        <i class="fas fa-shield-alt" style="color: white;"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 0.25rem; font-size: 1.05rem;">Asuransi Pengiriman</h4>
                        <p style="font-size: 0.9rem; color: #666666; line-height: 1.6;">Perlindungan penuh untuk barang kiriman Anda</p>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 1.25rem; border-radius: 12px; transition: all 0.3s;" class="hover-card">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                        <i class="fas fa-map-marker-alt" style="color: white;"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 0.25rem; font-size: 1.05rem;">Sistem Tracking Online</h4>
                        <p style="font-size: 0.9rem; color: #666666; line-height: 1.6;">Pantau status pengiriman secara real-time</p>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 1.25rem; border-radius: 12px; transition: all 0.3s;" class="hover-card">
                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                        <i class="fas fa-headset" style="color: white;"></i>
                    </div>
                    <div>
                        <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 0.25rem; font-size: 1.05rem;">Support 24/7</h4>
                        <p style="font-size: 0.9rem; color: #666666; line-height: 1.6;">Customer service siap membantu kapan saja</p>
                    </div>
                </div>
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
        <h2 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.2;">Siap Mengirim Barang Anda?</h2>
        <p style="font-size: 1.125rem; color: rgba(255,255,255,0.85); margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.8;">
            Hubungi kami sekarang untuk mendapatkan penawaran terbaik untuk kebutuhan pengiriman cargo Anda
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
            <a href="{{ route('tracking') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2.5rem; background: white; color: #001f5c; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1.05rem;" onmouseover="this.style.background='#FFD700'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='white'; this.style.transform='translateY(0)';">
                <i class="fas fa-search"></i>Lacak Pengiriman
            </a>
        </div>
    </div>
</section>

<style>
/* Services Grid - 4 columns on desktop, 2x2 on mobile */
.services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.services-grid .service-card {
    width: 100%;
}

/* Feature Card Hover */
.feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 31, 92, 0.15);
    border-color: #001f5c;
}
.feature-card:hover > div:first-child {
    background: #2596be !important;
}
.feature-card:hover .feature-icon {
    background: linear-gradient(135deg, #001f5c 0%, #001847 100%) !important;
    border-color: #001f5c !important;
}
.feature-card:hover .feature-icon i {
    color: #ffffff !important;
}

/* About Gallery Styles */
.about-gallery {
    width: 100%;
}

.gallery-desktop {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.gallery-mobile {
    display: none;
}

.gallery-scroll {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    padding: 0.5rem 0 1rem;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.gallery-scroll::-webkit-scrollbar {
    display: none;
}

.gallery-item {
    flex: 0 0 75%;
    scroll-snap-align: center;
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    aspect-ratio: 4/3;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-item:active img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1.5rem 1rem 1rem;
    background: linear-gradient(to top, rgba(0,31,92,0.9) 0%, transparent 100%);
}

.gallery-overlay span {
    color: white;
    font-weight: 600;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.gallery-overlay i {
    color: #2596be;
}

.gallery-indicator {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.gallery-indicator span {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #d1d5db;
    transition: all 0.3s;
}

.gallery-indicator span:first-child {
    width: 24px;
    border-radius: 4px;
    background: #2596be;
}

.gallery-hint {
    text-align: center;
    color: #888;
    font-size: 0.8rem;
    margin-top: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    animation: pulse-hint 2s infinite;
}

@keyframes pulse-hint {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
}

/* Directors Section Styles */
.directors-mobile {
    display: none;
}

.directors-scroll {
    display: flex;
    gap: 1rem;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    padding: 0.5rem 0 1.5rem;
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.directors-scroll::-webkit-scrollbar {
    display: none;
}

.director-card {
    flex: 0 0 85%;
    scroll-snap-align: center;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,31,92,0.12);
    display: flex;
    flex-direction: row;
    min-height: 180px;
}

.director-img-wrapper {
    width: 45%;
    position: relative;
    background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
}

.director-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
}

.director-badge {
    position: absolute;
    top: 0.75rem;
    left: 0.75rem;
    background: rgba(0,31,92,0.9);
    color: white;
    padding: 0.25rem 0.6rem;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 600;
    backdrop-filter: blur(4px);
}

.director-info {
    flex: 1;
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.director-info h3 {
    font-weight: 700;
    color: #001f5c;
    font-size: 1.1rem;
    margin-bottom: 0.35rem;
    line-height: 1.3;
}

.director-position {
    color: #2596be;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.director-socials {
    display: flex;
    gap: 0.5rem;
}

.social-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 0.875rem;
}

.social-btn.linkedin {
    background: #0077B5;
    color: white;
}

.social-btn.twitter {
    background: #1DA1F2;
    color: white;
}

.directors-nav {
    text-align: center;
    margin-top: 0.5rem;
}

.directors-dots {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
}

.directors-dots span {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #d1d5db;
    transition: all 0.3s;
}

.directors-dots span.active {
    width: 24px;
    border-radius: 4px;
    background: #2596be;
}

.directors-hint {
    color: #888;
    font-size: 0.8rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    animation: pulse-hint 2s infinite;
}

/* Responsive */
@media (max-width: 1024px) {
    section [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
    /* Services grid - 2x2 on tablet */
    .services-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (max-width: 768px) {
    section [style*="grid-template-columns: 1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
    section [style*="grid-template-columns: repeat(4"] {
        grid-template-columns: 1fr !important;
    }
    section [style*="grid-template-columns: repeat(2"] {
        grid-template-columns: 1fr !important;
    }
    /* Services grid - 2x2 on mobile */
    .services-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1rem;
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

    /* About Gallery Mobile */
    .gallery-desktop {
        display: none !important;
    }

    .gallery-mobile {
        display: block;
        margin: 0 -1rem;
        padding: 0 1rem;
    }

    .about-gallery {
        order: 2;
    }

    /* Directors Mobile */
    .directors-desktop {
        display: none !important;
    }

    .directors-mobile {
        display: block;
        margin: 0 -1rem;
        padding: 0 1rem;
        margin-top: 2rem;
    }

    /* Stats grid on mobile */
    .stats-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    /* Pelayanan grid on mobile */
    .pelayanan-grid {
        grid-template-columns: 1fr !important;
        gap: 2rem !important;
    }

    .pelayanan-grid > div:first-child {
        text-align: center;
    }
}
</style>
@endsection
