<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KeduaController;
use App\Http\Controllers\KeenamController;
use App\Http\Controllers\KelimaController;
use App\Http\Controllers\KetigaController;
use App\Http\Controllers\KeempatController;
use App\Http\Controllers\KetujuhController;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KedelapanController;
use App\Http\Controllers\KesembilanController;

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

//route tanpa controller
Route::get('/HomePutas', function () {
    echo ("Ini halaman HomePutas");
});

Route::get('/HaiiPutas', function () {
    echo ("Ini halaman HaiiPutas");
});

Route::get('/Aegyoo', function () {
    echo ("Ini halaman Aegyoo");
});

Route::get('/Heihoo', function () {
    echo ("Ini halaman Heihoo");
});

Route::get('/HeiiGess', function () {
    echo ("Ini halaman HeiiGess");
});

Route::get('Luciferr', function () {
    echo ("Ini halaman Luciferr");
});

Route::get('/AngelAngel', function () {
    echo ("Ini halaman AngelAngel");
});

Route::get('WhayNian', function () {
    echo ("Ini halaman WhayNian");
});

Route::get('/WhatWhatan', function () {
    echo ("Ini halaman WhatWhatan");
});

Route::get('/UNIT/UPT/UPT PERPUSTAKAAN', function () {
    echo ("Ini halaman UPT PERPUSTAKAAN yang didalam UPT/UNIT");
});

//route controller
Route::get('/jual', [JualController::class, 'putas']);

Route::get('/pertama', [PertamaController::class, 'putas']);

Route::get('/kedua', [KeduaController::class, 'putas']);

Route::get('/ketiga', [KetigaController::class, 'putas']);

Route::get('/keempat', [KeempatController::class, 'putas']);

Route::get('/kelima', [KelimaController::class, 'putas']);

Route::get('/keenam', [KeenamController::class, 'putas']);

Route::get('/ketujuh', [KetujuhController::class, 'putas']);

Route::get('/kedelapan', [KedelapanController::class, 'putas']);

Route::get('/kesembilan', [KesembilanController::class, 'putas']);