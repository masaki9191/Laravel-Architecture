@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/company.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section id="cm-top" class="cm-top-part">
        <div class="cm-top-img">
            <img src="{{asset('frontend/img/company/company-top.png')}}" alt="">
            <div class="cm-top-title gothic">
                <div class="cm-top-jp font-40 color-white">会社案内</div>
                <div class="cm-top-en font-25 color-white">COMPANY</div>
            </div>
        </div>
    </section>

    <section class="cm-top-1 pd-lr-10f">
        <div class="cm-top-1-left">
            <div class="top-1-left-head font-30 color-2a">スタッフの紹介</div>
            <div class="staff-name"><h3><span class="font-18 color-2a">三島 進</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-1.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">お住まいに家族が集い、温かな家庭を築いていけるように、お客様の住まいつくりのお手伝いをさせていただきたいと思っています！</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・下水道排水設備責任技術者<br>
                        ・第２種電気工事士<br>
                        ・給水装置工事主任技術者<br>
                        ・2級管工事施工管理技士 他</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">鈴木 幸一</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-2.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">リフォームから新築までお客様の目線とプロの視線で責任のあるより良い提案を致します。お客様の理想をカタチに。迅速対応！丁寧対応！住宅設備のことならなんでもご相談ください。</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・車両系建設機械運転技能<br>
                        ・小型移動式クレーン運転技能<br>
                        ・第１種内管工事士<br>
                        ・活管工事、他
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">齋藤 英滋</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-3.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">地域の住宅設備パートナーとしての責任を自覚して、日々仕事に取り組んでいます。お互いが納得のいくように、努力と真心をこめた対応をします！</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・車両系建設機械運転技能<br>
                        ・小型移動式クレーン運転技能<br>
                        ・下水道排水設備責任技術者<br>
                        ・ガス可とう管接続工事監督者他
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">山城 克哲</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-4.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">全てのお客様から感謝されるように仕事をしています！常に前向きな姿勢をもち、新しい工法などを取り入れて、どんな場合でも可能性を模索しながら頑張っています！</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">及川 星明</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-5.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">丁寧な対応を心がけています。お客様ご家族の幸せを一つ一つ積み上げて、満足いただける仕事を多くしていきたいです。</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・車両系建設機械運転技能<br>
                        ・本支管工事士<br>
                        ・高所作業車技能<br>
                        ・アーク溶接<br>
                        ・低圧電気取扱業務、他
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">深澤 友也</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-6.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">現場やお客様に対して気を配りながら真面目にコツコツ取り組んでいます。お客様に満足していただけた時に見れる笑顔が、仕事をする意味であり、僕の生きる意義です。</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・第２種電気工事士<br>
                        ・給水装置工事主任技術者<br>
                        ・高所作業車技能<br>
                        ・下水道排水設備責任技術者
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">須藤 弘志</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-7.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">お客様の心から喜んで頂けた時の笑顔が、仕事の糧となります。お客様と共に喜べることを日々の目標とし、精一杯努めて参ります。</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">武藤 博喜</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-8.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">この道３５年！水道工事・ガス工事をメインに工事をしてきました。これからも地域の皆様から信頼されるように確実で丁寧な工事を心がけていきたいです。</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・２級土木施工管理技士<br>
                        ・ガス本支管工事士、他
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">小柳 幸雄</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-9.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">これまで、大小の現場問わず多くの現場を経験してきました。この経験を活かし、お客様に安心で心地よい生活インフラをご提供していきたいです。</div>
                    <div class="top-1-com-text font-14 color-2a"><br>
                        ・１級土木施工管理技士<br>
                        ・１級管工事施工管理技士、他
                    </div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">櫻井 諄忠</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-10.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">屋内外の配管工事の現場から、道路工事・土木工事まで幅広い工事を行なっています。多くの経験を積んで、１人でも多くのお客様に「快適な生活」をご提案・ご提供していけるように、これからも頑張ります！</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">片倉 翔太</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-11.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">主に屋内工事を行なっており、お客様のご自宅に伺うことが多く、常に「素早い解決」と「確実な提案」を意識しております。お客様のお困りごとをいち早く解決し、お客様の理想を現実にすることが私の使命だと考えております！</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">須藤 広美</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-12.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">本社営業所・成田事業所で、金銭関係の事務管理をしています。成田事業所の近くに来た場合、是非いらしてください！</div>
                </div>
            </div>

            <div class="staff-name"><h3><span class="font-18 color-2a">須藤 洋介</span></h3></div>
            <div class="top-1-left-content">
                <div class="top-1-left-content-img">
                    <img src="{{asset('frontend/img/staff/staff-13.png')}}" alt="">
                </div>
                <div class="top-1-left-content-text">
                    <div class="top-1-com-text font-16 color-2a">弊社のHP管理や公共事業の入札・申請を主に行っています。お客様・取引企業様をはじめとする利害関係者全ての人が満足できるように取り組みます！</div>
                </div>
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection