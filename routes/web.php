<?php

use App\Fornecedor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::post('/contato', [ContatoController::class, 'store'])->name('site.contato');

Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('site.login');

Route::middleware('authentication')->prefix('/app')->group(function() {
    Route::get('/cliente', [CustomerController::class, 'index'])->name('app.cliente');
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'logout'])->name('app.sair');
    Route::prefix('/fornecedor')->group(function () {
        Route::get('/', [FornecedorController::class, 'index'])->name('app.fornecedor');
        Route::post('/list', [FornecedorController::class, 'list'])->name('app.fornecedor.list');
        Route::get('/list', [FornecedorController::class, 'list'])->name('app.fornecedor.list');
        Route::get('/update/{id}/{msg?}', [FornecedorController::class, 'update'])->name('app.fornecedor.edit');
        Route::get('/create', [FornecedorController::class, 'create'])->name('app.fornecedor.create');
        Route::post('/create', [FornecedorController::class, 'create'])->name('app.fornecedor.create');
    });
    Route::get('/produto', [ProductController::class, 'index'])->name('app.produto');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

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
