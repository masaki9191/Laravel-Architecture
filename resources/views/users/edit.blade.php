@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ユーザー編集</div>

                <div class="card-body">
                <form id="form" name="form" action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="type">名前</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror"  id="name" name="name" value="{{ old('name') ?? $user->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label for="type">電話</label>
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror"  id="phone" name="phone" value="{{ old('phone') ?? $user->phone }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label for="type">ID</label>
                            <input type="text" class="form-control  @error('userid') is-invalid @enderror"  id="userid" name="userid" value="{{ old('userid') ?? $user->userid  }}">
                            @error('userid')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <label for="type">パスワード</label>
                            <input type="text" class="form-control  @error('password') is-invalid @enderror"  id="password" name="password" value="{{ old('password')  ?? $user->realpassword }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" id="saveBtn" data-toggle="modal" data-target="#confirmModal">更新</button>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">戻る</a>
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
