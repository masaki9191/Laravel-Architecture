@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ユーザー追加</div>

                <div class="card-body">
                    <form id="form" name="form" action="{{route('characteristic.store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label for="name">名前</label>
                                <input type="hidden" name="type" value="year" />
                                <select class="form-control  @error('name') is-invalid @enderror"  id="name" name="name">
                                <?php
                                    $year = date("Y");
                                ?>
                                @for($i=$year-5; $i <$year+5; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-10">
                                <label for="description">説明</label>
                                <textarea class="form-control  @error('description') is-invalid @enderror"  id="description" name="description" >{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" id="saveBtn" data-toggle="modal" data-target="#confirmModal">登録</button>
                            <a href="{{ route('characteristic.index') }}" class="btn btn-primary">戻る</a>
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
    $(document).ready(function() {
        $("#okBtn").click(function(){
            document.form.submit();
        });
    });
</script>
@endsection
