@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報新規登録画面
@endsection

@section('content')
   <form action="/jissyu12/create" method="post">
   <table>
      @csrf
      @if (count($errors)>0)
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      @endif
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
      <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
