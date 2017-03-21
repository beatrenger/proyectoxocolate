<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-xs-12 col-sm-6 col-md-4 item-product">


<li <?php post_class('productito'); ?>>
	<a class="link-to-product" href="<?php the_permalink(); ?>">
	<?php
// var_dump( $product->add_to_cart_text());
// 		 var_dump($product->get_regular_price());
	do_action( 'woocommerce_before_shop_loop_item_title' );





	?>
	<div class="category-title">
	  <?php echo get_the_title()?>
	</div>
	</a>
</li>
</div>