<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Customer;

class Jissyu5_5Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Customer::all();
        return view('customer.index', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('customer.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Customer::$rules); //Customerに静的プロパティで$rulesが設定されている
        $customer = new Customer;
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();

        return redirect('/customer');
    }
}
