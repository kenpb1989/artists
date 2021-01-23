@extends('layouts.layout')

@section('title','編集ページ')

@section('content')
<h1>編集ページ</h1>
<h3>{{ $user->name }}</h3>
<form action="/add" method="post">
  <input type="text">
  <input type="text" name="article">
</form>
