@extends('layouts.layout')

@section('title', 'show')

@section('content')
<div class="row">
    <div class="col-2">
        <div class="container">
          <h4>ユーザー検索</h4>
            <form action="{{ route('list') }}" method="get">
                <input type="text" name="search_word">
                <select name="job_id">
                    <option value="">指定なし</option>
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->job }}</option>
                    @endforeach
                </select>
                <input type="submit" value="検索">
            </form>
        </div>
    </div>

    <div class="col-10">
      <div class="container">

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
        {{ $users->links() }}
    </div>
</div>
@endsection
