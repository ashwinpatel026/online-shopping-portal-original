<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'FrontUser',
                'email' => 'test@test.com',
                'password' => Hash::make('12345678'),
                'utype' => 'USR',
                'contact_no' => '1234567890',
                'shipping_address' => null,
                'shipping_state' => null,
                'shipping_city' => null,
                'shipping_pincode' => null,
                'billing_address' => null,
                'billing_state' => null,
                'billing_city' => null,
                'billing_pincode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AdminUser',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'utype' => 'ADM',
                'contact_no' => '1234567890',
                'shipping_address' => null,
                'shipping_state' => null,
                'shipping_city' => null,
                'shipping_pincode' => null,
                'billing_address' => null,
                'billing_state' => null,
                'billing_city' => null,
                'billing_pincode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}