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
Route::get('/', 'PrincipalController@principal')->name('site.index');
//vantagem de criar o nome para as rotas é que se o nome for alterado nao precisa trocar os links
Route::get('/formulario-de-contato-teste', 'ContatoController@contato')->name('site.contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

//app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});


//nome, categoria, assunto, mensagem

/*
Route::get('/contato/{nome}/{categoria_id}',
function (
    string $nome = 'Desconhecido',
    int $categoria_id = 1
    ) {
    echo "Estamos nesta rota: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

*/

/*
Route::get('/sobre-nos', function () {
    return 'Sobre Nós';
});

Route::get('/contato', function () {
    return 'Contato';
});
*/
