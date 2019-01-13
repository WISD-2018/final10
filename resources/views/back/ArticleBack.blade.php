@extends('layouts.master')
@section('content')
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

    <table class="table table-bordered table-hover">

        <tbody>
            <tr>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">文章編號</font></h5>
                </td>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">文章標題</font></h5>
                </td>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">文章內容</font></h5>
                </td>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">查看文章</font></h5>
                </td>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">檢舉無效</font></h5>
                </td>
                <td bgcolor="gray" width="90px" style="text-align: center">
                    <h5><font face="微軟正黑體" color="white">刪除文章</font></h5>
                </td>
            </tr>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>
                    <button type="button" ><a href="{{ route('ArticleBack.check',$article->id) }}">查看</a></button>
                </td>
                <td>
                    <form action="{{ route('ArticleBack.update',$article->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button class="button" >清白</button>
                    </form>

                </td>
                <td>
                    <form action="{{ route('ArticleBack.destroy',$article->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="button">刪除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



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