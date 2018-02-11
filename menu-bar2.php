
<div id="menu-bar">
  <div class="container">
    <div class="row">
      <di  class="col-xs-12 icons-position">
          <div id="nav-icon3">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
          </div>
      <a id="logo-bara" href='<?php echo get_site_url(); ?>'> <img  src="<?php bloginfo('template_url'); ?>/images/logo-bara.png" alt=""></a>


        <?php
           wp_nav_menu( array(
            'theme_location' => 'header',
            'link_before' => '<div class="link_text">' ,
            'link_after' => '</div>'
        ));
            ?>
          </div>
      </div>
    </div>
    <div class="the_cart">
      <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">

      <img id="logo-cart" src="<?php bloginfo('template_url'); ?>/images/cart.png" alt="">
        <div class="count_product">
           <span>  <?php echo sprintf ( _n( '%d artículos', '%d artículos', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?> </span>
        </div>
        </a>
    </div>
