<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Job;
use App\Models\User;


class ArtistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        return view('artists/index', ['user' => $user]);
    }

    public function show(Request $request)
    {
        $articles = Article::all();
        $user = User::all();

        return view('artists/show', ['articles' => $articles, 'user' => $user]);
    }

    public function new()
    {
        $user = Auth::user();
        $id = $user->id;
        $jobs = Job::get('id', 'job');


        if (!Article::where('user_id', $id)->exists()) {
            return view('artists/new', ['user' => $user, 'jobs' => $jobs]);
        } else {
            return redirect('/');
        }
    }

    public function new2(Request $request)
    {
        $article = new Article;
        $article->user_id = $request->user_id;
        $article->article = $request->article;
        $article->save();
        $user = Auth::user();
        $user->job_id = $request->id;
        $user->save();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $article = Article::where('user_id', $id)->first();
        return view('artists.edit', ['user' => $user, 'article' => $article]);
    }

    public function edit2(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        $article = Article::where('user_id', $request->user_id)->first();
        $article->article = $request->article;
        $article->save();

        return redirect('/');
    }

    public function mypage(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $article = Article::where('user_id', $id)->first();
        return view('artists.mypage', ['user' => $user, 'article' => $article]);
    }
}
