<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Article as ArticleEloquent;
use App\User as UserEloquent;
use App\Praise as PraiseEloquent;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function  chose()
    {
        if (Auth::user()->name === '管理者') {
            return redirect('/ResBack');
        }
        return redirect('/article');
    }
    public function back()
    {
        $users =User::orderBy('created_at','DESC')->get();
        $data=['users'=>$users];
        return view('back.UserBack',$data);
    }

    public function index()
    {
        $praises=PraiseEloquent::orderBy('id','ASC')->get();
        $users=UserEloquent::where('id',Auth::user()->id)->get();
        $articles=ArticleEloquent::where('stu_id',Auth::user()->id)->get();
        $posts=ArticleEloquent::where('stu_id',Auth::user()->id);
        $data=['articles'=>$articles,'posts'=>$posts,'users'=>$users,'praises'=>$praises];
        return view('user',$data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
