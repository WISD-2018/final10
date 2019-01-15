<?php

namespace App\Http\Controllers;
use \Carbon\Carbon as Carbon;
use App\Article;
use Illuminate\Http\Request;
use App\Article as ArticleEloquent;
use App\Message as MessageEloquent;
use App\Praise as PraiseEloquent;
use App\Restaurant as RestaurantEloquent;
use App\User as UserEloquent;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  UserSmall($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $articles=ArticleEloquent::where('id',$article->id)->get();
        $messages=MessageEloquent::where('art_id',$article->id)->paginate(8);
        $praises=PraiseEloquent::where('art_id',$article->id)->get();
        $data=['articles'=>$articles,'messages'=>$messages,'praises'=>$praises];
        return view('user.index',$data);
    }
    public function  small($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $articles=ArticleEloquent::where('id',$article->id)->get();
        $messages=MessageEloquent::where('art_id',$article->id)->paginate(8);
        $praises=PraiseEloquent::where('art_id',$article->id)->get();
        $data=['articles'=>$articles,'messages'=>$messages,'praises'=>$praises];
        return view('main.index',$data);
    }
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
        $users=UserEloquent::orderBy('id','ASC')->get();
        $restaurants=RestaurantEloquent::orderBy('name','ASC')->get();
        $data = ['users'=>$users ,'restaurants'=>$restaurants];
        return View('article.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        $destinationPath = 'img/article';
        $ext = $file -> getClientOriginalExtension();
        $fileName = (Carbon::now()->timestamp).'.'.$ext;
        $file->move(public_path().'/'.$destinationPath, $fileName);
        Article::create([
            'res_id' => $request['restaurant'],
            'stu_id' => Auth::user()->id,
            'title' => $request['title'],
            'content'=>$request['content'],
            'report' =>0,
             'photo' =>$destinationPath.'/'.$fileName,
        ]);
        return redirect()->route('article.index');
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
    public function edit($id)
    {
        $article = ArticleEloquent::findOrFail($id);
        $restaurants=RestaurantEloquent::orderBy('name','ASC')->get();
        return View('article.edit',['article'=>$article,'restaurants'=>$restaurants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function report($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $article->update(['report'=>1]);

        return redirect()->route('article.small',$id);
    }
    public function update($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $article->update(['report'=>0]);

        return redirect()->route('ArticleBack.index');
    }

    public function updates($request,$id)
    {
        $article = ArticleEloquent::findOrFail($id);
        $article->update($request()->all());
        return redirect()->route('user.index');
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

    public function destroys($id)
    {
        $article=ArticleEloquent::findOrFail($id);
        $article->delete();
        $Messages=MessageEloquent::where('art_id',$article->id);
        $Messages->delete();
        $Praises=PraiseEloquent::where('art_id',$article->id);
        $Praises->delete();
        return redirect()->route('user.index');
    }
}
