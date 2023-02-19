<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
              'nama' => 'Nazib Helmi',
              'alamat' => 'Kp.Kerenceng',
              'jenis_kelamin' => 'Laki-Laki',
              'no_tlp' => '085344458762',
        ]);
    }
}
