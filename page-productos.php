<?php /* Template Name: Productos */ ?>


<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

  get_header();
	get_template_part( 'menu-bar' );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
 ?>

  <div class="container container-cats">
    <h1 class="page-title"><?php echo get_the_title(); ?></h1>

    <div class="row">

<?php

  $all_categories = get_category_info();
foreach ($all_categories as $cat) {
  if($cat->category_parent == 0) {
      $category_id = $cat->term_id;
      $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
      // get the image URL
      $image = wp_get_attachment_url( $thumbnail_id );
?>
<div class="col-xs-12 col-sm-6 col-md-4" >
  <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>">

<div class="item-category"   style="background-image: url(<?php echo $image?>); background-repeat: no-repeat; background-position: center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;"; >

<div class="category-title">
  <?php echo $cat->name ?>
</div>
<div class="hover">
    <div class="circle">
        <span class="glyphicon glyphicon-plus"></span>
    </div>
</div>
</div>

</a>
 </div>
<?php

  }
}
?>



</div>
</div>


<?php get_footer(); ?>
