<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('Login');
});

Route::get('/Registro', function () {
    return view('Registro');
})->name('Registro');

Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::post('/registro', [AuthController::class, 'store'])->name('registro.store');

Route::get('/Web', function () {
    return view('Web');
})->name('Web');

Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
