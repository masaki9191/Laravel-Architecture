@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">お庭や外構のリフォーム</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">お庭や外構のリフォーム</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam1/exam1-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    見た目を良くしたい、生活を便利にしたい、お手入れの手間がなるべく負担にならないようにするためなどお庭や外構のリフォームを考えるきっかけは様々です。その中でも大きく分けると２つの理由でご相談を頂きます。
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>既存のお庭や外構の老朽化</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>まず１つめは、既存のブロック・フェンス・ウッドデッキなどが耐用年数を超え老朽化した際などにご依頼頂くケースになります。特に傾斜地での土留めや擁壁などでは、コンクリートのひび割れやはがれが進み、コンクリートやブロックの下にある土が流れてしまい危険な状態になると、近隣の方に迷惑がかかるため、早めのリフォームをおすすめしております。表面だけの老朽化で済んでいる場合もありますが、下地のコンクリートに亀裂が入っている場合もありますので現地調査の上、状況に応じて補修・やり直しが必要などアドバイスいたします。</p>
                    </div>
                </div>
                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>二期工事のお庭や外構</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>２つめは新築外構の際に予算の都合上断念した外構部分や住んでみてから使い勝手が悪くご依頼を頂くケースです。主にウッドデッキ・カーポート・ガーデンルーム・テラス屋根などを既存のお庭や外構に合わせて新たに設置するリフォームになります。既存の建物やすでにあるフェンスやサッシの色などと違和感がないようにプランを考えます。「雑草が多いので土の部分をテラスにリフォームしたい」、「邸宅に面した道路や隣家からの視線が気になるので目隠しフェンスが欲しい」など、問題になっている箇所を直し、ストレスをなくしてガーデンライフを楽しめるリフォームを提案致します。</p>
                    </div>
                </div>

                <div class="re-title color-2a"><h2 class="font-30 gothic">お庭や外構のリフォーム例</h2></div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>実際にヒールザガーデンが設計・施工を請け負ったリフォームを例に上げて解説していきます。建物は高さのある擁壁の上にブラウンのブロック調のサイディングがしっかりとした印象の住宅です。相反して外構は全体的に老朽化が進みコンクリートのひび割れが目立つようになっていました。またせっかくの広いベランダが物干し以外に使われておらず、家族団らんのスペースにして欲しいとご要望を頂きました。</p>
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>エントランスゾーン</span></div>
                </div>
                <div class="re-img"><img src="{{asset('frontend/img/exam1/exam1-img.jpg')}}" alt=""></div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>【施工前】コンクリートの打ちっぱなしの塀は汚れが目立ってきてました。<br>
                            【施工後】ジョリパットの連波仕上げで白くきれいに仕上げました。手摺りも高級感のあるハンドメイドのロートアイアンに替えてエレガントなエントランスになりました。</p>
                    </div>
                </div>
                <div class="re-img"><img src="{{asset('frontend/img/exam1/exam1-img2.jpg')}}" alt=""></div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>【施工前】左右に植込みスペースがあり狭く、石貼りも素人のように雑な仕上がりでした。<br>
                            【施工後】階段も玄関前のタイルに色を合わせた自然石の乱貼りに変え、必要のない門扉も撤去し、アプローチの植栽も右側に寄せることで動線を広く使えるように仕様を改善しました。</p>
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>メインガーデン/サービスヤード</span></div>
                </div>
                <div class="re-img"><img src="{{asset('frontend/img/exam1/exam1-img3.jpg')}}" alt=""></div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>【施工前】メインは車庫上の広いベランダバルコニーです。こちらもコンクリートのひび割れが目立ち、色がくすんでいました。<br>
                            【施工後】洗濯物を干す以外あまり使われないスペースが、ガーデンルームに生まれ変わり一家団欒で楽しめるスペースになりました。またガーデンルームになったことで、雨の日でも洗濯物を干せるので利便性も向上しております。
                        </p>
                    </div>
                </div>
                <div class="re-img"><img src="{{asset('frontend/img/exam1/exam1-img4.jpg')}}" alt=""></div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>【施工前】一般的なサービスヤードとは違い少し広いスペースになりますが、リフォーム前は雑草が生えた手入れの行き届かない状態でした。<br>
                            【施工後】メインガーデンからつながるウッドデッキスペースにリフォームしました。植栽の手入れもみかんの木１本だけと手間もあまりかかりません。解放感のあるウッドデッキスペースはティータイムにもお子様のプレイルームにもなり、大活躍しています。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection