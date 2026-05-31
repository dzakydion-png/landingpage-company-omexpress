@extends('home_company.layouts.main')

@section('title', 'Layanan Kami - Om Express')

@section('content')
<!-- Hero Section -->
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
            <i class="fas fa-dolly-flatbed" style="margin-right: 0.5rem;"></i>SOLUSI LENGKAP
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.1;">Produk & Layanan OMEXPRESS</h1>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.85); max-width: 600px; margin: 0 auto 1.5rem;">Berbagai pilihan layanan pengiriman untuk memenuhi setiap kebutuhan logistik Anda</p>
        <nav style="display: flex; justify-content: center; margin-top: 1.5rem;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; display: flex; align-items: center;" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.7)';"><i class="fas fa-home" style="margin-right: 0.5rem;"></i>Beranda</a></li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: #ffffff; font-weight: 600;">Layanan</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Services Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Layanan Kami</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Pilihan Layanan Pengiriman</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Kami menyediakan berbagai solusi pengiriman yang dapat disesuaikan dengan kebutuhan Anda</p>
        </div>

        <div class="layanan-grid">
            @php
            $services = [
                [
                    'icon' => 'fa-plane',
                    'color' => '#2596be',
                    'title' => 'Layanan Udara',
                    'desc' => 'Pengiriman cepat dan aman melalui jalur udara untuk paket dan dokumen penting Anda. Menjangkau seluruh Indonesia dengan kecepatan maksimal.',
                    'full_desc' => 'Layanan Udara OMEXPRESS adalah solusi pengiriman tercepat untuk kebutuhan logistik Anda. Dengan jaringan penerbangan yang luas, kami mampu menjangkau seluruh wilayah Indonesia dalam waktu singkat. Layanan ini sangat cocok untuk pengiriman dokumen penting, paket express, dan barang-barang yang memerlukan penanganan cepat. Setiap pengiriman dilengkapi dengan asuransi dan sistem tracking real-time sehingga Anda dapat memantau status kiriman kapan saja.',
                    'features' => ['Minimum berat 1 kg', 'Pengiriman super cepat 1-2 hari', 'Jangkauan nasional ke seluruh Indonesia', 'Tracking real-time 24 jam', 'Asuransi pengiriman', 'Layanan door to door'],
                    'image' => 'img/logistic2.jpg',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Layanan Udara* untuk pengiriman cepat. Mohon informasi lebih lanjut mengenai tarif dan estimasi waktu pengiriman. Terima kasih!'
                ],
                [
                    'icon' => 'fa-truck-moving',
                    'color' => '#25D366',
                    'title' => 'Layanan Darat',
                    'desc' => 'Solusi pengiriman darat yang ekonomis dan andal. Armada kami siap mengantarkan barang Anda ke berbagai destinasi dengan aman.',
                    'full_desc' => 'Layanan Darat OMEXPRESS menawarkan solusi pengiriman yang ekonomis tanpa mengorbankan kualitas. Dengan armada truk yang terawat dan tim driver profesional, kami memastikan barang Anda sampai dengan aman dan tepat waktu. Layanan ini ideal untuk pengiriman barang dengan volume besar, furniture, elektronik, dan kebutuhan bisnis lainnya. Tersedia pilihan pengiriman reguler dan express sesuai kebutuhan Anda.',
                    'features' => ['Minimum berat 10 kg', 'Harga sangat ekonomis', 'Tracking online realtime', 'Armada terawat & modern', 'Tersedia reguler & express', 'Packing aman & profesional'],
                    'image' => 'assets/VENDOR BIRU.png',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Layanan Darat* untuk pengiriman cargo. Mohon informasi lebih lanjut mengenai tarif per kg dan estimasi waktu. Terima kasih!'
                ],
                [
                    'icon' => 'fa-plane-departure',
                    'color' => '#9333ea',
                    'title' => 'Cargo Udara',
                    'desc' => 'Layanan kargo udara untuk pengiriman barang dalam jumlah besar. Cepat, efisien, dan dapat diandalkan untuk bisnis Anda.',
                    'full_desc' => 'Cargo Udara OMEXPRESS adalah layanan premium untuk pengiriman barang dalam skala besar melalui jalur udara. Layanan ini dirancang khusus untuk memenuhi kebutuhan bisnis dan korporasi yang memerlukan pengiriman cepat dengan kapasitas besar. Kami bekerja sama dengan berbagai maskapai penerbangan untuk memastikan ketersediaan slot cargo dan ketepatan waktu pengiriman. Cocok untuk pengiriman antar pulau, produk bisnis, dan kebutuhan industri.',
                    'features' => ['Kapasitas besar tanpa batas', 'Waktu pengiriman cepat 1-3 hari', 'Aman & terpercaya dengan asuransi', 'Layanan door to door', 'Handling khusus barang fragile', 'Dokumentasi lengkap'],
                    'image' => 'img/logistic4.jpg',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan *Cargo Udara* untuk pengiriman barang dalam jumlah besar. Mohon informasi lebih lanjut mengenai kapasitas dan prosedur pengiriman. Terima kasih!'
                ],
                [
                    'icon' => 'fa-warehouse',
                    'color' => '#f59e0b',
                    'title' => 'Maklon Logistic',
                    'desc' => 'Buka Usaha Jasa Logistik Sendiri, Cukup 100 Ribu. Kami urus logistiknya, Anda fokus pada bisnis Anda.',
                    'full_desc' => 'Maklon Logistic adalah program kemitraan inovatif dari OMEXPRESS yang memungkinkan Anda memiliki usaha jasa logistik sendiri dengan modal minimal. Dengan investasi hanya 100 ribu rupiah, Anda sudah bisa memulai bisnis ekspedisi dengan brand Anda sendiri. Kami menyediakan sistem operasional lengkap, tim support, dan jaringan pengiriman yang sudah established. Program ini cocok untuk pemula yang ingin memulai bisnis logistik maupun pengusaha yang ingin menambah lini bisnis baru.',
                    'features' => ['Modal awal hanya Rp 100.000', 'Tim operasional siap support', 'Jangkauan Jawa & Luar Jawa', 'Sistem & aplikasi lengkap', 'Training & pendampingan', 'Potensi profit tinggi'],
                    'image' => 'img/logistic5.jpg',
                    'wa_message' => 'Halo OMEXPRESS! Saya tertarik dengan program *Maklon Logistic* untuk membuka usaha jasa logistik. Mohon informasi lebih lanjut mengenai syarat, modal, dan sistem kerjasama. Terima kasih!'
                ],
            ];
            @endphp

            @foreach($services as $index => $service)
            <div class="jne-card hover-card layanan-card" style="overflow: hidden; background: white; cursor: pointer;" onclick="openServiceModal({{ $index }})">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,31,92,0.85) 0%, rgba(0,31,92,0.2) 60%, transparent 100%);"></div>
                    <div style="position: absolute; bottom: 1.25rem; left: 1.25rem; right: 1.25rem;">
                        <h3 style="font-size: 1.4rem; font-weight: 700; color: white; margin: 0 0 0.5rem 0;">{{ $service['title'] }}</h3>
                        <p style="font-size: 0.85rem; color: rgba(255,255,255,0.85); margin: 0; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $service['desc'] }}</p>
                    </div>
                </div>
                <div style="padding: 1.25rem;">
                    <ul style="list-style: none; padding: 0; margin: 0 0 1rem 0;">
                        @foreach(array_slice($service['features'], 0, 3) as $feature)
                        <li style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; color: #555555; margin-bottom: 0.4rem;">
                            <i class="fas fa-check-circle" style="color: {{ $service['color'] }}; font-size: 0.7rem;"></i>{{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 1rem; border-top: 1px solid #f1f5f9;">
                        <span style="display: inline-flex; align-items: center; gap: 0.5rem; font-weight: 600; color: #001f5c; font-size: 0.9rem; transition: all 0.3s;">
                            Selengkapnya <i class="fas fa-arrow-right" style="font-size: 0.75rem; transition: transform 0.3s;"></i>
                        </span>
                        <div style="width: 36px; height: 36px; background: {{ $service['color'] }}15; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas {{ $service['icon'] }}" style="font-size: 0.9rem; color: {{ $service['color'] }};"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Service Detail Modal -->
<div id="serviceModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.8); align-items: center; justify-content: center; padding: 1rem; overflow-y: auto;">
    <div style="background: white; border-radius: 16px; max-width: 900px; width: 100%; max-height: 90vh; overflow-y: auto; position: relative; animation: modalSlideIn 0.3s ease;">
        <!-- Close Button -->
        <button onclick="closeServiceModal()" style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.5); border: none; color: white; font-size: 1.25rem; cursor: pointer; z-index: 10; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='rgba(0,0,0,0.7)';" onmouseout="this.style.background='rgba(0,0,0,0.5)';">
            <i class="fas fa-times"></i>
        </button>

        <!-- Modal Image -->
        <div id="modalImageContainer" style="position: relative; height: 300px; overflow: hidden; border-radius: 16px 16px 0 0;">
            <img id="modalImage" src="" alt="" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,31,92,0.9) 0%, rgba(0,31,92,0.3) 50%, transparent 100%);"></div>
            <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; right: 1.5rem;">
                <div id="modalIconBadge" style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i id="modalIcon" class="fas" style="font-size: 1.25rem; color: white;"></i>
                </div>
                <h2 id="modalTitle" style="font-size: 2rem; font-weight: 800; color: white; margin: 0;"></h2>
            </div>
        </div>

        <!-- Modal Content -->
        <div style="padding: 2rem;">
            <p id="modalFullDesc" style="color: #555555; line-height: 1.8; margin-bottom: 2rem; font-size: 1rem;"></p>

            <h4 style="font-weight: 700; color: #001f5c; margin-bottom: 1rem; font-size: 1.1rem;">
                <i class="fas fa-star" style="color: #f59e0b; margin-right: 0.5rem;"></i>Keunggulan Layanan
            </h4>
            <div id="modalFeatures" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; margin-bottom: 2rem;">
                <!-- Features will be inserted here -->
            </div>

            <!-- CTA Buttons -->
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                <a id="modalWhatsApp" href="#" target="_blank" style="flex: 1; min-width: 200px; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 1rem 1.5rem; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); color: white; font-weight: 600; border-radius: 8px; text-decoration: none; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 25px rgba(37,211,102,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                    <i class="fab fa-whatsapp" style="font-size: 1.25rem;"></i>Hubungi via WhatsApp
                </a>
                <button onclick="closeServiceModal()" style="flex: 1; min-width: 150px; padding: 1rem 1.5rem; background: #f1f5f9; color: #001f5c; font-weight: 600; border-radius: 8px; border: none; cursor: pointer; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.background='#e5e7eb';" onmouseout="this.style.background='#f1f5f9';">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Service data for modal
