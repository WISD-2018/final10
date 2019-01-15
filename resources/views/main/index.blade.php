@extends('layouts.PostApp')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">


                    <div class="card mt-4">
                        @foreach($articles as $article)
                        <img class="card-img-top img-fluid" src={{$article->photo}} >
                        <div class="card-body">
                            
                            <h3 class="card-title">{{'主題：'}}{{$article->title}}</h3>

                            <div class="row">
                                <div class="col-md-6" style="margin-top: 10px;margin-bottom: 20px">
                                    <span style="font-size:0.6cm;">{{'發文人：'}}</span>
                                    {{$article->user->name}}
                                    <br>

                                    <span style=" font-weight:bold; font-family:微軟正黑體; margin-left: 100px">  {{'寫於'}} {{$article->created_at->toDateString()}}</span>

                                </div>

                                <div class="col-md-6" style="margin-top: 10px;margin-bottom: 20px">
                                    <span style="font-size:0.6cm;">{{'餐廳：'}}</span>

                                    {{$article->restaurant->name}}
                                </div>
                            </div>

                            <p class="card-text">{{$article->content}}</p>
                            {{--<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>--}}
                            {{--4.0 stars--}}
                            <hr style="margin:10px 0;" />
                            <div class="row">
                                <div class="col-md-4 text-center" >
                                    {{--@foreach($praises as $praise)--}}
                                        {{--@if($praise->stu_id === Auth::user()->id)--}}
                                            {{--@php--}}
                                                {{--$num=1;--}}
                                            {{--@endphp--}}
                                            {{--@break--}}
                                        {{--@else--}}
                                            {{--@php--}}
                                                {{--$num=0;--}}
                                            {{--@endphp--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                        {{--@if($num=1)--}}
                                            {{--{{ $article->praise->count() }}{{'個讚'}}--}}
                                        {{--@elseif($num=0)--}}
                                            <form method="POST" action="{{ route('praise.click',$article->id) }}">
                                                {{ csrf_field() }}
                                                {{ $article->praise->count() }}{{'個讚'}}
                                                <button type="submit" class="btn btn-m btn-primary">按讚</button>
                                            </form>
                                        {{--@endif--}}


                                    {{--<a href="{{ route('praise.click',$article->id) }}" class="btn btn-primary" style="margin-left: 10px">按讚</a>--}}
                                </div>

                                <div class="col-md-4 text-center" style="margin-top: 5px">
                                    {{$article->message->count()}}{{'則回應'}}
                                </div>
                                <div class="col-md-4 text-center" >
                                    <a href="#" class="btn btn-secondary" style="margin-left: 10px">檢舉</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>







                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        <span style=" font-weight:bold; font-family:微軟正黑體;">{{'會員留言'}} </span>
                    </div>
                    <div class="card-body">
                        @foreach($messages as $message)
                            <p>{{$message->content}}</p>
                            <small class="text-muted">Posted by {{$message->user->name}} on {{$message->created_at}}</small>
                            <hr style="margin:10px 0;" />
                        @endforeach

                        <a href="#" class="btn btn-success">我要留言</a>

                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
    </div>

    <!-- /.container -->


@endsection