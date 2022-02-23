@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/construction.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/gallery.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="exam-header" class="exam-header-part">
        <div class="exam-header">
            <img src="{{asset('frontend/img/construction/construction-top.png')}}" alt="">
        </div>
    </section>
    <section class="examcontent pd-lr-10f">
        <div class="content-title font-18 color-70">
            エクステリア（外構）とガーデン（お庭）のこだわりデザイン&施工例を各部位ごとにギャラリー集にしたページになります。ヒールザガーデンのデザインと施工の技術力を是非ご覧頂き理想のお庭と外構の完成イメージを膨らませてみてください。下記画像よりご覧になりたいゾーンの写真をお選びください。
        </div>
        <div class="content-group color-70 gallerys">
            @foreach($gallerys as $gallery)
            <a class="gallery" href="{{route('gallery.detail',$gallery->id)}}">
                <img src="{{$gallery->thumbnail}}" alt="">
                <div>{{$gallery->name}}</div>
            </a>
            @endforeach
        </div>
    </section>
@endsection
