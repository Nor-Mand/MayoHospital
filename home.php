<?php get_header() ?>

<section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        the_title(); 
        the_content();
    ?>
        <?php endwhile; else : ?>
        <p><?php esc_html('Sorry, no posts matched your criteria') ?></p>
    <?php endif; ?>

</section>
<?php get_footer() ?>