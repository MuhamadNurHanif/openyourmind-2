<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientCounselerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('client_counseler', ClientCounselerController::class);
