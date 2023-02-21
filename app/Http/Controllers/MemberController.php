<?php

namespace App\Http\Controllers;

use App\Models\Member;


use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Member::where('nama','LIKE',"%".$request->search."%")->with('transaksis')->paginate();
        } else {
            $data = Member::all();
        }

        return view('admin.data-m.member', compact('data'));
    }

    // FUNGSI TAMBAH DATA
    public function create()
    {
        return view('admin.data-m.tambah');
    }

    public function insert(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required'
        ]);

        Member::create($request->all());
        return redirect()->route('member')->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    // FUNGSI UBAH DATA
    public function edit($id)
    {
       $data = Member::find($id);
       return view('admin.data-m.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {


        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required'
        ]);


       $data = Member::find($id);
       $data->update($request->all());


       return redirect()->route('member')->with('success', 'Data pelanggan berhasil diubah.');
    }

    // FUNGSI HAPUS DATA
    public function delete(Request $request, $id)
    {
        $data = Member::find($id)->delete();

        return redirect()->route('member')->with('success', 'Data pelanggan berhasil dihapus.');
    }
}
