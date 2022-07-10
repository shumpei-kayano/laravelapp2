@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
科目新規登録画面
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
   <form action="/jissyu15/create" method="post">
   <table>
       @csrf
       <tr><th>ユーザID : </th><td><input type="number" name="person_id" value="{{old('person_id')}}"></td></tr>
       <tr><th>科目名   : </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
       <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
