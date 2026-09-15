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
    <link rel="stylesheet" href="home-style.css">
    <link rel="shortcut icon" href="source/favicon.ico" type="image/x-icon">
</head>
<body>
    <script src="home-code.js"></script>
    <script src="code.js"></script>

    <div class="banner">
        <div class="navbar">
            <img onclick="btn('index.php');" src="source/logo.png" class="logo">
            <ul>
                <li><a href="book.php">お見積もり</a></li>
                <li><a href="corona.php">Covid-19対策</a></li>
                <li><a href="design.php">デザインアイデア</a></li>
                <li><a href="how.php">ご利用の流れ</a></li>
                <li><a href="visit.php">店舗案内</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>理想の住まいをデザイン</h1>
            <p>雑誌のような憧れのキッチンからお部屋全体まで、デザインから施工までワンストップでサポートします。</p>
            <div>
                <button onclick="btn('book.php');"><span></span>お見積もり</button>
                <button onclick="btn('design.php');"><span></span>デザインアイデア</button>
            </div>
        </div>
    </div>

    <div class="up" onclick="totop();">
        <i class="fas fa-arrow-up"></i>
    </div>

    <div class="m1">
        <div class="t1">
            <h1>選ばれる理由</h1>
        </div>
        <div class="d1">
            <div><img src="source/icons/home-i-1.png"><h3>最安値保証</h3></div>
            <div><img src="source/icons/home-i-2.png"><h3>45日以内の入居保証</h3></div>
            <div><img src="source/icons/home-i-3.png"><h3>10年保証</h3></div>
            <div><img src="source/icons/home-i-4.png"><h3>146項目の品質チェック</h3></div>
        </div>
    </div>

    <div class="m2">
        <div class="t2">
            <h1>ホームインテリアのすべてが揃うワンストップショップ</h1>
        </div>
        <div class="d2">
            <div>
                <img src="source/home-m2-1.jpg">
                <h2>リビングルーム</h2>
                <p>受賞歴のあるデザイナー、サービスパートナー、そしてトップブランドによる完璧なホームインテリア体験をお届けします。</p>
                <p onclick="btn('show.php?topic=living-room');" class="rd">詳しく見る →</p>
            </div>
            <div>
                <img src="source/home-m2-2.jpg">
                <h2>キッチン</h2>
                <p>キッチン、ワードローブ、TVユニットなど、お好みのカラー、サイズ、デザインで高品質かつ手頃なシステム家具をご提案します。</p>
                <p onclick="btn('show.php?topic=kitchen');" class="rd">詳しく見る →</p>
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
            <h1>実績とこだわり</h1>
        </div>
        <div class="d4">
            <div><img src="source/icons/home-i-5.png"><h3>1時間に2件の施工完了</h3></div>
            <div><img src="source/icons/home-i-6.png"><h3>1,500名以上の専任デザイナー</h3></div>
            <div><img src="source/icons/home-i-7.png"><h3>25万点以上のカタログ製品</h3></div>
            <div><img src="source/icons/home-i-8.png"><h3>2カ国・21都市で展開</h3></div>
        </div>
    </div>

    <div class="m5">
        <div class="t5">
            <h1>お客様の声</h1>
            <p>実際にご利用いただいたお客様のご感想をご紹介します</p>
        </div>
        <div class="d5">
            <div onclick="openvid('source/home-m5-vid1.mp4');">
                <img src="source/home-m5-img1.jpg">
                <i>「Interiaのチーム全体に感謝しています。予定していた45日よりもはるかに早くプロジェクトを完了してくれました。」</i>
                <p>ロヒト・ポール＆シュベタ</p>
                <p class="loc">グルグラム（システムキッチン）</p>
            </div>

            <div onclick="openvid('source/home-m5-vid2.mp4');">
                <img src="source/home-m5-img2.jpg">
                <i>「プロジェクトマネージャーのおかげで、素晴らしい体験ができました。非常に熱心に取り組んでくれ、時間通りに仕上げてくれました。」</i>
                <p>スワティ＆ゴーラヴ</p>
                <p class="loc">バンガロール（2BHK）</p>
            </div>

            <div onclick="openvid('source/home-m5-vid3.mp4');">
                <img src="source/home-m5-img3.jpg">
                <i>「この家は私の一部です。Interiaに相談して、私たちが本当に望んでいた家をデザインしてもらいました。」</i>
                <p>プージャ・バティア</p>
                <p class="loc">グルグラム（2BHK）</p>
            </div>
        </div>
        <video preload="auto" width="100%" controls id="myvideo" style="visibility: hidden; display: none;">
            <source type="video/mp4">
        </video>
    </div>

    <div class="m6">
        <div class="t6">
            <h1>簡単5ステップで自宅をデザイン</h1>
        </div>
        <div class="d6">
            <img src="source/home-m6.png" usemap="#img-mp">
            <div id="img-bk" style="width: 65px;"></div>
        </div>
        <div class="d6-2">
            <h1 id="d6-2-h1">デザイナーとの事前打合せ</h1>
            <p id="d6-2-p">お客様のご要望をお伺いし、デザインコンセプトとお見積もりを共有させていただきます。</p>
        </div>
        <div class="d6-3">
            <div class="slider">
                <div class="slide">
                    <!-- adding images -->
                    <div class="imgs f" id="cls-f">
                        <img src="source/how-m1-1.jpg">
                    </div>
                    <div class="imgs">
                        <img src="source/how-m1-2.jpg">
                    </div>
                    <div class="imgs">
                        <img src="source/how-m1-3.jpg">
                    </div>
                    <div class="imgs">
                        <img src="source/how-m1-4.jpg">
                    </div>
                    <div class="imgs">
                        <img src="source/how-m1-5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <map name="img-mp">
        <area shape="circle" coords="32,75,36" id="ara1" onclick="clk1();">
        <area shape="circle" coords="142,75,36" id="ara2" onclick="clk2();">
        <area shape="circle" coords="252,75,36" id="ara3" onclick="clk3();">
        <area shape="circle" coords="362,75,36" id="ara4" onclick="clk4();">
        <area shape="circle" coords="472,75,36" id="ara5" onclick="clk5();">
    </map>

    <div class="m-last">
        <div class="last">
            <div>
                <h1>理想の家づくりを、クリックひとつで始めましょう</h1>
                <button onclick="btn('book.php');">今すぐ始める</button>
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