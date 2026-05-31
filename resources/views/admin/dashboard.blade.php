@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Dashboard</h2>
    </div>

    <div class="grid cols-2">
        <div class="card">
            <div class="muted">Total Artikel</div>
            <h3 style="margin: 0.5rem 0 0; font-size: 2rem;">{{ $totalArticles }}</h3>
            <div class="muted">Terbit: {{ $publishedArticles }}</div>
        </div>
        <div class="card">
            <div class="muted">Tarif Ongkir</div>
            <h3 style="margin: 0.5rem 0 0; font-size: 2rem;">{{ $totalRates }}</h3>
            <div class="muted">Aktif: {{ $activeRates }}</div>
        </div>
    </div>

    <div style="margin-top: 1.5rem;" class="card">
        <h3 style="margin-top: 0;">Aksi Cepat</h3>
        <div class="actions">
            <a class="btn" href="{{ route('admin.articles.create') }}">Tambah Artikel</a>
            <a class="btn secondary" href="{{ route('admin.shipping-rates.create') }}">Tambah Tarif Ongkir</a>
        </div>
    </div>
@endsection
