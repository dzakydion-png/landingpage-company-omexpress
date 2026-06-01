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
            <label for="region_id">Region</label>
            <select id="region_id" name="region_id" required>
                <option value="">Pilih region</option>
                @foreach ($regions as $region)
                    <option value="{{ $region->id }}" {{ (string) old('region_id') === (string) $region->id ? 'selected' : '' }}>
                        {{ $region->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="destination">Tujuan</label>
            <input id="destination" name="destination" type="text" value="{{ old('destination') }}" required>
        </div>
        <div class="grid cols-2">
            <div>
                <label for="base_price">Harga Dasar</label>
                <input id="base_price" name="base_price" type="number" min="0" value="{{ old('base_price') }}" required>
            </div>
            <div>
                <label for="estimation">Estimasi</label>
                <input id="estimation" name="estimation" type="text" value="{{ old('estimation') }}" required>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input id="is_active" name="is_active" type="checkbox" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width: auto;">
            <label for="is_active" class="muted">Aktif</label>
        </div>
        <button class="btn" type="submit">Simpan Tarif</button>
    </form>
@endsection
