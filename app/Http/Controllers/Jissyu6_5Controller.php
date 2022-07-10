<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class Jissyu6_5Controller extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('jissyu6_5.index', ['items' => $items]);
    }

    public function show()
    {
        $items = Person::all();
        return view('jissyu6_5.show', ['items' => $items]);
    }
}
