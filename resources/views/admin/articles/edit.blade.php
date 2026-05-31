@extends('admin.layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Edit Artikel</h2>
        <a class="btn ghost" href="{{ route('admin.articles.index') }}">Kembali</a>
    </div>

    <form class="card form-grid" method="post" action="{{ route('admin.articles.update', $article) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Judul</label>
            <input id="title" name="title" type="text" value="{{ old('title', $article->title) }}" required>
        </div>
        <div>
            <label for="category">Kategori</label>
            <input id="category" name="category" type="text" value="{{ old('category', $article->category) }}">
        </div>
        <div>
            <label for="excerpt">Ringkasan</label>
            <textarea id="excerpt" name="excerpt" required>{{ old('excerpt', $article->excerpt) }}</textarea>
        </div>
        <div>
            <label for="content">Konten Lengkap</label>
            <textarea id="content" name="content">{{ old('content', $article->content) }}</textarea>
        </div>
        <div>
            <label for="cover_image">URL Gambar</label>
            <input id="cover_image" name="cover_image" type="text" value="{{ old('cover_image', $article->cover_image) }}">
        </div>
        <div class="grid cols-2">
            <div>
                <label for="published_at">Tanggal Terbit</label>
                <input id="published_at" name="published_at" type="date" value="{{ old('published_at', $article->published_at?->format('Y-m-d')) }}">
            </div>
            <div style="display: flex; align-items: center; gap: 0.5rem; margin-top: 2rem;">
                <input id="is_published" name="is_published" type="checkbox" value="1" {{ old('is_published', $article->is_published) ? 'checked' : '' }} style="width: auto;">
                <label for="is_published" class="muted">Publikasikan</label>
            </div>
        </div>
        <button class="btn" type="submit">Perbarui Artikel</button>
    </form>
@endsection
