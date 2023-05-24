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
    return view('landing');

    
});


Route::get('/hallo', function() {
    return "Hallo Teguh Wandala Putra!";
});

// tugas 22 "tugas":unknown word.
Route::get('/tampil', [App\Http\Controllers\UserController::class, 'tampilkan'])-> name('tampil'); 

Route::get('/tambah', [App\Http\Controllers\UserController::class, 'tambahkan'])-> name('tambah');

Route::get('/edit', [App\Http\Controllers\UserController::class, 'editkan'])-> name('edit');

Route::get('/detail', [App\Http\Controllers\UserController::class, 'detailkan'])-> name('detail');

Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'index'])-> name('dashboard');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])-> name('product.index');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])-> name('category.index');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])-> name('user.index');
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])-> name('role.index');