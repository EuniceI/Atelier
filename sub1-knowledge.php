<!DOCTYPE html>
<html lang="ko-kr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="yes" name="apple-mobile-web-app-capable" />  
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
<title>ATELIER</title>
<link rel="shortcut icon" href="imgs/favicon.ico">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css"> <!-- font-awesome icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> <!-- bootstrap icons -->
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/menu-sub.css">
<link rel="stylesheet" href="./css/common-sub.css">
<link rel="stylesheet" href="./css/sub1-knowledge.css">

<script src="js/plugin/modernizr.custom.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/plugin/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/menu-sub.js"></script>
<script src="js/script.js"></script>
</head>
<body>
    
    <?php include "sub-header.php"?>
    
    <!--/////탑배너/////-->
    <div class="topbn">
        <h3>
            <span>c</span><span>o</span><span>n</span><span>s</span><span>t</span><span>e</span><span>l</span><span>l</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n </span>
            <span>i</span><span>n</span><span>f</span><span>o</span><span>r</span><span>m</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span>
        </h3>
        <!--h3 배너타이틀 수정해주세요-->
        <div class="tbox">
            <div class="bbox">
            </div>
        </div>
        <div class="tdeco">
            <span class="decoline"></span>
            <h4>information</h4>
            <!--h4 섹션 타이틀 수정해주세요-->
        </div>
    </div>

    <!-- 코딩 할 영역 (여기부터)-->
    <article id="content">
        <ul id=tab>
            <li><a href="sub1-origin.php#tab">origin</a></li>
            <li><a href="sub1-knowledge.php#tab">knowledge</a></li>
        </ul>
        <div class="clear"></div>
        <figure id="sec-title">
            <img src="imgs/sub1-sect2.jpg">
            <figcaption>
                <h5>Constellation, in Astronomy</h5>
                <p>any of certain groupings of stars that were imagined.</p>
            </figcaption>
        </figure>
        <div id="at-box">
            <h6>The stars in the night sky <br>Travel around and around the earth.</h6>
            <p>As a result, constellations move from east to west about 15° per hour in a week, and even at the same time due to the performance movement, they move west about 1° after a day. Therefore, the constellations that appear in different seasons are also different. This is often referred to as seasonal constellations, which refer to constellations that are visible around 9 p.m. of the season.</p>
            <p>It is recommended to use guide stars or guide signs to easily find constellations. In other words, you first find the bright stars or easily identified constellations that you can see in that season and time, followed by other constellations.</p>
        </div>
        <div id="articleDeco"></div>
        <div id="gbox">
            <div id="guide">sesonal<br>constellations<br>guide</div>

            <ul class="table">
                <li>
                    <b>Northern Sky</b>
                    <p>Big Dipper, Cassiopeia</p>
                </li>
                <li>
                    <b>Spring</b>
                    <p>Akturus in Shepherds, Spica in Virgo, Dennebola in Lion</p>
                </li>
                <li>
                    <b>Summer</b>
                    <p>Denev the Swan, Vega the Geomungo, Altair the Eagle</p>
                </li>
                <li>
                    <b>Autumn</b>
                    <p>Pegasus Square</p>
                </li>
                <li>
                    <b>Winter</b>
                    <p>Betelgius the Orion, Sirius the Big Dog, Prochion the Little Dog, Aldebaran the Taurus, Capella the Matcha, Polux the Gemini</p>
                </li>
            </ul>
        </div>


    </article>
    <div class="clear"></div>
    <!-- 코딩 할 영역 (여기까지)-->

    <?php include "sub-footer.php"?>
    