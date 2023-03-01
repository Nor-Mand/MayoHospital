<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae saepe sunt dolorem? Voluptatem ad eius nostrum enim magni commodi totam? Numquam provident voluptates incidunt expedita eum fugiat consequuntur rerum ullam amet cupiditate quas delectus aperiam quae recusandae porro, accusamus autem?</p>
        <div class="row">
            <div class="col-sm-4">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_title();
                        the_content();
                ?>
                    <?php endwhile;
                else : ?>
                    <p><?php esc_html('Sorry, no posts matched your criteria') ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/content/content-banner') ?>
<?php get_footer() ?>