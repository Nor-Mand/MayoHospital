<?php get_header() ?>

<section id="news-page">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga beatae nulla, quibusdam doloribus cum expedita maiores voluptates? Quo dignissimos est numquam aliquam illum, qui quos dicta impedit voluptate vero nulla asperiores corporis excepturi mollitia eaque esse? Ipsam, iusto nam?</p>
        <div class="row">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $array = array(
                'post_type' => 'news',
                'posts_per_page' => 8,
                'paged' => $paged,
            );

            $loop = new WP_Query($array);
            while ($loop->have_posts()) :
                $loop->the_post();

            ?>
                <div class="col-sm-3 news-container mx-auto">
                    <div class="news-card">
                        <h6 class="pb-2"><?php the_title() ?></h6>
                        <div class="booking-news">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                            </svg>
                            <p><?php the_date() ?></p>
                        </div>
                        <p class="mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20, '[...]'); ?></p>

                        <a href="<?php the_permalink() ?>" class="btn-small-line">Read more</a>
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