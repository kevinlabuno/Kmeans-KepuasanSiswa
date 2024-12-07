<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Models\Data;


Route::get('/', function () {
    $latestData = Data::getLatestData(); // Memanggil fungsi getLatestData()
    return view('welcome1', compact('latestData')); // Kirim ke view
});


Route::get("beranda", [BerandaController::class, 'beranda'])->name('beranda');
Route::get('dataguru', [BerandaController::class,'dataguru'])->name('dataguru');
Route::post('dataguru',[BerandaController::class, 'post_dataguru'])->name('post.dataguru');
Route::delete('dataguru/{id}', [BerandaController::class, 'hapus_dataguru'])->name('hapus.dataguru');


Route::get('kelas', [BerandaController::class, 'indexkelas'])->name('kelas.index');
Route::post('kelas', [BerandaController::class, 'storekelas'])->name('kelas.store');
Route::delete('kelas/{id}', [BerandaController::class, 'destroykelas'])->name('kelas.destroy');

Route::get('datasiswa', [BerandaController::class,'datasiswa'])->name('datasiswa');

Route::get('upload', [BerandaController::class,'upload'])->name('upload');
Route::post('upload', [BerandaController::class,'upload_data'])->name('upload.data');
Route::get('dataset',[PerhitunganController::class, 'proses'])->name('dataset');
Route::get('perhitungan',[PerhitunganController::class, 'index'])->name('perhitungan');

Route::get('input', [InputController::class, 'index'])->name('input');
Route::post('input', [InputController::class, 'post'])->name('input.post');
Route::get('datainput', [InputController::class, 'datainput'])->name('datainput');
Route::get('algoritma', [InputController::class, 'algoritma'])->name('algoritma');
Route::get('hasil', [InputController::class, 'hasil'])->name('hasil');

Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'post'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('siswaberanda', [SiswaController::class, 'beranda'])->name('siswa.beranda');
Route::get('siswadata', [SiswaController::class,'datasiswa'])->name('siswa.data');
Route::get('siswaalgoritma', [SiswaController::class, 'algoritma'])->name('siswa.algoritma');
Route::get('siswainput', [SiswaController::class, 'input'])->name('siswa.input');
Route::post('siswainput', [SiswaController::class, 'post'])->name('siswa.post');
Route::get('siswahasil', [SiswaController::class,'hasil_input'])->name('siswa.hasil');
