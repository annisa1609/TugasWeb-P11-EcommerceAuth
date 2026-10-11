# TugasWeb-P11-EcommerceAuth

Project tugas Laravel Pertemuan 11: **E-Commerce DB + Secure Auth**.

## Fitur
- 7 tabel domain aplikasi: `categories`, `products`, `carts`, `cart_items`, `orders`, `order_items`, dan `posts` (tabel `users` serta tabel sistem auth Laravel juga disertakan).
- Foreign key constraints, Eloquent relationships, factory, seeder 60 produk realistis, serta scope `Product::available()`.
- Register, login, logout, session regeneration, CSRF protection, validasi, hashing password, dan role `admin/editor/user`.
- Custom middleware `role`, `PostPolicy` untuk izin edit/hapus, route admin terlindungi, serta tampilan katalog, dashboard, post dan profil.
- Contoh eager loading `Product::with('category')` untuk menghindari N+1.

## Persyaratan
PHP 8.2+, Composer, Node.js + npm, MySQL/MariaDB (XAMPP dapat digunakan).

## Instalasi di Windows / XAMPP
1. Ekstrak ZIP ke `C:\xampp\htdocs\TugasWeb-P11-EcommerceAuth`.
2. Buka terminal pada folder project.
3. Jalankan `composer install`.
4. Salin `.env.example` menjadi `.env`, lalu sesuaikan nama database. Buat database MySQL bernama `ecommerce_auth` melalui phpMyAdmin.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate --seed`.
7. Jalankan `npm install` lalu `npm run build`.
8. Jalankan `php artisan serve` dan buka `http://127.0.0.1:8000`.

Akun demo seeder (password semua `password`): `admin@example.com`, `editor@example.com`, `user@example.com`.

## Catatan Breeze
Struktur autentikasi login/register/logout dibuat dengan pola controller/route Laravel dan halaman Blade sederhana, agar dapat langsung dipahami dan diuji. Paket `laravel/breeze` disediakan di `composer.json` sebagai dependency dev untuk memenuhi materi Breeze. Setelah `composer install`, bila dosen mengharuskan scaffold Breeze resmi, simpan pekerjaan terlebih dahulu lalu jalankan `php artisan breeze:install blade` dan gabungkan perubahan yang diperlukan (jangan menimpa file tanpa backup).

## Dokumentasi yang perlu dilengkapi
- Jalankan 5 query di `docs/tinker-queries.md` dan simpan screenshot hasil nyata ke `docs/screenshots/`.
- Ikuti checklist pengujian di `docs/testing.md` dan ambil screenshot role admin/editor/user serta pengujian incognito.

## Batasan
Panel admin Filament dicantumkan sebagai bonus opsional, belum dipasang. Project utama difokuskan pada semua poin wajib di gambar tugas. File `vendor/` dan `node_modules/` tidak disertakan di ZIP; keduanya dibuat melalui Composer dan npm pada komputer sendiri.