const servicesData = @json($services);

function openServiceModal(index) {
    const service = servicesData[index];
    const modal = document.getElementById('serviceModal');

    // Set modal content
    document.getElementById('modalImage').src = '{{ asset('') }}' + service.image;
    document.getElementById('modalTitle').textContent = service.title;
    document.getElementById('modalFullDesc').textContent = service.full_desc;
    document.getElementById('modalIcon').className = 'fas ' + service.icon;
    document.getElementById('modalIconBadge').style.background = service.color;
    document.getElementById('modalWhatsApp').href = 'https://wa.me/6281180892925?text=' + encodeURIComponent(service.wa_message);

    // Build features list
    const featuresContainer = document.getElementById('modalFeatures');
    featuresContainer.innerHTML = service.features.map(feature =>
        `<div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; color: #555555;">
            <i class="fas fa-check-circle" style="color: ${service.color}; font-size: 0.8rem;"></i>${feature}
        </div>`
    ).join('');

    // Show modal
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeServiceModal() {
    document.getElementById('serviceModal').style.display = 'none';
    document.body.style.overflow = '';
}

// Close modal on outside click
document.getElementById('serviceModal').addEventListener('click', function(e) {
    if (e.target === this) closeServiceModal();
});

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeServiceModal();
});
</script>

