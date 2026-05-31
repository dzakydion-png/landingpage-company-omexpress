@extends('home_company.layouts.main')

@section('title', 'Tracking')

@section('content')
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #0a2d74 100%); color: white; padding: 6rem 1rem 4rem; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.08; background-image: linear-gradient(45deg, rgba(255,255,255,0.8) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.8) 50%, rgba(255,255,255,0.8) 75%, transparent 75%, transparent); background-size: 40px 40px;"></div>
    <div style="position: relative; max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; align-items: center;">
            <div>
                <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(37,150,190,0.2); color: #7dd3fc; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">Tracking Paket</span>
                <h1 style="font-size: clamp(2.2rem, 4vw, 4rem); line-height: 1.05; font-weight: 800; margin: 1rem 0; max-width: 12ch;">Pantau status kiriman Anda secara real-time.</h1>
                <p style="font-size: 1.05rem; line-height: 1.8; color: rgba(255,255,255,0.82); max-width: 58ch;">Masukkan nomor resi untuk mendapatkan informasi perjalanan paket, estimasi proses, dan status terakhir dari tim operasional OMEXPRESS.</p>
                <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="#form-tracking" class="btn-jne-red" style="text-decoration: none;">Cek Resi Sekarang</a>
                    <a href="{{ route('home') }}" class="btn-jne-outline" style="text-decoration: none; color: white; border-color: rgba(255,255,255,0.4);">Kembali ke Beranda</a>
                </div>
            </div>
            <div style="background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.16); border-radius: 24px; padding: 1.5rem; box-shadow: 0 24px 60px rgba(0,0,0,0.18);">
                <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem;">
                    <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                        <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Status</div>
                        <div style="font-size: 1.2rem; font-weight: 800;">Dalam Proses</div>
                    </div>
                    <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                        <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Estimasi</div>
                        <div style="font-size: 1.2rem; font-weight: 800;">Sore ini</div>
                    </div>
                    <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                        <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Lokasi</div>
                        <div style="font-size: 1.1rem; font-weight: 800;">Sortir Center</div>
                    </div>
                    <div style="background: white; color: #001f5c; border-radius: 18px; padding: 1.25rem;">
                        <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 0.35rem;">Pembaruan</div>
                        <div style="font-size: 1.1rem; font-weight: 800;">12:30 WIB</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-tracking" style="padding: 4rem 1rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; align-items: start;">
        <div style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
            <h2 style="font-size: 1.6rem; color: #001f5c; font-weight: 800; margin-bottom: 0.75rem;">Cek nomor resi</h2>
            <p style="color: #64748b; line-height: 1.8; margin-bottom: 1.5rem;">Gunakan form ini sebagai pintu masuk tracking. Jika integrasi data belum tersedia, pelanggan tetap mendapatkan petunjuk status yang jelas.</p>
            <form action="#" method="get" style="display: grid; gap: 1rem;">
                <div>
                    <label for="resi" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Nomor Resi</label>
                    <input id="resi" name="resi" type="text" placeholder="Contoh: OMX-2026-000123" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none;" />
                </div>
                <div>
                    <label for="telepon" style="display: block; font-weight: 600; color: #334155; margin-bottom: 0.5rem;">Nomor Telepon</label>
                    <input id="telepon" name="telepon" type="text" placeholder="08xxxxxxxxxx" style="width: 100%; border: 1px solid #cbd5e1; border-radius: 14px; padding: 0.95rem 1rem; font-size: 1rem; outline: none;" />
                </div>
                <button type="submit" class="btn-jne-red" style="border: none; cursor: pointer; justify-content: center; width: 100%;">Lacak Paket</button>
            </form>
            <div style="margin-top: 1.5rem; padding: 1rem 1.1rem; background: #eff6ff; border-radius: 16px; color: #1e3a8a; line-height: 1.7;">
                <strong>Contoh hasil:</strong> Paket sedang menuju sortir center dan akan diperbarui kembali setelah proses scan berikutnya.
            </div>
        </div>

        <div style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 16px 40px rgba(15,23,42,0.08); border: 1px solid #e2e8f0;">
            <h2 style="font-size: 1.6rem; color: #001f5c; font-weight: 800; margin-bottom: 1.25rem;">Riwayat perjalanan paket</h2>
            <div style="display: grid; gap: 1rem;">
                @foreach ($trackingSteps as $step)
                    <div style="display: grid; grid-template-columns: 56px 1fr; gap: 1rem; align-items: start;">
                        <div style="width: 56px; height: 56px; border-radius: 18px; display: flex; align-items: center; justify-content: center; font-weight: 800; color: white; background: {{ $step['status'] === 'done' ? '#16a34a' : ($step['status'] === 'current' ? '#2596be' : '#cbd5e1') }};">{{ substr($step['time'], 0, 2) }}</div>
                        <div style="padding-bottom: 1rem; border-bottom: 1px solid #e2e8f0;">
                            <div style="display: flex; justify-content: space-between; gap: 1rem; align-items: baseline; flex-wrap: wrap;">
                                <h3 style="margin: 0; font-size: 1.05rem; color: #0f172a; font-weight: 700;">{{ $step['title'] }}</h3>
                                <span style="font-size: 0.9rem; color: #64748b;">{{ $step['time'] }}</span>
                            </div>
                            <p style="margin: 0.4rem 0 0; color: #475569; line-height: 1.7;">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section style="padding: 0 1rem 4rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="background: linear-gradient(135deg, #001f5c 0%, #0f4c81 100%); border-radius: 24px; color: white; padding: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem;">
            <div>
                <div style="font-size: 0.9rem; opacity: 0.8;">Tim layanan</div>
                <div style="font-size: 1.35rem; font-weight: 800; margin-top: 0.35rem;">Siap bantu status kiriman</div>
            </div>
            <div>
                <div style="font-size: 0.9rem; opacity: 0.8;">Kontak WhatsApp</div>
                <div style="font-size: 1.1rem; font-weight: 700; margin-top: 0.35rem;">0811 8089 2925</div>
            </div>
            <div>
                <div style="font-size: 0.9rem; opacity: 0.8;">Jam kerja</div>
                <div style="font-size: 1.1rem; font-weight: 700; margin-top: 0.35rem;">Setiap hari kerja</div>
            </div>
        </div>
    </div>
</section>
@endsection
