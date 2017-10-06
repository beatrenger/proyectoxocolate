jQuery(function($){
        var   windowH =window.innerHeight; // Getting window size;
        $(".topheader").css("height",windowH - 80);

        $( window ).resize(function(e) {
         windowH =window.innerHeight; // Getting window size;
$(".topheader").css("height",windowH - 80);
        });


        $('#myCarousel').carousel({
        interval: false
        });


        $("#myCarousel").swiperight(function() {
         $(this).carousel('prev');
         });
      $("#myCarousel").swipeleft(function() {
         $(this).carousel('next');
    });

});
