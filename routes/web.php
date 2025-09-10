<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// user-table
Route::get('/admin/users', function () {
    return view('admin.users.index');
})->name('admin.users.index');

// user-create
Route::get('admin/users/create', function () {
    return view('admin.users.create');
})->name('admin.users.create');

Route::get('/admin/cars', function () {
    return view('admin.cars.index');
})->name('admin.cars.index');
