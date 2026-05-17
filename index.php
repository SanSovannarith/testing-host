<?php include 'include/cn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Final Project</title>
    <link rel="icon" type="image/png" href="Images/logo-ang.svg">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php include 'include/header.php' ?>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h3 class="m-0 logo-title">
                    <img src="Images/logo-ang.svg" class=" me-2 logo-img" alt="Logo">
                    ANG KOR SIEM REAP
                </h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="services.html" class="nav-item nav-link">Services</a>
                    <a href="packages.html" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="pumpkin.html" class="dropdown-item">Golden Pumpkin</a>
                            <a href="Jomno.html" class="dropdown-item">JomNo Modern</a>
                            <a href="malis.html" class="dropdown-item">Malis Siem Reap</a>
                            <a href="sokkhak.html" class="dropdown-item">Sokkhak River Lounge</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="booking.html" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="Banners/hotel.png" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Welcome
                                    To</h4>
                                <h2 class="display-4 text-capitalize text-white mb-4">Grand Hotel D'Angkor</h2>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Banners/bannerSR.avif" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Welcome
                                    To</h4>
                                <h2 class="display-4 text-capitalize text-white mb-4">ANG KOR SIEM REAP</h2>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Banners/templebayon.webp" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Welcome
                                    To</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Bayon Temple</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Discover
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <section class="about-section py-3">
            <div class="about-container">

                <!-- eyebrow label -->
                <div class="about-eyebrow">
                    <span class="eyebrow-line"></span>
                    <span class="eyebrow-text">About Us</span>
                    <span class="eyebrow-line"></span>
                </div>

                <!-- layout -->
                <div class="about-layout">

                    <!-- LEFT: main image + two thumbnails below -->
                    <div class="about-images">
                        <div style="position:relative;">
                            <img src="Banners/BannerAboutUs1.png" alt="ANG KOR SIEM REAP" class="about-img-main">
                        </div>
                    
                        <div class="about-img-row">
                            <img src="Images/about.jpg" alt="Restaurant interior" class="about-img-secondary">
                            <!-- navy tile with years stat -->
                            <div class="years-card">
                                <span class="years-number">10+</span>
                                <span class="years-label">Years</span>
                            </div>
                            <!-- <div style=" background: var(--navy); border-radius: 12px; height: 140px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px;">
                                <span style="font-family:'Playfair Display',serif;font-size:30px;font-weight:600;color:#fff;line-height:1;">10+</span>
                                <span style="font-size:11px;color:rgba(255,255,255,0.65);letter-spacing:1.5px;text-transform:uppercase;">Years</span>
                            </div> -->
                        </div>
                    </div>

                    <!-- RIGHT: overlapping white card -->
                    <div class="about-card">

                        <h2>Welcome to <em>ANG KOR<br>SIEM REAP</em></h2>
                        <div class="about-divider"></div>

                        <p>Seamless reservations, authentic Khmer cuisine, unforgettable dining moments. We connect you
                            with
                            top restaurants so every visit becomes a lasting memory.</p>

                        <!-- 3 stat boxes -->
                        <div class="about-stats">
                            <div class="stat-box filled">
                                <div class="stat-num">500+</div>
                                <div class="stat-lbl">Restaurants</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-num">20K+</div>
                                <div class="stat-lbl">Happy Guests</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-num">98%</div>
                                <div class="stat-lbl">Satisfaction</div>
                            </div>
                        </div>

                        <!-- feature checklist 2-col grid -->
                        <ul class="about-features">
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                Easy Table Reservations
                            </li>
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                Top Restaurant Partners
                            </li>
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                Instant Confirmation
                            </li>
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                Flexible Booking Options
                            </li>
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                User-Friendly Interface
                            </li>
                            <li>
                                <span class="feat-dot"><i class="fa fa-check" style="font-size:8px;"></i></span>
                                24/7 Customer Support
                            </li>
                        </ul>

                        <!-- CTA buttons -->
                        <div class="about-cta">
                            <a href="#" class="btn-primary-c">
                                Read More <i class="fa fa-arrow-right" style="font-size:11px;"></i>
                            </a>
                            <a href="contact.html" class="btn-ghost-c">
                                <i class="fa fa-phone" style="font-size:11px;"></i> Contact Us
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-0">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Searvices</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <!-- ROW 1: 4 equal icon cards -->
                <div class="cards-row-1">

                    <!-- Card: Quality Foods -->
                    <div class="svc-card">
                        <span class="card-number">01</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-utensils"></i>
                        </div>
                        <span class="svc-badge">Cuisine</span>
                        <h4 class="svc-title">Quality Foods</h4>
                        <p class="svc-desc">Farm-fresh ingredients sourced daily. Authentic Khmer recipes perfected over
                            generations, served with modern elegance.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <div class="svc-card">
                        <span class="card-number">02</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-calendar-check"></i>
                        </div>
                        <span class="svc-badge">Booking</span>
                        <h4 class="svc-title">Table Booking</h4>
                        <p class="svc-desc">Reserve your perfect table in seconds — choose your date, time, and seating
                            preference with instant confirmation.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <!-- Card: Hotel Reservation -->
                    <div class="svc-card">
                        <span class="card-number">03</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-hotel"></i>
                        </div>
                        <span class="svc-badge">Stay</span>
                        <h4 class="svc-title">Hotel Reservation</h4>
                        <p class="svc-desc">From boutique guesthouses to 5-star resorts — handpicked accommodations
                            bookable
                            in just a few clicks.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <!-- Card: 24/7 Support -->
                    <div class="svc-card">
                        <span class="card-number">04</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-headset"></i>
                        </div>
                        <span class="svc-badge">Support</span>
                        <h4 class="svc-title">24/7 Support</h4>
                        <p class="svc-desc">Our dedicated team is always here — day or night — to assist with changes,
                            special requests, or any questions.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Destination Start -->
        <div class="container-fluid destination py-3">
            <div class="container py-3">
                <div class="mx-auto text-center mb-3" style="max-width: 900px;">
                    <h5 class="section-title px-3">Ang Kor</h5>
                    <h1 class="mb-0">SIEM REAB</h1>
                </div>
                <div class="tab-class text-center">

                    <ul class="nav nav-pills custom-tabs">
                    
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab-1">
                                <span>All</span>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab-4">
                                <span>Foods</span>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab-5">
                                <span>Desert</span>
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab-6">
                                <span>Drinks</span>
                            </a>
                        </li>
                    
                    </ul>
                    <!-- <ul class="nav nav-pills  d-inline-flex justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                                data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                                data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Foods</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                                data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Desert</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                                data-bs-toggle="pill" href="#tab-6">
                                <span class="text-dark" style="width: 150px;">Drinks</span>
                            </a>
                        </li>
                    </ul> -->
                    <div class="tab-content">
                        <!-- All Items -->
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <!-- <div class="row g-4 "> -->
                            <div class="container-fluid packages py-0">
                                <div class="container py-3">
                                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                        <h5 class="section-title px-3">Ank Kor</h5>
                                        <h1 class="mb-0">SIEM REAB MENUS</h1>
                                    </div>
                                    <div class="packages-carousel owl-carousel">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/Prahok.webp" alt=""> 
                                                    <div class="destination-overlay p-2">
                                                        <h5 class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Prahok</h5>
                                                        <div class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold ms-auto">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1">
                                                            <i class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/LokLak.webp" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Lok Lak</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold ms-auto">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/Amok.webp" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Amok Fish</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/PrahokKtiss.webp" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Prahok Ktiss</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Foods Items -->
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <!-- <div class="row g-4 "> -->
                            <div class="container-fluid packages py-2">
                                <div class="container py-3">
                                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                        <h5 class="section-title px-3">Ank Kor</h5>
                                        <h1 class="mb-0">SIEM REAB MENUS</h1>
                                    </div>
                                    <div class="packages-carousel owl-carousel">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded" src="Images/foodsMenu/Pork-rice.jpg"
                                                        alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Pork Rice</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/Red-curry.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Khmer red Curry</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/Sour-soup.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Sour Soup</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/foodsMenu/rice-noodles.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Rice Noodles</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dessert Items -->
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <!-- <div class="row g-4 "> -->
                            <div class="container-fluid packages py-2">
                                <div class="container py-3">
                                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                        <h5 class="section-title px-3">Ank Kor</h5>
                                        <h1 class="mb-0">SIEM REAB MENUS</h1>
                                    </div>
                                    <div class="packages-carousel owl-carousel">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Sankhya_Lapov.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Sankhya Lapov</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/NomLort.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Nom Lort</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Tub_Tim_Grob.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Tub Tim Grob</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Banh_Ja'neuk.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Banh Ja'neuk</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Drinks Items -->
                        <div id="tab-6" class="tab-pane fade show p-0">
                            <!-- <div class="row g-4 "> -->
                            <div class="container-fluid packages py-2">
                                <div class="container py-3">
                                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                        <h5 class="section-title px-3">Ank Kor</h5>
                                        <h1 class="mb-0">SIEM REAB MENUS</h1>
                                    </div>
                                    <div class="packages-carousel owl-carousel">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Sankhya_Lapov.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Sankhya Lapov</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/NomLort.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Nom Lort</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Tub_Tim_Grob.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Tub Tim Grob</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="destination-img">
                                                    <img class="img-fluid rounded w-100"
                                                        src="Images/DessertsMenu/Banh_Ja'neuk.jpg" alt="">
                                                    <div class="destination-overlay p-2">
                                                        <h5
                                                            class="btn btn-primary text-white rounded-pill border py-2 px-4">
                                                            Banh Ja'neuk</h5>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between w-100">
                                                            <h5 class="text-white mb-0">ANG KOR FOOD</h5>
                                                            <span class="text-warning fw-bold">$4.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="search-icon position-absolute top-3 end-3">
                                                        <a data-lightbox="destination-1"><i
                                                                class=" fas fa-shopping-cart btn btn-light text-primary fa-1x rounded-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination End -->

        <!-- Packages Start -->
        <div class="container-fluid packages py-0">
            <div class="container py-0">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Featured Dishes</h5>
                    <h1 class="mb-0">ANG KOR SIEM REAP</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <!-- Card-1 -->
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="Images/ALLRestaurants/Golden-Pumpkin-Restaurant-Front-View.jpg"
                                class="img-fluid w-100 rounded-top" alt="Image" style="height: 250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Siem Reap</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>Monday - Sunday</small>
                            </div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Golden Pumpkin Restaurant</h5>
                                <small class="text-uppercase">Restaurant</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4" style="font-size: small;">Pumpkin is a nutrient-rich vegetable packed
                                    with vitamins and minerals that support heart health and may help lower cholesterol.
                                    A longtime favorite in Cambodian sweet desserts, Golden Pumpkin also creatively uses
                                    it in savory dishes.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card-2 -->
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="Images/ALLRestaurants/JomNo.webp" class="img-fluid w-100 rounded-top" alt="Image"
                                style="height: 250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Siem Reap</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>Monday - Friday</small>
                            </div>

                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">JOMNO Modern Khmer Cuisine</h5>
                                <small class="text-uppercase">Restaurant</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4" style="font-size: small;">Welcome to Jomno, a unique Siem Reap
                                    restaurant that reimagines the spirit of Cambodia through an unforgettable culinary
                                    journey, honoring tradition while celebrating the present.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card-3 -->
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="Images/ALLRestaurants/b4.jpg" class="img-fluid w-100 rounded-top" alt="Image"
                                style="height: 250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Siem Reap</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>Monday - Sunday</small>
                            </div>

                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Sokkhak River Lounge</h5>
                                <small class="text-uppercase">Restaurant</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4" style="font-size: small;">This stunning, three-story building includes a
                                    café on the ground floor, an impressive wine bar on the middle level and the crown
                                    jewel
                                    – a lush, stylish and spacious rooftop cocktail bar with sweeping views of Siem Reap
                                    River.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card-4 -->
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="Images/ALLRestaurants/Malis.jpg" class="img-fluid w-100 rounded-top" alt="Image"
                                style="height: 250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Siem Reap</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>Monday - Sunday</small>
                            </div>

                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Thayland Trip</h5>
                                <small class="text-uppercase">Restaurant</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4" style="font-size: small;">The restaurant features a main dining area bar
                                    and lounge downstairs with private dining rooms available Upstairs is suitable for
                                    private functions gala dinners banquets and culinary cooking workshops.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Packages End -->

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-3">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Team behind the flavor</h5>
                    <h1 class="mb-0">Our Chefs & Partners</h1>
                </div>
                <div class="row g-4 row-cols-1 row-cols-md-3 row-cols-lg-5">

                    <!-- Card 1 -->
                    <div class="col">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="Images/NameClient/Rith.png" class="img-fluid w-100 rounded-top"
                                        alt="Chef Marcus" style="height: 220px; object-fit: cover;">
                                </div>
                                <div class="guide-icon rounded-pill p-1">
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-facebook-f" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-twitter" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-instagram" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-linkedin-in" style="font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <span class="role-badge">Executive Chef</span>
                                    <h4 class="mt-2" style="font-size: 15px;">Chef San Sovannarith</h4>
                                    <div class="divider-line mx-auto my-2"></div>
                                    <p class="mb-0" style="font-size: 13px;">20 years of culinary mastery</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="Images/NameClient/Lay.jpg" class="img-fluid w-100 rounded-top"
                                        alt="Chef Marcus" style="height: 220px; object-fit: cover;">
                                </div>
                                <div class="guide-icon rounded-pill p-1">
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-facebook-f" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-twitter" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-instagram" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-linkedin-in" style="font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <span class="role-badge">Pastry Chef</span>
                                    <h4 class="mt-2" style="font-size: 15px;">Tang KimLay</h4>
                                    <div class="divider-line mx-auto my-2"></div>
                                    <p class="mb-0" style="font-size: 13px;">Cambodian-inspired desserts</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="Images/NameClient/Mey.JPG" class="img-fluid w-100 rounded-top"
                                        alt="Chef Marcus" style="height: 220px; object-fit: cover;">
                                </div>
                                <div class="guide-icon rounded-pill p-1">
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-facebook-f" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-twitter" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-instagram" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-linkedin-in" style="font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <span class="role-badge">Executive Chef</span>
                                    <h4 class="mt-2" style="font-size: 15px;">Chef Yong LeapMey</h4>
                                    <div class="divider-line mx-auto my-2"></div>
                                    <p class="mb-0" style="font-size: 13px;">20 years of culinary mastery</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="Images/NameClient/Sokneang.jpg" class="img-fluid w-100 rounded-top"
                                        alt="Chef Marcus" style="height: 220px; object-fit: cover;">
                                </div>
                                <div class="guide-icon rounded-pill p-1">
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-facebook-f" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-twitter" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-instagram" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-linkedin-in" style="font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <span class="role-badge">Executive Chef</span>
                                    <h4 class="mt-2" style="font-size: 15px;">Chhoeunr Sokneang</h4>
                                    <div class="divider-line mx-auto my-2"></div>
                                    <p class="mb-0" style="font-size: 13px;">20 years of culinary mastery</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="Images/NameClient/HongMeng.jpg" class="img-fluid w-100 rounded-top"
                                        alt="Chef Marcus" style="height: 220px; object-fit: cover;">
                                </div>
                                <div class="guide-icon rounded-pill p-1">
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-facebook-f" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-twitter" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-instagram" style="font-size: 10px;"></i>
                                    </a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-0"
                                        style="height: 24px; width: 24px; padding: 0; display: inline-flex; align-items: center; justify-content: center;"
                                        href="">
                                        <i class="fab fa-linkedin-in" style="font-size: 10px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <span class="role-badge">Executive Chef</span>
                                    <h4 class="mt-2" style="font-size: 15px;">Chef Chhun HongMeng</h4>
                                    <div class="divider-line mx-auto my-2"></div>
                                    <p class="mb-0" style="font-size: 13px;">20 years of culinary mastery</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Travel Guide End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Stay Connected</h5>
                    <h1 class="text-white mb-4">Join Our Foodie Newsletter</h1>
                    <p class="text-white mb-5">Be the first to know about our seasonal menus, exclusive chef's table
                        events,
                        special offers, and behind-the-scenes stories from our kitchen.
                        Subscribe and let us bring the flavors straight to your inbox.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-0">
            <div class="container py-3">
                <div class="row g-5">

                    <!-- Brand & Contact -->
                    <div class="col-md-4 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-brand mb-3">
                                <h3 class="text-white fw-bold mb-1"><img src="img/logo-ang.png" alt="Logo"
                                        style=" height: 50px; object-fit: contain; margin-right: 8px;"> ANG KOR SIEM
                                    REAP</h3>
                                <p class="footer-tagline">Fine Dining & Culinary Arts</p>
                            </div>
                            <p class="text-secondary mb-4" style="font-size: 14px; line-height: 1.8;">
                                Experience the art of cuisine in every bite. We bring passion, flavor, and elegance to
                                your table.
                            </p>
                            <a href=""><i class="fas fa-map-marker-alt me-2 text-primary"></i> Phnom Penh, Cambodia</a>
                            <a href=""><i class="fas fa-envelope me-2 text-primary"></i> hello@lamaison.com</a>
                            <a href=""><i class="fas fa-phone me-2 text-primary"></i> +855 23 456 789</a>
                            <a href="" class="mb-4"><i class="fas fa-clock me-2 text-primary"></i> Mon–Sun: 10am –
                                11pm</a>
                            <div class="d-flex align-items-center gap-2">
                                <a class="footer-social-btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="footer-social-btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="footer-social-btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="footer-social-btn" href=""><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Explore -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <!-- <h4 class="mb-4 text-white footer-heading d-none d-md-block">Explore</h4> -->

                            <!-- Title -->
                            <h4 class="mb-4 text-white footer-heading d-flex justify-content-between align-items-center d-md-block">
                                <span>Explore</span>

                                <a class="text-white d-md-none" data-bs-toggle="collapse" href="#exploreMenu">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h4>

                            <!-- MOBILE COLLAPSE ONLY -->
                            <div class="collapse d-md-block" id="exploreMenu">

                                <div class="footer-item d-flex flex-column">

                                    <a href=""><i class="fas fa-angle-right me-2"></i> Home</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Our Menu</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Meet the Chefs</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Events & Specials</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Gallery</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>

                                </div>

                            </div>
                            
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">

                            <!-- Title -->
                            <h4 class="mb-4 text-white footer-heading d-flex justify-content-between align-items-center d-md-block">
                                <span>Support</span>

                                <a class="text-white d-md-none" data-bs-toggle="collapse" href="#exploreSupportMenu">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </h4>

                            <!-- MOBILE COLLAPSE ONLY -->
                            <div class="collapse d-md-block" id="exploreSupportMenu">

                                <div class="footer-item d-flex flex-column">

                                    <a href=""><i class="fas fa-angle-right me-2"></i> Reservations</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Delivery & Takeaway</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Catering Services</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Allergen Info</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                                    <a href=""><i class="fas fa-angle-right me-2"></i> Cookie Policy</a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Opening Hours & Payment -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                    
                    
                            <!-- TITLE -->
                            <h4 class="mb-4 text-white footer-heading d-flex justify-content-between align-items-center d-md-block">
                    
                                

                                <span>Opening Hours</span>

                                <!-- Mobile toggle arrow -->
                                <a class="text-white d-md-none" data-bs-toggle="collapse" href="#openingHoursMenu">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            
                    
                            </h4>
                    
                            <!-- COLLAPSIBLE CONTENT -->
                            <div class="collapse d-md-block" id="openingHoursMenu">
                    
                                <!-- Hours -->
                                <div class="footer-hours mb-4">
                    
                                    <div class="hours-row">
                                        <span>Monday – Friday</span>
                                        <span class="text-primary">10:00 – 22:00</span>
                                    </div>
                    
                                    <div class="hours-row">
                                        <span>Saturday</span>
                                        <span class="text-primary">09:00 – 23:00</span>
                                    </div>
                    
                                    <div class="hours-row">
                                        <span>Sunday</span>
                                        <span class="text-primary">09:00 – 21:00</span>
                                    </div>
                    
                                    <div class="hours-row">
                                        <span>Public Holidays</span>
                                        <span class="text-warning">By Reservation</span>
                                    </div>
                    
                                </div>
                    
                                <!-- PAYMENT TITLE -->
                                <h4 class="text-white mb-3 footer-heading ">
                                    We Accept
                                </h4>
                    
                                <!-- PAYMENT ICONS -->
                                <div class="footer-bank-card d-flex flex-wrap gap-2">
                    
                                    <a href="#" class="text-white"><i class="fab fa-cc-visa fa-2x"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-cc-amex fa-2x"></i></a>
                                    <a href="#" class="text-white"><i class="fas fa-money-bill-wave fa-2x"></i></a>
                    
                                </div>
                    
                            </div>

                            <!-- <h4 class="mb-4 text-white footer-heading">Opening Hours</h4>
                            <div class="footer-hours mb-4">
                                <div class="hours-row">
                                    <span>Monday – Friday</span>
                                    <span class="text-primary">10:00 – 22:00</span>
                                </div>
                                <div class="hours-row">
                                    <span>Saturday</span>
                                    <span class="text-primary">09:00 – 23:00</span>
                                </div>
                                <div class="hours-row">
                                    <span>Sunday</span>
                                    <span class="text-primary">09:00 – 21:00</span>
                                </div>
                                <div class="hours-row">
                                    <span>Public Holidays</span>
                                    <span class="text-warning">By Reservation</span>
                                </div>
                            </div>
                            <h4 class="text-white mb-3 footer-heading">We Accept</h4>
                            <div class="footer-bank-card d-flex flex-wrap gap-2">
                                <a href="#" class="text-white"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fas fa-money-bill-wave fa-2x"></i></a>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright-bar py-2">
            <div class="container">

                <div class="copyright-content">

                    <span>
                        គ្រប់សិទ្ធិរក្សាទុកដោយ នីហ្សា អង្គរសៀមរាប
                    </span>

                    <span class="divider">|</span>

                    <span>
                        <i class="fas fa-copyright me-1"></i>
                        ២០២៥ - រក្សាសិទ្ធិគ្រប់យ៉ាង
                    </span>

                </div>

            </div>
        </div>
        <!-- Copyright End -->
    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>