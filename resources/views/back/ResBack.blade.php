@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Restaurant <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 餐廳管理
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
                            <th width="30" style="text-align: center">#</th>
                            <th width="80" >名稱</th>
                            <th>圖片</th>
                            <th width="100" style="text-align: center">功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($restaurants as $rr)
                            <tr>
                                <td width="30" style="text-align: center">{{ $rr->id }}</td>
                                <td width="80" style="text-align: center">{{ $rr->name }}</td>
                                <td>{{ $rr->photo }}</td>
                                <td>
                                    <form action="{{ route('ResBack.destroy', $rr->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-success">刪除</button></form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection