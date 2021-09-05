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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/programa', function () {
    return view('pages/programa');
});

Route::get('/peliculas', function () {
    return view('pages/peliculas');
});

Route::get('/contacto', function () {
    return view('pages/contacto');
});

Route::get('/horario', function () {
    return view('pages/horario');
});

Route::get('/en-vivo', function () {
    return view('pages/envivo');
});

Route::get('/nosotros', function () {
    return view('pages/nosotros');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

