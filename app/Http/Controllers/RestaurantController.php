<?php

namespace App\Http\Controllers;

use Auth;
use App\Score;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Restaurant as RestaurantEloquent;
use App\Score as ScoreEloquent;
use App\Article as ArticleEloquent;
use App\Praise as PraiseEloquent;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function score(Request $request)
    {
        Score::create([
            'res_id' => $request['res_id'],
            'stu_id' => Auth::user()->id,
            'score' => $request['score'],
        ]);
        return redirect()->route('restaurant.index2', $request['res_id']);
    }
    public function back()
    {
        $restaurants =Restaurant::orderBy('created_at','DESC')->get();
        $data=['restaurants'=>$restaurants];
        return view('back.ResBack',$data);
    }

    public function index2($id)
    {
        $restaurants=RestaurantEloquent::where('id',$id)->get();
        $praises=PraiseEloquent::orderBy('id','ASC')->get();
        $articles=ArticleEloquent::where('res_id',$id)->paginate(12);
        $posts=ArticleEloquent::where('res_id',$id);
        $data=['articles'=>$articles,'posts'=>$posts,'praises'=>$praises,'restaurants'=>$restaurants];
        return view('restaurant.index2',$data);
    }
    public function index()
    {
        $restaurants=RestaurantEloquent::orderBy('created_at','DESC')->get();
        $scores=ScoreEloquent::orderBy('created_at','DESC')->get();
        $data=['restaurants'=>$restaurants,'scores'=>$scores];
        return view('restaurant.index',$data);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Restaurant::destroy($id);
        return redirect()->route('ResBack.index');
    }
}
