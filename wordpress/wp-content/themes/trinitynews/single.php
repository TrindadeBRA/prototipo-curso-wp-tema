<?php get_header(); ?>

<?php get_template_part( 'components/banner-single' ); ?>

<main class="container">
  <div class="row">
    <div class="col-12 my-5">
        <?php the_content(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
