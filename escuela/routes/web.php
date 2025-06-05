<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/search', [AlumnoController::class, 'index'])->name('user.search');
Route::post('/search', [AlumnoController::class, 'search'])->name('user.search.post');

/*
No hace falta usar funciones de edicion en este laravel
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
*/
