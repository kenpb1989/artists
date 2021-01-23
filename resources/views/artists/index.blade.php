@extends('layouts.layout')

@section('title', 'top')

@section('content')
<h1>トップページ</h1>
    @auth
        <div>
            <a href='{{ route("edit") }}'>記事編集</a>
        <div>
    @endauth
@endsection
