<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - TransitIQ Logistics Insights</title>
    <meta name="description" content="Stay updated with the latest news, trends, and innovations in logistics and courier services.">
    
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
    <section class="blog-hero">
        <div class="container text-center">
            <h1 class="hero-title">Logistics Insights</h1>
            <p class="hero-subtitle">
                Stay updated with the latest news, trends, and innovations in logistics and courier services.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="blog-section">
        <div class="container">
            <div id="blogLoading" class="text-center py-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="blogGrid" class="row g-4" style="display: none;"></div>
            <div class="text-center mt-5">
                <button id="loadMoreBtn" class="btn btn-outline btn-lg" style="display: none;">
                    Load More Articles
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-brand">
                        <div class="d-flex align-items-center mb-3">
                            <div class="brand-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            <span class="brand-text">TransitIQ</span>
                        </div>
                        <p class="footer-text">Real-time logistics tracking and courier services for modern businesses.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="footer-links">
                        <li>Package Tracking</li>
                        <li>Express Delivery</li>
                        <li>International Shipping</li>
                        <li>Logistics Solutions</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="footer-contact">
                        <li><i class="fas fa-envelope"></i> support@transitiq.com</li>
                        <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Logistics Ave, City, ST 12345</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="year"></span> TransitIQ. All rights reserved.</p>
            </div>
        </div>
    </footer>

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