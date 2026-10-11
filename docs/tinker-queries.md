# Dokumentasi 5 Query Tinker
Jalankan `php artisan tinker`, lalu jalankan query berikut satu per satu. Ambil screenshot terminal setelah hasil keluar untuk bukti tugas.

1. **Jumlah produk**
   ```php
   App\Models\Product::count();
   ```
2. **Produk dan kategori (eager loading)**
   ```php
   App\Models\Product::with('category')->take(10)->get(['id','category_id','name','price']);
   ```
3. **Scope produk tersedia**
   ```php
   App\Models\Product::available()->count();
   ```
4. **Kategori beserta jumlah produk**
   ```php
   App\Models\Category::withCount('products')->get(['id','name','products_count']);
   ```
5. **Pesanan beserta pemilik dan item**
   ```php
   App\Models\Order::with(['user','items.product'])->get();
   ```

> Screenshot belum bisa dibuat otomatis karena query harus dijalankan pada database lokal milikmu. Simpan gambar screenshot di folder `docs/screenshots/`.
