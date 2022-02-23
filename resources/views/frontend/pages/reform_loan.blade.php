@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">リフォームローンのご紹介</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">リフォームローンのご紹介</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/reform-loan/reform-loan-top.png')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    ヒールザガーデンではお客様に資金面でご安心して頂けるよう提携ローンをご用意しております。予算を気にしてイメージどおりの外構リフォームができない際にはオーバー分を無理のない返済でローンにする事をお薦めします。弊社は手間がかからない手続き、スピーディーな審査、銀行のリフォームローンと比較しても高くない金利のセディナやオリコと提携しております。また、期間限定でご利用条件もありますが無金利でローンが組めるLIXILのキャンペーンもございます。
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic"><span>オールLIXILリフォームローンのご紹介</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        金利０％で最長60回(5年)の分割払いが可能なリフォームローンが期間限定でご利用頂けます。
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic"><span>キャンペーン概要</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">対象</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        当店にて工事御契約をされた方<br>
                        ※事前に株式会社セディナまたは株式会社オリエントコーポレーション（提携ローン会社）の基準による審査があります。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">対象期間</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        株式会社LIXILが運営するリフォームコンタクトで対象期間を掲載しています。<br>
                        ※キャンペーン期間外は掲載がありません。<br>
                        ※予算終了次第、キャンペーン終了となります。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">金利・分割手数料</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        0円 ※LIXILが負担します。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">支払回数</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        6～60回（6回間隔）
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">融資金額</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        20万以上、2,000万円以下
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">月々最低支払額</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        4,000円以上
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">ご利用条件</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        対象商品は、すべてＬＩＸＩＬ商品が採用されていること
                        （詳細についてはお問い合わせください）
                    </div>
                </div>
                <div class="gl-type-title font-30 color-2a gothic"><span>オリコリフォームローン</span></div>
                <div class="garden-function font-20 color-70 gothic">オリコリフォームローンの特徴</div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">金利</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        実質金利:２．９５％（2016年7月現在）<br>
                        ※金利は変動しますが、ローンご契約後はお支払が終わるまで契約時の金利は変わりません。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">借入</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        ご利用金額:30万円以上～1000万円以内<br>
                        借入期間:最長10年
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">返済</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        （1）月払い（2）ボーナス併用払（3）ボーナス一括払 返済回数:最長120回
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">手続き</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        申込み時必要書類:リフォームローン申込書・工事請負契約書（２つ供弊社でご用意致します）<br>
                        ※身分証明書・印鑑（シャチハタ不可）が必要となります<br>
                        連帯保証人:原則不要<br>
                        抵当権設定:不要（無担保）
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">支払方法</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        お客さまご指定の金融機関からの口座振替
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">団体信用生命保険</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        団体信用生命保険に付保できます。付保により金利が上がることはございません。
                    </div>
                </div>
                <div class="garden-function font-20 color-70 gothic">リフォームローン手続きの流れ</div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">1.申込み</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">まずはオリコリフォームローンの申込書にご記入頂きます。申込みの際には身分証明書・印鑑（シャチハタ不可）が必要となります。団体信用生命保険を付保する際は別紙申込書にご記入頂きます。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">2.受付・審査</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">弊社がお預かりした申込書をオリコにFAX致します。審査は原則1日となります。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">3.契約内容の承認</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">オリコより契約確認の連絡がございます。契約内容に間違いが無ければご承認頂きます。</div>
                        </div>
                    </div>
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">4.工事完了確認</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">審査が通り、契約内容の承認が終わりましたら工事に入ります。工事がすべて完了しましたら、工事完了確認書にご捺印を頂きます。</div>
                        </div>
                    </div>
                </div>
                <div class="gl-type-content">
                    <div class="gl-type-content-left">
                        <div class="gl-type-cl-img pos-rel">
                            <img src="{{asset('frontend/img/reform/bg.png')}}" alt="">
                            <div class="reform-text font-18">5.お支払開始</div>
                        </div>
                        <div class="gl-type-cl-text">
                            <div class="gl-type-clt-content font-14 color-2a">オリコより工事完了の確認連絡がございます。ご承諾を頂きましたらお支払の開始となります。</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection