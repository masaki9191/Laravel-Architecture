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

    <section class="cm-top-1 pd-lr-10f">
        <div class="cm-top-1-left">
            <div class="top-1-left-head font-30 color-2a">組織図</div>
            <div class="top-1-left-content">
                <img src="{{asset('frontend/img/company/organization.png')}}" alt="">
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection