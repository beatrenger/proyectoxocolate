jQuery(function($) {

  console.log('loaded add_tocart javascript file');
  // ajax call

  // $.post(
  //     ajaxurl,
  //     {
  //         'action': 'add_foobar',
  //         'data':   'foobarid'
  //     },
  //     function(response){
  //         alert('The server responded: ' + response);
  //     }
  // );
  // $.post(my_js_data.ajaxurl, { action: 'ajax_call_test',  }, function(output) {
  //    console.log(output);
  //    console.log('thefuck');
  //
  // });

$(".sbmit-button").on("click",function(){
  $.post(my_js_data.ajaxurl, { action: 'add_to_cart',  }, function(output) {
     console.log(output);
     console.log('thefuck');

  });
})

});
