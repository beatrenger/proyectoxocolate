<?php /* Template Name: homepage */ ?>
<?php
  get_header();
 ?>




  <div class="topheader">
    <?php
$image_bg = get_field('theme_home_page_background_image');
     ?>
     <!-- Top Background images -->
     <div class="background-image">
        <!--  dark_cover -->
       <div></div>
          <img src=<?php echo '"'.$image_bg['url'].'"' ?> alt="">
     </div>

    <div class="container">
      <div>
        <?php
            $imagelogo = get_field('logo_tipo');
                    if( !empty($imagelogo) ): ?>
                  <img class="logo_header" src="<?php echo $imagelogo['url']; ?>"  />
                    <?php endif; ?>
      </div>
      <div class="button-menu">
        <svg id="more-arrows">
              <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "></polygon>
              <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "></polygon>
              <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "></polygon>
            </svg>
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
