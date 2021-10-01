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
    <article id="content" class="wintercontent">
        <div class="wrap">
            <a href="./sub2-01spring.php#content">spring</a>
            <a href="./sub2-02summer.php#content">summer</a>
            <a href="./sub2-03autumn.php#content">autumn</a>
            <a href="./sub2-04winter.php#content" class="click1">winter</a>
        </div>
        <div class="clear"></div>
        <section class="first">
            <h2>Winter's signature Constellation</h2>
            <p>Winter is the best season to observe stars.</p>
            
            <figure class="imgfx">
                <img src="imgs/sub-winter.jpg";>
                <figcaption>
                    <h2>Winter Constellation</h2>
                    <p>Winter constellations include Orion, Taurus, Auriga, Canis Major, Canis Minor, Carina, Eridanus, Gemini and Monoceros.</p>
                    </div>
                </figcaption>
                </figure>

        </section>
        <section class="second winter">
            <h3>Winter Constellations</h3>
            <p>start with finding Orion constellations. Four stars form a large square in the southern sky,
                and three stars in the middle are placed side by side. The three stars lined up next to each 
                other are called "Samtaesung" and the upper left red star of the square is "Betelgius" and the 
                star shining brightly on the diagonal is "Rigel. If you extend Orion's "Samtaesung" high in the 
                sky, you will meet a bright yellow star, which is called "Aldebaran" of Taurus. 
            </p>
        </section>
        <section class="third winterbox">
            <div class="winterCircle"></div>
            <div class="wrapper ">
                <h3>The Winter Triangle</h3>
                <p>If you extend "Samtaeseong" southeast when Orion is placed in the south, you can 
                    observe the brightest "Syrius (big dog)" shining blue-white in the entire night sky.
                    connecting Sirius and Betelgius with another brighter star forms a large triangle, 
                    which is the Winter Great Triangle. The remaining star at the vertex is Prokion, a 
                    small dog. 
                </p>
            </div>            
            <div class="clear"></div>
        </section>        
    </article>
    <!-- 코딩 할 영역 (여기까지)-->

    <?php include "sub-footer.php"?>