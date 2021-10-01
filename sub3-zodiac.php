<!DOCTYPE html>
<html lang="ko-kr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATELIER</title>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css"> <!-- font-awesome icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> <!-- bootstrap icons -->
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/common-sub.css">
<link rel="stylesheet" href="./css/menu-sub.css">
<link rel="stylesheet" href="./css/sub3-zodiac.css">
<link rel="shortcut icon" href="imgs/favicon.ico">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/plugin/modernizr.custom.min.js"></script><!--이벤트 최적화 관련-->
<script src="js/plugin/jquery.ba-throttle-debounce.min.js"></script><!--이벤트 최적화 관련-->
<script src="js/script.js"></script>
<script src="js/menu-sub.js"></script>
</head>

<body>
    
    <?php include "sub-header.php"?>

    <!-- 메뉴 -->
    <div id="menu-canvas">
        <div class="menu-bg">
            <a href="index.html"><img src="./imgs/logo-w.png" alt="logo-atelier"></a>
        </div>
        <div class="menu-logo">
            <a href="index.html"><img src="./imgs/logo-b.png" alt="logo-atelier"></a>
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
                        <li><a href="sub1-origin.html">origin</a></li>
                        <li><a href="sub1-knowledge.html">knowledge</a></li>
                    </ul>
                </li>
                <li>
                    <i class="bi bi-calendar-check"></i>
                    <span>seasons</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="sub2-01spring.html">spring</a></li>
                        <li><a href="sub2-02summer.html">summer</a></li>
                        <li><a href="sub2-03autumn.html">autumn</a></li>
                        <li><a href="sub2-04winter.html">winter</a></li>
                    </ul>
                </li>
                <li>
                    <i class="bi bi-star"></i>
                    <span>zodiac</span>
                    <div></div>
                    <ul class="sub-menu">
                        <li><a href="sub3-zodiac.html">zodiac</a></li>                        
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

    <!--/////탑배너/////-->
    <div class="topbn">
        <!--<h3>Signs of the zodiac</h3>-->
        <h3>
            <div>
                <span>S</span><span>i</span><span>g</span><span>n</span><span>s </span>
                <span>o</span><span>f </span>
            </div>
            <div>
                <span>t</span><span>h</span><span>e </span>
                <span>z</span><span>o</span><span>d</span><span>i</span><span>a</span><span>c</span>
            </div>
        </h3>
        <!--h3 배너타이틀 수정해주세요-->
        <div class="tbox">
            <div class="bbox">
            </div>
        </div>
        <div class="tdeco">
            <span class="decoline"></span>
            <h4>zodiac</h4>
            <!--h4 섹션 타이틀 수정해주세요-->
        </div>
    </div>

    <!-- 코딩 할 영역 (여기부터)-->
    <article id="content">
        <div class="title">
            <ul class="dark-bg">
                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
            </ul>
            <ul class="dark1-bg">
                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
            </ul>
            <h5>Twelve houses of the Zodiac</h5>
            <p>Most horoscopic traditions of astrology systems divide the horoscope into a number of houses whose positions depend on time and location rather than on date.</p>
        </div>

        <ul class="zodiac-box">

            <li class="wrap">
                <div class="card-box box-1">               
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">CAPRICORN</p>
                            <p class="date">Dec.22 - Jan.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Earth</p>
                            <p class="character">
                                <span>Hardworking,</span>
                                <span>Straightforward,</span>
                                <span>Stubborn</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">CAPRICORN</p>
                        <p class="date">Dec.22 - Jan.21</p> 
                        <p class="back-deco">BACK</p>                                  
                    </div>

                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-1">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">AQUARIUS</p>
                            <p class="date">Jan.22 - Feb.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Air</p>
                            <p class="character">
                                <span>Innovative,</span>
                                <span>Admired,</span>
                                <span>Eccentric</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">AQUARIUS</p>
                        <p class="date">Jan.22 - Feb.21</p>
                        <p class="back-deco">BACK</p>                  
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-1">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">PISCES</p>
                            <p class="date">Feb.22 - Mar.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Water</p>
                            <p class="character">
                                <span>Free,</span>
                                <span>Sensual,</span>
                                <span>Sensirtive</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">PISCES</p>
                        <p class="date">Feb.22 - Mar.21</p>
                        <p class="back-deco">BACK</p>                   
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-2">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">ARIES</p>
                            <p class="date">Mar.22 - Apr.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Fire</p>
                            <p class="character">
                                <span>Brave,</span>
                                <span>Independent,</span>
                                <span>Impulsive</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">ARIES</p>
                        <p class="date">Mar.22 - Apr.21</p>
                        <p class="back-deco">BACK</p>                
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-2">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">TAURUS</p>
                            <p class="date">Apr.22 - May.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Earth</p>
                            <p class="character">
                                <span>Good taste,</span>
                                <span>Sensual,</span>
                                <span>Down to earth,</span>
                                <span>Stubborn</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">TAURUS</p>
                        <p class="date">Apr.22 - May.21</p>
                        <p class="back-deco">BACK</p>         
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-2">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">GEMINI</p>
                            <p class="date">May.22 - Jun.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Air</p>
                            <p class="character">
                                <span>Dynamic,</span>
                                <span>Many talents,</span>
                                <span>Likes games</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">GEMINI</p>
                        <p class="date">May.22 - Jun.21</p>
                        <p class="back-deco">BACK</p>
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-3">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">CANCER</p>
                            <p class="date">Jun.22 - Jul.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Water</p>
                            <p class="character">
                                <span>Sensitive,</span>
                                <span>Friend-oriented,</span>
                                <span>Practical</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">CANCER</p>
                        <p class="date">Jun.22 - Jul.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-3">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">LEO</p>
                            <p class="date">Jul.22 - Aug.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Fire</p>
                            <p class="character">
                                <span>Creative,</span>
                                <span>Popular,</span>
                                <span>Faithful</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">LEO</p>
                        <p class="date">Jul.22 - Aug.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-3">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">VIRGO</p>
                            <p class="date">Aug.22 - Sep.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Earth</p>
                            <p class="character">
                                <span>Successful,</span>
                                <span>Creative,</span>
                                <span>Clever   </span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">VIRGO</p>
                        <p class="date">Aug.22 - Sep.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-4">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">LIBRA</p>
                            <p class="date">Sec.22 - Oct.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Air</p>
                            <p class="character">
                                <span>Irresistible,</span>
                                <span>Adventurous,</span>
                                <span>Indecisive</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">LIBRA</p>
                        <p class="date">Sec.22 - Oct.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-4">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">SCORPIO</p>
                            <p class="date">Oct.22 - Nov.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Water</p>
                            <p class="character">
                                <span>Self-reliant,</span>
                                <span>Powerful,</span>
                                <span>Dominant</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">SCORPIO</p>
                        <p class="date">Oct.22 - Nov.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

            <li class="wrap">
                <div class="card-box box-4">
                    <div class="front">
                        <div class="img"></div>
                        <div class="mobile-left">
                            <p class="name">SAGITTARIUS</p>
                            <p class="date">Nov.22 - Dec.21</p>
                        </div>
                        <div class="mobile-right">
                            <p class="element">Fire</p>
                            <p class="character">
                                <span>Open-minded,</span>
                                <span>Loving,</span>
                                <span>Insensitive</span>
                            </p>
                        </div>
                    </div>

                    <div class="back">
                        <div class="img"></div>
                        <p class="name">SAGITTARIUS</p>
                        <p class="date">Nov.22 - Dec.21</p>
                        <p class="back-deco">BACK</p>                    
                    </div>
                </div>
            </li>

        </ul>

    </article>
    <!-- 코딩 할 영역 (여기까지)-->
    
    <?php include "sub-footer.php"?>