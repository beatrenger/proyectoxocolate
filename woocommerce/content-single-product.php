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
					$titulo = $product->get_title(); // titulo
					$precio =  $product->get_price(); // precio
					$available_variations = $product->get_variation_attributes(); // atributos
					$s_description = $product->get_short_description(); // short description
					$l_description = $product->get_description(); // long descpription
          $upsells = $product->get_upsell_ids();

?>
<div class="container">

	<div class="row">
		<div class="titulo col-xs-12">
			<div class="col-xs-12">
				<?php echo $titulo ?>
			</div>
		</div>
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

			<div id="product_info" class="col-xs-12 col-md-5">
				<div class="col-xs-12">
					<div class="precio">
						<span> $<?php
								 echo $precio;
							 ?></span>
					</div>
					<?php
					if($available_variations){
	 						foreach($available_variations as $variation => $value){
						?>
						<div class="form-group">
						<label for="sel1">Lista de Selecion:</label>

						<select class="form-control" id="<?php echo $variation;?>">

								<?php
											foreach($value as $v){
												?>
												<option value=""> <?php echo $v;?></option>
												<?php
											}

							 ?>

						</select>
					</div>
						<?php
						}
					}
							 ?>

				</div>


	<div class="col-xs-6 cantidad">
		<span>Cantidad</span>
	</div>
	<div class="col-xs-6">

		<div class="input-group-carrito spinner-carrito">
				<button class="btn btn-brown" type="button"><b>-</b></button>
				<input type="text" class="form-control" value="0">
	      <button class="btn btn-brown" type="button"><b>+</b></button>

	    </div>
	</div>
	<div class="col-xs-12 sbmit-button">
		<?php if($product->is_purchasable( )){
			?>
				<button type="submit" class="btn btn-px"><b>Agregar al Carrito</b></button>
			<?php
		}else{
			?>
				<button type="button" class="btn btn-secondary">Desabilitado</button>
			<?php
		} ?>
	</div>

	<div class="col-xs-12" >
<div class="short_description">
		<?php echo $s_description; ?>
</div>

	</div>
	  </div>


	</div>

	<div class="row">
		<div class="col-xs-12">
				<div class="titulo">
					Articulos Sugeridos
				</div>


		</div>


	</div>

 <div class="row container-cats">
 		<?php
		// assuming the list of product IDs is are stored in an array called IDs;
$_pf = new WC_Product_Factory();

		foreach ($upsells as $cat) {
				$_product = $_pf->get_product($cat);
			 	$image = wp_get_attachment_url( $_product->get_image_id() );
		 	?>
			<div class="col-xs-12 col-sm-6 col-md-4" >
			  <a href="<?php echo $_product->get_permalink(); ?>">

			<div class="item-category"   style="background-image: url(<?php echo $image?>); background-repeat: no-repeat; background-position: center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;"; >

			<div class="category-title">
			  <?php echo $_product->get_title(); ?>
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
		} ?>
 </div>

 <div class="row">
 	 <div class="col-xs-12">
		 <div class="long_description">
 				<?php echo $l_description; ?>
 		</div>

 			</div>
 	 </div>
 </div>






	</div><!-- #product-<?php the_ID(); ?> -->

</div>
