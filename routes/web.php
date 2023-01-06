<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [MenuController::class, 'index']);
Route::get('/katalog',[MenuController::class,'katalog']);
Route::get('/about', [MenuController::class,'about']);


Route::get('/index', [App\Http\Controllers\MenuController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('barang', BarangController::class);

Route::get('/produk', [App\Http\Controllers\MenuController::class, 'katalog']);

Route::get('/tentangkami', [App\Http\Controllers\MenuController::class, 'about'])->name('about');

Auth::routes();

