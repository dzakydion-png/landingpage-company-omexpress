@extends('home_company.layouts.main')

@section('title', $article->title)
@section('meta_title', $article->meta_title ?: $article->title)
@section('meta_description', $article->meta_description ?: $article->excerpt)
@section('meta_keywords', $article->meta_keywords ?: '')

@section('content')
<section style="padding: 6rem 1rem 4rem; background: #f8fafc;">
    <div style="max-width: 820px; margin: 0 auto;">
        <div style="background: white; border-radius: 20px; padding: 2.5rem 2.5rem 2rem; box-shadow: 0 20px 50px rgba(15,23,42,0.08);">
            <div style="display: inline-flex; align-items: center; background: rgba(37,150,190,0.15); color: #1d4ed8; padding: 0.35rem 0.85rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">{{ $article->category ?? 'Artikel' }}</div>
            <h1 style="margin: 1rem 0 0.75rem; font-size: clamp(2rem, 4vw, 3rem); line-height: 1.2; color: #001f5c; font-weight: 800;">{{ $article->title }}</h1>
            <div style="color: #64748b; font-size: 0.95rem; display: flex; gap: 0.75rem; align-items: center; flex-wrap: wrap;">
                <span><i class="fas fa-calendar" style="margin-right: 0.35rem;"></i>{{ $article->published_at?->translatedFormat('d F Y') ?? $article->created_at->translatedFormat('d F Y') }}</span>
            </div>
        </div>

        @if ($article->cover_image)
            <div style="margin-top: 2rem;">
                <img src="{{ $article->cover_image }}" alt="{{ $article->title }}" style="width: 100%; height: auto; border-radius: 18px; box-shadow: 0 16px 40px rgba(15,23,42,0.12);">
            </div>
        @endif

        <div style="margin-top: 2rem; background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 20px 50px rgba(15,23,42,0.08);">
            <div class="article-content">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</section>

<style>
.article-content {
    color: #1f2937;
    font-size: 1.05rem;
    line-height: 1.9;
}
.article-content h2 {
    font-size: 1.6rem;
    margin: 2.2rem 0 1rem;
    color: #0f172a;
}
.article-content h3 {
    font-size: 1.3rem;
    margin: 1.8rem 0 0.85rem;
    color: #0f172a;
}
.article-content p {
    margin: 0 0 1.4rem;
}
.article-content ul,
.article-content ol {
    margin: 0 0 1.6rem 1.2rem;
    padding: 0;
}
.article-content li {
    margin-bottom: 0.6rem;
}
.article-content blockquote {
    margin: 2rem 0;
    padding: 1rem 1.5rem;
    border-left: 4px solid #2596be;
    background: #f1f5f9;
    color: #334155;
    border-radius: 12px;
}
.article-content img {
    max-width: 100%;
    border-radius: 14px;
    margin: 1.5rem 0;
}
.article-content a {
    color: #1d4ed8;
    text-decoration: underline;
}
@media (max-width: 768px) {
    .article-content {
        font-size: 1rem;
    }
}
</style>
@endsection
