<?php

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
	return view('index');
});

Route::get('/PessoaFisica', function(){
	return view('cadastroFisica');
});

Route::get('/PessoaJuridica', function(){
	return view('cadastroJuridica');
});

Route::group(['prefix' => '/cliente', 'namespace' => 'Cliente'], function(){

	Route::get('/dashboard', function(){
		return view('cliente.dashboard');
	})->name('cliente.dashboard');


	Route::get('/certidoes', function(){
		return view('cliente.certidoes');
	})->name('cliente.certidoes');


	Route::get('/protocolo', function(){
		return view('cliente.protocolo');
	})->name('cliente.protocolo');


	Route::get('/protesto', function(){
		return view('cliente.protesto');
	})->name('cliente.protesto');


	Route::get('/perfil', function(){
		return view('cliente.perfil');
	})->name('cliente.perfil');

});