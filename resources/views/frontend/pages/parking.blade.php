@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">駐車スペース</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">駐車スペース</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam4/ps-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    <p>ライフスタイルの変化によってお庭を駐車場にリフォームされるケースがあります。また元々1台分の駐車スペースはあったがもう1台分お庭を削って増築したいなどのリフォームも対応しております。カーポートで愛車を雨や雪、雹などから守りたい、愛車を修理・メンテナンスする用のガレージが欲しいなどどのようなご用命もお気軽にご相談下さい。&ドッグガーデン）をオープンしたのも、お客様に理想のお庭を提供できるよう、モデルガーデンとしての意味も込められています。</p>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>駐車スペースのグランド面</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>駐車スペースのグランド面は土間コンクリートが主流ですが、コンクリートの打設以外にもスリッドを入れて植栽を入れた化粧目地を施したりなど、冷たい印象にならないような意匠・装飾が可能です。また化粧ブロックやインターロッキングなど車が載っても割れない素材の組み合わせで彩りを添えることもできます。</p>
                    </div>
                </div>
                <div class="pk-grid-img">
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-1.jpg')}}" alt=""></div>
                        <div class="group-text">土間コンクリートの駐車スペース</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-2.jpg')}}" alt=""></div>
                        <div class="group-text">オレンジのカラーコンクリート</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-3.jpg')}}" alt=""></div>
                        <div class="group-text">自然石の乱貼りやスリッドが入った駐車スペース</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-4.jpg')}}" alt=""></div>
                        <div class="group-text">枕木を敷き詰めた駐車スペース</div>
                    </div>
                </div>
                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>カーゲート</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>大切なマイカーをいたずらされないためにも駐車スペースの前には侵入者を防ぐカーゲートを設置するのが望ましいでしょう。機能性やデザインなどのバリエーションが多く、また各メーカーより商品化されているのため選択肢の幅が広いのも特徴です。設置条件や防犯性、お車の使用頻度などより考慮し、お客様に合ったカーゲートの選び方をアドバイス致します。</p>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam4/ps-img-5.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>伸縮ゲート／蛇腹門扉／アコーディオン門扉</h5></div>
                        <div class="wk-right-content"><p>レールやセンターレールを設置し（レールが無いタイプもある）左右どちらか片側に折りたたまれるようにスライドする。各メーカーより出ており、カーゲートの中でも一番ポピュラーなタイプの門扉になる。</p></div>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam4/ps-img-6.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>跳ね上げ門扉／オーバーゲート</h5></div>
                        <div class="wk-right-content"><p>省スペースの敷地に設置でき、操作性に優れた跳ね上げ門扉、電動機能もあり面倒な上げ下げの手間もかからないタイプもあります。</p></div>
                    </div>
                </div>

                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam4/ps-img-7.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>引戸／スライドゲート</h5></div>
                        <div class="wk-right-content"><p>スペースを必要とするため、設置場所を選ぶゲート。重厚なイメージで防犯性が高いのが特徴。自動で開閉するタイプもあります。開閉タイプが片開き、引違い、両開き、開戸付のが４つあります。</p></div>
                    </div>
                </div>

                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>カーポート</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>カーポートのみの販売・取り付け施工も承っております。下記も含め、各メーカーのカーポートよりお選び頂けます。2台以上の大きなサイズのカーポートも対応致します。まずは車庫のサイズやお持ちのお車の車種などをお伝え頂き併せてお気軽にご相談下さい。</p>
                    </div>
                </div>
                <div class="pk-grid-img">
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-8.jpg')}}" alt=""></div>
                        <div class="group-text">TOEX メジャーポートⅡ</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-9.jpg')}}" alt=""></div>
                        <div class="group-text">TOSTEM シグマポート</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-10.jpg')}}" alt=""></div>
                        <div class="group-text">YKK レイナポート</div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-11.jpg')}}" alt=""></div>
                        <div class="group-text">三協アルミ カムフィNex</div>
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>ガレージ</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>ガレージやビルトインガレージのシャッターの販売・取り付け施工も承っております。TOEXのスタイルコートや他メーカーのガレージも対応致します。シャッターは手動式・電動式などメーカーの商品によって仕様が異なりますので詳しくは弊社までお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>
                <div class="pk-grid-img">
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-12.jpg')}}" alt=""></div>
                    </div>
                    <div class="pk-img-group">
                        <div class="pk-img"><img src="{{asset('frontend/img/exam4/ps-img-13.jpg')}}" alt=""></div>
                    </div>
                </div>
                

                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>サイクルポート</span></div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam4/ps-img-14.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-content"><p>各メーカーのサイクルポートを取り揃えております。一戸建て住宅からマンションまで環境に併せたサイズや形状のものをご提案致します。サイクルキーパーなどのオプションもお気軽にお申し付け下さい。</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection