
////클론헤더/////
$(document).ready(function(e) {
    $(function () {
        var $window = $(window),
                $header = $('header'),
                $headerClone = $header.contents().clone(true),
                $headerCloneContainer = $('<div class="header-clone"></div>'),
                $threshold = $header.offset().top + $header.outerHeight();
    
        $headerCloneContainer.append($headerClone);
    
        $headerCloneContainer.appendTo('body');
    
        $window.on('scroll', $.throttle(1000/15, function(){
            if($(this).scrollTop() >= $threshold){
                $headerCloneContainer.addClass('visible');
            }else{
                $headerCloneContainer.removeClass('visible');
            }
        }));           
    });

    /////드랍다운메뉴/////
    $('#mainmenu > li').mouseover(function(e ) {
        $(this).find('.submenu').stop( ).slideDown( );
    });
    $('#mainmenu > li').mouseout(function(e ) {
        $(this).find('.submenu').stop( ).slideUp( );
    });

/*
    $('#trigger').hover(function(e) {
        e.preventDefault();
        $('#trigger').toggleClass('hover');
    });

    $('#trigger').click(function(e) {
        e.preventDefault( );
        $('#trigger, #mainmenu').toggleClass('active');
    });
*/  
 
/////탑버튼/////
//푸터위고정
   $(document).ready(function() {		
        $(window).scroll(function() {

        var footertotop = ($('footer').position().top+110);
        var scrolltop = $(document).scrollTop() + window.innerHeight;
        var difference = scrolltop-footertotop;

        if (scrolltop > footertotop) {
            $('.btn_top').css({'bottom' : difference});
            $('.btn_top').css('opacity','1');
        }else{
            $('.btn_top').css({'bottom' : 20});
            $('.btn_top').css('opacity','0.8');
        }   
        //상위페이드아웃
        if ($(this).scrollTop() > 200) {
            $('.btn_top').fadeIn(300);
        } else {
            $('.btn_top').fadeOut(300);
        }        
    });

    //클릭이벤트
    $('.btn_top').click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
    });
    
    //hover
    $('.btn_top').hover(function() {
        $('.btn_top').css('opacity','1');
    },function(){
        if( ($(document).scrollTop() + window.innerHeight) > ($('footer').position().top+110)){
            $('.btn_top').css('opacity','1');
        }else{
        $('.btn_top').css('opacity','0.8');
        }
    });
  });
  

//페이지전환효과
jQuery(function($) {
    $("body").css("display", "none");
    $("body").fadeIn(800);
    $("a.transition").click(function(event){
    event.preventDefault();
    linkLocation = this.href;
    $("body").fadeOut(100, redirectPage);
    });
    function redirectPage() {
    window.location = linkLocation;
    }
    });
    
});

