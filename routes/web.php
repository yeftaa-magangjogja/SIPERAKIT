<?php

use App\Http\Controllers\Doktercontroller;
use App\Http\Controllers\PasienController;
use App\Models\Dokter;
use GuzzleHttp\Promise\Create;
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/formpasien', function () {
    return view('formpasien');
});
Route::get('/formdokter', function () {
    return view('formdokter');
});
Route::get('/pasien', [PasienController::class,'index'])->name('pasien.index');
Route::get('/pasien/create',[PasienController::class,'Create'])->name('pasien.create');
Route::post('/pasien/store',[PasienController::class,'store'])->name('pasien.store');
Route::delete('/pasien/{id}',[PasienController::class, 'destroy'])->name('pasien.destroy');


Route::get('/dokter', [Doktercontroller::class,'index'])->name('dokter.index');
Route::get('/dokter/create',[DokterController::class,'Create'])->name('dokter.create');
Route::post('/dokter/store',[DokterController::class,'store'])->name('dokter.store');
Route::delete('/dokter/{id}',[DokterController::class, 'destroy'])->name('dokter.destroy');


Route::get('/beranda', function () {
    return view('beranda');
});

