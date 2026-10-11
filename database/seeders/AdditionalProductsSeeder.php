<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdditionalProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Laptop Lenovo IdeaPad', 'Laptop untuk kuliah dan pekerjaan', 7800000, 'photo-1496181133206-80ce9b88a853'],
            ['Laptop Acer Aspire', 'Laptop untuk produktivitas sehari-hari', 7200000, 'photo-1496181133206-80ce9b88a853'],
            ['Samsung Galaxy S24', 'Smartphone untuk komunikasi dan hiburan', 9500000, 'photo-1511707171634-5f897ff02aa9'],
            ['iPhone 15', 'Smartphone Apple untuk kebutuhan harian', 12000000, 'photo-1511707171634-5f897ff02aa9'],
            ['Tablet Android', 'Tablet untuk belajar dan menonton', 2800000, 'photo-1544244015-0df4b3ffc6b0'],
            ['Keyboard Wireless', 'Keyboard nirkabel untuk komputer', 220000, 'photo-1587829741301-dc798b83add3'],
            ['Mouse Gaming RGB', 'Mouse gaming dengan pencahayaan RGB', 320000, 'photo-1527814050087-3793815479db'],
            ['Headset Gaming', 'Headset untuk bermain game', 375000, 'photo-1505740420928-5e560c06d30e'],
            ['Webcam HD', 'Kamera untuk rapat dan kelas online', 450000, 'photo-1587829741301-dc798b83add3'],
            ['Mikrofon USB', 'Mikrofon untuk rekaman suara', 550000, 'photo-1590602847861-f357a9332bbc'],
            ['SSD External 1TB', 'Penyimpanan eksternal berkapasitas besar', 1250000, 'photo-1597872200969-2b65d56bd16b'],
            ['Hard Disk External 2TB', 'Media penyimpanan data eksternal', 1450000, 'photo-1597872200969-2b65d56bd16b'],
            ['RAM DDR4 8GB', 'Memori untuk meningkatkan performa komputer', 350000, 'photo-1541029071515-84cc54f84dc5'],
            ['SSD NVMe 512GB', 'SSD untuk mempercepat komputer', 650000, 'photo-1597872200969-2b65d56bd16b'],
            ['Kabel HDMI 2 Meter', 'Kabel penghubung monitor dan perangkat', 85000, 'photo-1558618666-fcd25c85cd64'],
            ['USB Hub 4 Port', 'Hub USB untuk menambah koneksi perangkat', 125000, 'photo-1527443224154-c4a3942d3acf'],
            ['Charger USB-C', 'Pengisi daya perangkat USB-C', 180000, 'photo-1609592806596-b43bada2f4b1'],
            ['Kabel Data USB-C', 'Kabel untuk pengisian daya dan transfer data', 65000, 'photo-1609592806596-b43bada2f4b1'],
            ['Stand Laptop', 'Penyangga laptop untuk meja kerja', 150000, 'photo-1496181133206-80ce9b88a853'],
            ['Cooling Pad Laptop', 'Pendingin tambahan untuk laptop', 175000, 'photo-1496181133206-80ce9b88a853'],
            ['Printer Canon', 'Printer untuk mencetak dokumen', 1650000, 'photo-1612815154858-60aa4c59eaa6'],
            ['Tinta Printer Hitam', 'Tinta untuk printer yang kompatibel', 95000, 'photo-1612815154858-60aa4c59eaa6'],
            ['Kertas A4 500 Lembar', 'Kertas untuk mencetak dokumen', 58000, 'photo-1586075010923-2dd4570fb338'],
            ['Monitor Gaming 24 Inch', 'Monitor untuk gaming dan produktivitas', 2100000, 'photo-1527443224154-c4a3942d3acf'],
            ['Monitor 27 Inch', 'Monitor layar lebar untuk bekerja', 2850000, 'photo-1527443224154-c4a3942d3acf'],
            ['Speaker Komputer', 'Speaker untuk audio komputer', 180000, 'photo-1608043152269-423dbba4e7e1'],
            ['Earphone Kabel', 'Earphone untuk mendengarkan audio', 75000, 'photo-1505740420928-5e560c06d30e'],
            ['Smartwatch Sport', 'Jam pintar untuk aktivitas olahraga', 550000, 'photo-1523275335684-37898b6baf30'],
            ['Kamera Web Meeting', 'Kamera untuk konferensi video', 390000, 'photo-1516035069371-29a1b244cc32'],
            ['Tripod Kamera', 'Tripod untuk membantu pengambilan gambar', 210000, 'photo-1516035069371-29a1b244cc32'],
            ['Ring Light LED', 'Lampu untuk foto dan video', 135000, 'photo-1526045612212-70caf35c14df'],
            ['Router WiFi Dual Band', 'Router untuk jaringan internet rumah', 475000, 'photo-1606904825846-647eb07f5be2'],
            ['Kabel LAN 10 Meter', 'Kabel jaringan untuk koneksi internet', 65000, 'photo-1558618666-fcd25c85cd64'],
            ['Switch Jaringan 8 Port', 'Perangkat untuk menghubungkan jaringan kabel', 325000, 'photo-1606904825846-647eb07f5be2'],
            ['Power Bank 20000mAh', 'Baterai portabel untuk perangkat mobile', 350000, 'photo-1609592806596-b43bada2f4b1'],
            ['Charger Wireless', 'Pengisi daya nirkabel untuk perangkat kompatibel', 225000, 'photo-1609592806596-b43bada2f4b1'],
            ['Tas Laptop', 'Tas untuk membawa laptop dan aksesori', 275000, 'photo-1496181133206-80ce9b88a853'],
            ['Mouse Pad Gaming', 'Alas mouse untuk aktivitas komputer', 95000, 'photo-1527814050087-3793815479db'],
            ['Kursi Kerja', 'Kursi untuk menunjang aktivitas di meja kerja', 1250000, 'photo-1586023492125-27b2c045efd7'],
            ['Lampu Meja LED', 'Lampu meja untuk belajar dan bekerja', 145000, 'photo-1507473885765-e6ed057f782c'],
            ['Stop Kontak 4 Lubang', 'Stop kontak untuk perangkat elektronik', 85000, 'photo-1558002038-1055907df827'],
            ['Kalkulator Digital', 'Kalkulator untuk perhitungan sehari-hari', 65000, 'photo-1587145820266-a5951ee6f620'],
            ['Gamepad USB', 'Kontroler untuk bermain game di komputer', 225000, 'photo-1592840496694-26d035b52b48'],
            ['Kartu Memori 128GB', 'Kartu memori untuk perangkat kompatibel', 175000, 'photo-1531492746076-161ca9bcad58'],
            ['Card Reader USB', 'Pembaca kartu memori melalui USB', 55000, 'photo-1527443224154-c4a3942d3acf'],
            ['Adaptor USB-C HDMI', 'Adaptor untuk menghubungkan perangkat ke layar', 190000, 'photo-1527443224154-c4a3942d3acf'],
            ['Laptop Sleeve', 'Pelindung laptop saat dibawa bepergian', 120000, 'photo-1496181133206-80ce9b88a853'],
        ];

        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command?->error('Kategori belum tersedia. Jalankan DatabaseSeeder terlebih dahulu.');
            return;
        }

        foreach ($products as [$name, $description, $price, $imageId]) {
            $slug = Str::slug($name);

            Product::firstOrCreate(
                ['slug' => $slug],
                [
                    'category_id' => $categories->random()->id,
                    'name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'stock' => random_int(5, 100),
                    'image_url' => 'https://images.unsplash.com/' . $imageId . '?auto=format&fit=crop&w=600&q=80',
                    'is_active' => true,
                ]
            );
        }

        $this->command?->info('Produk tambahan selesai diproses.');
    }
}
