@extends('admin.layouts.app')

@section('title', 'Tambah Tarif Ongkir')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Tambah Tarif Ongkir</h2>
        <a class="btn ghost" href="{{ route('admin.shipping-rates.index') }}">Kembali</a>
    </div>

    <form class="card form-grid" method="post" action="{{ route('admin.shipping-rates.store') }}">
        @csrf
        <div>
            <label for="route_label">Rute</label>
            <input id="route_label" name="route_label" type="text" value="{{ old('route_label') }}" required>
        </div>
        <div>
            <label for="service_type">Jenis Layanan</label>
            <input id="service_type" name="service_type" type="text" value="{{ old('service_type') }}" required>
        </div>
        <div class="grid cols-2">
            <div>
                <label for="price_text">Harga Tampil</label>
                <input id="price_text" name="price_text" type="text" value="{{ old('price_text') }}" required>
            </div>
            <div>
                <label for="price_from">Harga Dasar (opsional)</label>
                <input id="price_from" name="price_from" type="number" min="0" value="{{ old('price_from') }}">
            </div>
        </div>
        <div>
            <label for="note">Catatan</label>
            <textarea id="note" name="note">{{ old('note') }}</textarea>
        </div>
        <div class="grid cols-2">
            <div>
                <label for="min_weight_kg">Minimal Berat (kg)</label>
                <input id="min_weight_kg" name="min_weight_kg" type="number" step="0.01" min="0" value="{{ old('min_weight_kg') }}">
            </div>
            <div>
                <label for="sort_order">Urutan</label>
                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', 0) }}">
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input id="is_active" name="is_active" type="checkbox" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width: auto;">
            <label for="is_active" class="muted">Aktif</label>
        </div>
        <button class="btn" type="submit">Simpan Tarif</button>
    </form>
@endsection
