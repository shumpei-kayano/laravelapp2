<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //-----------トップページの表示-----------
    public function index(Request $request)
    {
       if (isset($request->id))
       {
          $param = ['id' => $request->id];
          $items = DB::select('select * from people where id = :id',
             $param);
       } else {
          $items = DB::select('select * from people');
       }
       return view('hello.index', ['items' => $items]);
    }
 
    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg'=>'フォームを入力下さい。']);
    }

    //-----------データの挿入-----------
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
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/hello');
    }

    //-----------データの更新-----------
    public function edit(Request $request)
    {
    $param = ['id' => $request->id];
    $item = DB::select('select * from people where id = :id', $param);
    return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
    $param = [
        'id' => $request->id,
        'name' => $request->name,
        'mail' => $request->mail,
        'age' => $request->age,
    ];
    DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
    return redirect('/hello');
    }
}
