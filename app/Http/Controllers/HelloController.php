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
}
