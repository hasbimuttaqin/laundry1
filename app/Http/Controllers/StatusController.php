<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Outlett;
use App\Models\Produk;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $outlet = Outlett::all();
        $member = Member::all();
        $produk = Produk::all();

        return view('admin.transaksi.editstatus', compact('transaksi','outlet','member','produk'));
    }

    public function ubah(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());

        return redirect()->route('transaksi')->with('success', 'Status transaksi berhasil diubah.');
    }
}
