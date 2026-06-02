@extends('home_company.layouts.main')

@section('title', 'Galeri')

@section('content')
<!-- Hero Section -->
<section style="position: relative; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); padding: 5rem 0 4rem; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; inset: 0; opacity: 0.05;">
        <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: repeating-linear-gradient(45deg, white 0, white 1px, transparent 1px, transparent 50px);"></div>
    </div>

    <!-- Decorative Elements -->
    <div style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; background: rgba(37, 150, 190, 0.1); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: 30%; left: 5%; width: 60px; height: 60px; background: rgba(255, 215, 0, 0.1); border-radius: 50%;"></div>

    <div style="position: relative; max-width: 1280px; margin: 0 auto; padding: 0 1rem; text-align: center;">
        <span style="display: inline-block; background: rgba(37, 150, 190, 0.2); color: #2596be; padding: 0.5rem 1.25rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem; letter-spacing: 0.05em;">
            <i class="fas fa-images" style="margin-right: 0.5rem;"></i>DOKUMENTASI
        </span>
        <h1 style="font-size: 3rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.1;">Galeri OMEXPRESS</h1>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.85); max-width: 600px; margin: 0 auto 1.5rem;">Dokumentasi aktivitas dan pengiriman kami ke berbagai destinasi di Indonesia</p>
        <nav style="display: flex; justify-content: center; margin-top: 1.5rem;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; gap: 0.75rem; color: rgba(255,255,255,0.7); font-size: 0.9rem;">
                <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; display: flex; align-items: center;" onmouseover="this.style.color='#FFD700';" onmouseout="this.style.color='rgba(255,255,255,0.7)';"><i class="fas fa-home" style="margin-right: 0.5rem;"></i>Beranda</a></li>
                <li><i class="fas fa-chevron-right" style="font-size: 0.6rem;"></i></li>
                <li style="color: #ffffff; font-weight: 600;">Galeri</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Gallery Section -->
<section style="padding: 5rem 0; background: #ffffff;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Foto & Video</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Dokumentasi Kegiatan Kami</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Lihat berbagai momen pengiriman dan aktivitas OMEXPRESS</p>
        </div>

        <!-- Filter Tabs -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.75rem; margin-bottom: 2.5rem;" id="filterTabs">
            <button class="filter-btn active" data-filter="all" style="padding: 0.625rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #001f5c; background: #001f5c; color: white; cursor: pointer; transition: all 0.3s;">
                <i class="fas fa-th" style="margin-right: 0.5rem;"></i>Semua
            </button>
            <button class="filter-btn" data-filter="gudang" style="padding: 0.625rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e5e7eb; background: white; color: #333333; cursor: pointer; transition: all 0.3s;">
                <i class="fas fa-warehouse" style="margin-right: 0.5rem;"></i>Gudang
            </button>
            <button class="filter-btn" data-filter="armada" style="padding: 0.625rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e5e7eb; background: white; color: #333333; cursor: pointer; transition: all 0.3s;">
                <i class="fas fa-truck" style="margin-right: 0.5rem;"></i>Armada
            </button>
            <button class="filter-btn" data-filter="aktivitas" style="padding: 0.625rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e5e7eb; background: white; color: #333333; cursor: pointer; transition: all 0.3s;">
                <i class="fas fa-box" style="margin-right: 0.5rem;"></i>Aktivitas
            </button>
            <button class="filter-btn" data-filter="destinasi" style="padding: 0.625rem 1.25rem; border-radius: 9999px; font-weight: 600; font-size: 0.875rem; border: 2px solid #e5e7eb; background: white; color: #333333; cursor: pointer; transition: all 0.3s;">
                <i class="fas fa-map-marker-alt" style="margin-right: 0.5rem;"></i>Destinasi
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">
            @forelse($images as $index => $image)
            @php
                $isDestinasi = in_array($image['category'], ['balikpapan', 'batam', 'berau', 'makassar', 'mataram', 'minahasa']);
                $filterCategory = $isDestinasi ? 'destinasi' : $image['category'];
            @endphp
            <div class="gallery-item" data-category="{{ $filterCategory }}" style="position: relative; border-radius: 12px; overflow: hidden; cursor: pointer; aspect-ratio: 4/3;" onclick="openLightbox({{ $index }})">
                <img src="{{ asset($image['path']) }}" alt="{{ $image['title'] }}" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                <div class="gallery-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,31,92,0.9) 0%, rgba(0,31,92,0.3) 50%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.25rem;">
                        <span style="display: inline-block; background: rgba(37, 150, 190, 0.9); color: white; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">{{ ucfirst($image['category']) }}</span>
                        <h3 style="color: white; font-size: 1rem; font-weight: 700; margin: 0;">{{ $image['title'] }}</h3>
                    </div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); backdrop-filter: blur(4px); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-search-plus" style="color: white; font-size: 1.25rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 4rem 2rem;">
                <i class="fas fa-images" style="font-size: 4rem; color: #e5e7eb; margin-bottom: 1rem;"></i>
                <p style="color: #666666; font-size: 1.125rem;">Belum ada foto yang tersedia</p>
            </div>
            @endforelse
        </div>

        <!-- No Results Message -->
        <div id="noResults" style="display: none; text-align: center; padding: 4rem 2rem;">
            <i class="fas fa-search" style="font-size: 4rem; color: #e5e7eb; margin-bottom: 1rem;"></i>
            <p style="color: #666666; font-size: 1.125rem;">Tidak ada foto dalam kategori ini</p>
        </div>
    </div>
