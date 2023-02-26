<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Outlett;
use App\Models\Produk;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')) {
            $transaksi = Transaksi::where('kd_invoice','LIKE', "%".$request->search."%")->with('outletts','members','produks')->paginate();
        } else {
            $transaksi = Transaksi::with('outletts','members','produks')->get();
        }

        return view('admin.transaksi.index', compact('transaksi'));
    }

    // FUNGSI TAMBAH DATA
    public function create()
    {

        $outlet = Outlett::all();
        $produk = Produk::all();
        $member = Member::all();

        return view('admin.transaksi.tambah', compact('outlet','produk','member'));
    }

    public function insert(Request $request)
    {
        Transaksi::create($request->all());

        return redirect()->route('transaksi')->with('success', 'Data transaksi berhasil ditambahkan. ');
    }

    // FUNGSI UBAH DATA
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $outlet = Outlett::all();
        $member = Member::all();
        $produk = Produk::all();

        return view('admin.transaksi.edit', compact('transaksi','outlet','member','produk'));
    }

    public function ubah(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());

        return redirect()->route('transaksi')->with('success', 'Data transaksi berhasil diubah. ');
    }

}
