<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>@yield('title')</title>
</head>
<body>

  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a class='navbar-brand' href={{route('index')}}>Artists</a>
    @if (Auth::check())
    <a href="/artists/public/home">{{$user->name}}さんこんにちは</a>
    @else
    <a href="/artists/public/login">ログイン</a>
    <a href="/artists/public/register">登録</a>
    @endif
  </nav>

  @section('content')
  @show



</body>
</html>
