<div class="container my-5">
    <div class="row">

        <h2>Nossas notícias</h2>

        <?php
        $posts_per_page = 6;

        $paged = isset($_GET['page']) ? $_GET['page'] : '1';

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
        );
        $posts = get_posts($args);
        $total_pages = ceil(wp_count_posts()->publish / $posts_per_page);

        $pagination_args = array(
            'format' => '?page=%#%',
            'total' => $total_pages,
            'current' => $paged,
            'current_class' => 'active',
            'prev_next' => true,
            'show_all' => true,
            'prev_text' => __('<span class="page-link">Anterior</span>'),
            'next_text' => __('<span class="page-link">Próximo</span>'),
            'before_page_number' => '<span class="page-link">',
            'after_page_number' => '</span>'
        );

        foreach ($posts as $key => $post) :
            setup_postdata($post);

        ?>

            <div class="col-12 col-sm-4 my-3">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover; object-position: center;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo wp_trim_words($post->post_title, 4, '...'); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words($post->post_content, 12, '...'); ?></p>
                        <a href="<?php echo get_page_link($post); ?>" class="btn btn-primary">Ler mais</a>
                    </div>
                </div>
            </div>

        <?php
        endforeach;
        ?>

    </div>

    <div class="pagination d-flex justify-content-center mt-4">
        <?php echo paginate_links($pagination_args); ?>
    </div>

    <?php wp_reset_postdata(); ?>

</div>