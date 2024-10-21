<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_brands')->insert([
            [
                'name' => "Apple",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Samsung",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Nike",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Adidas",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Penguin",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "HarperCollins",
                'is_active' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}