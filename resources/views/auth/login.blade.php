@extends('layouts.app')

@section('content')
<section class="authcard">
    <p class="eyebrow">SELAMAT DATANG KEMBALI</p>
    <h1>Masuk</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>
            Alamat Email
            <input name="email" type="email"
                   value="{{ old('email') }}"
                   required autofocus autocomplete="username">
        </label>

        <label>
            Kata Sandi
            <input name="password" type="password"
                   required autocomplete="current-password">
        </label>

        <label class="check">
            <input type="checkbox" name="remember">
            Ingat saya
        </label>

        <button class="primary">Masuk</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
</section>
@endsection
