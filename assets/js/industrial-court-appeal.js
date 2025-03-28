/**
 * Industrial Court of Appeal Page Scripts
 * 
 * This file contains all the interactive functionality for the 
 * Industrial Court of Appeal page of the Eswatini Judiciary website.
 */

(function() {
    'use strict';
    
    // DOM elements
    const hierarchyChart = document.getElementById('hierarchyChart');
    const timelineNavs = document.querySelectorAll('.timeline-nav');
    const timelineStages = document.querySelectorAll('.timeline-stage');
    const faqTabs = document.querySelectorAll('.faq-tab');
    const faqContents = document.querySelectorAll('.faq-content');
    const faqItems = document.querySelectorAll('.faq-item');
    const bioToggles = document.querySelectorAll('.bio-toggle');
    const viewBtns = document.querySelectorAll('.view-btn');
    const statsToggles = document.querySelectorAll('.stats-toggle');
    const yearNavBtns = document.querySelectorAll('.year-nav');
    const caseSearchInput = document.getElementById('caseSearchInput');
    const caseYearFilter = document.getElementById('caseYearFilter');
    const casesGrid = document.getElementById('casesGrid');
    const leadershipCarousel = document.getElementById('leadershipCarousel');
    const navPrev = document.querySelector('.nav-prev');
    const navNext = document.querySelector('.nav-next');
    const navDots = document.querySelectorAll('.nav-dot');
    const statsYear = document.getElementById('statsYear');
    
    // Data
    let currentStage = 1;
    let currentSlide = 0;
    let currentYear = 2023;
    let currentView = 'vertical';
    let currentPeriod = 'annual';
    
    /**
     * Initialize all functionality when DOM is fully loaded
     */
    document.addEventListener('DOMContentLoaded', function() {
        initAnimations();
        initHierarchyChart();
        initTimeline();
        initFAQs();
        initBioToggles();
        initViewToggle();
        initStatsControls();
        initCaseSearch();
        initCarousel();
        initCaptcha();
        initMap();
        initCharts();
        initScrollEffects();
    });

    /**
     * Initialize page animations
     */
    function initAnimations() {
        // Staggered animation for hero content
        const heroTitle = document.querySelector('.industrial-appeal-hero h1');
        const heroTagline = document.querySelector('.industrial-appeal-hero .tagline');
        const heroActions = document.querySelector('.industrial-appeal-hero .hero-actions');
        
        if (heroTitle && heroTagline && heroActions) {
            heroTitle.classList.add('reveal-text');
            
            setTimeout(() => {
                heroTagline.classList.add('reveal-text');
            }, 200);
            
            setTimeout(() => {
                heroActions.classList.add('reveal-fade');
            }, 400);
        }
        
        // Animate information cards on scroll
        const courtInfoCards = document.querySelectorAll('.court-info-card');
        
        if (courtInfoCards.length) {
            courtInfoCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        card.style.transition = 'all 0.6s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                }, index * 100);
            });
        }
    }

    /**
     * Initialize the court hierarchy visualization chart
     */
    function initHierarchyChart() {
        if (!hierarchyChart) return;
        
        // Sample data for the court hierarchy
        const hierarchyData = {
            name: "Judiciary of Eswatini",
            children: [
                {
                    name: "Supreme Court",
                    level: "apex",
                    children: []
                },
                {
                    name: "High Court",
                    level: "superior",
                    children: [
                        {
                            name: "Commercial Court",
                            level: "specialized",
                            children: []
                        }
                    ]
                },
                {
                    name: "Industrial Court of Appeal",
                    level: "superior",
                    highlight: true,
                    children: []
                },
                {
                    name: "Industrial Court",
                    level: "specialized",
                    children: []
                },
                {
                    name: "Magistrate Courts",
                    level: "magistrate",
                    children: []
                }
            ]
        };
        
        // Render the initial vertical hierarchy view
        renderHierarchyChart(hierarchyData, 'vertical');
        
        // View toggle functionality
        viewBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const view = this.getAttribute('data-view');
                
                // Don't do anything if the same view is clicked
                if (view === currentView) return;
                
                // Update active state
                viewBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Update current view
                currentView = view;
                
                // Re-render chart with the new view
                renderHierarchyChart(hierarchyData, view);
            });
        });
    }
    
    /**
     * Render the hierarchy chart with the specified view (vertical or horizontal)
     */
    function renderHierarchyChart(data, view) {
        if (!hierarchyChart) return;
        
        // Clear previous chart
        hierarchyChart.innerHTML = '';
        
        // Create SVG elements for the chart
        const chartSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        chartSvg.setAttribute('width', '100%');
        chartSvg.setAttribute('height', '100%');
        chartSvg.setAttribute('viewBox', view === 'vertical' ? '0 0 800 400' : '0 0 800 300');
        
        // Add the chart to the container
        hierarchyChart.appendChild(chartSvg);
        
        // Create the hierarchy structure
        if (view === 'vertical') {
            createVerticalHierarchy(data, chartSvg);
        } else {
            createHorizontalHierarchy(data, chartSvg);
        }
    }
    
    /**
     * Create a vertical hierarchy visualization
     */
    function createVerticalHierarchy(data, svg) {
        // Center position
        const centerX = 400;
        const topY = 50;
        
        // Create Supreme Court (apex) node
        const supremeCourt = data.children.find(court => court.level === 'apex');
        createCourtNode(svg, centerX, topY, supremeCourt.name, 'apex', false);
        
        // Create connecting line
        createLine(svg, centerX, topY + 30, centerX, topY + 70);
        
        // Create Superior Courts row
        const superiorCourts = data.children.filter(court => court.level === 'superior');
        const superiorY = topY + 100;
        const superiorSpacing = 250;
        const superiorStartX = centerX - ((superiorCourts.length - 1) * superiorSpacing / 2);
        
        superiorCourts.forEach((court, index) => {
            const x = superiorStartX + (index * superiorSpacing);
            createCourtNode(svg, x, superiorY, court.name, 'superior', court.highlight);
            
            // Connect to Supreme Court
            createLine(svg, x, superiorY - 30, centerX, topY + 30);
            
            // If this court has children, draw connections
            if (court.children && court.children.length) {
                const specializedY = superiorY + 100;
                const specializedSpacing = 180;
                const specializedStartX = x - ((court.children.length - 1) * specializedSpacing / 2);
                
                court.children.forEach((specializedCourt, idx) => {
                    const specX = specializedStartX + (idx * specializedSpacing);
                    createCourtNode(svg, specX, specializedY, specializedCourt.name, 'specialized', false);
                    
                    // Connect to parent
                    createLine(svg, specX, specializedY - 30, x, superiorY + 30);
                });
            }
        });
        
        // Create Industrial Court node
        const industrialCourt = data.children.find(court => court.name === 'Industrial Court');
        const industrialCourtX = superiorStartX + superiorSpacing;
        const industrialCourtY = superiorY + 100;
        createCourtNode(svg, industrialCourtX, industrialCourtY, industrialCourt.name, 'specialized', false);
        
        // Connect Industrial Court to Industrial Court of Appeal
        const industrialAppealX = superiorStartX + superiorSpacing;
        createLine(svg, industrialCourtX, industrialCourtY - 30, industrialAppealX, superiorY + 30);
        
        // Create Magistrate Courts node
        const magistrateCourts = data.children.find(court => court.level === 'magistrate');
        const magistrateX = centerX;
        const magistrateY = superiorY + 100;
        createCourtNode(svg, magistrateX, magistrateY, magistrateCourts.name, 'magistrate', false);
        
        // Connect Magistrate Courts to High Court
        const highCourtX = superiorStartX;
        createLine(svg, magistrateX, magistrateY - 30, highCourtX, superiorY + 30);
    }
    
    /**
     * Create a horizontal hierarchy visualization
     */
    function createHorizontalHierarchy(data, svg) {
        // Starting position
        const leftX = 100;
        const centerY = 150;
        
        // Court levels
        const levels = [
            {name: 'Supreme Court', courts: data.children.filter(c => c.level === 'apex')},
            {name: 'Superior Courts', courts: data.children.filter(c => c.level === 'superior')},
            {name: 'Specialized Courts', courts: data.children.filter(c => c.level === 'specialized').concat(
                data.children.filter(c => c.level === 'superior').flatMap(c => c.children)
            )},
            {name: 'Magistrate Courts', courts: data.children.filter(c => c.level === 'magistrate')}
        ];
        
        // Create level groups
        levels.forEach((level, index) => {
            const x = leftX + (index * 200);
            const labelY = 50;
            
            // Add level label
            const levelLabel = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            levelLabel.setAttribute('x', x);
            levelLabel.setAttribute('y', labelY);
            levelLabel.setAttribute('text-anchor', 'middle');
            levelLabel.setAttribute('font-size', '14');
            levelLabel.setAttribute('fill', '#666');
            levelLabel.textContent = level.name;
            svg.appendChild(levelLabel);
            
            // Create courts in this level
            const courtsCount = level.courts.length;
            const courtSpacing = 70;
            const courtsHeight = courtsCount * courtSpacing;
            const startY = centerY - (courtsHeight / 2) + 30;
            
            level.courts.forEach((court, courtIndex) => {
                const y = startY + (courtIndex * courtSpacing);
                createCourtNode(svg, x, y, court.name, court.level, court.highlight, 'horizontal');
                
                // Create connection lines based on the court relationships
                if (index > 0) {
                    // Connect to the previous level based on the relationships
                    if (court.name === 'Industrial Court of Appeal') {
                        // Connect to Supreme Court
                        createLine(svg, x - 30, y, leftX + 30, startY);
                    } else if (court.name === 'High Court') {
                        // Connect to Supreme Court
                        createLine(svg, x - 30, y, leftX + 30, startY);
                    } else if (court.name === 'Industrial Court') {
                        // Connect to Industrial Court of Appeal
                        const icaY = startY + (level.courts.findIndex(c => c.name === 'Industrial Court of Appeal') * courtSpacing);
                        createLine(svg, x - 30, y, x - 200 + 30, icaY);
                    } else if (court.name === 'Magistrate Courts') {
                        // Connect to High Court
                        const hcY = startY + (levels[1].courts.findIndex(c => c.name === 'High Court') * courtSpacing);
                        createLine(svg, x - 30, y, x - 200 + 30, hcY);
                    }
                }
            });
        });
    }
    
    /**
     * Create a court node in the hierarchy visualization
     */
    function createCourtNode(svg, x, y, name, level, highlight, orientation = 'vertical') {
        const nodeGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        
        // Node colors based on court level
        const colors = {
            apex: '#9c27b0',
            superior: '#3f51b5',
            specialized: '#2196f3',
            magistrate: '#4caf50'
        };
        
        // Create node background
        const rectWidth = orientation === 'vertical' ? 180 : 150;
        const rectHeight = 60;
        const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
        rect.setAttribute('x', x - rectWidth / 2);
        rect.setAttribute('y', y - rectHeight / 2);
        rect.setAttribute('width', rectWidth);
        rect.setAttribute('height', rectHeight);
        rect.setAttribute('rx', '8');
        rect.setAttribute('fill', highlight ? '#ff5722' : colors[level]);
        rect.setAttribute('opacity', highlight ? '1' : '0.8');
        
        if (highlight) {
            // Add glow effect for highlighted nodes
            const glow = document.createElementNS('http://www.w3.org/2000/svg', 'filter');
            glow.setAttribute('id', 'glow');
            const feGaussianBlur = document.createElementNS('http://www.w3.org/2000/svg', 'feGaussianBlur');
            feGaussianBlur.setAttribute('stdDeviation', '3');
            feGaussianBlur.setAttribute('result', 'blur');
            glow.appendChild(feGaussianBlur);
            
            const feColorMatrix = document.createElementNS('http://www.w3.org/2000/svg', 'feColorMatrix');
            feColorMatrix.setAttribute('type', 'matrix');
            feColorMatrix.setAttribute('values', '1 0 0 0 1  0 1 0 0 0.5  0 0 1 0 0  0 0 0 1 0');
            glow.appendChild(feColorMatrix);
            
            svg.appendChild(glow);
            rect.setAttribute('filter', 'url(#glow)');
        }
        
        nodeGroup.appendChild(rect);
        
        // Create node text
        const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
        text.setAttribute('x', x);
        text.setAttribute('y', y + 5); // Center vertically
        text.setAttribute('text-anchor', 'middle');
        text.setAttribute('fill', 'white');
        text.setAttribute('font-size', '14');
        text.setAttribute('font-weight', highlight ? 'bold' : 'normal');
        
        // Handle multi-line text
        if (name.includes(' ')) {
            const words = name.split(' ');
            const lineHeight = 18;
            const lineCount = words.length;
            const startY = y - ((lineCount - 1) * lineHeight / 2);
            
            words.forEach((word, i) => {
                const tspan = document.createElementNS('http://www.w3.org/2000/svg', 'tspan');
                tspan.setAttribute('x', x);
                tspan.setAttribute('y', startY + (i * lineHeight));
                tspan.textContent = word;
                text.appendChild(tspan);
            });
        } else {
            text.textContent = name;
        }
        
        nodeGroup.appendChild(text);
        
        // Add to SVG
        svg.appendChild(nodeGroup);
    }
    
    /**
     * Create a connecting line between nodes
     */
    function createLine(svg, x1, y1, x2, y2) {
        const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
        line.setAttribute('x1', x1);
        line.setAttribute('y1', y1);
        line.setAttribute('x2', x2);
        line.setAttribute('y2', y2);
        line.setAttribute('stroke', '#aaa');
        line.setAttribute('stroke-width', '2');
        line.setAttribute('stroke-dasharray', '5,5');
        svg.appendChild(line);
    }

    /**
     * Initialize the appeal process timeline navigation
     */
    function initTimeline() {
        if (!timelineNavs.length || !timelineStages.length) return;
        
        // Set up click handlers for timeline navigation
        timelineNavs.forEach(nav => {
            nav.addEventListener('click', function() {
                const stage = parseInt(this.getAttribute('data-stage'));
                if (stage === currentStage) return;
                
                // Update navigation
                timelineNavs.forEach(n => n.classList.remove('active'));
                this.classList.add('active');
                
                // Update stages
                timelineStages.forEach(s => s.classList.remove('active'));
                document.getElementById(`stage-${stage}`).classList.add('active');
                
                // Update current stage
                currentStage = stage;
            });
        });
    }

    /**
     * Initialize FAQ tabs and accordions
     */
    function initFAQs() {
        // FAQ tabs functionality
        if (faqTabs.length && faqContents.length) {
            faqTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Update tab state
                    faqTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update content
                    faqContents.forEach(content => content.classList.remove('active'));
                    document.getElementById(`faq-${tabId}`).classList.add('active');
                });
            });
        }
        
        // FAQ accordion functionality
        if (faqItems.length) {
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', function() {
                    // Toggle active state
                    const isActive = item.classList.contains('active');
                    
                    // Optional: close other items
                    faqItems.forEach(i => i.classList.remove('active'));
                    
                    if (!isActive) {
                        item.classList.add('active');
                    }
                    
                    // Toggle icon
                    const toggleIcon = this.querySelector('.faq-toggle i');
                    faqItems.forEach(i => {
                        const icon = i.querySelector('.faq-toggle i');
                        icon.className = 'fas fa-plus';
                    });
                    
                    if (!isActive) {
                        toggleIcon.className = 'fas fa-minus';
                    }
                });
            });
        }
    }

    /**
     * Initialize biography toggle buttons
     */
    function initBioToggles() {
        if (!bioToggles.length) return;
        
        bioToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const bio = this.previousElementSibling;
                const isExpanded = bio.classList.contains('expanded');
                
                if (isExpanded) {
                    bio.classList.remove('expanded');
                    this.textContent = 'Read More';
                } else {
                    bio.classList.add('expanded');
                    this.textContent = 'Read Less';
                }
            });
        });
    }

    /**
     * Initialize view toggle buttons
     */
    function initViewToggle() {
        // This is handled in the hierarchy chart initialization
    }

    /**
     * Initialize statistics controls
     */
    function initStatsControls() {
        if (!statsToggles.length) return;
        
        // Period toggle (annual/quarterly)
        statsToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const period = this.getAttribute('data-period');
                
                // Don't do anything if the same period is clicked
                if (period === currentPeriod) return;
                
                // Update active state
                statsToggles.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Update current period
                currentPeriod = period;
                
                // Update the statistics values and charts
                updateStatistics(currentYear, currentPeriod);
            });
        });
        
        // Year navigation
        if (yearNavBtns.length && statsYear) {
            const prevYearBtn = yearNavBtns[0];
            const nextYearBtn = yearNavBtns[1];
            
            prevYearBtn.addEventListener('click', function() {
                // Decrement year
                currentYear--;
                statsYear.textContent = currentYear;
                
                // Update the statistics values and charts
                updateStatistics(currentYear, currentPeriod);
            });
            
            nextYearBtn.addEventListener('click', function() {
                // Increment year (but don't go beyond current year)
                const now = new Date();
                const thisYear = now.getFullYear();
                
                if (currentYear < thisYear) {
                    currentYear++;
                    statsYear.textContent = currentYear;
                    
                    // Update the statistics values and charts
                    updateStatistics(currentYear, currentPeriod);
                }
            });
        }
    }
    
    /**
     * Update statistics based on year and period
     */
    function updateStatistics(year, period) {
        // Sample data by year
        const statsData = {
            2023: {
                annual: {
                    casesFiled: 87,
                    casesResolved: 79,
                    averageTime: 5.3,
                    successRate: 42,
                    categories: [
                        {name: 'Unfair Dismissal', value: 45},
                        {name: 'Workplace Discrimination', value: 18},
                        {name: 'Collective Bargaining', value: 15},
                        {name: 'Contract Disputes', value: 12},
                        {name: 'Other', value: 10}
                    ],
                    timeline: [
                        {month: 'Jan', value: 6},
                        {month: 'Feb', value: 7},
                        {month: 'Mar', value: 8},
                        {month: 'Apr', value: 10},
                        {month: 'May', value: 7},
                        {month: 'Jun', value: 8},
                        {month: 'Jul', value: 9},
                        {month: 'Aug', value: 7},
                        {month: 'Sep', value: 8},
                        {month: 'Oct', value: 6},
                        {month: 'Nov', value: 7},
                        {month: 'Dec', value: 6}
                    ]
                },
                quarterly: {
                    casesFiled: 87,
                    casesResolved: 79,
                    averageTime: 5.3,
                    successRate: 42,
                    categories: [
                        {name: 'Unfair Dismissal', value: 45},
                        {name: 'Workplace Discrimination', value: 18},
                        {name: 'Collective Bargaining', value: 15},
                        {name: 'Contract Disputes', value: 12},
                        {name: 'Other', value: 10}
                    ],
                    timeline: [
                        {quarter: 'Q1', value: 21},
                        {quarter: 'Q2', value: 25},
                        {quarter: 'Q3', value: 24},
                        {quarter: 'Q4', value: 19}
                    ]
                }
            },
            2022: {
                annual: {
                    casesFiled: 83,
                    casesResolved: 74,
                    averageTime: 6.1,
                    successRate: 41,
                    categories: [
                        {name: 'Unfair Dismissal', value: 42},
                        {name: 'Workplace Discrimination', value: 15},
                        {name: 'Collective Bargaining', value: 17},
                        {name: 'Contract Disputes', value: 13},
                        {name: 'Other', value: 13}
                    ],
                    timeline: [
                        {month: 'Jan', value: 5},
                        {month: 'Feb', value: 6},
                        {month: 'Mar', value: 7},
                        {month: 'Apr', value: 9},
                        {month: 'May', value: 8},
                        {month: 'Jun', value: 7},
                        {month: 'Jul', value: 8},
                        {month: 'Aug', value: 6},
                        {month: 'Sep', value: 7},
                        {month: 'Oct', value: 5},
                        {month: 'Nov', value: 6},
                        {month: 'Dec', value: 5}
                    ]
                },
                quarterly: {
                    casesFiled: 83,
                    casesResolved: 74,
                    averageTime: 6.1,
                    successRate: 41,
                    categories: [
                        {name: 'Unfair Dismissal', value: 42},
                        {name: 'Workplace Discrimination', value: 15},
                        {name: 'Collective Bargaining', value: 17},
                        {name: 'Contract Disputes', value: 13},
                        {name: 'Other', value: 13}
                    ],
                    timeline: [
                        {quarter: 'Q1', value: 18},
                        {quarter: 'Q2', value: 24},
                        {quarter: 'Q3', value: 21},
                        {quarter: 'Q4', value: 16}
                    ]
                }
            }
        };
        
        // Check if we have data for the selected year
        if (!statsData[year]) return;
        
        // Get data for the selected period
        const data = statsData[year][period];
        
        // Update the statistics values
        document.getElementById('casesFiledValue').textContent = data.casesFiled;
        document.getElementById('casesResolvedValue').textContent = data.casesResolved;
        document.getElementById('averageTimeValue').textContent = data.averageTime;
        document.getElementById('successRateValue').textContent = data.successRate + '%';
        
        // Re-render the charts with the new data
        renderCategoriesChart(data.categories);
        renderTimelineChart(data.timeline, period);
    }
    
    /**
     * Render the categories chart
     */
    function renderCategoriesChart(data) {
        const chartContainer = document.getElementById('categoriesChart');
        if (!chartContainer) return;
        
        // Clear previous content
        chartContainer.innerHTML = '';
        
        // Remove placeholder if present
        const placeholder = chartContainer.querySelector('.chart-placeholder');
        if (placeholder) {
            placeholder.remove();
        }
        
        // Create pie chart using SVG
        const chartSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        chartSvg.setAttribute('width', '100%');
        chartSvg.setAttribute('height', '100%');
        chartSvg.setAttribute('viewBox', '0 0 400 300');
        
        // Calculate total value
        const total = data.reduce((sum, item) => sum + item.value, 0);
        
        // Create pie slices
        let startAngle = 0;
        const radius = 100;
        const centerX = 150;
        const centerY = 150;
        
        // Define colors
        const colors = ['#3f51b5', '#5c6bc0', '#7986cb', '#9fa8da', '#c5cae9'];
        
        // Create a group for the pie chart
        const pieGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        
        // Create legend group
        const legendGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        legendGroup.setAttribute('transform', 'translate(280, 80)');
        
        data.forEach((item, index) => {
            // Calculate angles
            const percentage = item.value / total;
            const endAngle = startAngle + (percentage * 2 * Math.PI);
            
            // Calculate points
            const startX = centerX + radius * Math.cos(startAngle);
            const startY = centerY + radius * Math.sin(startAngle);
            const endX = centerX + radius * Math.cos(endAngle);
            const endY = centerY + radius * Math.sin(endAngle);
            
            // Create path for slice
            const largeArcFlag = percentage > 0.5 ? 1 : 0;
            const pathData = `M ${centerX} ${centerY} L ${startX} ${startY} A ${radius} ${radius} 0 ${largeArcFlag} 1 ${endX} ${endY} Z`;
            
            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttribute('d', pathData);
            path.setAttribute('fill', colors[index % colors.length]);
            path.setAttribute('stroke', '#fff');
            path.setAttribute('stroke-width', '2');
            
            // Add tooltip on hover
            path.setAttribute('data-name', item.name);
            path.setAttribute('data-value', item.value);
            
            // Add event listeners for hover effects
            path.addEventListener('mouseover', function() {
                this.setAttribute('opacity', '0.8');
                this.setAttribute('transform', `translate(${Math.cos((startAngle + endAngle) / 2) * 10} ${Math.sin((startAngle + endAngle) / 2) * 10})`);
                
                // Show tooltip
                const name = this.getAttribute('data-name');
                const value = this.getAttribute('data-value');
                showTooltip(name, value, event);
            });
            
            path.addEventListener('mouseout', function() {
                this.setAttribute('opacity', '1');
                this.setAttribute('transform', 'translate(0 0)');
                
                // Hide tooltip
                hideTooltip();
            });
            
            pieGroup.appendChild(path);
            
            // Add legend item
            const legendItem = document.createElementNS('http://www.w3.org/2000/svg', 'g');
            legendItem.setAttribute('transform', `translate(0, ${index * 25})`);
            
            const legendRect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
            legendRect.setAttribute('width', '15');
            legendRect.setAttribute('height', '15');
            legendRect.setAttribute('fill', colors[index % colors.length]);
            legendItem.appendChild(legendRect);
            
            const legendText = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            legendText.setAttribute('x', '25');
            legendText.setAttribute('y', '12');
            legendText.setAttribute('font-size', '12');
            legendText.textContent = `${item.name} (${item.value}%)`;
            legendItem.appendChild(legendText);
            
            legendGroup.appendChild(legendItem);
            
            // Update start angle for next slice
            startAngle = endAngle;
        });
        
        chartSvg.appendChild(pieGroup);
        chartSvg.appendChild(legendGroup);
        chartContainer.appendChild(chartSvg);
    }
    
    /**
     * Render the timeline chart
     */
    function renderTimelineChart(data, period) {
        const chartContainer = document.getElementById('timelineChart');
        if (!chartContainer) return;
        
        // Clear previous content
        chartContainer.innerHTML = '';
        
        // Remove placeholder if present
        const placeholder = chartContainer.querySelector('.chart-placeholder');
        if (placeholder) {
            placeholder.remove();
        }
        
        // Create line chart using SVG
        const chartSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        chartSvg.setAttribute('width', '100%');
        chartSvg.setAttribute('height', '100%');
        chartSvg.setAttribute('viewBox', '0 0 400 300');
        
        // Define chart dimensions
        const margin = { top: 30, right: 30, bottom: 50, left: 50 };
        const width = 400 - margin.left - margin.right;
        const height = 300 - margin.top - margin.bottom;
        
        // Create chart group
        const chartGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        chartGroup.setAttribute('transform', `translate(${margin.left}, ${margin.top})`);
        
        // Find max value for scaling
        const maxValue = Math.max(...data.map(d => d.value));
        
        // Create scales
        const xScale = width / (data.length - 1);
        const yScale = height / maxValue;
        
        // Create X axis
        const xAxisGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        xAxisGroup.setAttribute('transform', `translate(0, ${height})`);
        
        data.forEach((d, i) => {
            const x = i * xScale;
            
            // Tick line
            const tickLine = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            tickLine.setAttribute('x1', x);
            tickLine.setAttribute('y1', 0);
            tickLine.setAttribute('x2', x);
            tickLine.setAttribute('y2', 6);
            tickLine.setAttribute('stroke', '#aaa');
            xAxisGroup.appendChild(tickLine);
            
            // Tick label
            const label = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            label.setAttribute('x', x);
            label.setAttribute('y', 20);
            label.setAttribute('text-anchor', 'middle');
            label.setAttribute('font-size', '12');
            label.textContent = period === 'annual' ? d.month : d.quarter;
            xAxisGroup.appendChild(label);
        });
        
        // X axis line
        const xAxisLine = document.createElementNS('http://www.w3.org/2000/svg', 'line');
        xAxisLine.setAttribute('x1', 0);
        xAxisLine.setAttribute('y1', height);
        xAxisLine.setAttribute('x2', width);
        xAxisLine.setAttribute('y2', height);
        xAxisLine.setAttribute('stroke', '#aaa');
        chartGroup.appendChild(xAxisLine);
        
        // Create Y axis
        const yAxisGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        
        // Create ticks at 0, 25%, 50%, 75%, and 100% of max
        for (let i = 0; i <= 4; i++) {
            const y = height - (i * height / 4);
            const value = Math.round(i * maxValue / 4);
            
            // Tick line
            const tickLine = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            tickLine.setAttribute('x1', -6);
            tickLine.setAttribute('y1', y);
            tickLine.setAttribute('x2', 0);
            tickLine.setAttribute('y2', y);
            tickLine.setAttribute('stroke', '#aaa');
            yAxisGroup.appendChild(tickLine);
            
            // Grid line
            const gridLine = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            gridLine.setAttribute('x1', 0);
            gridLine.setAttribute('y1', y);
            gridLine.setAttribute('x2', width);
            gridLine.setAttribute('y2', y);
            gridLine.setAttribute('stroke', '#eee');
            gridLine.setAttribute('stroke-dasharray', '3,3');
            chartGroup.appendChild(gridLine);
            
            // Tick label
            const label = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            label.setAttribute('x', -10);
            label.setAttribute('y', y + 4);
            label.setAttribute('text-anchor', 'end');
            label.setAttribute('font-size', '12');
            label.textContent = value;
            yAxisGroup.appendChild(label);
        }
        
        // Y axis line
        const yAxisLine = document.createElementNS('http://www.w3.org/2000/svg', 'line');
        yAxisLine.setAttribute('x1', 0);
        yAxisLine.setAttribute('y1', 0);
        yAxisLine.setAttribute('x2', 0);
        yAxisLine.setAttribute('y2', height);
        yAxisLine.setAttribute('stroke', '#aaa');
        chartGroup.appendChild(yAxisLine);
        
        // Create line path
        let linePath = `M ${0} ${height - data[0].value * yScale}`;
        
        data.forEach((d, i) => {
            if (i > 0) {
                const x = i * xScale;
                const y = height - d.value * yScale;
                linePath += ` L ${x} ${y}`;
            }
        });
        
        const line = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        line.setAttribute('d', linePath);
        line.setAttribute('fill', 'none');
        line.setAttribute('stroke', '#3f51b5');
        line.setAttribute('stroke-width', '3');
        chartGroup.appendChild(line);
        
        // Create area path
        let areaPath = linePath;
        areaPath += ` L ${(data.length - 1) * xScale} ${height} L 0 ${height} Z`;
        
        const area = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        area.setAttribute('d', areaPath);
        area.setAttribute('fill', 'url(#gradient)');
        area.setAttribute('opacity', '0.3');
        
        // Create gradient
        const gradient = document.createElementNS('http://www.w3.org/2000/svg', 'linearGradient');
        gradient.setAttribute('id', 'gradient');
        gradient.setAttribute('x1', '0%');
        gradient.setAttribute('y1', '0%');
        gradient.setAttribute('x2', '0%');
        gradient.setAttribute('y2', '100%');
        
        const stop1 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
        stop1.setAttribute('offset', '0%');
        stop1.setAttribute('stop-color', '#3f51b5');
        
        const stop2 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
        stop2.setAttribute('offset', '100%');
        stop2.setAttribute('stop-color', '#3f51b5');
        stop2.setAttribute('stop-opacity', '0');
        
        gradient.appendChild(stop1);
        gradient.appendChild(stop2);
        
        const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
        defs.appendChild(gradient);
        
        chartSvg.appendChild(defs);
        chartGroup.appendChild(area);
        
        // Add data points
        data.forEach((d, i) => {
            const x = i * xScale;
            const y = height - d.value * yScale;
            
            const point = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            point.setAttribute('cx', x);
            point.setAttribute('cy', y);
            point.setAttribute('r', '5');
            point.setAttribute('fill', '#fff');
            point.setAttribute('stroke', '#3f51b5');
            point.setAttribute('stroke-width', '2');
            point.setAttribute('data-value', d.value);
            point.setAttribute('data-label', period === 'annual' ? d.month : d.quarter);
            
            // Add event listeners for hover effects
            point.addEventListener('mouseover', function() {
                this.setAttribute('r', '7');
                
                // Show tooltip
                const label = this.getAttribute('data-label');
                const value = this.getAttribute('data-value');
                showTooltip(`${label}: ${value} cases`, '', event);
            });
            
            point.addEventListener('mouseout', function() {
                this.setAttribute('r', '5');
                
                // Hide tooltip
                hideTooltip();
            });
            
            chartGroup.appendChild(point);
        });
        
        // Axis labels
        const xLabel = document.createElementNS('http://www.w3.org/2000/svg', 'text');
        xLabel.setAttribute('x', width / 2);
        xLabel.setAttribute('y', height + 40);
        xLabel.setAttribute('text-anchor', 'middle');
        xLabel.setAttribute('font-size', '14');
        xLabel.textContent = period === 'annual' ? 'Month' : 'Quarter';
        
        const yLabel = document.createElementNS('http://www.w3.org/2000/svg', 'text');
        yLabel.setAttribute('transform', `translate(-40, ${height / 2}) rotate(-90)`);
        yLabel.setAttribute('text-anchor', 'middle');
        yLabel.setAttribute('font-size', '14');
        yLabel.textContent = 'Cases Resolved';
        
        chartGroup.appendChild(xAxisGroup);
        chartGroup.appendChild(yAxisGroup);
        chartGroup.appendChild(xLabel);
        chartGroup.appendChild(yLabel);
        
        chartSvg.appendChild(chartGroup);
        chartContainer.appendChild(chartSvg);
    }
    
    /**
     * Show tooltip at the specified position
     */
    function showTooltip(title, subtitle, event) {
        // Check if tooltip exists, create if not
        let tooltip = document.getElementById('chart-tooltip');
        
        if (!tooltip) {
            tooltip = document.createElement('div');
            tooltip.id = 'chart-tooltip';
            tooltip.style.position = 'absolute';
            tooltip.style.padding = '10px';
            tooltip.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
            tooltip.style.color = '#fff';
            tooltip.style.borderRadius = '4px';
            tooltip.style.fontSize = '12px';
            tooltip.style.pointerEvents = 'none';
            tooltip.style.zIndex = '1000';
            tooltip.style.transition = 'opacity 0.2s ease-in-out';
            document.body.appendChild(tooltip);
        }
        
        // Set tooltip content
        tooltip.innerHTML = subtitle ? 
            `<div><strong>${title}</strong></div><div>${subtitle}</div>` : 
            `<div>${title}</div>`;
        
        // Position tooltip near the mouse
        const x = event.pageX + 10;
        const y = event.pageY - 40;
        
        tooltip.style.left = `${x}px`;
        tooltip.style.top = `${y}px`;
        tooltip.style.opacity = '1';
    }
    
    /**
     * Hide the tooltip
     */
    function hideTooltip() {
        const tooltip = document.getElementById('chart-tooltip');
        if (tooltip) {
            tooltip.style.opacity = '0';
        }
    }

    /**
     * Initialize case search and filtering
     */
    function initCaseSearch() {
        if (!caseSearchInput || !caseYearFilter || !casesGrid) return;
        
        // Sample case data
        const casesData = [
            {
                id: 'ICA/15/2024',
                date: 'May 12, 2024',
                title: 'Employee Association of Eswatini v. National Industries Ltd',
                summary: 'Appeal against dismissal of collective bargaining application. Court found procedural irregularities in Industrial Court\'s handling of evidence.',
                category: 'Collective Bargaining',
                year: '2024'
            },
            {
                id: 'ICA/09/2024',
                date: 'March 25, 2024',
                title: 'Dlamini v. Regional Manufacturing Company',
                summary: 'Unfair dismissal appeal. Court upheld Industrial Court\'s finding of substantive fairness but modified remedies awarded.',
                category: 'Unfair Dismissal',
                year: '2024'
            },
            {
                id: 'ICA/05/2024',
                date: 'February 10, 2024',
                title: 'Textile Workers Union v. Apparel Industries',
                summary: 'Appeal regarding interpretation of collective agreement provisions on overtime compensation. Court reversed lower court ruling.',
                category: 'Collective Agreement',
                year: '2024'
            },
            {
                id: 'ICA/28/2023',
                date: 'December 8, 2023',
                title: 'Nkambule v. National Telecommunications',
                summary: 'Discrimination appeal based on gender. Court affirmed Industrial Court\'s finding of discrimination but increased compensation.',
                category: 'Discrimination',
                year: '2023'
            },
            {
                id: 'ICA/22/2023',
                date: 'October 15, 2023',
                title: 'Financial Services Union v. First Bank of Eswatini',
                summary: 'Appeal related to retrenchment procedures. Court found that proper consultation did not occur and ordered reinstatement.',
                category: 'Retrenchment',
                year: '2023'
            },
            {
                id: 'ICA/14/2023',
                date: 'July 22, 2023',
                title: 'Maziya v. Government Services Department',
                summary: 'Appeal against dismissal for misconduct. Court overturned Industrial Court decision, finding procedural unfairness in disciplinary hearing.',
                category: 'Unfair Dismissal',
                year: '2023'
            }
        ];
        
        // Handle search input
        caseSearchInput.addEventListener('input', function() {
            filterCases();
        });
        
        // Handle year filter
        caseYearFilter.addEventListener('change', function() {
            filterCases();
        });
        
        // Initial render of cases
        renderCases(casesData);
        
        /**
         * Filter cases based on search input and year filter
         */
        function filterCases() {
            const searchTerm = caseSearchInput.value.toLowerCase();
            const yearFilter = caseYearFilter.value;
            
            let filteredCases = casesData;
            
            // Apply year filter
            if (yearFilter !== 'all') {
                filteredCases = filteredCases.filter(c => c.year === yearFilter);
            }
            
            // Apply search filter
            if (searchTerm) {
                filteredCases = filteredCases.filter(c => 
                    c.id.toLowerCase().includes(searchTerm) ||
                    c.title.toLowerCase().includes(searchTerm) ||
                    c.summary.toLowerCase().includes(searchTerm) ||
                    c.category.toLowerCase().includes(searchTerm)
                );
            }
            
            // Render filtered cases
            renderCases(filteredCases);
        }
        
        /**
         * Render cases to the grid
         */
        function renderCases(cases) {
            // Clear existing cases
            casesGrid.innerHTML = '';
            
            if (cases.length === 0) {
                // Show no results message
                casesGrid.innerHTML = '<div class="no-results">No cases found matching your criteria. Please try a different search.</div>';
                return;
            }
            
            // Render each case
            cases.forEach(caseItem => {
                const caseCard = document.createElement('div');
                caseCard.className = 'case-card';
                
                caseCard.innerHTML = `
                    <div class="case-header">
                        <span class="case-number">${caseItem.id}</span>
                        <span class="case-date">${caseItem.date}</span>
                    </div>
                    <h3 class="case-title">${caseItem.title}</h3>
                    <p class="case-summary">${caseItem.summary}</p>
                    <div class="case-footer">
                        <span class="case-category">${caseItem.category}</span>
                        <a href="judgment.php?id=${caseItem.id.toLowerCase()}" class="case-link">View Full Judgment <i class="fas fa-external-link-alt"></i></a>
                    </div>
                `;
                
                casesGrid.appendChild(caseCard);
            });
        }
    }

    /**
     * Initialize the leadership carousel
     */
    function initCarousel() {
        if (!leadershipCarousel || !navPrev || !navNext || !navDots.length) return;
        
        // Set up click handlers for navigation
        navPrev.addEventListener('click', function() {
            navigateCarousel('prev');
        });
        
        navNext.addEventListener('click', function() {
            navigateCarousel('next');
        });
        
        // Set up dots navigation
        navDots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                navigateToSlide(index);
            });
        });
        
        /**
         * Navigate the carousel in the specified direction
         */
        function navigateCarousel(direction) {
            const totalSlides = navDots.length;
            
            if (direction === 'prev') {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            } else {
                currentSlide = (currentSlide + 1) % totalSlides;
            }
            
            navigateToSlide(currentSlide);
        }
        
        /**
         * Navigate to the specified slide index
         */
        function navigateToSlide(index) {
            // Update current slide
            currentSlide = index;
            
            // Update active dot
            navDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            // Scroll carousel to the appropriate position
            const slideWidth = leadershipCarousel.querySelector('.leadership-card').offsetWidth + 30; // card width + gap
            leadershipCarousel.scrollTo({
                left: index * slideWidth,
                behavior: 'smooth'
            });
        }
        
        // Set up auto-scrolling (optional)
        let autoScrollInterval;
        
        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                navigateCarousel('next');
            }, 5000); // scroll every 5 seconds
        }
        
        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }
        
        // Start auto-scrolling
        startAutoScroll();
        
        // Stop auto-scrolling when user interacts with carousel
        leadershipCarousel.addEventListener('mouseenter', stopAutoScroll);
        navPrev.addEventListener('mouseenter', stopAutoScroll);
        navNext.addEventListener('mouseenter', stopAutoScroll);
        navDots.forEach(dot => dot.addEventListener('mouseenter', stopAutoScroll));
        
        // Resume auto-scrolling when user stops interacting
        leadershipCarousel.addEventListener('mouseleave', startAutoScroll);
        navPrev.addEventListener('mouseleave', startAutoScroll);
        navNext.addEventListener('mouseleave', startAutoScroll);
        navDots.forEach(dot => dot.addEventListener('mouseleave', startAutoScroll));
    }

    /**
     * Initialize the CAPTCHA
     */
    function initCaptcha() {
        const captchaContainer = document.getElementById('captchaContainer');
        if (!captchaContainer) return;
        
        // Generate a simple CAPTCHA
        function generateCaptcha() {
            const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            let captchaText = '';
            
            for (let i = 0; i < 6; i++) {
                const randomIndex = Math.floor(Math.random() * chars.length);
                captchaText += chars[randomIndex];
            }
            
            return captchaText;
        }
        
        // Render the CAPTCHA
        function renderCaptcha() {
            const captchaText = generateCaptcha();
            
            // Create SVG for the CAPTCHA
            const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            svg.setAttribute('width', '100%');
            svg.setAttribute('height', '100%');
            svg.setAttribute('viewBox', '0 0 200 60');
            
            // Background
            const bg = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
            bg.setAttribute('width', '200');
            bg.setAttribute('height', '60');
            bg.setAttribute('fill', '#f5f7fa');
            svg.appendChild(bg);
            
            // Add noise (dots)
            for (let i = 0; i < 100; i++) {
                const x = Math.random() * 200;
                const y = Math.random() * 60;
                const r = Math.random() * 2 + 1;
                
                const dot = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                dot.setAttribute('cx', x);
                dot.setAttribute('cy', y);
                dot.setAttribute('r', r);
                dot.setAttribute('fill', '#ddd');
                svg.appendChild(dot);
            }
            
            // Add lines for noise
            for (let i = 0; i < 5; i++) {
                const x1 = Math.random() * 200;
                const y1 = Math.random() * 60;
                const x2 = Math.random() * 200;
                const y2 = Math.random() * 60;
                
                const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
                line.setAttribute('x1', x1);
                line.setAttribute('y1', y1);
                line.setAttribute('x2', x2);
                line.setAttribute('y2', y2);
                line.setAttribute('stroke', '#bbb');
                line.setAttribute('stroke-width', '1');
                svg.appendChild(line);
            }
            
            // Add the text
            for (let i = 0; i < captchaText.length; i++) {
                const charX = 30 + i * 25;
                const charY = 30 + Math.random() * 10 - 5;
                const rotation = Math.random() * 30 - 15;
                
                const charText = document.createElementNS('http://www.w3.org/2000/svg', 'text');
                charText.setAttribute('x', charX);
                charText.setAttribute('y', charY);
                charText.setAttribute('font-family', 'monospace');
                charText.setAttribute('font-size', '24');
                charText.setAttribute('fill', '#3f51b5');
                charText.setAttribute('transform', `rotate(${rotation} ${charX} ${charY})`);
                charText.textContent = captchaText[i];
                svg.appendChild(charText);
            }
            
            // Store the CAPTCHA text for validation
            captchaContainer.dataset.captcha = captchaText;
            
            // Clear and append the SVG
            captchaContainer.innerHTML = '';
            captchaContainer.appendChild(svg);
            
            // Add refresh button
            const refreshBtn = document.createElement('button');
            refreshBtn.type = 'button';
            refreshBtn.className = 'captcha-refresh';
            refreshBtn.innerHTML = '<i class="fas fa-redo-alt"></i>';
            refreshBtn.addEventListener('click', renderCaptcha);
            captchaContainer.appendChild(refreshBtn);
        }
        
        // Validate the CAPTCHA on form submission
        const inquiryForm = document.getElementById('inquiryForm');
        if (inquiryForm) {
            inquiryForm.addEventListener('submit', function(event) {
                const captchaInput = document.getElementById('captcha');
                const captchaValue = captchaContainer.dataset.captcha;
                
                if (captchaInput.value !== captchaValue) {
                    event.preventDefault();
                    alert('CAPTCHA verification failed. Please try again.');
                    renderCaptcha();
                    captchaInput.value = '';
                    captchaInput.focus();
                }
            });
        }
        
        // Initial render
        renderCaptcha();
    }

    /**
     * Initialize the map
     */
    function initMap() {
        const courtMap = document.getElementById('courtMap');
        if (!courtMap) return;
        
        // The map would typically be initialized with a mapping library like Leaflet or Google Maps
        // For this example, we'll simulate it with a placeholder
        
        // Create a map placeholder with an image
        const mapPlaceholder = document.createElement('div');
        mapPlaceholder.className = 'map-image';
        mapPlaceholder.style.backgroundImage = 'url("assets/images/courts/court-map-placeholder.jpg")';
        mapPlaceholder.style.width = '100%';
        mapPlaceholder.style.height = '100%';
        mapPlaceholder.style.backgroundSize = 'cover';
        mapPlaceholder.style.backgroundPosition = 'center';
        mapPlaceholder.style.borderRadius = '10px';
        
        // Replace the placeholder with the map image
        courtMap.innerHTML = '';
        courtMap.appendChild(mapPlaceholder);
        
        // Add map marker for the court location
        const marker = document.createElement('div');
        marker.className = 'map-marker';
        marker.innerHTML = '<i class="fas fa-map-marker-alt"></i>';
        marker.style.position = 'absolute';
        marker.style.top = '50%';
        marker.style.left = '50%';
        marker.style.transform = 'translate(-50%, -100%)';
        marker.style.color = '#ff5722';
        marker.style.fontSize = '2rem';
        marker.style.filter = 'drop-shadow(0 2px 4px rgba(0,0,0,0.3))';
        
        courtMap.appendChild(marker);
        
        // Initialize share location button
        const shareBtn = document.getElementById('shareBtnLocation');
        if (shareBtn) {
            shareBtn.addEventListener('click', function() {
                // Check if the Web Share API is available
                if (navigator.share) {
                    navigator.share({
                        title: 'Industrial Court of Appeal Location',
                        text: 'Here is the location of the Industrial Court of Appeal in Eswatini',
                        url: 'https://maps.google.com/?q=Industrial+Court+of+Appeal+Eswatini'
                    })
                    .catch(error => console.log('Error sharing:', error));
                } else {
                    // Fallback for browsers that don't support Web Share API
                    alert('Share this location: Industrial Court of Appeal, Hospital Hill, Mbabane, Eswatini');
                }
            });
        }
    }

    /**
     * Initialize charts
     */
    function initCharts() {
        // Initial render of charts
        updateStatistics(currentYear, currentPeriod);
    }

    /**
     * Initialize scroll effects
     */
    function initScrollEffects() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (!targetElement) return;
                
                window.scrollTo({
                    top: targetElement.offsetTop - 100, // Offset for header
                    behavior: 'smooth'
                });
            });
        });
        
        // Reveal elements on scroll
        const revealElements = document.querySelectorAll('.court-info-card, .chart-container, .stat-card');
        
        if (revealElements.length) {
            // Set initial state
            revealElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.6s ease';
            });
            
            // Check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
                    rect.bottom >= 0
                );
            }
            
            // Reveal elements that are in viewport
            function revealOnScroll() {
                revealElements.forEach(el => {
                    if (isInViewport(el)) {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }
                });
            }
            
            // Initial check
            revealOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', revealOnScroll);
        }
    }
})();