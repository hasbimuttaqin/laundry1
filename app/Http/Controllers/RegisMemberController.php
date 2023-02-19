<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegisMemberController extends Controller
{

    public function index ()
    {
        $data = Member::all();

        return view('admin.regismember.index', compact('data'));
    }

    public function insertregis(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required'
        ]);

        Member::create($request->all());
        return redirect()->route('regismember')->with('success', 'Registrasi pelanggan berhasil ditambahkan.');
    }
}
