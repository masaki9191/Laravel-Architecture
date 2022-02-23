@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="garden-top-left">
                <div class="garden-top-title-right font-30 ">お庭の様式</div>
                <div class="garden-top-rotate-border"></div>
            </div>
            <div class="garden-top-left">
                <div class="garden-top-title-right font-30">お庭の様式</div>
                <div class="garden-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/garden/garden-top.png')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    外構（エクステリア）だけでなく、お庭の植栽のプランニングもしております。和風の庭園、イングリッシュガーデン（イギリス式庭園）、雑木のお庭など
                    建物や外構のデザインに合わせた雰囲気を演出します。また、生垣、アイストップ、シンボルツリーなどのスポットでの植栽も対応致します。
                </div>
                <div class="garden-plan">
                    <div class="garden-plan-text font-30 color-2a gothic"><span>植栽プラン</span></div>
                </div>
                <div class="garden-function font-20 color-70 gothic">機能面</div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">日差しの調整</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        夏場：強い日差しを遮ることで日陰を作り、葉からの蒸散が気化熱を奪うため夏は一帯の気温を下げる作用があります。<br>
                        冬場：落葉樹であれば冬は葉が落ちるため、陽射しを遮ることなく庭に招き入れます。また、夜間は地表からの熱放射を遮り、気温低下を穏やかなものに
                        します。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">プライバシーの保護</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        植栽を植えることで、道路や隣地からの視線を遮りプライバシーを守ることができます。フェンスやブロック塀などのハードなものよりも柔らかい印象を与えることができます。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">防風林</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        樹木や高生垣などで風除けの効果が得られます。特に海岸付近の住宅では風だけでなく砂や塩が風によって運ばれてくるのを防ぐ機能も重要となってきます。
                    </div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-title"><span>&#10230;</span><span class="font-18 color-70">土の流出防止効果</span></div>
                    <div class="garden-function-content font-16 color-2a">
                        樹木や地被類（グランドカバー）の根により土壌を押さえ、土砂や土壌の崩壊・流出を防止します。
                    </div>
                </div>
                <div class="garden-keep-mana">
                    <div class="garden-keep-mana-title gothic font-20 color-70">維持管理</div>
                    <div class="garden-keep-detail">
                        <div class="garden-keep-img">
                            <img src="{{asset('frontend/img/garden/function.png')}}" alt="">
                        </div>
                        <div class="garden-keep-content font-16 color-2a">
                            当社の植栽は１年間の枯れ保証がございます。その後の維持管理に関してはお客様の方で行って頂くようになりますが、
                            植栽の性質を把握頂きガーデニングを楽しんで頂けるようアドバイスや、また有料となりますがスタッフが訪問してお
                            手伝いをさせて頂きます。特に広いお庭で「とてもじゃないが家の者だけではできない」という場合には当社の専門ス
                            タッフで年間の「剪定」・「消毒」・「施肥」を計画的に行う対応もおこなっております。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection