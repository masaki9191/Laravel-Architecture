@extends('frontend.layouts.app')
@section('css')
<link href="{{asset('frontend/css/exteriorplan.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="garden-part-content">
        <div class="garden-top">
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30 ">新築外構</div>
                <div class="gl-top-rotate-border"></div>
            </div>
            <div class="gl-top-left">
                <div class="gl-top-title-right font-30">新築外構</div>
                <div class="gl-top-rotate-border"></div>
            </div>
        </div>
        <div class="garden-content-part">
            <div class="garden-detail-img">
                <img src="{{asset('frontend/img/exam6/life-top.jpg')}}" alt="">
            </div>
            <div class="garden-detail-show">
                <div class="garden-detail-head font-16 color-2a">
                    <p>新しく住宅を建てる際、必ず外構部分の工事が必要になります。新築の外構は初めてご依頼される方がほとんどです。建物の建てられる面積以外の部分をどのようにプランするかによって、人や車の動線でストレスを感じずに過ごして頂くことができます。デザインだけでなく機能性も考えられた新築外構のプランニングによって、新しく始まるライフスタイルをサポート致します。</p>
                </div>

                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>ハウスメーカーと新築外構</span></div>
                </div>
                <div class="garden-detail-head font-16 color-2a">
                    <p>新しく土地を購入され家を建てられる、または建売の住宅を購入した際に、必ず必要になる新築の外構。多くのハウスメーカーが下請けの外構業者から仲介手数料を取りお客様を紹介する中、弊社はハウスメーカーとはつながらず、直接ご依頼頂いたお客様にその費用分還元できると考えております。またハウスメーカーの下請け業者の多くがプランを作成できない施工専門の会社のため、プランニングやお客様からのご要望をしっかり汲み取ったデザインを対応することができない場合があります。もしハウスメーカーの担当の方から紹介された外構業者やその会社から提出された外構プランのデザイン、見積り等の提案に納得がいかないようでしたら一度弊社にご相談ください。</p>
                </div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>建売新築住宅のケース</span></div>
                </div>
                <div class="garden-detail-head font-16 color-2a">
                    <p>建売住宅では外構工事がセットで済んでいるケースがほとんどですが、費用を抑えている為ごくシンプルに最低限の外構だけの場合が多くなっています。駐車スペースなどもコンクリートの土間打ちだけでなく、少しデザインを入れたものやアプローチを自然石の乱貼りにしたいなどご要望がある際は、契約前であればコンクリートを打たれず外構を切り離して外注できる可能性があります。契約を交わされた後ですと外構のコンクリート打設費用が建物に込みとされている事があるため、ハウスメーカーではない外構業者に建物と分離で依頼した場合、費用を返してもらえないケースがあります。建売の場合特に注意したいのが、外構のご要望のヒアリングなどがあまり無く、また単に工事だけを請け負う下請け業者の場合ですと使い勝手を考えずにデザインされた外構プランが多いため、住まわれてから不便な点に気付くことがあります。土間コンクリート施工後のリフォームですと解体・撤去の費用が余計にかかりますので、建物のお見積りに外構費用が含まれているかチェックをするのが費用を抑え、デザインのご要望を叶えるポイントとなります。</p>
                </div>
                <div class="re-img"><img src="{{asset('frontend/img/exam6/life-img.jpg')}}" alt=""></div>
                <div class="garden-plan">
                    <div class="gl-type-title font-30 color-2a gothic"><span>注文住宅のケース</span></div>
                </div>
                <div class="garden-detail-head font-16 color-2a">
                    <p>注文住宅の新築外構のケースでよくある問題は建物の方に予算をかけて、外構の分が足りなくなってしまうケースです。ハウスメーカーは建物になるべく予算をかけて欲しいと考えていますが、外構の方では一般的（※地形や施工の難易度により一概には言えませんが）に建物にかかる費用の５～10％必要となってきます。新築の外構費用を押さえていなかったお客さまが、境界部分のアルミフェンスとコンクリート土間打ち程度の簡易的な外構工事で我慢することになり、あまりご要望が叶わなかったという事をよく耳にします。そうならない為にも建物の設計と並行して、早めに外構のプランもご相談された方が良いでしょう。また新築の外構に予算をかけ過ぎてもよくない場合もあります。使い勝手が本当にわかるのは実際に住んでみてからですので、新築外構に一気に予算をかけて後々気に入らない、または使いづらいと住まれて数か月でリフォームをご依頼頂くケースもあります。そのようにならないためにもまずは最小限の外構プラスご希望１つ２つ（例えばテラスにウッドデッキをつけるなど）を取り入れたところで抑えてみるのも賢い選択です。</p>
                </div>
            </div>
        </div>
    </section>
@endsection