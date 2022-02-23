@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">デザイナー編集</div>

                <div class="card-body">
                    <form id="form" name="form" action="{{route('designer.update', $designer->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">施工タイプ</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control  @error('construction_type') is-invalid @enderror"  id="construction_type" name="construction_type" value="{{ old('construction_type') }}">
                                @error('construction_type')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">名前</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"  id="name" name="name" value="{{ old('name') ?? $designer->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">限目</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control  @error('period') is-invalid @enderror"  id="period" name="period" min="1" value="{{ old('period') ?? $designer->period }}">
                                @error('period')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">価格</label>
                            <div class="col-sm-2">
                                <input type="number" class="form-control  @error('price') is-invalid @enderror"  id="price" name="price" min="1" value="{{ old('price') ?? $designer->price }}">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">画像</label>
                            <div class="col-sm-8">
                                <input type="file"  accept="image/*" name="file" id="file" class="  @error('file') is-invalid @enderror"  onchange="loadFile(event)" style="display: none;">
                                <label for="file" class="btn btn-primary" >画像を変更</label>
                                <img id="output" name="output" src="{{ $designer->photo != ''? $designer->photo : '' }}" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
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
                            <a href="{{ route('designer.index') }}" class="btn btn-primary">戻る</a>
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
