<?php
      get_header();


get_template_part( 'menu-bar' );

?>
 ESTE ES EL INDEX
 <div class="container">

        <div class="row">


    <?php   the_content ( get_the_ID () );  ?>
    </div>
    </div>


<?php
get_footer(); ?>
