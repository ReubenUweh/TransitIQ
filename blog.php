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