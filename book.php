<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interia: あなたのホームに最適なインテリアデザインソリューション | 無料お見積もり</title>
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="common-style.css">
    <link rel="stylesheet" href="book-style.css">
    <link rel="shortcut icon" href="source/favicon.ico" type="image/x-icon">
</head>
<body>
    <script src="book-code.js"></script>
    <script src="code.js"></script>

    <div class="banner">
        <div class="navbar">
            <img onclick="btn('index.php');" src="source/logo.png" class="logo">
            <ul>
                <li><a href="#">お見積もり</a></li>
                <li><a href="corona.php">Covid-19対策</a></li>
                <li><a href="design.php">デザインアイデア</a></li>
                <li><a href="how.php">ご利用の流れ</a></li>
                <li><a href="visit.php">店舗案内</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>デザイナーに相談する</h1>
        </div>
    </div>

    <div class="up" onclick="totop();">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <div class="m1">
        <div class="d1">
            <div class="final">
                <div class="form" id="frm">
                    <form action="form.php" method="GET">
                        <input class="inp" id="nam" type="text" name="name" autocomplete="off" required>
                        <label class="lab" id="lab_nam" for="name">
                        <span class="spn" id="content-name">お名前</span></label>
                        
                        <input class="inp" id="email" type="text" name="email" autocomplete="off" required>
                        <label class="lab" id="lab_email" for="email">
                        <span class="spn" id="content-email">メールアドレス</span></label>
                        
                        <input class="inp" id="num" type="text" name="num" min="5" max="10" autocomplete="off" required>
                        <label class="lab" id="lab_num" for="num">
                        <span class="spn" id="content-num">電話番号</span></label>
                        
                        <div>
                            <input type="checkbox" id="whatsapp" checked>
                            <label id="lab_chk" for="whatsapp">WhatsAppで最新情報を受け取る</label>
                        </div>
            
                        <input class="inp" id="prop" type="text" name="prop" autocomplete="off" required>
                        <label class="lab" id="lab_prop" for="prop">
                        <span class="spn" id="content-prop">ご希望のカテゴリ...</span></label>
                    </form>
                        <button onclick="frmsbm();" id="sub-btn">オンライン相談を予約する</button>
                </div>
                <div>
                    <h2 id="subm">送信が完了いたしました。<br>担当スタッフより追ってご連絡いたします。</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="m2">
        <div class="t2">
            <h1>上質なインテリア空間</h1>
            <p>洗練されたデザインとプロフェッショナルな現地施工により、理想の住まいを現実のものにします。</p>
        </div>
        <div class="d2">
            <div onclick="btn('show.php?topic=master-bedroom');">
                <img src="source/book-m2-1.jpg">
                <h3>ベッドルーム</h3>
            </div>
            <div onclick="btn('show.php?topic=dining-room');">
                <img src="source/book-m2-2.jpg">
                <h3>ダイニングルーム</h3>
            </div>
            <div onclick="btn('show.php?topic=living-room');">
                <img src="source/book-m2-3.jpg">
                <h3>リビングルーム</h3>
            </div>
        </div>
    </div>

    <div class="m3">
        <div class="d3">
            <div>
                <h1>デザインから施工まで安心・安全な体験を提供</h1>
                <p>お客様の安全を確保するためすべてのプロトコルを厳守しており、スタッフも安全にお会いできるようワクチン接種を進めています。</p>
                <a href="corona.php"><p class="rd">詳細を見る →</p></a>
            </div>
            <div>
                <img src="source/safe.jpg">
            </div>
        </div>
    </div>

    <div class="m4">
        <div class="t4">
            <h1>よくある質問（FAQ）</h1>
        </div>
        <div class="d4">
            <div onclick="showorhide('p1');">
                <h4>今が家のインテリアを依頼するのに適した時期ですか？</h4>
                <p id="p1" style="display:none;"><span><br>はい、もちろんです。エクスペリエンスセンターでの打合せから現地での施工まで、厳格な非接触安全方針を導入しています。検温から消毒・熏蒸まで万全の管理を行っておりますので、安心して理想のプロジェクトを開始いただけます。</span>
                <span><br>デザインの共創プロセスには通常4〜6週間かかりますので、まずはオンライン相談から始めていただけます。デザイナーがビデオ通話でサポートいたします。また、事前予約のうえエクスペリエンスセンターで直接お会いすることも可能です。</span></p>
            </div>
            <div onclick="showorhide('p2');">
                <h4>インテリアデザイナーと直接会うことはできますか？</h4>
                <p id="p2" style="display:none;"><br>はい、可能です。安全面を最大限考慮し、2通りの打合せ方法をご用意しております：<br>1. オンライン相談<br>2. エクスペリエンスセンターでの安全な対面相談<br>※ご注意：お客様の建築予定地や打合せ場所が感染警戒区域に該当する場合、対面での打合せを控え、オンライン相談のみの対応とさせていただきます。</p>
            </div>
            <div onclick="showorhide('p3');">
                <h4>自宅で打合せを行うことはできますか？</h4>
                <p id="p3" style="display:none;"><br>衛生管理を徹底しているエクスペリエンスセンターでの打合せを強くお勧めしております。安全な環境整備に最善を尽くしておりますが、オンラインでのご相談も承っておりますので、お気軽にご活用ください。</p>
            </div>
            <div onclick="showorhide('p4');">
                <h4>デザインに使用する素材はどのように選びますか？</h4>
                <p id="p4" style="display:none;"><br>初期デザインの段階ではオンラインで画像をお見せしますが、最終決定の際はエクスペリエンスセンターへお越しいただく必要があります。センター内は十分な感染対策を徹底しております。※緑・橙ゾーンからのご来店のみお受入れしており、安全対策にご協力いただけない場合はご入店をお断りする場合がございます。</p>
            </div>
            <div onclick="showorhide('p5');">
                <h4>現地の採寸はどのように行われますか？</h4>
                <p id="p5" style="display:none;"><br>ご自宅の間取り図をご共有いただければ、プロジェクトの初期検討が可能です。間取り図がない場合は、担当者が現地にお伺いして計測いたします。担当者は安全プロトコルを厳守して訪問いたしますのでご安心ください。</p>
            </div>
            <div onclick="showorhide('p6');">
                <h4>プロジェクト完成までのスケジュールの目安は？</h4>
                <p id="p6" style="display:none;"><br>デザイナーとの打ち合わせに基づき、最新のスケジュールをご案内いたします。規制緩和以降、順次稼働を再開しております。できる限り遅れを取り戻し、安全な方法で納品できるよう全力で取り組んでおります。</p>
            </div>
            <div onclick="showorhide('p7');">
                <h4>疑問や気になる点について、担当デザイナーに問い合わせることはできますか？</h4>
                <p id="p7" style="display:none;"><br>はい、もちろん可能です。ご都合に合わせて、ビデオ通話やメッセージでいつでも担当デザイナーにご連絡いただけます。</p>
            </div>
            <div onclick="showorhide('p8');">
                <h4>ロックダウン制限期間中でもエクスペリエンスセンターを訪問できますか？</h4>
                <p id="p8" style="display:none;"><span><br>はい、お越しいただけます。デリー、グルグラム、バンガロール、ハイデラバードのセンターは政府のガイドラインに準拠して営業しております。</span>
                <span><br>検温、アルコール消毒、非接触型の対応を徹底しておりますので、安心してご来店ください。</span></p>
            </div>
        </div>
    </div>

    <div class="m-last">
        <div class="last">
            <div>
                <h1>理想の家づくりを、クリックひとつで始めましょう</h1>
                <button onclick="btn('#');">今すぐ始める</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="ftr-m">
            <div class="ftr-t">
                <img src="source/logo.png">
                <ul>
                    <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=+810509109025&text=Hey There! I am interested in interior designs on website. Can I know more on this?"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100061907891820"><i class="fab fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/meetpatel_2801/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="ftr-d">
                <div>
                    <h3>デザインアイデア</h3>
                    <ul>
                        <li><a href="show.php?topic=living-room">リビングルーム</a></li>
                        <li><a href="show.php?topic=kitchen">キッチン</a></li>
                        <li><a href="show.php?topic=master-bedroom">主寝室</a></li>
                        <li><a href="show.php?topic=kids-bedroom">子供部屋</a></li>
                    </ul>
                </div>
                <div>
                    <h3>対応エリア</h3>
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Mumbai" target="_blank">ムンバイ</a></li>
                        <li><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">ニューデリー</a></li>
                        <li><a href="https://www.google.com/maps/place/Kolkata" target="_blank">コルカタ</a></li>
                        <li><a href="https://www.google.com/maps/place/Bengaluru" target="_blank">バンガロール</a></li>
                    </ul>
                </div><div>
                    <h3>サービス情報</h3>
                    <ul>
                        <li><a href="book.php">デザイン相談の予約</a></li>
                        <li><a href="visit.php">店舗案内</a></li>
                        <li><a href="how.php">ご利用の流れ</a></li>
                        <li><a href="corona.php">Covid-19対策</a></li>
                    </ul>
                </div><div>
                    <h3>お問い合わせ</h3>
                    <ul>
                        <li>お電話</li>
                        <a href="tel:+810509109025">+81 050 910 9025</a>
                        <li>メール</li>
                        <a href="mailto:nihoni2005pokar@gmail.com">nihoni2005pokar@gmail.com</a>
                    </ul>
                </div>
            </div>
            <div class="ftr-b">
                <h2>Designed By Meet</h2>
                <p>© | All Rights Reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>