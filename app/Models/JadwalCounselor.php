<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalCounselor extends Model
{
    use HasFactory;

    protected $table = 'jadwal_Counselor';

    protected $fillable = [
        'nama_konselor',
        'tgl_konseling',
    ];
}
