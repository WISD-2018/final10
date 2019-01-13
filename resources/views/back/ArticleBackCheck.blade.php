@extends('layouts.master')
@section('content')
    <head>
        <style>
            .pic {
                position:relative;
                width: 100px;
                height: 100px;
                overflow: hidden;
                border-radius:50%;
            }
            .pic img {
                width: 100%;
                height: auto;
            }
        </style>
    </head>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Article <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 檢舉文章管理
                </li>
            </ol>
        </div>
    </div>
        @foreach($articles as $article)
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid" style="padding:0;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="margin-top:0;">{{ $article->title }}</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span style="font-weight:bold;">{{ '發文人：' }}</span>

                                    <span class="badge" style="margin-left:10px;">{{ $article->user->name }}</span>
                                </div>
                                <div class="col-md-4">
                                    <span style="font-weight:bold;">{{ '所屬餐廳：' }}</span>

                                    <span class="badge" style="margin-left:10px;">{{ $article->restaurant->name }}</span>
                                </div>
                                <div class="col-md-2 text-right">
                                    {{ '按讚人數：' }}
                                    {{  $article->praise->count()  }}
                                </div>
                                <div class="col-md-2 text-right">
                                    {{ '建立於：' }}
                                    {{ $article->created_at->toDateString() }}
                                </div>
                            </div>
                            <hr style="margin:10px 0;" />

                            <div class="row">
                                <div class="col-md-12">
                                    <span style="font-weight:bold;">{{ '文章內容：' }}</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="margin-top: 5px; height:100px;overflow:hidden;">
                                    {{ $article->content }}
                                </div>
                            </div>
                            <hr style="width: 90%; height: 10px; border: none; background-color: #f0ad4e">
                            <div class="row">
                                <div class="col-md-12">
                                    <span style="font-weight:bold;">{{ '所有評論內容：' }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        @endforeach
    @foreach($messages as $message)
        <div class="card">
            <div class="card-body">
                <div class="container-fluid" style="padding:0;">
                    <hr style="margin:10px 0;" />
                    <div class="row">
                        <div class="col-md-4">
                            <span style="font-weight:bold;">{{ '評論人：' }}</span>

                            <span class="badge" style="margin-left:10px;">{{ $message->user->name }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 5px; height:100px;overflow:hidden;">
                            {{$message->content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </table>

@endsection