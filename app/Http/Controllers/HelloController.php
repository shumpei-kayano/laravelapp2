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
<<<<<<< HEAD
       $items = DB::table('people')->orderBy('age','asc')->get();
       return view('hello.index', ['items' => $items]);
=======
        $items = DB::select('select * from people');
        return view('hello.index', ['items'=>$items]);
>>>>>>> jissyu5
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
       DB::table('people')->insert($param);
       return redirect('/hello');
    }
    

    //-----------データの更新-----------
    public function edit(Request $request)
    {
       $item = DB::table('people')
           ->where('id', $request->id)->first();
       return view('hello.edit', ['form' => $item]);
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
       return redirect('/hello');
    }

    //-----------データの削除----------
    public function del(Request $request)
    {
       $item = DB::table('people')
           ->where('id', $request->id)->first();
       return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
       DB::table('people')
           ->where('id', $request->id)->delete();
       return redirect('/hello');
    }

    public function show(Request $request)
    {
       $page = $request->page;
       $items = DB::table('people')
           ->offset($page * 3)
           ->limit(3)
           ->get();
       return view('hello.show', ['items' => $items]);
    }
}
