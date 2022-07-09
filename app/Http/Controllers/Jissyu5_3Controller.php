<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Jissyu5_4Request;
use Validator;

class Jissyu5_3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->get();
        return view('jissyu5_3.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id',$id)->first();
        return view('jissyu5_3.show', ['item' => $item]);
    }
    public function add(Request $request)
    {
        return view('jissyu5_3.add');
    }
    public function create(Jissyu5_4Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/jissyu12');
    }
    public function edit(Request $request)
    {
        $item = DB::table('people')->where('id',$request->id)->first();
        return view('jissyu5_3.edit', ['item' => $item]);
    }
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,120'
        ];
        $messages = [
            'name.required' => '名前は必須入力フィールドです。',
            'mail.email' => '正しいメールアドレスを入力してください。',
            'age.numeric' => '年齢は整数で入力してください。',
            'age.between' => '年齢は0〜120の間で入力してください。'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/jissyu12/edit?id='.$request->id)//表示にはidが必要なのでクエリ文字を連結
                    ->withErrors($validator);
        }
        $param = [
				'name' => $request->name,
				'mail' => $request->mail,
				'age' => $request->age,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('/jissyu12');
    }
    public function del(Request $request)
    {
        $item = DB::table('people')->where('id',$request->id)->first();
        return view('jissyu5_3.del', ['item' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('people')->where('id',$request->id)->delete();
        return redirect('/jissyu12');
    }
}
