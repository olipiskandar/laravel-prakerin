<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;

class ArticleAPIController extends Controller
{
    public function index()
    {
        return new ArticleCollection(Article::paginate());
    }

    public function show(Article $article)
    {
        return new ArticleResource($article->load(['user', 'category']));
    }

    public function store(Request $request)
    {
        return new ArticleResource(Article::create($request->all()));
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return new ArticleResource($article);
    }

    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
