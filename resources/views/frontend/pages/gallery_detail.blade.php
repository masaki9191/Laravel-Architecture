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
            {{$gallery->description}}
        </div>
        <div class="content-group color-70 gallerys">
            @foreach($gallery->photos as $key => $media)
            <div class="gallery-3n">
                <img src="{{ $media->getUrl('thumb') }}">
            </div>
            @endforeach
        </div>
    </section>
@endsection
