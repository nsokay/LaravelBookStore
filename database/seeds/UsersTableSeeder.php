<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //php artisan db:seed --class=UsersTableSeeder
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SuperBeaverAdmin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'type' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Jane',
            'email' => 'jane@example.com',
            'password' => bcrypt('jane'),
            'type' => 'default',
        ]);
    }
}
