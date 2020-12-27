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


Route::get('direct', function () use ($html) {
    return $html;
});


Route::get('hello/{msg}', function ($msg) {
    $html = <<<EOF
    <html>
    <head>
        <title>Hello Shiro!</title>
        <style>
            body {font-size:20pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
        </style>
    </head>
    <body>
        <h1>hello</h1>
        <p>{$msg}</p>
        <p>sample page</p>
    </body>
    </html>
    EOF;

    return $html;
});
