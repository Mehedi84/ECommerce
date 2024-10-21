<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sub_categories')->insert([
            [
                'name' => "Mobile Phones",
                'product_categories_id' => "1",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Laptops",
                'product_categories_id' => "1",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Men",
                'product_categories_id' => "2",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Women",
                'product_categories_id' => "2",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fiction",
                'product_categories_id' => "3",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Non-Fiction",
                'product_categories_id' => "3",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}