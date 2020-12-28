<?php

// use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index');

// Route::get('hello', function () {
//     return ('----');
// });
