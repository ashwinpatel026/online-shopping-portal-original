<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            [
                'category_id' => 2,
                'subcategory_name' => 'Led Television',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Television',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Mobiles',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Mobile Accessories',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Laptops',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Computers',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'subcategory_name' => 'Comics',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'subcategory_name' => 'Beds',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'subcategory_name' => 'Sofas',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'subcategory_name' => 'Dining Tables',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'subcategory_name' => 'Men Footwears',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_name' => 'Refrigerator',
                'subcategory_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}