</section>

@if(count($videos) > 0)
<!-- Video Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span style="color: #2596be; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Video</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #001f5c; margin-top: 0.75rem; line-height: 1.2;">Video Aktivitas</h2>
            <p style="color: #666666; max-width: 600px; margin: 1rem auto 0; line-height: 1.7;">Saksikan langsung aktivitas pengiriman OMEXPRESS</p>
        </div>

        <div class="video-grid">
            @foreach($videos as $video)
            <div class="jne-card hover-card" style="overflow: hidden; background: white;">
                <div style="position: relative; aspect-ratio: 16/9;">
                    <video style="width: 100%; height: 100%; object-fit: cover;" preload="metadata">
                        <source src="{{ asset($video['path']) }}" type="video/mp4">
                    </video>
                    <div class="video-play-overlay" style="position: absolute; inset: 0; background: rgba(0,31,92,0.4); display: flex; align-items: center; justify-content: center; cursor: pointer; transition: background 0.3s;" onclick="playVideo(this)">
                        <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.95); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: transform 0.3s; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                            <i class="fas fa-play" style="color: #001f5c; font-size: 1.5rem; margin-left: 5px;"></i>
                        </div>
                    </div>
                </div>
                <div style="padding: 1.25rem;">
                    <h3 style="font-weight: 700; color: #001f5c; font-size: 1rem; margin: 0;">{{ $video['title'] }}</h3>
                    <p style="color: #666666; font-size: 0.85rem; margin-top: 0.5rem;">{{ ucfirst($video['category']) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section style="padding: 5rem 0; background: linear-gradient(135deg, #001f5c 0%, #001847 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; opacity: 0.05;">
        <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: repeating-linear-gradient(45deg, white 0, white 1px, transparent 1px, transparent 50px);"></div>
    </div>

    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem; text-align: center; position: relative;">
        <span style="display: inline-block; background: rgba(37, 150, 190, 0.2); color: #2596be; padding: 0.5rem 1.25rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1.5rem;">
            <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>HUBUNGI KAMI
        </span>
        <h2 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.2;">Ingin Tahu Lebih Lanjut?</h2>
        <p style="font-size: 1.125rem; color: rgba(255,255,255,0.85); margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.8;">
            Hubungi kami untuk informasi layanan pengiriman dan kerjasama bisnis
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
            <a href="https://wa.me/6281180892925" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; background: #25D366; color: white; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.background='#128C7E'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#25D366'; this.style.transform='translateY(0)';">
                <i class="fab fa-whatsapp"></i>Hubungi via WhatsApp
            </a>
            <a href="{{ route('layanan') }}" style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 1rem 2rem; background: white; color: #001f5c; font-weight: 600; border-radius: 4px; text-decoration: none; transition: all 0.3s; font-size: 1rem;" onmouseover="this.style.background='#FFD700'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='white'; this.style.transform='translateY(0)';">
                <i class="fas fa-truck"></i>Lihat Layanan
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0,0,0,0.95); align-items: center; justify-content: center;">
    <button onclick="closeLightbox()" style="position: absolute; top: 1.5rem; right: 1.5rem; background: none; border: none; color: white; font-size: 2rem; cursor: pointer; z-index: 10; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: transform 0.3s;" onmouseover="this.style.transform='rotate(90deg)';" onmouseout="this.style.transform='rotate(0)';">
        <i class="fas fa-times"></i>
    </button>

    <button id="prevBtn" onclick="changeImage(-1)" style="position: absolute; left: 1.5rem; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.1); border: none; color: white; font-size: 1.5rem; cursor: pointer; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='rgba(37,150,190,0.8)';" onmouseout="this.style.background='rgba(255,255,255,0.1)';">
        <i class="fas fa-chevron-left"></i>
    </button>

    <button id="nextBtn" onclick="changeImage(1)" style="position: absolute; right: 1.5rem; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.1); border: none; color: white; font-size: 1.5rem; cursor: pointer; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='rgba(37,150,190,0.8)';" onmouseout="this.style.background='rgba(255,255,255,0.1)';">
        <i class="fas fa-chevron-right"></i>
    </button>

    <div style="max-width: 90vw; max-height: 85vh; position: relative;">
        <img id="lightboxImage" src="" alt="" style="max-width: 100%; max-height: 85vh; object-fit: contain; border-radius: 8px;">
        <div id="lightboxCaption" style="text-align: center; padding: 1rem; color: white;">
            <h3 id="lightboxTitle" style="font-size: 1.25rem; font-weight: 700; margin: 0;"></h3>
            <p id="lightboxCategory" style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 0.5rem;"></p>
        </div>
    </div>

    <div id="imageCounter" style="position: absolute; bottom: 1.5rem; left: 50%; transform: translateX(-50%); color: rgba(255,255,255,0.7); font-size: 0.9rem;"></div>
</div>

<style>
/* Gallery Grid - Masonry-like */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.25rem;
}

.gallery-item {
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 31, 92, 0.2);
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

/* Filter Buttons */
.filter-btn:hover {
    border-color: #001f5c !important;
    background: #001f5c !important;
    color: white !important;
}

.filter-btn.active {
    border-color: #001f5c !important;
    background: #001f5c !important;
    color: white !important;
}

/* Video Grid */
.video-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.video-play-overlay:hover {
    background: rgba(0,31,92,0.6) !important;
}

.video-play-overlay:hover > div {
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 1024px) {
    .gallery-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .video-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .video-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    #filterTabs {
        gap: 0.5rem !important;
    }

    .filter-btn {
        padding: 0.5rem 1rem !important;
        font-size: 0.8rem !important;
    }

    .filter-btn i {
        display: none;
    }

    section h1 {
        font-size: 2rem !important;
    }

    section h2 {
        font-size: 1.75rem !important;
    }

    #prevBtn, #nextBtn {
        width: 40px !important;
        height: 40px !important;
        font-size: 1.25rem !important;
    }

    #prevBtn {
        left: 0.5rem !important;
    }

    #nextBtn {
        right: 0.5rem !important;
    }
}

@media (max-width: 480px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .filter-btn {
        padding: 0.5rem 0.875rem !important;
        font-size: 0.75rem !important;
    }
}

/* Animation for filter */
.gallery-item {
    animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.gallery-item.hidden {
    display: none;
}
</style>

@push('scripts')
<script>
    const images = @json($images);
    let currentIndex = 0;
    let filteredImages = [...images];

    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const noResults = document.getElementById('noResults');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            let visibleCount = 0;

            galleryItems.forEach((item, index) => {
                const category = item.dataset.category;

                if (filter === 'all' || category === filter) {
                    item.classList.remove('hidden');
                    item.style.animationDelay = `${visibleCount * 0.05}s`;
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            // Update filtered images for lightbox
            if (filter === 'all') {
                filteredImages = [...images];
            } else {
                filteredImages = images.filter(img => {
                    const isDestinasi = ['balikpapan', 'batam', 'berau', 'makassar', 'mataram', 'minahasa'].includes(img.category);
                    const filterCategory = isDestinasi ? 'destinasi' : img.category;
                    return filterCategory === filter;
                });
            }

            // Show/hide no results message
            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });

    // Lightbox functionality
    function openLightbox(index) {
        // Find the actual index in filtered images
        const clickedItem = document.querySelectorAll('.gallery-item:not(.hidden)')[index];
        if (!clickedItem) return;

        const category = clickedItem.dataset.category;
        const imgSrc = clickedItem.querySelector('img').src;

        // Find the image in filtered array
        currentIndex = filteredImages.findIndex(img => {
            return imgSrc.includes(img.path);
        });

        if (currentIndex === -1) currentIndex = 0;

        showImage();
        document.getElementById('lightboxModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    function changeImage(direction) {
        currentIndex += direction;
        if (currentIndex < 0) currentIndex = filteredImages.length - 1;
        if (currentIndex >= filteredImages.length) currentIndex = 0;
        showImage();
    }

    function showImage() {
        const img = filteredImages[currentIndex];
        if (!img) return;

        document.getElementById('lightboxImage').src = '{{ asset('') }}' + img.path;
        document.getElementById('lightboxTitle').textContent = img.title;
        document.getElementById('lightboxCategory').textContent = img.category.charAt(0).toUpperCase() + img.category.slice(1);
        document.getElementById('imageCounter').textContent = `${currentIndex + 1} / ${filteredImages.length}`;
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('lightboxModal');
        if (modal.style.display === 'flex') {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') changeImage(-1);
            if (e.key === 'ArrowRight') changeImage(1);
        }
    });

    // Close lightbox when clicking outside image
    document.getElementById('lightboxModal').addEventListener('click', function(e) {
        if (e.target === this) closeLightbox();
    });

    // Video play functionality
    function playVideo(overlay) {
        const video = overlay.parentElement.querySelector('video');
        if (video.paused) {
            video.play();
            video.controls = true;
            overlay.style.display = 'none';
        }
    }

    // Pause video when not visible
    document.querySelectorAll('video').forEach(video => {
        video.addEventListener('pause', function() {
            const overlay = this.parentElement.querySelector('.video-play-overlay');
            if (overlay) overlay.style.display = 'flex';
        });

        video.addEventListener('ended', function() {
            const overlay = this.parentElement.querySelector('.video-play-overlay');
            if (overlay) overlay.style.display = 'flex';
            this.controls = false;
        });
    });
</script>
@endpush
@endsection
