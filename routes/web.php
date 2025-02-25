<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OauthController;
use App\Http\Controllers\ClientCounselerController;
use App\Filament\Admin\Resources\ArtikelResource\Pages\ShowArtikel;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');
// Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

// admin panel
Route::get('/artikel/{record}', ShowArtikel::class);
Route::resource('client_counseler', ClientCounselerController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//tes service
Route::get('/service', function () {
    return view('service.service');
});