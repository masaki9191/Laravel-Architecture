@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/contact.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="ct-contact-top">
        <div class="ct-contact-top-bg"></div>
        <div class="ct-contact-title">
            <div class="ct-contact-title-jp gothic font-40 color-2a">事業エリア</div>
        </div>
        <div class="ct-contact-head-right">
            <img src="{{asset('frontend/img/res-city/res-city.png')}}" alt="">
            <div class="res-city-top-text font-25 color-white">ご要望に応じて対応致しますので、お気軽にお問い合わせください。</div>
        </div>
        <div class="res-city pd-lr-10f color-70">
            <div class="res-city-type">
                <div class="res-city-title font-20">神奈川県</div>
                <div class="res-city-text font-16"><span>&#10230;</span>神奈川県全域</div>
            </div>
            <div class="res-city-type">
                <div class="res-city-title font-20">東京都</div>
                <div class="res-city-text font-16"><span>&#10230;</span>東京都全域</div>
            </div>
            <div class="res-city-type">
                <div class="res-city-title font-20">静岡県</div>
                <div class="res-city-text font-16"><span>&#10230;</span>静岡県全域</div>
            </div>
            <div class="res-city-type">
                <div class="res-city-title font-20">静岡県</div>
                <div class="res-city-text font-16"><span>&#10230;</span>静岡県全域</div>
            </div>
        </div>
    </section>
@endsection