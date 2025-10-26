<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop Lenovo',
            'description' => 'Core i5, 16GB RAM',
            'price' => 25000,
            'stock' => 5,
            'image' => null,
        ]);

        Product::create([
            'name' => 'Logitech Mouse',
            'description' => 'Wireless',
            'price' => 700,
            'stock' => 20,
            'image' => null,
        ]);

        Product::create([
            'name' => 'Samsung Monitor',
            'description' => '24" FullHD',
            'price' => 5500,
            'stock' => 8,
            'image' => null,
        ]);
    }
}
