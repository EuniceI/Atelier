$(document).ready(function(){
    
    var winHeight =  $(document).scrollTop();   
     
    // 메뉴 나타나기
    $('#trigger').click(function(e){
        winHeight =  $(document).scrollTop();                    
        $('#menu-canvas').fadeIn(300);
        $('body,html').css('overflow-y','hidden');
    });
    //메뉴 사라지기
    $('.close').click(function(e){
        $(window).scrollTop(winHeight);
        $('#menu-canvas').fadeOut(300);        
        $('body,html').css('overflow-y','scroll');
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