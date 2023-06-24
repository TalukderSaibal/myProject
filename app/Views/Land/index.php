<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="page_cover_img">
        <img src="<?= base_url('images/9e687619650116619f0d6affdd31fa6b.jpg') ?>" alt="cover images">
    </div>

    <div class="blog_block">
        <div class="row">

            <div class="col-md-8">
                <div class="blog_flex">
                    <div class="card" style="width: 20rem; margin:10px">
                        <img class="card-img-top" src="<?= base_url('images/bangla.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 20rem; margin:10px">
                        <img class="card-img-top" src="<?= base_url('images/bangla.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; margin:10px">
                        <img class="card-img-top" src="<?= base_url('images/bangla.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; margin:10px">
                        <img class="card-img-top" src="<?= base_url('images/bangla.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="menu_search">
                    <div class="search_form">
                        <form action="" method="post">
                            <input type="text" name="search" placeholder="Search...">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </div>
                </div>

                <div class="social_icon">
                
                    <div class="icon_block">
                        <div class="icon_flex">
                            <div class="all_icon">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="advertise">
                    <div class="advertise_img">
                        <img src="https://st2.depositphotos.com/1006899/8421/i/600/depositphotos_84219350-stock-photo-word-blog-suspended-by-ropes.jpg" alt="">
                    </div>
                </div>

                <div class="catgeory_block">
                    <div class="category_title">
                        <h2>Catgeories</h2>
                    </div>

                    <div class="categories_style">
                        File Upload
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="categories_style">
                        Movie Sharing
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                    <div class="categories_style">
                        Music Sharing
                        <div class="icon_div">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>

                </div>

                <div class="article_blog">
                    <div class="category_title">
                        <h2>Popular Article</h2>
                    </div>

                    <div class="category_list">
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <h4>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                </h4>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <h4>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                </h4>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                        <div class="catgories_style">
                            <img src="data:image/png;base64,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" alt="">
                            <div>
                                <h4>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, suscipit.
                                </h4>
                                <p>
                                    <span><i class="fa-regular fa-calendar"></i>15 Sep,2023 3.14 PM</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">The best SEO solution with 10 years of experience</h2>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('images/about.jpg') ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="<?= base_url('images/newsletter.png') ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">SEO Optimization</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Design</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Social Media Marketing</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Email Marketing</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">PPC Advertising</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">App Development</h5>
                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-1.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-1.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-2.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-2.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-3.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-3.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-4.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-4.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-5.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-5.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="<?= base_url('images/portfolio-6.jpg') ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="<?= base_url('images/portfolio-6.jpg') ?>" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                    <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('images/testimonial-1.jpg') ?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('images/testimonial-2.jpg') ?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('images/testimonial-3.jpg') ?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url('images/testimonial-4.jpg') ?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('images/team-1.jpg') ?>" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Jhon Doe</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('images/team-2.jpg') ?>" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Emma William</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="<?= base_url('images/team-3.jpg') ?>" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Noah Michael</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <?= $this->endSection('content') ?>