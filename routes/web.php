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

Route::view('/exercicios', 'exercicios')
    ->name('exercicios');

Route::group(['prefix' => 'aula'], function () {
    Route::view('/01', 'aula.01')
        ->name('aula01');
    Route::view('/02', 'aula.02')
        ->name('aula02');
    Route::view('/03', 'aula.03')
        ->name('aula03');
    Route::view('/04', 'aula.04')
        ->name('aula04');
    Route::view('/05', 'aula.05')
        ->name('aula05');
});
