<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UsuarioController::class, 'home'])->name('home');

Route::get('/criarusuario', function () {
    return view('adicionar');
})->name('criar.usuario');

Route::post('/adicionarusuario', [UsuarioController::class, 'criarUsuario'])->name('adicionar.usuario');
