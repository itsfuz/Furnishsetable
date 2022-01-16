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
            ],
            [
                'product_name' => 'Lamp',
                'category_id' => 5,
                'color' => 'Beige',
                'image' => 'product-image/example5.jpg',
                'price' => 100000,
                'description' => 'Size: 30x30x30 cm'
            ],
            [
                'product_name' => 'Sofa',
                'category_id' => 1,
                'color' => 'Blue',
                'image' => 'product-image/example6.jpg',
                'price' => 2000000,
                'description' => 'Size: 180x80x100 cm'
            ],
            [
                'product_name' => 'Drawer',
                'category_id' => 1,
                'color' => 'Red',
                'image' => 'product-image/example7.jpg',
                'price' => 1500000,
                'description' => 'Size: 85x110x50 cm'
            ],
            [
                'product_name' => 'Cutting Board',
                'category_id' => 3,
                'color' => 'Brown',
                'image' => 'product-image/example8.jpg',
                'price' => 70000,
                'description' => 'Size: 45x3x20 cm'
            ],
            [
                'product_name' => 'Bathub',
                'category_id' => 4,
                'color' => 'White',
                'image' => 'product-image/example9.jpg',
                'price' => 5000000,
                'description' => 'Size: 182x56x139 cm'
            ],
            [
                'product_name' => 'Clock',
                'category_id' => 5,
                'color' => 'Black',
                'image' => 'product-image/example10.jpg',
                'price' => 10000,
                'description' => 'Size: 30x3x30 cm'
            ],
            [
                'product_name' => 'Bed Frame 2',
                'category_id' => 2,
                'color' => 'Brown',
                'image' => 'product-image/example11.jpg',
                'price' => 500000,
                'description' => 'Size: 120x200 cm'
            ]

        ];
        DB::table('products')->insert($products);
    }
}
