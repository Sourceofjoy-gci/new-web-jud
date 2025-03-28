/**
 * Eswatini Judiciary Website
 * Header and Footer JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect
    initHeaderScroll();
    
    // Mobile menu functionality
    initMobileMenu();
    
    // Submenu toggle for mobile
    initSubmenuToggle();
    
    // Search toggle functionality
    initSearchToggle();
    
    // Back to top button
    initBackToTop();
    
    // Add smooth scrolling to all anchor links
    initSmoothScroll();
});

/**
 * Initialize header scroll effect
 */
function initHeaderScroll() {
    const mainHeader = document.querySelector('.main-header');
    if (!mainHeader) return;
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            mainHeader.classList.add('scrolled');
        } else {
            mainHeader.classList.remove('scrolled');
        }
    });
}

/**
 * Initialize mobile menu functionality
 */
function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigationWrapper = document.querySelector('.navigation-wrapper');
    
    if (!menuToggle || !navigationWrapper) return;
    
    menuToggle.addEventListener('click', function(e) {
        e.preventDefault();
        
        this.classList.toggle('active');
        navigationWrapper.classList.toggle('active');
        
        // Toggle aria-expanded attribute
        const expanded = this.getAttribute('aria-expanded') === 'true' || false;
        this.setAttribute('aria-expanded', !expanded);
        
        // Prevent body scrolling when menu is open
        if (this.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (
            navigationWrapper.classList.contains('active') && 
            !navigationWrapper.contains(e.target) && 
            !menuToggle.contains(e.target)
        ) {
            menuToggle.classList.remove('active');
            navigationWrapper.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });
    
    // Close menu on window resize to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth > 991 && navigationWrapper.classList.contains('active')) {
            menuToggle.classList.remove('active');
            navigationWrapper.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });
}

/**
 * Initialize submenu toggle for mobile
 */
function initSubmenuToggle() {
    const hasSubmenuItems = document.querySelectorAll('.has-submenu');
    
    if (!hasSubmenuItems.length) return;
    
    hasSubmenuItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        
        link.addEventListener('click', function(e) {
            // Only handle click if in mobile view
            if (window.innerWidth <= 991) {
                e.preventDefault();
                
                // Toggle active class
                item.classList.toggle('active');
                
                // Close other open submenus
                hasSubmenuItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                    }
                });
            }
        });
    });
}

/**
 * Initialize search toggle functionality
 */
function initSearchToggle() {
    const searchToggle = document.querySelector('.search-toggle');
    const searchBox = document.querySelector('.search-box');
    
    if (!searchToggle || !searchBox) return;
    
    searchToggle.addEventListener('click', function(e) {
        e.preventDefault();
        searchBox.classList.toggle('active');
    });
    
    // Close search when clicking outside
    document.addEventListener('click', function(e) {
        if (
            searchBox.classList.contains('active') && 
            !searchBox.contains(e.target)
        ) {
            searchBox.classList.remove('active');
        }
    });
}

/**
 * Initialize back to top button
 */
function initBackToTop() {
    const backToTopButton = document.getElementById('back-to-top');
    
    if (!backToTopButton) return;
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    // Scroll to top when button is clicked
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Initialize smooth scrolling for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // Close mobile menu if open
                const navigationWrapper = document.querySelector('.navigation-wrapper');
                const menuToggle = document.querySelector('.menu-toggle');
                
                if (navigationWrapper && navigationWrapper.classList.contains('active')) {
                    navigationWrapper.classList.remove('active');
                    menuToggle.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    document.body.style.overflow = '';
                }
                
                // Calculate header height for offset
                const headerHeight = document.querySelector('.main-header')?.offsetHeight || 0;
                
                // Scroll to target with header offset
                window.scrollTo({
                    top: targetElement.offsetTop - headerHeight - 20,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Add current page highlighting to navigation
 */
document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        
        // Exact match for home page
        if (href === 'index.php' && (currentPath === '/' || currentPath.endsWith('/') || currentPath.includes('index'))) {
            link.parentElement.classList.add('active');
        }
        // Partial match for other pages
        else if (href !== 'index.php' && currentPath.includes(href)) {
            link.parentElement.classList.add('active');
        }
    });
});

/**
 * Enhance dropdown behavior for desktop
 */
document.addEventListener('DOMContentLoaded', function() {
    const hasSubmenuItems = document.querySelectorAll('.has-submenu');
    
    if (!hasSubmenuItems.length) return;
    
    // Add slight delay for smoother interactions
    let hoverTimeout;
    
    hasSubmenuItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (window.innerWidth > 991) {
                clearTimeout(hoverTimeout);
                
                // Close other open submenus
                hasSubmenuItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('hover');
                    }
                });
                
                item.classList.add('hover');
            }
        });
        
        item.addEventListener('mouseleave', function() {
            if (window.innerWidth > 991) {
                hoverTimeout = setTimeout(() => {
                    item.classList.remove('hover');
                }, 200);
            }
        });
    });
});