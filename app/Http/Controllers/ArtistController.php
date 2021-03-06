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
        $this->middleware('auth')->except(['index', 'show', 'list']);
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $jobs = Job::all();

        return view('artists/index', compact('user', 'jobs'));
    }

    public function list(Request $request)
    {
        $jobs = Job::all();



        $query = User::query();
        $search_word = $request->search_word;
        $job_id = $request->job_id;

        if ($request->has('search_word') && $search_word != '') {
            $query->where('name',  'like', '%' . $search_word . '%')->get();
        }

        if ($request->has('job_id') && $job_id != ('')) {
            $query->where('job_id', $job_id)->get();
        }

        $users = $query->paginate(5);

        return view('artists/list', compact('users', 'jobs'));
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);


        return view('artists.show', ['user' => $user]);
    }

    public function new()
    {
        $user = Auth::user();
        $article_id = $user->article_id;
        $jobs = Job::all();


        if (!Article::where('id', $article_id)->exists()) {
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
        $article->twitter = $request->twitter;
        $article->youtube = $request->youtube;
        $article->save();
        $user = Auth::user();
        $user->job_id = $request->job_id;
        $user->save();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $id = $user->article_id;
        $article = Article::where('id', $id)->first();

        $jobs = Job::all();

        return view('artists.edit', ['user' => $user, 'article' => $article, 'jobs' => $jobs]);
    }

    public function edit2(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->job_id = $request->id;
        $user->save();

        $user_id = $request->user_id;

        $article = Article::where('user_id', $user_id)->first();
        $article->article = $request->article;
        $article->twitter = $request->twitter;
        $article->youtube = $request->youtube;
        $article->save();

        return redirect('/');
    }

    public function mypage(Request $request)
    {
        $user = Auth::user();
        // $id = $user->id;
        // $article = Article::where('user_id', $id)->first();
        return view('artists.mypage', ['user' => $user]);
    }
}
