@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ブログ編集</div>

                <div class="card-body">
                    <form id="form" name="form" action="{{route('blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">タイプ</label>
                            <div class="col-sm-4">
                                <input type="hidden" id="creater_id" name="creater_id" value="{{auth()->user()->id}}">
                                <select class="form-control  @error('type') is-invalid @enderror"  id="type" name="type">
                                @foreach(config('myconfig.blog_type') as $key => $value)
                                    <option value="{{$key}}" {{ $blog->type == $key ? "selected" : "" }}>{{$value}}</option>
                                @endforeach
                                </select>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">題名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('title') is-invalid @enderror"  id="title" name="title" value="{{ old('title') ?? $blog->title }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">コンテンツ</label>
                            <div class="col-sm-10">
                                <textarea class="form-control  @error('content') is-invalid @enderror"  id="content" name="content" >{{ old('content') ?? $blog->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2">画像</label>
                            <div class="col-sm-10">
                                <input type="file"  accept="image/*" name="file" id="file" class="  @error('file') is-invalid @enderror"  onchange="loadFile(event)" style="display: none;">
                                <label for="file" class="btn btn-primary" >画像を変更</label>
                                <img id="output" name="output" src="{{$blog->picture == '' ? '' : asset('storage/blogs/'.$blog->picture)}}" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" id="saveBtn" data-toggle="modal" data-target="#confirmModal">登録</button>
                            <a href="{{ route('blog.index') }}" class="btn btn-primary">戻る</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirmModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="py-4">上書き更新しますか？</div>
                <div class="">
                    <button type="button" class="btn btn-primary mr-2" id="okBtn">はい</button>
                    <button type="button" class="btn btn-primary ml-2" data-dismiss="modal">いいえ</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script>
    $(document).ready(function() {
        $("#okBtn").click(function(){
            document.form.submit();
        });
    });
</script>
@endsection
