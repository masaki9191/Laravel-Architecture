@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="garden-top-left">
                <div class="garden-top-title-right font-30 ">外構スタイル</div>
                <div class="garden-top-rotate-border"></div>
            </div>
            <div class="garden-top-left">
                <div class="garden-top-title-right font-30">外構スタイル</div>
                <div class="garden-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exterior/exterior-top.png')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    外構スタイルには大きく分けて以下の３つのタイプがあります。隣接する住宅や周囲の環境や、擁壁や地下車庫の有無など家のデザインによっても選択できるタイプが変わってきます。どのスタイルがお好みか、また予算的制限や土地・建物との関係上施工が可能かどうかなど当社デザイナーにご相談ください。
                </div>
                
            </div>
        </div>
    </section>

    <section class="exterior-detail">
        <div class="exterior-detail-1">
            <div class="left-img">
                <img src="{{asset('frontend/img/exterior/exterior-1.png')}}" alt="">
            </div>
            <div class="right-content">
                <div class="right-content-title font-25 gothic color-2a">セミオープン外構</div>
                <div class="right-content-part font-16 color-2a">
                    <div class="right-content-part-left">
                        <div class="right-content-part-text font-16 color-9a">セミオープン外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                    <div class="right-content-part-md font-16 color-2a">
                        セミオープンタイプ（セミクローズタイプ）は、オープンとクローズの中間の特長をもった外構スタイルです。駐車スペース以外を門柱・門扉、フェンス、生垣などで囲む外構で、目立たない門扉を設置し、低めの堀やフェンスなどで周囲からの視線を適度に防ぎつつ、開放感を持たせたスタイルです。ただし、駐車スペースがオープンになるため、門まわりから駐車スペースへのつながりを配慮したデザインが求められます。
                    </div>
                    <div class="right-content-part-left">
                        <div class="right-content-part-text font-16 color-9a">セミオープン外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="exterior-detail-2">
            <div class="right-img">
                <img src="{{asset('frontend/img/exterior/esterior-2.png')}}" alt="">
            </div>
            <div class="left-content">
                <div class="left-content-title font-25 gothic color-2a">クローズ外構</div>
                <div class="left-content-part">
                    <div class="left-content-part-left">
                        <div class="left-content-part-text font-16 color-9a">クローズ外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                    <div class="left-content-part-md font-16 color-2a">
                        クローズ外構は敷地の外周をすべて囲う、オーソドックスなスタイル。<br>門柱、門扉、フェンス・塀、生垣などを設け外からの視線や侵入を防ぎます。門周りのしつらえにバリエーションがあり、門扉・門袖・門柱・フェンス等のコーディネートの組み合わせで、多彩なファサード空間を演出できる。ハードなイメージが強い分、植栽や鉢植えなどをポイントで入れるのが好ましい外構スタイルです。
                    </div>
                    <div class="left-content-part-left">
                        <div class="left-content-part-text font-16 color-9a">クローズ外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="exterior-detail-1">
            <div class="left-img">
                <img src="{{asset('frontend/img/exterior/exterior-1.png')}}" alt="">
            </div>
            <div class="right-content">
                <div class="right-content-title font-25 gothic color-2a">オープン外構</div>
                <div class="right-content-part font-16 color-2a">
                    <div class="right-content-part-left">
                        <div class="right-content-part-text font-16 color-9a">オープン外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                    <div class="right-content-part-md font-16 color-2a">
                        欧米でよく見られるスタイルですが、日本でも近年は新築の分譲住宅で一般的にオープン外構が主流となっております。門扉や塀、カーゲートなどで敷地を囲わないデザインで、道路に面して開放的な外構スタイルとなります。街並みに調和するように、建物のシルエットを活かしたファサード空間が演出できるので、アプローチのデザインでイメージが大きく変わります。開放的で一番土地を有効的に使える外構スタイルです。デメリットはプライバシーの確保と防犯に注意が必要となることです。<br>
                        ※プライバシー例：植栽などで外からの視線を防ぐ。外出時に埋め込みポールを立ち上げる。<br>
                        ※防犯例：勝手口につづくアプローチに防犯砂利を使用する。夜間の人感センサーライト。
                    </div>
                    <div class="right-content-part-left">
                        <div class="right-content-part-text font-16 color-9a">オープン外構</div>
                        <div class="right-content-rotate-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection