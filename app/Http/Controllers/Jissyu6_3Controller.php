<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
// use Validate;

class Jissyu6_3Controller extends Controller
{
    //全件取得
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => '','items' => $items];
        return view('jissyu6_3.index', $param);
    }

    //検索
    public function find(Request $request)
    {
        $item = Person::where('name',$request->input)->first();
        return view('jissyu6_3.show', ['item' => $item]);
    }


    public function show(Request $request)
    {
        $item = Person::find($request->id);
        return view('jissyu6_3.show', ['item' => $item]);
    }

    //挿入
    public function add(Request $request)
    {
        return view('jissyu6_3.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/jissyu14');
    }

    //更新
    public function edit(Request $request)
    {
        $item = Person::find($request->id);
        return view('jissyu6_3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/jissyu14');
    }

    //削除
    public function del(Request $request)
    {
        $item = Person::find($request->id);
        return view('jissyu6_3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/jissyu14');
    }
}
