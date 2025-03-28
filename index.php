<?php
/**
 * Eswatini Judiciary Website - Home Page
 */

// Set the page title
$pageTitle = "Home - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/home.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/home.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Slider Section -->
<section class="hero-slider">
    <div class="slider auto-slide" data-interval="6000">
        <div class="slide active">
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="hero-title">High Court of Eswatini</h1>
                        <p class="hero-tagline">Dispensing Justice Responsibly</p>
                        <a href="about.php" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="hero-image">
                        <img src="assets/img/high1.jpg" alt="High Court of Eswatini" class="floating-animation">
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text">
                        <span class="announcement-badge">Announcement</span>
                        <h1 class="hero-title">Five-Year Judiciary Modernization Plan</h1>
                        <p class="hero-tagline">Initiatives to improve court efficiency and access to justice</p>
                        <a href="modernization.php" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="hero-image">
                        <img src="assets/images/modernization.png" alt="Judiciary Modernization" class="floating-animation">
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text">
                        <span class="announcement-badge">E-Services</span>
                        <h1 class="hero-title">New E-Filing System Coming Soon</h1>
                        <p class="hero-tagline">Digital transformation to simplify court procedures</p>
                        <a href="e-services.php" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="hero-image">
                        <img src="assets/images/e-filing.png" alt="E-Filing System" class="floating-animation">
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Navigation -->
        <div class="slider-navigation">
            <div class="container">
                <div class="slider-controls">
                    <button class="slider-prev" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
                    <div class="slider-dots">
                        <button class="dot active" aria-label="Go to slide 1"></button>
                        <button class="dot" aria-label="Go to slide 2"></button>
                        <button class="dot" aria-label="Go to slide 3"></button>
                    </div>
                    <button class="slider-next" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 welcome-image">
                <div class="image-overlay">
                    <img src="assets/img/scales-of-justice.jpg" alt="Scales of Justice" class="floating-animation">
                </div>
            </div>
            <div class="col-lg-6 welcome-content">
                <div class="section-heading">
                    <h2>Welcome to the Judiciary of Eswatini</h2>
                    <div class="heading-line"></div>
                    <h3>Dispensing Justice Responsibly</h3>
                </div>
                <p>The Judiciary is responsible for the administration of justice in accordance with the Constitution and laws of Eswatini. We maintain fairness and promote constitutional values through professional administration.</p>
                <a href="about.php" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Access Section -->
<section class="quick-access-section section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Quick Access</h2>
            <div class="heading-line centered"></div>
            <p>Important services and information</p>
        </div>
        
        <div class="quick-access-grid">
            <a href="courts.php" class="quick-access-card">
                <div class="card-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Our Courts</h3>
                <p>Information about courts, jurisdictions, and procedures</p>
                <div class="hover-effect"></div>
            </a>
            
            <a href="master.php" class="quick-access-card">
                <div class="card-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Master of High Court</h3>
                <p>Estate administration and related services</p>
                <div class="hover-effect"></div>
            </a>
            
            <a href="jsc.php" class="quick-access-card">
                <div class="card-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Judicial Service Commission</h3>
                <p>Appointments and administration of the judiciary</p>
                <div class="hover-effect"></div>
            </a>
            
            <a href="contact.php" class="quick-access-card">
                <div class="card-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Contact Us</h3>
                <p>Get in touch with the judiciary</p>
                <div class="hover-effect"></div>
            </a>
        </div>
    </div>
</section>

<!-- Judicial Independence Section -->
<section class="independence-section section">
    <div class="container">
        <div class="independence-overlay">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Judicial Independence</h2>
                        <div class="heading-line"></div>
                        <p class="constitution-cite">Established by the Constitution</p>
                    </div>
                    <blockquote class="constitution-quote">
                        <p>The essence of judicial independence lies in the freedom to decide cases without external pressure, with only the law and conscience as guides.</p>
                    </blockquote>
                    <p>In the Kingdom of Eswatini, the Judiciary is vested with judicial power and shall be independent and subject only to the Constitution. Neither the Crown nor Parliament shall have the power to control the exercise of judicial power.</p>
                    <a href="about.php#independence" class="btn btn-outline">Learn More</a>
                </div>
                <div class="col-lg-6">
                    <div class="independence-pillars">
                        <div class="pillar-row">
                            <div class="pillar-card">
                                <div class="pillar-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h3>Autonomy</h3>
                                <div class="pillar-glow"></div>
                            </div>
                            
                            <div class="pillar-card">
                                <div class="pillar-icon">
                                    <i class="fas fa-balance-scale-right"></i>
                                </div>
                                <h3>Impartiality</h3>
                                <div class="pillar-glow"></div>
                            </div>
                        </div>
                        
                        <div class="pillar-row">
                            <div class="pillar-card">
                                <div class="pillar-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3>Security</h3>
                                <div class="pillar-glow"></div>
                            </div>
                            
                            <div class="pillar-card">
                                <div class="pillar-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h3>Institutional Independence</h3>
                                <p>The Judiciary as an institution is separate from the executive and legislative branches.</p>
                                <div class="pillar-glow"></div>
                            </div>
                        </div>
                        
                        <div class="pillar-card financial-autonomy">
                            <div class="pillar-icon">
                                <i class="fas fa-coins"></i>
                            </div>
                            <h3>Financial Autonomy</h3>
                            <p>A separate budget allocation ensures operational independence.</p>
                            <div class="pillar-glow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Services Section -->
<section class="court-services-section section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Our Court Services</h2>
            <div class="heading-line centered"></div>
            <p>Specialized legal services designed to meet diverse needs</p>
        </div>
        
        <div class="services-slider">
            <div class="services-container">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Labour Law</h3>
                    <p>Labour law in Eswatini refers to the laws and regulations that govern employment relationships, workers' rights and protections, and workplace safety regulations.</p>
                    <a href="services.php#labour" class="btn-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Small Claims</h3>
                    <p>Small Claims court is designed as a legal venue where smaller monetary disputes can be resolved quickly and efficiently without the need for extensive legal procedures.</p>
                    <a href="services.php#small-claims" class="btn-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Civil Law</h3>
                    <p>Civil law in Eswatini refers to the legal system that deals with disputes between individuals or entities, such as family disputes and contract disputes.</p>
                    <a href="services.php#civil" class="btn-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Family law handles matters relating to family relationships including marriage, divorce, adoption, child custody and support, and protection from domestic violence.</p>
                    <a href="services.php#family" class="btn-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="services-controls">
                <button class="service-prev" aria-label="Previous service"><i class="fas fa-chevron-left"></i></button>
                <button class="service-next" aria-label="Next service"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Our Values</h2>
            <div class="heading-line centered"></div>
        </div>
        
        <div class="values-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="vision">
                    <span class="tab-number">01</span>
                    <span class="tab-title">Vision</span>
                </button>
                <button class="tab-btn" data-tab="mission">
                    <span class="tab-number">02</span>
                    <span class="tab-title">Mission</span>
                </button>
                <button class="tab-btn" data-tab="objectives">
                    <span class="tab-number">03</span>
                    <span class="tab-title">Our Objectives</span>
                </button>
            </div>
            
            <div class="tabs-content">
                <div class="tab-panel active" id="vision">
                    <div class="tab-content-inner">
                        <div class="tab-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="tab-text">
                            <h3>Vision</h3>
                            <p>To uphold the rule of law and effectively dispense justice to all citizens of the Kingdom, ensuring that the judiciary maintains its independence and respect.</p>
                        </div>
                    </div>
                </div>
                
                <div class="tab-panel" id="mission">
                    <div class="tab-content-inner">
                        <div class="tab-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="tab-text">
                            <h3>Mission</h3>
                            <p>To administer justice fairly and to all members of society regardless of status, to uphold the provisions of the Constitution of the country, and to offer public service of the highest standard.</p>
                        </div>
                    </div>
                </div>
                
                <div class="tab-panel" id="objectives">
                    <div class="tab-content-inner">
                        <div class="tab-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="tab-text">
                            <h3>Our Objectives</h3>
                            <p>To safeguard the independence of Judiciary and protect the constitutional rights and freedoms of the citizens, while ensuring access to justice for all.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section section">
    <div class="container">
        <div class="section-heading with-action">
            <div>
                <h2>Latest News & Updates</h2>
                <div class="heading-line"></div>
            </div>
            <a href="news.php" class="btn-text">View All News</a>
        </div>
        
        <div class="news-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="announcements">Announcements</button>
            <button class="filter-btn" data-filter="court-rulings">Court Rulings</button>
            <button class="filter-btn" data-filter="press-releases">Press Releases</button>
        </div>
        
        <div class="news-grid">
            <div class="news-card" data-category="announcements">
                <div class="news-image">
                    <img src="assets/images/news/modernization-plan.jpg" alt="Judiciary modernization">
                    <span class="news-badge">Announcements</span>
                </div>
                <div class="news-content">
                    <h3>Chief Justice Unveils Five-Year Judiciary Modernization Plan</h3>
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> February 15, 2025</span>
                    </div>
                    <a href="news-details.php?id=1" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="news-card" data-category="court-rulings">
                <div class="news-image">
                    <img src="assets/images/news/supreme-court.jpg" alt="Supreme Court ruling">
                    <span class="news-badge">Court Rulings</span>
                </div>
                <div class="news-content">
                    <h3>Supreme Court Rules on Landmark Constitutional Case</h3>
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> February 12, 2025</span>
                    </div>
                    <a href="news-details.php?id=2" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="news-card" data-category="press-releases">
                <div class="news-image">
                    <img src="assets/images/news/case-backlog.jpg" alt="Case backlog reduction">
                    <span class="news-badge">Press Releases</span>
                </div>
                <div class="news-content">
                    <h3>Judiciary Reports 30% Reduction in Case Backlog</h3>
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> February 8, 2025</span>
                    </div>
                    <a href="news-details.php?id=3" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="news.php" class="btn btn-primary">Explore All News</a>
        </div>
    </div>
