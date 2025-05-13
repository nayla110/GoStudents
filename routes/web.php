<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardStafController;

Route::get('/', [LandingPageController::class, 'LandingPage'])->name('LandingPage');
Route::get('/Login', [LoginController::class, 'Login'])->name('Login');
Route::get('/DashboardStaf', [DashboardStafController::class, 'DashboardStaf'])->name('DashboardStaf');