<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i<100; $i++) {
            $new_product = new Product();
            $new_product->name = $faker->sentence(2);
            $new_product->description = $faker->text(50);
            $new_product->image_url = $faker->imageUrl(360, 360,true);
            $new_product->ean_code = $faker->ean13();
            $new_product->cost = $faker->randomFloat(2,10,100);
            $new_product->highlighted = ($i<5) ? true : false;
            $new_product->category_id = $faker->numberBetween(1, 5);
            $new_product->save();
        }
    }
}
