import './bootstrap';

function getHeaderRoutes() {
    const header = document.getElementById('main-header');
    return {
        cekOngkirUrl: header?.dataset?.cekOngkirUrl || '/cek-ongkir',
        alatBeratUrl: header?.dataset?.alatBeratUrl || '/pengiriman-alat-berat',
    };
}

function buildRegionLinks(regions, baseUrl, serviceType = null) {
    const resolvedBaseUrl = baseUrl || '/cek-ongkir';
    if (!regions.length) {
        return '<div class="px-4 py-3 text-sm text-slate-500">Belum ada wilayah.</div>';
    }
    return regions.map((region) => {
        const encoded = encodeURIComponent(region.slug);
        
        const url = serviceType 
            ? `${resolvedBaseUrl}?region=${encoded}&service=${serviceType}` 
            : `${resolvedBaseUrl}?region=${encoded}`;
            
        return `<a href="${url}" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">${region.name}</a>`;
    }).join('');
}

function buildDesktopCekOngkirMenu(regions, routes) {
    const regionLinks = buildRegionLinks(regions, routes.cekOngkirUrl);
    
    const charterLinks = buildRegionLinks(regions, routes.cekOngkirUrl, 'charter'); 
    
    const kendaraanLinks = `
        <a href="${routes.cekOngkirUrl}?kategori=motor" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Cek Ongkir Pengiriman Motor</a>
        <a href="${routes.cekOngkirUrl}?kategori=mobil" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Cek Ongkir Pengiriman Mobil</a>
    `;

    return `
        <div class="space-y-1">
            <div class="dropdown-item has-submenu">
                <a href="#" class="block flex items-center justify-between rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">
                    Pengiriman Jalur Darat dan Laut
                </a>
                <div class="dropdown-submenu">${regionLinks}</div>
            </div>
            <a href="${routes.cekOngkirUrl}?jalur=udara" class="block rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Pengiriman Jalur Udara</a>
            <div class="dropdown-item has-submenu">
                <a href="#" class="block flex items-center justify-between rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">
                    Pengiriman Kendaraan
                </a>
                <div class="dropdown-submenu">${kendaraanLinks}</div>
            </div>
            <a href="${routes.alatBeratUrl}" class="block rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Pengiriman Alat Berat</a>
            <div class="dropdown-item has-submenu">
                <a href="#" class="block flex items-center justify-between rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">
                    Charter Armada
                </a>
                <div class="dropdown-submenu">${charterLinks}</div>
            </div>
        </div>
    `;
}

function bindSubmenuToggles(scope = document) {
    scope.querySelectorAll('[data-submenu-target]').forEach((button) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = button.getAttribute('data-submenu-target');
            const target = targetId ? document.getElementById(targetId) : null;
            if (!target) return;
            
            button.classList.toggle('open');
            target.classList.toggle('show');
        });
    });
}

