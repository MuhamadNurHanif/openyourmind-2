<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_layanan',
    ];

    public function clientCounselers()
    {
        return $this->hasMany(ClientCounseler::class, 'jenis_layanan');
    }
}
