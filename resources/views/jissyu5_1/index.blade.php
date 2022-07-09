@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報一覧画面
@endsection

@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th><th>Select</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->age}}</td>
           <td><a href="/jissyu10/show?id={{$item->id}}">詳細</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
