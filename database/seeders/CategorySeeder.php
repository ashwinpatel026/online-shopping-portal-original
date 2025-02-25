<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Books',
                'category_description' => 'All-Books',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Electronics',
                'category_description' => 'Electronics-Products',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Furniture',
                'category_description' => 'All-Furniture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Fashion',
                'category_description' => 'Fashion-Store',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}