@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">庭のライティング（照明）</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">庭のライティング（照明）</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/gardenlight/garden-light.png')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    庭照明を取り入れることで夜のお庭の景観を幻想的に演出することができます。また、アプローチなどの通路を明るく照らし段差での転倒防止など安全面でも重要な要素となります。
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic">庭照明の役割</div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">美観</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        夜の庭をライティングで演出することで景観を美しく演出できます。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">機能性</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        夜は暗く利用できなかったお庭に明かりが灯ることでアウトドアリビングとして活用できます。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">安全</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        夜間のアプローチは段差や飛び石など転倒に起因する要素があります。照明で照らすことで見えやすくするだけでなく、事前にそこに危険があるシグナルとなります。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">防犯</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        照明で照らすことで物影や死角をなくし、侵入を警戒させる働きがあります。
                    </div>
                </div>
                <div class="gl-type-title font-30 color-2a gothic"><span>ガーデンライトの種類</span></div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_1.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">表札灯</div>
                            <div class="gl-type-clt-content font-14 color-2a">表札を上からライティングし、夜間でも確認できるようになります。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_2.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">門柱灯</div>
                            <div class="gl-type-clt-content font-14 color-2a">門屏や門柱の存在を明かりで示してくれるライト。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_3.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">ポールライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">ひざから腰くらいの高さがあるライト。視界に入りやすく足元も照らせます。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_4.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">フットライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">足元を中心に照らすライト。階段やアプローチに沿って一定間隔で設置する。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_5.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">パスライト/スプレッドライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">フットライト同様足元を照らすライト。自立式のため壁面が無くても設置が可能。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_6.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">スポットライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">壁面やシンボルツリーを照らすのに用いられるライト。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_7.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">地中埋め込み型ライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">シンプルで存在感が弱いためテイストを選ばず使えます。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_8.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">デッキライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">ウッドデッキを照明で演出するためのライト。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img-ot">
                            <img src="{{asset('frontend/img/gardenlight/light_9.png')}}" alt="">
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-title font-16 color-70 gothic">ウォーターライト</div>
                            <div class="gl-type-clt-content font-14 color-2a">プールなどの水中で使用するライト。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection