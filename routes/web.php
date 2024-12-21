<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/admin/tambah-data', function () {
    return view('admin.tambah-data');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/home/detail', function () {
    return view('pages.detail');
});
