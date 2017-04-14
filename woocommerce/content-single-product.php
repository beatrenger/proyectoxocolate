<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
global $product;
				  $attachment_ids = $product->get_gallery_attachment_ids(); //product gallery



?>
<div class="row">
		<div class="col-xs-12 col-md-8">
			<div class="col-xs-12 col-md-4">
				<?php
				foreach( $attachment_ids as $attachment_id ){
					?>
					<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" class="img-thumbnail" alt="Cinque Terre" width="236" height="236">

	<?php
			 }
				 ?>

			</div>
			<div class="col-xs-12 col-md-8">
				<img src="http://lorempixel.com/200/200/sports/" alt="">

			</div>
		</div>
</div>




</div><!-- #product-<?php the_ID(); ?> -->
