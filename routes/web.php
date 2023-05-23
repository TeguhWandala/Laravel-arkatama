<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hallo', function() {
    return "Hallo Teguh Wandala Putra!";
});

// tugas 22 "tugas":unknown word.
Route::get('/tampil', [App\Http\Controllers\UserController::class, 'tampilkan']);

Route::get('/tambah', [App\Http\Controllers\UserController::class, 'tambahkan']);

Route::get('/edit', [App\Http\Controllers\UserController::class, 'editkan']);

Route::get('/detail', [App\Http\Controllers\UserController::class, 'detailkan']);