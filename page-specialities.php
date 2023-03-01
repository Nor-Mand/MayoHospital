<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia fuga voluptatem debitis deleniti fugit, amet ab dolore architecto at animi, eius tempora! Ratione adipisci possimus illo, eos perspiciatis ad doloremque?</p>
        <div class="row gx-5">
            <?php
            $args = array(
                'post_type' => 'specialities-post',
            );

            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
            ?>
                <div class="col-sm-4">
                    <div class="speciality-card">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
                        <div class="speciality-content">
                            <h5><?php the_title() ?></h5>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/content/content-banner') ?>

<?php get_footer() ?>