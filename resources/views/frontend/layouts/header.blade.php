<section class="navbar pd-lr-10f">
    <div class="header-logo">
        <img src="{{asset('frontend/img/logo.png')}}" alt="">
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href = '/'">施工例
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content pd-lr-10f">
            <div class="column-row">
                <div class="column">
                    <h3>タイプ別</h3>
                    <a href="{{route('construction.list',['category'=>0])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-1-1.png')}}" alt=""></span>
                        <span class="column-text">オープン外構</span>
                    </a>
                    <a href="{{route('construction.list',['category'=>1])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-1-2.png')}}" alt=""></span>
                        <span class="column-text">セミオープン外構</span>
                    </a>
                </div>
                <div class="column">
                    <h3>年度別</h3>
                    <a href="{{route('construction.list',['year'=>2020])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-5-1.png')}}" alt=""></span>
                        <span class="column-text">2020年</span>
                    </a>
                    <a href="{{route('construction.list',['year'=>2019])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-5-2.png')}}" alt=""></span>
                        <span class="column-text">2019年</span>
                    </a>
                    <a href="{{route('construction.list',['year'=>2018])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-5-3.png')}}" alt=""></span>
                        <span class="column-text">2018年</span>
                    </a>
                    <a href="{{route('construction.list',['year'=>2017])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-5-4.png')}}" alt=""></span>
                        <span class="column-text">2017年</span>
                    </a>

                </div>
                <div class="column">
                    <h3>その他</h3>
                    <a href="{{route('gallery.list')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-5-5.png')}}" alt=""></span>
                        <span class="column-text">フォトギャラリー</span>
                    </a>
                    <a href="{{route('construction.list',['category'=>2])}}">
                        <span><img src="{{asset('frontend/img/menu/menu-1-3.png')}}" alt=""></span>
                        <span class="column-text">植栽</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">外構プラン
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content pd-lr-10f">
            <div class="column-row">
                <div class="column">
                    <h3></h3>
                    <a href="{{route('exterior')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-7.png')}}" alt=""></span>
                        <span class="column-text">外構スタイル</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('flow')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-1.png')}}" alt=""></span>
                        <span class="column-text">完成までの流れ</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('garden')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-3.png')}}" alt=""></span>
                        <span class="column-text">お庭の様式</span>
                    </a>
                </div>
            </div>
            <div class="column-row">
                <div class="column">
                    <h3></h3>
                    <a href="{{route('gardenlight')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-4.png')}}" alt=""></span>
                        <span class="column-text">庭のライティング（照明）</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('reform')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-6.png')}}" alt=""></span>
                        <span class="column-text">介護保険住宅改修リフォーム</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('reform_loan')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-2-2.png')}}" alt=""></span>
                        <span class="column-text">リフォームローンのご紹介</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='/res_city'">事業エリア
            <i class="fa fa-caret-down"></i>
        </button>
    </div>
    <div class="dropdown">
        <button class="dropbtn">会社概要
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content pd-lr-10f">
            <div class="column-row">
                <div class="column">
                    <h3></h3>
                    <a data-target="_blank" href="https://sudou-kouei.co.jp/company/history/">
                        <span><img src="{{asset('frontend/img/menu/menu-4-2.png')}}" alt=""></span>
                        <span class="column-text">会社概要</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('blog.list')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-4-8.png')}}" alt=""></span>
                        <span class="column-text">ブログ</span>
                    </a>
                </div>
                <div class="column">
                    <h3></h3>
                    <a href="{{route('contact')}}">
                        <span><img src="{{asset('frontend/img/menu/menu-4-7.png')}}" alt=""></span>
                        <span class="column-text">お問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-btn">
        <a href="{{route('contact')}}" class="contact-btn-st">お問</a>
    </div>
    <div class="sp-menu" onclick="arrowFunction()">
        <a class="navbar-toggler collapsed border-0" data-toggle="collapse" data-target="#navbarNav">
            <!-- these spans become the three lines -->
            <span> </span>
            <span> </span>
            <span> </span>
        </a>
    </div>

    <div id="myNav" class="overlay">
        <div class="overlay-content">
            <div class="sp-head-menu">施工例</div>
            <button class="collapsible">タイプ別</button>
            <div class="content">
                <a href="{{route('construction.list',['category'=>0])}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-1-1.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">オープン外構</div>
                </a>
                <a href="#" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-1-2.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">セミオープン外構</div>
                </a>
            </div>
            <button class="collapsible">年度別</button>
            <div class="content">
                <a href="{{route('construction.list',['year'=>2020])}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-5-1.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">2020年</div>
                </a>
                <a href="{{route('construction.list',['year'=>2019])}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-5-2.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">2019年</div>
                </a>
                <a href="{{route('construction.list',['year'=>2018])}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-5-3.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">2018年</div>
                </a>
                <a href="{{route('construction.list',['year'=>2017])}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-5-4.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">2017年</div>
                </a>
            </div>
            <button class="collapsible">その他</button>
            <div class="content">
                <a href="#" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-5-5.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">フォトギャラリー</div>
                </a>
                <a href="#" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-1-3.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">植栽</div>
                </a>
            </div>
            <div class="sp-head-menu">外構プラン</div>
            <button class="collapsible">外構プラン</button>
            <div class="content">
                <a href="{{route('exterior')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-7.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">外構スタイル</div>
                </a>
                <a href="{{route('gardenlight')}}" class="sp-menu-content">
                    <div href="{{route('gardenlight')}}" class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-4.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">庭のライティング（照明）</div>
                </a>
                <a href="{{route('flow')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-1.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">完成までの流れ</div>
                </a>
                <a href="{{route('reform')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-6.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">介護保険住宅改修リフォーム</div>
                </a>
                <a href="{{route('garden')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-3.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">お庭の様式</div>
                </a>
                <a href="{{route('reform_loan')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-2-2.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">リフォームローンのご紹介</div>
                </a>
            </div>
            <div class="sp-head-menu">事業エリア</div>
            <button class="collapsible" onclick="window.location.href='/res_city'">事業エリア</button>
            <div class="sp-head-menu">会社概要</div>
            <button class="collapsible">会社概要</button>
            <div class="content">
                <a href="https://sudou-kouei.co.jp/company/history/" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-4-2.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">会社概要</div>
                </a>
                <a href="{{route('blog.list')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-4-8.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">ブログ</div>
                </a>
                <a href="{{route('contact')}}" class="sp-menu-content">
                    <div class="sp-menu-img">
                        <img src="{{asset('frontend/img/menu/menu-4-7.png')}}" alt="">
                    </div>
                    <div class="sp-menu-text">お問い合わせ</div>
                </a>
            </div>
        </div>
    </div>
</section>
