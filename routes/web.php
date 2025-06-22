<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\KontakControler;
use App\http\Controllers\TentangController;
use App\http\Controllers\SelengkapnyaController;
use App\http\Controllers\PrestasiController;
use App\http\Controllers\KontakController;
use App\http\Controllers\FeedbackController;




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

Route::get('/home', [HomeController::class, 'tampil'])->name('home.tampil');
Route::get('/tentang', [TentangController::class, 'tampil'])->name('tentang.tampil');
Route::get('tentang/selengkapnya', [SelengkapnyaController::class, 'tampil'])->name('tentang/selengkapnya.tampil');
Route::get('/prestasi', [PrestasiCOntroller::class, 'tampil'])->name('prestasi.tampil');
Route::get('/kontak', [KontakController::class, 'tampil'])->name('kontak.tampil');

Route::get('/feedback', [FeedbackController::class, 'tampil'])->name('feedback.tampil');
 Route::post('/submit', [FeedbackController::class, 'submit'])->name('feedback.submit');
