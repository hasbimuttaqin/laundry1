<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutlettSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outletts')->insert([
            'nama_outlet' => 'Abroor Laundry',
            'alamat_outlet' => 'Kp.Cibereum',
            'no_telp' => '098766554432'
        ]);
    }
}
