@extends('layouts.ensyu')

@section('title', 'edit')

@section('menubar')
ユーザ情報更新画面
@endsection

@section('content')
   <form action="/ensyu1/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>id: </th><td><input type="text" name="id"
         value="{{$item->id}}"></td></tr>
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>address: </th><td><input type="text" name="address"
         value="{{$item->address}}"></td></tr>
      <tr><th>phonenumber: </th><td><input type="text" name="phonenumber"
         value="{{$item->phonenumber}}"></td></tr>
      <tr><th>email: </th><td><input type="text" name="email"
         value="{{$item->email}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 o-hara.
@endsection
