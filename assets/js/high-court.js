/**
 * High Court Page JavaScript
 * Judiciary of Eswatini Website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Particle Animation in Hero Section
    initParticleAnimation();
    
    // Animate section headings on scroll
    initSectionAnimations();
    
    // Initialize court indicators animation
    initCounterAnimation();
    
    // Initialize Quick Navigation
    initQuickNav();
    
    // Initialize Court Structure Visualization
    initCourtStructure();
    
    // Initialize Bench Tabs
    initBenchTabs();
    
    // Initialize Jurisdiction Diagram
    initJurisdictionDiagram();
    
    // Initialize Divisions Carousel
    initDivisionsCarousel();
    
    // Initialize Case Process Timelines
    initCaseProcessTimelines();
    
    // Initialize FAQ Accordion
    initFaqAccordion();
    
    // Initialize Judgments Filtering
    initJudgmentsFilter();
    
    // Initialize Contact Map (Placeholder)
    initContactMap();
});

/**
 * Hero Section Particle Animation
 */
function initParticleAnimation() {
    const particlesContainer = document.getElementById('heroParticles');
    if (!particlesContainer) return;
    
    // Configuration for particles
    const particleCount = 50;
    const colors = ['#ffffff', '#a38e5d', '#d4af37'];
    const maxSize = 5;
    const minSize = 1;
    
    // Create particles
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('span');
        particle.classList.add('particle');
        
        // Random properties
        const size = Math.random() * (maxSize - minSize) + minSize;
        const colorIndex = Math.floor(Math.random() * colors.length);
        const left = Math.random() * 100;
        const top = Math.random() * 100;
        const animationDuration = Math.random() * 15 + 15; // 15-30s
        const animationDelay = Math.random() * 2;
        const opacity = Math.random() * 0.5 + 0.1; // 0.1-0.6
        
        // Apply styles
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.backgroundColor = colors[colorIndex];
        particle.style.left = `${left}%`;
        particle.style.top = `${top}%`;
        particle.style.opacity = opacity;
        particle.style.animation = `float ${animationDuration}s infinite ease-in-out ${animationDelay}s`;
        
        particlesContainer.appendChild(particle);
    }
    
    // Add CSS for particle animation if not already in the stylesheet
    if (!document.getElementById('particle-styles')) {
        const style = document.createElement('style');
        style.id = 'particle-styles';
        style.textContent = `
            .particle {
                position: absolute;
                border-radius: 50%;
                pointer-events: none;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translateY(0) translateX(0);
                }
                25% {
                    transform: translateY(-30px) translateX(15px);
                }
                50% {
                    transform: translateY(-15px) translateX(-15px);
                }
                75% {
                    transform: translateY(30px) translateX(15px);
                }
            }
        `;
        document.head.appendChild(style);
    }
}

/**
 * Section Heading Animations on Scroll
 */
function initSectionAnimations() {
    const animatedHeadings = document.querySelectorAll('.animated-heading');
    if (!animatedHeadings.length) return;
    
    const revealImage = document.querySelector('.reveal-image');
    
    // Function to check if an element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        return (
            rect.top <= windowHeight * 0.75 && 
            rect.bottom >= 0
        );
    }
    
    // Initial check on page load
    animatedHeadings.forEach(heading => {
        if (isInViewport(heading)) {
            heading.classList.add('active');
        }
    });
    
    if (revealImage && isInViewport(revealImage)) {
        revealImage.classList.add('visible');
    }
    
    // Check on scroll
    window.addEventListener('scroll', function() {
        animatedHeadings.forEach(heading => {
            if (isInViewport(heading) && !heading.classList.contains('active')) {
                heading.classList.add('active');
            }
        });
        
        if (revealImage && isInViewport(revealImage) && !revealImage.classList.contains('visible')) {
            revealImage.classList.add('visible');
        }
    });
}

/**
 * Counter Animation for Court Indicators
 */
