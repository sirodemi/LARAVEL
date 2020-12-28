<?php

// use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('hello', 'HelloController@index');



// Route::get('direct', function () use ($html) {
//     return $html;
// });


// Route::get('hello/{msg?}', function ($msg = '') {
//     $html = <<<EOF
//     <html>
//     <head>
//         <title>Hello Shiro!</title>
//         <style>
//             body {font-size:20pt; color:#999;}
//             h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
//         </style>
//     </head>
//     <body>
//         <h1>hello sunyou</h1>
//         <p>{$msg}</p>
//         <p>sample page</p>
//     </body>
//     </html>
//     EOF;

//     return $html;
// });


// Route::get('sunyou', 'HelloController@index');
// Route::get('sunyou/other', 'HelloController@other');
