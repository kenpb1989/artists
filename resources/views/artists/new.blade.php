@extends('layouts.layout')

@section('title','編集ページ')

@section('content')


<h1>新規作成ページ</h1>
<h3>{{ $user->name }}さん</h3>
<table>
<form action="new" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  <tr>
    <th>自己紹介</th>
    <td><textarea name="article"  cols="30" rows="10"></textarea></td>
  </tr>
  <tr>
    <th></th>
    <td><input type="submit" value="送信"></td>
  </tr>
</form>
</table>
@endif
@endsection
