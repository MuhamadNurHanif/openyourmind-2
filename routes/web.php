<?php

use Illuminate\Support\Facades\Route;

use App\Filament\Admin\Resources\ArtikelResource\Pages\ShowArtikel;
use App\Http\Controllers\ClientCounselerController; 



Route::get('/', function () {
    return view('welcome');
});


// admin panel
Route::get('/artikel/{record}', ShowArtikel::class);
Route::resource('client_counseler', ClientCounselerController::class);
