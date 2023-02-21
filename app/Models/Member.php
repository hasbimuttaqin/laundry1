<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $table = 'members';

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'no_tlp'
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_member');
    }
}
