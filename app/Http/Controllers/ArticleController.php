<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {

        $article = Article::all();

        return view('articles', [
            'article' => $article
        ]);
    }

    public function show(Article $article)
    {

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {

        Article::create(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]));
        return redirect('/articles');
    }

    public function edit(Article $article)
    {

        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article)
    {

        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]));

        return redirect('/articles');
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return redirect('/articles');
    }
}
