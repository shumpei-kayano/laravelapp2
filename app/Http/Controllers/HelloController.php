<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Person;

class HelloController extends Controller
{
    //認証
    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインして下さい。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email,
                'password' => $password])) {
            $msg = 'ログインしました。（' . Auth::user()->name . '）';
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }

    //---------トップページ----------
    public function index(Request $request)
    {
       $user = Auth::user();
       $items = Person::all();
       $param = ['items' => $items, 'user' => $user];
       return view('hello.index', $param);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    //---------データの挿入----------
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

    //---------データの編集----------
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
    return redirect('hello');
    }

    //---------データの削除----------
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
