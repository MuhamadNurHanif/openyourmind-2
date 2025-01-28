<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCounseler extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'domisili',
        'keluhan',
        'jenis_layanan',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'jenis_layanan');
    }
}
