/**
 * Supreme Court Page JavaScript
 * Judiciary of Eswatini Website
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Parallax Scrolling for Hero Section
    const heroParallax = document.getElementById('heroParallax');
    if(heroParallax) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            heroParallax.style.transform = `translateY(${scrollPosition * 0.4}px)`;
        });
    }
    
    // Animate Stats on Scroll
    const statItems = document.querySelectorAll('.stat-item');
    if(statItems.length) {
        // Intersection Observer for animating stats when visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateStats();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statItems.forEach(item => {
            statsObserver.observe(item);
        });
    }
    
    function animateStats() {
        statItems.forEach(item => {
            const targetValue = parseInt(item.dataset.value);
            const statValueEl = item.querySelector('.stat-value');
            let currentValue = 0;
            const increment = Math.ceil(targetValue / 50); // Adjust speed
            
            const interval = setInterval(() => {
                currentValue += increment;
                if(currentValue > targetValue) {
                    currentValue = targetValue;
                    clearInterval(interval);
                }
                statValueEl.textContent = currentValue;
            }, 30);
        });
    }
    
    // Smooth Scroll for Navigation
    const navLinks = document.querySelectorAll('.nav-item');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if(this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Highlight Active Navigation Item on Scroll
    const sections = document.querySelectorAll('.court-section');
    window.addEventListener('scroll', () => {
        let current = '';
        const headerOffset = 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - headerOffset;
            const sectionHeight = section.offsetHeight;
            if(pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
                current = '#' + section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if(link.getAttribute('href') === current) {
                link.classList.add('active');
            }
        });
    });
    
    // Appeal Process Timeline
    const timelineProgress = document.getElementById('timelineProgress');
    const timelineSteps = document.querySelectorAll('.timeline-step');
    const prevStepBtn = document.getElementById('prevStep');
    const nextStepBtn = document.getElementById('nextStep');
    
    if(timelineSteps.length && timelineProgress) {
        let activeStep = 0;
        
        // Initialize timeline progress
        updateTimeline(activeStep);
        
        function updateTimeline(stepIndex) {
            timelineSteps.forEach((step, index) => {
                step.classList.toggle('active', index <= stepIndex);
            });
            
            // Update progress bar
            const progressPercentage = (stepIndex / (timelineSteps.length - 1)) * 100;
            timelineProgress.style.width = `${progressPercentage}%`;
            
            // Update navigation buttons
            prevStepBtn.disabled = stepIndex === 0;
            nextStepBtn.disabled = stepIndex === timelineSteps.length - 1;
        }
        
        // Timeline navigation
        if(prevStepBtn && nextStepBtn) {
            prevStepBtn.addEventListener('click', () => {
                if(activeStep > 0) {
                    activeStep--;
                    updateTimeline(activeStep);
                }
            });
            
            nextStepBtn.addEventListener('click', () => {
                if(activeStep < timelineSteps.length - 1) {
                    activeStep++;
                    updateTimeline(activeStep);
                }
            });
        }
    }
    
    // Justices Carousel
    const carouselTrack = document.getElementById('carouselTrack');
    const carouselPrev = document.getElementById('carouselPrev');
    const carouselNext = document.getElementById('carouselNext');
    const carouselIndicators = document.getElementById('carouselIndicators');
    
    if(carouselTrack && carouselPrev && carouselNext && carouselIndicators) {
        const justiceCards = carouselTrack.querySelectorAll('.justice-card');
        const cardWidth = justiceCards[0].offsetWidth;
        const visibleCards = Math.floor(carouselTrack.offsetWidth / cardWidth);
        const totalSlides = Math.ceil(justiceCards.length / visibleCards);
        let currentSlide = 0;
        
        // Create indicators
        for(let i = 0; i < totalSlides; i++) {
            const indicator = document.createElement('div');
            indicator.classList.add('indicator');
            if(i === 0) indicator.classList.add('active');
            indicator.dataset.slide = i;
            carouselIndicators.appendChild(indicator);
            
            indicator.addEventListener('click', () => {
                goToSlide(i);
            });
        }
        
        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }
        
        function updateCarousel() {
            // Move carousel track
            const slideOffset = -currentSlide * (visibleCards * cardWidth);
            carouselTrack.style.transform = `translateX(${slideOffset}px)`;
            
            // Update indicators
            const indicators = carouselIndicators.querySelectorAll('.indicator');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
        }
        
        carouselPrev.addEventListener('click', () => {
            if(currentSlide > 0) {
                currentSlide--;
                updateCarousel();
            }
        });
        
        carouselNext.addEventListener('click', () => {
            if(currentSlide < totalSlides - 1) {
                currentSlide++;
                updateCarousel();
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', () => {
            const newVisibleCards = Math.floor(carouselTrack.offsetWidth / justiceCards[0].offsetWidth);
            if(newVisibleCards !== visibleCards) {
                // Recalculate carousel
                location.reload();
            }
        });
    }
    
    // Decision Filtering
    const filterTabs = document.querySelectorAll('.filter-tab');
    const decisionCards = document.querySelectorAll('.decision-card');
    const decisionSearch = document.getElementById('decisionSearch');
    
    if(filterTabs.length && decisionCards.length) {
        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update active tab
                filterTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                const category = tab.dataset.category;
                
                // Filter cards by category
                decisionCards.forEach(card => {
                    if(category === 'all' || card.dataset.category === category) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
        
        // Decision search
        if(decisionSearch) {
            decisionSearch.addEventListener('input', () => {
                const searchTerm = decisionSearch.value.toLowerCase();
                
                decisionCards.forEach(card => {
                    const title = card.querySelector('.decision-title').textContent.toLowerCase();
                    const summary = card.querySelector('.decision-summary').textContent.toLowerCase();
                    
                    if(title.includes(searchTerm) || summary.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
    }
    
    // Composition Diagram Lines
    const compositionLines = document.getElementById('compositionLines');
    if(compositionLines) {
        const chiefJustice = document.querySelector('.chief-justice');
        const justicePositions = document.querySelectorAll('.justice-position');
        
        // Function to draw connecting lines between Chief Justice and Justices
        function drawCompositionLines() {
            // Clear previous lines
            compositionLines.innerHTML = '';
            
            const chiefRect = chiefJustice.getBoundingClientRect();
            const diagramRect = compositionLines.parentElement.getBoundingClientRect();
            
            // Chief Justice position relative to the diagram
            const chiefX = chiefRect.left - diagramRect.left + chiefRect.width / 2;
            const chiefY = chiefRect.bottom - diagramRect.top;
            
            // Draw lines to each justice
            justicePositions.forEach(justice => {
                const justiceRect = justice.getBoundingClientRect();
                const justiceX = justiceRect.left - diagramRect.left + justiceRect.width / 2;
                const justiceY = justiceRect.top - diagramRect.top;
                
                // Create SVG line
                const line = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                const controlY = chiefY + (justiceY - chiefY) / 2;
                
                // Create curved path
                const pathData = `M ${chiefX} ${chiefY} C ${chiefX} ${controlY}, ${justiceX} ${controlY}, ${justiceX} ${justiceY}`;
                
                line.setAttribute('d', pathData);
                line.setAttribute('stroke', '#a38e5d');
                line.setAttribute('stroke-width', '2');
                line.setAttribute('fill', 'none');
                line.setAttribute('stroke-dasharray', '5,5');
                
                compositionLines.appendChild(line);
            });
        }
        
        // Draw lines on load and resize
        drawCompositionLines();
        window.addEventListener('resize', drawCompositionLines);
    }
    
    // Composition Tabs
    const compositionTabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if(compositionTabBtns.length && tabContents.length) {
        compositionTabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active tab button
                compositionTabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Show corresponding tab content
                const tabId = btn.dataset.tab;
                tabContents.forEach(content => {
                    content.classList.toggle('active', content.id === tabId);
                });
            });
        });
    }
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    if(faqItems.length) {
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all items
                faqItems.forEach(faq => {
                    faq.classList.remove('active');
                    const icon = faq.querySelector('.question-icon i');
                    icon.className = 'fas fa-plus';
                });
                
                // Open clicked item if it wasn't already active
                if(!isActive) {
                    item.classList.add('active');
                    const icon = item.querySelector('.question-icon i');
                    icon.className = 'fas fa-minus';
                }
            });
        });
    }
    
    // Virtual Tour Modal (Simulated)
    const tourPlayButton = document.getElementById('tourPlayButton');
    const tourPreview = document.getElementById('tourPreview');
    
    if(tourPlayButton && tourPreview) {
        tourPlayButton.addEventListener('click', () => {
            // In a real implementation, this would open a modal or start a tour
            alert('Virtual tour feature would launch here. This is a placeholder for demonstration purposes.');
        });
    }
    
    // Location Sharing (Simulated)
    const shareLocBtn = document.getElementById('shareLoc');
    if(shareLocBtn) {
        shareLocBtn.addEventListener('click', () => {
            // Simulate sharing functionality
            if(navigator.share) {
                navigator.share({
                    title: 'Supreme Court of Eswatini',
                    text: 'Check out the Supreme Court of Eswatini',
                    url: window.location.href
                })
                .catch(err => {
                    console.log('Share error:', err);
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const dummyInput = document.createElement('input');
                document.body.appendChild(dummyInput);
                dummyInput.value = window.location.href;
                dummyInput.select();
                document.execCommand('copy');
                document.body.removeChild(dummyInput);
                
                alert('Link copied to clipboard!');
            }
        });
    }

    // Court Map Placeholder (would be replaced with actual map API)
    const courtMap = document.getElementById('courtMap');
    if(courtMap) {
        // This would be replaced with actual map initialization
        // e.g., Google Maps or other mapping service
        console.log('Map would be initialized here');
    }
    
    // Back to Top Button Functionality 
    // (Using the global one from header-footer.js, but ensuring it works)
    const backToTopBtn = document.getElementById('back-to-top');
    if(backToTopBtn) {
        window.addEventListener('scroll', () => {
            if(window.pageYOffset > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});