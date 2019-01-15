@extends('layouts.PostApp')

@section('title','新文章')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        新文章
                    </div>
                    <div class="panel-body">
                        <div class="container-fluid" style="padding:0;">
                            <form style="margin-top: 20px" class="form-horizontal" method="POST" action="{{ route('article.update',['id'=>$article->id]) }}">
                                {{ csrf_field() }}
                                {{--<div class="form-group">--}}
                                {{--<label for="student" class="col-sm-2 control-label">圖片</label>--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<div class="form-group" style="padding-top:10px;">--}}
                                {{--<label for="photo">選擇圖片</label>--}}
                                {{--<input type="file" id="photo" name="photo" accept="image/*">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">標題</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="student" class="col-sm-2 control-label">學生</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"value="{{ Auth::user()->name }}" name="student" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="restaurant" class="col-sm-2 control-label">店家</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="restaurant">
                                            @foreach($restaurants as $restaurant)
                                                <option value="{{ $restaurant->id }}"  {{ ($article->res_id==$restaurant->id)?"selected='selected'":"" }}>
                                                    {{ $restaurant->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-2 control-label">內文</label>
                                    <div class = "col-sm-10">
                                        <textarea class="form-control" rows="25" name="content" style="resize: vertical;">value="{{ $article->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-m btn-primary">儲存</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
