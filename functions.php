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
        wp_register_script( 'jquerymobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array ( 'jquery' ), 1.1, true);

}

  function load_theme_styles() {
    if (is_home() || is_front_page() ){
              wp_enqueue_style( 'homepage' );  // no brackets needed for one line and no else
              wp_enqueue_script( 'frontpage' );
    }

    wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/javascript.js', array(), '1.0.0', true );
    wp_enqueue_style( 'bar-css', get_stylesheet_uri() );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('jquerymobile');


      //Localize script data to be used in my-js.js
   $scriptData = array();
   $scriptData['ajaxurl'] = admin_url( 'admin-ajax.php' );
   wp_localize_script( 'javascript', 'my_js_data', $scriptData );
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



function number_category(){
    $all_categories = get_category_info();
    $max = sizeof($all_categories);
    $first_active= false;
    for($i = 0; $i <$max; ++$i){
      ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php  echo ($first_active) ?: 'active'; $first_active = true; ?>"></li>
<?php
    }
}

function product_categories_list() {

$all_categories = get_category_info();
// $max = sizeof($all_categories);
$first_active= false;
foreach ($all_categories as $cat) {
   if($cat->category_parent == 0) {
     $category_id = $cat->term_id;
     // get the thumbnail id using the queried category term_id
$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
// get the image URL
$image = wp_get_attachment_url( $thumbnail_id );
  ?>
         <div class="item <?php  echo ($first_active) ?: 'active'; $first_active = true; ?>">


           <div class="col-xs-12 col-md-7 overflow_hidden product_cat_height " style="background-image: url(<?php echo $image?>); background-repeat: no-repeat; background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;";  >


             <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>
             <?php
             // print the IMG HTML
              // echo "<img src='{$image}' alt='' width='762' height='365' />";
              ?>
             <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
          </div>
          <div class="col-xs-12 col-md-5 overflow_hidden product_descrip_height descripcion">
                <span class="titulo">
                  <?php   echo $cat->name;
                   ?>
                </span>

                <div class="contenido">
                      <?php   echo $cat->category_description;
                       ?>
                </div>
                <div class="categoria_link">

                   <a href="<?php  echo get_term_link($cat->slug, 'product_cat'); ?>">
                        ¡ver mas del producto!    <span class="glyphicon glyphicon-shopping-cart"></span>
                  </a>
                </div>
          </div>
     </div>
     <?php
   }
}
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
