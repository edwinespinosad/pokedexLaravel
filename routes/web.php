<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', [PokemonController::class, 'index'])->name('pokemon');

Route::get('/show', [PokemonController::class, 'showAllPokemons'])->name('show');