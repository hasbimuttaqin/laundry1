<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';

    protected $fillable = [
        'id_outlet',
        'kd_invoice',
        'id_member',
        'id_produk',
        'qty',
        'tgl',
        'batas_waktu',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'status',
        'dibayar',
        'keterangan'
    ];
    

    public function outletts()
    {
        return $this->belongsTo(Outlett::class, 'id_outlet');
    }

    public function members()
    {
        return $this->belongsTo(Member::class, 'id_member');
    }

    public function produks()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
