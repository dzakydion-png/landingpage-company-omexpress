@extends('admin.layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <div class="page-header">
        <h2 class="page-title">Edit Artikel</h2>
        <a class="btn ghost" href="{{ route('admin.articles.index') }}">Kembali</a>
    </div>

    <form class="card form-grid" method="post" action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data">
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
            <label for="slug">Slug</label>
            <input id="slug" name="slug" type="text" value="{{ old('slug', $article->slug) }}" placeholder="contoh-judul-artikel">
            <div class="muted" style="margin-top: 0.35rem;">Slug akan otomatis dibuat dari judul, namun bisa diubah manual.</div>
        </div>
        <div class="grid cols-2">
            <div>
                <label for="meta_title">Meta Title</label>
                <input id="meta_title" name="meta_title" type="text" value="{{ old('meta_title', $article->meta_title) }}" maxlength="60">
                <div class="muted" style="margin-top: 0.35rem;">Maks 60 karakter. <span id="meta-title-count">0</span>/60</div>
            </div>
            <div>
                <label for="meta_keywords">Meta Keywords</label>
                <input id="meta_keywords" name="meta_keywords" type="text" value="{{ old('meta_keywords', $article->meta_keywords) }}" placeholder="logistik, cargo, ongkir">
            </div>
        </div>
        <div>
            <label for="meta_description">Meta Description</label>
            <textarea id="meta_description" name="meta_description" maxlength="160">{{ old('meta_description', $article->meta_description) }}</textarea>
            <div class="muted" style="margin-top: 0.35rem;">Maks 160 karakter. <span id="meta-description-count">0</span>/160</div>
        </div>
        <div>
            <label>Preview SEO</label>
            <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 1rem; background: #f9fafb;">
                <div id="seo-preview-title" style="color: #1d4ed8; font-weight: 700; margin-bottom: 0.25rem;">Judul Artikel</div>
                <div id="seo-preview-url" style="color: #15803d; font-size: 0.9rem; margin-bottom: 0.35rem;">{{ url('/') }}/artikel/slug-anda</div>
                <div id="seo-preview-description" style="color: #4b5563; font-size: 0.9rem;">Deskripsi singkat artikel akan tampil di sini.</div>
            </div>
        </div>
        <div>
            <label for="cover_image">URL Gambar</label>
            <input id="cover_image" name="cover_image" type="text" value="{{ old('cover_image', $article->cover_image) }}">
        </div>
        <div>
            <label for="cover_image_upload">Upload Gambar</label>
            <input id="cover_image_upload" name="cover_image_upload" type="file" accept="image/*">
            <div class="muted" style="margin-top: 0.35rem;">Format: JPG, PNG, GIF, WEBP. Maks 2MB.</div>
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

    <script src="https://cdn.tiny.cloud/1/uwkmulbug3hkxrps29hnoi6s765zveg0yn34deoe53zwtwri/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const metaTitleInput = document.getElementById('meta_title');
        const metaDescriptionInput = document.getElementById('meta_description');
        const metaTitleCount = document.getElementById('meta-title-count');
        const metaDescriptionCount = document.getElementById('meta-description-count');
        const seoTitle = document.getElementById('seo-preview-title');
        const seoUrl = document.getElementById('seo-preview-url');
        const seoDescription = document.getElementById('seo-preview-description');
        const baseUrl = '{{ url('/') }}';

        let slugTouched = slugInput.value.length > 0;

        const slugify = (value) => {
            return value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
        };

        const updateMetaCounters = () => {
            metaTitleCount.textContent = metaTitleInput.value.length;
            metaDescriptionCount.textContent = metaDescriptionInput.value.length;
        };

        const updateSeoPreview = () => {
            const titleValue = metaTitleInput.value.trim() || titleInput.value.trim() || 'Judul Artikel';
            const slugValue = slugInput.value.trim() || 'slug-anda';
            const descriptionValue = metaDescriptionInput.value.trim() || 'Deskripsi singkat artikel akan tampil di sini.';

            seoTitle.textContent = titleValue;
            seoUrl.textContent = `${baseUrl}/artikel/${slugValue}`;
            seoDescription.textContent = descriptionValue;
        };

        slugInput.addEventListener('input', () => {
            slugTouched = slugInput.value.length > 0;
        });

        titleInput.addEventListener('input', () => {
            if (!slugTouched) {
                slugInput.value = slugify(titleInput.value);
            }
            updateSeoPreview();
        });

        slugInput.addEventListener('input', updateSeoPreview);
        metaTitleInput.addEventListener('input', updateSeoPreview);
        metaDescriptionInput.addEventListener('input', updateSeoPreview);

        metaTitleInput.addEventListener('input', updateMetaCounters);
        metaDescriptionInput.addEventListener('input', updateMetaCounters);
        updateMetaCounters();
        updateSeoPreview();

        tinymce.init({
            selector: '#content',
            height: 420,
            menubar: false,
            plugins: 'lists link image code',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
            branding: false,
            images_upload_url: '{{ route('admin.articles.upload-image') }}',
            images_upload_credentials: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: (callback) => {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = () => {
                    const file = input.files[0];
                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('_token', document.querySelector('input[name="_token"]').value);

                    fetch('{{ route('admin.articles.upload-image') }}', {
                        method: 'POST',
                        body: formData,
                    })
                        .then((response) => response.json())
                        .then((data) => {
                            if (data.location) {
                                callback(data.location, { alt: file.name });
                            }
                        });
                };

                input.click();
            },
            content_style: 'body { font-family: Source Sans 3, sans-serif; font-size: 16px; }'
        });
    </script>
@endsection
