<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Article as ArticleEloquent;
use App\Message as MessageEloquent;
use App\Praise as PraiseEloquent;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $articles=ArticleEloquent::where('id',$article->id)->get();
        $messages=MessageEloquent::where('art_id',$article->id)->get();
        $praises=PraiseEloquent::where('art_id',$article->id)->get();
        $data=['articles'=>$articles,'messages'=>$messages,'praises'=>$praises];
        return view('back.ArticleBackCheck',$data);
    }
    public function back()
    {
        $articles=ArticleEloquent::where('report',1)->get();
        $data=['articles'=>$articles];
        return view('back.ArticleBack',$data);
    }
    public function BestIndex()
    {
        $articles=ArticleEloquent::orderBy('created_at','DESC')->paginate(18);
        $data=['articles'=>$articles];
        return view('main.BestPost',$data);

    }
    public function index()
    {
        $articles=ArticleEloquent::orderBy('created_at','DESC')->paginate(18);
        $data=['articles'=>$articles];
        return view('main.post',$data);

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
        //
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
    public function update($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $article->update(['report'=>0]);

        return redirect()->route('ArticleBack.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $article->delete();
        $Messages=MessageEloquent::where('art_id',$article->id);
        $Messages->delete();
        $Praises=PraiseEloquent::where('art_id',$article->id);
        $Praises->delete();
        return redirect()->route('ArticleBack.index');
    }
}
