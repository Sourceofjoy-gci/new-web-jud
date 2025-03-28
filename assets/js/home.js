/**
 * Eswatini Judiciary Website - Home Page Scripts
 * Custom JavaScript for the home page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider Functionality
    initHeroSlider();
    
    // Values Tabs Functionality
    initValuesTabs();
    
    // Services Slider Functionality
    initServicesSlider();
    
    // News Filter Functionality
    initNewsFilter();
    
    // Animate elements when they come into view
    initScrollAnimation();
});

/**
 * Initialize the hero slider
 */
function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slider .slide');
    const dots = document.querySelectorAll('.hero-slider .dot');
    const prevBtn = document.querySelector('.hero-slider .slider-prev');
    const nextBtn = document.querySelector('.hero-slider .slider-next');
    
    if (!slides.length) return;
    
    let currentSlide = 0;
    let slideInterval;
    
    // Function to show a specific slide
    function showSlide(n) {
        // Remove active class from all slides
        slides.forEach(slide => slide.classList.remove('active'));
        
        // Update current slide index with wrapping
        currentSlide = (n + slides.length) % slides.length;
        
        // Add active class to current slide
        slides[currentSlide].classList.add('active');
        
        // Update active dot
        if (dots.length) {
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        }
    }
    
    // Start auto slide
    function startSlideInterval() {
        slideInterval = setInterval(() => {
            showSlide(currentSlide + 1);
        }, 6000);
    }
    
    // Stop auto slide
    function stopSlideInterval() {
        clearInterval(slideInterval);
    }
    
    // Event listeners for navigation
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            stopSlideInterval();
            showSlide(currentSlide - 1);
            startSlideInterval();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            stopSlideInterval();
            showSlide(currentSlide + 1);
            startSlideInterval();
        });
    }
    
    // Event listeners for dots
    if (dots.length) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopSlideInterval();
                showSlide(index);
                startSlideInterval();
            });
        });
    }
    
    // Start auto slide
    startSlideInterval();
}

/**
 * Initialize the values tabs
 */
function initValuesTabs() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    if (!tabBtns.length || !tabPanels.length) return;
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and panels
            tabBtns.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to clicked button
            btn.classList.add('active');
            
            // Show corresponding panel
            const tabId = btn.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Initialize the services slider
 */
function initServicesSlider() {
    const container = document.querySelector('.services-container');
    const prevBtn = document.querySelector('.service-prev');
    const nextBtn = document.querySelector('.service-next');
    const cards = document.querySelectorAll('.service-card');
    
    if (!container || !cards.length) return;
    
    const cardWidth = 330; // Card width + gap
    
    // Function to scroll to next or previous page
    function scrollServices(direction) {
        const currentScroll = container.scrollLeft;
        const targetScroll = direction === 'next' 
            ? currentScroll + cardWidth 
            : currentScroll - cardWidth;
        
        container.scrollTo({
            left: targetScroll,
            behavior: 'smooth'
        });
    }
    
    // Event listeners for navigation
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            scrollServices('prev');
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            scrollServices('next');
        });
    }
    
    // Implement touch/swipe functionality for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    container.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    container.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left -> show next
            scrollServices('next');
        } else if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right -> show previous
            scrollServices('prev');
        }
    }
}

/**
 * Initialize the news filter
 */
function initNewsFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const newsCards = document.querySelectorAll('.news-card');
    
    if (!filterBtns.length || !newsCards.length) return;
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            btn.classList.add('active');
            
            // Get filter value
            const filter = btn.getAttribute('data-filter');
            
            // Show or hide news cards based on filter
            newsCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    
                    // Add animation
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

/**
 * Initialize scroll animations
 */
function initScrollAnimation() {
    const animatedElements = document.querySelectorAll(
        '.section-heading, .quick-access-card, .pillar-card, ' +
        '.service-card, .tab-content-inner, .news-card, .member-card'
    );
    
    // Create observer options
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Add initial animation class and observe elements
    animatedElements.forEach(element => {
        element.classList.add('fade-in-element');
        observer.observe(element);
    });
    
    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
        .fade-in-element {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in-element.animated {
            opacity: 1;
            transform: translateY(0);
        }
    `;
    document.head.appendChild(style);
}

// Handle smooth scrolling for quick access links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        
        if (targetId !== '#') {
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        }
    });
});