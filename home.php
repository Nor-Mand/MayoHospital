<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae saepe sunt dolorem? Voluptatem ad eius nostrum enim magni commodi totam? Numquam provident voluptates incidunt expedita eum fugiat consequuntur rerum ullam amet cupiditate quas delectus aperiam quae recusandae porro, accusamus autem?</p>
        <div class="row">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $array = get_posts(array(
                'posts_per_page' => 1,
                'paged' => $paged,
            ));
            $loop = new WP_Query($array);
            while ($loop->have_posts()) :
                $loop->the_post();

            ?>
                <div class="col-10 col-sm-4 mx-auto mb-4">
                    <div class="blog-card">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        <div class="blog-content">
                            <h5 class="fw-bold"><?php the_title(); ?></h5>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 15, '[...]'); ?></p>
                            <button class="btn-small-line">Read More</button>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div>
            <?Php

            $total_pages = $loop->max_num_pages;

            if ($total_pages > 1) {

                $current_page = max(1, get_query_var('paged'));
                echo '<div class="col-sm-12 paginator">';
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« prev'),
                    'next_text'    => __('next »'),
                ));
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/content/content-banner') ?>
<?php get_footer() ?>