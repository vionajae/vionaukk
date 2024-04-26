<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[AdminController::class,'dashboard'])->middleware(AdminMiddleware::class);
Route::get('login',[AdminController::class,'adminlogin']);
Route::post('login',[AdminController::class,'ceklogin']);
Route::get('logout',[AdminController::class,'logoutt']);

Route::get('tambahproduk',[AdminController::class,'tambahproduk'])->middleware(AdminMiddleware::class);
Route::post('tambahproduk',[AdminController::class,'cektambahproduk']);
Route::get('produk',[AdminController::class,'dataproduk'])->middleware(AdminMiddleware::class);
Route::post('produk',[AdminController::class,'cekdataproduk']);
Route::get('editproduk/{id}',[AdminController::class,'editproduk']);
Route::post('editproduk/{id}',[AdminController::class,'updateproduk']);
Route::get('hapusproduk/{id}',[AdminController::class,'hapusproduk']);

Route::get('tambahadmin',[AdminController::class,'tambahadmin'])->middleware(AdminMiddleware::class);
Route::post('tambahadmin',[AdminController::class,'cektambahadmin']);
Route::get('dataadmin',[AdminController::class,'dataadmin'])->middleware(AdminMiddleware::class);
Route::post('dataadmin',[AdminController::class,'cekdataadmin']);
Route::get('editadmin/{id}',[AdminController::class,'editadmin']);
Route::post('editadmin/{id}',[AdminController::class,'updateadmin']);
Route::get('hapusadmin/{id}',[AdminController::class,'hapusadmin']);

Route::get('tambahpelanggan',[AdminController::class,'tambahpelanggan'])->middleware(AdminMiddleware::class);
Route::post('tambahpelanggan',[AdminController::class,'cektambahpelanggan']);
Route::get('pelanggan',[AdminController::class,'datapelanggan'])->middleware(AdminMiddleware::class);
Route::post('pelanggan',[AdminController::class,'cekdatapelanggan']);
Route::get('editpelanggan/{id}',[AdminController::class,'editpelanggan']);
Route::post('editpelanggan/{id}',[AdminController::class,'updatepelanggan']);
Route::get('hapuspelanggan/{id}',[AdminController::class,'hapuspelanggan']);

Route::get('transaksi',[AdminController::class,'transaksi'])->middleware(AdminMiddleware::class);
Route::post('transaksi',[AdminController::class,'cektransaksi']);

