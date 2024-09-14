<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/* Praktikum 4 */

Route::get('/level', [LevelController::class, 'index']);


/* Praktikum 5 */

Route::get('/kategori', [KategoriController::class, 'index']);


/* Praktikum 6 */

Route::get('/user', [UserController::class, 'index']);


