@extends('layouts.layout')

@section('title','編集ページ')

@section('content')


<h1>プロフィール新規作成</h1>
<h3>{{ $user->name }}さん</h3>
<table>
<form action="new" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ $user->id }}">
  <tr>
    <th>やること</th>
    <td>
      <select name="job_id">
        @foreach ($jobs as $job)
          <option value="{{ $job->id }}">{{ $job->job }}</option>
        @endforeach
      </select>
    </td>
  </tr>
  <tr>
    <th>自己紹介</th>
    <td><textarea name="article"  cols="30" rows="10"></textarea></td>
  </tr>
  <tr>
    <th>Twitterアカウント</th>
    <td><input type="text" name="twitter"></td>
  </tr>
  <tr>
    <th>Youtubeチャンネル</th>
    <td><input type="text" name="youtube"></td>
  </tr>
  <tr>
    <th></th>
    <td><input type="submit" value="送信"></td>
  </tr>
</form>
</table>
@endsection
