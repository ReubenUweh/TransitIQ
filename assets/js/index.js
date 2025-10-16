let articles = [];
let displayCount = 6;

// ===== DOM LOADED =====
document.addEventListener('DOMContentLoaded', function() {
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
    
    // Initialize scroll to top button
    initScrollToTop();
    
    // Initialize live chat button
    initLiveChat();
    
    // Initialize blog page if on blog page
    if (document.getElementById('blogGrid')) {
        initBlog();
    }
    
    // Initialize contact form if on contact page
    if (document.getElementById('contactForm')) {
        initContactForm();
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});

// ===== SCROLL TO TOP =====
function initScrollToTop() {
    const scrollBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    });
    
    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ===== LIVE CHAT =====
function initLiveChat() {
    const chatBtn = document.getElementById('liveChatBtn');
    
    chatBtn.addEventListener('click', function() {
        alert('Live chat feature coming soon! For now, please contact us at support@transitiq.com');
    });
}

// ===== BLOG FUNCTIONALITY =====
async function initBlog() {
    await fetchArticles();
    renderArticles();
    
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            displayCount += 6;
            renderArticles();
        });
    }
}

async function fetchArticles() {
    const loadingDiv = document.getElementById('blogLoading');
    const gridDiv = document.getElementById('blogGrid');
    
    try {
        // Try to fetch from NewsAPI (demo key - limited results)
        const apiKey = 'demo';
        const response = await fetch(
            `https://newsapi.org/v2/everything?q=logistics OR courier OR shipping OR delivery&sortBy=publishedAt&language=en&apiKey=${apiKey}`
        );
        
        if (!response.ok) {
            throw new Error('API request failed');
        }
        
        const data = await response.json();
        articles = data.articles || [];
        
        if (articles.length === 0) {
            throw new Error('No articles found');
        }
    } catch (error) {
        console.error('Error fetching articles:', error);
        // Fallback articles
        articles = generateFallbackArticles();
    }
    
    loadingDiv.style.display = 'none';
    gridDiv.style.display = 'flex';
}

function generateFallbackArticles() {
    return [
        {
            title: "The Future of Last-Mile Delivery: AI and Autonomous Vehicles",
            description: "Exploring how artificial intelligence and self-driving vehicles are revolutionizing last-mile logistics operations.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=800&h=600&fit=crop",
            publishedAt: new Date().toISOString(),
            source: { name: "TransitIQ Insights" }
        },
        {
            title: "5 Ways Real-Time Tracking Improves Customer Satisfaction",
            description: "Learn how real-time package tracking is transforming customer expectations and business outcomes.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800&h=600&fit=crop",
            publishedAt: new Date(Date.now() - 86400000).toISOString(),
            source: { name: "Logistics Today" }
        },
        {
            title: "Sustainable Shipping: Green Logistics Solutions for 2025",
            description: "Discover eco-friendly shipping practices and how companies are reducing their carbon footprint.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=800&h=600&fit=crop",
            publishedAt: new Date(Date.now() - 172800000).toISOString(),
            source: { name: "Green Supply Chain" }
        },
        {
            title: "How IoT is Transforming Supply Chain Visibility",
            description: "The Internet of Things is enabling unprecedented transparency in global logistics networks.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop",
            publishedAt: new Date(Date.now() - 259200000).toISOString(),
            source: { name: "Tech Logistics" }
        },
        {
            title: "Peak Season Preparation: Strategies for Holiday Shipping",
            description: "Essential tips for managing increased shipping volumes during the busy holiday season.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1607827448387-a67db1383b59?w=800&h=600&fit=crop",
            publishedAt: new Date(Date.now() - 345600000).toISOString(),
            source: { name: "Courier Weekly" }
        },
        {
            title: "Drone Delivery: From Hype to Reality",
            description: "An in-depth look at the current state of drone delivery technology and its future potential.",
            url: "#",
            urlToImage: "https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=800&h=600&fit=crop",
            publishedAt: new Date(Date.now() - 432000000).toISOString(),
            source: { name: "Future Shipping" }
        }
    ];
}

function renderArticles() {
    const gridDiv = document.getElementById('blogGrid');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    
    gridDiv.innerHTML = '';
    
    const articlesToShow = articles.slice(0, displayCount);
    
    articlesToShow.forEach(article => {
        const col = document.createElement('div');
        col.className = 'col-md-6 col-lg-4';
        
        const imageUrl = article.urlToImage || 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop';
        const date = formatDate(article.publishedAt);
        
        col.innerHTML = `
            <div class="blog-card">
                <img src="${imageUrl}" alt="${article.title}" onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop'">
                <div class="blog-card-body">
                    <div class="blog-meta">
                        <span><i class="fas fa-calendar"></i> ${date}</span>
                        <span><i class="fas fa-clock"></i> ${article.source.name}</span>
                    </div>
                    <h3 class="blog-title">${article.title}</h3>
                    <p class="blog-description">${article.description || 'Click to read more about this article.'}</p>
                    <a href="${article.url}" target="_blank" rel="noopener noreferrer" class="blog-link">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        `;
        
        gridDiv.appendChild(col);
    });
    
    // Show/hide load more button
    if (displayCount < articles.length) {
        loadMoreBtn.style.display = 'inline-block';
    } else {
        loadMoreBtn.style.display = 'none';
    }
}

function formatDate(dateString) {
    const date = new Date(dateString);
    const options = { month: 'short', day: 'numeric', year: 'numeric' };
    return date.toLocaleDateString('en-US', options);
}

// ===== CONTACT FORM =====
function initContactForm() {
    const form = document.getElementById('contactForm');
    const messageDiv = document.getElementById('formMessage');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value
        };
        
        // Show success message
        messageDiv.className = 'alert alert-success';
        messageDiv.textContent = 'Message sent successfully! We\'ll get back to you within 24 hours.';
        messageDiv.style.display = 'block';
        
        // Reset form
        form.reset();
        
        // Hide message after 5 seconds
        setTimeout(() => {
            messageDiv.style.display = 'none';
        }, 5000);
        
        // In production, you would send this data to a server
        console.log('Form submitted:', formData);
    });
}