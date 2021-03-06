<?php

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

Route::get('/', 'BookController@index')->name('home');

Route::get('/books/create', 'BookController@create')
    ->middleware('is_admin')
    ->name('admin');

Route::post('/books', 'BookController@store');

Route::get('/books/{book}', 'BookController@show');

Route::post('/books/{book}/comments', 'CommentsController@store')
    ->middleware('auth');;


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionController@create')->name('login');;

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');