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
		<div id="myCarouselProduct" class="col-xs-12 col-md-7 carousel slide" data-ride="carousel">

			<div class="col-xs-12 col-sm-10 col-md-10 main-image">
				<div class="carousel-inner" role="listbox">

				<?php
				$first_active= false;
				foreach( $attachment_ids as $attachment_id ){
					?>
						<div class="item <?php  echo ($first_active) ?: 'active'; $first_active = true; ?>">
								<img   src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>"   width="100%" height="auto">
						</div>
						<?php
						 }
							 ?>
							 </div>
				</div>



							<div class="col-xs-12 col-sm-2 col-md-2">

								<ol class="carousel-indicators">

								<?php
								$value = 0;
								foreach( $attachment_ids as $attachment_id ){
									?>

									 <li data-target="#myCarouselProduct" data-slide-to="<?php echo $value; ?>" class="<?php  echo ($first_active) ?: 'active'; $first_active = true; ?>">
									<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" class="img-thumbnail" alt="Cinque Terre" width="90" height="90">
									</li>

					<?php
					$value++;
							 }
								 ?>
				 </ol>
							</div>
		</div>

<<<<<<< HEAD
		<div id="product_info" class="col-xs-12 col-md-5">
					<div class="precio">
						<span> $<?php
								 echo $product->get_price();
							 ?></span>
					</div>

					<div class="input-group spinner">

				 <div class="input-group-btn-vertical">
					 <button class="boton" type="button"></button>
					 <input type="text" class="form-control" value="0">
			 
					 <button class="boton" type="button"></button>

				 </div>
			 </div>
=======
		<div class="col-xs-12 col-md-5">
lololol
>>>>>>> 8fccfea0a042f9021d79e4050a3aec1d3a881731
		</div>

</div>




</div><!-- #product-<?php the_ID(); ?> -->
