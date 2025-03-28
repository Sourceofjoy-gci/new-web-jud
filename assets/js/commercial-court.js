/**
 * Commercial Court Page JavaScript
 * Judiciary of Eswatini Website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Animated Floating Elements in Hero
    animateHeroElements();
    
    // Stats Counter Animation
    initCounters();
    
    // Sticky Navigation
    initStickyNav();
    
    // Jurisdiction Diagram and Tabs
    initJurisdictionDiagram();
    initJurisdictionTabs();
    
    // Case Types Filtering
    initCaseTypeFilters();
    
    // Filing Process Navigation
    initFilingProcess();
    
    // Judges Carousel
    initJudgesCarousel();
    
    // Dashboard Performance Charts
    initDashboardCharts();
    
    // Case Duration Calculator
    initCaseCalculator();
    
    // FAQ Accordion
    initFaqAccordion();
    
    // Location Sharing
    initLocationSharing();
});

/**
 * Hero Section Animations
 */
function animateHeroElements() {
    // Hero Parallax Effect
    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset;
        const heroImage = document.querySelector('.hero-bg-image');
        if (heroImage) {
            heroImage.style.transform = `scale(1.1) translateY(${scrollPosition * 0.1}px)`;
        }
    });
    
    // Connect floating lines to circles with SVG (advanced decoration)
    const heroElements = document.querySelector('.hero-elements');
    if (heroElements) {
        // Create SVG element for connections
        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute('width', '100%');
        svg.setAttribute('height', '100%');
        svg.style.position = 'absolute';
        svg.style.top = '0';
        svg.style.left = '0';
        svg.style.pointerEvents = 'none';
        svg.style.opacity = '0.1';
        
        // Add lines connecting floating elements (purely decorative)
        const connections = [
            {from: 'floatingCircle1', to: 'floatingCircle2'},
            {from: 'floatingCircle2', to: 'floatingCircle3'},
            {from: 'floatingCircle3', to: 'floatingCircle1'}
        ];
        
        connections.forEach(conn => {
            const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
            line.setAttribute('stroke', 'white');
            line.setAttribute('stroke-width', '1');
            
            // Update line positions based on circle positions
            function updateLine() {
                const fromEl = document.getElementById(conn.from);
                const toEl = document.getElementById(conn.to);
                
                if (fromEl && toEl) {
                    const fromRect = fromEl.getBoundingClientRect();
                    const toRect = toEl.getBoundingClientRect();
                    const heroRect = heroElements.getBoundingClientRect();
                    
                    // Calculate positions relative to hero container
                    const x1 = fromRect.left - heroRect.left + fromRect.width/2;
                    const y1 = fromRect.top - heroRect.top + fromRect.height/2;
                    const x2 = toRect.left - heroRect.left + toRect.width/2;
                    const y2 = toRect.top - heroRect.top + toRect.height/2;
                    
                    line.setAttribute('x1', x1);
                    line.setAttribute('y1', y1);
                    line.setAttribute('x2', x2);
                    line.setAttribute('y2', y2);
                }
            }
            
            // Initial update
            updateLine();
            
            // Update on window resize
            window.addEventListener('resize', updateLine);
            
            // Add line to SVG
            svg.appendChild(line);
        });
        
        // Add SVG to hero elements
        heroElements.appendChild(svg);
    }
}

/**
 * Initialize Counter Animation for Stats
 */
function initCounters() {
    const counterElements = document.querySelectorAll('.counter');
    if (!counterElements.length) return;
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    // Function to animate counter
    function animateCounter(counter) {
        const targetValue = parseInt(counter.dataset.target);
        const duration = 2000; // ms
        const stepTime = 20; // ms
        const totalSteps = duration / stepTime;
        const stepValue = targetValue / totalSteps;
        
        let currentValue = 0;
        const counterInterval = setInterval(() => {
            currentValue += stepValue;
            
            if (currentValue >= targetValue) {
                currentValue = targetValue;
                clearInterval(counterInterval);
            }
            
            counter.textContent = Math.floor(currentValue);
        }, stepTime);
    }
    
    // Check if counters are in viewport and start animation
    function checkCounters() {
        counterElements.forEach(counter => {
            if (isInViewport(counter) && !counter.classList.contains('animated')) {
                counter.classList.add('animated');
                animateCounter(counter);
            }
        });
    }
    
    // Initial check
    checkCounters();
    
    // Check on scroll
    window.addEventListener('scroll', checkCounters);
}

/**
 * Initialize Sticky Navigation
 */
function initStickyNav() {
    const navbar = document.querySelector('.court-navigation');
    if (!navbar) return;
    
    const navbarOffset = navbar.offsetTop;
    
    // Function to handle sticky nav
    function handleStickyNav() {
        if (window.pageYOffset >= navbarOffset) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    }
    
    // Check on scroll
    window.addEventListener('scroll', handleStickyNav);
    
    // Handle active nav item based on scroll position
    const navItems = navbar.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('section[id]');
    
    window.addEventListener('scroll', () => {
        let current = '';
        const scrollPosition = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = '#' + section.getAttribute('id');
            }
        });
        
        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === current) {
                item.classList.add('active');
            }
        });
    });
    
    // Smooth scrolling for navigation links
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Offset for sticky header
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Initialize Jurisdiction Interactive Diagram
 */
function initJurisdictionDiagram() {
    const diagram = document.getElementById('jurisdictionDiagram');
    if (!diagram) return;
    
    const center = diagram.querySelector('.diagram-center');
    const nodes = diagram.querySelectorAll('.jurisdiction-node');
    const connections = diagram.querySelector('.diagram-connections');
    
    // Create SVG for connections
    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute('width', '100%');
    svg.setAttribute('height', '100%');
    connections.appendChild(svg);
    
    // Function to draw connections from center to each node
    function drawConnections() {
        // Clear previous connections
        while (svg.firstChild) {
            svg.removeChild(svg.firstChild);
        }
        
        const centerRect = center.getBoundingClientRect();
        const diagramRect = diagram.getBoundingClientRect();
        
        // Center position relative to diagram
        const centerX = centerRect.left - diagramRect.left + centerRect.width/2;
        const centerY = centerRect.top - diagramRect.top + centerRect.height/2;
        
        // Draw line to each node
        nodes.forEach(node => {
            const nodeRect = node.getBoundingClientRect();
            
            // Node position relative to diagram
            const nodeX = nodeRect.left - diagramRect.left + nodeRect.width/2;
            const nodeY = nodeRect.top - diagramRect.top + nodeRect.height/2;
            
            // Create line
            const line = document.createElementNS("http://www.w3.org/2000/svg", "path");
            
            // Calculate control points for curved line
            const dx = nodeX - centerX;
            const dy = nodeY - centerY;
            const distance = Math.sqrt(dx*dx + dy*dy);
            
            // Control point distance (adjust for curve amount)
            const cpDistance = distance * 0.3;
            
            // Control points
            const cp1x = centerX + dx * 0.2;
            const cp1y = centerY + dy * 0.2;
            const cp2x = nodeX - dx * 0.2;
            const cp2y = nodeY - dy * 0.2;
            
            // Create path
            const path = `M ${centerX} ${centerY} C ${cp1x} ${cp1y}, ${cp2x} ${cp2y}, ${nodeX} ${nodeY}`;
            
            line.setAttribute('d', path);
            line.setAttribute('stroke', '#a38e5d');
            line.setAttribute('stroke-width', '2');
            line.setAttribute('fill', 'none');
            line.setAttribute('stroke-dasharray', '3,3');
            
            svg.appendChild(line);
        });
    }
    
    // Initial draw
    setTimeout(drawConnections, 100); // Small delay to ensure elements are rendered
    
    // Redraw on window resize
    window.addEventListener('resize', drawConnections);
    
    // Interactive highlighting on node hover
    nodes.forEach(node => {
        node.addEventListener('mouseenter', function() {
            const nodePosition = this.getAttribute('data-position');
            const tabButton = document.querySelector(`.tab-button[data-tab="${getTabFromPosition(nodePosition)}"]`);
            
            // Highlight corresponding tab
            if (tabButton) {
                tabButton.classList.add('highlight');
            }
        });
        
        node.addEventListener('mouseleave', function() {
            const nodePosition = this.getAttribute('data-position');
            const tabButton = document.querySelector(`.tab-button[data-tab="${getTabFromPosition(nodePosition)}"]`);
            
            // Remove highlight
            if (tabButton) {
                tabButton.classList.remove('highlight');
            }
        });
        
        // Click to activate corresponding tab
        node.addEventListener('click', function() {
            const nodePosition = this.getAttribute('data-position');
            const tabButton = document.querySelector(`.tab-button[data-tab="${getTabFromPosition(nodePosition)}"]`);
            
            // Activate tab
            if (tabButton) {
                tabButton.click();
            }
        });
    });
    
    // Helper function to map node position to tab ID
    function getTabFromPosition(position) {
        const mapping = {
            'top-left': 'monetary',
            'top-right': 'corporate',
            'right': 'contracts',
            'bottom-right': 'ip',
            'bottom-left': 'banking',
            'left': 'trade'
        };
        
        return mapping[position] || '';
    }
}

/**
 * Initialize Jurisdiction Tabs
 */
function initJurisdictionTabs() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    if (!tabButtons.length || !tabPanes.length) return;
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Add active class to clicked button and corresponding pane
            this.classList.add('active');
            const tabId = this.getAttribute('data-tab');
            const targetPane = document.getElementById(tabId);
            
            if (targetPane) {
                targetPane.classList.add('active');
            }
            
            // Also highlight the corresponding node in the diagram
            highlightCorrespondingNode(tabId);
        });
    });
    
    // Function to highlight corresponding node in diagram
    function highlightCorrespondingNode(tabId) {
        // Map tab ID to node position
        const mapping = {
            'monetary': 'top-left',
            'corporate': 'top-right',
            'contracts': 'right',
            'ip': 'bottom-right',
            'banking': 'bottom-left',
            'trade': 'left'
        };
        
        const position = mapping[tabId] || '';
        
        // Remove highlight from all nodes
        const nodes = document.querySelectorAll('.jurisdiction-node');
        nodes.forEach(node => node.classList.remove('active'));
        
        // Add highlight to corresponding node
        if (position) {
            const node = document.querySelector(`.jurisdiction-node[data-position="${position}"]`);
            if (node) {
                node.classList.add('active');
            }
        }
    }
}

/**
 * Initialize Case Type Filters
 */
function initCaseTypeFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const caseCards = document.querySelectorAll('.case-type-card');
    
    if (!filterButtons.length || !caseCards.length) return;
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Filter cards based on category
            caseCards.forEach(card => {
                if (filter === 'all') {
                    // Show all cards
                    card.style.display = '';
                    
                    // Add animation
                    card.classList.add('fade-in');
                    setTimeout(() => {
                        card.classList.remove('fade-in');
                    }, 500);
                } else {
                    // Check if card has the selected category
                    const categories = card.getAttribute('data-category').split(' ');
                    
                    if (categories.includes(filter)) {
                        card.style.display = '';
                        
                        // Add animation
                        card.classList.add('fade-in');
                        setTimeout(() => {
                            card.classList.remove('fade-in');
                        }, 500);
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });
}

/**
 * Initialize Filing Process Navigation
 */
function initFilingProcess() {
    const processSteps = document.querySelectorAll('.process-step');
    const progressBar = document.getElementById('processProgress');
    const prevButton = document.getElementById('prevStep');
    const nextButton = document.getElementById('nextStep');
    const stepDots = document.querySelectorAll('.step-dots .dot');
    
    if (!processSteps.length || !progressBar || !prevButton || !nextButton) return;
    
    let currentStep = 0;
    const totalSteps = processSteps.length;
    
    // Function to update the process display
    function updateProcess() {
        // Update progress bar width
        const progressPercentage = (currentStep / (totalSteps - 1)) * 100;
        progressBar.style.width = `${progressPercentage}%`;
        
        // Update step visibility
        processSteps.forEach((step, index) => {
            step.classList.toggle('active', index === currentStep);
        });
        
        // Update dots
        stepDots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentStep);
        });
        
        // Update button states
        prevButton.disabled = currentStep === 0;
        nextButton.disabled = currentStep === totalSteps - 1;
    }
    
    // Initialize
    updateProcess();
    
    // Event listeners for navigation buttons
    prevButton.addEventListener('click', function() {
        if (currentStep > 0) {
            currentStep--;
            updateProcess();
        }
    });
    
    nextButton.addEventListener('click', function() {
        if (currentStep < totalSteps - 1) {
            currentStep++;
            updateProcess();
        }
    });
    
    // Event listeners for step dots
    stepDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            currentStep = index;
            updateProcess();
        });
    });
}

