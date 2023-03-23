<?php get_header() ?>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-10 mx-auto single-post">
                <?php the_post_thumbnail() ?>
                <?php the_content() ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-10 mx-auto">
                <h1>Other Blogs</h1>
                <div class="row gx-5">
                    <?php
                    global $post;

                    $last_posts = get_posts(array('posts_per_page' => 3));

                    foreach ($last_posts as $post) :
                        setup_postdata($post); ?>
                        <div class="col-10 col-sm-4 mx-auto">
                            <div class="blog-card">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                <div class="blog-content">
                                    <h5 class="fw-bold"><?php the_title(); ?></h5>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 10, '[...]'); ?></p>
                                    <a href="<?php the_permalink() ?>" class="btn-small-line">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/content/content-banner') ?>
<?php get_footer() ?>