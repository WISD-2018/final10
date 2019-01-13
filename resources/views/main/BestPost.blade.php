@extends('layouts.PostApp')

@section('content')
<head>
    <style>
        .pic {
            position:relative;
            width: 40px;
            height: 40px;
            overflow: hidden;
            border-radius:50%;
        }
        .pic img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
    <!-- Page Content -->
    <div class="container">



        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-9">
                <h1 class="my-4 text-white"  style=" font-weight:bold; font-family:微軟正黑體;">最新貼文!
                </h1>
            </div>
            <div class="col-md-3" style="margin-top: 23px;">
                <button type="button" class="btn btn-primary btn-lg" style=" font-weight:bold; font-family:微軟正黑體;"><a href="{{ route('article.index') }}">最新貼文</a></button>
                <button type="button" class="btn btn-warning btn-lg" style=" font-weight:bold; font-family:微軟正黑體;"><a href="{{ route('article.BestIndex') }}">人氣貼文</a></button>
            </div>

        </div>


        <div class="row">
            @foreach ($articles as $article)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="pic">
                                    <img src="{{ $article->user->photo }}">
                                </div>
                            </div>
                            <div class="col-md-10" style="margin-top: 10px">
                                {{$article->user->name}}
                            </div>
                        </div>
                    </div>
                    <a href="#"><img class="card-img-top" src="{{$article->photo}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{substr($article->title,0,20)}}</a>
                        </h4>
                        <p class="card-text">{{substr($article->content,0,75)}}{{'............'}}</p>
                        <hr style="margin:10px 0;" />
                        <div class="row">
                            <div class="col-md-4 text-center" >
                                {{ $article->praise->count() }}{{'個讚'}}
                            </div>

                            <div class="col-md-4 text-center">
                                {{$article->message->count()}}{{'則回應'}}
                            </div>
                            <div class="col-md-4">
                                {{ $article->created_at->toDateString() }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endforeach
        </div>

        <ul class="pagination justify-content-center">
            {{ $articles->render() }}
        </ul>

    </div>


@endsection