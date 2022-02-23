@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">塀・フェンス外構施工例</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">塀・フェンス外構施工例</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam5/fence-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    <p>当社のエクステリア（外構）・ガーデン（お庭）の塀・フェンス外構施工例を紹介します。塀・フェンスの施工も含まれている外構プランの一覧となります。一般的なブロック2段積みの上にメーカー製のアルミメッシュのフェンスの施工からウリン材を使ったウッドフェンスやオリジナルのロートアイアンの塀・フェンスまで邸宅の雰囲気やご希望に合わせた塀・フェンスを施工しています。目隠しのためのフェンスや一式のプランではない塀・フェンスだけの設計施工のご依頼も承ります。&ドッグガーデン）をオープンしたのも、お客様に理想のお庭を提供できるよう、モデルガーデンとしての意味も込められています。</p>
                </div>

                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>主な塀・フェンスの種類</span></div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam5/fen-img-1.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>アルミメッシュフェンス</h5></div>
                        <div class="wk-right-content"><p>隣地境界に使用されるブロック積みの上に設置する簡素なフェンス。メッシュ状の構造のため風通しと採光に適しているが目隠しの効果は期待できません。また、落下防止としての利用は強度が弱く不向きとなります。</p></div>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam5/fen-img-2.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ボーダーフェンス</h5></div>
                        <div class="wk-right-content"><p>支柱に横板を張っていく一般的な目隠しフェンスになります。木製や樹脂製、アルミなど素材が選べるため、建物やお庭の雰囲気に合わせやすいのが特徴です。板の間隔や枚数によって予算を調整しやすいのもメリットとなります。アルミメッシュに比べると採光性、通風性に劣ります。特に風が強いと隙間を通る音や金属性のフェンスの場合共鳴音がします。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam5/fen-img-3.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ルーバーフェンス</h5></div>
                        <div class="wk-right-content"><p>基本ボーダーフェンスと同じ構造ですが、羽板に角度をつけることで隙間を埋めながら通気を確保することができます。そのためボーダーとは違い外から完全に見えない目隠しが可能となります。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam5/fen-img-4.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>立格子フェンス</h5></div>
                        <div class="wk-right-content"><p>列柱を立ててフェンス状にしたものや胴縁に縦にフェンスを張っていくタイプもあります。歩行者からは中が見えずらいのですが、立ち止まっている人からはフェンスの間隔によっては見えやすくなります。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam5/fen-img-5.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ブロック塀</h5></div>
                        <div class="wk-right-content"><p>コンクリートブロック（CB)を積み重ねて造る塀。仕上がりのままだと味気ないが、ジョリパットや自然石を張り装飾をすることで見栄えが良くなります。スリットを入れたり、曲線にするなど施工の自由度が高いの特徴。</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection