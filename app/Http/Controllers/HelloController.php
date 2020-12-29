<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'yamada', 'mail' => 'yyy@'],
            ['name' => 'ibi', 'mail' => 'iii@'],
            ['name' => 'shiro', 'mail' => 'sss@'],
        ];
        return view('hello.index', ['data' => $data]);
        // return ('77');
        // $data = ['one', 'two', 'three', 'four', 'five'];
        // return ($data);
        // return view('hello.index', ['data' => $data]);
        // return view('hello.index');
    }
}
