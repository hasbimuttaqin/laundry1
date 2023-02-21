<?php

namespace App\Http\Controllers;

use App\Models\Outlett;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $produk = Produk::where('nama_paket','LIKE', "%".$request->search."%")->with('outletts','transaksis')->paginate();
        } else {
            $produk = Produk::with('outletts','transaksis')->get();
        }

        return view('admin.data-p.produk', compact('produk'));
    }

    // FUNGSI TAMBAH DATA
    public function create()
    {
        $outlet = Outlett::all();
        return view('admin.data-p.tambah', compact('outlet'));
    }

    public function insert(Request $request)
    {
        // $request->validate([
        //     'id_outlet' => 'required',
        //     'jenis' => 'required',
        //     'nama_produk' => 'required',
        //     'harga' => 'required',
        // ]);


        Produk::create($request->all());

        return redirect()->route('produk')->with('success', 'Data produk berhasil ditambahkan.');
    }

    // FUNGSI UBAH DATA
    public function edit($id)
    {
         $outlet = Outlett::all();
         $produk = Produk::find($id);

         return view('admin.data-p.edit', compact('produk', 'outlet'));
    }

    public function ubah(Request $request, $id)
    {

        $produk = Produk::find($id);
        $produk->update($request->all());

        return redirect()->route('produk')->with('success', 'Data produk berhasil diubah.');
    }

    // FUNGSI HAPUS DATA
    public function delete(Request $request, $id)
    {
        // echo $id;die;
       $produk = Produk::find($id)->delete();

       return redirect()->route('produk')->with('success', 'Data produk berhasil dihapus.');
    }
}
