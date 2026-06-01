@extends('admin.layouts.app')

@section('title', 'Manajemen Region')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Manajemen Region</h2>
        <div class="actions">
            <a class="btn" href="{{ route('admin.regions.create') }}">Tambah Region</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($regions as $region)
                    <tr>
                        <td><strong>{{ $region->name }}</strong></td>
                        <td class="muted">{{ $region->slug }}</td>
                        <td>
                            <div class="actions">
                                <a class="btn secondary" href="{{ route('admin.regions.edit', $region) }}">Edit</a>
                                <form method="post" action="{{ route('admin.regions.destroy', $region) }}" onsubmit="return confirm('Hapus region ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn ghost" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="muted">Belum ada region.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($regions->hasPages())
            <div style="margin-top: 1rem; display: flex; gap: 0.5rem;">
                @if ($regions->onFirstPage())
                    <span class="btn ghost">Sebelumnya</span>
                @else
                    <a class="btn ghost" href="{{ $regions->previousPageUrl() }}">Sebelumnya</a>
                @endif
                @if ($regions->hasMorePages())
                    <a class="btn ghost" href="{{ $regions->nextPageUrl() }}">Berikutnya</a>
                @else
                    <span class="btn ghost">Berikutnya</span>
                @endif
            </div>
        @endif
    </div>
@endsection
