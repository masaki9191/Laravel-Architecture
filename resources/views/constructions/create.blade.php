@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">建設追加</div>

                <div class="card-body">
                    <form id="form" name="form" action="{{route('construction.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="category" class="col-sm-2">カテゴリー</label>
                            <div class="col-sm-4">
                                <select class="form-control  @error('category') is-invalid @enderror"  id="category" name="category">
                                @foreach(config('myconfig.construction_category') as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2">題名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('title') is-invalid @enderror"  id="title" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="owner" class="col-sm-2">家の所有者</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('owner') is-invalid @enderror"  id="owner" name="owner" value="{{ old('owner') }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2">説明</label>
                            <div class="col-sm-10">
                                <textarea class="form-control  @error('description') is-invalid @enderror"  id="description" name="description" >{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="consultation" class="col-sm-2">ご相談内容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control  @error('consultation') is-invalid @enderror"  id="consultation" name="consultation" >{{ old('consultation') }}</textarea>
                                @error('consultation')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="construction_date" class="col-sm-2">掲載日</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control  @error('construction_date') is-invalid @enderror"  id="construction_date" name="construction_date" value="{{ old('construction_date') }}">
                                @error('construction_date')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designer_name" class="col-sm-2">デザイナー名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('designer_name') is-invalid @enderror"  id="designer_name" name="designer_name" value="{{ old('designer_name') }}">
                                @error('designer_name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2">デザイナーの写真</label>
                            <div class="col-sm-8">
                                <input type="file"  accept="image/*" name="designer_pic" id="designer_pic" class="  @error('designer_pic') is-invalid @enderror"  onchange="loadFile(event, 'designer_pic')" style="display: none;">
                                <label for="designer_pic" class="btn btn-primary" >画像を変更</label>
                                <img id="designer_pic_output" name="designer_pic_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('designer_pic')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">施工タイプ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('type') is-invalid @enderror"  id="type" name="type" value="{{ old('type') }}">
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="period" class="col-sm-2">施工期間</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('period') is-invalid @enderror"  id="period" name="period" value="{{ old('period') }}">
                                @error('period')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cost" class="col-sm-2">概算費用</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('cost') is-invalid @enderror"  id="cost" name="cost" value="{{ old('cost') }}">
                                @error('period')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2">デザイン画像</label>
                            <div class="col-sm-8">
                                <input type="file"  accept="image/*" name="design_pic" id="design_pic" class="  @error('design_pic') is-invalid @enderror"  onchange="loadFile(event,'design_pic')" style="display: none;">
                                <label for="design_pic" class="btn btn-primary" >画像を変更</label>
                                <img id="design_pic_output" name="design_pic_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('design_pic')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">スタッフコメント</label>
                            <div class="col-sm-10">
                                <textarea class="form-control  @error('staff_comment') is-invalid @enderror"  id="staff_comment" name="staff_comment" >{{ old('staff_comment') }}</textarea>
                                @error('staff_comment')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2">クライアントのコメント</label>
                            <div class="col-sm-10">
                                <textarea class="form-control  @error('client_comment') is-invalid @enderror"  id="client_comment" name="client_comment" >{{ old('client_comment') }}</textarea>
                                @error('client_comment')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2">メイン画像</label>
                            <div class="col-sm-8">
                                <input type="file"  accept="image/*" name="main_pic" id="main_pic" class="  @error('main_pic') is-invalid @enderror"  onchange="loadFile(event, 'main_pic')" style="display: none;">
                                <label for="main_pic" class="btn btn-primary" >画像を変更</label>
                                <img id="main_pic_output" name="main_pic_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('main_pic')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2">他の写真</label>
                            <div class="col-sm-8">
                                <input type="file"  accept="image/*" name="other_pic" id="other_pic" class="  @error('other_pic') is-invalid @enderror"  onchange="loadFile(event, 'other_pic')" style="display: none;">
                                <label for="other_pic" class="btn btn-primary" >画像を変更</label>
                                <img id="other_pic_output" name="other_pic_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('other_pic')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2">写真の前</label>
                            <div class="col-sm-3">
                                <input type="file"  accept="image/*" name="before_pic1" id="before_pic1" class="  @error('before_pic1') is-invalid @enderror"  onchange="loadFile(event,'before_pic1')" style="display: none;">
                                <label for="before_pic1" class="btn btn-primary" >画像を変更</label>
                                <img id="before_pic1_output" name="before_pic1_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('before_pic1')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="file"  accept="image/*" name="before_pic2" id="before_pic2" class="  @error('before_pic2') is-invalid @enderror"  onchange="loadFile(event,'before_pic2')" style="display: none;">
                                <label for="before_pic2" class="btn btn-primary" >画像を変更</label>
                                <img id="before_pic2_output" name="before_pic2_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('before_pic2')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="file"  accept="image/*" name="before_pic3" id="before_pic3" class="  @error('before_pic3') is-invalid @enderror"  onchange="loadFile(event,'before_pic3')" style="display: none;">
                                <label for="before_pic3" class="btn btn-primary" >画像を変更</label>
                                <img id="before_pic3_output" name="before_pic3_output" src="" class="p-1" style="border: 1px solid rgba(0,0,0,0.12);width:100%"/>
                                @error('before_pic3')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" id="saveBtn" data-toggle="modal" data-target="#confirmModal">登録</button>
                            <a href="{{ route('construction.index') }}" class="btn btn-primary">戻る</a>
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
                <div class="py-4">登録しますか？</div>
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
    var loadFile = function(event,prefix) {
        var image = document.getElementById(prefix+'_output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
<script>
    $(document).ready(function() {
        $("#okBtn").click(function(){
            document.form.submit();
        });
    });
</script>
@endsection
