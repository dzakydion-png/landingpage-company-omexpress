@extends('admin.layouts.app')

@section('content')
<div class="page-header">
    <h2 class="page-title">Tarif Ongkir</h2>
    <a href="{{ route('admin.shipping-rates.create') }}" class="btn">Tambah Tarif</a>
</div>

<!-- Kotak Filter & Pencarian -->
<div class="card" style="margin-bottom: 1.5rem;">
    <form action="{{ route('admin.shipping-rates.index') }}" method="GET" style="display: grid; grid-template-columns: 1fr 1fr auto auto; gap: 10px; align-items: end;">
        <div>
            <label>Cari</label>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Tujuan atau Wilayah...">
        </div>
        <div>
            <label>Layanan</label>
            <select name="service_type" onchange="this.form.submit()">
                <option value="">Semua Layanan</option>
                <option value="darat_laut" {{ request('service_type') == 'darat_laut' ? 'selected' : '' }}>Darat & Laut</option>
                <option value="udara" {{ request('service_type') == 'udara' ? 'selected' : '' }}>Udara</option>
                <option value="motor" {{ request('service_type') == 'motor' ? 'selected' : '' }}>Motor</option>
                <option value="mobil" {{ request('service_type') == 'mobil' ? 'selected' : '' }}>Mobil</option>
                <option value="alat_berat" {{ request('service_type') == 'alat_berat' ? 'selected' : '' }}>Alat Berat</option>
                <option value="charter" {{ request('service_type') == 'charter' ? 'selected' : '' }}>Charter Armada</option>
            </select>
        </div>
        <button type="submit" class="btn" style="background: var(--admin-sidebar);">Cari</button>
        @if(request('search') || request('service_type'))
            <a href="{{ route('admin.shipping-rates.index') }}" class="btn ghost">Reset</a>
        @endif
    </form>
</div>

<!-- Tabel Data -->
<div class="card" style="padding: 0;">
    <div style="overflow-x: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Wilayah & Tujuan</th>
                    <th>Layanan</th>
                    <th>Detail Armada/Kendaraan</th>
                    <th>Harga Dasar</th>
                    <th>Estimasi</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($rates as $rate)
                <tr>
                    <td>
                        <div style="font-weight: 700;">{{ $rate->destination }}</div>
                        <div class="muted" style="font-size: 0.8rem;">{{ $rate->region->name ?? '-' }}</div>
                    </td>
                    <td>
                        <span class="status" style="background: #e0e7ff; color: #3730a3; text-transform: capitalize;">
                            {{ str_replace('_', ' ', $rate->service_type) }}
                        </span>
                    </td>
                    <td>
                        @if($rate->service_type == 'charter')
                            {{ $rate->specific_details['fleet_type'] ?? '-' }}
                        @elseif($rate->service_type == 'motor' || $rate->service_type == 'mobil')
                            {{ $rate->specific_details['vehicle_type'] ?? '-' }}
                        @else
                            <span class="muted">-</span>
                        @endif
                    </td>
                    <td style="font-weight: 700;">Rp {{ number_format($rate->base_price, 0, ',', '.') }}</td>
                    <td>{{ $rate->estimation }}</td>
                    <td style="text-align: right;">
                        <div class="actions" style="justify-content: flex-end;">
                            <a href="{{ route('admin.shipping-rates.edit', $rate->id) }}" class="btn ghost" style="padding: 0.4rem 0.8rem;">Edit</a>
                            <form action="{{ route('admin.shipping-rates.destroy', $rate->id) }}" method="POST" onsubmit="return confirm('Hapus?');" class="logout-form">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn ghost" style="padding: 0.4rem 0.8rem; color: #991b1b; border-color: #fee2e2;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" style="text-align: center; padding: 2rem;">Data tidak ditemukan.</td></tr>
                @endforelse
            </tbody>
        </table>
        
    </div>
</div>
@if($rates->hasPages())
<div class="card" style="margin-top: 1rem; display: flex; justify-content: space-between; align-items: center; padding: 1rem;">
    <div class="muted" style="font-size: 0.9rem;">
        Menampilkan {{ $rates->firstItem() }} sampai {{ $rates->lastItem() }} dari {{ $rates->total() }} data
    </div>
    <div style="display: flex; gap: 0.5rem;">
        {{-- Previous Page Link --}}
        @if ($rates->onFirstPage())
            <button class="btn ghost" disabled style="opacity: 0.5; cursor: not-allowed;">« Sebelumnya</button>
        @else
            <a href="{{ $rates->previousPageUrl() }}" class="btn ghost">« Sebelumnya</a>
        @endif

        {{-- Next Page Link --}}
        @if ($rates->hasMorePages())
            <a href="{{ $rates->nextPageUrl() }}" class="btn ghost">Selanjutnya »</a>
        @else
            <button class="btn ghost" disabled style="opacity: 0.5; cursor: not-allowed;">Selanjutnya »</button>
        @endif
    </div>
</div>
@endif
@endsection
