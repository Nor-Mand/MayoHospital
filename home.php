<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae saepe sunt dolorem? Voluptatem ad eius nostrum enim magni commodi totam? Numquam provident voluptates incidunt expedita eum fugiat consequuntur rerum ullam amet cupiditate quas delectus aperiam quae recusandae porro, accusamus autem?</p>
        <div class="row">
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
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '[...]'); ?></p>
                            <button class="btn-small-line">Read More</button>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/content/content-banner') ?>
<?php get_footer() ?>