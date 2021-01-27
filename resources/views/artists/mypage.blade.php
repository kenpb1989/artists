@extends('layouts.app')

@section('title', 'mypage')

@section('content')
<h1>マイページ</h1>
<table>
  <tr>
    <th>名前：</th>
    <td>{{ $user->name }}</td>
  </tr>
  <tr>
    <th>パート：</th>
    <td>{{ $user->job->job }}</td>
  </tr>
  <tr>
    <th>自己紹介：</th>
    <td>{{ $user->article->article }}</td>
  </tr>
  <tr>
    <th>Twitter：</th>
    <td>{{ $user->article->twitter }}</td>
  </tr>
  <tr>
    <th>Youtube：</th>
    <td>{{ $user->article->youtube }}</td>
  </tr>
  <tr>
    <th></th>
    <td><a href='{{ route("edit") }}'>編集する</a></td>
  </tr>
</table>


@endsection
