@extends('layouts.helloapp')

@section('title', 'Task.Add')

@section('menubar')
    @parent
        タスク追加ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <form action="/task/add" method="post">
        <table>
            @csrf
            <tr><th>title: </th><td><input type="text" name="title"
                value="{{old('title')}}"></td></tr>
            <tr><th>work: </th><td><input type="text" name="work"
                value="{{old('work')}}"></td></tr>
        </table>
        <input type="submit" value="追加">
    </form>
@endsection

@section('footer')
    copyright 2020 o-hara.
@endsection
