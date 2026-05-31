<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: radial-gradient(circle at top, #1d4ed8 0%, #0f172a 55%);
            font-family: "Source Sans 3", sans-serif;
        }
        .card {
            width: min(420px, 92vw);
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.3);
        }
        h1 { margin: 0 0 0.5rem; font-size: 1.8rem; }
        p { margin: 0 0 1.5rem; color: #6b7280; }
        label { display: block; font-weight: 600; margin-bottom: 0.4rem; }
        input {
            width: 100%;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            padding: 0.75rem 0.9rem;
            font-family: inherit;
        }
        .btn {
            width: 100%;
            margin-top: 1rem;
            background: #1d4ed8;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 0.8rem;
            font-weight: 700;
            cursor: pointer;
        }
        .alert {
            background: #fee2e2;
            color: #991b1b;
            padding: 0.75rem 0.9rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .muted { color: #6b7280; font-size: 0.9rem; }
    </style>
</head>
<body>
    <form class="card" method="post" action="{{ route('admin.login.submit') }}">
        @csrf
        <h1>Masuk Admin</h1>
        <p>Gunakan akun berperan admin untuk mengelola konten.</p>

        @if ($errors->any())
            <div class="alert">{{ $errors->first() }}</div>
        @endif

        <div style="margin-bottom: 1rem;">
            <label for="login">Email atau Username</label>
            <input id="login" name="login" type="text" value="{{ old('login') }}" required autofocus>
        </div>
        <div style="margin-bottom: 0.5rem;">
            <label for="password">Kata Sandi</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <input id="remember" name="remember" type="checkbox" style="width: auto;">
            <label for="remember" class="muted">Ingat saya</label>
        </div>
        <button class="btn" type="submit">Masuk</button>
    </form>
</body>
</html>
