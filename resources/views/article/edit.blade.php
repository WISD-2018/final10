@extends('layouts.PostApp2')

@section('title','新文章')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mt-4">
                        <div class="card-body">
                            <h3 class="card-title">編輯文章！！</h3>

                            <form style="margin-top: 20px" class="form-horizontal" method="POST" action="{{ route('article.updates') }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">標題</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="student" class="col-sm-2 control-label">學生</label>
                                    <div class="col-sm-12">
                                        <input class="form-control" type="hidden" name="stu_id" value="{{ Auth::user()->id }}">
                                        <input class="form-control" type="text" name="student" value="{{ Auth::user()->name }}"readonly >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="restaurant" class="col-sm-2 control-label">店家</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="restaurant">
                                            @foreach($restaurants as $restaurant)
                                                <option value="{{ $restaurant->id }}">
                                                    {{ $restaurant->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-2 control-label">內文</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="25" name="content" style="resize: vertical;">{{ $article->content }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary col-md-12">修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
