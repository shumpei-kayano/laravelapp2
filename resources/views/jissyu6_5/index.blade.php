@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
担当者一覧(1対1)画面
@endsection

@section('content')
<a href="/jissyu16/show">hasmany</a>
<table>
    <tr><th>Person</th><th>Subject</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>@if ($item->subject != null)
                    {{$item->subject->getData()}}
                @endif
            </td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
