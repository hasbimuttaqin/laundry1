<?php

namespace App\Http\Controllers;


use App\Models\Transaksi;



use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function showInvoice($id)
    {


        $transaksi = Transaksi::all();

        return view('admin.invoice.show', compact('transaksi'));

    }
}
