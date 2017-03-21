jQuery(function($){
      $( document ).ready(function() {
        console.log('Loaded Front Page js file successfully ');
        var   windowH =window.innerHeight; // Getting window size;
        $(".topheader").css("height",windowH - 80);

        $( window ).resize(function(e) {
         windowH =window.innerHeight; // Getting window size;
$(".topheader").css("height",windowH - 80);
        });


        $('#myCarousel').carousel({
        interval: false
        });
});





});
