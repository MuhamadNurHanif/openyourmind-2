<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organizer extends Model
{
    use HasFactory;

    protected $table = 'organizers';

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'tgl_publish',
    ];
}
