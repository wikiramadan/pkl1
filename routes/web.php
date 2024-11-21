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
use App\Http\Controllers\Berita2Controller;
use App\Http\Controllers\SettingController;

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
    return view('navbar.home');
});

// route "mengatur alur permintaan HTTP (request) ke aplikasi Anda dan bagaimana meresponsnya."
// perintah untuk membaca url berita /navbar.Controller tempat untuk menangani permintaan pengguna (seperti menampilkan halaman atau memproses formulir).
Route::get('/navbar', [NavbarController::class, 'index']);

Route::get('/ContentBerita', [ContentController::class,'index']);
Route::get('/ContentBerita.detail1', [ContentController::class, 'detail1']);
Route::get('/ContentBerita.detail2', [ContentController::class, 'detail2']);
// Route::get('/tambahberita', [ContentController::class,'tambahberita'])->name('/tambahberita');
Route::get('/tambahberita', [contentController::class, 'create'])->name('tambahberita');
Route::get('/ContentBerita.detail3', [ContentController::class, 'detail3']);
Route::get('/ContentBerita.detail4', [ContentController::class, 'detail4']);
Route::get('/ContentBerita.detail5', [ContentController::class, 'detail5']);
Route::get('/ContentBerita.detail6', [ContentController::class, 'detail6']);
Route::get('/ContentBerita/tambahberita', [ContentController::class,'tambahberita'])->name('ContentBerita/tambahberita');

Route::get('/berita', [BeritaController::class, 'data']);
Route::get('/berita2.index', [UserController::class, 'berita']);
Route::get('/setting', [SettingController::class, 'index']);
Route::get('/setting2.index', [UserController::class, 'setting']);

Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');
Route::get('/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');


Route::get('/login', [LoginController::class, 'index']);
Route::get('/reqister', [ReqisterController::class, 'index']);
Route::get('/contak', [ContakController::class, 'index']);


Route::get('/detail-wiki', [DetailkamiController::class, 'detailWiki']);
Route::get('/detail-afifi', [DetailkamiController::class, 'detailAfifi']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user2', [UserController::class, 'user']);
Route::post('/user2.index', [UserController::class, 'user'])->name('user2.index');

Route::get('/user2.index', [UserController::class, 'user']);
Route::get('/berita', [BeritaController::class, 'data']);
Route::get('/berita2.index', [UserController::class, 'berita']);
Route::get('/setting', [SettingController::class, 'index']); // Rute untuk Setting Index
Route::get('/setting2', [SettingController::class, 'setting']);

Route::POST('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user2/create', [UserController::class, 'create'])->name('user2.create');