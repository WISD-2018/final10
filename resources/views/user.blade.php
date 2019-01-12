@extends('layouts.PostApp')
<head>
    <style>
        .pic2 {
            position:relative;
            width: 250px;
            height: 250px;
            overflow: hidden;
            border-radius:50%;
        }
        .pic2 img {
            width: 100%;
            height: auto;
        }
        .pic3 {
            position:relative;
            width: 358px;
            height: 358px;
            overflow: hidden;

        }
        .pic3 img {
            width: auto;
            height:100%;
        }
    </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            {{--------------------------------------------------------------}}
                <div class="col-md-2">
                <div class="card" style="border-style: none;background-color:transparent;">
                    <div class="card-body" style="padding-top:252px;">
                        <label class=" col-md-12" style="letter-spacing:3px; text-align: center;font-family: 微軟正黑體 ; font-size: 20px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">
                            {{ $posts->count() }}
                        </label>
                        <label class=" col-md-12" style="text-align: center;font-family:微軟正黑體 ;font-size: 25px;color:#FFFFFF;padding: 1px 1px 1px 1px;background-color: transparent;border-style: none;">
                            {{ '文章' }}
                        </label>
                    </div>
                </div>
            </div>
            {{--------------------------------------------------------------}}
                <div class="col-md-2">
                <div class="card" style="border-style: none;background-color:transparent;">
                    <div class="card-body" style="padding-top:252px;">
                        <label class=" col-md-12" style="letter-spacing:3px; text-align: center;font-family: 微軟正黑體 ; font-size: 20px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">
                            {{ '5645' }}
                        </label>
                        <label class=" col-md-12" style="text-align: center;font-family:微軟正黑體 ;font-size: 25px;color:#FFFFFF;padding: 1px 1px 1px 1px;background-color: transparent;border-style: none;">
                            {{ '追蹤者' }}
                        </label>
                    </div>
                </div>
            </div>
            {{--------------------------------------------------------------}}
                <div class="col-md-4">
                    <div class="card" style="border-style: none;background-color:transparent;">
                        <div class="card-body" style="padding-top:1px;">
                            <form method="POST" action="">
                                {{ csrf_field() }}
                                {{ method_field('get') }}
                                <div class="row justify-content-center">
                                    <div class="pic2">
                                        <img  src="{{ Auth::user()->photo }}"  class="center-block " alt="boy">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <label class=" col-md-12" style="text-align: center;font-family: 微軟正黑體 ;font-size: 38px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">
                                        {{ Auth::user() ->name }}
                                    </label>
                                </div>
                                <input class="form-control col-md-6 " type="hidden" name="position"  value="{{ "1" }}"readonly >
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary col-md-11" style="font-weight:bold;">
                                        {{ __('我要追蹤你!!') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            {{--------------------------------------------------------------}}
                <div class="col-md-2">
                <div class="card" style="border-style: none;background-color:transparent;">
                    <div class="card-body" style="padding-top:252px;">
                        <label class=" col-md-12" style="letter-spacing:3px; text-align: center;font-family: 微軟正黑體 ; font-size: 20px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">
                            {{ $articles->count() }}
                        </label>
                        <label class=" col-md-12" style="text-align: center;font-family:微軟正黑體 ;font-size: 25px;color:#FFFFFF;padding: 1px 1px 1px 1px;background-color: transparent;border-style: none;">
                            {{ '追蹤' }}
                        </label>
                    </div>
                </div>
            </div>
            {{--------------------------------------------------------------}}
                <div class="col-md-2">
                <div class="card" style="border-style: none;background-color:transparent;">
                    <div class="card-body" style="padding-top:252px;">
                        <label class=" col-md-12" style="letter-spacing:3px; text-align: center;font-family: 微軟正黑體 ; font-size: 20px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">
                            {{ '5645' }}
                        </label>
                        <label class=" col-md-12" style="text-align: center;font-family:微軟正黑體 ;font-size: 25px;color:#FFFFFF;padding: 1px 1px 1px 1px;background-color: transparent;border-style: none;">
                            {{ '讚數' }}
                        </label>
                    </div>
                </div>
            </div>
            {{--------------------------------------------------------------}}

            <div class="row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-md-4">
                        <div class="card sticky-action">

                            <div class="card-image waves-effect waves-block waves-light pic3">
                                <img class="activator" src="{{ $article->photo }}">
                            </div>
                            <div class="card-action">
                                <span class="card-title activator grey-text text-darken-4">{{ $article->title }}</span>
                                <!-- Dropdown Trigger -->

                                <ul id="dropdown1" class="dropdown-content">
                                    <li><a href="#!">one</a></li>
                                    <li><a href="#!">two</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#!">three</a></li>
                                </ul>

                                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>

                                <p><a href="#">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                <p>{{ $article->content }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
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
                                            <span class="badge" style="margin-left:10px;">{{ $article->restaurant->name }}</span>
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



@endsection