
<?php
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=ecommerce_auth',
        'root',
        ''
    );
    echo "Koneksi PHP berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
