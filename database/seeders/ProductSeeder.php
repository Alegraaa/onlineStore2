<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'TV',
            'description' => 'Best TV',
            'image' => 'game.png',
            'price' => 1000,
        ]);

        Product::create([
            'name' => 'iPhone',
            'description' => 'Best iPhone',
            'image' => 'safe.png',
            'price' => 999,
        ]);

        Product::create([
            'name' => 'Chromecast',
            'description' => 'Best Chromecast',
            'image' => 'submarine.png',
            'price' => 30,
        ]);

        Product::create([
            'name' => 'Glasses',
            'description' => 'Best Glasses',
            'image' => 'game.png',
            'price' => 100,
        ]);
    }
}