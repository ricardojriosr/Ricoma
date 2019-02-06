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

        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $faker->randomDigit,
              'brand' => $faker->name,
              'color' => $faker->name,
              'user_id' => 1,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $faker->randomDigit,
              'brand' => $faker->name,
              'color' => $faker->name,
              'user_id' => 2,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $faker->randomDigit,
              'brand' => $faker->name,
              'color' => $faker->name,
              'user_id' => 3,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $faker->randomDigit,
              'brand' => $faker->name,
              'color' => $faker->name,
              'user_id' => 4,
          ]);
        }
        for($i =0; $i < 10; $i++) {
          Product::create([
              'name' => $faker->name,
              'size' => $faker->randomDigit,
              'brand' => $faker->name,
              'color' => $faker->name,
              'user_id' => 5,
          ]);
        }
    }
}
