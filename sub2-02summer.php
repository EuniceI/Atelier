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
    <article id="content" class="summercontent">        
        <div class="wrap">
            <a href="./sub2-01spring.php#content">spring</a>
            <a href="./sub2-02summer.php#content" class="click1">summer</a>
            <a href="./sub2-03autumn.php#content">autumn</a>
            <a href="./sub2-04winter.php#content">winter</a>
        </div>
        <div class="clear"></div>
            <section class="first">
                <h2>Summer's signature Constellation</h2>
                <p>In summer, the Milky Way passes through the night sky from north to south.</p>
                <figure class="imgfx">
                    <img src="imgs/sub-summer.jpg";>
                    <figcaption>
                      <h2>summer constellation</h2>
                      <p>Summer constellations include Aquila, Cygnus, Lyra, Sagittarius, Scorpius, Ophiuchus and Hercules.</p>
                      </div>
                    </figcaption>
                  </figure>
            </section>
            <section class="second">
                <h3>As go South</h3>
                <p>The Milky Way widens, and you can find a constellation that resembles the shape of
                    the Big Dipper in the brightest part. This is the fostering of Namdu in  
                    constellation of Archers. To the west, you can see Scorpio, a representative 
                    constellation of summer. The S-shape lies long across the Milky Way around 
                    the bright red star "Antares".
                </p>
            </section>
            <section class="third">
                <div class="summerCircle"></div>
                <div class="wrapper">
                    <h3>The Summer Triangle</h3>
                    <p>The easiest star to find is Vega, Lyre's brightest star near the Milky Way.
                        And across the Milky Way, you can see Altair in the constellation of Eagles 
                        in the south. If you find this star, you can easily find constellations
                        in summer. First of all, if you go northeast of Vega, there is a very bright
                        swan constellation Denev. All three stars are in the Milky Way and are called
                        the Great Triangle of Summer.
                    </p>
                </div>
                <div class="clear"></div>
            </section>
    </article>            
    <!-- 코딩 할 영역 (여기까지)-->

    <?php include "sub-footer.php"?>