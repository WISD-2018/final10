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

    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="30" style="text-align: center">id</th>
                            <th width="80" >Stu_id</th>
                            <th>標題</th>
                            <th>內容</th>
                            <th width="100" style="text-align: center">功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $qq)
                            <tr>
                                <td width="30" style="text-align: center">{{ $qq->id }}</td>
                                <td width="80" style="text-align: center">{{ $qq->stu_id }}</td>
                                <td width="80" style="text-align: center">{{ $qq->title }}</td>
                                <td>{{ $qq->content }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection