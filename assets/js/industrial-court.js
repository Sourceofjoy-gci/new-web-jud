/**
 * Industrial Court Page Scripts
 * Interactive features and animations for the Industrial Court page
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initJurisdictionTabs();
    initPrecedentsSlider();
    initTimelineSteps();
    initOfficialsSlider();
    initFaqAccordion();
    initCaseTracker();
    initAnimations();
});

/**
 * Jurisdiction Tabs Functionality
 */
function initJurisdictionTabs() {
    const tabsContainer = document.getElementById('jurisdictionTabs');
    if (!tabsContainer) return;

    const tabs = tabsContainer.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Show the corresponding content
            const targetId = this.getAttribute('data-tab');
            document.getElementById(targetId).classList.add('active');
        });
    });
}

/**
 * Precedents Slider Functionality
 */
function initPrecedentsSlider() {
    const slider = document.getElementById('precedentsSlider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.precedent-slide');
    const dotsContainer = document.getElementById('precedentDots');
    const prevBtn = document.getElementById('precedentPrevBtn');
    const nextBtn = document.getElementById('precedentNextBtn');
    
    let currentSlide = 0;
    let slidesToShow = getSlidesToShow();
    let totalSlides = slides.length;
    
    // Create dots
    for (let i = 0; i < Math.ceil(totalSlides / slidesToShow); i++) {
        const dot = document.createElement('div');
        dot.classList.add('precedent-dot');
        if (i === 0) dot.classList.add('active');
        
        dot.addEventListener('click', () => {
            goToSlide(i * slidesToShow);
        });
        
        dotsContainer.appendChild(dot);
    }
    
    // Previous button click
    prevBtn.addEventListener('click', () => {
        goToSlide(Math.max(0, currentSlide - slidesToShow));
    });
    
    // Next button click
    nextBtn.addEventListener('click', () => {
        goToSlide(Math.min(totalSlides - slidesToShow, currentSlide + slidesToShow));
    });
    
    // Set initial state
    updateSliderState();
    
    // Update slider on window resize
    window.addEventListener('resize', () => {
        slidesToShow = getSlidesToShow();
        updateSliderState();
    });
    
    function getSlidesToShow() {
        if (window.innerWidth < 768) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }
    
    function goToSlide(index) {
        currentSlide = index;
        updateSliderState();
    }
    
    function updateSliderState() {
        // Update slide positions
        slides.forEach((slide, index) => {
            const position = (index - currentSlide) * (100 / slidesToShow);
            slide.style.transform = `translateX(${position}%)`;
            slide.style.width = `${100 / slidesToShow}%`;
            
            // Set visibility
            if (index >= currentSlide && index < currentSlide + slidesToShow) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });
        
        // Update dots
        const dots = dotsContainer.querySelectorAll('.precedent-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === Math.floor(currentSlide / slidesToShow));
        });
        
        // Update buttons
        prevBtn.disabled = currentSlide === 0;
        nextBtn.disabled = currentSlide >= totalSlides - slidesToShow;
    }
}

/**
 * Timeline Steps Functionality
 */
function initTimelineSteps() {
    const timeline = document.querySelector('.process-timeline');
    if (!timeline) return;
    
    const steps = timeline.querySelectorAll('.timeline-step');
    const prevBtn = document.getElementById('prevStepBtn');
    const nextBtn = document.getElementById('nextStepBtn');
    const progressBar = document.getElementById('timelineProgress');
    
    let currentStep = 0;
    const totalSteps = steps.length;
    
    // Initialize
    updateTimelineState();
    
    // Previous button click
    prevBtn.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            updateTimelineState();
        }
    });
    
    // Next button click
    nextBtn.addEventListener('click', () => {
        if (currentStep < totalSteps - 1) {
            currentStep++;
            updateTimelineState();
        }
    });
    
    // Step marker click
    steps.forEach((step, index) => {
        const marker = step.querySelector('.step-marker');
        marker.addEventListener('click', () => {
            currentStep = index;
            updateTimelineState();
        });
    });
    
    function updateTimelineState() {
        // Update progress bar
        const progressPercentage = ((currentStep + 1) / totalSteps) * 100;
        progressBar.style.width = `${progressPercentage}%`;
        
        // Update steps
        steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
        
        // Update buttons
        prevBtn.disabled = currentStep === 0;
        nextBtn.disabled = currentStep === totalSteps - 1;
        
        // Smooth scroll to current step
        if (window.innerWidth < 768) {
            steps[currentStep].scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
}

/**
 * Officials Slider Functionality
 */
function initOfficialsSlider() {
    const slider = document.getElementById('officialsSlider');
    if (!slider) return;
    
    const track = document.getElementById('officialsTrack');
    const cards = track.querySelectorAll('.official-card');
    const dotsContainer = document.getElementById('officialsDots');
    const prevBtn = document.getElementById('officialPrevBtn');
    const nextBtn = document.getElementById('officialNextBtn');
    
    let currentPosition = 0;
    let cardsToShow = getCardsToShow();
    let totalCards = cards.length;
    let cardWidth = 100 / cardsToShow;
    
    // Create dots
    for (let i = 0; i < Math.ceil(totalCards / cardsToShow); i++) {
        const dot = document.createElement('div');
        dot.classList.add('official-dot');
        if (i === 0) dot.classList.add('active');
        
        dot.addEventListener('click', () => {
            goToPosition(i * cardsToShow);
        });
        
        dotsContainer.appendChild(dot);
    }
    
    // Set initial layout
    track.style.width = `${(totalCards / cardsToShow) * 100}%`;
    cards.forEach(card => {
        card.style.flex = `0 0 ${cardWidth}%`;
    });
    
    // Previous button click
    prevBtn.addEventListener('click', () => {
        goToPosition(Math.max(0, currentPosition - cardsToShow));
    });
    
    // Next button click
    nextBtn.addEventListener('click', () => {
        goToPosition(Math.min(totalCards - cardsToShow, currentPosition + cardsToShow));
    });
    
    // Update slider on window resize
    window.addEventListener('resize', () => {
        cardsToShow = getCardsToShow();
        cardWidth = 100 / cardsToShow;
        
        // Update track width
        track.style.width = `${(totalCards / cardsToShow) * 100}%`;
        
        // Update card widths
        cards.forEach(card => {
            card.style.flex = `0 0 ${cardWidth}%`;
        });
        
        // Ensure current position is valid
        currentPosition = Math.min(currentPosition, totalCards - cardsToShow);
        updateSliderState();
    });
    
    function getCardsToShow() {
        if (window.innerWidth < 768) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }
    
    function goToPosition(position) {
        currentPosition = position;
        updateSliderState();
    }
    
    function updateSliderState() {
        // Update track position
        const translateValue = (currentPosition / totalCards) * 100;
        track.style.transform = `translateX(-${translateValue}%)`;
        
        // Update dots
        const dots = dotsContainer.querySelectorAll('.official-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === Math.floor(currentPosition / cardsToShow));
        });
        
        // Update buttons
        prevBtn.disabled = currentPosition === 0;
        nextBtn.disabled = currentPosition >= totalCards - cardsToShow;
    }
    
    // Set initial state
    updateSliderState();
}

/**
 * FAQ Accordion Functionality
 */
function initFaqAccordion() {
    const accordion = document.getElementById('faqAccordion');
    if (!accordion) return;
    
    const faqItems = accordion.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        // Set initial state - all closed
        answer.style.height = '0px';
        
        question.addEventListener('click', () => {
            // Toggle active class
            const isActive = item.classList.contains('active');
            
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.height = '0px';
                    otherItem.querySelector('.question-icon i').className = 'fas fa-plus';
                }
            });
            
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
                answer.style.height = '0px';
                item.querySelector('.question-icon i').className = 'fas fa-plus';
            } else {
                item.classList.add('active');
                answer.style.height = answer.scrollHeight + 'px';
                item.querySelector('.question-icon i').className = 'fas fa-minus';
            }
        });
    });
}

/**
 * Case Tracker Functionality (Mock)
 */
function initCaseTracker() {
    const trackButton = document.getElementById('trackCaseBtn');
    if (!trackButton) return;
    
    const resultsContainer = document.getElementById('trackerResults');
    
    trackButton.addEventListener('click', () => {
        const caseNumber = document.getElementById('caseNumber').value;
        const idNumber = document.getElementById('idNumber').value;
        
        if (!caseNumber || !idNumber) {
            showError('Please enter both case number and ID number.');
            return;
        }
        
        // Simulate loading
        showLoading();
        
        // Mock API call with timeout
        setTimeout(() => {
            // Check if it's a valid format
            if (isValidCaseNumber(caseNumber)) {
                showResults(caseNumber);
            } else {
                showError('Case not found. Please check your information and try again.');
            }
        }, 1500);
    });
    
    function isValidCaseNumber(caseNumber) {
        // Simple validation - checks if in format IC/YYYY/XXXX
        return /^IC\/20\d{2}\/\d{4}$/.test(caseNumber);
    }
    
    function showLoading() {
        resultsContainer.innerHTML = `
            <div class="loading-spinner">
                <div class="spinner"></div>
                <p>Searching for case information...</p>
            </div>
        `;
    }
    
    function showError(message) {
        resultsContainer.innerHTML = `
            <div class="error-message">
                <div class="error-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <p>${message}</p>
            </div>
        `;
    }
    
    function showResults(caseNumber) {
        // Generate mock data based on case number
        const year = caseNumber.substring(3, 7);
        const number = caseNumber.substring(8);
        const isRecent = parseInt(year) >= 2022;
        const randomStage = getRandomStage(isRecent);
        
        resultsContainer.innerHTML = `
            <div class="case-details">
                <div class="case-header">
                    <h3>Case Details: ${caseNumber}</h3>
                    <span class="case-status ${randomStage.statusClass}">${randomStage.status}</span>
                </div>
                
                <div class="details-grid">
                    <div class="detail-item">
                        <span class="detail-label">Filed On</span>
                        <span class="detail-value">${getRandomDate(year)}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Case Type</span>
                        <span class="detail-value">${getRandomCaseType()}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Presiding Judge</span>
                        <span class="detail-value">${getRandomJudge()}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Current Stage</span>
                        <span class="detail-value">${randomStage.stage}</span>
                    </div>
                </div>
                
                <div class="case-timeline">
                    <h4>Case Timeline</h4>
                    ${generateTimeline(randomStage.stageIndex, year)}
                </div>
                
                <div class="next-steps">
                    <h4>Next Steps</h4>
                    <p>${randomStage.nextSteps}</p>
                </div>
            </div>
        `;
        
        // Add some interactive styles
        const caseDetails = resultsContainer.querySelector('.case-details');
        setTimeout(() => {
            caseDetails.classList.add('show');
        }, 100);
    }
    
    function getRandomStage(isRecent) {
        const stages = [
            {
                stageIndex: 0,
                stage: "Case Filing",
                status: "Pending",
                statusClass: "pending",
                nextSteps: "Your case has been filed. The court registry is reviewing your documents. You will be notified once your case is accepted and scheduled for a pre-hearing conference."
            },
            {
                stageIndex: 1,
                stage: "Pre-Hearing Conference",
                status: "In Progress",
                statusClass: "in-progress",
                nextSteps: "Attend the pre-hearing conference as scheduled. Bring all relevant documents. The court will establish a timeline for the case and address any preliminary matters."
            },
            {
                stageIndex: 2,
                stage: "Evidence Exchange",
                status: "In Progress",
                statusClass: "in-progress",
                nextSteps: "Submit all required evidence by the specified deadline. Ensure all documents are properly labeled and organized. Failure to submit evidence may affect your case."
            },
            {
                stageIndex: 3,
                stage: "Hearing",
                status: "Scheduled",
                statusClass: "scheduled",
                nextSteps: "Your hearing is scheduled as indicated in the timeline. Arrive at least 30 minutes early. Bring all original documents and any witnesses who will be testifying."
            },
            {
                stageIndex: 4,
                stage: "Judgment Deliberation",
                status: "In Progress",
                statusClass: "in-progress",
                nextSteps: "The court is deliberating on your case. No action is required from you at this time. You will be notified when the judgment is ready."
            },
            {
                stageIndex: 5,
                stage: "Judgment Delivered",
                status: "Completed",
                statusClass: "completed",
                nextSteps: "The judgment has been delivered. You may collect a copy from the court registry. If you wish to appeal, you must file a notice of appeal within 30 days of the judgment date."
            }
        ];
        
        // For recent cases, limit to earlier stages
        if (isRecent) {
            return stages[Math.floor(Math.random() * 4)];
        }
        
        return stages[Math.floor(Math.random() * stages.length)];
    }
    
    function getRandomDate(year) {
        const month = Math.floor(Math.random() * 12) + 1;
        const day = Math.floor(Math.random() * 28) + 1;
        return `${day < 10 ? '0' + day : day}/${month < 10 ? '0' + month : month}/${year}`;
    }
    
    function getRandomCaseType() {
        const types = ["Unfair Dismissal", "Contract Dispute", "Wage Claim", "Discrimination", "Wrongful Termination"];
        return types[Math.floor(Math.random() * types.length)];
    }
    
    function getRandomJudge() {
        const judges = ["Hon. Sibusiso Nkambule", "Hon. Nomcebo Dlamini", "Hon. Thulani Maseko"];
        return judges[Math.floor(Math.random() * judges.length)];
    }
    
    function generateTimeline(currentStageIndex, year) {
        const stages = [
            { name: "Case Filing", icon: "file-alt" },
            { name: "Pre-Hearing Conference", icon: "gavel" },
            { name: "Evidence Exchange", icon: "exchange-alt" },
            { name: "Hearing", icon: "balance-scale" },
            { name: "Judgment Deliberation", icon: "user-tie" },
            { name: "Judgment Delivered", icon: "check-circle" }
        ];
        
        let timeline = '<div class="timeline-events">';
        
        stages.forEach((stage, index) => {
            const isCompleted = index < currentStageIndex;
            const isCurrent = index === currentStageIndex;
            const isPending = index > currentStageIndex;
            let statusClass = '';
            
            if (isCompleted) statusClass = 'completed';
            if (isCurrent) statusClass = 'current';
            if (isPending) statusClass = 'pending';
            
            // Generate random date for each stage
            const stageDate = isCompleted || isCurrent ? getRandomDate(year) : '—';
            
            timeline += `
                <div class="timeline-event ${statusClass}">
                    <div class="event-marker">
                        <div class="event-icon">
                            <i class="fas fa-${stage.icon}"></i>
                        </div>
                    </div>
                    <div class="event-content">
                        <h5>${stage.name}</h5>
                        <span class="event-date">${stageDate}</span>
                    </div>
                </div>
            `;
        });
        
        timeline += '</div>';
        return timeline;
    }
    
    // Add CSS for the tracker results
    const style = document.createElement('style');
    style.textContent = `
        .loading-spinner {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(30, 58, 95, 0.1);
            border-radius: 50%;
            border-top-color: var(--primary-medium);
            animation: spin 1s infinite linear;
            margin-bottom: 1rem;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .error-message {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: #fff5f5;
            border-left: 4px solid #e53e3e;
            border-radius: var(--border-radius);
            color: #e53e3e;
        }
        
        .error-icon i {
            font-size: 2rem;
        }
        
        .case-details {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.5s ease;
        }
        
        .case-details.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .case-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e1e1e1;
            margin-bottom: 1.5rem;
        }
        
        .case-status {
            padding: 0.35rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .case-status.pending {
            background: #fff8e6;
            color: #e58e26;
        }
        
        .case-status.in-progress {
            background: #e6f7ff;
            color: #1e88e5;
        }
        
        .case-status.scheduled {
            background: #e6ffe8;
            color: #43a047;
        }
        
        .case-status.completed {
            background: #e8f5e9;
            color: #2e7d32;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .detail-item {
            display: flex;
            flex-direction: column;
        }
        
        .detail-label {
            font-size: 0.875rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        
        .detail-value {
            font-size: 1.125rem;
            font-weight: 600;
        }
        
        .case-timeline {
            margin-bottom: 2rem;
        }
        
        .case-timeline h4,
        .next-steps h4 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e1e1e1;
        }
        
        .timeline-events {
            position: relative;
            padding-left: 40px;
        }
        
        .timeline-events::before {
            content: '';
            position: absolute;
            top: 0;
            left: 15px;
            height: 100%;
            width: 2px;
            background: #e1e1e1;
        }
        
        .timeline-event {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .event-marker {
            position: absolute;
            left: -40px;
            top: 0;
        }
        
        .event-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #e1e1e1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .timeline-event.completed .event-icon {
            background: var(--primary-medium);
            border-color: var(--primary-medium);
        }
        
        .timeline-event.current .event-icon {
            background: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .timeline-event.completed .event-icon i,
        .timeline-event.current .event-icon i {
            color: #fff;
        }
        
        .event-content h5 {
            font-size: 1.125rem;
            margin: 0 0 0.25rem;
        }
        
        .event-date {
            font-size: 0.875rem;
            color: #6c757d;
        }
        
        .next-steps p {
            line-height: 1.7;
        }
        
        @media (max-width: 768px) {
            .details-grid {
                grid-template-columns: 1fr;
            }
        }
    `;
    document.head.appendChild(style);
}

/**
 * Animation and Scroll Effects
 */
function initAnimations() {
    // Add fade-in animation to elements when they enter viewport
    const animateElements = document.querySelectorAll('.feature, .dispute-item, .remedy-item, .limitation-item, .guide-card, .official-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    animateElements.forEach(element => {
        observer.observe(element);
    });
    
    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
        .feature, .dispute-item, .remedy-item, .limitation-item, .guide-card, .official-card {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        .feature:nth-child(2), .dispute-item:nth-child(2), .remedy-item:nth-child(2), 
        .limitation-item:nth-child(2), .guide-card:nth-child(2), .official-card:nth-child(2) {
            transition-delay: 0.1s;
        }
        
        .feature:nth-child(3), .dispute-item:nth-child(3), .remedy-item:nth-child(3), 
        .limitation-item:nth-child(3), .guide-card:nth-child(3), .official-card:nth-child(3) {
            transition-delay: 0.2s;
        }
        
        .feature:nth-child(4), .dispute-item:nth-child(4), .remedy-item:nth-child(4), 
        .limitation-item:nth-child(4), .guide-card:nth-child(4), .official-card:nth-child(4) {
            transition-delay: 0.3s;
        }
        
        .feature:nth-child(5), .dispute-item:nth-child(5), .remedy-item:nth-child(5), 
        .limitation-item:nth-child(5), .guide-card:nth-child(5), .official-card:nth-child(5) {
            transition-delay: 0.4s;
        }
        
        .feature:nth-child(6), .dispute-item:nth-child(6), .remedy-item:nth-child(6), 
        .limitation-item:nth-child(6), .guide-card:nth-child(6), .official-card:nth-child(6) {
            transition-delay: 0.5s;
        }
    `;
    document.head.appendChild(style);
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.industrial-hero');
    if (heroSection) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            const parallaxSpeed = 0.4;
            
            heroSection.style.backgroundPositionY = `${scrollPosition * parallaxSpeed}px`;
        });
    }
}