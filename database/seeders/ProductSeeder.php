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
    public function run()
{
    Product::create([
        'name' => 'Iphone',
        'price' => 1000,
        'image' => 'iphone.jpg'
    ]);

    Product::create([
        'name' => 'Android',
        'price' => 900,
        'image' => 'android.jpg'
    ]);
}
}
