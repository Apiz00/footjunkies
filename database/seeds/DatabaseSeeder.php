<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
    }
}