/**
 * Initialize Judges Carousel
 */
function initJudgesCarousel() {
    const carousel = document.getElementById('judgesCarousel');
    const prevButton = document.getElementById('judgesPrev');
    const nextButton = document.getElementById('judgesNext');
    const indicators = document.querySelectorAll('#judgesIndicators .indicator');
    
    if (!carousel || !prevButton || !nextButton) return;
    
    const judgeCards = carousel.querySelectorAll('.judge-card');
    const totalSlides = judgeCards.length;
    let currentSlide = 0;
    
    // Function to update carousel position
    function updateCarousel() {
        const translateValue = currentSlide * -100;
        carousel.style.transform = `translateX(${translateValue}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
        
        // Update button states (optional: disable at ends)
        prevButton.classList.toggle('disabled', currentSlide === 0);
        nextButton.classList.toggle('disabled', currentSlide === totalSlides - 1);
    }
    
    // Initialize
    updateCarousel();
    
    // Event listeners for navigation buttons
    prevButton.addEventListener('click', function() {
        if (currentSlide > 0) {
            currentSlide--;
            updateCarousel();
        }
    });
    
    nextButton.addEventListener('click', function() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateCarousel();
        }
    });
    
    // Event listeners for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            currentSlide = index;
            updateCarousel();
        });
    });
    
    // Optional: Auto-advance carousel
    let carouselInterval;
    
    function startCarouselInterval() {
        carouselInterval = setInterval(() => {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateCarousel();
        }, 5000); // Change slide every 5 seconds
    }
    
    function stopCarouselInterval() {
        clearInterval(carouselInterval);
    }
    
    // Start auto-advance
    startCarouselInterval();
    
    // Pause on hover or interaction
    carousel.addEventListener('mouseenter', stopCarouselInterval);
    carousel.addEventListener('mouseleave', startCarouselInterval);
    prevButton.addEventListener('click', stopCarouselInterval);
    nextButton.addEventListener('click', stopCarouselInterval);
}

/**
 * Initialize Dashboard Performance Charts
 */
function initDashboardCharts() {
    // Check if Chart.js is available
    if (typeof Chart === 'undefined') {
        console.log('Chart.js not available. Loading from CDN...');
        
        // Create a script element to load Chart.js
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js';
        script.onload = createCharts;
        document.head.appendChild(script);
    } else {
        createCharts();
    }
    
    // Dashboard view toggling
    const dashboardButtons = document.querySelectorAll('.dashboard-nav-btn');
    const dashboardViews = document.querySelectorAll('.dashboard-view');
    
    if (dashboardButtons.length && dashboardViews.length) {
        dashboardButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                dashboardButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding view
                const viewId = this.getAttribute('data-view') + 'View';
                dashboardViews.forEach(view => {
                    view.classList.toggle('active', view.id === viewId);
                });
            });
        });
    }
    
    // Year selector
    const yearSelect = document.getElementById('yearSelect');
    if (yearSelect) {
        yearSelect.addEventListener('change', function() {
            updateChartsData(this.value);
        });
    }
    
    // Function to create all charts
    function createCharts() {
        // Sample data
        const currentYear = '2024';
        createCaseloadChart(currentYear);
        createResolutionChart(currentYear);
        createCategoriesChart(currentYear);
    }
    
    // Function to update charts based on selected year
    function updateChartsData(year) {
        // Update each chart with data for the selected year
        updateCaseloadChart(year);
        updateResolutionChart(year);
        updateCategoriesChart(year);
    }
    
    // Caseload Chart
    let caseloadChart;
    
    function createCaseloadChart(year) {
        const ctx = document.getElementById('caseloadChart');
        if (!ctx) return;
        
        // Sample data based on year
        const data = getCaseloadData(year);
        
        caseloadChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'New Cases Filed',
                        data: data.newCases,
                        backgroundColor: '#1a4b84',
                        borderColor: '#1a4b84',
                        borderWidth: 1
                    },
                    {
                        label: 'Cases Resolved',
                        data: data.resolvedCases,
                        backgroundColor: '#a38e5d',
                        borderColor: '#a38e5d',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: `Caseload Statistics (${year})`
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Cases'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    }
                }
            }
        });
    }
    
    function updateCaseloadChart(year) {
        if (!caseloadChart) return;
        
        const data = getCaseloadData(year);
        
        caseloadChart.data.datasets[0].data = data.newCases;
        caseloadChart.data.datasets[1].data = data.resolvedCases;
        caseloadChart.options.plugins.title.text = `Caseload Statistics (${year})`;
        caseloadChart.update();
    }
    
    // Helper function to get caseload data for a specific year
    function getCaseloadData(year) {
        // Sample data - in a real application, this would come from an API or database
        const data = {
            '2021': {
                newCases: [25, 28, 30, 35, 32, 28, 30, 29, 33, 36, 30, 27],
                resolvedCases: [21, 24, 27, 32, 30, 26, 28, 27, 30, 32, 27, 25]
            },
            '2022': {
                newCases: [28, 32, 35, 38, 36, 32, 35, 33, 36, 40, 34, 30],
                resolvedCases: [25, 28, 33, 35, 33, 30, 32, 30, 34, 37, 30, 28]
            },
            '2023': {
                newCases: [32, 35, 38, 42, 39, 35, 38, 36, 40, 44, 38, 34],
                resolvedCases: [29, 32, 36, 39, 37, 33, 36, 34, 38, 41, 35, 31]
            },
            '2024': {
                newCases: [35, 38, 42, 45, 42, 38, 40, 39, 43, 47, 42, 37],
                resolvedCases: [33, 36, 40, 43, 40, 36, 38, 37, 41, 44, 39, 35]
            }
        };
        
        return data[year] || data['2024']; // Default to 2024 if year not found
    }
    
    // Resolution Time Chart
    let resolutionChart;
    
    function createResolutionChart(year) {
        const ctx = document.getElementById('resolutionChart');
        if (!ctx) return;
        
        // Sample data based on year
        const data = getResolutionData(year);
        
        resolutionChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Average Days to Resolution',
                        data: data.resolutionTime,
                        borderColor: '#d4af37',
                        backgroundColor: 'rgba(212, 175, 55, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: `Case Resolution Time (${year})`
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Days'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    }
                }
            }
        });
    }
    
    function updateResolutionChart(year) {
        if (!resolutionChart) return;
        
        const data = getResolutionData(year);
        
        resolutionChart.data.datasets[0].data = data.resolutionTime;
        resolutionChart.options.plugins.title.text = `Case Resolution Time (${year})`;
        resolutionChart.update();
    }
    
    // Helper function to get resolution data for a specific year
    function getResolutionData(year) {
        // Sample data - in a real application, this would come from an API or database
        const data = {
            '2021': {
                resolutionTime: [150, 145, 140, 138, 135, 133, 132, 130, 128, 127, 125, 124]
            },
            '2022': {
                resolutionTime: [140, 138, 135, 133, 130, 128, 126, 125, 123, 122, 120, 118]
            },
            '2023': {
                resolutionTime: [130, 128, 125, 123, 122, 120, 118, 117, 115, 113, 112, 110]
            },
            '2024': {
                resolutionTime: [125, 123, 120, 118, 115, 113, 110, 108, 107, 105, 103, 100]
            }
        };
        
        return data[year] || data['2024']; // Default to 2024 if year not found
    }
    
    // Categories Chart
    let categoriesChart;
    
    function createCategoriesChart(year) {
        const ctx = document.getElementById('categoriesChart');
        if (!ctx) return;
        
        // Sample data based on year
        const data = getCategoriesData(year);
        
        categoriesChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Banking & Finance', 'Contract Disputes', 'Corporate Governance', 'Intellectual Property', 'International Trade', 'Real Estate & Construction'],
                datasets: [
                    {
                        data: data.distribution,
                        backgroundColor: [
                            '#4a90e2', // Banking
                            '#27ae60', // Contract
                            '#8e44ad', // Corporate
                            '#e74c3c', // IP
                            '#f39c12', // International
                            '#16a085'  // Real Estate
                        ],
                        borderColor: '#ffffff',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: false,
                        text: `Case Categories Distribution (${year})`
                    }
                }
            }
        });
    }
    
    function updateCategoriesChart(year) {
        if (!categoriesChart) return;
        
        const data = getCategoriesData(year);
        
        categoriesChart.data.datasets[0].data = data.distribution;
        categoriesChart.options.plugins.title.text = `Case Categories Distribution (${year})`;
        categoriesChart.update();
    }
    
    // Helper function to get categories data for a specific year
    function getCategoriesData(year) {
        // Sample data - in a real application, this would come from an API or database
        const data = {
            '2021': {
                distribution: [30, 25, 15, 10, 10, 10]
            },
            '2022': {
                distribution: [32, 23, 16, 11, 8, 10]
            },
            '2023': {
                distribution: [33, 22, 15, 12, 10, 8]
            },
            '2024': {
                distribution: [35, 20, 15, 12, 12, 6]
            }
        };
        
        return data[year] || data['2024']; // Default to 2024 if year not found
    }
}

/**
 * Initialize Case Duration Calculator
 */
function initCaseCalculator() {
    const calculateBtn = document.getElementById('calculateBtn');
    const calculatorResult = document.getElementById('calculatorResult');
    const timeRange = document.getElementById('timeRange');
    const resultDetails = document.getElementById('resultDetails');
    
    if (!calculateBtn || !calculatorResult || !timeRange || !resultDetails) return;
    
    calculateBtn.addEventListener('click', function() {
        // Get form values
        const caseType = document.getElementById('caseType').value;
        const claimValue = parseFloat(document.getElementById('claimValue').value) || 0;
        const complexity = document.getElementById('complexity').value;
        let settlement = '';
        
        const settlementOptions = document.querySelectorAll('input[name="settlement"]');
        settlementOptions.forEach(option => {
            if (option.checked) {
                settlement = option.value;
            }
        });
        
        // Validate inputs
        if (!caseType || !complexity || !settlement || claimValue < 500000) {
            alert('Please fill all fields. Claim value must be at least E500,000.');
            return;
        }
        
        // Calculate estimated duration
        const estimate = calculateDuration(caseType, claimValue, complexity, settlement);
        
        // Update result
        timeRange.textContent = `${estimate.min}-${estimate.max}`;
        
        // Generate details
        let detailsHTML = `
            <p>Based on your inputs:</p>
            <ul>
                <li><strong>Case Type:</strong> ${formatCaseType(caseType)}</li>
                <li><strong>Claim Value:</strong> E${claimValue.toLocaleString()}</li>
                <li><strong>Complexity:</strong> ${complexity.charAt(0).toUpperCase() + complexity.slice(1)}</li>
                <li><strong>Settlement Potential:</strong> ${settlement.charAt(0).toUpperCase() + settlement.slice(1)}</li>
            </ul>
            <p>${estimate.explanation}</p>
        `;
        
        resultDetails.innerHTML = detailsHTML;
        
        // Show result
        calculatorResult.classList.add('active');
        
        // Scroll to result
        calculatorResult.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
    
    // Helper function to calculate duration based on inputs
    function calculateDuration(caseType, claimValue, complexity, settlement) {
        // Base duration by case type (in months)
        const baseDuration = {
            'contract': { min: 3, max: 6 },
            'corporate': { min: 6, max: 12 },
            'banking': { min: 4, max: 8 },
            'ip': { min: 8, max: 15 },
            'international': { min: 6, max: 12 }
        };
        
        // Get base duration for selected case type
        let min = baseDuration[caseType]?.min || 4;
        let max = baseDuration[caseType]?.max || 8;
        
        // Adjust for claim value
        if (claimValue > 10000000) {
            min += 2;
            max += 3;
        } else if (claimValue > 5000000) {
            min += 1;
            max += 2;
        }
        
        // Adjust for complexity
        if (complexity === 'high') {
            min += 2;
            max += 4;
        } else if (complexity === 'medium') {
            min += 1;
            max += 2;
        }
        
        // Adjust for settlement potential
        if (settlement === 'high') {
            min = Math.max(2, min - 2);
            max = Math.max(4, max - 3);
        } else if (settlement === 'low') {
            min += 1;
            max += 2;
        }
        
        // Generate explanation
        let explanation = '';
        
        if (settlement === 'high') {
            explanation = 'With high settlement potential, your case may resolve more quickly through mediation or pre-trial settlement.';
        } else if (complexity === 'high') {
            explanation = 'Given the high complexity of this matter, expect a longer timeframe with potential for expert testimony and extended discovery.';
        } else if (claimValue > 10000000) {
            explanation = 'High-value claims typically involve more extensive proceedings and detailed financial analysis.';
        } else {
            explanation = 'This estimate represents the typical timeframe from filing to resolution for similar cases.';
        }
        
        return { min, max, explanation };
    }
    
    // Helper function to format case type
    function formatCaseType(type) {
        const formats = {
            'contract': 'Contract Dispute',
            'corporate': 'Corporate/Shareholder Dispute',
            'banking': 'Banking/Financial Dispute',
            'ip': 'Intellectual Property Dispute',
            'international': 'International Trade Dispute'
        };
        
        return formats[type] || type;
    }
}

/**
 * Initialize FAQ Accordion
 */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    if (!faqItems.length) return;
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            
            // Close all items first
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
                const toggleIcon = faqItem.querySelector('.question-toggle i');
                if (toggleIcon) {
                    toggleIcon.className = 'fas fa-plus';
                }
            });
            
            // Toggle current item
            if (!isActive) {
                item.classList.add('active');
                const toggleIcon = item.querySelector('.question-toggle i');
                if (toggleIcon) {
                    toggleIcon.className = 'fas fa-minus';
                }
            }
        });
    });
}

/**
 * Initialize Location Sharing
 */
function initLocationSharing() {
    const shareLocationBtn = document.getElementById('shareLocationBtn');
    
    if (!shareLocationBtn) return;
    
    shareLocationBtn.addEventListener('click', function() {
        // Check if Web Share API is available
        if (navigator.share) {
            navigator.share({
                title: 'Commercial Court Location',
                text: 'Commercial Court Division, High Court Building, Mbabane, Eswatini',
                url: 'https://maps.google.com/?q=Commercial+Court,Mbabane,Eswatini'
            })
            .catch(error => console.log('Error sharing:', error));
        } else {
            // Fallback for browsers that don't support Web Share API
            const tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.value = 'https://maps.google.com/?q=Commercial+Court,Mbabane,Eswatini';
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            
            alert('Location link copied to clipboard!');
        }
    });
}