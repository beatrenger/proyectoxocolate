
jQuery(function($) {

  console.log('Loaded normal javascript file successfully');



window.onload = function(){

  $( '.loading-page').fadeOut( "slow", function() {
    $('.loading-page').addClass('hidden');
   });
};

// ajax call
$.post(my_js_data.ajaxurl, { action: 'ajax_call_test',  }, function(output) {
   console.log(output)
});

});
