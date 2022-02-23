@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/construction_detail.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/effect-com.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="cd-detail" class="cd-detail-header-part">
        <div class="cd-detail-header">
        <img src="{{asset('frontend/img/construction/construction-top.png')}}" alt="">
            <div class="">施工例/詳細</div>
        </div>
    </section>
    <section class="cd-intro-part">
        <div class="cd-intro-detail mg-lr-5f">
            <div class="cd-detail-img pd-lr-10f">
                <img src="{{ $construction->pic('main_pic') != null? $construction->pic('main_pic')->getUrl() : '' }}" alt="">
            </div>
            <div class="cd-detail-content">
                <div class="cd-detail-content-left color-70 font-18">
                    <div>掲載日：{{$construction->construction_date}}</div>
                    <div>{{$construction->title}}</div>
                </div>
                <div class="cd-detail-content-right color-70 font-18">
                    <div class="cd-detail-cr-title">{{$construction->owner}}(エクステリア/庭デザイン)</div>
                    <div>
                    {{$construction->description}}
                    </div>
                </div>
            </div>
            <div class="cd-before gothic">
                <div class="cd-before-title-en color-4b font-40">Before Photo</div>
                <div class="cd-before-title color-4b font-20">施工前写真</div>
            </div>
            <div class="cd-before-detail pd-lr-5f">
                <div class="before-detail">
                    <img src="{{ $construction->pic('before_pic1') != null? $construction->pic('before_pic1')->getUrl() : '' }}" alt="">
                </div>
                <div class="before-detail">
                    <img src="{{ $construction->pic('before_pic2') != null? $construction->pic('before_pic2')->getUrl() : '' }}" alt="">
                </div>
                <div class="before-detail">
                    <img src="{{ $construction->pic('before_pic3') != null? $construction->pic('before_pic3')->getUrl() : '' }}" alt="">
                </div>
            </div>
            <div class="cd-client-faq mg-lr-10f">
                <div class="client-faq-title color-2a font-18">ご相談内容</div>
                <div class="color-2a font-18">{{ $construction->consultation}}</div>
            </div>
        </div>
    </section>

    <section class="cd-designer-intro">
        <div class="common-le-content">
            <div class="vision-sec">
                <img src="{{ $construction->pic('design_pic') != null? $construction->pic('design_pic')->getUrl() : '' }}" alt="">
            </div>
            <div class="vision-text font-20">
                <div class="vision-left mt-270 color-9a">
                    <div class="text-rotate gothic font-14"> Designer</div>
                    <div class="rotate-border"></div>
                </div>
                <div class="cd-de-right font-16 color-70">
                    <div class="cd-de-profile">
                        <div class="">担当デザイナー</div>
                        <div class="">{{ $construction->designer_name}}</div>
                        <div class="">施工データ</div>
                        <div class="">施工タイプ：{{ $construction->type}}</div>
                        <div class="">施工期間：{{ $construction->period}}</div>
                        <div class="">概算費用：{{ $construction->cost}}</div>
                    </div>
                    <div class="cd-de-img">
                        <img src="{{ $construction->pic('designer_pic') != null? $construction->pic('designer_pic')->getUrl() : '' }}" alt="">
                    </div>
                </div>
                <div class="vision-left mt-20 color-9a">
                    <div class="text-rotate-right gothic font-14"> Designer</div>
                    <div class="rotate-border"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="cd-other-part">
        <div class="cd-other-title gothic font-40 color-4b">Other Photo</div>
        <div class="cd-other-content mg-lr-5f">
            <div class="cd-other-img pd-lr-10f">
                <img src="{{ $construction->pic('other_pic') != null? $construction->pic('other_pic')->getUrl() : '' }}" alt="">
            </div>
            <div class="cd-comment pd-lr-10f">
                <div class="cd-self-comment">
                    <h4 class="font-20 gothic">Staff Comment</h4>
                    <p>{{ $construction->staff_comment}}</p>
                </div>
                <div class="cd-self-comment">
                    <h4 class="font-20 gothic">User's Voice</h4>
                    <p>{{ $construction->client_comment}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="examcontent pd-lr-10f">
        <ul class="pgwSlider">
            <li><img src="{{asset('frontend/img/construction/exam-2.png')}}" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
            <li><img src="{{asset('frontend/img/construction/exam-2.png')}}" alt="Montréal, QC, Canada"></li>
            <li><img src="{{asset('frontend/img/construction/exam-2.png')}}" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
            <li><img src="{{asset('frontend/img/construction/exam-2.png')}}" alt="Montréal, QC, Canada"></li>
        </ul>
    </section> -->
@endsection
