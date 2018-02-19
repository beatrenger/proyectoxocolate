<?php
      get_header();


get_template_part( 'menu-bar' );

?>


    <?php   the_content ( get_the_ID () );  ?>
<?php
get_footer(); ?>
