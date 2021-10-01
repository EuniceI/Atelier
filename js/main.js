$(document).ready(function(){

    // 변수 초기화
    var index = 0;
    var slideText = $('section > div.wrap');
    var slideVideo = $('.video-bg');
    var lastIndex = slideText.length-1;
    var vid = null;
    var timer = null;
    var dot = $('.slide-control > .dot');
    
    // function 글자 나타나기 효과
    function txtView(){
        $('section .wrap h2:nth-child(1)').css({'opacity':1,'transform':'translateY('+0+'px)'});
        $('section .wrap h2:nth-child(2)').css({'opacity':1,'transform':'translateY('+0+'px)'});
        $('section .wrap p:nth-child(1)').css({'opacity':0.8,'transform':'translateY('+0+'px)'});
        $('section .wrap p:nth-child(2)').css({'opacity':0.8,'transform':'translateY('+0+'px)'});
        $('section .wrap .detail-view').css({'opacity':0.8,'transform':'translateY('+0+'px)'});        
    }

    // function 글자 사라지기 효과
    function txtHide(){
        $('section .wrap h2:nth-child(1)').css({'opacity':0,'transform':'translateY('+20+'px)'});
        $('section .wrap h2:nth-child(2)').css({'opacity':0,'transform':'translateY('+20+'px)'});
        $('section .wrap p:nth-child(1)').css({'opacity':0,'transform':'translateY('+20+'px)'});
        $('section .wrap p:nth-child(2)').css({'opacity':0,'transform':'translateY('+20+'px)'});
        $('section .wrap .detail-view').css({'opacity':0,'transform':'translateY('+20+'px)'});        
    }

    // function 프로그래스바 애니메이션
    function progressBar(){
        $('.progress-bar').css({
            width:0           
        }).animate({
            width:'100%'
        }, 6800).animate({
            width:0
        },0);        
    }   

    // function 선택한 슬라이드 보여주기
    function showSelection(selectIndex){   
        dot.eq(index).removeClass('active');        
        slideText.eq(index).fadeOut(800);
        slideVideo.eq(index).fadeOut(800);
        txtHide();

        index = selectIndex;               
        
        dot.eq(index).addClass('active');
        vid = $('.video-bg').eq(index).find('video').get(0);
        slideText.eq(index).show();        
        slideVideo.eq(index).fadeIn(800);        
        vid.load();        
        txtView();
        progressBar();                   
    }
    
    // function 다음 슬라이드 보여주기
    function showNext(){   
        dot.eq(index).removeClass('active');
        slideText.eq(index).fadeOut(800);
        slideVideo.eq(index).fadeOut(800);
        txtHide();

        index++;        

        if(index > lastIndex){
            index = 0;
        }        
        
        dot.eq(index).addClass('active');
        vid = $('.video-bg').eq(index).find('video').get(0);
        slideText.eq(index).show();        
        slideVideo.eq(index).fadeIn(800);        
        vid.load();
        txtView();
        progressBar();                   
    }

    // function 이전 슬라이드 보여주기
    function showPrev(){   
        dot.eq(index).removeClass('active');     
        slideText.eq(index).fadeOut(800);
        slideVideo.eq(index).fadeOut(800);      
        txtHide();

        index--;

        if(index < 0){
            index = lastIndex;
        } 
        
        dot.eq(index).addClass('active');
        vid = $('.video-bg').eq(index).find('video').get(0);
        slideText.eq(index).show();        
        slideVideo.eq(index).fadeIn(800);        
        vid.load();
        txtView();
        progressBar();     
    }

    // function 타이머 리셋
    function timerReset(){
        clearInterval(timer);
        $('.progress-bar').stop(true,false); // 프로그래스바 애니메이션 stop
        timer = setInterval(function(){      // 타이머 할당          
            showNext();            
        }, 6800);
    }


    // ====================================== < 마우스 이벤트 효과 > ======================================

    // Next버튼 : 클릭이벤트 연결    
    $('.slide-control .next').on('click', function(){                
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showNext();
    });
    /*$(window).on('swipeleft', function(){                
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showNext();
    });*/

    // prev버튼 : 클릭이벤트 연결
    $('.slide-control .prev').on('click', function(){
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showPrev();
    });

    // dot버튼: 클릭이벤트 연결 (0~3번)
    dot.eq(0).click(function(){    
        if(index == 0) return;            
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showSelection(0);        
    });
    dot.eq(1).click(function(){
        if(index == 1) return;        
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showSelection(1);       
    });
    dot.eq(2).click(function(){
        if(index == 2) return;        
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showSelection(2);        
    });
    dot.eq(3).click(function(){
        if(index == 3) return;        
        timerReset();
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        showSelection(3);        
    });

    // pause버튼 : 클릭이벤트 연결
    $('.slide-control .pause').click(function(){
        clearInterval(timer);
        $('.slide-control .pause').css('display','none');
        $('.slide-control .play').css('display','block');
        $('.progress-bar').stop(true,false).css('width',0);        
        vid = $('.video-bg').eq(index).find('video').get(0);
        vid.pause();
    });

    // play : 클릭이벤트 연결
    $('.slide-control .play').click(function(){
        $('.slide-control .play').css('display','none');
        $('.slide-control .pause').css('display','flex');
        vid = $('.video-bg').eq(index).find('video').get(0);
        vid.play();
        timerReset();
        txtView();
        progressBar();
    });
    
        
    // ==========================================================================================

    // 초기 시작 함수 호출    
    timerReset();
    txtView();
    progressBar();

    // ==========================================================================================

    // 메뉴 나타나기
    $('#trigger').click(function(){            
        $('#menu-canvas').fadeIn(400);
    });
    //메뉴 사라지기
    $('.close').click(function(){            
        $('#menu-canvas').fadeOut(400);
    });

    //모바일 메뉴표현    
    $('.main-menu  li').hover(function(){
        if($(window).width() < 650)
        $(this).find('.sub-menu').stop().slideDown();                
    }, function(){  
        if($(window).width() < 650)
        $(this).find('.sub-menu').stop().slideUp();
    });
    
    //윈도우 크기변경
    $(window).resize(function(){
        var winSize = $(window).width();
            if(winSize > 649){
                $('.sub-menu').css('display','block');                
            }else{
            $('.sub-menu').css('display','none');
        }
    });

});