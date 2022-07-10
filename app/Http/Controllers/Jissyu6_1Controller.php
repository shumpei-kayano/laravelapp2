<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        $param = [
            'items' => $items,
            'input' => ''
        ];
        return view('jissyu6_1.index', $param);
    }
    public function find(Request $request)
    {
        $item = Person::find($request->input);
        return view('jissyu6_1.show', ['item' => $item]);
    }
}
