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
<link rel="stylesheet" href="./css/sub2_season.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/plugin/modernizr.custom.min.js"></script>
<script src="js/plugin/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/menu-sub.js"></script>
<script src="js/script.js"></script>
</head>

<body>

    <?php include "sub-header.php"?>

    <!--/////탑배너/////-->
    <div class="topbn">
        <h3>
            <div>
                <span>s</span><span>e</span><span>a</span><span>s</span><span>o</span><span>n</span><span>a</span><span>l </span>
            </div>
            <div>        
                <span>c</span><span>o</span><span>n</span><span>s</span><span>t</span><span>e</span><span>l</span><span>l</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span>
            </div>
        </h3>
        <!--h3 배너타이틀 수정해주세요-->
        <div class="tbox">
            <div class="bbox">
            </div>
        </div>
        <div class="tdeco">
            <span class="decoline"></span>
            <h4>seasons</h4>
            <!--h4 섹션 타이틀 수정해주세요-->
        </div>
    </div>

    <!-- 코딩 할 영역 (여기부터)-->
    <article id="content" class="autumncontent">        
        <div class="wrap">
            <a href="./sub2-01spring.php#content">spring</a>
            <a href="./sub2-02summer.php#content">summer</a>
            <a href="./sub2-03autumn.php#content" class="click1">autumn</a>
            <a href="./sub2-04winter.php#content">winter</a>
        </div>
        <div class="clear"></div>

        <section class="first">
            <h2>Autumn's signature Constellation</h2>
            <p>In the night sky of autumn, you can hardly find bright stars like spring.</p>
            <figure class="imgfx">
                <img src="imgs/sub-autumn.jpg";>
                <figcaption>
                    <h2>autumn constellation</h2>
                    <p>Autumn constellations include Aquarius, Aries, Pisces, Andromeda, Perseus, Cassiopeia, Pegasus, Triangulum, Cetus and Cepheus.</p>
                    </div>
                </figcaption>
                </figure>
        </section>

        <section class="second">
            <h3>In Autumn,</h3>
            <p>There are no relatively bright stars compared to other seasons, so it is difficult to find 
                constellations unless you look closely. You can find a star that shines exceptionally in
                the southern sky, which is Formal House in the southern Pisces. This star is the only
                first star you can see in autumn.
            </p>
        </section>
        
        <section class="third">
            <div class="autumnCircle"></div>
            <div class="wrapper">
                <h3>The Autumn Square</h3>
                <p>In the autumn sky, the first thing to do is to find a large square. This squareis the 
                    constellation Chenma Pegasus. To the northeast of pegasus constellation, there are 
                    two blurry stars, and when connected, it becomes Andromeda constellation and Perseus
                    constellation, the hero of the hero story that Perseus saved Princess Andromeda and Perseus.
                </p>
            </div>            
            <div class="clear"></div>
        </section>        
    </article>
    <!-- 코딩 할 영역 (여기까지)-->
    
    <?php include "sub-footer.php"?>