<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlett extends Model
{


    protected $table = 'outletts';

    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
        'no_telp'
    ];
}
