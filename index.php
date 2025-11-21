<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransitIQ - Smart Logistics & Real-Time Package Tracking</title>
    <meta name="description" content="Transform your logistics with TransitIQ. Real-time package tracking, AI-powered insights, and reliable courier services for modern businesses.">
    <meta name="keywords" content="logistics, package tracking, courier services, real-time tracking, delivery, shipping">

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
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-md-12 hero-text">
                    <h1 class="hero-title">
                        Smart Logistics,<br>Delivered Faster
                    </h1>
                    <p class="hero-subtitle">
                        Track your packages in real-time with AI-powered logistics intelligence.
                        Experience the future of courier and delivery tracking with TransitIQ.
                    </p>
                    <div class="hero-buttons">
                        <a href="./tracking.php" class="btn btn-hero btn-lg">Start Tracking Now</a>
                        <button class="btn btn-outline btn-lg">Watch Demo</button>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 col-md-12 text-center hero-image">
                    <img src="./assets/images/hero-image.avif" alt="Courier Tracking" class="img-fluid hero-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Problem & Solution Section -->
    <section class="problem-solution-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title text-primary">The Problem with Traditional Logistics</h2>
                    <p class="section-text">
                        Lost packages. Delayed deliveries. Poor visibility. Frustrated customers. Traditional logistics systems leave you in the dark.
                    </p>
                    <ul class="problem-list">
                        <li><span class="bullet-red"></span>No real-time updates</li>
                        <li><span class="bullet-red"></span>Complex tracking systems</li>
                        <li><span class="bullet-red"></span>Hidden fees</li>
                        <li><span class="bullet-red"></span>Poor customer support</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-primary">The TransitIQ Solution</h2>
                    <p class="section-text">
                        Modern, transparent, and intelligent logistics that keeps you informed every step of the way.
                    </p>
                    <ul class="solution-list">
                        <li><span class="bullet-green"></span>Live GPS tracking</li>
                        <li><span class="bullet-green"></span>One-click access</li>
                        <li><span class="bullet-green"></span>Transparent pricing</li>
                        <li><span class="bullet-green"></span>24/7 dedicated support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Powerful Features</h2>
                <p class="section-text">
                    Everything you need to manage your logistics efficiently and effectively.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="feature-title">Real-Time Tracking</h3>
                        <p class="feature-text">Track your packages in real-time with GPS precision and live updates.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">Fast Delivery</h3>
                        <p class="feature-text">Express delivery options with guaranteed arrival times for urgent shipments.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="feature-title">Secure & Safe</h3>
                        <p class="feature-text">End-to-end encryption and insurance coverage for complete peace of mind.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="feature-title">Instant Notifications</h3>
                        <p class="feature-text">Get SMS and email alerts at every step of your package's journey.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="feature-title">Analytics Dashboard</h3>
                        <p class="feature-text">Track shipping trends and optimize your logistics with detailed insights.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="feature-title">24/7 Support</h3>
                        <p class="feature-text">Our dedicated team is always available to assist with your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section class="demo-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">See It In Action</h2>
                <p class="section-text">
                    Watch how TransitIQ simplifies package tracking and logistics management.
                </p>
            </div>
            <div class="demo-placeholder">
                <div class="demo-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <p class="text-muted">Demo video coming soon</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Trusted by Thousands</h2>
                <p class="section-text">
                    See what our customers say about TransitIQ.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"TransitIQ transformed our shipping operations. The real-time tracking has reduced customer inquiries by 70%."</p>
                        <div class="testimonial-author">
                            <p class="author-name">Sarah Johnson</p>
                            <p class="author-role">E-commerce Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Best logistics platform we've used. The analytics dashboard helps us make data-driven decisions."</p>
                        <div class="testimonial-author">
                            <p class="author-name">Michael Chen</p>
                            <p class="author-role">Logistics Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Affordable, reliable, and incredibly easy to use. Highly recommend for growing businesses."</p>
                        <div class="testimonial-author">
                            <p class="author-name">Emily Rodriguez</p>
                            <p class="author-role">Small Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="section-title">Ready to Transform Your Logistics?</h2>
            <p class="section-text mb-4">
                Join thousands of businesses already using TransitIQ for smarter shipping.
            </p>
            <div class="cta-buttons">
                <button class="btn btn-hero btn-lg">Get Started Free</button>
                <a href="./contact.php" class="btn btn-outline btn-lg">Contact Sales</a>
            </div>
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