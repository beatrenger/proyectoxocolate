<?php /* Template Name: homepage */ ?>
<?php
  get_header();
 ?>



 <div class=""  style="">
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
     <div class="container">
       <div class="row">
         <div class="col-xs-12">
           <div class="titulo">
             Somos
           </div>
           <div class="text-somos">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed tristique risus, in vehicula orci. Integer quis euismod erat. Mauris non lobortis ante. Ut faucibus enim eu ante tincidunt semper. Donec erat nulla, suscipit non accumsan viverra, aliquam non urna. Suspendisse malesuada, nulla in aliquet faucibus, ante felis pharetra nibh, vel venenatis diam justo ac lectus. Maecenas vitae tempus est. Aliquam vel tortor pharetra, congue turpis non, placerat dui. Nam a mauris elit. Nullam vel pretium felis. Sed sagittis purus libero, vel tincidunt sapien iaculis in. Nunc vulputate a ipsum id vestibulum. Mauris tempus libero nec magna rutrum dapibus. Cras euismod ultricies ipsum, in pulvinar urna venenatis et.
           </div>
         </div>
       </div>
  </div>
  <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner" role="listbox">
      <!-- Indicators -->
      <div class="col-xs-12 col-md-7 overflow_hidden product_cat_height itsabsolute">
        <ol class="carousel-indicators">
          <?php do_action('product_categories_count'); ?>
        </ol>
      </div>
      <?php
      do_action('product_categories_list');
       ?>
    </div>

  </div>
  </div>
    <script type="text/javascript">



    </script>


   </div>
 </div>
   <?php get_footer(); ?>
