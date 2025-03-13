<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OauthController;
use App\Http\Controllers\ClientCounselerController;
use App\Filament\Admin\Resources\ArtikelResource\Pages\ShowArtikel;
use App\Http\Controllers\ArtikelController;


Route::get('/', function () {
    return view('welcome');
});

// Admin Panel
Route::get('/artikel/{record}', ShowArtikel::class);
Route::resource('client_counseler', ClientCounselerController::class);

// FE Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');

// FE Service
Route::get('/service', [ClientCounselerController::class, 'index']);

