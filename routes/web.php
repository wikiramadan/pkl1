<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReqisterController;
use App\Http\Controllers\DetailkamiController;
use App\Http\Controllers\ContakController;

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


// perintah untuk membaca url berita /navbar.Controller tempat untuk menangani permintaan pengguna (seperti menampilkan halaman atau memproses formulir).
Route::get('/navbar', [NavbarController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita.show', [BeritaController::class, 'show']);
Route::get('/berita.detail2', [BeritaController::class, 'detail2']);
Route::get('/berita.detail3', [BeritaController::class, 'detail3']);
Route::get('/berita.detal4', [BeritaController::class, 'detail4']);
Route::get('/berita.detail5', [BeritaController::class, 'detail5']);
Route::get('/beritad.etail6', [BeritaController::class, 'detail6']);
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita/create');



Route::get('/login', [LoginController::class, 'index']);
Route::get('/reqister', [ReqisterController::class, 'reqister']);
Route::get('/contak', [ContakController::class, 'index']);


Route::get('/detail-wiki', [DetailkamiController::class, 'detailWiki']);
Route::get('/detail-afifi', [DetailkamiController::class, 'detailAfifi']);