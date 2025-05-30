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
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\ProfilSiswaController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\PointSiswaController;
use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\IjinKeluarSiswaController;


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
Route::get('/DashboardSiswa', [DashboardSiswaController::class, 'DashboardSiswa'])->name('DashboardSiswa');
Route::get('/ProfilSiswa', [ProfilSiswaController::class, 'ProfilSiswa'])->name('ProfilSiswa');
Route::get('/NilaiSiswa', [NilaiSiswaController::class, 'NilaiSiswa'])->name('NilaiSiswa');
Route::get('/PointSiswa', [PointSiswaController::class, 'PointSiswa'])->name('PointSiswa');
Route::get('/AbsenSiswa', [AbsenSiswaController::class, 'AbsenSiswa'])->name('AbsenSiswa');
Route::get('/IjinKeluarSiswa', [IjinKeluarSiswaController::class, 'IjinKeluarSiswa'])->name('IjinKeluarSiswa');
