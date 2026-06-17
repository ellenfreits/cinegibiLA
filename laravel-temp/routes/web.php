<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return redirect('/filmes');
});

Route::resource('filmes', FilmeController::class);