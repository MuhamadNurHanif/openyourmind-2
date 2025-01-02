<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonselor extends Model
{
    use HasFactory;

    protected $table = 'jadwal_konselor';

    protected $fillable = [
        'nama_konselor',
        'tgl_konseling',
    ];
}
