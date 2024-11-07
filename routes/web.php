<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReqisterController;
use App\Http\Controllers\DetailkamiController;
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


Route::get('/navbar', [NavbarController::class, 'index']);Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest');
Route::post('/reqister', [ReqisterController::class, 'reqister'])->name('reqister.proses')->middleware('guest');

Route::get('/detail-wiki', [DetailkamiController::class, 'detailWiki']);
Route::get('/detail-afifi', [DetailkamiController::class, 'detailAfifi']);