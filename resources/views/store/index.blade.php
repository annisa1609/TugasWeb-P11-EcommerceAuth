@extends('layouts.app')

@section('content')
<section class="hero">
    <p class="eyebrow">TUGAS PERTEMUAN 11</p>
    <h1>Temukan produk <span>favoritmu.</span></h1>
    <p>
        Jelajahi berbagai produk dengan katalog yang terhubung
        ke basis data dan sistem akun pengguna.
    </p>
</section>

<div class="sectionhead">
    <h2>Katalog Produk</h2>
    <span>{{ $products->total() }} produk tersedia</span>
</div>

<div class="products">
    @forelse($products as $product)
        <article class="product">
            <img
                src="{{ $product->image_url ?: 'https://placehold.co/600x400?text=Produk' }}"
                alt="{{ $product->name }}"
            >

            <div class="productbody">
                <small>{{ $product->category?->name }}</small>
                <h3>{{ $product->name }}</h3>
                <p>{{ Str::limit($product->description, 90) }}</p>

                <div class="price">
                    Rp {{ number_format((float) $product->price, 0, ',', '.') }}
                </div>

                <small>Stok tersedia: {{ $product->stock }}</small>
            </div>
        </article>
    @empty
        <p>Belum ada produk. Silakan tambahkan produk terlebih dahulu.</p>
    @endforelse
</div>

<div class="pagination">
    {{ $products->links() }}
</div>
@endsection
