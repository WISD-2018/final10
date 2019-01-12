@extends('layouts.PostApp')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-8">


                @foreach ($articles as $article)
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid" style="padding:0;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 style="margin-top:0;">{{ $article->title }}</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        @if($article->res_id!=null)
                                            <span class="badge" style="margin-left:10px;">{{ $article->user->name }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 text-right">
                                        {{ $article->created_at->toDateString() }}
                                    </div>
                                </div>
                                <hr style="margin:10px 0;" />
                                <div class="row">
                                    <div class="col-md-12" style="height:100px;overflow:hidden;">
                                        {{ $article->content }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-md-8">

                                                <form method="POST" action="">
                                                    <span>{{ $article->message->count() }}&nbsp;則回應</span>
                                                    <span style="padding-left: 10px;">
                                                    <a class="btn btn-xs btn-primary" href="">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                        <span style="padding-left: 5px;">編輯文章</span>
                                                    </a>
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="btn btn-xs btn-danger">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                        <span style="padding-left: 5px;">刪除文章</span>
                                                    </button>
                                                </span>
                                                </form>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="" class="pull-right">繼續閱讀...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                    {{ $articles->render() }}
            </div>
        </div>
    </div>



@endsection