<?php get_header(); ?>

<?php get_template_part( 'components/banner-single' ); ?>

<main class="container">
  <div class="row">
    <div class="col-12">
      <!-- O conteúdo do post deve ser adicionado aqui -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
