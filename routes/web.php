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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao nosso curso.';
});
*/

Route::get('/', 'PrincipalController@principal');
Route::get('/contato', 'ContatoController@contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');

//nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function (string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos nesta rota: $nome - $categoria - $assunto - $mensagem";
});

/*
Route::get('/sobre-nos', function () {
    return 'Sobre Nós';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/
