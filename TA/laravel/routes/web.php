<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController; // TA 1
use App\Http\Controllers\SmartBusController; // TA 2

Route::get('/form', [LaporBanjirController::class, 'form']); // TA 1
Route::post('/simpan', [LaporBanjirController::class, 'simpan']); // TA 1
Route::get('/daftar', [LaporBanjirController::class, 'daftar']); // TA 1

Route::get('/smartbus/daftar', [SmartBusController::class, 'index']); // TA 2

Route::get('/', function () {
    return view('welcome');
});
