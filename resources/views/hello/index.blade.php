@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。（<a href="/login">ログイン</a>｜
   <a href="/register">登録</a>）</p>
@endif
   @if ($items != null)
       @foreach($items as $item)
       <table width="400px">
       <tr><th width="50px">id:</th>
       <td width="50px">{{$item->id}}</td>
       <th width="50px">name:</th>
       <td>{{$item->name}}</td></tr>
       </table>
       @endforeach
   @endif
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
