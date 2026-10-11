# Pengujian akses route (incognito / role)

Setelah `php artisan migrate --seed`, jalankan `php artisan serve` dan uji:

| Akun | Email | Password | Hasil yang diharapkan |
|---|---|---|---|
| Admin | admin@example.com | password | Bisa buka `/admin`, edit/hapus semua post |
| Editor | editor@example.com | password | `/admin` mendapat 403; hanya edit/hapus post miliknya |
| User | user@example.com | password | `/admin` mendapat 403; tidak ada tombol edit/hapus |

Gunakan jendela incognito untuk menguji tanpa sesi login: `/dashboard`, `/posts`, dan `/admin` harus meminta login atau dialihkan ke halaman login. Ambil screenshot hasil uji sebagai dokumentasi.
