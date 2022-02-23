@extends('layouts.app')
@section('css')
<style>
.size50  {
    width:50px;
    height:50px;
}
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">デザイナーリスト</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <a class="btn btn-success" href="{{ route('designer.create') }}" title="Create a product">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">名前</th>
                                    <th scope="col">スキルタイプ</th>
                                    <th scope="col">限目</th>
                                    <th scope="col">価格</th>
                                    <th scope="col">画像</th>
                                    <th scope="col">行動</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($designers as $designer)
                                <tr>
                                    <td>{{$designer->construction_type}}</td>
                                    <td>{{$designer->name}}</td>
                                    <td>{{$designer->period}}</td>
                                    <td>{{$designer->price}}</td>
                                    <td>
                                        @if($designer->pic != null)
                                            <img src="{{ $designer->pic->getUrl('thumb') }}" alt="" class="size50">
                                        @endif
                                    </td>
                                    <td>
                                        <form id="designer{{$designer->id}}" name="designer{{$designer->id}}" action="{{ route('designer.destroy',$designer->id) }}" method="POST">
                                            <!-- <a class="btn btn-info" href="{{ route('designer.show',$designer->id) }}"><i class="fa fa-eye"></i></a> -->
                                            <a class="btn btn-primary" href="{{ route('designer.edit',$designer->id) }}"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="removeFn({{$designer->id}})"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $designers->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirmModal" role="dialog" data-id="">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="py-4">本当に削除しますか？</div>
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
            var id = $("#confirmModal").attr("data-id");
            console.log("designer"+id);
            var form = document.getElementById("designer"+id);
            form.submit();
        });
    });
    function removeFn(id) {
        $("#confirmModal").modal("toggle");
        $("#confirmModal").modal("show");
        $("#confirmModal").attr("data-id", id);
    }
</script>
@endsection
