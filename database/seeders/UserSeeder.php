<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
              'nama'=> 'nazib',
              'username'=> 'admin',
              'role'=> 'admin',
              'password'=> Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'nama'=> 'elsa',
            'username'=> 'kasir',
            'role'=> 'kasir',
            'password'=> Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'nama'=> 'dani',
            'username'=> 'owner',
            'role'=> 'owner',
            'password'=> Hash::make('123456'),
        ]);
    }
}
