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
            <div class="top-1-left-head font-30 color-2a">環境方針</div>
            <div class="top-1-environ">
                <div class="top-1-environ-text font-16 color-2a">1.効率的なエネルギーの利用と汚染防止。</div>
                <div class="top-1-environ-text font-16 color-2a">2.環境負荷低減製品の開発と普及。</div>
                <div class="top-1-environ-text font-16 color-2a">3.業務推進のすべてのプロセスで生産性向上と環境負荷低減。</div>
                <div class="top-1-environ-text font-16 color-2a">4.教育・啓発活動などを通じて、環境意識の高揚に努める。</div>
                <div class="top-1-environ-text font-16 color-2a">5.社会の人々の共感を得て広く社会に普及させるため、取組・成果を積極的に開示する。</div>
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection