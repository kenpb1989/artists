<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;


class ArtistController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('artists/index', ['user' => $user]);
    }

    public function new()
    {
        $user = Auth::user();
        if (!Article::where(user_id, $user->id)) {
            return view('artists/new', ['user' => $user]);
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

        return redirect('/');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('artists/edit', ['user' => $user]);
    }
}
