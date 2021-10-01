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
    <article id="content" class="springcontent">
        <div class="wrap">
            <a href="./sub2-01spring.php#content" class="click1">spring</a>
            <a href="./sub2-02summer.php#content">summer</a>
            <a href="./sub2-03autumn.php#content">autumn</a>
            <a href="./sub2-04winter.php#content">winter</a>
        </div>
        <div class="clear"></div>
        
        <section class="first">
            <h2>Spring's signature Constellation</h2>
            <p>There are not many stars in the constellation in spring.</p>
            <figure class="imgfx">
                <img src="imgs/sub-spring.jpg";>
                <figcaption>
                    <h2>spring constellation</h2>
                    <p>Spring constellations include Ursa Major, Boötes, Leo, Cancer, Virgo, Hydra, Centaurus and Crux.</p>
                    </div>
                </figcaption>
                </figure>
        </section>

        <section class="second">
            <h3>Great curve of Spring</h3>
            <p>It is easeiest to find all constellations in the Big Dipper. 
                After you find the Big Dipper in the shape of a large ladle, 
                follow the curved handle to the east the find the orange star 
                "Arcturus" in the constellation of Shepherds. And if you go 
                further southest along this curve, find the white star "spica" 
                of Virgo. This is clled the great curve of Spring.</p>
        </section>
        <div class="clear"></div>
        <section class="third">
            <div class="springCircle"></div>
            <div class="wrapper">
                <h3>The Spring Triangle</h3>
                <p>Meanwhile, there is the constellation Dennebola, the representative
                constellation of spring, located in the square triangle with "Arcturus"
                and "Spica". This triangle is called the triangle of spring. And if you
                go west from Dennebola, you'll see a very shiny Legulus. If you look at
                this 'legulus' as a dot part of the question mark and find the remaining
                five question marks flipped from side to side, you will be a lion.
                </p>
            </div>            
            <div class="clear"></div>
        </section>            
    </article>    
    <!-- 코딩 할 영역 (여기까지)-->

    <?php include "sub-footer.php"?>