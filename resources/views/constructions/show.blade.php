@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">blog show</div>

                <div class="card-body">
                    <form id="form" name="form" action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">type</label>
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
                            <label for="type" class="col-sm-2">title</label>
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
                            <label for="type" class="col-sm-2">content</label>
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
                            <label for="file" class="col-sm-2">picture</label>
                            <div class="col-sm-10">
                                <img id="output" name="output" src="{{$blog->picture == '' ? '' : asset('storage/blogs/'.$blog->picture)}}" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('blog.index') }}" class="btn btn-primary">戻る</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
