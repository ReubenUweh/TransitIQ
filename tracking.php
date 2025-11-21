<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Package - TransitIQ</title>
    <meta name="description" content="Track your packages in real-time with TransitIQ. Enter your tracking number to get live updates on your shipment location and delivery status.">
    
     <!-- Bootstrap CSS -->
    <link href="./libraries/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./libraries/fontawesome/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css"> 
</head>
<body>
    <!-- Header -->
    <?php include './partials/header.php'; ?>

    <!-- Tracking Hero -->
    <section class="tracking-hero">
        <div class="container text-center">
            <div class="tracking-icon-large mb-4">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <h1 class="hero-title">Track Your Package</h1>
            <p class="hero-subtitle">
                Enter your tracking number below to get real-time updates on your shipment
            </p>
        </div>
    </section>

    <!-- Tracking Form Section -->
    <section class="tracking-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tracking-form-card">
                        <form id="trackingForm">
                            <div class="input-group tracking-input-group">
                                <input 
                                    type="text" 
                                    id="trackingNumber" 
                                    class="form-control tracking-input" 
                                    placeholder="Enter tracking number (e.g., TIQ1234567890)"
                                    required
                                    pattern="[A-Za-z0-9]+"
                                    minlength="5"
                                    maxlength="20"
                                >
                                <button type="submit" class="btn btn-hero btn-lg tracking-btn">
                                    <i class="fas fa-search me-2"></i>Track Package
                                </button>
                            </div>
                            <small class="form-text">
                                <i class="fas fa-info-circle me-1"></i>
                                You can find your tracking number in your confirmation email or receipt
                            </small>
                        </form>

                        <!-- Sample Tracking Numbers -->
                        <div class="sample-tracking mt-4">
                            <p class="text-muted mb-2">Try these sample tracking numbers:</p>
                            <div class="sample-badges">
                                <button class="badge-sample" data-tracking="TIQ1234567890">TIQ1234567890</button>
                                <button class="badge-sample" data-tracking="TIQ9876543210">TIQ9876543210</button>
                                <button class="badge-sample" data-tracking="TIQ5555555555">TIQ5555555555</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Results Section -->
    <section class="tracking-results-section" id="trackingResults" style="display: none;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Package Info Card -->
                    <div class="tracking-result-card">
                        <div class="result-header">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                                <div>
                                    <h3 class="tracking-number-display">
                                        <i class="fas fa-box me-2"></i>
                                        <span id="displayTrackingNumber"></span>
                                    </h3>
                                    <p class="text-muted mb-0" id="packageDescription">Standard Package</p>
                                </div>
                                <div class="status-badge" id="statusBadge">
                                    <i class="fas fa-circle-notch fa-spin me-2"></i>
                                    <span id="currentStatus">In Transit</span>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Info -->
                        <div class="delivery-info-grid">
                            <div class="delivery-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div>
                                    <p class="info-label">Estimated Delivery</p>
                                    <p class="info-value" id="estimatedDelivery">Loading...</p>
                                </div>
                            </div>
                            <div class="delivery-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <p class="info-label">Current Location</p>
                                    <p class="info-value" id="currentLocation">Loading...</p>
                                </div>
                            </div>
                            <div class="delivery-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div>
                                    <p class="info-label">Courier</p>
                                    <p class="info-value" id="courierInfo">TransitIQ Express</p>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="tracking-progress">
                            <div class="progress-bar-custom">
                                <div class="progress-fill" id="progressFill"></div>
                            </div>
                            <div class="progress-steps">
                                <div class="progress-step active" data-step="1">
                                    <div class="step-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <p class="step-label">Order Placed</p>
                                </div>
                                <div class="progress-step" data-step="2">
                                    <div class="step-icon">
                                        <i class="fas fa-box"></i>
                                    </div>
                                    <p class="step-label">Processing</p>
                                </div>
                                <div class="progress-step" data-step="3">
                                    <div class="step-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <p class="step-label">In Transit</p>
                                </div>
                                <div class="progress-step" data-step="4">
                                    <div class="step-icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <p class="step-label">Delivered</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking History -->
                        <div class="tracking-history">
                            <h4 class="history-title">
                                <i class="fas fa-history me-2"></i>Tracking History
                            </h4>
                            <div class="timeline" id="trackingTimeline">
                                <!-- Timeline items will be inserted here -->
                            </div>
                        </div>
                    </div>

                    <!-- Track Another Package -->
                    <div class="text-center mt-4">
                        <button class="btn btn-outline" id="trackAnotherBtn">
                            <i class="fas fa-search me-2"></i>Track Another Package
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="tracking-features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Track With TransitIQ?</h2>
                <p class="section-text">
                    Get the most accurate and reliable tracking information
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="feature-title">Real-Time Updates</h3>
                        <p class="feature-text">Get instant notifications as your package moves through each stage</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3 class="feature-title">GPS Tracking</h3>
                        <p class="feature-text">See exactly where your package is with live GPS location data</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">Accurate ETAs</h3>
                        <p class="feature-text">AI-powered delivery time predictions that you can rely on</p>
                    </div>
                </div>
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
                        <li><a href="tracking.html">Package Tracking</a></li>
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
    <script src="./libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./assets/js/index.js"></script>
</body>
</html>