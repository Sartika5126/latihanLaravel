<?php
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World dari Laravel!";
});

Route::get('/nama', function () {
    return "Hello Guys Nama Saya Sartikaaa!";
});

Route::get('/kelas', function () {
    return "Sartika kelas ASE-10";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
