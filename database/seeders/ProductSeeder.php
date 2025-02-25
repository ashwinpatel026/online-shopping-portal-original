<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'category_id' => 2,
                'subcategory_id' => 2,
                'product_name' => 'Micromax 81cm (32) HD Ready LED TV',
                'product_brand' => 'Micromax',
                'price' => 139900,
                'sale_price' => 0,
                'product_description' => 'HD Ready LED TV with excellent features.',
                'product_image1' => 'micromax1.jpeg',
                'product_image2' => 'micromax_main_image.jpg',
                'product_image3' => 'micromax_main_image.jpg',
                'shipping_charge' => 1200,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 3,
                'product_name' => 'Apple iPhone 6 (Silver, 16 GB)',
                'product_brand' => 'Apple',
                'price' => 36990,
                'sale_price' => 0,
                'product_description' => 'iPhone 6 with 16GB storage and Retina HD Display.',
                'product_image1' => 'iphone6_silver.jpeg',
                'product_image2' => 'iphone6_side.jpg',
                'product_image3' => 'iphone6_back.jpg',
                'shipping_charge' => 1000,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 3,
                'product_name' => 'Samsung Galaxy S21 Ultra',
                'product_brand' => 'Samsung',
                'price' => 105999,
                'sale_price' => 99999,
                'product_description' => 'Flagship smartphone with a powerful camera and high-end features.',
                'product_image1' => 'samsung_s21_ultra_front.jpg',
                'product_image2' => 'samsung_s21_ultra_back.jpg',
                'product_image3' => 'samsung_s21_ultra_side.jpg',
                'shipping_charge' => 1500,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 1,
                'product_name' => 'Sony Bravia 55-inch 4K LED TV',
                'product_brand' => 'Sony',
                'price' => 79999,
                'sale_price' => 74999,
                'product_description' => 'High-quality 4K LED TV with stunning visuals.',
                'product_image1' => 'sony_bravia_4k_front.jpg',
                'product_image2' => 'sony_bravia_4k_side.jpg',
                'product_image3' => 'sony_bravia_4k_back.jpg',
                'shipping_charge' => 2000,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 5,
                'product_name' => 'Dell Inspiron 15 3000 Laptop',
                'product_brand' => 'Dell',
                'price' => 45999,
                'sale_price' => 42999,
                'product_description' => 'Powerful laptop with Intel i5 processor and SSD storage.',
                'product_image1' => 'dell_inspiron_15_front.jpg',
                'product_image2' => 'dell_inspiron_15_side.jpg',
                'product_image3' => 'dell_inspiron_15_back.jpg',
                'shipping_charge' => 1500,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 4,
                'product_name' => 'Bose QuietComfort 45 Headphones',
                'product_brand' => 'Bose',
                'price' => 29999,
                'sale_price' => 27999,
                'product_description' => 'Premium noise-canceling wireless headphones.',
                'product_image1' => 'bose_qc45_front.jpg',
                'product_image2' => 'bose_qc45_side.jpg',
                'product_image3' => 'bose_qc45_back.jpg',
                'shipping_charge' => 1000,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'subcategory_id' => 6,
                'product_name' => 'Canon EOS 1500D DSLR Camera',
                'product_brand' => 'Canon',
                'price' => 39999,
                'sale_price' => 36999,
                'product_description' => 'Professional DSLR camera with high-resolution imaging.',
                'product_image1' => 'canon_eos_1500d_front.jpg',
                'product_image2' => 'canon_eos_1500d_side.jpg',
                'product_image3' => 'canon_eos_1500d_back.jpg',
                'shipping_charge' => 1500,
                'product_availability' => 'In Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}