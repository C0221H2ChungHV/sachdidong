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
});

Route::prefix('author')->group(function () {
    Route::get('/', 'AuthorController@index')->name('author.index');
    Route::get('/edit/{id}', 'AuthorController@showEdit')->name('author.show-edit');
    Route::Post('/edit/{id}', 'AuthorController@update')->name('author.update');
    Route::get('/create', 'AuthorController@create')->name('author.creat');
    Route::Post('/create', 'AuthorController@store')->name('author.store');
    Route::get('/delete/{id}', 'AuthorController@delete')->name('author.delete');
});
