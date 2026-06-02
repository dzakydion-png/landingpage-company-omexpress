@extends('home_company.layouts.main')

@section('title', 'Cek Ongkir')

@section('content')
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #002d7a 100%); color: white; padding: 6rem 1rem 4rem; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.06; background-image: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.6) 0, transparent 20%), radial-gradient(circle at 80% 30%, rgba(37,150,190,0.45) 0, transparent 24%), radial-gradient(circle at 50% 80%, rgba(255,215,0,0.25) 0, transparent 20%);"></div>
    <div style="position: relative; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; align-items: center;">
        <div>
            <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.12); color: #cdefff; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">Cek Ongkir</span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 4rem); line-height: 1.05; font-weight: 800; margin: 1rem 0; max-width: 14ch;">Tarif ongkir resmi langsung dari OmExpress</h1>
            <p style="font-size: 1.05rem; line-height: 1.8; color: rgba(255,255,255,0.82); max-width: 58ch;">Lihat daftar harga berdasarkan layanan dan tujuan terbaru. Semua nilai ditampilkan persis seperti yang dikelola melalui dashboard admin.</p>
            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 2rem;">
                <a href="#calculator" class="btn-jne-red" style="text-decoration: none;">Lihat Tabel Tarif</a>
                <a href="{{ route('tracking') }}" class="btn-jne-outline" style="text-decoration: none; color: white; border-color: rgba(255,255,255,0.4);">Lanjut ke Tracking</a>
            </div>
        </div>
        <div style="background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.16); border-radius: 24px; padding: 1.5rem; box-shadow: 0 24px 60px rgba(0,0,0,0.18);">
            <div style="display: grid; gap: 1rem;">
                <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Minimum charge</div>
                    <div style="font-size: 1.2rem; font-weight: 800;">10 kg</div>
                </div>
                <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Jenis layanan</div>
                    <div style="font-size: 1.2rem; font-weight: 800;">Darat, Laut, Udara, Express</div>
                </div>
                <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Respon</div>
                    <div style="font-size: 1.2rem; font-weight: 800;">Estimasi cepat</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="calculator" style="padding: 4rem 1rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto; display: grid; gap: 2rem;">
        
        <!-- Bagian Teks SEO Dinamis -->
        <div style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
            @php
                $seoRegionName = $regionName ?? 'Seluruh Indonesia';
                $tujuanTeks = $seoRegionName === 'Seluruh Indonesia' ? 'berbagai tujuan di seluruh Indonesia' : "wilayah $seoRegionName";
            @endphp
            <h2 style="font-size: 1.8rem; color: #001f5c; font-weight: 800; margin-bottom: 0.75rem;">
                Jasa Ekspedisi Jakarta ke {{ $seoRegionName }} Murah dan Aman
            </h2>
            <p style="color: #475569; line-height: 1.8; margin-bottom: 0.75rem;">
                Sedang mencari jasa ekspedisi dari Jakarta ke {{ $tujuanTeks }} yang cepat, aman, dan terjangkau? OmExpress siap membantu pengiriman Anda dengan tarif yang transparan. Kami melayani pengiriman via darat, laut, dan udara dengan keamanan terjamin.
            </p>
            <p style="color: #475569; line-height: 1.8; margin: 0;">
                Gunakan dropdown wilayah untuk memfilter tujuan, lalu manfaatkan pencarian di tabel untuk menemukan tarif yang paling sesuai dengan kebutuhan Anda.
            </p>
        </div>

        <!-- Tabel Ongkir yang Responsif -->
         <div style="background: white; border-radius: 24px; padding: 1.5rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0; max-width: 100%; overflow: hidden;" data-cekongkir data-api="{{ url('/api/shipping-rates') }}" data-region="{{ $regionSlug ?? request('region') }}">
            <form id="rate-filter" class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between mb-4">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <label for="per_page" class="font-semibold text-slate-600 whitespace-nowrap">Tampilkan</label>
                    <select id="per_page" name="per_page" class="rounded-lg border border-slate-300 bg-white px-3 py-2">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <span class="text-slate-500 hidden sm:inline">entri</span>
                </div>
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center lg:ml-auto w-full sm:w-auto">
                    <label for="search" class="font-semibold text-slate-600 whitespace-nowrap">Cari tujuan</label>
                    <div class="flex gap-2 w-full">
                        <input id="search" name="search" type="text" placeholder="Contoh: Sumatera" class="rounded-lg border border-slate-300 px-3 py-2 w-full sm:min-w-[220px]" />
                        <button type="submit" class="btn-jne-red border-0 px-4 py-2 shrink-0">Search</button>
                    </div>
                </div>
            </form>
            
            <!-- Penambahan min-w untuk memaksa scroll horisontal di HP -->
            <div class="overflow-x-auto rounded-2xl border border-slate-200 w-full">
                <table class="w-full border-collapse min-w-[550px]">
                    <thead>
                        <tr class="bg-[#001f5c] text-left text-white">
                            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Tujuan</th>
                            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Ongkir Per Kg</th>
                            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Estimasi</th>
                        </tr>
                    </thead>
                    <tbody id="rate-table-body">
                        <tr>
                            <td colspan="3" class="px-6 py-6 text-center text-slate-500">Memuat data tarif...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div id="rate-pagination" class="mt-5 flex flex-wrap items-center justify-center sm:justify-end gap-2"></div>
            
            <noscript>
                <div style="margin-top: 1rem; color: #ef4444; font-weight: 600;">Aktifkan JavaScript untuk melihat tabel tarif terbaru.</div>
            </noscript>
        </div>
    </div>
</section>

<section style="padding: 0 1rem 4rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="background: #ffffff; border-radius: 24px; padding: 2rem; border: 1px solid #e2e8f0; box-shadow: 0 16px 40px rgba(15,23,42,0.06);">
            <h2 style="font-size: 1.4rem; color: #001f5c; font-weight: 800; margin-bottom: 0.75rem;">Butuh tarif pasti?</h2>
            <p style="color: #475569; line-height: 1.8; margin: 0;">Hubungi tim OMEXPRESS untuk penawaran yang lebih detail jika pengiriman Anda memiliki volume besar, tujuan khusus, atau kebutuhan armada tertentu.</p>
        </div>
    </div>
</section>
@endsection
