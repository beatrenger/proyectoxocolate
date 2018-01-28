
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
      <img id="logo-cart" src="<?php bloginfo('template_url'); ?>/images/cart.png" alt="">
        <div class="count_product">
           <span>52</span>
        </div>
    </div>
