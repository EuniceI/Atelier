<!doctype html>
<html lang=ko-kr>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ATELIER</title>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css"> <!-- font-awesome icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> <!-- bootstrap icons -->
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/main.css">
<link rel="shortcut icon" href="imgs/favicon2.ico">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/plugin/modernizr.custom.min.js"></script><!--이벤트 최적화 관련-->
<script src="js/plugin/jquery.ba-throttle-debounce.min.js"></script><!--이벤트 최적화 관련-->
<script src="./js/main.js"></script>
</head>

<body>
    <header>
        <div id="trigger"><span></span><span></span><span></span></div>
        <a href=index.php class="main-logo"><img src="./imgs/logo-w.png" alt="logo-atelier"></a>
    </header>   

    <!-- 메뉴 -->
    <div id="menu-canvas">
        <div class="menu-bg">
            <a href="index.php"><img src="./imgs/logo-w.png" alt="logo-atelier"></a>
        </div>
        <div class="menu-logo">
            <a href="index.php"><img src="./imgs/logo-b.png" alt="logo-atelier"></a>
        </div>
        
        <div class="menu-txt">
            <div class="zodiac-circle"></div>
            <div class="close"><span></span><span></span></div>            
            <ul class="top-menu">
                <li><a href="#">join</a></li>
                <li><a href="#">login</a></li>
            </ul>
            
            <ul class="main-menu">
                <li>
                    <i class="bi bi-journals"></i>
                    <span>information</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="sub1-origin.php">origin</a></li>
                        <li><a href="sub1-knowledge.php">knowledge</a></li>
                    </ul>
                </li>
                <li>
                    <i class="bi bi-calendar-check"></i>
                    <span>seasons</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="sub2-01spring.php">spring</a></li>
                        <li><a href="sub2-02summer.php">summer</a></li>
                        <li><a href="sub2-03autumn.php">autumn</a></li>
                        <li><a href="sub2-04winter.php">winter</a></li>
                    </ul>
                </li>
                <li>
                    <i class="bi bi-star"></i>
                    <span>zodiac</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="sub3-zodiac.php">zodiac</a></li>                        
                    </ul>
                </li>
                <li>
                    <i class="bi bi-search"></i>
                    <span>legend</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="#">legend</a></li>                        
                    </ul>
                </li>
            </ul>
            <ul class="menu-sns">
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-blogger"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- 동영상 배경 -->
    <div class="video-bg">
        <video src="./media/galaxy_1.mp4" autoplay muted playsinline="playsinline"  ></video>
    </div>
    <div class="video-bg hide">
        <video src="./media/galaxy_2.mp4" autoplay muted playsinline="playsinline"  ></video>
    </div>
    <div class="video-bg hide">
        <video src="./media/galaxy_3.mp4" autoplay muted playsinline="playsinline"  ></video>
    </div>
    <div class="video-bg hide">
        <video src="./media/galaxy_4.mp4"autoplay muted playsinline="playsinline"  ></video>
    </div>

    <!-- 배경 box to line -->
    <ul class="bg-box">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <!-- progress-bar -->
    <div class="progress-bar"></div>

    <!-- section -->
    <section>
        <div class="wrap">
            <h2><span>O</span>rigin and knowledge</h2>
            <h2>of constellations</h2>
            <div class="p-txt">
                <p>Let me tell you when the origin and history of twinkling constellations</p>
                <p>in the night sky began.</p>
            </div>
            <a href="sub1-origin.php" class="detail-view">
                <span>detail view</span>
                <div class="icon-more"><span></span><span></span></div>
            </a>
        </div>

        <div class="wrap hide">
            <h2><span>C</span>onstellations representing</h2>
            <h2>the four seasons</h2>
            <div class="p-txt">
                <p>The constellations that appear in different seasons are also different.</p>
                <p>What is the zodiac sign that represents each season?</p>
            </div>
            <a href="sub2-01spring.php" class="detail-view">
                <span>detail view</span>
                <div class="icon-more"><span></span><span></span></div>
            </a>
        </div>

        <div class="wrap hide">
            <h2><span>W</span>hat's my zodiac sign</h2>
            <h2>in the night sky?</h2>
            <div class="p-txt">
                <p>Find my star in the solar calendar for the month you were born,</p>
                <p>and check my characteristics in my star.</p>
            </div>
            <a href="sub3-zodiac.php" class="detail-view">
                <span>detail view</span>
                <div class="icon-more"><span></span><span></span></div>
            </a>
        </div>

        <div class="wrap hide">
            <h2><span>A</span>bout Constellations</h2>
            <h2>and their Legends</h2>
            <div class="p-txt">
                <p>Constellations contain different legends</p>
                <p>and cultures by region and time.</p>
            </div>
            <a href="#" class="detail-view">
                <span>detail view</span>
                <div class="icon-more"><span></span><span></span></div>
            </a>
        </div>

        <!-- 슬라이드 컨트롤 -->
        <div class="slide-control">
            <div class="prev"></div>
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="pause"><span></span><span></span></div>
            <div class="play"></div>
            <div class="next"></div>
        </div>      
    </section>
    
    <!-- SNS -->
    <aside>
        <ul class="sns">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-blogger"></i></a></li>
        </ul>
    </aside>
    
    <footer>
        <p>ADDRESS : Fifth floor of Korea Building, Jungheung-dong, Buk-gu, Gwangju |</p>
        <p>ATELIER 2021 ⓒ ALL RIGHTS RESERVED</p>        
    </footer>
 </body>

</html>