<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KostController::class, 'landing']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/tambah-data', [AdminController::class, 'create']);
Route::post('/admin/tambah-data', [AdminController::class, 'store']);
Route::get('/admin/edit-data/{id}', [AdminController::class, 'edit']);
Route::put('/admin/edit-data/{id}', [AdminController::class, 'update']);
Route::get('/admin/detail-data/{id}', [AdminController::class, 'show']);


Route::get('/list-kost', [KostController::class, 'index']);
Route::get('/list-kost/detail/{id}', [KostController::class, 'show']);
