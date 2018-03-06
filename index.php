<?php
      get_header();


get_template_part( 'menu-bar' );

?>
 <div class="container">

        <div class="row">


    <?php
    if (is_product()){
        wc_get_template_part( 'content', 'single-product' );
    } else {

       the_content ( get_the_ID () );
    }
      ?>
    </div>
    </div>


<?php
get_footer(); ?>
