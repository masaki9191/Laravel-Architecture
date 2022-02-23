<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="canonical" href="">
    <title></title>
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('frontend/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap&subset=japanese"
        rel="stylesheet">
    <!-- OGP -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image" content="">

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->

    <link href="{{asset('frontend/css/common.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/header.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/footer.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>

</head>

<body>
    @include('frontend.layouts.header')

    <section id="header-slider" class="header-slider">
        <img src="{{asset('frontend/img/top/top.jpeg')}}" style="width: 100%;" alt="">
    </section>
    <section id="news" class="news pd-lr-10f mt-70 color-2a">
        <div class="sp-new-title gothic">お知らせ</div>
        <div class="new-first"></div>
        <div class="new-part mt-40">
            <div class="new-left">
                <div class="new-notice-title gothic">お知らせ</div>
                <div class="new-notice-text mt-30">お知らせを掲載しています。</div>
                <a class="hover-btn mt-40" href="{{route('blog.list')}}">
                    <div class="new-notice-btn font-16 gothic">ニュースリリース一覧へ<span class="effect1"></span><span class="effect2"></span></div>
                </a>
            </div>
            <div class="new-right">
                <div class="new-right-head font-20">
                    <div class="head-part head-part-bt-bo">新着情報</div>
                </div>
                <div class="new-right-content">
                    @foreach($blogs as $blog)
                    <a class="content-part text-decoration-unset" href="{{route('blog.detail',$blog->id)}}">
                        <div class="content-part-year color-8b font-14">{{ date('Y', strtotime($blog->created_at )) }}年{{ date('m', strtotime($blog->created_at )) }}月{{ date('d', strtotime($blog->created_at )) }}日</div>
                        <div class="content-part-text font-18 color-2a">{{ $blog->title }}</div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="intro-part" class="mt-70 pd-lr-10f gothic">
        <div class="intro-part-title font-40">エクステリアや庭のご相談</div>
        <div class="intro-part-content mt-70">
            <div class="intro-img-column">
                <a href="{{route('remodeling')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-1.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">エクステリアリフォーム<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>

                </a>
                <a href="{{route('wooddeck')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-2.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">ウッドデッキ<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>
                </a>
                <a href="{{route('doggarden')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-3.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">愛犬用の庭<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>
                </a>
            </div>
            <div class="intro-img-column mt-70">
                <a href="{{route('parking')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-4.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">駐車スペース・カーポート<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>
                </a>
                <a href="{{route('fence')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-5.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">目隠しフェンス・塀<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>
                </a>
                <a href="{{route('lifestyle')}}" class="column-content">
                    <img src="{{asset('frontend/img/top/intro-6.png')}}" alt="">
                    <div class="column-content-show color-70 font-16">新築外構<br>
                        <span class="column-content-contact color-9a font-14">詳細へ<span class="column-btn-right"></span></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="future-part mt-100">
        <div class="vision-sec">
            <img src="{{asset('frontend/img/top/vision.png')}}" alt="">
        </div>
        <div class="vision-text font-20">
            <div class="vision-left mt-270 color-9a">
                <div class="text-rotate gothic font-14"> MISSION</div>
                <div class="rotate-border"></div>
            </div>
            <div class="vision-text-content">
                「想いを育てる、住まいづくり」をモットーに。<br>
                これまでずっと私たちは「快適な家づくりをす<br>
                ることによって地域社会へ貢献できる。」と、<br>
                この仕事を誇りに営業してまいりました。
            </div>
            <div class="vision-left mt-20 color-9a">
                <div class="text-rotate-right gothic font-14"> MISSION</div>
                <div class="rotate-border"></div>
            </div>
        </div>
        <div class="vision-sec-right">
            <img src="{{asset('frontend/img/top/vision-bg.png')}}" alt="">
        </div>
    </section>

    <section id="mission-part" class="mission-part mt-mision-200">
        <div class="mission-text font-20">
            <div class="mission-left color-9a">
                <div class="text-rotate mt-20 gothic font-14"> VISION</div>
                <div class="rotate-border"></div>
            </div>
            <div class="mission-text-content">
                <span class="mission-text-title">「妥協や手抜きをしない」<br>
                「目に見えない部分もこだわる」</span><br>
                <span class="mission-text-title-be">
                    安全・品質への高い意識と、この街を支える<br>
                    一端を担っているとの自覚を持ち、<br>
                    今後とも社員一同精進してまいります。
                </span>

            </div>
            <div class="mission-left color-9a">
                <div class="text-rotate-right mt-270 gothic font-14"> VISION</div>
                <div class="rotate-border"></div>
            </div>
        </div>
        <div class="mission-img">
            <img src="{{asset('frontend/img/top/mission.png')}}" alt="">
        </div>
        <div class="mission-bg">
            <img src="{{asset('frontend/img/top/mission-bg.png')}}" alt="">
        </div>
    </section>

    <section class="future-part sp-mt">
        <div class="vision-sec">
            <img src="{{asset('frontend/img/top/compare.png')}}" alt="">
        </div>
        <div class="vision-text font-20">
            <div class="vision-left mt-270 color-9a">
                <div class="text-rotate gothic font-14"> COMPARE</div>
                <div class="rotate-border"></div>
            </div>
            <div class="add-mission-text">
                <div class="am-title">ハウスメーカー</div>
                <div class="am-title-content">
                    下請けの工事代＋ハウスメーカーのマージンが乗るので<br>
                    比較的高くなる。<br>
                </div>
                <div class="am-title">弊社</div>
                <div class="am-title">
                    問屋直接仕入れができるため、必然的に見積価格も安くなる<br>
                    当社は施工会社であるため、不必要な余白がありません。
                </div>
            </div>
            <div class="vision-left mt-20 color-9a">
                <div class="text-rotate-right gothic font-14"> COMPARE</div>
                <div class="rotate-border"></div>
            </div>
        </div>
        <div class="vision-sec-right">
            <img src="{{asset('frontend/img/top/compare-bg.png')}}" alt="">
        </div>
    </section>

    <section class="slider-part mt-slider-200">
        <div class="slider-bg"></div>
        <div class="slider-text mt-70">
            <div class="slider-title font-40 color-70 gothic">最近の実績</div>
            <div class="slider-text-content font-14">
                コンサルタント、設計者、施工会社など、つくる人の顔が見えて意向を直接伝えることができる。<br>
                お客さまの想いにそれぞれの立場で真摯に応える、透明性のある「つくる」プロセスを目指します。
            </div>
        </div>
        <div class="force-height"></div>
        <div class="flickity-gallery">
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
            <div class="gallery-cell"><img src="{{asset('frontend/img/top/slider.png')}}"></div>
        </div>
    </section>

    <section class="company-intro mt-100">
        <div class="company-intro-title font-40 color-4b mb-100 gothic">関連会社</div>
        <div class="company-group-grid pd-lr-10f">
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company1.png')}}" alt=""></div>
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company2.png')}}" alt=""></div>
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company3.png')}}" alt=""></div>
        </div>
        <div class="company-group-grid pd-lr-10f">
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company4.png')}}" alt=""></div>
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company5.png')}}" alt=""></div>
            <div class="company-group-column"><img src="{{asset('frontend/img/top/company6.png')}}" alt=""></div>
        </div>
    </section>

    <section class="flow-part mt-100">
        <div class="company-intro-title font-40 color-4b mb-100 gothic">サービスの流れ</div>
        <div class="flow-content">
            <!-- <img src="{{asset('frontend/img/top/flow-bg.png')}}" alt=""> -->
            <div class="flow-content-show pd-lr-10f">
                <div class="flow-content-show-step color-white font-25">
                    <div class="show-step-column">
                        <div class="show-step-column-num">01</div>
                        <div class="show-step-column-text">お問い合わせ</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">02</div>
                        <div class="show-step-column-text">お打合せ／現地調査</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">03</div>
                        <div class="show-step-column-text">プラン／提案</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">04</div>
                        <div class="show-step-column-text">ご契約</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">05</div>
                        <div class="show-step-column-text">着工</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">06</div>
                        <div class="show-step-column-text">お引渡し</div>
                    </div>
                    <div class="show-step-column">
                        <div class="show-step-column-num">07</div>
                        <div class="show-step-column-text">アフターフォロー</div>
                    </div>
                </div>
                <div class="flow-content-show-btn">
                    <button class="flow-connect-btn" onclick="window.location.href='/flow'">詳細を見る</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-infomation pd-left-10f mt-100">
        <div class="contact-info-img">
            <img src="{{asset('frontend/img/top/contact-info.jpg')}}" class="pc-only" alt="">
            <img src="{{asset('frontend/img/top/sp-contact-info.png')}}" class="sp-only" alt="">
        </div>
        <div class="contact-content mt-100">
            <div class="contact-content-right">
                <div>1&nbsp;<span>ご希望の条件をヒアリング・整理</span></div>
                <div>2&nbsp;<span>ご希望に合わせた住まいの選択肢を紹介（新築/中古/賃貸問わず）</span></div>
                <div>3&nbsp;<span>予算の組み立て方、コストバランスなどをご説明</span></div>
                <div>4&nbsp;<span>良質な土地、物件の見極め方・見るべきポイントについて</span></div>
                <div>5&nbsp;<span>お客様に合わせた物件情報（宅建業者専門サイト情報）のご紹介</span></div>
                <div>6&nbsp;<span>リノベーションの過去事例のご紹介</span></div>
                <div>7&nbsp;<span>耐震性や耐久性/税制の優遇措置/住宅ローンなどQ&A</span></div>
                <div>etc…</div>
            </div>
        </div>
    </section>

    <section class="contact-faq-part pd-lr-10f mt-100">
        <form action="{{route('contact.sendMail')}}" method="post">
            @csrf
            <div class="contact-form">
                <div class="contact-form-head">
                    <div class="contact-form-head-left color-4b font-40">
                        <span>お問い合わせ・無料相談</span>
                        <span class="contact-line">/</span>
                        <span>contact</span>
                    </div>
                    <div class="contact-form-head-right color-4b">
                        <div class="faq-text font-14">お電話でもお気軽に</div>
                        <div class="faq-phone font-25">0465-39-2021</div>
                        <div class="faq-text font-14">営業時間 10時 - 20時</div>
                    </div>
                </div>
                <div class="contact-form-content">
                    <div class="form-content-column mt-50">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">お名前</span><span class="form-need font-14 color-eb">必須</span>
                        </div>
                        <div class="form-content-column-tag">
                            <input type="text" class="form-tag-set" placeholder="例) 馬場　総一路" name="name">
                        </div>
                    </div>
                    <div class="form-content-column mt-40">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">郵便番号</span><span class="form-need font-14 color-eb">必須</span>
                        </div>
                        <div class="form-content-column-tag">
                            <input type="text" class="form-tag-set" placeholder="例) 123-4567" name="post_code">
                        </div>
                    </div>
                    <div class="form-content-column mt-40">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">住所</span><span class="form-need font-14 color-eb">必須</span>
                        </div>
                        <div class="form-content-column-tag">
                            <input type="text" class="form-tag-set" placeholder="例) 愛知県名古屋市○○" name="address">
                        </div>
                    </div>

                    <div class="form-content-column mt-40">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">お電話番号</span><span class="form-need font-14 color-eb">必須</span>
                        </div>
                        <div class="form-content-column-tag">
                            <input type="text" class="form-tag-set" placeholder="" name="tel">
                        </div>
                    </div>
                    <div class="form-content-column mt-40">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">メールアドレス</span><span class="form-need font-14 color-eb">必須</span>
                        </div>
                        <div class="form-content-column-tag">
                            <input type="text" class="form-tag-set" placeholder="yosuke8509@icloud.com" name="email">
                        </div>
                    </div>
                    <div class="form-content-column mt-40">
                        <div class="form-content-column-title">
                            <span class="form-title color-70 font-16">お問い合わせ内容・ご希望条件など</span>
                        </div>
                        <div class="form-content-column-tag">
                            <textarea name="body" id="" cols="30" rows="6" placeholder="聞きたいことや、ご希望条件（予算、希望エリア、リノベーション有無）などありましたらご記入ください。"></textarea>
                        </div>
                    </div>
                </div>
                <div class="contact-rule color-4b font-16">個人情報保護方針に同意の上送信するボタンをクリックしてください</div>
                <div class="contact-form-btn mt-50">
                    <button class="contact-btn-set font-16">この内容で送信する</button>
                </div>
            </div>
        </form>
    </section>
    <section class="footer-part">
        <div class="footer-part-content pd-lr-10f">
            <div class="footer-add"></div>
            <div class="footer-part-head">
                <div class="footer-part-logo">
                    <img src="{{asset('frontend/img/foot-logo.png')}}" alt="">
                </div>
                <div class="footer-part-path font-16 gothic">有限会社スドウ工営〒250-0211　神奈川県小田原市鬼柳</div>
            </div>
            <div class="footer-part-links font-16">
                <div class="part-links-group">
                    <div href="" class="part-links-column">施工例</div>
                    <a href="{{route('construction.list',['category'=>0])}}" class="part-links-column">オープン外構</a>
                    <a href="{{route('construction.list',['category'=>1])}}" class="part-links-column">セミオープン外構</a>
                    <a href="{{route('construction.list',['category'=>2])}}" class="part-links-column">植栽</a>
                </div>
                <div class="part-links-group">
                    <div href="" class="part-links-column">外構プラン</div>
                    <a href="{{route('exterior')}}" class="part-links-column">外構スタイル</a>
                    <a href="{{route('garden')}}" class="part-links-column">お庭の様式</a>
                    <a href="{{route('flow')}}"" class="part-links-column">完成までの流れ</a>
                    <a href="{{route('gardenlight')}}" class="part-links-column">庭のライティング（照明）</a>
                    <a href="{{route('reform')}}" class="part-links-column">介護保険住宅改修リフォーム</a>
                    <a href="{{route('reform_loan')}}" class="part-links-column">リフォームローンのご紹介</a>
                </div>
                <div class="part-links-group">
                    <a href="{{route('res_city')}}" class="part-links-column">事業エリア</a>
                </div>
                <div class="part-links-group">
                    <div href="" class="part-links-column">会社概要</div>
                    <a href="{{route('company_intro')}}" class="part-links-column">会社概要</a>
                    <a href="{{route('blog.list')}}" class="part-links-column">ブログ</a>
                    <a href="{{route('contact')}}" class="part-links-column">お問い合わせ</a>
                </div>
            </div>
            <div class="footer-end color-white font-16">
                <div class="footer-end-right">Copyright© 有限会社スドウ工営</div>
            </div>
        </div>
    </section>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                content.style.maxHeight = null;
                } else {
                content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
        $(document).ready(function(){
            $('.flickity-gallery').flickity({
                // options
                autoPlay: true,
                cellAlign: 'center',
                contain: true,
                freeScroll: true,
                wrapAround: true
            });
        });
    </script>

    <script>
        $('.new-notice-btn').click(function() {
            window.location.href = '/noticelist'
        })
    </script>
</body>

</html>
