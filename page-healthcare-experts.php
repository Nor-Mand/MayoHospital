<?php get_header() ?>

<section>

        <?php
            $array = array(
                'post_type' => 'doctors',
                'posts_per_page' => 8,
            );

            $loop = new WP_Query($array);
            while ($loop->have_posts()) :
                $loop->the_post();
            ?>    
                <p><?php the_title(); ?></p>
                <p><?php echo get_post_meta( get_the_ID(), 'doctores_nombre', true ); ?></p>
                <p><?php echo get_post_meta( get_the_ID(), 'doctores_dias', true ) ?></p>
                <p><?php echo get_post_meta( get_the_ID(), 'doctores_horario', true ); ?></p>
            <?php
                wp_reset_postdata();
            ?>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Search By Name">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Select Speciality">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Select Gender">
            </div>
            <div class="col-sm-3">
                <button class="btn btn-warning">Search</button>
            </div>
        </div>
        <div class="row">
            <!-- card Doctor -->
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="" alt="Doctor image">
                    </div>
                    <div class="col-sm-6">
                        <h2>Lorem, ipsum dolor.</h2>
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <p>Lorem, ipsum.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-outline-dark">Doctor Profile</button>
                        <button class="btn btn-primary">Book Appointment</button>
                    </div>
                </div>
            </div>
            <!-- card Doctor -->
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="" alt="Doctor image">
                    </div>
                    <div class="col-sm-6">
                        <h2>Lorem, ipsum dolor.</h2>
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <p>Lorem, ipsum.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-outline-dark">Doctor Profile</button>
                        <button class="btn btn-primary">Book Appointment</button>
                    </div>
                </div>
            </div>
            <!-- card Doctor -->
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="" alt="Doctor image">
                    </div>
                    <div class="col-sm-6">
                        <h2>Lorem, ipsum dolor.</h2>
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <p>Lorem, ipsum.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-outline-dark">Doctor Profile</button>
                        <button class="btn btn-primary">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/content/content-banner') ?>

<?php get_footer() ?>