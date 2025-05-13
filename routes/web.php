<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IjinKeluarStafController;
use App\Http\Controllers\DashboardStafController;
use App\Http\Controllers\ProfilStafController;
use App\Http\Controllers\TambahDataStafController;
use App\Http\Controllers\AbsenStafController;
use App\Http\Controllers\TambahPointStafController;
use App\Http\Controllers\TambahNilaiStafController;
use App\Http\Controllers\DaftarPointStafController;



Route::get('/', [LandingPageController::class, 'LandingPage'])->name('LandingPage');
Route::get('/Login', [LoginController::class, 'Login'])->name('Login');
Route::get('/DashboardStaf', [DashboardStafController::class, 'DashboardStaf'])->name('DashboardStaf');
Route::get('/ProfilStaf', [ProfilStafController::class, 'ProfilStaf'])->name('ProfilStaf');
Route::get('/TambahDataStaf', [TambahDataStafController::class, 'TambahDataStaf'])->name('TambahDataStaf');
Route::get('/AbsenStaf', [AbsenStafController::class, 'AbsenStaf'])->name('AbsenStaf');
Route::get('/TambahPointStaf', [TambahPointStafController::class, 'TambahPointStaf'])->name('TambahPointStaf');
Route::get('/TambahNilaiStaf', [TambahNilaiStafController::class, 'TambahNilaiStaf'])->name('TambahNilaiStaf');
Route::get('/IjinKeluarStaf', [IjinKeluarStafController::class, 'IjinKeluarStaf'])->name('IjinKeluarStaf');
Route::get('/DaftarPointStaf', [DaftarPointStafController::class, 'DaftarPointStaf'])->name('DaftarPointStaf');

