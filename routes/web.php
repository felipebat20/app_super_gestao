<?php

use Faker\Core\Number;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Verbos: GET, POST, PUT, PATCH, Delete, Options
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'Olá, Felipe. Que paia neh';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');

    Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('app.fornecedores');

    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

Route::get('/rota1', function() {
    return redirect()->route('site.rota2');
})->name('site.rota1');

Route::get('rota2', function() {
    echo 'Rota 2';
})->name('site.rota2');

Route::fallback(function() {
    echo 'A rota que você acessou infelizmente não existe mais. A menos que tenha uma máquina do tempo, aconselho que volte a <a href="'.route('site.index').'">tela inicial.</a>';
});

// Route::redirect('/rota2', '/rota1');



// Route::get('/contato/{nome}/{categoria_id}',
//     function(
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     ) {
//         echo "Estamos aqui: $nome - $categoria_id ";
// }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
