<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::select('select * from people');

        $items = DB::table('people')
            ->orderBy('age', 'desc')
            ->get();
        return view('hello.index', ['items' => $items]);
    }


    public function show(Request $request)
    {
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
            ->whereRaw('age >= ? and age <= ?', [$min, $max])
            ->get();
        return view('hello.show', ['items' => $items]);


        // $name = $request->name;
        // $items = DB::table('people')
        //     ->where('name', 'like', '%' . $name . '%')
        //     ->orWhere('mail', 'like', '%' . $name . '%')
        //     ->get();
        // return view('hello.show', ['items' => $items]);


        // $id = $request->id;
        // $items = DB::table('people')
        //     ->where('id', '<=', $id)
        //     ->get();
        // return view('hello.show', ['items' => $items]);

        // $item = DB::table('people')->where('id', $id)->first();
        // return view('hello.show', ['item' => $item]);
    }


    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }


    public function add(Request $request)
    {
        return view('hello.add');
    }


    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($param);
        // DB::insert('insert into people (name,mail,age) values (:name, :mail,:age)', $param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.edit', ['form' => $item]);
        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.edit', ['form' => $item[0]]);
    }


    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);


        // $param = [
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'mail' => $request->mail,
        //     'age' => $request->age,
        // ];
        // DB::update('update people set name=:name, mail=:mail, age=:age where id= :id', $param);
        return redirect('/hello');
    }


    public function del(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);

        // $param = ['id' => $request->id];
        // $item = DB::select('select * from people where id = :id', $param);
        // return view('hello.del', ['form' => $item[0]]);
    }


    public function remove(Request $request)
    {
        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/hello');

        // $param = ['id' => $request->id];
        // DB::delete('delete from people where id= :id', $param);
        // return redirect('/hello');
    }
}
