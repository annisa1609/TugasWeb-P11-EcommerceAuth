```php
<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $products = [
            [
                'name' => 'HP Samsung Galaxy A56',
                'description' => 'Smartphone Samsung dengan layar jernih.',
                'price' => 5499000,
                'image_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9',
            ],
            [
                'name' => 'Laptop ASUS Vivobook',
                'description' => 'Laptop untuk kuliah dan pekerjaan.',
                'price' => 8500000,
                'image_url' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853',
            ],
            [
                'name' => 'iPad Apple',
                'description' => 'Tablet untuk belajar dan hiburan.',
                'price' => 6999000,
                'image_url' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0',
            ],
            [
                'name' => 'Komputer Desktop',
                'description' => 'Komputer untuk kebutuhan kerja.',
                'price' => 7500000,
                'image_url' => 'https://images.unsplash.com/photo-1587831990711-23ca6441447b',
            ],
            [
                'name' => 'Keyboard Mechanical',
                'description' => 'Keyboard untuk mengetik dan gaming.',
                'price' => 650000,
                'image_url' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3',
            ],
            [
                'name' => 'Mouse Wireless',
                'description' => 'Mouse tanpa kabel yang praktis.',
                'price' => 250000,
                'image_url' => 'https://images.unsplash.com/photo-1527814050087-3793815479db',
            ],
            [
                'name' => 'Headphone Bluetooth',
                'description' => 'Headphone untuk mendengarkan musik.',
                'price' => 450000,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e',
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Jam tangan pintar untuk aktivitas sehari-hari.',
                'price' => 899000,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30',
            ],
            [
                'name' => 'Kamera Digital',
                'description' => 'Kamera untuk mengabadikan momen.',
                'price' => 4200000,
                'image_url' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32',
            ],
            [
                'name' => 'Speaker Bluetooth',
                'description' => 'Speaker portabel dengan suara jernih.',
                'price' => 350000,
                'image_url' => 'https://images.unsplash.com/photo-1608043152269-423dbba4e7e1',
            ],
            [
                'name' => 'Printer Epson',
                'description' => 'Printer untuk kebutuhan dokumen.',
                'price' => 1800000,
                'image_url' => 'https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6',
            ],
            [
                'name' => 'Monitor LED',
                'description' => 'Monitor untuk komputer desktop.',
                'price' => 1650000,
                'image_url' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf',
            ],
            [
                'name' => 'Flashdisk 64GB',
                'description' => 'Penyimpanan portabel untuk file.',
                'price' => 100000,
                'image_url' => 'https://images.unsplash.com/photo-1531492746076-161ca9bcad58',
            ],
            [
                'name' => 'Power Bank',
                'description' => 'Pengisi daya portabel untuk smartphone.',
                'price' => 275000,
                'image_url' => 'https://images.unsplash.com/photo-1609592806596-b43bada2f4b1',
            ],
            [
                'name' => 'Router WiFi',
                'description' => 'Perangkat untuk jaringan internet.',
                'price' => 400000,
                'image_url' => 'https://images.unsplash.com/photo- router-placeholder',
            ],
        ];

        $product = fake()->unique()->randomElement($products);

        return [
            'category_id' => Category::query()->inRandomOrder()->value('id')
                ?? Category::factory(),
            'name' => $product['name'],
            'description' => $product['description'],
            'price' => $product['price'],
            'image_url' => $product['image_url'],
            'is_active' => true,
        ];
    }
}
```