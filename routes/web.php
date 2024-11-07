<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita/{id}', function($id) {
    return view('berita.show');
});


Route::get('/navbar', [NavbarController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita.show', [BeritaController::class, 'show']);
Route::get('/berita.detail2', [BeritaController::class, 'detail2']);
Route::get('/berita.detail3', [BeritaController::class, 'detail3']);
Route::get('/berita.detail4', [BeritaController::class, 'detail4']);
Route::get('/berita.detail5', [BeritaController::class, 'detail5']);
Route::get('/berita.detail6', [BeritaController::class, 'detail6']);
Route::get('/berita.create', [BeritaController::class, 'create'])->name('berita.create');



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest');