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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos',function () {
    return view('produto/index');
})->name('web.products');

Route::get('/produtos/novo',function () {
    return view('produto/cadastro');
})->name('web.newProducts');

Route::get('/clientes',function () {
    return view('cliente/index');
})->name('web.clients');

Route::get('/cliente/novo',function () {
    return view('cliente/cadastro');
})->name('web.newClient');

Route::get('/cliente/editar',function () {
    return view('cliente/editar');
});