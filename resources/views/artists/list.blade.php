@extends('layouts.app')

@section('title', 'show')

@section('content')
<h1>記事一覧</h1>
<table>
  <tr>
    <th>名前</th>
    <th>パート</th>
    <th></th>
  </tr>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->job->job }}</td>
        <td><a href="{{ route("show", ['id'=>$user->id]) }}">詳細画面へ</a></td>
      </tr>
    @endforeach
</table>
@endsection
