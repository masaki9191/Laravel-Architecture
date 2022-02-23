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
                <div class="card-header">ギャラリーリスト</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <a class="btn btn-success" href="{{ route('gallery.create') }}" title="Create a product">
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
                                    <th scope="col">写真</th>
                                    <th scope="col">行動</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($gallerys as $gallery)
                                <tr>
                                    <td>{{$gallery->name}}</td>
                                    <td>
                                        @foreach($gallery->photos as $key => $media)
                                            <img src="{{ $media->getUrl('thumb') }}" class="size50">
                                        @endforeach
                                    </td>
                                    <td>
                                        <form id="gallery{{$gallery->id}}" name="gallery{{$gallery->id}}" action="{{ route('gallery.destroy',$gallery->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('gallery.show',$gallery->id) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="removeFn({{$gallery->id}})"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $gallerys->links() !!}
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
            console.log("gallery"+id);
            var form = document.getElementById("gallery"+id);
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
