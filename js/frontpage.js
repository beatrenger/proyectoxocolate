jQuery(function($){
        var   windowH =window.innerHeight; // Getting window size;
        $(".topheader").css("height",windowH - 110);

        $( window ).resize(function(e) {
         windowH =window.innerHeight; // Getting window size;
$(".topheader").css("height",windowH - 110);
        });

        $('.grid').masonry({
          itemSelector: '.content_product'
        });


        // button controler from top header
        $('.button-menu').on('click',function(){
        console.log('pressed arrow to animate menu');
        event.preventDefault()
        $('html,body').animate({scrollTop: $('#hmenu_load_1').offset().top }, 1000);
        });

});
