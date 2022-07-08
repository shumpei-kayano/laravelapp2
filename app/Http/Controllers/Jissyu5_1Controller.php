<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('jissyu5_1.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select(
                'select * from people where id = :id',
                $param
            );
        } else {
            $items = DB::select('select * from people');
        }
        return view('jissyu5_1.show', ['items' => $items]);
    }
}
