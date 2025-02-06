<!DOCTYPE html>
<html dir="ltr" data-color="red" class="data_color">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kerri | Responsive Bootstrap 5.3.3 Personal Template</title>
    <meta name="description" content="Premium Responsive Bootstrap 5.3.3 Personal Template" />
    <meta name="keywords" content="bootstrap 5.3.3, premium, cv, personal, Portfolio, multipurpose" />
    <meta name="author" content="SRBThemes" />

    <link rel="shortcut icon"  href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link id="bootstrap" rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/bootstrap.min.css">

    <!-- Materialdesign icons Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/materialdesignicons.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/owl.carousel.min.css">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/animate.min.css">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/css/magnific-popup.css">

    <!-- Mobirise icons Css -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/mobiriseicons.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet"  href="{{ asset('assets') }}/css/style.css">
</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <!-- Start Navbar -->
    <nav class="sticky navbar navbar-expand-lg custom-nav navbar-light fixed-top">
        <div class="container">
            <a class="pt-0 navbar-brand logo" href="#">
                <img  src="{{ asset('assets') }}/images/logo.png" alt="" class="img-fluid logo-light">
                <img  src="{{ asset('assets') }}/images/logo-dark.png" alt="" class="img-fluid logo-dark">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="main_nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start All Cards -->
    <!-- START HOME -->
    <section class="section header-bg-img h-100vh align-items-center d-flex" id="home">
        <div class="bg-overlay"></div>
        <div class="container z-2">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mx-auto text-center header-content">
                        <h4 class="mb-4 text-white first-title">Welcome</h4>
                        <h1 class="mb-0 text-white header-name text-capitalize">I'M <span class="element fw-bold"></span></h1>
                        <p class="mx-auto mt-4 text-white header-desc">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                        <div class="pt-2 mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline-white rounded-pill">Download Cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_down">
            <a href="#about" class="scroll">
                <i class="text-white"></i>
            </a>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img  src="{{ asset('assets') }}/images/about.jpg" alt="" class="mx-auto img-fluid d-block img-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <h2><span class="fw-bold">About</span> Me</h2>
                        <h4 class="mt-4">Hello! <span class="text-primary fw-bold">I'M Kerri Deo.</span></h4>
                        <p class="mt-4 text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        <p class="mt-2 text-muted">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p class="mt-2 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <div>
                            <ul class="mt-4 mb-0 about-social list-inline">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SERVICES -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Services</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-growing-chart text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Graphic Design</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-hot-cup text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Unlimited Color</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-upload text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Media Marketing</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-layers text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Unlimited Wifi</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-website-theme text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Responsive Design</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mt-4 text-center rounded services-boxes">
                        <div class="services-boxes-icon">
                            <i class="mbri-edit text-primary display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Easy to customize</h5>
                            <div class="services-title-border"></div>
                            <p class="mt-3 text-muted">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START CTA -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">I Am Available For Freelancer.</h2>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="javascript:void(0)" class="btn btn-primary">Hire Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- START CLIENT -->
    <section class="section bg-light" id="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Client</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="pt-4 mt-4 row">
                <div class="col-lg-12">
                    <div id="owl-demo" class="owl-carousel" dir="ltr">
                        <div class="mx-auto text-center testi_boxes">
                            <div class="tam_testi_icon text-primary">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div class="img_testi">
                                    <img src="{{ asset('assets') }}/images/testi/testi-1.jpg" alt="" class="mx-auto img-thumbnail img-fluid rounded-circle">
                                </div>
                                <p class="mt-4 text-center client_review fst-italic text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="mt-4 mb-0 text-center client_name">- Ebony verty, <span class="fw-bold">Envato</span></p>
                            </div>
                        </div>
                        <div class="mx-auto text-center testi_boxes">
                            <div class="tam_testi_icon text-primary">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div class="img_testi">
                                    <img  src="{{ asset('assets') }}/images/testi/testi-2.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                </div>
                                <p class="mt-4 text-center client_review fst-italic text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="mt-4 mb-0 text-center client_name">- Ebony verty, <span class="fw-bold">Envato</span></p>
                            </div>
                        </div>
                        <div class="mx-auto text-center testi_boxes">
                            <div class="tam_testi_icon text-primary">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div class="img_testi">
                                    <img  src="{{ asset('assets') }}/images/testi/testi-3.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                </div>
                                <p class="mt-4 text-center client_review fst-italic text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="mt-4 mb-0 text-center client_name">- Ebony verty, <span class="fw-bold">Envato</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT -->

    <!-- START WORK -->
    <section class="text-center section" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Works</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row ">
                <ul class="mb-0 col list-unstyled list-inline text-uppercase work_menu" id="menu-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".WORK">WORK</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="mt-4 row work-filter">
                <div class="col-lg-4 work_item webdesign wordpress">
                    <a  href="{{ asset('assets') }}/images/works/1.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/1.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item WORK webdesign seo">
                    <a  href="{{ asset('assets') }}/images/works/2.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/2.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item seo wordpress">
                    <a  href="{{ asset('assets') }}/images/works/3.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/3.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item wordpress WORK webdesign">
                    <a  href="{{ asset('assets') }}/images/works/4.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/4.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item seo webdesign">
                    <a  href="{{ asset('assets') }}/images/works/5.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/5.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item devlopment webdesign">
                    <a  href="{{ asset('assets') }}/images/works/6.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img  src="{{ asset('assets') }}/images/works/6.jpg" class="mx-auto rounded img-fluid d-block" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END WORK -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Our <span class="fw-bold">Blog</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="mt-3 col-lg-4">
                    <div class="p-2 border-0 rounded card">
                        <div class="img_blog">
                            <img  src="{{ asset('assets') }}/images/blog/blog-1.jpg" alt="" class="mx-auto rounded img-fluid d-block">
                        </div>
                        <div class="p-3 content_blog">
                            <div>
                                <h5 class="mb-0 fw-bold"><a href="javascript:void(0)" class="text-body">There are many variations</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 h6 text-muted date_blog">11 March 2018 <a href="javascript:void(0)" class="text-primary fw-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="mb-0 h6"><a href="javascript:void(0)" class="text-muted fw-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="p-2 border-0 rounded card">
                        <div class="img_blog">
                            <img  src="{{ asset('assets') }}/images/blog/blog-2.jpg" alt="" class="mx-auto rounded img-fluid d-block">
                        </div>
                        <div class="p-3 content_blog">
                            <div>
                                <h5 class="mb-0 fw-bold"><a href="javascript:void(0)" class="text-body">Contrary to popular belief</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 h6 text-muted date_blog">18 March 2018 <a href="javascript:void(0)" class="text-primary fw-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="mb-0 h6"><a href="javascript:void(0)" class="text-muted fw-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-4">
                    <div class="p-2 border-0 rounded card">
                        <div class="img_blog">
                            <img  src="{{ asset('assets') }}/images/blog/blog-3.jpg" alt="" class="mx-auto rounded img-fluid d-block">
                        </div>
                        <div class="p-3 content_blog">
                            <div>
                                <h5 class="mb-0 fw-bold"><a href="javascript:void(0)" class="text-body">Lorem Ipsum is not simply</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0 h6 text-muted date_blog">22 March 2018 <a href="javascript:void(0)" class="text-primary fw-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="mb-0 h6"><a href="javascript:void(0)" class="text-muted fw-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="fw-bold">Contact</span> Us</h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-mobile2 text-primary h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Call Us On</h5>
                            <p class="text-muted">+985 123 7856</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-letter text-primary h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Email Us At</h5>
                            <p class="text-muted">Website.Kerri@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div>
                            <i class="mbri-pin text-primary h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title fw-bold">Visit Office</h5>
                            <p class="text-muted">202, Grasselli Street , Conway.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="col-lg-12">
                    <div class="form-kerri contact_form">
                        <div id="message"></div>
                        <form method="post" action="https://kerrivpreview.netlify.app/html/php/contact.php" name="contact-form" id="working_form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-2 form-group">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-2 form-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-2 form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-2 form-group">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-2 col-lg-12 text-end">
                                    <button type="submit" id="submit" class="submitBnt btn btn-primary">Send Massage</button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!--START FOOTER-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="text-center row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center text-white footer-alt">
                        <ul class="mb-0 list-unstyled list-inline">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                        </ul>
                        <p class="mt-3 mb-0 copyright_content">
                            <script>document.write(new Date().getFullYear())</script>
                            &copy; Kerri. Design by
                            <a class="copyright_content" target="_blank" href="https://themeforest.net/user/srbthemes">SRBThemes.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->
    <!-- End all Cards -->

    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- Dark and RTL Button -->
    <div class="position-fixed start-0 translate-middle-y rounded-start-2 z-3" style="top: 244px;">
        <div id="color-switcher" class="bg-body">
            <div>
                <h3 class="text-center fw-bold text-body">Select your color</h3>
                <ul class="pattern">
                    <li>
                        <a class="color1 active" data-color="red" href="#"></a>
                    </li>
                    <li>
                        <a class="color2" href="#" data-color="sky"></a>
                    </li>
                    <li>
                        <a class="color3" href="#" data-color="green"></a>
                    </li>
                    <li>
                        <a class="color4" href="#" data-color="blue"></a>
                    </li>
                    <li>
                        <a class="color5" href="#" data-color="skyblue"></a>
                    </li>
                    <li>
                        <a class="color6" href="#" data-color="yellow"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="#" class="settings"><i class="mdi mdi-palette"></i></a>
            </div>
        </div>

        <button type="button" class="border-0 dark-light-btn rounded-0 rounded-end-2 fs-5 d-flex align-items-center justify-content-center" id="dataTheme"><i class="mdi mdi-weather-night"></i> <i class="mdi mdi-weather-sunny"></i></button>
        <button type="button" class="border-0 rtl-ltr-btn rounded-0 rounded-end-2 fs-14 d-flex align-items-center justify-content-center text-cnter" id="theme_Rtl_Ltr"><span class="rtl">RTL</span><span class="ltr">LTR</span></button>
    </div>

    <!--All Javascript -->
    <script  src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script  src="{{ asset('assets') }}/js/jquery.min.js"></script>

    <!-- Text Type -->
    <script  src="{{ asset('assets') }}/js/typed.umd.js"></script>

    <!-- Owl Carousel -->
    <script  src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>

    <!-- Contact Js -->
    <script  src="{{ asset('assets') }}/js/contact.js"></script>

    <!-- Swicher js -->
    <script  src="{{ asset('assets') }}/js/swicher.js"></script>

    <!-- Work Filter -->
    <script  src="{{ asset('assets') }}/js/isotope.js"></script>

    <!-- Magnific Popup Js -->
    <script  src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>

    <!-- Custom Js -->
    <script  src="{{ asset('assets') }}/js/custom.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ["Kerri Deo.", "A Graphic Designer.", "A Photographer."],
            typeSpeed: 120,
            backSpeed: 60,
            backDelay: 3000,
            loop: true
        });
    </script>
</body>
</html>