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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies/create' , 'MoviesController@create');

Route::get('/movies' , 'MoviesController@index'); 

Route::post('/movies', ['as' => 'store', 'uses' => 'MoviesController@store']);

Route::post( '/movies/{movieid}/comments', ['as'=>'store_comment' , 'uses'=>'CommentsController@store']);

Route::get('/movies/{id}' , ['as' => 'single-movie', 'uses' => 'MoviesController@show']);





