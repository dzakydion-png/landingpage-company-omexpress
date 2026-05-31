@extends('admin.layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Artikel</h2>
        <div class="actions">
            <a class="btn" href="{{ route('admin.articles.create') }}">Tambah Artikel</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <td>
                            <strong>{{ $article->title }}</strong>
                            <div class="muted" style="font-size: 0.85rem;">Slug: {{ $article->slug }}</div>
                        </td>
                        <td>{{ $article->category ?? '-' }}</td>
                        <td>
                            <span class="status {{ $article->is_published ? 'active' : 'inactive' }}">
                                {{ $article->is_published ? 'Terbit' : 'Draft' }}
                            </span>
                        </td>
                        <td>{{ $article->published_at?->translatedFormat('d M Y') ?? '-' }}</td>
                        <td>
                            <div class="actions">
                                <a class="btn secondary" href="{{ route('admin.articles.edit', $article) }}">Edit</a>
                                <form method="post" action="{{ route('admin.articles.destroy', $article) }}" onsubmit="return confirm('Hapus artikel ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn ghost" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="muted">Belum ada artikel.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($articles->hasPages())
            <div style="margin-top: 1rem; display: flex; gap: 0.5rem;">
                @if ($articles->onFirstPage())
                    <span class="btn ghost">Sebelumnya</span>
                @else
                    <a class="btn ghost" href="{{ $articles->previousPageUrl() }}">Sebelumnya</a>
                @endif
                @if ($articles->hasMorePages())
                    <a class="btn ghost" href="{{ $articles->nextPageUrl() }}">Berikutnya</a>
                @else
                    <span class="btn ghost">Berikutnya</span>
                @endif
            </div>
        @endif
    </div>
@endsection
