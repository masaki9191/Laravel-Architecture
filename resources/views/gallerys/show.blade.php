@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ギャラリーショー</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">名前:</label>
                            <div class="col-sm-4">
                                {{$gallery->name}}
                            </div>
                        </div><div class="form-group row">
                            <label for="type" class="col-sm-2">説明:</label>
                            <div class="col-sm-4">
                                {{$gallery->description}}
                            </div>
                        </div>
                        <div class="form-group row">
                            @foreach($gallery->photos as $key => $media)
                            <div class="col-sm-4">
                                <img src="{{ $media->getUrl('thumb') }}" style="width:100%">
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            <a href="{{ route('gallery.index') }}" class="btn btn-primary">戻る</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
