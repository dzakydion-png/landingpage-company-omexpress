@extends('home_company.layouts.main')

@section('title', $title ?? 'Dalam Pengembangan')

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
            <i class="fas fa-map-marker-alt" style="margin-right: 0.5rem;"></i>HALAMAN
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.1;">{{ $title ?? 'Halaman' }}</h1>
        <nav style="display: flex; justify-content: center; margin-top: 1.5rem;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; display: flex; align-items: center;" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.7)';"><i class="fas fa-home" style="margin-right: 0.5rem;"></i>Beranda</a></li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: #ffffff; font-weight: 600;">{{ $title ?? 'Halaman' }}</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Coming Soon Content - JNE Style -->
<section style="padding: 5rem 1rem; background: #ffffff;">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <!-- Icon -->
        <div style="margin-bottom: 2.5rem;">
            <div style="width: 140px; height: 140px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 20px 50px rgba(0, 31, 92, 0.25); position: relative;">
                <i class="fas fa-tools" style="font-size: 3.5rem; color: white;"></i>
                <!-- Pulse ring -->
                <div style="position: absolute; inset: -10px; border: 3px solid #2596be; border-radius: 50%; animation: pulse-ring 2s infinite;"></div>
            </div>
        </div>

        <!-- Title -->
        <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-bottom: 1rem; line-height: 1.2;">
            Website Sedang Dalam Pengembangan
        </h2>

        <!-- Description -->
        <p style="font-size: 1.125rem; color: #666666; margin-bottom: 2.5rem; line-height: 1.8; max-width: 600px; margin-left: auto; margin-right: auto;">
            Halaman <strong style="color: #001f5c;">{{ $title ?? 'ini' }}</strong> sedang dalam tahap pengembangan.
            Kami sedang bekerja keras untuk memberikan pengalaman terbaik untuk Anda.
            Silakan kunjungi kembali dalam waktu dekat.
        </p>

        <!-- Progress Bar -->
        <div style="max-width: 450px; margin: 0 auto 3rem; background: #f5f5f5; padding: 1.5rem; border-radius: 12px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem;">
                <span style="font-size: 0.9rem; color: #666666; font-weight: 500;">Progress Pengembangan</span>
                <span style="font-size: 0.9rem; color: #2596be; font-weight: 700;">Coming Soon</span>
            </div>
            <div style="background: #e5e7eb; border-radius: 9999px; height: 10px; overflow: hidden;">
                <div style="background: linear-gradient(90deg, #001f5c 0%, #2596be 100%); width: 35%; height: 100%; border-radius: 9999px; animation: progress-pulse 2s infinite;"></div>
            </div>
        </div>

        <!-- Buttons -->
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3rem;">
            <a href="{{ route('home') }}" class="btn-jne-red">
                <i class="fas fa-home"></i> Kembali ke Beranda
            </a>
            <a href="{{ route('kontak') }}" class="btn-jne-outline">
                <i class="fas fa-envelope"></i> Hubungi Kami
            </a>
        </div>

        <!-- Contact Info Card -->
        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 16px; padding: 2rem; border: 1px solid #e5e7eb;">
            <p style="color: #666666; font-size: 0.9rem; margin-bottom: 1.5rem; font-weight: 500;">Ada pertanyaan? Hubungi kami:</p>
            <div style="display: flex; gap: 2.5rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+6281180892925" style="display: flex; align-items: center; gap: 0.75rem; color: #001f5c; text-decoration: none; transition: all 0.3s; font-weight: 600;" onmouseover="this.style.color='#2596be';" onmouseout="this.style.color='#001f5c';">
                    <div style="width: 45px; height: 45px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                        <i class="fas fa-phone-alt" style="color: #2596be;"></i>
                    </div>
                    0811 8089 2925
                </a>
                <a href="mailto:info@omexpress.com" style="display: flex; align-items: center; gap: 0.75rem; color: #001f5c; text-decoration: none; transition: all 0.3s; font-weight: 600;" onmouseover="this.style.color='#2596be';" onmouseout="this.style.color='#001f5c';">
                    <div style="width: 45px; height: 45px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                        <i class="fas fa-envelope" style="color: #2596be;"></i>
                    </div>
                    info@omexpress.com
                </a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes pulse-ring {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.5; }
    100% { transform: scale(1); opacity: 1; }
}

@keyframes progress-pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}
</style>
@endsection
