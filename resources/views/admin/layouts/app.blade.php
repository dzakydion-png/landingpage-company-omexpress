<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --admin-bg: #f1f4f9;
            --admin-card: #ffffff;
            --admin-text: #1f2937;
            --admin-muted: #6b7280;
            --admin-accent: #1d4ed8;
            --admin-accent-dark: #1e40af;
            --admin-border: #e5e7eb;
            --admin-sidebar: #111827;
            --admin-sidebar-hover: #1f2937;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Source Sans 3", sans-serif;
            background: var(--admin-bg);
            color: var(--admin-text);
        }
        a { color: inherit; text-decoration: none; }
        .admin-layout {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 260px 1fr;
        }
        .sidebar {
            background: var(--admin-sidebar);
            color: #e5e7eb;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .sidebar h1 {
            font-size: 1.3rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 0.02em;
        }
        .sidebar nav {
            display: grid;
            gap: 0.4rem;
        }
        .sidebar a {
            padding: 0.65rem 0.85rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
        }
        .sidebar a.active,
        .sidebar a:hover {
            background: var(--admin-sidebar-hover);
            color: #ffffff;
        }
        .sidebar .meta {
            font-size: 0.85rem;
            color: #9ca3af;
            line-height: 1.6;
        }
        .main {
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background: var(--admin-card);
            border-bottom: 1px solid var(--admin-border);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }
        .topbar .user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 600;
        }
        .topbar .badge {
            background: #e0e7ff;
            color: #3730a3;
            padding: 0.3rem 0.6rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }
        .content {
            padding: 2rem;
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }
        .page-title {
            font-size: 1.8rem;
            font-weight: 800;
            margin: 0;
        }
        .card {
            background: var(--admin-card);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.05);
        }
        .grid {
            display: grid;
            gap: 1.5rem;
        }
        .grid.cols-2 { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); }
        .table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        .table th,
        .table td {
            padding: 0.85rem 0.75rem;
            border-bottom: 1px solid var(--admin-border);
            text-align: left;
        }
        .table th {
            font-size: 0.78rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--admin-muted);
        }
        .status {
            padding: 0.3rem 0.65rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }
        .status.active { background: #dcfce7; color: #166534; }
        .status.inactive { background: #fee2e2; color: #991b1b; }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.65rem 1rem;
            border-radius: 10px;
            font-weight: 700;
            border: 1px solid transparent;
            cursor: pointer;
            background: var(--admin-accent);
            color: white;
        }
        .btn.secondary { background: transparent; color: var(--admin-accent); border-color: var(--admin-accent); }
        .btn.ghost { background: transparent; color: var(--admin-text); border-color: var(--admin-border); }
        .form-grid {
            display: grid;
            gap: 1rem;
        }
        label {
            font-weight: 600;
            font-size: 0.95rem;
        }
        input, textarea, select {
            width: 100%;
            padding: 0.75rem 0.9rem;
            border-radius: 10px;
            border: 1px solid var(--admin-border);
            font-family: inherit;
            font-size: 0.95rem;
        }
        textarea { min-height: 120px; resize: vertical; }
        .muted { color: var(--admin-muted); }
        .alert {
            padding: 0.85rem 1rem;
            border-radius: 12px;
            background: #ecfeff;
            color: #155e75;
            border: 1px solid #bae6fd;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .alert.error {
            background: #fee2e2;
            color: #991b1b;
            border-color: #fecaca;
        }
        .actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        .logout-form { margin: 0; }
        @media (max-width: 960px) {
            .admin-layout { grid-template-columns: 1fr; }
            .sidebar { position: sticky; top: 0; z-index: 10; flex-direction: row; align-items: center; justify-content: space-between; }
            .sidebar nav { grid-auto-flow: column; overflow-x: auto; }
        }
    </style>
</head>
<body>
<div class="admin-layout">
    <aside class="sidebar">
        <div>
            <h1>OMEXPRESS Admin</h1>
            <div class="meta">Dashboard internal untuk mengelola konten publik.</div>
        </div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">Artikel</a>
            <a href="{{ route('admin.regions.index') }}" class="{{ request()->routeIs('admin.regions.*') ? 'active' : '' }}">Region</a>
            <a href="{{ route('admin.shipping-rates.index') }}" class="{{ request()->routeIs('admin.shipping-rates.*') ? 'active' : '' }}">Tarif Ongkir</a>
            <a href="{{ route('home') }}" target="_blank">Lihat Website</a>
        </nav>
        <form class="logout-form" method="post" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn secondary" style="width: 100%; justify-content: center;">Keluar</button>
        </form>
    </aside>

    <div class="main">
        <header class="topbar">
            <div class="user">
                <span>{{ auth()->user()->name ?? 'Admin' }}</span>
                <span class="badge">{{ auth()->user()->role ?? 'admin' }}</span>
            </div>
            <div class="muted">{{ now()->translatedFormat('l, d F Y') }}</div>
        </header>

        <main class="content">
            @include('admin.partials.flash')
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
