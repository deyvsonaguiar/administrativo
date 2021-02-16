<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false
]);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




Route::middleware('auth')->group(function() {
    Route::get('home', 'HomeController@index');
    Route::resource('empresas', 'EmpresaController');
    Route::resource('produtos', 'ProdutosController');
    Route::resource('users', 'UsersController');
});


