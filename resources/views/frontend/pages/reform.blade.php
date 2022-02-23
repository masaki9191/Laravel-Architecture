@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">住宅改修リフォーム</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">住宅改修リフォーム</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/reform/reform-top.png')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    ヒールザガーデンは平成26年4月1日より横浜市介護保険住宅改修費等受領委任払い取扱事業者に登録となります。介護に必要な改修工事の際に一度業者に支払った後で介護保険から支給されるのが原則ですが、これにより1割の自己負担分のみをお支払い頂くことで対応が可能となります。外構では主に車椅子を利用するための段差解消（バリアフリー）工事や、階段などに手摺りを設置する工事のご要望がございます。外構での介護に必要なリフォームをご希望の際には担当のケアマネージャーにご相談の上ご連絡ください。
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic"><span>住宅改修費の支給対象者</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        要支援1以上、要介護1以上
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic"><span>支給の対象となる住宅改修</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">手すりの取付け</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">段差の解消</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">滑りの防止及び移動の円滑化等のための床、又は通路面の材料の変更</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">引き戸等への扉の取替え</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">洋式便器等への便器の取替え</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">その他前各号の住宅改修に付帯して必要となる住宅改修</span></div>
                </div>
                <div class="gl-type-title font-30 color-2a gothic"><span>ガーデンライトの種類</span></div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">1.相談</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">まずは区役所または地域包括支援センターにご連絡ください。<br>
                                ※必ず上記2か所のどちらかにご相談ください。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">2.工事内容確認</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">区役所職員と共にご自宅に伺い施工箇所と必要な工事内容を確認します。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">3.助成決定</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">弊社が作成・提出した見積書・工事計画書が行政機関の確認、精査を通ると助成が決定します。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">4.着工</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">工事計画書の内容で介護保険適用の住宅改修工事を行います。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">5.工事完了</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">工事が完了となりましたら区役所職員、その他関係 機関と共に現場を確認します。問題ないようであれば完了の署名・捺印を頂きます。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection