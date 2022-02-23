@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/company.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="cm-top" class="cm-top-part">
        <div class="cm-top-img">
            <img src="{{asset('frontend/img/company/company-top.png')}}" alt="">
            <div class="cm-top-title gothic">
                <div class="cm-top-jp font-40 color-white">会社案内</div>
                <div class="cm-top-en font-25 color-white">COMPANY</div>
            </div>
        </div>
    </section>

    <section class="cm-intro-top mg-lr-5f">
        <div class="cm-intro-part pd-lr-5f">
            <div class="cm-intro-content">
                <a href="{{route('company_intro')}}" class="cm-intro-group">
                    <div class="cm-intro-group-img">
                        <img src="{{asset('frontend/img/company/cm-top-2.png')}}" alt="">
                    </div>
                    <div class="cm-intro-group-text font-20 color-2a">会社概要</div>
                </a>
                <a href="{{route('noticelist')}}" class="cm-intro-group">
                    <div class="cm-intro-group-img">
                        <img src="{{asset('frontend/img/company/blog.png')}}" alt="">
                    </div>
                    <div class="cm-intro-group-text font-20 color-2a">ブログ</div>
                </a>
                <a href="{{route('contact')}}" class="cm-intro-group">
                    <div class="cm-intro-group-img">
                        <img src="{{asset('frontend/img/company/contact.png')}}" alt="">
                    </div>
                    <div class="cm-intro-group-text font-20 color-2a">お問い合わせ</div>
                </a>
            </div>
        </div>
    </section>
@endsection
