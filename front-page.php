<?php /* Template Name: homepage */ ?>
<?php
  get_header();
 ?>




  <div class="topheader">
    <div class="container">
      <div>
        <img  src="<?php bloginfo('template_url'); ?>/images/logofrontpage.png" alt="">
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
      <!-- <div class="prdct_image"> -->
         <img src="https://lorempixel.com/612/612/" alt="">
      <!-- </div> -->
  </div>
  <div class="content_product">
      <!-- <div class="prdct_image"> -->
         <img src="https://lorempixel.com/612/612/" alt="">
      <!-- </div> -->
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
