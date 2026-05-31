@extends('home_company.layouts.main')

@section('title', 'Cek Ongkir')

@section('content')
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #002d7a 100%); color: white; padding: 6rem 1rem 4rem; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.06; background-image: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.6) 0, transparent 20%), radial-gradient(circle at 80% 30%, rgba(37,150,190,0.45) 0, transparent 24%), radial-gradient(circle at 50% 80%, rgba(255,215,0,0.25) 0, transparent 20%);"></div>
    <div style="position: relative; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; align-items: center;">
        <div>
            <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.12); color: #cdefff; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">Cek Ongkir</span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 4rem); line-height: 1.05; font-weight: 800; margin: 1rem 0; max-width: 12ch;">Hitung estimasi tarif lebih cepat.</h1>
            <p style="font-size: 1.05rem; line-height: 1.8; color: rgba(255,255,255,0.82); max-width: 58ch;">Gunakan informasi area tujuan, layanan, berat, dan volume untuk memperkirakan ongkos kirim sesuai kebutuhan cargo OMEXPRESS.</p>
            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 2rem;">
                <a href="#calculator" class="btn-jne-red" style="text-decoration: none;">Buka Kalkulator</a>
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
                    <div style="font-size: 1.2rem; font-weight: 800;">Darat, udara, express</div>
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
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; align-items: start;">
        <div style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
            <h2 style="font-size: 1.6rem; color: #001f5c; font-weight: 800; margin-bottom: 0.75rem;">Kalkulator tarif sederhana</h2>
            <p style="color: #64748b; line-height: 1.8; margin-bottom: 1.5rem;">Form ini disiapkan sebagai titik awal estimasi ongkir. Anda bisa menghubungkannya ke kalkulasi dinamis kapan saja nanti.</p>
            <form action="#" method="get" style="display: grid; gap: 1rem;">
                <div>
                    <label for="asal" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Kota asal</label>
                    <input id="asal" name="asal" type="text" placeholder="Contoh: Jakarta" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none;" />
                </div>
                <div>
                    <label for="tujuan" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Kota tujuan</label>
                    <input id="tujuan" name="tujuan" type="text" placeholder="Contoh: Surabaya" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none;" />
                </div>
                <div>
                    <label for="berat" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Berat / Volume</label>
                    <input id="berat" name="berat" type="text" placeholder="Contoh: 12 kg atau 0.8 m3" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none;" />
                </div>
                <div>
                    <label for="layanan" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Layanan</label>
                    <select id="layanan" name="layanan" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none; background: white;">
                        @foreach ($serviceOptions as $serviceOption)
                            <option value="{{ $serviceOption }}">{{ $serviceOption }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn-jne-red" style="border: none; cursor: pointer; justify-content: center; width: 100%;">Hitung Ongkir</button>
            </form>
            <div style="margin-top: 1.5rem; padding: 1rem 1.1rem; background: #ecfeff; border-radius: 16px; color: #155e75; line-height: 1.7;">
                <strong>Catatan:</strong> Tarif dapat berubah tergantung dimensi, tujuan akhir, dan armada yang tersedia.
            </div>
        </div>

        <div style="display: grid; gap: 1rem;">
            @forelse ($rateCards as $rateCard)
                <div style="background: white; border-radius: 24px; padding: 1.5rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
                    <div style="display: flex; justify-content: space-between; gap: 1rem; align-items: start; flex-wrap: wrap;">
                        <div>
                            <div style="font-size: 0.85rem; color: #64748b; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700;">{{ $rateCard['area'] }}</div>
                            <h3 style="margin: 0.5rem 0 0; color: #001f5c; font-size: 1.25rem; font-weight: 800;">{{ $rateCard['price'] }}</h3>
                        </div>
                        <span style="background: #eff6ff; color: #1d4ed8; padding: 0.45rem 0.8rem; border-radius: 9999px; font-size: 0.82rem; font-weight: 700;">Estimasi</span>
                    </div>
                    <p style="margin: 1rem 0 0; color: #475569; line-height: 1.7;">{{ $rateCard['note'] }}</p>
                </div>
            @empty
                <div style="background: white; border-radius: 24px; padding: 1.5rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0; color: #475569; line-height: 1.8;">
                    Tarif belum tersedia saat ini. Silakan tambahkan data ongkir ke database agar kartu tarif muncul di halaman ini.
                </div>
            @endforelse

            <div style="background: linear-gradient(135deg, #001f5c 0%, #0f4c81 100%); color: white; border-radius: 24px; padding: 1.75rem;">
                <h3 style="margin: 0 0 0.75rem; font-size: 1.25rem; font-weight: 800;">Layanan yang umum dipilih</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                    @forelse ($serviceOptions as $serviceOption)
                        <span style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.15); padding: 0.55rem 0.8rem; border-radius: 9999px;">{{ $serviceOption }}</span>
                    @empty
                        <span style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.15); padding: 0.55rem 0.8rem; border-radius: 9999px;">Belum ada layanan</span>
                    @endforelse
                </div>
            </div>
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
