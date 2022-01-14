<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product_categories = [

            [
                'category_name' => 'Living Room'
            ],
            [
                'category_name' => 'BedRoom'
            ],
            [
                'category_name' => 'Kitchen'
            ],
            [
                'category_name' => 'Bathroom'
            ]
        ];

        DB::table('categories')->insert($product_categories);
    }
}
