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

$html = <<<EOF
<html>
<body>
eof_test
</body>
</html>
EOF;


Route::get('/', function () {
    return view('welcome');
});

Route::get('tt', function () {
    return view('tt');
});

Route::get('direct', function () use ($html) {
    return $html;
});
