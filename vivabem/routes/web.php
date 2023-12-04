<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\MusculacaoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
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
    // return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');


// Route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia');


Route::get('/treino', [TreinoController::class, 'index'])->name('treino');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');

Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');

Route::get('/modalidade/treinofuncional', [ModalidadeController::class, 'treinofuncional'])->name('modalidade.treinofuncional');

Route::get('/modalidade/meditacao', [ModalidadeController::class, 'meditacao'])->name('modalidade.meditacao');

Route::get('/modalidade/boxe', [ModalidadeController::class, 'boxe'])->name('modalidade.boxe');

Route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');

// Route::get('/modalidade/musculacao', [MusculacaoController::class, 'musculacao'])->name('musculacao');

route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia');

// Route::get('/noticia', [NoticiaController::class'index'])->name('noticia');


// Route::get('/sobre', 'SobreController@index');
// Route::get('/modalidade', 'ModalidadeController@index');
// Route::get('/treino', 'TreinoController@index');
// Route::get('/contato', 'ContatoController@index');
