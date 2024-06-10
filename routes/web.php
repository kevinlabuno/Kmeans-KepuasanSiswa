<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PerhitunganController;

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
    return view('welcome');
})->name('beranda');

Route::get('upload', [BerandaController::class,'upload'])->name('upload');
Route::post('upload', [BerandaController::class,'upload_data'])->name('upload.data');
Route::get('dataset',[PerhitunganController::class, 'proses'])->name('dataset');
Route::get('perhitungan',[PerhitunganController::class, 'index'])->name('perhitungan');