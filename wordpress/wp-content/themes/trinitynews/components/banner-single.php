<?php
    $post_id = get_the_ID();
    $author_id = get_post_field( 'post_author', $post_id );
    $categories = get_the_category($post_id);
?>

<div id="hero-posts" class="bg-dark text-secondary px-4 py-5 text-center" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>');">
    <div class="py-5">
        <div class="d-flex justify-content-center gap-3 mb-4">
            <?php
                foreach ($categories as $categorie) :
                    echo "<span class='text-white px-3 py-2 border border-light rounded'> $categorie->name </span>";
                endforeach
            ?>
        </div>
        <h1 class="display-5 fw-bold text-white"><?php echo get_the_title($post_id); ?></h1>
        <div class="d-flex flex-column justify-content-evenly mt-4">
            <span class="fw-bold text-white">Por: <?php echo get_the_author_meta( 'display_name', $author_id ); ?></span>
            <span class="fw-bold text-white">Publicado em: <?php echo get_the_date( 'd/m/Y', $post_id ); ?></span>
        </div>
    </div>
</div>

