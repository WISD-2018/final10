@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Question <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 回報問題管理
                </li>
            </ol>
        </div>
    </div>

    <table class="table table-bordered table-hover">

        <tbody>
        <tr>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">回報編號</font></h5>
            </td>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">學生</font></h5>
            </td>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">回報標題</font></h5>
            </td>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">回報內容</font></h5>
            </td>
        </tr>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{ $question->id}}</td>
                <td>{{ $question->user->name }}</td>
                <td>{{ $question->title}}</td>
                <td>{{ $question->content}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection