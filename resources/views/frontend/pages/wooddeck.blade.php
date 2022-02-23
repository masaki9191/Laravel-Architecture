@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">ウッドデッキ外構施工例</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">ウッドデッキ外構施工例</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam2/exam2-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    <p>こちらのページでは当社のメインガーデンのご依頼でも一番多いウッドデッキの木材の種類・材ごとの特徴・施工例をご紹介します。ご要望やデザインによって適性の合う材を選びコストパフォーマンスの良いウッドデッキを設計施工致します。</p>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>ウッドデッキの木材の種類</span></div>
                </div>
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood1.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ウリン</h5></div>
                        <div class="wk-right-content"><p>東南アジア原産のウリン材はアイアンウッドと呼ばれているほど非常に硬く、重い木材です。耐久性に非常に優れており反り・曲り・ささくれも少ないのが特徴です。施工後しばらくアクが出ますが、何もしなくても時間が経過すれば消えます。硬いため加工が難しいのと他の材より費用が高いのが欠点ですが、耐用年数が長いのでコストパフォーマンスに優れメンテナンスもかからない木材です。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood2.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>イペ</h5></div>
                        <div class="wk-right-content"><p>ブラジル・ペルー等アマゾン川流域原産のイペ材は強度と耐久性に優れた木材です。ウリンと比べると施工後のアクが非常に少ないことです。そのため下に車を停めるデッキバルコニーなどに使用できます。価格が高いのが難点ですが、公共物での使用実績も非常に多く信頼できる木材です。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood3.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>人工樹脂</h5></div>
                        <div class="wk-right-content"><p>樹脂に木粉を配合して作られる人工材。何よりメンテナンスがかからないので手間を掛けなくて済みます。さらに色の経年変化があまりないため木材の様に銀白色になりにくいのが特徴です。カラーバリエーションも色々あります。欠点は天然木の様な風合いは無いことと、熱を吸収し表面温度が上がるため、夏場裸足で歩くことはできません。価格もウリン材と同じくらいか高価になります。例）LIXIL樹ら楽デッキ</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood4.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ジャンブジャンブ</h5></div>
                        <div class="wk-right-content"><p>オーストラリアや東南アジアが原産のジャンブ・ジャンブは耐久性に優れたハードウッドです。価格もウリンより安価でお手頃ですが、デメリットとして、木肌がザラザラしていて、ささくれが出ますので素足で歩くことは出来ません。当社では主にウリン材ではご予算的に間に合わなかった際などに代替品としておすすめしています。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood5.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>国産杉（注入材）</h5></div>
                        <div class="wk-right-content"><p>木目の美しさと柔軟性があり加工がしやすいのがメリット。スカイデッキを製作する際は国産杉の注入材が加工のしやすさ、アクを出さないことから適した材になります。耐用年数は約１０年とウリンや人工樹脂に比べると短いのがデメリットです。耐久性の面から最近ではあまりウッドデッキには使われなくなった木材です。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/wood6.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ウェスタンレッドシダー</h5></div>
                        <div class="wk-right-content"><p>ウエスタンレッドシダーは米杉と呼ばれていますがヒノキ科ネズコ属の樹木です。木目がきれいで軽く、加工しやすいのですが耐久性があまり無いので近年はあまりウッドデッキには使用されなくなっています。ホームセンターでも購入することができるためSPF材と共にDIYに利用されています。耐用年数は約10年と短いですが供給量が安定しているので価格がお手頃なのが魅力です。</p></div>
                    </div>
                </div>

                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>ウッドデッキに使用する木材をご紹介します。耐用年数や反り・曲り・ささくれが少ない、シロアリに強いなど各材によって特徴があります。良い材程高額になりますが、耐用年数を比較するとコストパフォーマンスに優れています。</p>
                    </div>
                </div>
                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>ウッドデッキの費用</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>
                            20m2のウッドデッキで考えた場合<br>
                            ・25,000円/m2（工賃込）の材（耐久年数約15年）<br>
                            　25,000×20=500,000<br>
                            ・50,000円/m2（工賃込）の材（耐久年数30年）<br>
                            　50,000×20=1,000,000<br>
                            30年をベースで考えると上の例では25,000円/m2（工賃込）の材は<br>
                            500,000（1式）×2（15年が2回）＝1,000,000　で50,000円/m2材と同じと思われるのですが…<br>
                            15年で朽ちるごとに新しいデッキを製作するので解体・撤去の費用がかかります。<br>
                            ウッドデッキの解体・撤去費用は業者により価格が違いますが1式30000円～となります。<br>
                            「20000円/m2（工賃込）の材が15年で朽ちた」場合ですと30年で考えると1回解体・撤去の費用が必要となります。<br>
                            勿論、お客様ご自身で解体・撤去を行われれば無料となりますがかなりの重労働です。<br>
                            また安い材では15年持たすためには塗装などのメンテナンスも必要となるため、そのような手間やランニングコストなども考えますと当社はイニシャルコストが高くなってもランニングコストや手間のかからない耐久性の高い材をおすすめしています。
                        </p>
                    </div>
                </div>
                
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>ウッドデッキのオプション部分</span></div>
                </div>
                <div class="garden-function-detail">
                    <div class="garden-function-content font-16 color-2a">
                        <p>ウッドデッキを設置し掃き出しからフラットにお庭に出られるようになってもお庭との高さがあるためステップが必要となる場合があります。また、ウッドデッキは庭より高さが出ているためお子様がいる場合安全のためにフェンスが必要となります。その他ベンチや室外機カバー、ハンモックを掛ける列柱や屋根やシェードを設置するためのパーゴラなども木材で造作が可能です。</p>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option1.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>パーゴラ</h5></div>
                        <div class="wk-right-content"><p>植物の蔓を絡ませ日陰を作る棚として知られていますが、近年ではテラスの屋根や日除けとして造作されています。メーカーの規制品でのテラス屋根や完全オリジナルのパーゴラまで対応しております。雨をしのげるポリカを入れたものや開閉式のシェードを設置した便利なものもあります。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option2.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>階段・ステップ</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキで掃出しからフラットに出られるようになると庭との高低差が出てきます。そのままですと庭に降りずらいため、高さに合わせた段数のデッキ階段が必要となります。ウッドデッキの形に合わせ、使いやすくデザインの面でも一体感のあるステップを造作します。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option3.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>フェンス</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキを設置するとほとんどの場合必要になるのがフェンスになります。デッキは高さがでるため落下防止のため、あるいは高さがでることで外から見られやすくなるので目隠しが必要になります。ウッドデッキと同じ素材、または木材以外のフェンスの組み合わせなどお客様のお好みに合わせた提案・対応しております。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option4.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ベンチ</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキをご家族や知人との団欒スペースとして活用する際にあると便利な腰かけベンチ。バーベキューをする際には腰かけるだけでなく、物を置く場所としても利用できます。また、鉢植えやガーデニンググッズなどを飾るのにも使えます。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option5.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>飾り棚</h5></div>
                        <div class="wk-right-content"><p>ガーデニングのお気に入りグッズなどをディスプレイする飾り棚を造作します。サインや鉢植え、オーナメントなどのサイズに合わせ設計致します。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option6.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>立水栓</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキの上に植栽の水遣りなどに使用する立水栓を設置することも可能です。メーカーの既製品だけでなく、ウリンや枕木などに蛇口を付け管を通した造作での対応もしています。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option7.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>ガーデンシンク</h5></div>
                        <div class="wk-right-content"><p>BBQやアウトドアキッチンにご活用頂けるガーデンシンク。立水栓とは違い植栽に水をあげるようではなく、料理や食器などを洗ったりするのに使いやすくなっています。こちらも造作でウッドデッキのスペースと一体感のある形で納めます。</p></div>
                    </div>
                </div>
                
                <div class="wooddeck-rating">
                    <div class="wk-left">
                        <img src="{{asset('frontend/img/exam2/option1.jpg')}}" alt="">
                    </div>
                    <div class="wk-right">
                        <div class="wk-right-title"><h5>その他</h5></div>
                        <div class="wk-right-content"><p>ウッドデッキと同じウリンなどの木材で物置・サーフボードラック・サイクルポートなど様々物を造作で制作します。</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection