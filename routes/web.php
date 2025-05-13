<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IjinKeluarStafController;





Route::get('/', [LandingPageController::class, 'LandingPage'])->name('LandingPage');
Route::get('/Login', [LoginController::class, 'Login'])->name('Login');
Route::get('/IjinKeluarStaf', [IjinKeluarStafController::class, 'IjinKeluarStaf'])->name('IjinKeluarStaf');

//Route::get('/', function () {
//    return view('welcome');
// 
// });

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);
//Route::get('/welcome', function () {
    //return view('welcome');
//});
//Route::get('/user/{id}', function ($id) {
 //   return 'User dengn ID ' . $id;
//});
//Route::prefix('admin')->group(function () {
  //  Route::get('/dashboard', function () {
      //  return 'Admin Dashboard';
    //});

    //Route::get('/users', function () {
     //   return 'Admin Users';
    //});
//});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
