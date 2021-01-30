@extends('layouts.layout')

@section('title', 'top')

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
        <h1>トップページ</h1>
        <div>
            <a href='{{ route("list") }}'>記事一覧</a>
        </div>
            @auth
                <div>
                    <a href='{{ route("mypage") }}'>マイページ</a>
                </div>
            @endauth
        </div>
    </div>
</div>
@endsection