function renderCekOngkirMenus(regions) {
    const headerRoutes = getHeaderRoutes();
    const desktopContainer = document.getElementById('cekongkir-menu-desktop');
    const mobileContainer = document.getElementById('cekongkir-submenu');
    
    if (desktopContainer) {
        desktopContainer.innerHTML = buildDesktopCekOngkirMenu(regions, headerRoutes);
    }
    
    if (mobileContainer) {
        const kendaraanLinks = `
            <li><a href="${headerRoutes.cekOngkirUrl}?kategori=motor" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Pengiriman Motor</a></li>
            <li><a href="${headerRoutes.cekOngkirUrl}?kategori=mobil" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Pengiriman Mobil</a></li>
        `;
        
        const regionListHTML = regions.length 
            ? regions.map((region) => `<li><a href="${headerRoutes.cekOngkirUrl}?region=${encodeURIComponent(region.slug)}" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">${region.name}</a></li>`).join('') 
            : '<li><span style="display:block;padding:0.75rem 1rem 0.75rem 3.25rem;color:#94a3b8;">Belum ada wilayah.</span></li>';

        const charterListHTML = regions.length 
            ? regions.map((region) => `<li><a href="${headerRoutes.cekOngkirUrl}?region=${encodeURIComponent(region.slug)}&service=charter" class="block rounded-lg px-4 py-2.5 text-sm font-medium text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">${region.name}</a></li>`).join('') 
            : '<li><span style="display:block;padding:0.75rem 1rem 0.75rem 3.25rem;color:#94a3b8;">Belum ada wilayah.</span></li>';

        mobileContainer.innerHTML = `
            <li class="has-submenu">
                <button type="button" class="submenu-toggle submenu-toggle-nested" data-submenu-target="mobile-darat-laut">
                    <span>Jalur Darat dan Laut</span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <ul id="mobile-darat-laut" class="submenu submenu-nested">
                    ${regionListHTML}
                </ul>
            </li>
            <li><a href="${headerRoutes.cekOngkirUrl}?jalur=udara" class="block rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Jalur Udara</a></li>
            <li class="has-submenu">
                <button type="button" class="submenu-toggle submenu-toggle-nested" data-submenu-target="mobile-kendaraan">
                    <span>Pengiriman Kendaraan</span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <ul id="mobile-kendaraan" class="submenu submenu-nested">
                    ${kendaraanLinks}
                </ul>
            </li>
            <li><a href="${headerRoutes.alatBeratUrl}" class="block rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100 hover:text-[#001f5c]">Alat Berat</a></li>
            <li class="has-submenu">
                <button type="button" class="submenu-toggle submenu-toggle-nested" data-submenu-target="mobile-charter">
                    <span>Charter Armada</span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <ul id="mobile-charter" class="submenu submenu-nested">
                    ${charterListHTML}
                </ul>
            </li>
        `;
        bindSubmenuToggles(mobileContainer);
    }
}
function initRegionMenus() {
    const header = document.getElementById('main-header');
    const apiUrl = header?.dataset?.regionApi;
    if (!apiUrl) return;
    
    fetch(apiUrl)
        .then((response) => response.json())
        .then((payload) => {
            renderCekOngkirMenus(payload.data || []);
        })
        .catch(() => {
            renderCekOngkirMenus([]);
        });
}

