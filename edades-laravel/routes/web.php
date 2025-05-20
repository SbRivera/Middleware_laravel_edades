<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin',[AdminController::class,'index'])->name('admin');

    Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios');

});