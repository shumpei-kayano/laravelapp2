@extends('layouts.ensyu')

@section('title', 'add')

@section('menubar')
ユーザ情報新規登録画面
@endsection

@section('content')
   <form action="/ensyu1/create" method="post">
   <table>
      @csrf
      <tr><th>name: </th><td><input type="text" name="name"></td></tr>
      <tr><th>address: </th><td><input type="text" name="address"></td></tr>
      <tr><th>phonenumber: </th><td><input type="text" name="phonenumber"></td></tr>
      <tr><th>email: </th><td><input type="text" name="email"></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 o-hara.
@endsection
