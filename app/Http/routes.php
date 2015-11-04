<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('book', 'BookController@index');
Route::get('book/get/{filename}', ['as' => 'book', 'uses' => 'BookController@get']);
Route::post('book/add',['as' => 'addentry', 'uses' => 'BookController@add']);
