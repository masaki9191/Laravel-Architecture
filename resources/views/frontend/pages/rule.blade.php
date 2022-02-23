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
            <div class="top-1-left-head font-30 color-2a">経営理念・企業倫理規範</div>
            <div class="staff-name"><h3><span class="font-25 color-2a">経営理念</span></h3></div>
            <div class="rule-content">
                <div class="font-16 color-2a">有限会社スドウ工営は</div>
                <div class="font-18 color-2a">「想いを育てる、住まいづくり、<br>
                    安心・安全で豊かな社会づくりに貢献する」</div>
                <div class="font-16 color-2a">ために存在します</div>
            </div>
            <div class="staff-name"><h3><span class="font-25 color-2a">企業理念</span></h3></div>
            <div class="rule-1-content">
                <div class="font-16 color-2a">
                    私たちは<br>
                    1.私達は設備工事を通してより良い商品・施工を社会に提供し、安全・安心・快適なまちづくり・家づくりを目指します。<br>
                    2. 私達はお客様の満足を通して仕事に誇りを持ち、お客様の夢・希望を叶えるように共に目指します。<br>
                    3.私達は常に新しい技術・商品について積極的に学び、技術レベルの高い信頼される会社を目指します。<br>
                    4. 私達社員は、常に会社の利益性を考え行動します。利益を上げ会社が存続する事により、顧客満足や社会貢献に努めます。<br>
                    5.私達は働きがいのある会社創りを心がけ、私達社員とその家族の幸福を現実します。
                </div>
            </div>
            <div class="staff-name"><h3><span class="font-25 color-2a">企業倫理規範</span></h3></div>
            <div class="rule-title font-18 color-2a">企業倫理規準</div>
            <div class="rule-title-be font-16 color-2a">1.企業活動における企業倫理</div>
            <div class="rule-title-be-text font-14 color-2a">
                (1) 高品質かつ安全な製品およびサービスを安定的に供給する。<br>
                (2) 公正かつ自由な競争原理に基づき、法令および健全な商習慣を遵守し誠実な取引活動を行う。<br>
                (3) 企業情報を積極的に開示し、透明かつ公正な企業活動を維持する。<br>
                (4) 従業員の人権と個性を尊重しつつ、合理的かつ効率的な企業運営を行う。
            </div>
            <div class="rule-title-be font-16 color-2a">2.社会活動における企業倫理</div>
            <div class="rule-title-be-text font-14 color-2a">
                (1) 社会貢献活動に積極的に取り組む。<br>
                (2) 環境問題を認識し、環境保全対策に取り組む。<br>
                (3) 政治活動に関しては、法令を遵守し、政治、行政と健全かつ正常な関係を保つ。<br>
                (4) 反社会的勢力および団体に対し、断固たる行動を取り、助長させるような行為は一切行わない。
            </div>

            <div class="rule-title font-18 color-2a">企業倫理規準</div>
            <div class="rule-title-be font-16 color-2a">私たちは（有限会社スドウ工営はの役員および社員）は、以下の事項を遵守し、企業活動を行います。</div>
            <div class="rule-title-be font-16 color-2a">1.（顧客満足）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、顧客満足度を一層向上させるために、品質および安全性について十分配慮しつつ、新技術・新製品の開発に努め、コストに適応した、社会に有用な製品およびサービスを安定的に供給します。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈社会の成熟に伴い、マーケットのニーズが多様化高度化し、顧客満足度を維持向上することがますます重要な課題となっています。その一方で、製造物責任法（PL 法）の制定、ISO 取得への関心、競争の激化といった社会の動きに見られるように、製品の品質、安全性、コストに関してこれまで以上に厳しく企業の責任と評価が問われる時代となっています。<br>
                このような状況のなかで、当社グループにおいても、単に製品を作って売るというだけでなく、研究開発、設計、製造、販売、施工、保守の全プロセスを通じて、顧客が満足できる良い製品と良いサービスを供給するために活動することが必要となっています。〉
            </div>

            <div class="rule-title-be font-16 color-2a">2.（公正取引）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、独占禁止法等の経済法規を遵守し、自由かつ対等な競争社会のなかで、公正な取引を行い、優越的地位を利用した不公正な取引または談合やカルテル行為などに関与することは一切行いません。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈経済活動がグローバル化する中で、国内マーケットもより透明で開かれたものとなることが要求され、公正かつ自由な競争を実現する独占禁止法、下請法をより厳格に遵守し、いわゆる日本的な流通取引慣行を見直すことが急務になっています。当社グループに対する需要は、公共事業との関連が強いので、通常以上に、不公正取引との関与が疑われないように配慮する必要があります。〉
            </div>

            <div class="rule-title-be font-16 color-2a">3.（清廉取引）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、日本コンクリート工業グループの役員および社員であることを常に自覚し、清廉潔白な態度で業務を遂行いたします。いかなる理由があれ、会社の信用を傷つけまたは不名誉となるような行為はいたしません。私的な利益供与または享受に関与することなく、社会的相当性の範囲内で、関係を構築し維持します。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業活動の上で、取引先や関係先と信頼関係を築くことは極めて重要です。しかしながら、その手段として、不正なリベート・コミッション等の供与や社会的相当性を逸脱した接待が許されないことは言うまでもありません。また、横領や背任に明確に当たると言えない行為があっても、業務を通じて私的な利益を得ることを企図していると疑われかねない行為は、厳として慎まなければなりません。〉
            </div>


            <div class="rule-title-be font-16 color-2a">4.（情報開示）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、正確かつ有用な情報を、適切な時期に、株主および投資家等に対し開示し、インサイダー取引等の不正な情報利用に関与しません。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業は本来的に営利企業であるので、その情報自体が高い価値を有することも少なくありません。特に当社グループは、東京証券取引所第1 部に上場していますから、株主に対しても、投資家に対しても、その情報を、公平かつ公正にすることが重要な社会的責任の一つであります。また、機密情報に抵触する機会を利用したインサイダー取引は、金融商品取引法に違反する犯罪であり、その重大性を認識する必要があります。〉
            </div>


            <div class="rule-title-be font-16 color-2a">5.（個性尊重）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、個々の社員が個性を最大限に発揮できるように、相互を尊重するとともに、一切の差別、セクシュアルハラスメントを許しません。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業は組織であり、個々の社員との間で、利益が衝突する場面も少なくありません。しかしながら、一方的に企業の利益を追求することなく、相互に、個々の社員の自己実現を尊重し、ゆとりと豊かさを体現できるようなバランスの取れた企業であることは十分可能です。また、性別、年齢、国籍、信条、身体障害の有無などによる差別を禁止するだけでなく、性的意味合いを持つ行為や発言により相手を不快にさせる行為、いわゆるセクシュアルハラスメントへの配慮といった課題にも積極的に対応します。〉
            </div>


            <div class="rule-title-be font-16 color-2a">6.（企業発展）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、競争力ある企業活動を中長期的に持続させるために、迅速な意思決定と行動を実現し、コスト重視の企業活動を行います。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈短期的に利益を追求するよりも、中長期的視点に立って、競争力ある企業活動を持続して、安定的な利益をあげることが、株主に対する責任となります。そのためには迅速にマーケットに対応した意思決定を行い、製品を開発するとともに、マーケットに受け入れられる価格で製造販売できるように、企業体制を整えることが不可欠となります。〉
            </div>


            <div class="rule-title-be font-16 color-2a">7.（社会活動）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、企業も社会の一員であることを自覚し、個人との調和に配慮しつつ、社会に役立つ活動を行います。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業も社会的実在であり、市民のひとりとして社会に参画する義務があることを、あらためて認識します。しかし、一方で、企業の影響力が、特に地域社会で大きいことを自覚し、個人の活動を妨げないよう十分配慮することが必要です。この二面のバランスの重要性を理解した上で、地域団体への支援など多種の社会貢献活動に積極的に取り組みます。〉
            </div>


            <div class="rule-title-be font-16 color-2a">8.（環境保全）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、企業活動が自然環境に影響を与えざるを得ないことを自覚し、その影響を最小限にすべく、研究開発、設計、製造、施工、流通、リサイクル等のあらゆる面で配慮して行動するとともに、環境保全のために、関係者と協力し、積極的に取り組みます。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈公害といった比較的局所的な事象だけでなく、地球温暖化、オゾン層の破壊など、地域規模での環境問題が表面化しており、その対応が急務となっています。当社グループは、製造業であるだけにこの問題を直視し、環境への影響を最小にするべく、研究段階から配慮します。また、製品のリサイクルについても、積極的に取り組み、循環消費社会を実現するべく努力します。〉
            </div>


            <div class="rule-title-be font-16 color-2a">9.（政治および行政との関係）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、個人との調和に配慮しつつ、政治資金規制法、公職選挙法の法令を遵守して、社会的相当性の範囲内で、政治活動および行政活動に関与します。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業は社会活動の中で政治や行政とかかわることは不可避です。しかしながら、国民が投票権を持つという民主主義原理を顧みれば、企業が政治や行政に対して過度に関与することは慎むべきです。民主政治の過程により制定された法律が許容し要求する限度において政治および行政に関与すべきことを強く自覚し、賄賂や相当性を逸脱する贈答、接待などにより企業の不当な利益を追求することは厳しく否定されます。〉
            </div>


            <div class="rule-title-be font-16 color-2a">10.（反社会的勢力との関係）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、反社会的勢力および団体に対し、毅然とした態度で対応し、これらに金銭を供与したりこれらを利用したりすることなく、かつ恐れずに断固たる行動をとります。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈市民社会生活秩序に脅威を与える反社会的勢力や団体は、近年次第に巧妙化、悪質化しており、その一つである暴力団活動は、民事介入暴力と結び付いて平穏な市民生活を直接に乱すまでに至っています。当社グループは、反社会的勢力および団体に対しては、躊躇することなく、ただちに警察等の関係諸機関と連携をとり、毅然とした対応を図ります。〉
            </div>


            <div class="rule-title-be font-16 color-2a">11.（企業倫理規準および企業行動規準に反する行為の報告）</div>
            <div class="rule-title-be-text font-14 color-2a">
                私たちは、日本コンクリート工業グループの役員および社員が企業倫理規準および企業行動規準に反する行為を見つけたときは、自己の上司または通報窓口に報告します。
            </div>
            <div class="rule-title-be-text mt-20 font-14 color-2a">
                〈企業倫理規準および企業行動規準に反する行為を見つけたときに、報告することは当社グループ役職員の責務です。故意に虚偽の報告をした場合、あるいは特定の個人を中傷する目的とした報告でない限り、そのことによって報告者が不利に扱われることはありません。〉
            </div>
        </div>
        @include('frontend.layouts.company_menu')
    </section>
@endsection