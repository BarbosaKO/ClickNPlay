<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogoController;

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

Route::get('/', [JogoController::class, 'index']);

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/suporte', function () {
    return view('suporte');
});

Route::get('/gamepage/{id}', [JogoController::class, 'showJogo']);

Route::get('/projetos', [JogoController::class, 'projetos'])->middleware(['auth'])->name('projetos');

Route::get('/jogos/create', [JogoController::class, 'create'])->middleware(['auth'])->name('create');

Route::post('/jogos', [JogoController::class, 'store'])->middleware(['auth'])->name('store');

require __DIR__.'/auth.php';
