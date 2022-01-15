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
                'price' => 799000,
                'description' => 'Size: 125x75 cm'
            ],
            [
                'product_name' => 'Bed Frame',
                'category_id' => 2,
                'color' => 'White',
                'image' => 'product-image/example2.jpg',
                'price' => 2599000,
                'description' => 'Size: 120x200 cm'
            ],
            [
                'product_name' => 'Kitchen Sink',
                'category_id' => 3,
                'color' => 'Silver',
                'image' => 'product-image/example3.jpg',
                'price' => 2594000,
                'description' => 'Size: 112x56x139 cm'
            ],
            [
                'product_name' => 'Towel Holder',
                'category_id' => 4,
                'color' => 'Army Green',
                'image' => 'product-image/example4.jpg',
                'price' => 10000,
                'description' => 'Size: 112x56x139 cm'
            ]
        ];
        DB::table('products')->insert($products);
    }
}
