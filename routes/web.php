<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReqisterController;
use App\Http\Controllers\DetailkamiController;
use App\Http\Controllers\ContakController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

// route "mengatur alur permintaan HTTP (request) ke aplikasi Anda dan bagaimana meresponsnya."
// perintah untuk membaca url berita /navbar.Controller tempat untuk menangani permintaan pengguna (seperti menampilkan halaman atau memproses formulir).
Route::get('/navbar', [NavbarController::class, 'index']);
// Route::get('/navbar', [SiswaController::class, 'contak']);

// Route::get('/berita', [BeritaController::class, 'index']);
// Route::get('/berita.show', [BeritaController::class, 'show']);
// Route::get('/berita.detail2', [BeritaController::class, 'detail2']);
// Route::get('/berita.detail3', [BeritaController::class, 'detail3']);
// Route::get('/berita.detal4', [BeritaController::class, 'detail4']);
// Route::get('/berita.detail5', [BeritaController::class, 'detail5']);
// Route::get('/beritad.etail6', [BeritaController::class, 'detail6']);
// Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita/create');
Route::get('/ContentBerita', [ContentController::class,'index']);
Route::get('/ContentBerita.detail1', [ContentController::class, 'detail1']);
Route::get('/ContentBerita.detail2', [ContentController::class, 'detail2']);
Route::get('/ContentBerita.detail3', [ContentController::class, 'detail3']);
Route::get('/ContentBerita.detail4', [ContentController::class, 'detail4']);
Route::get('/ContentBerita.detail5', [ContentController::class, 'detail5']);
Route::get('/ContentBerita.detail6', [ContentController::class, 'detail6']);
Route::get('/ContentBerita/tambahberita', [ContentController::class,'tambahberita'])->name('ContentBerita/tambahberita');



Route::get('/login', [LoginController::class, 'index']);
Route::get('/reqister', [ReqisterController::class, 'index']);
Route::get('/contak', [ContakController::class, 'index']);


Route::get('/detail-wiki', [DetailkamiController::class, 'detailWiki']);
Route::get('/detail-afifi', [DetailkamiController::class, 'detailAfifi']);