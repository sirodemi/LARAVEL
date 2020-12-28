<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        // return ('77');
        $data = ['one', 'two', 'three', 'four', 'five'];
        // return ($data);
        return view('hello.index', ['data' => $data]);
        // return view('hello.index');
    }
}
