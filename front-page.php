<?php get_header() ?>
<!-- Hero Section -->
<div class="hero">
    <div class="hero-back"></div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/banner1.jpg" class="d-block w-100" alt="banner">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/banner2.jpg" class="d-block w-100" alt="banner">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/banner3.jpg" class="d-block w-100" alt="banner">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row gx-5 justify-content-center align-items-center mt-4">
                <div class="col-sm-2">
                    <div class="hero-booking">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="hero-booking__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h5>Book an appointment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="hero-booking">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="hero-booking__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h5>Book an appointment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="hero-booking">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="hero-booking__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h5>Book an appointment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="hero-booking">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="hero-booking__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h5>Book an appointment</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="hero-booking">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="hero-booking__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h5>Book an appointment</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Services -->
<section>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Our centres of excellence</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, labore tempore soluta ratione repudiandae nesciunt error assumenda, sunt nam deleniti quo inventore aperiam nulla! Est dignissimos, facere nisi earum accusamus laboriosam eum mollitia veritatis consectetur, eveniet doloremque laborum eligendi sunt blanditiis voluptatem sequi ipsa iure exercitationem quisquam aperiam autem fuga quo ducimus excepturi! Earum suscipit labore laborum minima quos sunt!</p>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="" alt="Services">
                <div>
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="" alt="Services">
                <div>
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="" alt="Services">
                <div>
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Welcome to Mayo Hospital</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita delectus maxime exercitationem, magnam accusantium vel sequi necessitatibus excepturi voluptatum impedit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cupiditate fugit laudantium doloremque ducimus, quidem id delectus repellendus esse nemo quae distinctio reprehenderit debitis velit obcaecati et harum tempora eaque.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="" alt="icon">
                        <h5>Lorem ipsum dolor sit.</h5>
                    </div>
                    <div class="col-sm-6">
                        <img src="" alt="icon">
                        <h5>Lorem ipsum dolor sit.</h5>
                    </div>
                </div>
                <button class="btn btn-primary">Know More</button>
            </div>
            <div class="col-sm-6">
                <img src="" alt="Welcome Image">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="" alt="Image Contact">
            </div>
            <div class="col-sm-6">
                <h1>Book Appointment</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis aspernatur molestias dolores quo, unde recusandae.</p>
                [ Contact form 7 ]
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="" alt="testimonial imagen">
                    </div>
                    <div class="col-sm-10">
                        <h5>Lorem, ipsum.</h5>
                        <h6>Lorem, ipsum dolor.</h6>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eum atque dicta iusto molestiae itaque similique adipisci dolore repellendus, officia accusantium placeat, quam maiores veniam deserunt, eligendi laborum quas amet cupiditate cumque. Ad voluptatum commodi, possimus doloremque obcaecati quam est dolores saepe voluptates, soluta blanditiis! Ullam ipsum ea itaque iure.</p>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="" alt="testimonial imagen">
                    </div>
                    <div class="col-sm-10">
                        <h5>Lorem, ipsum.</h5>
                        <h6>Lorem, ipsum dolor.</h6>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eum atque dicta iusto molestiae itaque similique adipisci dolore repellendus, officia accusantium placeat, quam maiores veniam deserunt, eligendi laborum quas amet cupiditate cumque. Ad voluptatum commodi, possimus doloremque obcaecati quam est dolores saepe voluptates, soluta blanditiis! Ullam ipsum ea itaque iure.</p>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <video src="">Video</video>
            </div>
            <div class="col-sm-6">
                <h1>Contact Informaction</h1>
                <p>addres: Lorem ipsum dolor sit amet.</p>
                <p>addres: Lorem ipsum dolor sit amet.</p>

                <p>phone: Lorem ipsum dolor sit.</p>
                <p>phone: Lorem ipsum dolor sit.</p>

                <p>email: Lorem, ipsum dolor.</p>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Mayo news</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus nisi dolore enim hic, deleniti non explicabo animi tenetur corporis, accusantium voluptas dolores esse aspernatur placeat aliquid ad quod sapiente ipsum!</p>
                <button class="btn btn-primary">Read all news</button>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, vitae.</h6>
                        <div>
                            <img src="" alt="icon">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, illum!</p>
                        </div>
                        <button class="btn btn-warning">Read More</button>
                    </div>
                    <div class="col-sm-4">
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, vitae.</h6>
                        <div>
                            <img src="" alt="icon">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, illum!</p>
                        </div>
                        <button class="btn btn-warning">Read More</button>
                    </div>
                    <div class="col-sm-4">
                        <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, vitae.</h6>
                        <div>
                            <img src="" alt="icon">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, illum!</p>
                        </div>
                        <button class="btn btn-warning">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Our blog</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit perferendis, porro, accusantium eligendi sit ratione, soluta laudantium consectetur provident veritatis suscipit quas earum sapiente necessitatibus eos ipsam nostrum officiis nesciunt dolorem expedita quibusdam itaque. Harum error odit quasi nemo perspiciatis!</p>
            <div class="row">
                <div class="col-sm-4">
                    <img src="" alt="blog image">
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At accusamus nostrum eligendi dignissimos sequi?</p>
                    <button class="btn btn-outline-dark">Read More</button>
                </div>
                <div class="col-sm-4">
                    <img src="" alt="blog image">
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At accusamus nostrum eligendi dignissimos sequi?</p>
                    <button class="btn btn-outline-dark">Read More</button>
                </div>
                <div class="col-sm-4">
                    <img src="" alt="blog image">
                    <h5>Lorem ipsum dolor sit amet consectetur.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At accusamus nostrum eligendi dignissimos sequi?</p>
                    <button class="btn btn-outline-dark">Read More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/content/content-banner') ?>

<?php get_footer() ?>