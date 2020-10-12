<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Shop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create(['name' => 'Admin', 'role' => 1, 'password' => Hash::make('admin'), 'email' => 'admin@gmail.com']);

        factory('App\User')->create(['name' => 'Manager', 'role' => 2, 'password' => Hash::make('manager'), 'email' => 'manager@gmail.com']);

        Shop::create(['shop_name' => 'Nike', 'shop_location' => 'Malaysia', 'shop_phone_number' => 123123, 'shop_ssm_reg_no' => 123123, 'description' => 'just do it', 'user_id' => 2]);

        factory('App\User')->create(['name' => 'user', 'role' => 4, 'password' => Hash::make('user'), 'email' => 'user@gmail.com']);
    }
}
