<?php get_header(); ?>

<main class="container">
  <div class="row">
    <div class="col-md-8">
      <!-- O conteúdo do post deve ser adicionado aqui -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-md-4">
      <!-- Adicione a barra lateral aqui -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
