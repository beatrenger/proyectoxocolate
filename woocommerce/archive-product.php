
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
 * @version     3.3.0
 */

  get_header();
	get_template_part( 'menu-bar' );

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }


$thumbnail_id = get_woocommerce_term_meta( get_queried_object()->term_id, 'thumbnail_id', true );
$subcats = apply_filters( 'woocomerce_cat_byName',get_the_title($thumbnail_id)); // get info

// // get the image URL
$image = wp_get_attachment_url( $thumbnail_id );


 ?>
este es archive product
<div class="image-product-category"  style="background-image: url(<?php echo $image?>); background-repeat: no-repeat; background-position: center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;";  >
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
          <div class="image-product-title"><span> <?php woocommerce_page_title();?>  </span></div>
      </div>
    </div>
  </div>



<?php endif; ?>
</div>
<div class="container">


  <div class="row">



<div class="col-xs-12 body-products-conts">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
  		// do_action( 'woocommerce_before_main_content' );
	?>



		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>




		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */


      if(!$subcats) {
          do_action( 'woocommerce_before_shop_loop' );
        }
			?>

</div>
			<?php




 if($subcats){



   echo '<ul class="products">';
     foreach ($subcats as $sc) {

       // get the thumbnail id using the queried category term_id
        $thumbnail_id = get_woocommerce_term_meta($sc->term_id, 'thumbnail_id', true );
      // get the image URL
        $image = wp_get_attachment_url( $thumbnail_id );
      // get link
        $link = get_term_link( $sc->slug, $sc->taxonomy );
?>
       <li class="col-xs-12 col-sm-6 col-md-4 item-product">

 <div <?php post_class('productito'); ?>>
    <a class="link-to-product" href="<?php echo  $link; ?>">
      <?php echo "<img src='{$image}' alt=''  />"; ?>
      <div class="category-title">
       	<?php echo $sc->name ?>
      </div>
    </a>
</div>

       </li>

       <?php


     }
   echo '</ul>';
 }else{

// do_action( 'woocommerce_before_shop_loop' );

   woocommerce_product_loop_start();

  woocommerce_product_subcategories();

  while ( have_posts() ) : the_post();

   wc_get_template_part( 'content', 'product' );

  endwhile; // end of the loop.

   woocommerce_product_loop_end();


    /**
     * woocommerce_after_shop_loop hook.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );

 }


?>
		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>
    </div>
		<?php endif; ?>


</div>
</div>
<?php get_footer(); ?>
