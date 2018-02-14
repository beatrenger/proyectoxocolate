
<?php
// add_action('init','ajaxurl'); // add ajaxurl on top of header
$max = 0;
function proyectoxocolate_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
 }

 add_action( 'after_setup_theme', 'proyectoxocolate_theme_setup' );
 /**
  * Register style sheet.
  */
  function register_more_stylesheets() {
    wp_register_style( 'stylesheet_name', get_stylesheet_directory_uri() . '/stylesheet.css' );
         wp_register_style( 'homepage', get_stylesheet_directory_uri() . '/css/homepage.css' );
        wp_register_style('bar-css', get_template_directory_uri() . '/css/bar-css.css', array(), '1.0', 'all');
        wp_register_script( 'frontpage', get_template_directory_uri() . '/js/frontpage.js', array ( 'jquery' ), 1.1, true);
        wp_register_script( 'menu-bar', get_template_directory_uri() . '/js/menu-bar.js', array ( 'jquery' ), 1.1, true);
        wp_register_script( 'jquerymobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array ( 'jquery' ), 1.1, true);
        wp_register_style('single_product', get_template_directory_uri() . '/css/single_product.css', array(), '1.0', 'all');
         wp_register_script( 'jquerymobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array ( 'jquery' ), 1.1, true);
}

  function load_theme_styles() {

    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array(), '1.0.0', true );
    wp_enqueue_style( 'bar-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
     wp_enqueue_script( 'jquery' );
     wp_enqueue_script('jquerymobile');
      wp_enqueue_script( 'menu-bar');
     wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', array(), '1.0.0', true );
      //Localize script data to be used in my-js.js
   $scriptData = array();
   $scriptData['ajaxurl'] = admin_url( 'admin-ajax.php' );
   wp_localize_script( 'javascript', 'my_js_data', $scriptData );

   if (is_home() || is_front_page() ){
             wp_enqueue_style( 'homepage' );  // no brackets needed for one line and no else
              wp_enqueue_script( 'frontpage' );
   }else {
     if ( is_product() ) {
       wp_enqueue_style( 'single_product', get_stylesheet_uri() );
     }
   }

  }

function add_my_stylesheet() {
    if ( is_page('products-services') ) // using page slug
    wp_enqueue_style( 'stylesheet_name' );  // no brackets needed for one line and no else
}
add_action( 'init', 'register_more_stylesheets' ); // should I use wp_print_styles hook instead?
add_action('wp_enqueue_scripts', 'load_theme_styles');


// Woocomerce Functions
add_action( 'product_categories_list', 'product_categories_list' );
add_action( 'product_categories_count', 'number_category' );
add_filter('woocomerce_cat_byName','woocommerce_subcats_from_parentcat_by_NAME');


function woocommerce_subcats_from_parentcat_by_NAME($parent_cat_NAME ) {
  $IDbyNAME = get_term_by('name', $parent_cat_NAME, 'product_cat');
  $product_cat_ID = $IDbyNAME->term_id;
    $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => false,
       'parent' => $product_cat_ID,
       'taxonomy' => 'product_cat'
    );

get_categories($args);
    $term = get_queried_object();

    $children = get_terms( $term->taxonomy, array(
    'parent'    => $term->term_id,
    'hide_empty' => false
    ) );

    // var_dump($children);
    // print_r($children); // uncomment to examine for debugging
    if($children) { // get_terms will return false if tax does not exist or term wasn't found.
      return $children;
    }else{
      return false;
    }




}





function product_categories_list() {

$all_categories = get_category_info();
// $max = sizeof($all_categories);
  return $all_categories;
}

function get_category_info(){
  $taxonomy     = 'product_cat';
 $hierarchical = 1;      // 1 for yes, 0 for no
 $empty        = 0;
      $args = array(
        'taxonomy'     => $taxonomy,
        'hierarchical' => $hierarchical,
        'hide_empty'   => $empty,
        'parent' => 0
        );
return get_categories( $args );
}

function themeslug_enqueue_script() {
wp_enqueue_script( 'add-to-cart-variation', get_bloginfo( 'url' ). '/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.js', false );
}
 add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );



add_action('wp_ajax_ajax_test', 'ajax_test');
add_action('wp_ajax_nopriv_ajax_test', 'ajax_test');
add_action('wp_ajax_ajax_call_test', 'ajax_call_test');
add_action('wp_ajax_nopriv_ajax_call_test', 'ajax_call_test');






function ajax_call_test() {
   echo "this call actually worked";
   die();
}

function ajax_test(){
  echo "testing";
  die();
}