</section>

<!-- JSC Members Section -->
<section class="jsc-section section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Judicial Service Commission Members</h2>
            <div class="heading-line centered"></div>
        </div>
        
        <div class="jsc-members">
            <div class="member-card">
                <div class="member-image">
                    <img src="assets/images/members/chief-justice.jpg" alt="Hon. Chief Justice">
                    <div class="member-overlay">
                        <a href="jsc.php#chief-justice" class="view-profile">View Profile</a>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Hon. Chief Justice</h3>
                    <p>Chairman</p>
                </div>
            </div>
            
            <div class="member-card">
                <div class="member-image">
                    <img src="assets/images/members/commissioner-1.jpg" alt="Hon. Commissioner">
                    <div class="member-overlay">
                        <a href="jsc.php#commissioner-1" class="view-profile">View Profile</a>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Hon. Commissioner</h3>
                    <p>JSC Member</p>
                </div>
            </div>
            
            <div class="member-card">
                <div class="member-image">
                    <img src="assets/images/members/commissioner-2.jpg" alt="Hon. Commissioner">
                    <div class="member-overlay">
                        <a href="jsc.php#commissioner-2" class="view-profile">View Profile</a>
                    </div>
                </div>
                <div class="member-info">
                    <h3>Hon. Commissioner</h3>
                    <p>JSC Member</p>
                </div>
            </div>
            
            <div class="member-card">
                <div class="member-image">
                    <img src="assets/images/members/jsc-secretary.jpg" alt="JSC Secretary">
                    <div class="member-overlay">
                        <a href="jsc.php#secretary" class="view-profile">View Profile</a>
                    </div>
                </div>
                <div class="member-info">
                    <h3>JSC Secretary</h3>
                    <p>Secretary</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter to receive the latest news and updates from the Eswatini Judiciary directly to your inbox.</p>
                <form action="subscribe.php" method="post" class="newsletter-form">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">I agree to receive news and updates from the Eswatini Judiciary</label>
                    </div>
                </form>
            </div>
            <div class="newsletter-decoration">
                <div class="decoration-circle"></div>
                <div class="decoration-dots"></div>
            </div>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$pageContent = ob_get_clean();

// Include the template
include 'template.php';
?>