function initCekOngkirTable() {
    const container = document.querySelector('[data-cekongkir]');
    if (!container) return;
    
    const apiUrl = container.dataset.api;
    const presetRegion = container.dataset.region;
    const searchParams = new URLSearchParams(window.location.search);
    const regionSlug = presetRegion || searchParams.get('region');
    
    const serviceType = searchParams.get('kategori') || searchParams.get('jalur') || searchParams.get('service') || 'darat_laut';
    
    const tableBody = document.getElementById('rate-table-body');
    const theadTr = container.querySelector('thead tr');
    const pagination = document.getElementById('rate-pagination');
    const form = document.getElementById('rate-filter');
    const searchInput = document.getElementById('search');
    const perPageSelect = document.getElementById('per_page');
    
    // Render Header Dinamis sesuai Jenis Layanan
    if (serviceType === 'motor' || serviceType === 'mobil') {
        theadTr.innerHTML = `
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Tujuan</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Jenis Kendaraan</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Harga</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Estimasi</th>`;
    } else if (serviceType === 'charter') {
        theadTr.innerHTML = `
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Tujuan</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Jenis Armada</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Harga Sewa</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Estimasi</th>`;
    } else {
        theadTr.innerHTML = `
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Tujuan</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Ongkir Per Kg</th>
            <th class="px-5 py-4 text-sm tracking-wide whitespace-nowrap">Estimasi</th>`;
    }

    const state = { rates: [], filtered: [], page: 1, perPage: parseInt(perPageSelect?.value || '10', 10), search: '' };

    function setLoading(message) {
        if (tableBody) tableBody.innerHTML = `<tr><td colspan="4" class="px-6 py-6 text-center text-slate-500">${message}</td></tr>`;
    }

    function applyFilters() {
        const keyword = state.search.trim().toLowerCase();
        state.filtered = state.rates.filter((rate) => {
            if (!keyword) return true;
            return (rate.destination || '').toLowerCase().includes(keyword) || (rate.estimation || '').toLowerCase().includes(keyword);
        });
    }

    function renderRows() {
        if (!tableBody) return;
        if (!state.filtered.length) {
            tableBody.innerHTML = '<tr><td colspan="4" class="px-6 py-6 text-center text-slate-500">Tarif belum tersedia untuk rute/layanan ini.</td></tr>';
            return;
        }
        
        const start = (state.page - 1) * state.perPage;
        const slice = state.filtered.slice(start, start + state.perPage);
        
        tableBody.innerHTML = slice.map((rate) => {
            const priceCell = rate.price ? rate.price : '<a href="https://wa.me/6281180892925" target="_blank" class="inline-flex items-center justify-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white no-underline">Hubungi Kami</a>';
            
            let extraCol = '';
            if (serviceType === 'motor' || serviceType === 'mobil') {
                extraCol = `<td class="px-5 py-4 text-slate-900 whitespace-nowrap">${rate.specific_details?.vehicle_type || '-'}</td>`;
            } else if (serviceType === 'charter') {
                extraCol = `<td class="px-5 py-4 text-slate-900 whitespace-nowrap">${rate.specific_details?.fleet_type || '-'}</td>`;
            }

            return `
                <tr class="border-b border-slate-200 hover:bg-slate-50">
                    <td class="px-5 py-4 font-semibold text-slate-900 whitespace-nowrap">${rate.destination || '-'}</td>
                    ${extraCol}
                    <td class="px-5 py-4 text-slate-900 whitespace-nowrap">${priceCell}</td>
                    <td class="px-5 py-4 text-slate-600 whitespace-nowrap">${rate.estimation || '-'}</td>
                </tr>
            `;
        }).join('');
    }

    function renderPagination() { /* ... (Gunakan kode renderPagination yang lama, tidak perlu diubah) ... */
        if (!pagination) return;
        const totalPages = Math.ceil(state.filtered.length / state.perPage);
        if (totalPages <= 1) { pagination.innerHTML = ''; return; }
        const buttons = [];
        const startPage = Math.max(1, state.page - 2);
        const endPage = Math.min(totalPages, state.page + 2);
        const prevDisabled = state.page === 1;
        buttons.push(`<button type="button" data-page="${state.page - 1}" ${prevDisabled ? 'disabled' : ''} class="rounded-lg border border-slate-300 px-3 py-2 text-sm ${prevDisabled ? 'cursor-not-allowed text-slate-400' : 'text-slate-700 hover:bg-slate-50'}">Prev</button>`);
        for (let page = startPage; page <= endPage; page += 1) {
            if (page === state.page) buttons.push(`<span class="rounded-lg bg-[#001f5c] px-3 py-2 text-sm text-white">${page}</span>`);
            else buttons.push(`<button type="button" data-page="${page}" class="rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-700 hover:bg-slate-50">${page}</button>`);
        }
        const nextDisabled = state.page === totalPages;
        buttons.push(`<button type="button" data-page="${state.page + 1}" ${nextDisabled ? 'disabled' : ''} class="rounded-lg border border-slate-300 px-3 py-2 text-sm ${nextDisabled ? 'cursor-not-allowed text-slate-400' : 'text-slate-700 hover:bg-slate-50'}">Next</button>`);
        pagination.innerHTML = buttons.join('');
        pagination.querySelectorAll('button[data-page]').forEach((button) => {
            button.addEventListener('click', () => {
                const page = parseInt(button.getAttribute('data-page') || '1', 10);
                if (!Number.isNaN(page)) { state.page = Math.max(1, page); renderRows(); renderPagination(); }
            });
        });
    }

    function refresh() { applyFilters(); const totalPages = Math.max(1, Math.ceil(state.filtered.length / state.perPage)); if (state.page > totalPages) { state.page = totalPages; } renderRows(); renderPagination(); }

    if (form) { form.addEventListener('submit', (e) => { e.preventDefault(); state.search = searchInput?.value || ''; state.page = 1; refresh(); }); }
    if (perPageSelect) { perPageSelect.addEventListener('change', () => { state.perPage = parseInt(perPageSelect.value || '10', 10); state.page = 1; refresh(); }); }

    setLoading('Memuat data tarif...');
    
    const fetchUrl = new URL(apiUrl, window.location.origin);
    if (regionSlug) fetchUrl.searchParams.append('region_slug', regionSlug);
    fetchUrl.searchParams.append('service_type', serviceType);
    
    fetch(fetchUrl.toString())
        .then((res) => res.json())
        .then((payload) => { state.rates = payload.data || []; refresh(); })
        .catch(() => { setLoading('Gagal memuat data tarif.'); });
}

document.addEventListener('DOMContentLoaded', () => {
    initRegionMenus();
    initCekOngkirTable();
});