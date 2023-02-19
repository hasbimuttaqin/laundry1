<?php

namespace App\Http\Controllers;

use App\Models\Outlett;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OutletController extends Controller
{
      public function index()
    {

        $outlet = Outlett::all();

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

        // $validatedData = $request->validate([
        //     'nama_outlet' => 'required',
        //     'alamat_outlet' => 'required',
        //     'no_telp' => 'required'
        // ]);

       $outlet =Outlett::find($id);
       $outlet->update($request->all());
       dd($outlet);



       return redirect()->route('outlet')->with('success', 'Data pelanggan berhasil diubah.');
    }
}
