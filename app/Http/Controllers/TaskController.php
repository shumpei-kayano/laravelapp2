<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $items = Task::all();
        return view('task.index',['items' => $items]);
    }
    
    public function add(Request $request)
    {
        return view('task.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();  //追加データをテーブルに保存
        return redirect('/task');
    }

    public function delete(Request $request)
    {
        $item = Task::find($request->id); //削除データを検索
        if (isset($item))
        {
            $item->delete(); //データを削除する
        }
        return redirect('/task');
    }
}
