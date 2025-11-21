<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TransitIQ</title>
    <meta name="description" content="Have questions? Get in touch with TransitIQ. We're here to help with your logistics needs.">
    
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
            <h1 class="hero-title">Get In Touch</h1>
            <p class="hero-subtitle">
                Have questions? We're here to help. Send us a message and we'll respond as soon as possible.
            </p>
        </div>
    </section>

    <!-- Contact Cards -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-title">Email</h3>
                        <a href="mailto:support@transitiq.com" class="contact-link">support@transitiq.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3 class="contact-title">Phone</h3>
                        <a href="tel:+15551234567" class="contact-link">+1 (555) 123-4567</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-title">Address</h3>
                        <p class="contact-link">123 Logistics Ave, City, ST 12345</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <form id="contactForm">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="john@example.com">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required placeholder="How can we help?">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="6" required placeholder="Tell us more about your inquiry..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-hero btn-lg w-100">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="formMessage" class="alert mt-4" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <section class="map-section">
        <div class="container">
            <div class="map-placeholder">
                <i class="fas fa-map-marker-alt"></i>
                <p>Map integration coming soon</p>
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