<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Laptop', 'description' => 'Gaming laptop', 'price' => 15000, 'category' => 'Electronics'],
            ['name' => 'Mouse', 'description' => 'Wireless mouse', 'price' => 300, 'category' => 'Electronics'],
            ['name' => 'Keyboard', 'description' => 'Mechanical keyboard', 'price' => 1200, 'category' => 'Electronics'],
            ['name' => 'Monitor', 'description' => '24 inch monitor', 'price' => 4000, 'category' => 'Electronics'],
            ['name' => 'Headphones', 'description' => 'Noise cancelling', 'price' => 2000, 'category' => 'Electronics'],
            ['name' => 'Chair', 'description' => 'Ergonomic chair', 'price' => 3500, 'category' => 'Furniture'],
            ['name' => 'Desk', 'description' => 'Wooden desk', 'price' => 5000, 'category' => 'Furniture'],
            ['name' => 'Backpack', 'description' => 'Travel backpack', 'price' => 800, 'category' => 'Accessories'],
            ['name' => 'Smartphone', 'description' => 'Android phone', 'price' => 10000, 'category' => 'Electronics'],
            ['name' => 'Tablet', 'description' => '10 inch tablet', 'price' => 7000, 'category' => 'Electronics'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
