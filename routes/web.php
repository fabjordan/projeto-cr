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
	return view('welcome');
});

Route::group(['prefix' => '/cliente'], function(){

	Route::get('/dashboard', function(){
		return view('cliente.dashboard');
	})->name('cliente.dashboard');



	Route::group(['prefix' => '/certidoes'], function(){

		Route::get('/', function(){
			return view('cliente.certidoes.index');
		})->name('cliente.certidoes.index');

		Route::get('/dados-gerais', function(){
			return view('cliente.certidoes.dados-gerais');
		})->name('cliente.certidoes.dados-gerais');

	});

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