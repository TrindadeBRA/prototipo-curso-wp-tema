<main class="container-fluid">
  <div class="row">

        <div id="carouselExampleDark" class="carousel carousel-dark slide p-0" data-bs-ride="carousel">

            <div class="carousel-inner">
                
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                );
                
                $posts = get_posts( $args );
                
                foreach ( $posts as $key => $post ) :
                    setup_postdata( $post );
                    $thumbnail_url = get_the_post_thumbnail_url( $post, 'full' );
               
                ?>

                <div class="carousel-item <?php if ($key == 0) { echo "active"; } ?>" data-bs-interval="10000">
                    <img src="<?php echo $thumbnail_url ;?>" class="d-block w-100" alt="..."  style="height: 500px; object-fit: cover; object-position: center;">
                    <div class="carousel-caption d-block bg-white p-2">
                        <h5><?php echo $post->post_title; ?></h5>
                        <p><?php echo wp_trim_words( $post->post_content, 25, '...' ); ?></p>
                    </div>
                </div>

                <?php
                endforeach;
                
                wp_reset_postdata();
                ?>
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

  </div>
</main>

