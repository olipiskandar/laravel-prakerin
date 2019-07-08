<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class FrontendAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Category::take(3)->get();
        $top = Article::where('headline', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $headline = Article::where('headline', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $article = Article::select('articles.title', 'articles.slug', 'headline', 'image', 'categories.title as categories', 'users.name as author')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->get();
        $trending = Article::inRandomOrder()->take(3)->get();
        $latest = Article::orderBy('created_at', 'desc')->take(4)->get();

        $response = [
            'success' => true,
            'data' => [
                'menu' => $menu,
                'top' => $top,
                'headline' => $headline,
                'article' => $article,
                'trending' => $trending,
                'latest' => $latest
            ],
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('slug', $id)->first();

        if (!$article) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Article tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' =>  $article,
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
