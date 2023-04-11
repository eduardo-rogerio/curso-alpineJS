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
    Route::view('/06', 'aula.06')
        ->name('aula06');
    Route::view('/06/1', 'aula.06-1')
        ->name('aula06-1');
    Route::view('/07', 'aula.07')
        ->name('aula07');
    Route::view('/08', 'aula.08')
        ->name('aula08');
    Route::view('/08/1', 'aula.08-1')
        ->name('aula08-1');
    Route::view('/09', 'aula.09')
        ->name('aula09');
    Route::view('/10', 'aula.10')
        ->name('aula10');
    Route::view('/11', 'aula.11')
        ->name('aula11');
    Route::view('/12', 'aula.12')
        ->name('aula12');
});
