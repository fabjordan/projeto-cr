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

/*Route::get('/', function () {
	return view('index');
});

Route::get('/PessoaFisica', function(){
	return view('cadastroFisica');
});

Route::get('/PessoaJuridica', function(){
	return view('cadastroJuridica');
});
*/
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


Route::group(['prefix' => '/site'], function(){

	Route::get('/index', function(){
		return view('site.index');
	})->name('site.index');


	Route::get('/emolumentos', function(){
		return view('site.emolumentos');
	})->name('site.emolumentos');


	Route::get('/institucional', function(){
		return view('site.institucional');
	})->name('site.institucional');


	Route::get('/servicos', function(){
		return view('site.servicos');
	})->name('site.servicos');

	Route::get('/cadastro', function(){
		return view('site.cadastro');
	})->name('site.cadastro');

	Route::get('/pessoa-fisica', function(){
		return view('site.cadastrar.pessoa-fisica');
	})->name('site.pessoa-fisica');


	Route::get('/pessoa-juridica', function(){
		return view('site.cadastrar.pessoa-juridica');
	})->name('site.pessoa-juridica');

	Route::get('/suporte', function(){
		return view('site.suporte');
	})->name('site.suporte');

	Route::get('/cartorios', function(){
		return view('site.cartorios');
	})->name('site.cartorios');

	Route::get('/emolumentos', function(){
		return view('site.emolumentos');
	})->name('site.emolumentos');
});