<!-- Keunggulan Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Mengapa Memilih Kami</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Keunggulan Layanan OMEXPRESS</h2>
        </div>

        <div class="keunggulan-grid">
            @php
            $advantages = [
                ['icon' => 'fa-shipping-fast', 'title' => 'Pengiriman Cepat', 'desc' => 'Estimasi waktu yang akurat dan pengiriman tepat waktu ke seluruh Indonesia'],
                ['icon' => 'fa-shield-alt', 'title' => 'Aman & Terpercaya', 'desc' => 'Barang Anda dijamin aman dengan sistem keamanan dan asuransi pengiriman'],
                ['icon' => 'fa-map-marked-alt', 'title' => 'Tracking Real-time', 'desc' => 'Pantau status pengiriman Anda secara real-time kapan saja dan di mana saja'],
                ['icon' => 'fa-tags', 'title' => 'Harga Kompetitif', 'desc' => 'Tarif yang bersaing dengan kualitas layanan terbaik di kelasnya'],
                ['icon' => 'fa-headset', 'title' => 'Support 24/7', 'desc' => 'Tim customer service kami siap membantu Anda kapan saja'],
                ['icon' => 'fa-network-wired', 'title' => 'Jaringan Luas', 'desc' => 'Menjangkau lebih dari 500 kota di seluruh Indonesia'],
            ];
            @endphp

            @foreach($advantages as $adv)
            <div class="jne-card hover-card" style="padding: 2rem; text-align: center; background: white;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(0, 31, 92, 0.2);">
                    <i class="fas {{ $adv['icon'] }}" style="font-size: 1.5rem; color: white;"></i>
                </div>
                <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.75rem; font-size: 1.125rem;">{{ $adv['title'] }}</h3>
                <p style="font-size: 0.9rem; color: #666666; line-height: 1.7; margin: 0;">{{ $adv['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Proses Pengiriman Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Cara Kerja</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Proses Pengiriman Mudah</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Kirim barang Anda dalam 4 langkah sederhana</p>
        </div>

        <div class="proses-grid">
            @php
            $steps = [
                ['num' => '01', 'title' => 'Hubungi Kami', 'desc' => 'Hubungi tim kami untuk konsultasi dan informasi tarif', 'icon' => 'fa-phone-alt'],
                ['num' => '02', 'title' => 'Penjemputan', 'desc' => 'Tim kami akan menjemput barang di lokasi Anda', 'icon' => 'fa-box'],
                ['num' => '03', 'title' => 'Proses Pengiriman', 'desc' => 'Barang dikirim dengan armada sesuai layanan pilihan', 'icon' => 'fa-truck'],
                ['num' => '04', 'title' => 'Sampai Tujuan', 'desc' => 'Barang sampai dengan aman dan tepat waktu', 'icon' => 'fa-check-circle'],
            ];
            @endphp

            @foreach($steps as $index => $step)
            <div style="position: relative; padding-top: 15px;">
                <div class="jne-card hover-card" style="padding: 2rem; text-align: center; background: white; position: relative; z-index: 1; overflow: visible;">
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #2596be 0%, #1e7a9e 100%); color: white; font-size: 0.875rem; font-weight: 700; padding: 0.35rem 1rem; border-radius: 20px; z-index: 2;">
                        {{ $step['num'] }}
                    </div>
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0.5rem auto 1.25rem; border: 2px solid #e5e7eb;">
                        <i class="fas {{ $step['icon'] }}" style="font-size: 1.25rem; color: #001f5c;"></i>
                    </div>
                    <h3 style="font-weight: 700; color: #001f5c; margin-bottom: 0.5rem; font-size: 1.05rem;">{{ $step['title'] }}</h3>
                    <p style="font-size: 0.875rem; color: #666666; line-height: 1.6; margin: 0;">{{ $step['desc'] }}</p>
                </div>
                @if($index < 3)
                <div class="step-connector" style="position: absolute; top: 50%; right: -1rem; transform: translateY(-50%); z-index: 0;">
                    <i class="fas fa-chevron-right" style="color: #d1d5db; font-size: 1.25rem;"></i>
                </div>
                @endif
            </div>
            @endforeach
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
        <h2 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.2;">Siap Mengoptimalkan Logistik Anda?</h2>
        <p style="font-size: 1.125rem; color: rgba(255,255,255,0.85); margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.8;">
            Hubungi kami sekarang untuk konsultasi gratis atau untuk memulai pengiriman pertama Anda. Tim ahli kami siap membantu menemukan solusi terbaik untuk bisnis Anda.
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
            <a href="https://wa.me/6281234567890" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; background: #25D366; color: white; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.background='#128C7E'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#25D366'; this.style.transform='translateY(0)';">
                <i class="fab fa-whatsapp"></i>Hubungi via WhatsApp
            </a>
            <a href="{{ route('tracking') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; background: white; color: #001f5c; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.background='#FFD700'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='white'; this.style.transform='translateY(0)';">
                <i class="fas fa-search"></i>Lacak Pengiriman
            </a>
        </div>
    </div>
</section>

<style>
/* Modal Animation */
@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: translateY(-30px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Layanan Grid - 2x2 */
.layanan-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
}

.layanan-card {
    transition: all 0.3s ease;
}

.layanan-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0, 31, 92, 0.15);
}

.layanan-card:hover img {
    transform: scale(1.1);
}

.layanan-card:hover .fa-arrow-right {
    transform: translateX(4px);
}

/* Keunggulan Grid - 3 columns */
.keunggulan-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

/* Proses Grid - 4 columns */
.proses-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

/* Responsive */
@media (max-width: 1024px) {
    .keunggulan-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .proses-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .step-connector {
        display: none !important;
    }
}

@media (max-width: 768px) {
    .layanan-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .keunggulan-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .proses-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    section h1 {
        font-size: 2rem !important;
    }

    section h2 {
        font-size: 1.75rem !important;
    }
}

@media (max-width: 480px) {
    .layanan-card h3 {
        font-size: 1.25rem !important;
    }

    /* Modal responsive */
    #serviceModal > div {
        margin: 0.5rem;
        max-height: 95vh;
    }

    #modalImageContainer {
        height: 200px !important;
    }

    #modalTitle {
        font-size: 1.5rem !important;
    }

    #modalFeatures {
        grid-template-columns: 1fr !important;
    }

    #serviceModal [style*="padding: 2rem"] {
        padding: 1.25rem !important;
    }
}
</style>
@endsection
