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

    <table class="table table-bordered table-hover">

        <tbody>
        <tr>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">餐廳編號</font></h5>
            </td>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">餐廳</font></h5>
            </td>
            <td bgcolor="gray" width="90px" style="text-align: center">
                <h5><font face="微軟正黑體" color="white">刪除</font></h5>
            </td>
        </tr>
        <tbody>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{ $restaurant->id}}</td>
                <td>{{ $restaurant->name }}</td>
                <td>
                    <form action="{{ route('ResBack.destroy', $restaurant->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-success center-block">刪除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection