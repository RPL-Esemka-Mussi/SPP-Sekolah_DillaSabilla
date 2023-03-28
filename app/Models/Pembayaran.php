<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $fillable = [
        'user_id',
        'siswa_id',
        'spp_id',
        'tanggal_bayar',
        'jumlah_bayar',
    ];
}
