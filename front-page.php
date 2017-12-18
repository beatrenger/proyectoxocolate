<?php /* Template Name: homepage */ ?>
<?php
  get_header();
 ?>




  <div class="topheader">
    <div class="container">
      <div>
        <?php
            $imagelogo = get_field('logo_tipo');
                    if( !empty($imagelogo) ): ?>
                  <img src="<?php echo $imagelogo['url']; ?>"  />
                    <?php endif; ?>
      </div>
      <div class="button-menu">
        <img src="<?php bloginfo('template_url'); ?>/images/flecha-scroll-down.png" alt="">
        </div>

    </div>
  </div>

  <?php
  get_template_part( 'menu-bar' ); ?>
   <div class="content-body">

<div class="grid">
  <div class="content_product">
    <?php
        $product_image = get_field('product_image');
                if( !empty($product_image) ): ?>
                  <div class="prdct_image">
              <img src="<?php echo $product_image['url']; ?>"  />
                </div>
                <?php endif; ?>

  </div>
  <div class="content_product">
    <?php
        $product_image2 = get_field('product_image2');
                if( !empty($product_image2) ): ?>
                  <div class="prdct_image">
              <img src="<?php echo $product_image2['url']; ?>"  />
                </div>
                <?php endif; ?>
  </div>
</div>


      <div class="content_category">
        <div class="prdct_cat">
          <img src="" alt="">
        </div>
        <div class="text_info">
          <div class="title">
            Content Title Mother Fuckers
          </div>
          <div class="description">
            Content Mother Fuckers Content Mother Fuckers
          </div>
        </div>
      </div>
      <div class="content_category">
        <div class="prdct_cat">
          <img src="" alt="">
        </div>
        <div class="text_info">
          <div class="title">
            Content Title Mother Fuckers
          </div>
          <div class="description">
            Content Mother Fuckers Content Mother Fuckers
          </div>
        </div>
      </div>
      <div class="content_category">
        <div class="prdct_cat">
          <img src="" alt="">
        </div>
        <div class="text_info">
          <div class="title">
            Content Title Mother Fuckers
          </div>
          <div class="description">
            Content Mother Fuckers Content Mother Fuckers
          </div>
        </div>
      </div>

   </div>

   <?php get_footer(); ?>
