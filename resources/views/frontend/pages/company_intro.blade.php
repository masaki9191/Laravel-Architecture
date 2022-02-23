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
            <div class="top-1-left-head font-30 color-2a">会社概要</div>
            <div class="top-1-left-content">
                <table id="top-1-tb">
                    <tr>
                        <td>商　　 号</td>
                        <td>有限会社スドウ工営は<br>GENERAL CONTRACTORS</td>
                    </tr>
                    <tr>
                        <td>本 　　社</td>
                        <td>〒250-0211　<br>
                            神奈川県小田原市鬼柳799-10<br>
                            TEL 0465-39-2021<br>
                            <button class="top-1-map font-14"><span><img src="{{asset('frontend/img/company/map-icon.png')}}" alt=""></span>Map</button>
                        </td>
                    </tr>
                    <tr>
                        <td>設 　　立</td>
                        <td>昭和**年(****年)*月*日</td>
                    </tr>
                    <tr>
                        <td>代 　　表</td>
                        <td>取締役会長兼社長 **********</td>
                    </tr>
                    <tr>
                        <td>資 本 金</td>
                        <td>***************万円</td>
                    </tr>
                    <tr>
                        <td>従業員数</td>
                        <td>*********名(2021年2月末現在 当社グループ)</td>
                    </tr>
                </table>
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection