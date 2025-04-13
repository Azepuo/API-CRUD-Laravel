<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Ordinateur Portable',
            'description' => 'PC Gamer performant',
            'price' => 1500
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Dernier modèle',
            'price' => 900
        ]);

        Product::create([
            'name' => 'Clavier Mécanique',
            'description' => 'Clavier RGB gamer',
            'price' => 120
        ]);
    }
}
