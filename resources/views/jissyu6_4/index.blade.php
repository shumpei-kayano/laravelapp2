@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
科目一覧画面
@endsection

@section('content')
<a href="/jissyu15/add">新規登録</a>
   <table>
   <tr><th>Data</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData()}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
