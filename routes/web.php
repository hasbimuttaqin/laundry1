<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RegisMemberController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/db', function () {
    return view('admin.data-m.tambah');
});

// Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/loginprocess', [LoginController::class, 'create'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// FUNGSI CRUD PELANGGAN
Route::get('/member', [MemberController::class, 'index'])->name('member');

Route::get('/tambahdata', [MemberController::class, 'create'])->name('tmember');
Route::post('/insertdata', [MemberController::class, 'insert'])->name('tmember');

Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('umember');
Route::post('/update/{id}', [MemberController::class, 'update'])->name('umember');

Route::get('/delete/{id}', [MemberController::class, 'delete'])->name('dmember');
// END CRUD

// FUNGSI REGISTER PELANGGAN
Route::get('/regis', [RegisMemberController::class, 'index'])->name('regismember');
Route::post('/insert', [RegisMemberController::class, 'insertregis'])->name('irmember');
// END REGISTER

// FUNGSI CRUD OUTLET
Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');

Route::get('/tambahdataoutlet', [OutletController::class, 'create'])->name('toutlet');
Route::post('/insertdataoutlet', [OutletController::class, 'insert'])->name('toutlet');

Route::get('/editoutlet/{id}', [OutletController::class, 'edit'])->name('uoutlet');
Route::post('/ubahoutlet/{id}', [OutletController::class, 'ubah'])->name('uoutlet');

Route::get('/deleteoutlet/{id}', [OutletController::class, 'delete'])->name('doutlet');
// END CRUD

// FUNGSI CRUD OUTLET
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Route::get('/tambahdataproduk', [ProdukController::class, 'create'])->name('tproduk');
Route::post('/insertdataproduk', [ProdukController::class, 'insert'])->name('tproduk.insert');

Route::get('/editproduk/{id}', [ProdukController::class, 'edit'])->name('uproduk');
Route::post('/ubahproduk/{id}', [ProdukController::class, 'ubah'])->name('uproduk.ubah');

Route::get('/deleteproduk/{id}', [ProdukController::class, 'delete'])->name('dproduk');
// END CRUD

// FUNGSI CRUD TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');

Route::get('/tambahtransaksi', [TransaksiController::class, 'create'])->name('ttransaksi');
Route::post('/inserttransaksi', [TransaksiController::class, 'insert'])->name('ttransaksi.insert');

Route::get('/edittransaksi/{id}', [TransaksiController::class, 'edit'])->name('utransaksi');
Route::post('/ubahtransaksi/{id}', [TransaksiController::class, 'ubah'])->name('utransaksi.ubah');

Route::get('/editstatustransaksi/{id}', [StatusController::class, 'edit'])->name('ustatustransaksi');
Route::post('/ubahstatustransaksi', [StatusController::class, 'ubah'])->name('ustatustransaksi.ubah');

Route::get('/editpembayarantransaksi/{id}', [PembayaranController::class, 'edit'])->name('upembayarantransaksi');
Route::post('/ubahpembayarantransaksi', [PembayaranController::class, 'ubah'])->name('upembayarantransaksi.ubah');

Route::get('/invoice/{id}', [InvoiceController::class, 'showInvoice'])->name('invoice.show');

// END CRUD
