<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table='recruitments';
    
    protected $fillable= [
        'tautan','judul','deskripsi','gambar','tgl_publish'
    ];
}
