<?php get_header(); ?>

<?php
  if (is_paged()) {
    get_template_part( 'components/banner-carousel' );
    get_template_part( 'components/last-news' );
  }

  var_dump(is_front_page());  
  var_dump(is_home());
  var_dump(is_page());
  var_dump(is_paged());
?>

<?php get_footer(); ?>
