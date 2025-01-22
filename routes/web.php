<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Admin\Resources\ArtikelResource\Pages\ShowArtikel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel/{record}', ShowArtikel::class);
