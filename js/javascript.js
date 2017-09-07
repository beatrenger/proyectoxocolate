
jQuery(function($) {
  var body = $("body");
  console.log('Loaded normal javascript file successfully');


// ajax call
  $.post(my_js_data.ajaxurl, { action: 'ajax_call_test',  }, function(output) {
  	 console.log(output)
  });


var   windowW =window.innerWidth;
var menu_height =  $("#menu-bar").height();
var menu_bar_position = window.innerHeight - $("#menu-bar").height(); // menu bar position
console.log(menu_bar_position);
 menuresponsive(); // sets menu height;
   // SnowFlakes
  // var scene = document.getElementById('scene');
  // var parallax = new Parallax(scene);
  //
  // var scene2 = document.getElementById('scene2');
  // var parallax2 = new Parallax(scene2);


  $('#nav-icon3').stop().click(function(){

$(this).toggleClass('open');
  menuoption();
  $('html,body').animate({scrollTop: $('#menu-bar').offset().top }, 1000);


});




 $( window ).resize(function(e) {
    windowW =window.innerWidth;
    menu_bar_position = $('.topheader').height();
      menuresponsive();
      menu_pos();
      console.log(menu_bar_position);
 });
function menuoption(){

  var height = menu_height + $("#menu-bar  .menu").height(); // total height of container;

  // menu-bar + menu ( ul )
  if ( $('#nav-icon3').is( ".open" ) ) {
        $( "#menu-bar" ).stop().animate({height: height }, 500)
  }else{
        $( "#menu-bar" ).stop().animate({height: menu_height}, 500)
  }
}
function menuresponsive(){
  if(windowW <= 800 ){
    // setTimeout(function(){
    //     $("#menu-bar li").css('display','block');
    //     $( "#menu-bar" ).animate({height: height}, 500)
    // }, 200} );

    // animate position of the menu;
      $( "#menu-bar  ul" ).stop().animate({top: 80}, 150,function(){
        window.setTimeout(function(){
           $("#menu-bar li").css('display','block');
        }, 200);

      });
  } else{
      $("#nav-icon3").removeClass('open');
    $( "#menu-bar  ul" ).stop().animate({top: 0}, 150,function(){

        $("#menu-bar li").css('display','inline-block');

        menuoption();
    });


  }
}

$('.button-menu').on('click',function(){
  console.log('pressed arrow to animate menu');
  event.preventDefault()
  $('html,body').animate({scrollTop: $('#menu-bar').offset().top }, 1000);

  });



   $(window).on('scroll', function(){
          menu_pos();
    });

  function menu_pos(){
    if ( $(window).scrollTop() > menu_bar_position){
          $('#menu-bar').addClass("f-nav");
          $(".content-body").css("top", 80);
            $(".footer").css("top", 80);
      } else {
          $('#menu-bar').removeClass("f-nav");
            $(".content-body").css("top", 0)
                $(".footer").css("top", 0)
      }
  }

  // $('#myCarouselProduct').carousel({
  // interval: false
  // });


  $("#myCarouselProduct").swiperight(function() {
   $(this).carousel('prev');
   });
$("#myCarouselProduct").swipeleft(function() {
   $(this).carousel('next');
});


window.onload = function(){

  // $( '.loading-page').fadeOut( "slow", function() {
  //   $('.loading-page').addClass('hidden');
  //  });


};


});
