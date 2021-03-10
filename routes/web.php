<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('empresas', 'EmpresaController');
    Route::resource('produtos', 'ProdutosController');
    Route::resource('users', 'UsersController');
    Route::resource('financeiro', 'FinanceiroController');
});

