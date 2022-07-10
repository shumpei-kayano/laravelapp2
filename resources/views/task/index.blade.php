@extends('layouts.helloapp')

@section('title', 'Task.index')

@section('menubar')
    @parent
        タスク一覧
@endsection

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Task</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <form action="/task/del" method="post">
        @csrf
        <input type="text" name="id" size="5px">
        <input type="submit" value="削除">
    </form>
@endsection

@section('footer')
    copyright 2020 o-hara.
@endsection
