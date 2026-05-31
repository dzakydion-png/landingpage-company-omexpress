@extends('home_company.layouts.main')

@section('title', 'Artikel')

@section('content')
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #0c2f6f 100%); color: white; padding: 6rem 1rem 4rem; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.08; background: radial-gradient(circle at top left, rgba(255,255,255,0.55), transparent 25%), radial-gradient(circle at bottom right, rgba(37,150,190,0.5), transparent 28%);"></div>
    <div style="position: relative; max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; align-items: center;">
        <div>
            <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.12); color: #cdefff; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">Artikel & Insight</span>
            <h1 style="font-size: clamp(2.2rem, 4vw, 4rem); line-height: 1.05; font-weight: 800; margin: 1rem 0; max-width: 14ch;">Wawasan logistik untuk bisnis dan pelanggan.</h1>
            <p style="font-size: 1.05rem; line-height: 1.8; color: rgba(255,255,255,0.82); max-width: 58ch;">Kumpulan tulisan singkat tentang pengiriman, packing, layanan cargo, dan cara memanfaatkan fitur OMEXPRESS dengan lebih efektif.</p>
        </div>
        <div style="background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.16); border-radius: 24px; padding: 1.5rem; box-shadow: 0 24px 60px rgba(0,0,0,0.18);">
            <h2 style="font-size: 1.25rem; font-weight: 800; margin: 0 0 1rem;">Fokus konten</h2>
            <div style="display: grid; gap: 0.85rem;">
                @foreach ($highlights as $highlight)
                    <div style="display: flex; gap: 0.75rem; align-items: start; background: rgba(255,255,255,0.08); border-radius: 16px; padding: 0.9rem 1rem;">
                        <span style="width: 10px; height: 10px; margin-top: 0.45rem; border-radius: 9999px; background: #ffd700; flex: 0 0 auto;"></span>
                        <span style="line-height: 1.7;">{{ $highlight }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section style="padding: 4rem 1rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            @forelse ($articles as $article)
                <article style="background: white; border-radius: 24px; padding: 1.75rem; border: 1px solid #e2e8f0; box-shadow: 0 16px 40px rgba(15,23,42,0.06); display: flex; flex-direction: column; gap: 1rem;">
                    <div style="display: flex; justify-content: space-between; gap: 1rem; flex-wrap: wrap;">
                        <span style="display: inline-flex; align-items: center; background: #eff6ff; color: #1d4ed8; padding: 0.45rem 0.8rem; border-radius: 9999px; font-size: 0.82rem; font-weight: 700;">{{ $article['category'] }}</span>
                        <span style="color: #64748b; font-size: 0.9rem;">{{ $article['date'] }}</span>
                    </div>
                    <div>
                        <h2 style="margin: 0 0 0.75rem; font-size: 1.35rem; line-height: 1.35; color: #001f5c; font-weight: 800;">
                            <a href="{{ route('artikel.show', $article['slug']) }}" style="color: inherit; text-decoration: none;">{{ $article['title'] }}</a>
                        </h2>
                        <p style="margin: 0; color: #475569; line-height: 1.8;">{{ $article['excerpt'] }}</p>
                    </div>
                    <div style="margin-top: auto; display: flex; gap: 0.75rem; flex-wrap: wrap;">
                        <a href="{{ route('tracking') }}" class="btn-jne-outline" style="text-decoration: none;">Cek Tracking</a>
                        <a href="{{ route('cek_ongkir') }}" class="btn-jne-red" style="text-decoration: none;">Cek Ongkir</a>
                    </div>
                </article>
            @empty
                <div style="grid-column: 1 / -1; background: white; border-radius: 24px; padding: 1.75rem; border: 1px solid #e2e8f0; box-shadow: 0 16px 40px rgba(15,23,42,0.06); color: #475569; line-height: 1.8;">
                    Belum ada artikel yang dipublikasikan. Tambahkan data ke tabel articles agar kartu artikel tampil di halaman ini.
                </div>
            @endforelse
        </div>
    </div>
</section>

<section style="padding: 0 1rem 4rem; background: #f8fafc;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="background: linear-gradient(135deg, #001f5c 0%, #0f4c81 100%); color: white; border-radius: 24px; padding: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; align-items: center;">
            <div>
                <div style="font-size: 1.35rem; font-weight: 800;">Dapatkan Pelayanan dan Penawaran Terbaik Dari Kami Untuk Anda</div>
                <p style="margin: 0.5rem 0 0; color: rgba(255,255,255,0.8); line-height: 1.7;">Kami Akan Berusaha Semaksimal Mungkin Menjadi Partner Terbaik Untuk Bisnis Anda.</p>
            </div>
            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap; justify-content: flex-end;">
                <a href="{{ route('home') }}" class="btn-jne-outline" style="text-decoration: none; color: white; border-color: rgba(255,255,255,0.4);">Kembali ke Beranda</a>
                <a href="{{ route('galeri') }}" class="btn-jne-red" style="text-decoration: none;">Lihat Galeri</a>
            </div>
        </div>
    </div>
</section>
@endsection
