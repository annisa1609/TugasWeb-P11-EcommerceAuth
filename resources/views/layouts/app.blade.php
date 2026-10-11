<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'E-Commerce Auth' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <a class="brand" href="{{ route('store.index') }}">
            E-Commerce Auth
        </a>

        <div class="navlinks">
            <a href="{{ route('store.index') }}">Produk</a>

            @auth
                <a href="{{ route('dashboard') }}">Dasbor</a>

                <a href="{{ route('posts.index') }}">Artikel</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="linkbtn">
                        Keluar ({{ auth()->user()->role }})
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">Masuk</a>

                <a href="{{ route('register') }}">Daftar</a>
            @endauth
        </div>
    </nav>

    <main>
        @if (session('status'))
            <div class="notice">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        Proyek Tugas Pertemuan 11 · E-Commerce Auth dengan Laravel
    </footer>
</body>
</html>
