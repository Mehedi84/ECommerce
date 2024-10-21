<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_child_categories')->insert([
            [
                'name' => "Android",
                'product_sub_categories_id' => "1",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "iOS",
                'product_sub_categories_id' => "1",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Gaming Laptops",
                'product_sub_categories_id' => "2",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ultrabooks",
                'product_sub_categories_id' => "2",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shirts",
                'product_sub_categories_id' => "3",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pants",
                'product_sub_categories_id' => "3",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dresses",
                'product_sub_categories_id' => "4",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tops",
                'product_sub_categories_id' => "4",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fantasy",
                'product_sub_categories_id' => "5",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sci-Fi",
                'product_sub_categories_id' => "5",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Biographies",
                'product_sub_categories_id' => "6",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Self-Help",
                'product_sub_categories_id' => "6",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}