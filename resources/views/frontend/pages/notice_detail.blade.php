@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/company.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/noticelist.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="cm-top" class="cm-top-part">
        <div class="cm-top-img">
            <img src="{{asset('frontend/img/notice/notice-detail.png')}}" alt="">
            <div class="cm-top-title gothic">
                <div class="cm-top-jp font-40 color-white">会社案内</div>
                <div class="cm-top-en font-25 color-white">BLOG</div>
            </div>
        </div>
    </section>
    <section class="pd-lr-10f">
        <div class="blog-title">
            <span>{{$blog->title}}</span><span>{{ date('Y', strtotime($blog->created_at )) }}年{{ date('m', strtotime($blog->created_at )) }}月{{ date('d', strtotime($blog->created_at )) }}日</span>
        </div>
        <div class="blog-content">
            @if($blog->picture != null)
                <img src="{{asset('storage/blogs/'.$blog->picture)}}" alt="">
            @endif
            <div class="">
                {{$blog->content}}
            </div>
        </div>
    </section>
@endsection
