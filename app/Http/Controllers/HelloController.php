<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        return
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
    }
}
