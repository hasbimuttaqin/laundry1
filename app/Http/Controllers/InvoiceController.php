<?php

namespace App\Http\Controllers;


use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Outlett;
use App\Models\Produk;


use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function showInvoice($id)
    {

        $transaksi = Transaksi::find($id);

        return view('admin.invoice.index', compact('transaksi'));

    }

}
