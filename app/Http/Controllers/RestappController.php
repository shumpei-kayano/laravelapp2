<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restdata;

class RestappController extends Controller
{
    //一覧表示
    public function index()
    {
       $items = Restdata::all();
       return $items->toArray();
    }

    //データの登録
    public function create()
    {
       return view('rest.create');
    }

    public function store(Request $request)
    {
       $restdata = new Restdata;
       $form = $request->all();
       unset($form['_token']);
       $restdata->fill($form)->save();
       return redirect('/rest');
    }

    //レコード表示
    public function show($id)
    {
       $item = Restdata::find($id);
       return $item->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
