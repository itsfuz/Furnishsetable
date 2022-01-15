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
                'price' => 13000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, omnis?'
            ],
            [
                'product_name' => 'Bed Frame',
                'category_id' => 2,
                'color' => 'Brown',
                'image' => 'product-image/example2.jpg',
                'price' => 20000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga qui accusantium numquam modi veritatis et quam nemo, sint sed!'
            ],
            [
                'product_name' => 'Tudung Saji',
                'category_id' => 3,
                'color' => 'Black',
                'image' => 'product-image/example3.jpg',
                'price' => 15000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident dicta eveniet laudantium sed voluptas illum non maxime vitae asperiores veritatis totam tenetur voluptatem reiciendis, in id vero ipsum. Facere, velit.'
            ],
            [
                'product_name' => 'Towel Holder',
                'category_id' => 4,
                'color' => 'Army Green',
                'image' => 'product-image/example4.jpg',
                'price' => 10000,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis soluta facilis similique ratione necessitatibus a.'
            ]
        ];
        DB::table('products')->insert($products);
    }
}
