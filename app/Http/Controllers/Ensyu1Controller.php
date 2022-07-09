<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ensyu1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('client')->get();
        return view('ensyu1.index',['items' => $items]);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('client')->where('id',$id)->first();
        return view('ensyu1.show', ['item' => $item]);
    }

    public function add(Request $request)
    {
        return view('ensyu1.add');
    }

    public function create(Request $request)
    {
        echo $request;
        $param = [
            'name' => $request->name,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        DB::table('client')->insert($param);
        return redirect('/ensyu1');
    }

    public function edit(Request $request)
    {
        $item = DB::table('client')->where('id',$request->id)->first();
        return view('ensyu1.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
                'name' => $request->name,
                'address' => $request->address,
                'phonenumber' => $request->phonenumber,
                'email' => $request->email,
                'updated_at' => date("Y-m-d H:i:s"),
        ];
        DB::table('client')->where('id',$request->id)->update($param);
        return redirect('/ensyu1');
    }
    public function del(Request $request)
    {
        $item = DB::table('client')->where('id',$request->id)->first();
        return view('ensyu1.del', ['item' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('client')->where('id', $request->id)->delete();
        return redirect('/ensyu1');
    }
}
