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
                    <div class="card-body" style="padding-top:210px;">
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
                            {{ '666' }}
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
                            {{ '888' }}
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
                    <div class="card-body" style="padding-top:210px;">
                        <label class=" col-md-12" style="letter-spacing:3px; text-align: center;font-family: 微軟正黑體 ; font-size: 20px;color:#FFFFFF;padding: 1px 1px 1px 1px;margin-top: 5px;background-color: transparent;border-style: none;">


                            @php
                                $num=0;
                            @endphp

                            @foreach($articles as $article)
                                @foreach($praises as $praise)
                                    @if($article->id === $praise->art_id)
                                        @php
                                            $num=$num+1;
                                        @endphp
                                    @endif
                                @endforeach
                            @endforeach

                            {{ $num }}
                        </label>
                        <label class=" col-md-12" style="text-align: center;font-family:微軟正黑體 ;font-size: 25px;color:#FFFFFF;padding: 1px 1px 1px 1px;background-color: transparent;border-style: none;">
                            {{ '讚數' }}
                        </label>
                    </div>
                </div>
            </div>
            {{--------------------------------------------------------------}}

            <div class="row justify-content-center">
                {{--只有1筆板會跑掉--}}
                @foreach ($articles as $article)
                    <div class="col-md-4">
                        <div class="card sticky-action">

                            <div class="card-image waves-effect waves-block waves-light pic3">
                                <img class="activator" src="{{ $article->photo }}">

                            </div>
                            <div class="card-action">

                                <span class="card-title activator grey-text text-darken-4">{{substr( $article->title,0,20)}}</span>

                                <label class=" col-md-12" style="letter-spacing:3px; text-align: right;font-family: 微軟正黑體 ; font-size: 10px;background-color: transparent;border-style: none;">
                                    {{ $article->created_at->toDateString() }}
                                </label>

                                <hr style="margin:10px 0;" />


                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item" href="{{ route('article.edit', ['article'=>$article->id]) }}">編輯文章</a>
                                        <form method="POST" action="{{ route('article.destroys', ['article'=>$article->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="dropdown-item" >刪除文章</button>
                                        </form>

                                    </div>
                                </div>
                                <p> {{ $article->praise->count() }} {{ '人按讚' }} &nbsp;&nbsp; {{ $article->message->count() }} {{ '則留言' }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{ route('user.main.index',$article->id) }}">詳細閱讀</a></p>

                            </div>


                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                <p>{{ $article->content }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="pagination justify-content-center">
                {{ $articles->render() }}
            </ul>

        </div>
    </div>



@endsection