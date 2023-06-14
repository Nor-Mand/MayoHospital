<?php get_header() ?>

<section>
    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia fuga voluptatem debitis deleniti fugit, amet ab dolore architecto at animi, eius tempora! Ratione adipisci possimus illo, eos perspiciatis ad doloremque?</p>
        <div class="row gx-5">

        <?php mayo_custom_types_loop("specialities",3,"speciality-card","speciality-content") ?>

        </div>
      
    </div>
</section>



<?php get_template_part('template-parts/content/content-banner') ?>

<?php get_footer() ?>