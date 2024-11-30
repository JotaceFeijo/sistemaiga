<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/* Route::get('login', function () {
    return view('login');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:Administrador']], function () {
//aquí deben de estar todas las ruta que será protegidas

Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index']);
});

Route::get('eliminar/{post}', [App\Http\Controllers\UserController::class, 'destroy']);
