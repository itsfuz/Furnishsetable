<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $products = [

            [
                'product_name' => 'Living Room Table',
                'category_id' => 1,
                'color' => 'White',
                'image' => 'product-image/example1.jpg',
                'price' => 13000
            ],
            [
                'product_name' => 'Bed Frame',
                'category_id' => 2,
                'color' => 'Brown',
                'image' => 'product-image/example2.jpg',
                'price' => 20000
            ],
            [
                'product_name' => 'Tudung Saji',
                'category_id' => 3,
                'color' => 'Black',
                'image' => 'product-image/example3.jpg',
                'price' => 15000
            ],
            [
                'product_name' => 'Fridge',
                'category_id' => 4,
                'color' => 'Army Green',
                'image' => 'product-image/example4.jpg',
                'price' => 10000
            ]
        ];
        DB::table('products')->insert($products);
    }
}
