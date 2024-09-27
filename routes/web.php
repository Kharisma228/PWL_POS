<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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


// JS 4 - Praktikum 2.6

Route::get('/user/tambah', [UserController::class, 'tambah']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


// JS 5 - Praktikum 2

Route::get('/', [WelcomeController::class,'index']);