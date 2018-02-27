
jQuery(function($) {

  console.log('Loaded normal javascript file successfully');



window.onload = function(){

  $( '.loading-page').fadeOut( "slow", function() {
    $('.loading-page').addClass('hidden');
   });
};

// ajax call
// $.post(my_js_data.ajaxurl, { action: 'ajax_call_test',  }, function(output) {
//    console.log(output)
// });

// increment for product-page
// Select your input element.
// var number = document.getElementById('number');
//
// // Listen for input event on numInput.
// number.onkeydown = function(e) {
//     if(!((e.keyCode > 95 && e.keyCode < 106)
//       || (e.keyCode > 47 && e.keyCode < 58)
//       || e.keyCode == 8)) {
//         return false;
//     }
// }

$('.spinner-carrito .btn:first-of-type').on('click', function() {
    if($('.spinner-carrito input').val() > 0){
    $('.spinner-carrito input').val( parseInt($('.spinner-carrito input').val(), 10) - 1);
  }
  });
  $('.spinner-carrito .btn:last-of-type').on('click', function() {

        $('.spinner-carrito input').val( parseInt($('.spinner-carrito input').val(), 10) + 1);


  });

});
