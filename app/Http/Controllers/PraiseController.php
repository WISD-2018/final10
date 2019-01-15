<?php

namespace App\Http\Controllers;
use Auth;
use App\Praise;
use Illuminate\Http\Request;
//use App\Article as ArticleEloquent;
//use App\Praise as PraiseEloquent;
class PraiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function click2($id)
    {
        Praise::create([
            'art_id' => $id,
            'stu_id' => Auth::user()->id,
            'praise' => 1,
        ]);
        return redirect()->route('user.main.index',$id);
    }
    public function click($id)
    {
        Praise::create([
            'art_id' => $id,
            'stu_id' => Auth::user()->id,
            'praise' => 1,
        ]);
        return redirect()->route('article.small',$id);
    }
    public function index()
    {
        //
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
     * @param  \App\Praise  $praise
     * @return \Illuminate\Http\Response
     */
    public function show(Praise $praise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Praise  $praise
     * @return \Illuminate\Http\Response
     */
    public function edit(Praise $praise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praise  $praise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praise $praise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Praise  $praise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praise $praise)
    {
        //
    }
}
