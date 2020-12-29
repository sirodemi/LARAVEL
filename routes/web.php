<?php

// use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

// Route::get('hello', function () {
//     return ('----');
// });
