@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/construction.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="exam-header" class="exam-header-part">
        <div class="exam-header">
            <img src="{{asset('frontend/img/construction/construction-top.png')}}" alt="">
            <div class="">施工例/{{$data['title']}}</div>
        </div>
    </section>
    <section class="examcontent pd-lr-10f">
        <div class="content-title font-18 color-70">
            @if($data['type'] == 'year')
                @if($data['description'] != null)
                    {{$data['description']['name']}}
                @else
                    資料が存在しません。
                @endif
            @elseif($data['type'] == 'category')
            {{$data['description']}}
            @endif
        </div>
        <div class="content-group color-70">

            @foreach($constructions as $construction)
                <div class="content-group-left">
                    <div class="group">
                        <img src="{{ $construction->pic('main_pic') != null? $construction->pic('main_pic')->getUrl() : '' }}" alt="">
                        <div class="link-btn">
                            <button class="link-btn-style font-16" onclick="window.location.href = '/construction/detail/{{$construction->id}}'">詳細を見る</button>
                        </div>
                    </div>
                    <div class="detail-text font-18">
                        <div>{{$construction->title}}</div>
                        <div>{{$construction->owner}}</div>
                        <div>{{$construction->construction_date}}|{{$construction->type}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
