import './bootstrap';

function buildRegionLinks(regions) {
	return regions.map((region) => {
		const encoded = encodeURIComponent(region.slug);
		return {
			label: region.name,
			href: `/cek-ongkir?region=${encoded}`,
		};
	});
}

function renderRegionMenu(container, links, isMobile = false) {
	if (!container) {
		return;
	}

	if (!links.length) {
		container.innerHTML = isMobile
			? '<li><span style="display:block;padding:0.75rem 1rem 0.75rem 3.25rem;color:#94a3b8;">Belum ada wilayah.</span></li>'
			: '<span style="display:block;padding:0.75rem 1.25rem;color:#94a3b8;">Belum ada wilayah.</span>';
		return;
	}

	if (isMobile) {
		container.innerHTML = links
			.map((link) => `<li><a href="${link.href}">${link.label}</a></li>`)
			.join('');
	} else {
		container.innerHTML = links
			.map((link) => `<a href="${link.href}">${link.label}</a>`)
			.join('');
	}
}

function initRegionMenus() {
	const header = document.getElementById('main-header');
	const apiUrl = header?.dataset?.regionApi;
	if (!apiUrl) {
		return;
	}

	const desktopContainer = document.getElementById('cekongkir-region-desktop');
	const mobileContainer = document.getElementById('region-submenu');

	fetch(apiUrl)
		.then((response) => response.json())
		.then((payload) => {
			const links = buildRegionLinks(payload.data || []);
			renderRegionMenu(desktopContainer, links, false);
			renderRegionMenu(mobileContainer, links, true);
		})
		.catch(() => {
			renderRegionMenu(desktopContainer, [], false);
			renderRegionMenu(mobileContainer, [], true);
		});
}

function initCekOngkirTable() {
	const container = document.querySelector('[data-cekongkir]');
	if (!container) {
		return;
	}

	const apiUrl = container.dataset.api;
	const presetRegion = container.dataset.region;
	const searchParams = new URLSearchParams(window.location.search);
	const regionSlug = presetRegion || searchParams.get('region');

	const tableBody = document.getElementById('rate-table-body');
	const pagination = document.getElementById('rate-pagination');
	const form = document.getElementById('rate-filter');
	const searchInput = document.getElementById('search');
	const perPageSelect = document.getElementById('per_page');

	const state = {
		rates: [],
		filtered: [],
		page: 1,
		perPage: parseInt(perPageSelect?.value || '10', 10),
		search: '',
	};

	function setLoading(message) {
		if (tableBody) {
			tableBody.innerHTML = `<tr><td colspan="3" style="padding:1.5rem;text-align:center;color:#64748b;">${message}</td></tr>`;
		}
	}

	function applyFilters() {
		const keyword = state.search.trim().toLowerCase();
		state.filtered = state.rates.filter((rate) => {
			if (!keyword) {
				return true;
			}
			const destination = (rate.destination || '').toLowerCase();
			const estimation = (rate.estimation || '').toLowerCase();
			return destination.includes(keyword) || estimation.includes(keyword);
		});
	}

	function renderRows() {
		if (!tableBody) {
			return;
		}

		if (!state.filtered.length) {
			tableBody.innerHTML = '<tr><td colspan="3" style="padding:1.5rem;text-align:center;color:#64748b;">Tarif belum tersedia untuk wilayah ini.</td></tr>';
			return;
		}

		const start = (state.page - 1) * state.perPage;
		const slice = state.filtered.slice(start, start + state.perPage);

		tableBody.innerHTML = slice
			.map((rate) => {
				const priceCell = rate.price
					? rate.price
					: '<a href="https://wa.me/6281180892925?text=Halo!%20Saya%20ingin%20tanya%20tarif%20pengiriman." target="_blank" style="display:inline-flex;align-items:center;justify-content:center;background:#1d4ed8;color:white;padding:0.5rem 1rem;border-radius:9999px;text-decoration:none;font-weight:600;font-size:0.9rem;">Hubungi Kami</a>';

				return `
					<tr style="border-bottom:1px solid #e2e8f0;">
						<td style="padding:1rem 1.25rem;font-weight:600;color:#0f172a;">${rate.destination || '-'}</td>
						<td style="padding:1rem 1.25rem;color:#0f172a;">${priceCell}</td>
						<td style="padding:1rem 1.25rem;color:#475569;">${rate.estimation || '-'}</td>
					</tr>
				`;
			})
			.join('');
	}

	function renderPagination() {
		if (!pagination) {
			return;
		}

		const totalPages = Math.ceil(state.filtered.length / state.perPage);
		if (totalPages <= 1) {
			pagination.innerHTML = '';
			return;
		}

		const buttons = [];
		const startPage = Math.max(1, state.page - 2);
		const endPage = Math.min(totalPages, state.page + 2);

		const prevDisabled = state.page === 1;
		buttons.push(`<button type="button" data-page="${state.page - 1}" ${prevDisabled ? 'disabled' : ''} style="padding:0.5rem 0.85rem;border:1px solid #cbd5e1;border-radius:10px;${prevDisabled ? 'color:#94a3b8;cursor:not-allowed;' : 'color:#0f172a;'}">Prev</button>`);

		for (let page = startPage; page <= endPage; page += 1) {
			if (page === state.page) {
				buttons.push(`<span style="padding:0.5rem 0.85rem;border-radius:10px;background:#001f5c;color:white;">${page}</span>`);
			} else {
				buttons.push(`<button type="button" data-page="${page}" style="padding:0.5rem 0.85rem;border:1px solid #cbd5e1;border-radius:10px;color:#0f172a;">${page}</button>`);
			}
		}

		const nextDisabled = state.page === totalPages;
		buttons.push(`<button type="button" data-page="${state.page + 1}" ${nextDisabled ? 'disabled' : ''} style="padding:0.5rem 0.85rem;border:1px solid #cbd5e1;border-radius:10px;${nextDisabled ? 'color:#94a3b8;cursor:not-allowed;' : 'color:#0f172a;'}">Next</button>`);

		pagination.innerHTML = buttons.join('');

		pagination.querySelectorAll('button[data-page]').forEach((button) => {
			button.addEventListener('click', () => {
				const page = parseInt(button.getAttribute('data-page') || '1', 10);
				if (!Number.isNaN(page)) {
					state.page = Math.max(1, page);
					renderRows();
					renderPagination();
				}
			});
		});
	}

	function refresh() {
		applyFilters();
		const totalPages = Math.max(1, Math.ceil(state.filtered.length / state.perPage));
		if (state.page > totalPages) {
			state.page = totalPages;
		}
		renderRows();
		renderPagination();
	}

	if (form) {
		form.addEventListener('submit', (event) => {
			event.preventDefault();
			state.search = searchInput?.value || '';
			state.page = 1;
			refresh();
		});
	}

	if (perPageSelect) {
		perPageSelect.addEventListener('change', () => {
			state.perPage = parseInt(perPageSelect.value || '10', 10);
			state.page = 1;
			refresh();
		});
	}

	setLoading('Memuat data tarif...');

	const url = regionSlug ? `${apiUrl}?region_slug=${encodeURIComponent(regionSlug)}` : apiUrl;
	fetch(url)
		.then((response) => response.json())
		.then((payload) => {
			state.rates = payload.data || [];
			refresh();
		})
		.catch(() => {
			setLoading('Gagal memuat data tarif.');
		});
}

document.addEventListener('DOMContentLoaded', () => {
	initRegionMenus();
	initCekOngkirTable();
});
