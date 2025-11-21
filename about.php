<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TransitIQ</title>
    <meta name="description" content="Learn about TransitIQ's mission to transform global logistics through innovation, transparency, and cutting-edge technology.">
    
    <!-- Bootstrap CSS -->
    <link href="./libraries/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./libraries/fontawesome/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
    <!-- Header -->
   <?php require "./partials/header.php" ?>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container text-center">
            <h1 class="hero-title">About TransitIQ</h1>
            <p class="hero-subtitle">
                We're on a mission to transform global logistics through innovation, transparency, and cutting-edge technology.
            </p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h2 class="stat-value">10M+</h2>
                        <p class="stat-label">Packages Tracked</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h2 class="stat-value">50K+</h2>
                        <p class="stat-label">Happy Customers</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h2 class="stat-value">99.9%</h2>
                        <p class="stat-label">Uptime</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <h2 class="stat-value">150+</h2>
                        <p class="stat-label">Countries Served</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title text-center mb-5">Our Story</h2>
                    <div class="story-content">
                        <p>
                            Founded in 2020, TransitIQ emerged from a simple observation: logistics tracking was outdated, confusing, and unreliable. 
                            Customers deserved better visibility into their shipments, and businesses needed smarter tools to manage their operations.
                        </p>
                        <p>
                            We built TransitIQ from the ground up with one goal in mind: to create the most intuitive, powerful, and reliable 
                            logistics tracking platform in the world. Using AI, real-time GPS technology, and modern design principles, we've 
                            created a solution that delights customers and empowers businesses.
                        </p>
                        <p>
                            Today, TransitIQ serves thousands of businesses across 150+ countries, tracking millions of packages every month. 
                            But we're just getting started. Our team is constantly innovating, pushing the boundaries of what's possible in 
                            logistics technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Our Values</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="value-title">Mission</h3>
                        <p class="value-text">To revolutionize logistics with intelligent, transparent, and reliable tracking solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="value-title">Vision</h3>
                        <p class="value-text">A world where every package is tracked with precision and delivered with care.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="value-title">Excellence</h3>
                        <p class="value-text">We maintain the highest standards in service quality and customer satisfaction.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="value-title">Community</h3>
                        <p class="value-text">Building lasting relationships with our customers, partners, and team members.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team CTA Section -->
    <section class="team-cta-section">
        <div class="container text-center">
            <h2 class="section-title mb-4">Join Our Team</h2>
            <p class="section-text mb-4">
                We're always looking for talented individuals who share our passion for innovation and excellence.
            </p>
            <a href="mailto:careers@transitiq.com" class="text-primary fw-bold">careers@transitiq.com</a>
        </div>
    </section>

    <!-- Footer -->
    <?php require "./partials/footer.php" ?>
    <!-- Scroll to Top -->
    <button id="scrollToTop" class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Live Chat Button -->
    <button id="liveChatBtn" class="live-chat-btn">
        <i class="fas fa-comments"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="./libraries/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/index.js"></script>
</body>
</html>