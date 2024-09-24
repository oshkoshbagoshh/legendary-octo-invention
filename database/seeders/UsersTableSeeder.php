<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  setting up with fake users
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
//        DB::table('users')->insert([
//            'name' => $faker->name,
//            'email' => $faker->email,
//            'email_verified_at' => now(),
//            'password' => Hash::make('password'),
//            'remember_token' => Str::random(10),
//        ]);
    }
}
