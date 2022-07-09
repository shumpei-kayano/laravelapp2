@extends('layouts.helloapp')

@section('title', 'Customer.index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
   <h3><a href="/customer/add">新規登録</a></h3>
   <table>
  	<tr><th>Name</th><th>Address</th><th>Mail</th><th>Age</th>
<th>hobby</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->address}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->age}}</td>
           <td>{{$item->hobby}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
