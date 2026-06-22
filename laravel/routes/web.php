<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('filmes', FilmeController::class);