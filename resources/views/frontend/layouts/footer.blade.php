
<section class="contact-infomation pd-left-10f mt-100">
    <div class="contact-info-img">
        <img src="{{asset('frontend/img/top/contact-info.jpg')}}"  class="pc-only" alt="">
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

<section class="call-connect-sec">
    <div class="call-content">
        <div class="call-content-left color-2a">
            <div class="call-title font-30 gothic">お問い合わせ</div>
            <div class="call-title-en font-20 gothic">Contact</div>
            <div class="call-border"></div>
            <div class="call-title-content">
                ご相談・ご質問等ございましたら、<br>
                お気軽にお問い合わせください。
            </div>
        </div>
        <div class="call-content-right">
            <div class="call-number">
                <img src="{{asset('frontend/img/phone.png')}}" alt="">
                <span class="phone-number gothic">0465-39-2021</span>
            </div>
            <div class="call-time-period gothic">営業時間 10時 - 20時</div>
            <div class="call-btn">
                <button class="call-btn-style color-white font-18" onclick="window.location.href = 'tel://0465-39-2021'">今電話する</button>
            </div>
        </div>
    </div>
</section>

<section class="footer-part">
    <div class="footer-part-content pd-lr-10f">
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
                <a href="{{route('flow')}}" class="part-links-column">完成までの流れ</a>
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
</script>
<script>
    $('.header-logo').click(function() {
        window.location.href = '{{route('top')}}';
    });
</script>
