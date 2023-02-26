<?php

namespace App\Http\Controllers;

use App\Models\Outlett;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OutletController extends Controller
{
      public function index(Request $request)
    {

        if($request->has('search')){
            $outlet = Outlett::where('nama_outlet','LIKE',"%".$request->search."%")->with('transaksis')->paginate();
        } else {

            $outlet = Outlett::all();
        }

        return view('admin.data-o.outlet', compact('outlet'));
    }

     // FUNGSI TAMBAH DATA
     public function create()
     {
         return view('admin.data-o.tambah');
     }

     public function insert(Request $request)
     {

         $request->validate([
             'nama_outlet' => 'required',
             'alamat_outlet' => 'required',
             'no_telp' => 'required'
         ]);

         Outlett::create($request->all());
         return redirect()->route('outlet')->with('success', 'Data outlet berhasil ditambahkan.');
     }

     // FUNGSI UBAH DATA
    public function edit($id)
    {
       $outlet =Outlett::find($id);
       return view('admin.data-o.edit', compact('outlet'));
    }

    public function ubah(Request $request, $id)
    {

        $request->validate([
            'nama_outlet' => 'required',
            'alamat_outlet' => 'required',
            'no_telp' => 'required'
        ]);

       $outlet =Outlett::find($id);
       $outlet->update($request->all());

       return redirect()->route('outlet')->with('success', 'Data outlet berhasil diubah.');
    }

    // FUNGSI DELETE
    public function delete(Request $request, $id)
    {
        $outlet = Outlett::find($id)->delete();

        return redirect()->route('outlet')->with('success', 'Data outlet berhasil dihapus.');
    }
}
