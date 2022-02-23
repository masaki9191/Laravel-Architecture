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
            <div class="top-1-left-head font-30 color-2a">採用情報</div>
            <div class="top-1-left-content">
                <table id="top-1-tb">
                    <tr>
                        <td>採用条件</td>
                        <td>正社員</td>
                    </tr>
                    <tr>
                        <td>職種/仕事内容</td>
                        <td>[1]給湯器･ガス配管工事スタッフ<br>
                            一般家庭やオフィスでの､給湯器の設置作業<br>
                            [2]水道（配管）工事スタッフ<br>
                            戸建、ビル､マンションなどの水道設備工事全般<br>
                            対象となる方 要普通免許　<br>
                            ※長期で働ける方
                        </td>
                    </tr>
                    <tr>
                        <td>勤務地</td>
                        <td>県西(小田原が中心)</td>
                    </tr>
                    <tr>
                        <td>勤務時間</td>
                        <td>8：00～17：00または9：00～18：00<br>
                            ※現場により異なる<br>
                            ※1日2時間程度の残業あり</td>
                    </tr>
                    <tr>
                        <td>給与</td>
                        <td>経験者(ガス機器設置SP取得者)<br>
                            日給1万4000円～<br>
                            （例）月23日勤務×日給1万4000円＝32万2000円<br>
                            未経験<br>
                            日給1万円～<br>
                            （例）月25日勤務×日給1万円＝25万3000円</td>
                    </tr>
                    <tr>
                        <td>待遇・福利厚生</td>
                        <td>昇給･賞与あり､通勤交通費（上限あり）<br>
                            各種社会保険完備､厚生年金基金､退職金制度､資格取得支援制度</td>
                    </tr>
                    <tr>
                        <td>休日・休暇</td>
                        <td>週休2日制（月8日）､年末年始､夏季<br>
                            ※会社カレンダーによる</td>
                    </tr>
                    <tr>
                        <td>ポイント</td>
                        <td>車･バイク通勤可<br>
                            未経験者歓迎！<br>
                            40代～50代も活躍中！<br>
                            年齢･経験を考慮し､優遇いたします<br>
                            ＜土日働ける方歓迎！＞<br><br>
                            
                            ＜以下のいずれかに当てはまる方にピッタリ＞<br>
                            手に職つけて働きたい未経験者の方<br>
                            スキルを活かして高収入を得たい経験者の方<br>
                            忙しくても誠実に仕事に向き合える方<br>
                            お客様から直接感謝されたい方</td>
                    </tr>
                </table>
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection