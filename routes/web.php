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

// Route::get('/', function () {
//     return 'SOU EU DENOVO';
// });
// Route::get('/sobre-nos', function () {
//     return 'SOU EU DENOVO sobre nos';
// });
// Route::get('/contato', function () {
//     return 'me liga';
// });
Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
//campos nome, categoria,assunto,mensagem
Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome,
        int $categoria_id = 1 // 1- "Informação
    ) {
        echo 'Nome: ' . $nome . '<BR>';
        echo 'Categoria: ' . $categoria_id . '<BR>';
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
