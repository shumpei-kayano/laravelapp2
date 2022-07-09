@extends('layouts.ensyu')

@section('title', 'del')

@section('menubar')
ユーザ情報削除画面
@endsection

@section('content')
   <form action="/ensyu1/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>id: </th><td>{{$item->id}}</td></tr>
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>address: </th><td>{{$item->address}}</td></tr>
      <tr><th>phonenumber: </th><td>{{$item->phonenumber}}</td></tr>
      <tr><th>email: </th><td>{{$item->email}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
@endsection 
@section('footer')
copyright 2020 o-hara.
@endsection
