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
    // return view('welcome');
    return view('section.app.index');
});

Route::controller(AppController::class)
    ->prefix('app')
    ->group(function () {
        Route::get('/', 'Index')->name('app.index');

        Route::get('/create', 'Create')->name('app.create');
        Route::post('/', 'Store')->name('app.store');

        Route::get('/{id}/edit', 'Edit')->name('app.edit');
        Route::put('/{id}', 'Update')->name('app.update');
    });

Route::group(['middleware' => 'auth'], function () {

    // controller here
});
