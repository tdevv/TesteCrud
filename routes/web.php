<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'CrudController@index');

Route::get('/novo', 'CrudController@create');

Route::post('/novo','CrudController@store')->name('salvar_registro');

Route::get('/ver', 'CrudController@show');

Route::get('/del/{id}','CrudController@destroy')->name('excluir_registro');

Route::get('/edit/{id}','CrudController@edit')->name('editar_registro');


Route::post('/edit/{id}','CrudController@update')->name('atualizar_registro');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ver{$crud}', 'CrudController@teste')->name('teste');
