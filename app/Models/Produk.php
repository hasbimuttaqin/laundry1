<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'id_outlet',
        'jenis',
        'nama_paket',
        'harga'
    ];

    public function outletts()
    {
        return $this->belongsTo(Outlett::class, 'id_outlet');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_produk');
    }
}
