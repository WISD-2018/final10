@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                User <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 會員管理
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
                            <th>姓名</th>
                            <th>信箱</th>
                            <th>email_verified</th>
                            <th>密碼</th>
                            <th>permission</th>
                            <th>photo</th>
                            <th width="100" style="text-align: center">功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $ss)
                            <tr>
                                <td style="text-align: center">{{ $ss->id }}</td>
                                <td style="text-align: center">{{ $ss->name }}</td>
                                <td width="200">{{ $ss->email }}</td>
                                <td>{{ $ss->email_verified_at }}</td>
                                <td>{{ $ss->password }}</td>
                                <td>{{ $ss->permission }}</td>
                                <td>{{ $ss->photo }}</td>
                                <td>
                                    <form action="{{ route('UserBack.destroy', $ss->id) }}" method="POST">
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