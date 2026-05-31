<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'alpha_dash:ascii', Rule::unique('articles', 'slug')],
            'category' => ['nullable', 'string', 'max:120'],
            'excerpt' => ['required', 'string'],
            'content' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'string', 'max:255'],
            'cover_image_upload' => ['nullable', 'image', 'max:2048'],
            'meta_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable'],
        ]);

        $slug = $this->makeUniqueSlug($validated['slug'] ?? null, $validated['title']);
        $coverImage = $validated['cover_image'] ?? null;

        if ($request->hasFile('cover_image_upload')) {
            $coverImage = $this->storeArticleImage($request->file('cover_image_upload'));
        }

        Article::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'] ?? null,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'] ?? null,
            'cover_image' => $coverImage,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'published_at' => $validated['published_at'] ?? null,
            'is_published' => $request->boolean('is_published'),
        ]);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'alpha_dash:ascii', Rule::unique('articles', 'slug')->ignore($article->id)],
            'category' => ['nullable', 'string', 'max:120'],
            'excerpt' => ['required', 'string'],
            'content' => ['nullable', 'string'],
            'cover_image' => ['nullable', 'string', 'max:255'],
            'cover_image_upload' => ['nullable', 'image', 'max:2048'],
            'meta_title' => ['nullable', 'string', 'max:60'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable'],
        ]);

        $slug = $this->makeUniqueSlug($validated['slug'] ?? null, $validated['title'], $article->id);
        $coverImage = $validated['cover_image'] ?? $article->cover_image;

        if ($request->hasFile('cover_image_upload')) {
            $coverImage = $this->storeArticleImage($request->file('cover_image_upload'));
        }

        $article->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'] ?? null,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'] ?? null,
            'cover_image' => $coverImage,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'published_at' => $validated['published_at'] ?? null,
            'is_published' => $request->boolean('is_published'),
        ]);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil dihapus.');
    }

    private function makeUniqueSlug(?string $preferredSlug, string $fallbackTitle, ?int $ignoreId = null): string
    {
        $base = Str::slug($preferredSlug ?: $fallbackTitle);
        $slug = $base !== '' ? $base : Str::random(6);
        $counter = 2;

        while (Article::where('slug', $slug)
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'max:2048'],
        ]);

        $url = $this->storeArticleImage($request->file('file'));

        return response()->json(['location' => $url]);
    }

    private function storeArticleImage($file): string
    {
        $path = $file->store('articles', 'public');

        return Storage::disk('public')->url($path);
    }
}
