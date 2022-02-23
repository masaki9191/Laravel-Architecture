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
            <div class="top-1-left-head font-30 color-2a">トップメッセージ</div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/company/top-1.jpg')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">有限会社スドウ工営は</div>
                    <div class="top-1-com-bg font-20 color-2a gothic">「想いを育てる、住まいづくり、<br>
                        安心・安全で豊かな社会づくりに貢献する」</div>
                    <div class="top-1-com-text font-16 color-2a">ために存在する企業グループです（経営理念）。</div>
                    <div class="top-1-com-text font-16 color-2a">
                        平素は格別なご高配を賜り、心から厚く御礼申し上げます。<br>
                        当社は、****年（昭和**年）創立、本年**年目を迎えました。<br>
                        この間、一途に高品質な製品を社会に提供し続けております。<br>
                        これからも百年企業を目指し、愚直にこの道を歩んでまいる
                        所存でおります。
                    </div>
                    <div class="top-1-com-text font-16 color-2a">
                        「想いを育てる、住まいづくり、
                        安心・安全で豊かな社会づくりに貢献する」に向け、
                        SDGsへの取り組みに積極的に応えていくことをお約束します。
                        これからも私達は、時代・社会のニーズに合致した環境に
                        優しい製品の開発・提供に努めてまいります。
                        今後とも一層のご支援を賜りますよう、お願い申し上げます。
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection