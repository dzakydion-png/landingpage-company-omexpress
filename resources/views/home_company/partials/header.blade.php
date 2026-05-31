<header id="main-header" class="site-header" style="background: #001f5c; position: fixed; top: 0; left: 0; right: 0; z-index: 1000; transform: translateY(-100%); transition: transform 0.3s ease;">
    <!-- Main Navigation -->
    <nav style="background: #001f5c;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0.875rem 1rem; display: flex; align-items: center; justify-content: space-between;">
            <!-- Logo -->
            <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 0.75rem; text-decoration: none;">
                <img src="{{ asset('img/logo.png') }}" style="height: 48px; background: white; padding: 4px; border-radius: 4px;" alt="Logo" onerror="this.style.display='none'" />
                <span style="font-size: 1.5rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">OMEXPRESS</span>
            </a>

            <!-- Desktop Navigation -->
            <div id="desktop-nav" class="desktop-nav">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>

                <!-- Profil Dropdown -->
                <div class="dropdown">
                    <button class="nav-link dropdown-toggle {{ request()->is('profil/*') ? 'active' : '' }}">
                        Profil
                        <svg style="width: 10px; height: 10px; margin-left: 5px;" fill="none" stroke="currentColor" viewBox="0 0 10 6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div class="dropdown-menu">
                        <a href="{{ route('profil.perusahaan') }}" class="{{ request()->routeIs('profil.perusahaan') ? 'active' : '' }}">
                            <i class="fas fa-building"></i> Profil Perusahaan
                        </a>
                        <a href="{{ route('profil.syarat_ketentuan') }}" class="{{ request()->routeIs('profil.syarat_ketentuan') ? 'active' : '' }}">
                            <i class="fas fa-file-contract"></i> Syarat dan Ketentuan
                        </a>
                    </div>
                </div>

                <a href="{{ route('layanan') }}" class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
                <a href="{{ route('tracking') }}" class="nav-link {{ request()->routeIs('tracking') ? 'active' : '' }}">Tracking</a>
                <a href="{{ route('cek_ongkir') }}" class="nav-link {{ request()->routeIs('cek_ongkir') ? 'active' : '' }}">Cek Ongkir</a>
                {{-- <a href="{{ route('ongkir_6_kota') }}" class="nav-link {{ request()->routeIs('ongkir_6_kota') ? 'active' : '' }}">Ongkir 6 Kota</a> --}}
                <a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}">Artikel</a>
                <a href="{{ route('galeri') }}" class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}">Galeri</a>
                {{-- <a href="{{ route('kontak') }}" class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a> --}}

                <!-- Social Media Icons -->
                <div class="social-icons">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/omexpress.id?igsh=MWIzZDA4dmdrczE4Yg==" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/6281180892925?text=Halo!%20Terima%20kasih%20telah%20menghubungi%20Omexpress.%20Ada%20yang%20bisa%20kami%20bantu%3F" target="_blank" class="social-link whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="hamburger-btn" class="hamburger-btn" type="button" aria-label="Toggle menu">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="mobile-overlay"></div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-drawer" class="mobile-drawer">
        <!-- Drawer Header -->
        <div class="drawer-header" style="background: #001f5c;">
            <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 0.5rem; text-decoration: none;">
                <img src="{{ asset('img/logo.png') }}" style="height: 32px; background: white; padding: 3px; border-radius: 4px;" alt="Logo" onerror="this.style.display='none'" />
                <span style="font-size: 1.125rem; font-weight: 700; color: #ffffff;">OMEXPRESS</span>
            </a>
            <button id="close-drawer-btn" class="close-btn" type="button" aria-label="Close menu">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Drawer Content -->
        <div class="drawer-content">
            <ul class="mobile-menu">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>

                <!-- Profil Accordion -->
                <li class="has-submenu">
                    <button id="profil-toggle" class="submenu-toggle {{ request()->is('profil/*') ? 'active' : '' }}">
                        <span><i class="fas fa-building"></i> Profil</span>
                        <svg id="profil-arrow" width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul id="profil-submenu" class="submenu {{ request()->is('profil/*') ? 'show' : '' }}">
                        <li><a href="{{ route('profil.perusahaan') }}" class="{{ request()->routeIs('profil.perusahaan') ? 'active' : '' }}">Profil Perusahaan</a></li>
                        <li><a href="{{ route('profil.syarat_ketentuan') }}" class="{{ request()->routeIs('profil.syarat_ketentuan') ? 'active' : '' }}">Syarat dan Ketentuan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'active' : '' }}">
                        <i class="fas fa-truck"></i> Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('tracking') }}" class="{{ request()->routeIs('tracking') ? 'active' : '' }}">
                        <i class="fas fa-search-location"></i> Tracking
                    </a>
                </li>
                <li>
                    <a href="{{ route('cek_ongkir') }}" class="{{ request()->routeIs('cek_ongkir') ? 'active' : '' }}">
                        <i class="fas fa-calculator"></i> Cek Ongkir
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('ongkir_6_kota') }}" class="{{ request()->routeIs('ongkir_6_kota') ? 'active' : '' }}">
                        <i class="fas fa-city"></i> Ongkir 6 Kota
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('artikel') }}" class="{{ request()->routeIs('artikel') ? 'active' : '' }}">
                        <i class="fas fa-newspaper"></i> Artikel
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">
                        <i class="fas fa-images"></i> Galeri
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
                        <i class="fas fa-envelope"></i> Kontak
                    </a>
                </li> --}}
            </ul>

            <!-- Mobile Social Icons -->
            <div class="mobile-social">
                <a href="#" class="mobile-social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="mobile-social-link"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/6281180892925?text=Halo!%20Terima%20kasih%20telah%20menghubungi%20Omexpress.%20Ada%20yang%20bisa%20kami%20bantu%3F" target="_blank" class="mobile-social-link whatsapp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</header>

<style>
/* Header Visibility */
.site-header {
    will-change: transform;
}

.site-header.header-visible {
    transform: translateY(0) !important;
}

/* Desktop Navigation - JNE Style */
.desktop-nav {
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

/* Social Icons in Nav */
.social-icons {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-left: 1rem;
    padding-left: 1rem;
    border-left: 1px solid rgba(255,255,255,0.2);
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: rgba(255,255,255,0.8);
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.85rem;
    transition: all 0.2s;
}

.social-link:hover {
    color: #ffffff;
    background: #2596be;
    transform: translateY(-2px);
}

.social-link.whatsapp:hover {
    background: #25D366;
}

.nav-link {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    padding: 0.625rem 0.875rem;
    transition: all 0.2s;
    position: relative;
    border-radius: 4px;
}

.nav-link:hover {
    color: #ffffff;
    background: rgba(255,255,255,0.1);
}

.nav-link.active {
    color: #ffffff;
    background: #2596be;
}

/* Dropdown - JNE Style */
.dropdown {
    position: relative;
}

.dropdown-toggle {
    display: flex;
    align-items: center;
    background: none;
    border: none;
    cursor: pointer;
    font-size: 0.9rem;
    font-weight: 500;
    color: rgba(255,255,255,0.9);
    padding: 0.625rem 0.875rem;
    position: relative;
    border-radius: 4px;
    transition: all 0.2s;
}

.dropdown-toggle:hover {
    color: #ffffff;
    background: rgba(255,255,255,0.1);
}

.dropdown-toggle.active {
    color: #ffffff;
    background: #2596be;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    min-width: 220px;
    padding: 0.5rem 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.2s;
    z-index: 1000;
    margin-top: 0.5rem;
}

.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    padding: 0.875rem 1.25rem;
    color: #374151;
    text-decoration: none;
    transition: all 0.2s;
    font-size: 0.9rem;
}

.dropdown-menu a:hover {
    background: #f0f4f8;
    color: #001f5c;
}

.dropdown-menu a.active {
    background: #2596be;
    color: white;
}

.dropdown-menu i {
    width: 20px;
    margin-right: 10px;
    color: #001f5c;
}

.dropdown-menu a.active i {
    color: white;
}

/* Hamburger Button - JNE Style */
.hamburger-btn {
    display: none;
    background: rgba(255,255,255,0.1);
    border: none;
    padding: 0.625rem;
    cursor: pointer;
    color: #ffffff;
    border-radius: 8px;
    transition: background 0.2s;
}

.hamburger-btn:hover {
    background: rgba(255,255,255,0.2);
}

/* Mobile Overlay */
.mobile-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 1001;
    opacity: 0;
    transition: opacity 0.3s;
}

.mobile-overlay.show {
    display: block;
    opacity: 1;
}

/* Mobile Drawer - JNE Style */
.mobile-drawer {
    position: fixed;
    top: 0;
    left: 0;
    width: 300px;
    max-width: 85vw;
    height: 100vh;
    background: white;
    z-index: 1002;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
}

.mobile-drawer.show {
    transform: translateX(0);
}

.drawer-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 3px solid #2596be;
}

.close-btn {
    background: rgba(255,255,255,0.1);
    border: none;
    padding: 0.5rem;
    cursor: pointer;
    color: #ffffff;
    border-radius: 8px;
    transition: background 0.2s;
}

.close-btn:hover {
    background: rgba(255,255,255,0.2);
}

.drawer-content {
    flex: 1;
    overflow-y: auto;
    padding: 1rem;
}

/* Mobile Menu - JNE Style */
.mobile-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

.mobile-menu > li > a,
.submenu-toggle {
    display: flex;
    align-items: center;
    width: 100%;
    padding: 0.875rem 1rem;
    color: #374151;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.2s;
    font-size: 1rem;
}

.mobile-menu > li > a:hover,
.submenu-toggle:hover {
    background: #f0f4f8;
    color: #001f5c;
}

.mobile-menu > li > a.active,
.submenu-toggle.active {
    background: #001f5c;
    color: #ffffff;
}

.mobile-menu i {
    width: 24px;
    margin-right: 12px;
    color: #001f5c;
}

.mobile-menu > li > a.active i,
.submenu-toggle.active i {
    color: #ffffff;
}

.submenu-toggle {
    background: none;
    border: none;
    cursor: pointer;
    justify-content: space-between;
    font-family: inherit;
}

.submenu-toggle svg {
    transition: transform 0.2s;
    color: #6b7280;
}

.submenu-toggle.active svg {
    color: #ffffff;
}

.submenu-toggle.open svg {
    transform: rotate(180deg);
}

/* Submenu */
.submenu {
    list-style: none;
    margin: 0;
    padding: 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.submenu.show {
    max-height: 200px;
}

.submenu li a {
    display: block;
    padding: 0.75rem 1rem 0.75rem 3.25rem;
    color: #374151;
    text-decoration: none;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: all 0.2s;
}

.submenu li a:hover {
    background: #f0f4f8;
    color: #001f5c;
}

.submenu li a.active {
    color: #2596be;
    background: #f0f9fc;
    font-weight: 500;
}

/* Mobile Social Icons */
.mobile-social {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-top: 1.5rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e5e7eb;
}

.mobile-social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    color: #001f5c;
    background: #f0f4f8;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1rem;
    transition: all 0.2s;
}

.mobile-social-link:hover {
    color: #ffffff;
    background: #2596be;
    transform: translateY(-2px);
}

.mobile-social-link.whatsapp:hover {
    background: #25D366;
}

/* Responsive */
@media (max-width: 1100px) {
    .social-icons {
        display: none;
    }
}

@media (max-width: 1024px) {
    .desktop-nav {
        gap: 0;
    }
    .nav-link, .dropdown-toggle {
        padding: 0.5rem 0.5rem;
        font-size: 0.85rem;
    }
}

@media (max-width: 900px) {
    .desktop-nav {
        display: none !important;
    }
    .hamburger-btn {
        display: flex !important;
    }
}

@media (min-width: 901px) {
    .desktop-nav {
        display: flex !important;
    }
    .hamburger-btn {
        display: none !important;
    }
    .mobile-drawer,
    .mobile-overlay {
        display: none !important;
    }
}
</style>

<script>
(function() {
    function init() {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const closeDrawerBtn = document.getElementById('close-drawer-btn');
        const mobileDrawer = document.getElementById('mobile-drawer');
        const mobileOverlay = document.getElementById('mobile-overlay');
        const profilToggle = document.getElementById('profil-toggle');
        const profilSubmenu = document.getElementById('profil-submenu');
        const header = document.getElementById('main-header');
        const heroSection = document.getElementById('hero-section');

        // Header scroll behavior - only on homepage with hero
        if (header && heroSection) {
            let lastScrollY = window.scrollY;
            const heroHeight = window.innerHeight;

            function handleScroll() {
                const currentScrollY = window.scrollY;

                // If at the very top (within hero section), hide header
                if (currentScrollY < 100) {
                    header.style.transform = 'translateY(-100%)';
                } else {
                    // Show header when scrolled past hero
                    header.style.transform = 'translateY(0)';
                }

                lastScrollY = currentScrollY;
            }

            window.addEventListener('scroll', handleScroll, { passive: true });
            // Initial check
            handleScroll();
        } else if (header) {
            // On other pages, always show header
            header.style.transform = 'translateY(0)';
        }

        if (!hamburgerBtn || !mobileDrawer) {
            return;
        }

        hamburgerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileDrawer.classList.add('show');
            mobileOverlay.classList.add('show');
            document.body.style.overflow = 'hidden';
        });

        function closeDrawer() {
            mobileDrawer.classList.remove('show');
            mobileOverlay.classList.remove('show');
            document.body.style.overflow = '';
        }

        closeDrawerBtn.addEventListener('click', closeDrawer);
        mobileOverlay.addEventListener('click', closeDrawer);

        if (profilToggle && profilSubmenu) {
            profilToggle.addEventListener('click', function(e) {
                e.preventDefault();
                this.classList.toggle('open');
                profilSubmenu.classList.toggle('show');
            });

            if (profilSubmenu.classList.contains('show')) {
                profilToggle.classList.add('open');
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>
