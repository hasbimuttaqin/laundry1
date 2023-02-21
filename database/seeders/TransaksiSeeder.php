<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Outlett;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $outletA = Outlett::where('nama_outlet', 'Kavci Laundry')->first();

        $memberA = Member::where('nama', 'Wulansari Elsa')->first();

        $produkA = Produk::where('nama_paket', 'Kaos Anak')->first();

        DB::table('transaksis')->insert([
            'id_outlet' => $outletA->id,
            'kd_invoice' => 'INV001',
            'id_member' => $memberA->id,
            'id_produk' => $produkA->id,
            'qty' => '5',
            'tgl' => '2022-02-20 10:00:00',
            'batas_waktu' => '2022-02-28 10:00:00',
            'tgl_bayar' => '2022-02-24 10:00:00',
            'biaya_tambahan' => '3000',
            'diskon' => '5',
            'pajak' => '3',
            'status' => 'baru',
            'dibayar' => 'belum_bayar',
            'keterangan' => 'Bagus'
        ]);
    }
}
