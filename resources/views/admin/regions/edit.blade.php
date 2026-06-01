@extends('admin.layouts.app')

@section('title', 'Edit Region')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Edit Region</h2>
        <a class="btn ghost" href="{{ route('admin.regions.index') }}">Kembali</a>
    </div>

    <form class="card form-grid" method="post" action="{{ route('admin.regions.update', $region) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama Region</label>
            <input id="name" name="name" type="text" value="{{ old('name', $region->name) }}" required>
        </div>
        <div>
            <label for="slug">Slug (opsional)</label>
            <input id="slug" name="slug" type="text" value="{{ old('slug', $region->slug) }}">
            <small class="muted">Jika kosong, slug akan dibuat otomatis dari nama.</small>
        </div>
        <button class="btn" type="submit">Perbarui Region</button>
    </form>
@endsection
