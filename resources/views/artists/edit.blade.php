@extends('layouts.layout')

@section('title','編集ページ')

@section('content')
<h1>編集ページ</h1>
<h3>{{ $user->name }}さん</h3>
<table>
<form action="edit" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  <tr>
    <th>名前</th>
    <td><input type="text" name='name' value="{{$user->name }}"></td>
  </tr>
  <tr>
    <th>パート</th>
    <td>
      <select name="id">

        @foreach ($jobs as $job)
          @if ($job->id == $user->job_id)
            <option value="{{ $job->id }}" selected>{{ $job->job }}</option>
          @else
            <option value="{{ $job->id }}">{{ $job->job }}</option>
          @endif
        @endforeach

      </select>
    </td>
  </tr>

  <tr>
    <th>自己紹介</th>
    <td><textarea name="article" cols="30" rows="10" >{{ $user->article->article }}</textarea></td>
  </tr>

  <tr>
    <th>Twitter</th>
    <td><input type="text" name="twitter" value="{{ $user->article->twitter }}"></td>
  </tr>

  <tr>
    <th>Youtube</th>
    <td><input type="text" name="youtube" value="{{ $user->article->youtube }}"></td>
  </tr>

  <tr>
    <th></th>
    <td><input type="submit" value="送信"></td>
  </tr>
</form>
</table>
@endsection
