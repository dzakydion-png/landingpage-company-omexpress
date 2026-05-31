@extends('admin.layouts.app')

@section('title', 'Tarif Ongkir')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Tarif Ongkir</h2>
        <div class="actions">
            <a class="btn" href="{{ route('admin.shipping-rates.create') }}">Tambah Tarif</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Rute</th>
                    <th>Layanan</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rates as $rate)
                    <tr>
                        <td>
                            <strong>{{ $rate->route_label }}</strong>
                            <div class="muted" style="font-size: 0.85rem;">Min: {{ $rate->min_weight_kg ? $rate->min_weight_kg . ' kg' : '-' }}</div>
                        </td>
                        <td>{{ $rate->service_type }}</td>
                        <td>{{ $rate->price_text }}</td>
                        <td>
                            <span class="status {{ $rate->is_active ? 'active' : 'inactive' }}">
                                {{ $rate->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>
                        <td>{{ $rate->sort_order }}</td>
                        <td>
                            <div class="actions">
                                <a class="btn secondary" href="{{ route('admin.shipping-rates.edit', $rate) }}">Edit</a>
                                <form method="post" action="{{ route('admin.shipping-rates.destroy', $rate) }}" onsubmit="return confirm('Hapus tarif ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn ghost" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="muted">Belum ada tarif ongkir.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($rates->hasPages())
            <div style="margin-top: 1rem; display: flex; gap: 0.5rem;">
                @if ($rates->onFirstPage())
                    <span class="btn ghost">Sebelumnya</span>
                @else
                    <a class="btn ghost" href="{{ $rates->previousPageUrl() }}">Sebelumnya</a>
                @endif
                @if ($rates->hasMorePages())
                    <a class="btn ghost" href="{{ $rates->nextPageUrl() }}">Berikutnya</a>
                @else
                    <span class="btn ghost">Berikutnya</span>
                @endif
            </div>
        @endif
    </div>
@endsection
