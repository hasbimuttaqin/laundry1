<?php

namespace Database\Seeders;

use App\Models\Outlett;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outletA = Outlett::where('nama_outlet', 'Kavci Laundry')->first();

        DB::table('produks')->insert([
               'id_outlet' => $outletA->id,
               'jenis' => 'kiloan',
               'nama_paket' => 'Kiloan A',
               'harga' => 8000
        ]);
    }
}
