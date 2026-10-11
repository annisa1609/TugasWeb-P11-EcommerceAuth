@extends('layouts.app')

@section('content')
<section class="authcard">
    <p class="eyebrow">BUAT AKUN BARU</p>
    <h1>Daftar</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>
            Nama Lengkap
            <input name="name" value="{{ old('name') }}"
                   required autocomplete="name">
        </label>

        <label>
            Alamat Email
            <input name="email" type="email"
                   value="{{ old('email') }}"
                   required autocomplete="username">
        </label>

        <label>
            Kata Sandi
            <input name="password" type="password"
                   required autocomplete="new-password">
        </label>

        <label>
            Ulangi Kata Sandi
            <input name="password_confirmation" type="password"
                   required autocomplete="new-password">
        </label>

        <button class="primary">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
</section>
@endsection
