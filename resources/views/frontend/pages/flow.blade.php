@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/company.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="ct-contact-top">
        <div class="ct-contact-top-bg"></div>
        <div class="ct-contact-title">
            <div class="ct-contact-title-jp gothic font-40 color-2a">完成までの流れ</div>
            <div class="ct-contact-title-en gothic font-30 color-cb">Flow</div>
        </div>
        <div class="ct-contact-head-right">
            <img src="{{asset('frontend/img/flow/flow-top.png')}}" alt="">
        </div>
        <div class="company-pr-intro pd-lr-10f">
            <div class="company-pr-intro-text font-18 color-2a">
                有限会社スドウ工営は、お客様に「快適さと癒し」をご提案するためにお問い合わせから施工までのプロセス（流れ）をご理解頂きご納得・ご満足頂けることに努めております。 <br>
                ホームページからお問い合わせいただいてご予約の上でご来店いただくこともできます。<br>
                勿論、お客様のお家での打ち合わせも可能です。
            </div>
            <div class="alone-flow-part">
                <div class="alone-flow-group">
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">1.お問い合わせ</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                まずはメールフォームまたはフリーダイヤル(0465-39-2021)から お気軽にお問い合わせください。新築の引き渡しに合わせた外構工事のご相談やお庭のリフォーム、メンテナンスや植栽などのご相談も承ります。<br>
                                詳しいご相談やプランのご依頼、お見積りが必要な場合は、ご都合の宜しい日時とご希望打ち合わせ場所（当店orお客様宅）をお伝え頂き打ち合わせをご予約ください。
                            </div>
                        </div>
                    </div>
                    <div class="flow-icon"></div>
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">2.お打合せ現地調査</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                施工例のCADイメージや写真を見ていただきながらヒアリングを行います。<br>
                                具体的なイメージがあまり決まっていないお客様にも 分かりやすく解説をしご相談やお悩みをお聞かせ頂いております。ご来店でのお打合せの場合、下記の図面をご持参頂けるとお打合せがスムーズになります。<br>
                                ・平面図　・立面図　・求積図　・配置図<br>
                                ・現状のお庭の写真（リフォームの場合）
                            </div>
                        </div>
                    </div>
                    <div class="flow-icon"></div>
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">3.プラン／提案</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                お客様のご要望と現地調査、預かりました図面を基に設計、プランを作成致します。まずは元になるファーストプランを設計図・３DのCAD図面で作成し、デザインや機能面を考えながら方向性を決めていきます。<br>
                                プランのパターンごとに概算をお伝えし、デザインとご予算のバランスが決まりましたら最終プランと正式なお見積りを作成します。 <br>
                                ※現地調査からファーストプランが完成するまで約2週間程かかります
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alone-flow-part-right">
                    <img src="{{asset('frontend/img/flow/flow1.png')}}" alt="">
                    <div class="free-event-text font-30">
                        無&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;料
                    </div>
                </div>
            </div>
            <div class="alone-flow-group-1">
                <div class="flow-icon"></div>
            </div>
            <div class="alone-flow-part">
                <div class="alone-flow-group">
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">4.ご契約</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                詳細な仕様の決定 、最終プラン図面の作成に入ります。最終プランの内容にご納得いただけた場合には、契約書を作成しご契約 に進ませて頂きます。
                            </div>
                        </div>
                    </div>
                    <div class="flow-icon"></div>
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">5.着工</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                事前に近隣への挨拶をしっかり行った上で工事を開始致します。下地処理・各部位をそれぞれに適した工法・工程に沿 って 施工を行います。担当デザイナーは、必ず施工の要所要所に立ち合い、工程表の基に、定期的に工事写真を撮影し、保存管理をしていきます。
                            </div>
                        </div>
                    </div>
                    <div class="flow-icon"></div>
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">6.お引渡し</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                施工後デザイナーと工事担当者にて最終チェックいたします。 図面どうりのイメージに仕上っているか、確認いたします。お客様にも確認していただき、問題が無ければ、完了確認書にご捺印頂きお引渡しとなります。
                            </div>
                        </div>
                    </div>
                    <div class="flow-icon"></div>
                    <div class="alone-flow-part-left">
                        <div class="trapezoid-left">
                            <div class="trapezoid-left-text">7.アフターフォロー</div>
                        </div>
                        <div class="trapezoid-right">
                            <div class="trapezoid-right-text">
                                施工後のアフターフォローやメンテナンスもお任せください。弊社が手掛けたデザイン・施工に関しましては責任を持ってフォロー致します。工事終了後も末長くおつきあい頂けますよう何でもお気軽にご相談ください。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alone-flow-part-right">
                    <img src="{{asset('frontend/img/flow/flow2.png')}}" alt="">
                    <div class="free-event-text font-30">
                        全&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;額
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection