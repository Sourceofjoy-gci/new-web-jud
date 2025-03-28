/**
 * Eswatini Judiciary Website
 * About Page JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize sidebar navigation
    initSidebarNav();
    
    // Initialize tabs
    initTabs();
    
    // Initialize scroll animations
    initScrollAnimations();
    
    // Add scroll to section functionality
    initSmoothScrollToSections();
});

/**
 * Initialize sidebar navigation highlighting
 */
function initSidebarNav() {
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    const sections = document.querySelectorAll('.content-section');
    
    if (!sidebarLinks.length || !sections.length) return;
    
    // Update active link on scroll
    window.addEventListener('scroll', function() {
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.offsetHeight;
            
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
            
            const href = link.getAttribute('href').substring(1);
            if (href === currentSection) {
                link.classList.add('active');
            }
        });
    });
    
    // Scroll to section when clicking on sidebar link
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 100;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Initialize tabs functionality
 */
function initTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    if (!tabButtons.length || !tabPanes.length) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding pane
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Initialize scroll animations
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll(
        '.content-section, .card, .value-item, .principle-card, ' +
        '.court-card, .function-card, .aspect-card, .timeline-item, ' +
        '.dual-card'
    );
    
    if (!animatedElements.length) return;
    
    // Create intersection observer options
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
    
    // Observe elements
    animatedElements.forEach(element => {
        observer.observe(element);
    });
    
    // Add CSS for animation
    const style = document.createElement('style');
    style.textContent = `
        .content-section {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .content-section.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .card, .value-item, .principle-card, .court-card, .function-card, .aspect-card, .dual-card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .card.animated, .value-item.animated, .principle-card.animated, .court-card.animated, .function-card.animated, .aspect-card.animated, .dual-card.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .timeline-item {
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        .timeline-item.animated {
            opacity: 1;
            transform: translateX(0);
        }
    `;
    document.head.appendChild(style);
}

/**
 * Initialize smooth scroll to sections from any anchor
 */
function initSmoothScrollToSections() {
    const anchors = document.querySelectorAll('a[href^="#"]:not(.sidebar-link)');
    
    if (!anchors.length) return;
    
    anchors.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Only process if it's a hash link
            if (targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    
                    // Get header height for offset
                    const headerHeight = document.querySelector('.main-header')?.offsetHeight || 0;
                    
                    // Scroll to target with offset
                    window.scrollTo({
                        top: targetElement.offsetTop - headerHeight - 20,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Special handling for hero scroll button
    const heroScrollBtn = document.querySelector('.btn-scroll');
    
    if (heroScrollBtn) {
        heroScrollBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetElement = document.querySelector('#about-content');
            
            if (targetElement) {
                // Get header height for offset
                const headerHeight = document.querySelector('.main-header')?.offsetHeight || 0;
                
                // Scroll to target with offset
                window.scrollTo({
                    top: targetElement.offsetTop - headerHeight - 20,
                    behavior: 'smooth'
                });
            }
        });
    }
}

/**
 * Initialize animation for the first section on page load
 */
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const firstSection = document.querySelector('#vision-mission');
        if (firstSection) {
            firstSection.classList.add('animated');
        }
        
        // Animate first set of cards
        const cards = document.querySelectorAll('.vision-mission-cards .card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add('animated');
            }, 300 + (index * 200));
        });
    }, 500);
});