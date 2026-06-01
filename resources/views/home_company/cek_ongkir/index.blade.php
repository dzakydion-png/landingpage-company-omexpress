@extends('home_company.layouts.main')

@section('title', 'Cek Ongkir')

@section('content')
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #002d7a 100%); color: white; padding: 6rem 1rem 4rem; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.06; background-image: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.6) 0, transparent 20%), radial-gradient(circle at 80% 30%, rgba(37,150,190,0.45) 0, transparent 24%), radial-gradient(circle at 50% 80%, rgba(255,215,0,0.25) 0, transparent 20%);"></div>
    <div style="position: relative; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; align-items: center;">
        <div>
            <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.12); color: #cdefff; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">Cek Ongkir</span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 4rem); line-height: 1.05; font-weight: 800; margin: 1rem 0; max-width: 14ch;">Tarif ongkir resmi langsung dari database.</h1>
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
        <div style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
            <h2 style="font-size: 1.8rem; color: #001f5c; font-weight: 800; margin-bottom: 0.75rem;">Jasa Ekspedisi </h2>
            <p style="color: #475569; line-height: 1.8; margin-bottom: 0.75rem;">OMEXPRESS melayani pengiriman via darat, laut, dan udara dengan tarif yang transparan sesuai kebutuhan bisnis dan personal. Semua harga di tabel berikut diambil langsung dari database agar selalu sama dengan data yang tersedia di dashboard admin.</p>
            <p style="color: #475569; line-height: 1.8; margin: 0;">Gunakan fitur pencarian untuk menemukan tujuan spesifik, atau pilih kategori layanan pada menu dropdown untuk menyaring rute yang relevan.</p>
        </div>

        <div style="background: white; border-radius: 24px; padding: 1.5rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;" data-cekongkir data-api="{{ url('/api/shipping-rates') }}" data-region="{{ request('region') }}">
            <form id="rate-filter" style="display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <label for="per_page" style="color: #475569; font-weight: 600;">Tampilkan</label>
                    <select id="per_page" name="per_page" style="border: 1px solid #cbd5e1; border-radius: 10px; padding: 0.5rem 0.75rem; background: white;">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    <span style="color: #64748b;">entri</span>
                </div>

                <div style="display: flex; align-items: center; gap: 0.5rem; margin-left: auto;">
                    <label for="search" style="color: #475569; font-weight: 600;">Cari tujuan</label>
                    <input id="search" name="search" type="text" placeholder="Contoh: Sumatera" style="border: 1px solid #cbd5e1; border-radius: 10px; padding: 0.55rem 0.75rem; min-width: 220px;" />
                    <button type="submit" class="btn-jne-red" style="border: none; cursor: pointer; padding: 0.6rem 1.1rem;">Search</button>
                </div>
            </form>

            <div style="overflow-x: auto; border: 1px solid #e2e8f0; border-radius: 16px;">
                <table style="width: 100%; border-collapse: collapse; min-width: 640px;">
                    <thead>
                        <tr style="background: #001f5c; color: white; text-align: left;">
                            <th style="padding: 1rem 1.25rem; font-size: 0.95rem; letter-spacing: 0.02em;">Tujuan</th>
                            <th style="padding: 1rem 1.25rem; font-size: 0.95rem; letter-spacing: 0.02em;">Ongkir Per Kg</th>
                            <th style="padding: 1rem 1.25rem; font-size: 0.95rem; letter-spacing: 0.02em;">Estimasi</th>
                        </tr>
                    </thead>
                    <tbody id="rate-table-body">
                        <tr>
                            <td colspan="3" style="padding: 1.5rem; text-align: center; color: #64748b;">Memuat data tarif...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="rate-pagination" style="display: flex; flex-wrap: wrap; gap: 0.5rem; align-items: center; justify-content: flex-end; margin-top: 1.25rem;"></div>
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
