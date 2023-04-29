<?php
get_header();
the_post();

?>
<main>
    <?php
    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
    $featured_image_url = $featured_image[0];
    ?>



    <div class="container my-4">
        <div class="row">
            <div class="col-md-8">
                <article>
                    <img src="<?php echo $featured_image_url ?>" class="img-fluid mb-4" alt="Article Thumbnail">
                    <h1 class="mb-4"><?php echo the_title() ?></h1>
                    <div class="mb-4">
                        <span class="mr-2"><i class="far fa-calendar-alt"></i> Published Date <i><?php the_date() ?></i></span><br>

                        <span class="mr-2"> <small class="text-muted">
                                <?php if (has_tag()) : ?>
                                    <span class="tags-links">
                                        Tags: <?php the_tags('', ', ', ''); ?>
                                    </span>

                                <?php endif; ?>
                            </small></span>
                    </div>
                    <div class="article-content">

                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <aside>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Latest Post</h5>
                            <?php
                            $current_post_id = get_the_ID();
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'post__not_in' => array($current_post_id)
                            );
                            $latest_post = new WP_Query($args);
                            if ($latest_post->have_posts()) {
                                while ($latest_post->have_posts()) {
                                    $latest_post->the_post();
                                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                    $featured_image_url = $featured_image[0];
                            ?>
                                    <img src="<?php echo $featured_image_url ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title() ?></h5>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15) ?></p>
                                        <p class="card-text"><small class="text-muted"><?php the_time('F j, Y') ?></small></p>
                                        <a href="<?php the_permalink() ?>" class="btn btn-warning">Read More</a>
                                    </div>
                            <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>






<?php get_footer() ?>