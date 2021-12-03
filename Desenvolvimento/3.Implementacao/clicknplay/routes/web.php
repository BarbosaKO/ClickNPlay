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

Route::get('/index.html', function () {
    return view('homepage');
});

Route::get('/catalogo.html', function () {
    return view('catalogo');
});

Route::get('/sobre.html', function () {
    return view('sobre');
});

Route::get('/gamepage.html', function () {
    return view('gamepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
