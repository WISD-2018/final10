@extends('layouts.PostApp')
<head>
    <style>
        .pic2 {
            position:relative;
            width: 300px;
            height: 300px;
            overflow: hidden;
            border-radius:50%;
        }
        .pic2 img {
            width: auto;
            height: 100%;
        }
    </style>
</head>
@section('content')
    <div class="container">



        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-9">
                <h1 class="my-4 text-white"  style=" font-weight:bold; font-family:微軟正黑體;">勤益的所有餐廳!
                </h1>
            </div>
        </div>


        <div class="row">
            @foreach ($restaurants as $restaurant)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-1">
                        <div class="card-body">
                            <div class="justify-content-center">
                                    <a href="{{ route('restaurant.index2',$restaurant->id) }}">
                                        <div class="pic2 ">
                                            <img class="card-img-top" src="{{$restaurant->photo}}" alt="">
                                        </div>
                                    </a>
                            </div>
                            <h4 class="card-title text-center" style="margin-top: 20px">
                                <a href="{{ route('restaurant.index2',$restaurant->id) }}">{{ substr($restaurant->name,0,25) }}</a>
                            </h4>
                            <p class="card-text"></p>
                            <hr style="margin:10px 0;" />
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    @php
                                    $num=0;
                                    $num2=0;
                                    @endphp
                                    @foreach($scores as $score)
                                        @if($restaurant->id === $score->res_id)
                                                @php
                                                    $num2=$num2+1;
                                                    $num=$num+$score->score;
                                                @endphp
                                        @endif
                                    @endforeach
                                    @if ($num2 === 0)
                                        @php
                                            $num2=floor($num/1);
                                        @endphp
                                    @else
                                        @php
                                            $num2=floor($num/$num2);
                                        @endphp
                                    @endif

                                    <span style=" font-weight:bold; font-family:微軟正黑體;">{{ $num2 }}{{'星級餐廳'}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <ul class="pagination justify-content-center">
            {{--{{ $articles->render() }}--}}
        </ul>

    </div>
@endsection