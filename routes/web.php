<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('empresas', 'EmpresaController');
Route::resource('produtos', 'ProdutosController');
Route::resource('users', 'UsersController');

