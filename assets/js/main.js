/**
 * Eswatini Judiciary Website Scripts
 * Main JavaScript for the website template
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            
            // Toggle hamburger menu animation
            const spans = this.querySelectorAll('span');
            if (spans.length === 3) {
                spans[0].classList.toggle('rotate-down');
                spans[1].classList.toggle('fade-out');
                spans[2].classList.toggle('rotate-up');
            }
        });
    }
    
    // Mobile Dropdown Toggles
    const dropdownLinks = document.querySelectorAll('.has-dropdown > a');
    
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Only handle click if in mobile view
            if (window.innerWidth < 768) {
                e.preventDefault();
                const parent = this.parentElement;
                const dropdown = parent.querySelector('.dropdown');
                
                // Close other open dropdowns
                const activeDropdowns = document.querySelectorAll('.has-dropdown.active');
                activeDropdowns.forEach(active => {
                    if (active !== parent) {
                        active.classList.remove('active');
                        const activeDropdown = active.querySelector('.dropdown');
                        if (activeDropdown) {
                            activeDropdown.classList.remove('active');
                        }
                    }
                });
                
                // Toggle the clicked dropdown
                parent.classList.toggle('active');
                if (dropdown) {
                    dropdown.classList.toggle('active');
                }
            }
        });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth < 768) {
            if (!e.target.closest('.main-nav') && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                
                // Reset hamburger icon
                const spans = mobileMenuToggle.querySelectorAll('span');
                if (spans.length === 3) {
                    spans[0].classList.remove('rotate-down');
                    spans[1].classList.remove('fade-out');
                    spans[2].classList.remove('rotate-up');
                }
            }
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            // Reset mobile menu styles when resizing to desktop
            if (navMenu) {
                navMenu.classList.remove('active');
            }
            
            // Reset hamburger icon
            if (mobileMenuToggle) {
                const spans = mobileMenuToggle.querySelectorAll('span');
                if (spans.length === 3) {
                    spans[0].classList.remove('rotate-down');
                    spans[1].classList.remove('fade-out');
                    spans[2].classList.remove('rotate-up');
                }
            }
            
            // Reset dropdown states
            const activeDropdowns = document.querySelectorAll('.has-dropdown.active');
            activeDropdowns.forEach(active => {
                active.classList.remove('active');
                const activeDropdown = active.querySelector('.dropdown');
                if (activeDropdown) {
                    activeDropdown.classList.remove('active');
                }
            });
        }
    });
    
    // Initialize any sliders on the page
    initializeSliders();
    
    // Add smooth scrolling to all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                e.preventDefault();
                
                // Close mobile menu if open
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    
                    // Reset hamburger icon
                    const spans = mobileMenuToggle.querySelectorAll('span');
                    if (spans.length === 3) {
                        spans[0].classList.remove('rotate-down');
                        spans[1].classList.remove('fade-out');
                        spans[2].classList.remove('rotate-up');
                    }
                }
                
                // Scroll to target element
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Set active navigation item based on current page
    setActiveNavItem();
    
    // Add CSS class for animated hamburger menu icon
    if (mobileMenuToggle) {
        const spans = mobileMenuToggle.querySelectorAll('span');
        if (spans.length === 3) {
            spans[0].classList.add('bar-top');
            spans[1].classList.add('bar-middle');
            spans[2].classList.add('bar-bottom');
        }
    }
});

/**
 * Initialize image sliders on the page
 */
function initializeSliders() {
    // Check if there are any slider elements on the page
    const sliders = document.querySelectorAll('.slider');
    
    if (sliders.length > 0) {
        sliders.forEach(slider => {
            // Get all slides in the slider
            const slides = slider.querySelectorAll('.slide');
            if (slides.length > 0) {
                let currentSlide = 0;
                
                // Show the first slide
                slides[currentSlide].classList.add('active');
                
                // If there are navigation dots, set up click handlers
                const dots = slider.querySelectorAll('.slider-dots .dot');
                if (dots.length > 0) {
                    dots[currentSlide].classList.add('active');
                    
                    dots.forEach((dot, index) => {
                        dot.addEventListener('click', () => {
                            changeSlide(index);
                        });
                    });
                }
                
                // If there are navigation arrows, set up click handlers
                const prevArrow = slider.querySelector('.slider-prev');
                const nextArrow = slider.querySelector('.slider-next');
                
                if (prevArrow) {
                    prevArrow.addEventListener('click', () => {
                        changeSlide(currentSlide - 1);
                    });
                }
                
                if (nextArrow) {
                    nextArrow.addEventListener('click', () => {
                        changeSlide(currentSlide + 1);
                    });
                }
                
                // Auto-rotate slides if the slider has the auto-slide class
                if (slider.classList.contains('auto-slide')) {
                    const interval = parseInt(slider.dataset.interval) || 5000;
                    setInterval(() => {
                        changeSlide(currentSlide + 1);
                    }, interval);
                }
                
                // Function to change the active slide
                function changeSlide(newSlide) {
                    // Remove active class from current slide
                    slides[currentSlide].classList.remove('active');
                    
                    // Update current slide index with wrapping
                    currentSlide = (newSlide + slides.length) % slides.length;
                    
                    // Add active class to new slide
                    slides[currentSlide].classList.add('active');
                    
                    // Update active dot if dots exist
                    if (dots.length > 0) {
                        dots.forEach(dot => dot.classList.remove('active'));
                        dots[currentSlide].classList.add('active');
                    }
                }
            }
        });
    }
}

/**
 * Set active navigation item based on current page URL
 */
function setActiveNavItem() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-menu > li > a');
    
    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        
        // Check if the current page matches the nav link
        if (currentPath.endsWith(linkPath) || 
            (linkPath === 'index.php' && (currentPath === '/' || currentPath.endsWith('/'))) ||
            (currentPath.includes(linkPath) && linkPath !== 'index.php')) {
            
            link.parentElement.classList.add('active');
        }
    });
}

/**
 * Add animation styles for hamburger menu
 */
document.addEventListener('DOMContentLoaded', function() {
    // Add these styles programmatically to avoid cluttering the CSS
    const style = document.createElement('style');
    style.textContent = `
        .mobile-menu-toggle span {
            transition: all 0.3s ease;
        }
        
        .mobile-menu-toggle span.rotate-down {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .mobile-menu-toggle span.fade-out {
            opacity: 0;
        }
        
        .mobile-menu-toggle span.rotate-up {
            transform: rotate(-45deg) translate(5px, -5px);
        }
    `;
    document.head.appendChild(style);
});