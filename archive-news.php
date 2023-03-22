<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga beatae nulla, quibusdam doloribus cum expedita maiores voluptates? Quo dignissimos est numquam aliquam illum, qui quos dicta impedit voluptate vero nulla asperiores corporis excepturi mollitia eaque esse? Ipsam, iusto nam?</p>
        <div class="row">
            <?php
                $array = array(
                    'post_type' => 'news',
                );

                $loop = new WP_Query($array);
                while ( $loop->have_posts() ){
                    $loop->the_post();
                ?>    
                    <div class="col-sm-4 mb-4">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_author() ?></p>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '[...]'); ?></p>
                        <button class="btn btn-outline-dark">Read More</button>
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