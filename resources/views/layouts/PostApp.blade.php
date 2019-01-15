<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">


    <style>
        html body {
            background-color: #00324e;
        }
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
        .navbar-right{float:right!important;margin-right:-190px}
    </style>
</head>
<body>
<div id="app">

    <nav class="navbar sticky-top navbar-expand-md navbar-light navbar-laravel navbar-fixed-top" style="background-color:#006aa6;" >
        <div class="container">

            <a class="navbar-brand text-white" href="{{ action('ArticleController@index') }}">
                {{ 'Michelin' }}
            </a>

            {{--<form class="form-inline" role="search" method="GET" action="">--}}

                    {{--<input class="form-control input-sm mr-sm-2 hidden"  type="search" placeholder="文章搜尋" aria-label="Search">--}}
                    {{--<button class="btn btn-primary  my-2 my-sm-0" type="submit">搜尋</button>--}}
            {{--</form>--}}

            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}



            @if(Auth::check())
                <nav class="navbar navbar-expand-lg   fixed-top" style="background-color:#006aa6;">
                    <div class="container">
                        <a class="navbar-brand text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ action('ArticleController@index') }}">
                            {{ '勤益-米其林星級評鑑網' }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item ">
                                    <a class="nav-link text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ route('article.index') }}">
                                        所有文章
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item" style="margin-right: 50px">
                                    <a class="nav-link text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ route('restaurant.index') }}">
                                        餐廳搜尋
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ action('UserController@index') }}">
                                        <div style="margin-top: 10px">
                                            <div class="pic">
                                                <img src="{{ Auth::user()->photo }}">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('article.create') }}">新增文章</a>
                                        <a class="dropdown-item" href="#two">編輯個人資料</a>
                                        <a class="dropdown-item" href="#two">回報問題</a>
                                        <div role="separator" class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('登出會員') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            @else
                <nav class="navbar navbar-expand-lg   fixed-top" style="background-color:#006aa6;">
                    <div class="container">
                        <a class="navbar-brand text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ action('ArticleController@index') }}">
                            {{ 'Michelin' }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item ">
                                    <a class="nav-link text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ route('article.index') }}">
                                        所有文章
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item" style="margin-right: 50px">
                                    <a class="nav-link text-white" style=" font-weight:bold; font-family:微軟正黑體;" href="{{ route('restaurant.index') }}">
                                        餐廳搜尋
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item">
                                    <a class="nav-link">
                                       <span class="fa-stack fa-lg">
                                           <i class="fa fa-circle fa-stack-2x"></i>
                                           <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                       </span>
                                    </a>
                                </li>
                                {{-----------------------------------------}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{'訪客身分' }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('login') }}">登入會員</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            @endif
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