function initCounterAnimation() {
    const indicators = document.querySelectorAll('.indicator');
    if (!indicators.length) return;
    
    let animated = false;
    
    function animateCounters() {
        indicators.forEach(indicator => {
            const targetValue = parseInt(indicator.dataset.count);
            const valueDisplay = indicator.querySelector('.indicator-value');
            let currentValue = 0;
            const duration = 2000; // 2 seconds
            const stepTime = 50; // Update every 50ms
            const totalSteps = duration / stepTime;
            const increment = targetValue / totalSteps;
            
            const counter = setInterval(() => {
                currentValue += increment;
                if (currentValue >= targetValue) {
                    valueDisplay.textContent = targetValue;
                    clearInterval(counter);
                } else {
                    valueDisplay.textContent = Math.floor(currentValue);
                }
            }, stepTime);
        });
        
        animated = true;
    }
    
    // Check if indicators are in viewport
    function checkIndicators() {
        if (animated) return;
        
        const rect = indicators[0].getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        
        if (rect.top <= windowHeight * 0.75 && rect.bottom >= 0) {
            animateCounters();
        }
    }
    
    // Initial check and scroll listener
    checkIndicators();
    window.addEventListener('scroll', checkIndicators);
}

/**
 * Quick Navigation Sticky and Active State
 */
function initQuickNav() {
    const quickNav = document.querySelector('.court-quick-nav');
    const navItems = document.querySelectorAll('.quick-nav-item');
    const sections = document.querySelectorAll('.court-section');
    
    if (!quickNav || !navItems.length || !sections.length) return;
    
    // Handle smooth scrolling when clicking nav items
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const targetPosition = targetSection.offsetTop - quickNav.offsetHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Update active state on scroll
    function updateActiveNav() {
        const scrollPosition = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionId = '#' + section.getAttribute('id');
            const sectionTop = section.offsetTop - quickNav.offsetHeight - 10;
            const sectionBottom = sectionTop + section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                navItems.forEach(item => {
                    item.classList.remove('active');
                    
                    if (item.getAttribute('href') === sectionId) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }
    
    // Check active section on scroll
    window.addEventListener('scroll', updateActiveNav);
    
    // Initial check
    updateActiveNav();
}

/**
 * Court Structure Visualization
 */
function initCourtStructure() {
    const courtStructure = document.getElementById('courtStructure');
    if (!courtStructure) return;
    
    const centerCircle = courtStructure.querySelector('.structure-center-circle');
    const memberNodes = courtStructure.querySelectorAll('.member-node');
    
    // Position nodes around the center circle
    function positionNodes() {
        if (!centerCircle || !memberNodes.length) return;
        
        const centerRect = centerCircle.getBoundingClientRect();
        const structureRect = courtStructure.getBoundingClientRect();
        
        const centerX = centerRect.left - structureRect.left + centerRect.width / 2;
        const centerY = centerRect.top - structureRect.top + centerRect.height / 2;
        
        const radius = Math.min(structureRect.width, structureRect.height) * 0.35;
        
        // Position member nodes in a circle around the center
        memberNodes.forEach((node, index) => {
            const angle = (index * 2 * Math.PI / memberNodes.length) - Math.PI / 2;
            const x = centerX + radius * Math.cos(angle);
            const y = centerY + radius * Math.sin(angle);
            
            node.style.left = `${x}px`;
            node.style.top = `${y}px`;
        });
        
        // Create SVG to draw connecting lines
        const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('width', '100%');
        svg.setAttribute('height', '100%');
        svg.classList.add('structure-lines');
        
        // Draw lines from center to each node
        memberNodes.forEach(node => {
            const nodeRect = node.getBoundingClientRect();
            const nodeX = nodeRect.left - structureRect.left + nodeRect.width / 2;
            const nodeY = nodeRect.top - structureRect.top + nodeRect.height / 2;
            
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', centerX);
            line.setAttribute('y1', centerY);
            line.setAttribute('x2', nodeX);
            line.setAttribute('y2', nodeY);
            line.setAttribute('stroke', '#a38e5d');
            line.setAttribute('stroke-width', '2');
            line.setAttribute('stroke-dasharray', '5,5');
            
            svg.appendChild(line);
        });
        
        // Remove any existing lines
        const existingLines = courtStructure.querySelector('.structure-lines');
        if (existingLines) {
            existingLines.remove();
        }
        
        courtStructure.appendChild(svg);
    }
    
    // Position nodes on load and resize
    positionNodes();
    window.addEventListener('resize', positionNodes);
}

/**
 * Bench Tabs Functionality
 */
function initBenchTabs() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (!tabButtons.length || !tabContents.length) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            const tabId = button.dataset.tab;
            document.getElementById(tabId).classList.add('active');
        });
    });
}

/**
 * Jurisdiction Diagram Visualization
 */
function initJurisdictionDiagram() {
    const diagram = document.getElementById('jurisdictionDiagram');
    if (!diagram) return;
    
    // Create a visualization of jurisdiction types
    const types = [
        { name: 'Original Jurisdiction', class: 'original', icon: 'file-signature', desc: 'Unlimited jurisdiction to hear and determine any civil or criminal proceedings' },
        { name: 'Review Power', class: 'review', icon: 'search', desc: 'Power to review decisions of subordinate courts and tribunals' },
        { name: 'Appellate Jurisdiction', class: 'appellate', icon: 'level-up-alt', desc: 'Appeals from Magistrate Courts and specialized tribunals' }
    ];
    
    // Create diagram elements
    const diagramContent = document.createElement('div');
    diagramContent.className = 'diagram-content';
    
    // Create central node
    const centralNode = document.createElement('div');
    centralNode.className = 'diagram-node central-node';
    centralNode.innerHTML = `
        <div class="node-circle">
            <i class="fas fa-gavel"></i>
        </div>
        <div class="node-label">High Court</div>
    `;
    diagramContent.appendChild(centralNode);
    
    // Create jurisdiction type nodes
    types.forEach((type, index) => {
        const angle = (index * 2 * Math.PI / types.length) - Math.PI / 2;
        const node = document.createElement('div');
        node.className = `diagram-node jurisdiction-node ${type.class}`;
        node.style.transform = `rotate(${angle}rad) translate(150px) rotate(${-angle}rad)`;
        
        node.innerHTML = `
            <div class="node-circle">
                <i class="fas fa-${type.icon}"></i>
            </div>
            <div class="node-label">${type.name}</div>
            <div class="node-description">${type.desc}</div>
        `;
        
        diagramContent.appendChild(node);
    });
    
    // Add SVG for connections
    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('width', '100%');
    svg.setAttribute('height', '100%');
    svg.classList.add('diagram-connections');
    
    // Add diagram styles
    const style = document.createElement('style');
    style.textContent = `
        .diagram-content {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .diagram-node {
            position: absolute;
            text-align: center;
        }
        
        .central-node {
            z-index: 2;
        }
        
        .node-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #1a4b84;
        }
        
        .jurisdiction-node .node-circle {
            width: 50px;
            height: 50px;
        }
        
        .jurisdiction-node.original .node-circle {
            border-color: #1a4b84;
        }
        
        .jurisdiction-node.review .node-circle {
            border-color: #a38e5d;
        }
        
        .jurisdiction-node.appellate .node-circle {
            border-color: #d4af37;
        }
        
        .central-node .node-circle i {
            font-size: 1.5rem;
            color: #1a4b84;
        }
        
        .jurisdiction-node.original .node-circle i {
            color: #1a4b84;
        }
        
        .jurisdiction-node.review .node-circle i {
            color: #a38e5d;
        }
        
        .jurisdiction-node.appellate .node-circle i {
            color: #d4af37;
        }
        
        .node-label {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .node-description {
            font-size: 0.8rem;
            color: #666;
            max-width: 150px;
        }
        
        .diagram-connections {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
    `;
    
    document.head.appendChild(style);
    diagram.appendChild(svg);
    diagram.appendChild(diagramContent);
    
    // Draw connections after nodes are positioned
    setTimeout(() => {
        const centralRect = centralNode.querySelector('.node-circle').getBoundingClientRect();
        const diagramRect = diagram.getBoundingClientRect();
        
        const centralX = centralRect.left - diagramRect.left + centralRect.width / 2;
        const centralY = centralRect.top - diagramRect.top + centralRect.height / 2;
        
        const jurisdictionNodes = document.querySelectorAll('.jurisdiction-node');
        jurisdictionNodes.forEach(node => {
            const nodeRect = node.querySelector('.node-circle').getBoundingClientRect();
            const nodeX = nodeRect.left - diagramRect.left + nodeRect.width / 2;
            const nodeY = nodeRect.top - diagramRect.top + nodeRect.height / 2;
            
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', centralX);
            line.setAttribute('y1', centralY);
            line.setAttribute('x2', nodeX);
            line.setAttribute('y2', nodeY);
            
            // Apply different colors based on jurisdiction type
            if (node.classList.contains('original')) {
                line.setAttribute('stroke', '#1a4b84');
            } else if (node.classList.contains('review')) {
                line.setAttribute('stroke', '#a38e5d');
            } else if (node.classList.contains('appellate')) {
                line.setAttribute('stroke', '#d4af37');
            }
            
            line.setAttribute('stroke-width', '2');
            line.setAttribute('stroke-dasharray', '5,5');
            
            svg.appendChild(line);
        });
    }, 100);
}

/**
 * Divisions Carousel
 */
function initDivisionsCarousel() {
    const carousel = document.getElementById('divisionsCarousel');
    if (!carousel) return;
    
    const track = carousel.querySelector('.carousel-track');
    const cards = carousel.querySelectorAll('.division-card');
    const nextBtn = document.getElementById('divisionNext');
    const prevBtn = document.getElementById('divisionPrev');
    const dotsContainer = document.getElementById('divisionDots');
    
    if (!track || !cards.length || !nextBtn || !prevBtn || !dotsContainer) return;
    
    let currentSlide = 0;
    let slidesToShow = 3;
    
    // Update slidesToShow based on viewport width
    function updateSlidesToShow() {
        if (window.innerWidth < 768) {
            slidesToShow = 1;
        } else if (window.innerWidth < 992) {
            slidesToShow = 2;
        } else {
            slidesToShow = 3;
        }
        
        updateCarousel();
    }
    
    // Create dots
    function createDots() {
        dotsContainer.innerHTML = '';
        const totalDots = Math.ceil(cards.length / slidesToShow);
        
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('div');
            dot.classList.add('carousel-dot');
            if (i === 0) dot.classList.add('active');
            
            dot.addEventListener('click', () => {
                currentSlide = i;
                updateCarousel();
            });
            
            dotsContainer.appendChild(dot);
        }
    }
    
    // Update carousel position and state
    function updateCarousel() {
        // Calculate total slides based on current slidesToShow
        const totalSlides = Math.ceil(cards.length / slidesToShow);
        
        // Adjust currentSlide if needed
        if (currentSlide > totalSlides - 1) {
            currentSlide = totalSlides - 1;
        }
        
        // Update track position
        const slideWidth = cards[0].offsetWidth + parseInt(getComputedStyle(cards[0]).marginLeft) * 2;
        track.style.transform = `translateX(-${currentSlide * slideWidth * slidesToShow}px)`;
        
        // Update dots
        const dots = dotsContainer.querySelectorAll('.carousel-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
        
        // Update button states
        prevBtn.disabled = currentSlide === 0;
        nextBtn.disabled = currentSlide === totalSlides - 1;
    }
    
    // Event listeners for next and previous buttons
    nextBtn.addEventListener('click', () => {
        const totalSlides = Math.ceil(cards.length / slidesToShow);
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateCarousel();
        }
    });
    
    prevBtn.addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateCarousel();
        }
    });
    
    // Initialize
    updateSlidesToShow();
    createDots();
    
    // Update on window resize
    window.addEventListener('resize', () => {
        updateSlidesToShow();
        createDots();
    });
}

/**
 * Case Process Timelines
 */
function initCaseProcessTimelines() {
    const processBtns = document.querySelectorAll('.filter-btn');
    const processTimelines = document.querySelectorAll('.process-timeline');
    
    if (!processBtns.length || !processTimelines.length) return;
    
    // Timeline navigation functionality
    function setupTimeline(timelineId) {
        const timeline = document.getElementById(timelineId);
        if (!timeline) return;
        
        const steps = timeline.querySelectorAll('.timeline-step');
        const progressBar = timeline.querySelector('.progress-indicator');
        const prevBtn = timeline.querySelector('.prev');
        const nextBtn = timeline.querySelector('.next');
        
        if (!steps.length || !progressBar || !prevBtn || !nextBtn) return;
        
        let activeStep = 0;
        
        // Update timeline state
        function updateTimeline() {
            // Update active step
            steps.forEach((step, index) => {
                step.classList.toggle('active', index <= activeStep);
            });
            
            // Update progress bar
            const progressPercentage = (activeStep / (steps.length - 1)) * 100;
            progressBar.style.width = `${progressPercentage}%`;
            
            // Update navigation buttons
            prevBtn.disabled = activeStep === 0;
            nextBtn.disabled = activeStep === steps.length - 1;
        }
        
        // Event listeners for navigation buttons
        prevBtn.addEventListener('click', () => {
            if (activeStep > 0) {
                activeStep--;
                updateTimeline();
            }
        });
        
        nextBtn.addEventListener('click', () => {
            if (activeStep < steps.length - 1) {
                activeStep++;
                updateTimeline();
            }
        });
        
        // Initialize timeline
        updateTimeline();
    }
    
    // Setup process filter
    processBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            processBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            // Show corresponding timeline
            const processId = btn.dataset.process;
            processTimelines.forEach(timeline => {
                timeline.classList.toggle('active', timeline.id === `${processId}-process`);
            });
        });
    });
    
    // Initialize each timeline
    setupTimeline('civil-process');
    setupTimeline('criminal-process');
    setupTimeline('appeal-process');
}

/**
 * FAQ Accordion
 */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.question-icon i');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all items
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
                const faqIcon = faqItem.querySelector('.question-icon i');
                if (faqIcon) {
                    faqIcon.className = 'fas fa-plus';
                }
            });
            
            // Toggle current item
            if (!isActive) {
                item.classList.add('active');
                if (icon) {
                    icon.className = 'fas fa-minus';
                }
            }
        });
    });
}

/**
 * Judgments Filtering
 */
function initJudgmentsFilter() {
    const categorySelect = document.getElementById('judgmentCategory');
    const yearSelect = document.getElementById('judgmentYear');
    const searchInput = document.getElementById('judgmentSearch');
    const judgmentsGrid = document.getElementById('judgmentsGrid');
    const judgmentCards = judgmentsGrid ? judgmentsGrid.querySelectorAll('.judgment-card') : [];
    
    if (!judgmentCards.length) return;
    
    // Filter function
    function filterJudgments() {
        const categoryValue = categorySelect ? categorySelect.value : 'all';
        const yearValue = yearSelect ? yearSelect.value : 'all';
        const searchValue = searchInput ? searchInput.value.toLowerCase().trim() : '';
        
        judgmentCards.forEach(card => {
            const category = card.dataset.category;
            const year = card.dataset.year;
            const title = card.querySelector('.judgment-title').textContent.toLowerCase();
            const description = card.querySelector('.judgment-desc').textContent.toLowerCase();
            
            // Check if card matches all filters
            const matchesCategory = categoryValue === 'all' || category === categoryValue;
            const matchesYear = yearValue === 'all' || year === yearValue;
            const matchesSearch = !searchValue || 
                                 title.includes(searchValue) || 
                                 description.includes(searchValue);
            
            // Show or hide card
            if (matchesCategory && matchesYear && matchesSearch) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    // Event listeners
    if (categorySelect) {
        categorySelect.addEventListener('change', filterJudgments);
    }
    
    if (yearSelect) {
        yearSelect.addEventListener('change', filterJudgments);
    }
    
    if (searchInput) {
        searchInput.addEventListener('input', filterJudgments);
        
        // Search button
        const searchBtn = document.getElementById('searchBtn');
        if (searchBtn) {
            searchBtn.addEventListener('click', filterJudgments);
        }
    }
}

/**
 * Contact Map (Placeholder)
 */
function initContactMap() {
    const contactMap = document.getElementById('contactMap');
    if (!contactMap) return;
    
    // This is a placeholder for a real map implementation
    // In a production environment, this would be replaced with actual map API integration
    console.log('Map would be initialized here with an API like Google Maps or Leaflet');
}