<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);*/

        DB::table('users')->insert([
            'name' => 'prueba1',
            'email' => 'prueba1@test.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'prueba2',
            'email' => 'prueba2@test.com',
            'password' => Hash::make('234568'),
        ]);
        DB::table('users')->insert([
            'name' => 'cristian',
            'email' => 'cristian@test.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
