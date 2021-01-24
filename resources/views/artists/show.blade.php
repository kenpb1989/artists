@extends('layouts.layout')

@section('title', 'show')

@section('content')
<h1>記事一覧</h1>
<table>
  <tr>
    <th>名前</th>
    <th>記事</th>
  </tr>
    @foreach($articles as $article)
      <tr>
        <th>{{ $article->user->name }}</th>
        <th>{{ $article->article }}</th>
      </tr>
    @endforeach
</table>
@endsection
