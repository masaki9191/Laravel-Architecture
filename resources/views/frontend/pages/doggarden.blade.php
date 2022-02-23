@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">愛犬のためのお庭</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">愛犬のためのお庭</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam3/kv-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    <p>普段家の中で犬を飼われているお客様が多く、愛犬の運動不足やストレスに悩まされているご相談を受けることがあります。散歩に連れて行く時間や手間、また車の往来が多く危険性があるなどの理由から、できればお庭で自由に安全にワンちゃんを遊ばせたいというご要望の声を多く聞き、そのご希望を叶えるために、ヒールザガーデンではワンちゃんが快適に過ごせるお庭を日々研究しております。弊社オフィスにドッグカフェ（ヒールザガーデンカフェ&ドッグガーデン）をオープンしたのも、お客様に理想のお庭を提供できるよう、モデルガーデンとしての意味も込められています。</p>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>グランド面</span></div>
                </div>
                

                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>犬も人間と同じように歳をとると足腰が弱くなってきます。特に犬の場合は股関節に関する病気は発症頻度が高いため、お庭をプランする際、グランド面に使用する材料には一番重点を置いております。</p>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-1.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>コンクリート土間打ち、タイル貼り、石貼り</h5></div>
                        <div class="wk-right-content"><p>犬を飼われているお客様のお庭にこれらの固い材はあまり適していません。足腰を痛めるという理由もありますが、タイルや石の場合、濡れていると大変滑りやすくその際に股関節を痛める危険があります。どうしても使用しなければならない場合、お庭全体での使用はせず必要な個所だけに留めておきます。</p></div>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-2.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>砂利敷き</h5></div>
                        <div class="wk-right-content"><p>砂利や防犯砂利などは種類によりますが角（かど）がある物もあり、愛犬の肉球を痛める原因となります。どうしても砂利敷きを行わなければならない際は、お庭全体ですと逃げ場がないため一部で使用するなど使い方に配慮します。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-3.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>芝、人工芝</h5></div>
                        <div class="wk-right-content"><p>芝はクッション性がありワンちゃんの足にやさしく、多くのドッグランなどで使用されています。１つだけ短所を挙げると掘り返されてしまうことです。埋め戻せば問題ないのですが、犬によってはその頻度が多く、飼い主様のストレスになってしまうことがあります。掘り返しが気になる方には人工芝をおすすめしております。画像は当社で実際に使用している人工芝となります。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-4.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ウッドチップ</h5></div>
                        <div class="wk-right-content"><p>ウッドチップもドッグランで使用されている素材の１つです。経年変化で数年すると腐敗し土に戻ります。ワンちゃんの足にはとても優しいのですがシロアリを引き寄せる可能性もあるため一般住宅ではあまり使用しません。弊社のカフェのようにコンクリートなどハードな躯体で隔離されているスペースであれば問題無く使用できます。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-5.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ウッドデッキ</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキのお庭はワンちゃんの足に問題ない仕様です。また、足が土で汚れないのがメリットです。ただし、日陰が無いスペースにあるウッドデッキですと、夏場デッキ上の表面温度が高くなるため逃げ場もしくは日陰が必要となります。</p></div>
                    </div>
                </div>

                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>フェンス・塀</span></div>
                </div>
                <div class="dg-img">
                    <img src="{{asset('frontend/img/exam3/kv-top-1.jpg')}}" alt="">
                </div>
                <div class="dg-img-detail">
                    <span>&#10230;</span>
                    <span>高さ</span>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>もしお庭で愛犬をノーリードで安全に遊ばせようとするのであればフェンスの高さを考慮しなければなりません。個体差はありますが、トイプードルのような小型犬でも１ｍ以上の塀を飛び越える場合があります。犬の能力によるので絶対とは言い切れないのですが、おおよそ小型犬の場合、フェンス・塀は最低でも1.2ｍあれば安全です。中型犬であれば1.5ｍはあると安全に遊ばせられます。それでも中には飛び越えてしまう運動神経の良いワンちゃんがいます。その場合は長めのリードとリードをかけるポールやフックをお庭に設置します。</p>
                    </div>
                </div>
                
                <div class="dg-img-detail">
                    <span>&#10230;</span>
                    <span>隙間</span>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>注意しなければならないのは飛び越えだけでなく隙間から体をよじらせながら抜け出すケースです。格子状のフェンスを使用する場合は隙間を狭く抜けられないよう施工します。.2ｍあれば安全です。中型犬であれば1.5ｍはあると安全に遊ばせられます。それでも中には飛び越えてしまう運動神経の良いワンちゃんがいます。その場合は長めのリードとリードをかけるポールやフックをお庭に設置します。</p>
                    </div>
                </div>
                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>日陰</span></div>
                </div>
                <div class="dg-img">
                    <img src="{{asset('frontend/img/exam3/kv-top-2.jpg')}}" alt="">
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>犬はパンティング（あえぎ呼吸）によって唾液を蒸発させて熱を体の外に放出します。人間のように汗をかいて体温を下げることができないので熱を放出する能力は人より劣っています。屋外で長時間遊ばせる場合は、熱中症にならないようにするため適度な日陰が必要となります。.2ｍあれば安全です。中型犬であれば1.5ｍはあると安全に遊ばせられます。それでも中には飛び越えてしまう運動神経の良いワンちゃんがいます。その場合は長めのリードとリードをかけるポールやフックをお庭に設置します。</p>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-6.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>パーゴラ・シェード</h5></div>
                        <div class="wk-right-content"><p>外構やお庭で日陰を作ることを考えた場合、一番ポピュラーな物としてパーゴラがあります。つる性の植物を這わせたり、シェードを付ける事で大きな日陰を得ることができます。</p></div>
                    </div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam3/kv-7.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>植栽</h5></div>
                        <div class="wk-right-content"><p>お庭に植栽を植えることで木陰をつくります。植栽する庭木は常緑の広葉樹であれば、ある程度の広さの木陰を年中保つことができます。</p></div>
                    </div>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>立水栓・屋外シャワー</span></div>
                </div>
                <div class="dg-img">
                    <img src="{{asset('frontend/img/exam3/kv-top-3.jpg')}}" alt="">
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>庭木の水やりや洗車、夏場の打ち水だけでなく愛犬のお手入れにも利用できる立水栓。散歩から帰ってきたワンちゃんの足を洗ったり、シャワーを使えば体も洗うことができ大変便利です。.2ｍあれば安全です。中型犬であれば1.5ｍはあると安全に遊ばせられます。それでも中には飛び越えてしまう運動神経の良いワンちゃんがいます。その場合は長めのリードとリードをかけるポールやフックをお庭に設置します。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection