@extends('layouts.layout')

@section('title', 'top')

@section('content')
<h1>トップページ</h1>
<div>
    <a href='{{ route("show") }}'>記事一覧</a>
<div>
    @auth
        <div>
            <a href='{{ route("mypage") }}'>マイページ</a>
        <div>
    @endauth
@endsection
