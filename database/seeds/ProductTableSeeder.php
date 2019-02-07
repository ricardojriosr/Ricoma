<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();
        $size = array('XS','S','M','L','XL','XXL');
        $color = array('red','yellow','blue','pink','purple','orange','green','violet');
        $brand = array('nike','adidas','puma','tommy hilfiger','old navy');

        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $size[array_rand($size)],
              'brand' => $brand[array_rand($brand)],
              'color' => $color[array_rand($color)],
              'user_id' => 1,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $size[array_rand($size)],
              'brand' => $brand[array_rand($brand)],
              'color' => $color[array_rand($color)],
              'user_id' => 2,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $size[array_rand($size)],
              'brand' => $brand[array_rand($brand)],
              'color' => $color[array_rand($color)],
              'user_id' => 3,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $size[array_rand($size)],
              'brand' => $brand[array_rand($brand)],
              'color' => $color[array_rand($color)],
              'user_id' => 4,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $size[array_rand($size)],
              'brand' => $brand[array_rand($brand)],
              'color' => $color[array_rand($color)],
              'user_id' => 5,
          ]);
        }
    }
}
