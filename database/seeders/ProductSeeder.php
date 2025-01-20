<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder {
  public function run() {
    // Manually inserting 15 products
    Product::create([
      'name' => 'Phone',
      'price' => 100.00,
      'category' => 'Electronics',
    ]);

    Product::create([
      'name' => 'Tshirt',
      'price' => 200.00,
      'category' => 'Clothing',
    ]);

    Product::create([
      'name' => 'The Book',
      'price' => 150.00,
      'category' => 'Books',
    ]);

    Product::create([
      'name' => 'Chair',
      'price' => 250.00,
      'category' => 'Furniture',
    ]);

    Product::create([
      'name' => 'Apple',
      'price' => 75.00,
      'category' => 'Groceries',
    ]);

    Product::create([
      'name' => 'Doll',
      'price' => 180.00,
      'category' => 'Toys',
    ]);

    Product::create([
      'name' => 'Test',
      'price' => 120.00,
      'category' => 'Automotive',
    ]);

    Product::create([
      'name' => 'Football',
      'price' => 50.00,
      'category' => 'Sports',
    ]);

    Product::create([
      'name' => 'Ring',
      'price' => 500.00,
      'category' => 'Jewelry',
    ]);

    Product::create([
      'name' => 'Pop',
      'price' => 600.00,
      'category' => 'Music',
    ]);

    Product::create([
      'name' => 'Phone',
      'price' => 300.00,
      'category' => 'Electronics',
    ]);

    Product::create([
      'name' => 'Table',
      'price' => 80.00,
      'category' => 'Furniture',
    ]);

    Product::create([
      'name' => 'Truck',
      'price' => 90.00,
      'category' => 'Toys',
    ]);

    Product::create([
      'name' => 'Cricket',
      'price' => 220.00,
      'category' => 'Sports',
    ]);

    Product::create([
      'name' => 'Skirt',
      'price' => 350.00,
      'category' => 'Clothing',
    ]);
  }
}
