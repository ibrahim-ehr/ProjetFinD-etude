<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->with('user')->paginate(4);
        foreach ($articles as $article){
            $article->setAttribute('added_at',$article->created_at->diffForHumans());
            $article->setAttribute('comments_count',$article->comments->count());
        }
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Article $article)
    {
        return response()->json([
            'id'=>$article->id,
            'slug'=>$article->slug,
            'body'=>$article->body,
            'added_at'=>$article->created_at->diffForHumans(),
            'comments_count'=>$article->comments->count(),
            'image'=>$article->image,
            'user'=>$article->user,
            'title'=>$article->title,
            'comments'=>$article->comments->map(function ($comment) {
                return [
                    'id'=>$comment->id,
                    'body'=>$comment->body,
                    'user'=>$comment->user,
                    'added_at'=>$comment->created_at->diffForHumans()
                ];
            })
        ]);
    }
    public function commentsFormatted($comments){
        $new_comments = [];
        foreach($comments as $comment){
            array_push($new_comments,[
                'id'=>$comment->id,
                'body'=>$comment->body,
                'user'=>$comment->user,
                'added_at'=>$comment->created_at->diffForHumans()
            ]);
        }
        return $new_comments;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
    public function searchArticles($query)
    {
        $articles=Article::where('title','like','%'.$query.'%')->with(user)->get();
        //get all rows //count
        $nbarticles = count($articles->get());
        foreach ($articles->get() as $article){
                $article->setAttribute('added_at',$article->created_at->diffForHumans());
                $article->setAttribute('comments_count',$article->comments->count());
            }
        $articles = $articles->paginate(intval($nbarticles));
        return response()->json($articles);
        }

}
