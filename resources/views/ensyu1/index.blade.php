@extends('layouts.ensyu')

@section('title', 'Index')

@section('menubar')
ユーザ情報一覧画面
@endsection

@section('content')
   <a href="/ensyu1/add">新規登録</a>
   <table>
   <tr><th>name</th><th>address</th><th>phonenumber</th><th>email</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->address}}</td>
           <td>{{$item->phonenumber}}</td>
           <td>{{$item->email}}</td>
           <td><a href="/ensyu1/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/ensyu1/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/ensyu1/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 o-hara.
@endsection
