<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travela - Tourism Website Template</title>
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

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: #ffffff;
        }

        /* ─────────────────────────────────────
       VARIABLES
───────────────────────────────────── */
        :root {
            --navy: #13357B;
            --dark: #0d1b3e;
            --blue: #0d6efd;
            --white: #ffffff;
            --cream: #f8f9fe;
            --light: #eef2ff;
            --muted: #6b7280;
            --border: rgba(19, 53, 123, 0.10);
        }

        /* ─────────────────────────────────────
       SECTION
    ───────────────────────────────────── */
        .services-section {
            padding: 100px 0 110px;
            background: var(--white);
            position: relative;
            overflow: hidden;
        }

        /* subtle background geometry top-right */
        .services-section::before {
            content: "";
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 60px solid rgba(19, 53, 123, 0.04);
            pointer-events: none;
        }

        .services-section::after {
            content: "";
            position: absolute;
            bottom: -60px;
            left: -60px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            border: 40px solid rgba(13, 110, 253, 0.04);
            pointer-events: none;
        }

        .services-container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 40px;
            position: relative;
            z-index: 1;
        }

        /* ─────────────────────────────────────
       SECTION HEADER
    ───────────────────────────────────── */
        .services-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: end;
            margin-bottom: 60px;
        }

        .header-left .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .eyebrow-line {
            width: 36px;
            height: 2px;
            background: var(--navy);
            border-radius: 2px;
        }

        .eyebrow-text {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 3.5px;
            text-transform: uppercase;
            color: var(--navy);
        }

        .services-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(28px, 3vw, 44px);
            font-weight: 700;
            color: var(--dark);
            line-height: 1.15;
        }

        .services-title em {
            font-style: italic;
            color: var(--navy);
        }

        .header-right {
            padding-bottom: 6px;
        }

        .header-right p {
            font-size: 15px;
            color: var(--muted);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .btn-all-services {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--navy);
            color: var(--white);
            font-family: 'Outfit', sans-serif;
            font-size: 13.5px;
            font-weight: 500;
            padding: 12px 26px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-all-services:hover {
            background: var(--dark);
            color: var(--white);
            transform: translateY(-2px);
        }

        .btn-all-services i {
            font-size: 11px;
        }

        /* ─────────────────────────────────────
       CARDS GRID — 4 columns top row
       then a wide feature card + 2 cards
    ───────────────────────────────────── */

        /* ROW 1: 4 equal cards */
        .cards-row-1 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 18px;
        }

        /* ROW 2: 1 wide + 2 normal */
        .cards-row-2 {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 18px;
        }

        /* ── Base card ── */
        .svc-card {
            background: var(--cream);
            border-radius: 18px;
            padding: 30px 26px;
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            transition: border-color 0.3s, transform 0.3s, background 0.3s;
            cursor: default;
            animation: cardFadeUp 0.5s ease both;
        }

        .svc-card:nth-child(1) {
            animation-delay: 0.05s;
        }

        .svc-card:nth-child(2) {
            animation-delay: 0.12s;
        }

        .svc-card:nth-child(3) {
            animation-delay: 0.19s;
        }

        .svc-card:nth-child(4) {
            animation-delay: 0.26s;
        }

        @keyframes cardFadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .svc-card:hover {
            border-color: var(--navy);
            transform: translateY(-5px);
            background: var(--white);
        }

        /* ── Filled navy variant ── */
        .svc-card.navy {
            background: var(--navy);
            border-color: var(--navy);
        }

        .svc-card.navy .card-icon-wrap {
            background: rgba(255, 255, 255, 0.12);
        }

        .svc-card.navy .card-icon-wrap i {
            color: #fff;
        }

        .svc-card.navy .svc-title {
            color: #fff;
        }

        .svc-card.navy .svc-desc {
            color: rgba(255, 255, 255, 0.65);
        }

        .svc-card.navy .svc-link {
            color: rgba(255, 255, 255, 0.8);
        }

        .svc-card.navy:hover {
            background: #0f2860;
            border-color: #0f2860;
        }

        .svc-card.navy .card-number {
            color: rgba(255, 255, 255, 0.06);
        }

        /* ── Wide feature card (row 2, col 1) ── */
        .svc-card.wide {
            flex-direction: row;
            align-items: center;
            gap: 28px;
            padding: 32px 36px;
        }

        .svc-card.wide .card-icon-wrap {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            flex-shrink: 0;
        }

        .svc-card.wide .card-icon-wrap i {
            font-size: 24px;
        }

        .svc-card.wide .card-body {
            flex: 1;
        }

        .svc-card.wide .card-number {
            font-size: 100px;
            bottom: -20px;
            right: 24px;
        }

        /* ghost number */
        .card-number {
            position: absolute;
            bottom: -8px;
            right: 16px;
            font-family: 'Playfair Display', serif;
            font-size: 72px;
            font-weight: 700;
            line-height: 1;
            color: rgba(19, 53, 123, 0.05);
            user-select: none;
            pointer-events: none;
        }

        /* icon circle */
        .card-icon-wrap {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            flex-shrink: 0;
            transition: background 0.3s;
        }

        .card-icon-wrap i {
            font-size: 20px;
            color: var(--navy);
            transition: color 0.3s, transform 0.3s;
        }

        .svc-card:not(.navy):hover .card-icon-wrap {
            background: var(--navy);
        }

        .svc-card:not(.navy):hover .card-icon-wrap i {
            color: var(--white);
            transform: scale(1.1);
        }

        .svc-title {
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .svc-desc {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.75;
            flex: 1;
            margin-bottom: 18px;
        }

        .svc-card.wide .svc-desc {
            margin-bottom: 0;
        }

        .svc-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12.5px;
            font-weight: 500;
            color: var(--navy);
            text-decoration: none;
            transition: gap 0.2s, color 0.2s;
        }

        .svc-link:hover {
            gap: 10px;
            color: var(--blue);
        }

        .svc-link i {
            font-size: 10px;
        }

        /* ── Tag badge on card ── */
        .svc-badge {
            display: inline-block;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 50px;
            background: var(--light);
            color: var(--navy);
            margin-bottom: 14px;
            align-self: flex-start;
        }

        .svc-card.navy .svc-badge {
            background: rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.85);
        }

        /* ─────────────────────────────────────
       STATS STRIP
    ───────────────────────────────────── */
        .stats-strip {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            margin-top: 56px;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--border);
        }

        .stat-item {
            padding: 28px 24px;
            text-align: center;
            background: var(--white);
            border-right: 1px solid var(--border);
            transition: background 0.3s;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item:first-child {
            background: var(--navy);
        }

        .stat-item:first-child .stat-num {
            color: #fff;
        }

        .stat-item:first-child .stat-label {
            color: rgba(255, 255, 255, 0.6);
        }

        .stat-item:hover:not(:first-child) {
            background: var(--light);
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: var(--navy);
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 12px;
            color: var(--muted);
            letter-spacing: 0.3px;
        }

        /* ─────────────────────────────────────
       RESPONSIVE
    ───────────────────────────────────── */
        @media (max-width: 1024px) {
            .cards-row-1 {
                grid-template-columns: repeat(2, 1fr);
            }

            .cards-row-2 {
                grid-template-columns: 1fr 1fr;
            }

            .svc-card.wide {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .services-header {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cards-row-1 {
                grid-template-columns: repeat(2, 1fr);
            }

            .cards-row-2 {
                grid-template-columns: 1fr;
            }

            .svc-card.wide {
                grid-column: span 1;
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .stats-strip {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-item:nth-child(2) {
                border-right: none;
            }

            .stat-item:nth-child(3) {
                border-top: 1px solid var(--border);
            }

            .stat-item:nth-child(4) {
                border-top: 1px solid var(--border);
                border-right: none;
            }
        }

        @media (max-width: 540px) {
            .services-section {
                padding: 60px 0;
            }

            .services-container {
                padding: 0 20px;
            }

            .cards-row-1 {
                grid-template-columns: 1fr;
            }

            .cards-row-2 {
                grid-template-columns: 1fr;
            }

            .svc-card.wide {
                grid-column: span 1;
            }

            .stats-strip {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>


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
                    <a href="index.php" class="nav-item nav-link">Home</a>
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

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h1 class="text-white display-3 mb-3">About Us</h1>
                <p class="text-white mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s,
                </p>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <section class="about-section py-3">
            <div class="about-container">

                <!-- Section header -->
                <div class="about-header">
                    <div class="about-eyebrow">
                        <span class="eyebrow-line"></span>
                        <span class="eyebrow-text">About Us</span>
                        <span class="eyebrow-line"></span>
                    </div>
                    <h2 class="about-headline">Our <em>Story</em> &amp; Mission</h2>
                    <p class="about-subline">From a small dream to Siem Reap's most trusted dining platform — every booking
                        we make tells a story.</p>
                </div>

                <!-- Main grid -->
                <div class="about-grid">

                    <!-- LEFT: Image + stats -->
                    <div class="about-left">
                        <div class="about-img-wrapper">
                            <img src="Banners/BannerAboutUs1.png" alt="ANG KOR SIEM REAP">
                            <div class="about-img-overlay"></div>
                            <div class="about-img-quote">
                                <p>"Bringing the heart of Khmer hospitality to every table, every day."</p>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="about-stats">
                            <div class="stat-card">
                                <div class="stat-number">10+</div>
                                <div class="stat-label">Years</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Restaurants</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">20K+</div>
                                <div class="stat-label">Guests</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">98%</div>
                                <div class="stat-label">Satisfaction</div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT: Story + Timeline -->
                    <div class="about-right">
                        <p class="about-intro">
                            We make restaurant booking simple, fast, and reliable. Our platform helps you discover the best
                            dining places and reserve your table in just a few clicks — no waiting, no hassle. Whether
                            you're planning a family dinner, a romantic date, or a group gathering, we connect you with top
                            restaurants and ensure a smooth experience every time.
                        </p>

                        <!-- Timeline -->
                        <div class="timeline">

                            <div class="timeline-item">
                                <div class="timeline-dot">01</div>
                                <div class="timeline-content">
                                    <h4>Easy Table Reservations</h4>
                                    <p>Book any table in seconds with real-time availability. No phone calls, no waiting —
                                        just instant confirmation straight to your device.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot">02</div>
                                <div class="timeline-content">
                                    <h4>Top Restaurant Partners</h4>
                                    <p>We curate only the finest venues across Siem Reap — from authentic Khmer street
                                        kitchens to award-winning fine dining establishments.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot accent">03</div>
                                <div class="timeline-content">
                                    <h4>24/7 Customer Support</h4>
                                    <p>Our dedicated team is always here — day or night — to assist with changes, special
                                        requests, or any questions you might have.</p>
                                </div>
                            </div>

                        </div>

                        <!-- Feature pills -->
                        <div class="features-grid">
                            <div class="feature-pill">
                                <div class="feature-icon"><i class="fa fa-check"></i></div>
                                Instant Booking Confirmation
                            </div>
                            <div class="feature-pill">
                                <div class="feature-icon"><i class="fa fa-star"></i></div>
                                5-Star Dining Experiences
                            </div>
                            <div class="feature-pill">
                                <div class="feature-icon"><i class="fa fa-sliders-h"></i></div>
                                Flexible Booking Options
                            </div>
                            <div class="feature-pill">
                                <div class="feature-icon"><i class="fa fa-mobile-alt"></i></div>
                                User-Friendly Interface
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="about-cta">
                            <a href="#" class="btn-primary-about">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                            <div class="about-contact-hint">
                                <div class="contact-icon-circle">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <span>Siem Reap, Cambodia</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Service Start -->
        <section class="services-section">
            <div class="services-container">

                <!-- Section header: left title / right desc + cta -->
                <div class="services-header">
                    <div class="header-left">
                        <div class="eyebrow">
                            <span class="eyebrow-line"></span>
                            <span class="eyebrow-text">Our Services</span>
                        </div>
                        <h2 class="services-title">What We<br><em>Offer You</em></h2>
                    </div>
                    <div class="header-right">
                        <p>Premium experiences crafted for every occasion — from intimate family dinners to grand
                            celebrations at ANG KOR SIEM REAP. Discover everything we do best.</p>
                        <a href="services.html" class="btn-all-services">
                            View All Services <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
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

                    <!-- Card: Table Booking (navy) -->
                    <div class="svc-card navy">
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
                        <p class="svc-desc">From boutique guesthouses to 5-star resorts — handpicked accommodations bookable
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

                <!-- ROW 2: wide feature card + 2 normal cards -->
                <div class="cards-row-2">

                    <!-- Wide card: Event Management -->
                    <div class="svc-card wide navy">
                        <span class="card-number">05</span>
                        <div class="card-icon-wrap" style="margin-bottom:0;">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="card-body">
                            <span class="svc-badge">Featured</span>
                            <h4 class="svc-title" style="font-size:18px; margin-bottom:10px;">Event Management</h4>
                            <p class="svc-desc">Weddings, gala dinners, corporate events, and private celebrations —
                                expertly planned, impeccably executed. We handle every detail so you can enjoy every moment.
                            </p>
                            <a href="#" class="svc-link" style="margin-top:14px; display:inline-flex;">Learn more <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Card: Online Orders -->
                    <div class="svc-card">
                        <span class="card-number">06</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-truck"></i>
                        </div>
                        <span class="svc-badge">Delivery</span>
                        <h4 class="svc-title">Online Orders</h4>
                        <p class="svc-desc">Order your favourite dishes and have them delivered fresh to your door — fast,
                            reliable, and delicious every time.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <!-- Card: Private Dining -->
                    <div class="svc-card">
                        <span class="card-number">07</span>
                        <div class="card-icon-wrap">
                            <i class="fa fa-concierge-bell"></i>
                        </div>
                        <span class="svc-badge">Exclusive</span>
                        <h4 class="svc-title">Private Dining</h4>
                        <p class="svc-desc">Exclusive dining rooms for intimate occasions. Curated menus, personalized
                            service, and an atmosphere you will never forget.</p>
                        <a href="#" class="svc-link">Learn more <i class="fa fa-arrow-right"></i></a>
                    </div>

                </div>

                <!-- Stats strip -->
                <div class="stats-strip">
                    <div class="stat-item">
                        <div class="stat-num">500+</div>
                        <div class="stat-label">Restaurant Partners</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">20K+</div>
                        <div class="stat-label">Happy Guests Served</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">10+</div>
                        <div class="stat-label">Years of Excellence</div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Service End -->

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-3">
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
    <!-- Navbar & Hero End -->

    

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


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