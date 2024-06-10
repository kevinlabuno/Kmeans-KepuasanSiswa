<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\InputController;


Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('upload', [BerandaController::class,'upload'])->name('upload');
Route::post('upload', [BerandaController::class,'upload_data'])->name('upload.data');
Route::get('dataset',[PerhitunganController::class, 'proses'])->name('dataset');
Route::get('perhitungan',[PerhitunganController::class, 'index'])->name('perhitungan');

Route::get('input', [InputController::class, 'index'])->name('input');
Route::post('input', [InputController::class, 'post'])->name('input.post');
Route::get('datainput', [InputController::class, 'datainput'])->name('datainput');
Route::get('algoritma', [InputController::class, 'algoritma'])->name('algoritma');