@if (session('status'))
    <div class="alert">{{ session('status') }}</div>
@endif

@if ($errors->any())
    <div class="alert error">
        <div>Periksa kembali input Anda:</div>
        <ul style="margin: 0.5rem 0 0 1rem; padding: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
