<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Users\UserEdit;

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

// user-edit
Route::get('/admin/users/{id}/edit', function ($id) {
    return view('admin.users.edit', compact('id'));
})->name('admin.users.edit');


// car-table
Route::get('/admin/cars', function () {
    return view('admin.cars.index');
})->name('admin.cars.index');

// car-create
Route::get('admin/cars/create', function () {
    return view('admin.cars.create');
})->name('admin.cars.create');

// car-edit
Route::get('/admin/cars/{id}/edit', function ($id) {
    return view('admin.cars.edit', compact('id'));
})->name('admin.cars.edit');
