@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/contact.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="ct-contact-top">
        <div class="ct-contact-top-bg"></div>
        <div class="ct-contact-title">
            <div class="ct-contact-title-jp gothic font-40 color-2a">お問い合わせ</div>
            <div class="ct-contact-title-en gothic font-30 color-cb">Contact</div>
        </div>
        <div class="ct-contact-head-right">
            <img src="{{asset('frontend/img/contact/contact-top.png')}}" alt="">
        </div>
    </section>

    <section class="ct-contact-form">
        <form action="{{route('contact.sendMail')}}" method="post">
        @csrf
            <div class="ct-form-content-title">弊社へのお問い合わせはお電話または以下のフォームから承ります。</div>
            <div class="ct-form-content-phone">
                <div class="ct-form-content-top color-2a">
                    <div class="ct-top-left font-20">お電話でのお問い合わせ</div>
                    <div class="ct-top-right">
                        <div class="ct-phone-number gothic font-50">0465-39-2021</div>
                        <div class="ct-phone-period font-20">営業時間 10時 - 20時</div>
                    </div>
                </div>
                <div class="ct-form-content-btn">
                    <button class="ct-content-btn font-18" onclick="window.location.href='tel://0465-39-2021'">今電話する</button>
                </div>
            </div>
            <div class="ct-form-content">
                <div class="ct-form-top gothic color-2a font-18">
                    フォームからお問い合わせ<br>
                    すべての項目を入力した上で送信ボタンを押してください。
                </div>
                <div class="ct-form-input-style">
                    <div class="ct-form-input-text font-16">お名前<span class="font-14">必須</span></div>
                    <div class="ct-form-input-tag">
                        <input type="text" class="" placeholder="" name="name">
                    </div>
                </div>
                <div class="ct-form-input-style">
                    <div class="ct-form-input-text font-16">郵便番号<span class="font-14">必須</span></div>
                    <div class="ct-form-input-tag">
                        <input type="text" class="" placeholder="" name="post_code">
                    </div>
                </div>
                <div class="ct-form-input-style">
                    <div class="ct-form-input-text font-16">住所<span class="font-14">必須</span></div>
                    <div class="ct-form-input-tag">
                        <input type="text" class="" placeholder="" name="address">
                    </div>
                </div>
                <div class="ct-form-input-style">
                    <div class="ct-form-input-text font-16">お電話番号<span class="font-14">必須</span></div>
                    <div class="ct-form-input-tag">
                        <input type="text" class="" placeholder="" name="tel">
                    </div>
                </div>
                <div class="ct-form-input-style">
                    <div class="ct-form-input-text font-16">メールアドレス<span class="font-14">必須</span></div>
                    <div class="ct-form-input-tag">
                        <input type="text" class="" placeholder="" name="email">
                    </div>
                </div>
                <div class="ct-form-textarea-style">
                    <div class="ct-form-textarea-text color-2a font-16">お問い合わせ内容・ご希望条件など</div>
                    <div class="ct-form-textarea-tag">
                        <textarea  id="" cols="30" rows="10" name="body"></textarea>
                    </div>
                </div>
                <div class="ct-form-rule font-16 color-2a">個人情報保護方針に同意の上送信するボタンをクリックしてください</div>
                <div class="ct-form-foot-btn">
                    <button class="ct-form-foot-btn-st font-16">この内容で送信する</button>
                </div>
            </div>
        </form>
    </section>
@endsection
