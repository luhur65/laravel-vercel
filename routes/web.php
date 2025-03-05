<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/kirim-doa', [ContactController::class, 'sendDoa'])->name('kirimdoa');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');