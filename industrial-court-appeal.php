<?php
/**
 * Eswatini Judiciary Website - Industrial Court of Appeal Page
 */

// Set the page title
$pageTitle = "Industrial Court of Appeal - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/industrial-court-appeal.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/industrial-court-appeal.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="court-hero industrial-appeal-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">Industrial Court of Appeal</h1>
            <p class="tagline reveal-text">Upholding Labor Justice with Expertise and Integrity</p>
            <div class="hero-actions reveal-fade">
                <a href="#court-overview" class="btn btn-primary">Learn More</a>
                <a href="#appeal-process" class="btn btn-outline">Appeal Process</a>
            </div>
        </div>
    </div>
    <div class="court-status">
        <div class="status-indicator online">
            <span class="status-dot"></span>
            <span class="status-text">Court in Session</span>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- Court Overview Section -->
<section id="court-overview" class="court-overview">
    <div class="container">
        <div class="section-heading with-line">
            <h2>About the Industrial Court of Appeal</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="court-info-grid">
            <div class="court-info-card">
                <div class="info-card-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Jurisdiction</h3>
                <p>The Industrial Court of Appeal serves as the appellate authority for matters from the Industrial Court, addressing complex employment and labor law disputes.</p>
            </div>
            
            <div class="court-info-card">
                <div class="info-card-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Establishment</h3>
                <p>Established in 1980, this court plays a crucial role in Eswatini's judicial framework as one of the Superior Courts in the Kingdom.</p>
            </div>
            
            <div class="court-info-card">
                <div class="info-card-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Authority</h3>
                <p>Its decisions are binding on the Industrial Court but may be appealed to the Supreme Court on matters of significant legal importance.</p>
            </div>
            
            <div class="court-info-card">
                <div class="info-card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Composition</h3>
                <p>The court consists of a President and at least two other judges, all with expertise in employment law and industrial relations.</p>
            </div>
        </div>
        
        <div class="court-description">
            <div class="description-content">
                <p>The Industrial Court of Appeal stands as a cornerstone of Eswatini's labor justice system, providing a specialized appellate forum for reviewing decisions of the Industrial Court. As part of the Superior Courts category within the judiciary structure, it ensures that employment and labor disputes are resolved with expertise, fairness, and in accordance with the law.</p>
                
                <p>The court's jurisdiction encompasses a wide range of labor-related matters, including unfair dismissal claims, collective bargaining disputes, discrimination cases, and other workplace controversies. By specializing in employment law, the court develops consistent jurisprudence that balances the interests of employers, employees, and the broader economic well-being of the Kingdom.</p>
                
                <p>With its decisions setting important precedents for labor relations in Eswatini, the Industrial Court of Appeal plays a vital role in shaping the country's employment landscape and ensuring workplace justice.</p>
            </div>
            
            <div class="court-image">
                <img src="assets/images/courts/industrial-court-appeal-building.jpg" alt="Industrial Court of Appeal Building" class="img-responsive">
                <div class="image-caption">The Industrial Court of Appeal Building in Mbabane</div>
            </div>
        </div>
    </div>
</section>

<!-- Court Leadership Section -->
<section class="court-leadership">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Leadership</h2>
            <div class="heading-line centered"></div>
            <p>Meet the distinguished members of the Industrial Court of Appeal</p>
        </div>
        
        <div class="leadership-carousel" id="leadershipCarousel">
            <div class="leadership-card">
                <div class="leadership-image">
                    <img src="assets/images/judges/placeholder-judge-1.jpg" alt="Judge Name">
                </div>
                <div class="leadership-info">
                    <h3>Hon. Justice [Name]</h3>
                    <p class="leadership-title">President, Industrial Court of Appeal</p>
                    <div class="leadership-bio">
                        <p>A distinguished jurist with over 25 years of experience in labor law and industrial relations. Appointed as President of the Industrial Court of Appeal in [year].</p>
                    </div>
                    <button class="bio-toggle">Read More</button>
                </div>
            </div>
            
            <div class="leadership-card">
                <div class="leadership-image">
                    <img src="assets/images/judges/placeholder-judge-2.jpg" alt="Judge Name">
                </div>
                <div class="leadership-info">
                    <h3>Hon. Justice [Name]</h3>
                    <p class="leadership-title">Judge, Industrial Court of Appeal</p>
                    <div class="leadership-bio">
                        <p>Specializes in collective bargaining and employment discrimination cases. Formerly served as a legal advisor to the Ministry of Labor.</p>
                    </div>
                    <button class="bio-toggle">Read More</button>
                </div>
            </div>
            
            <div class="leadership-card">
                <div class="leadership-image">
                    <img src="assets/images/judges/placeholder-judge-3.jpg" alt="Judge Name">
                </div>
                <div class="leadership-info">
                    <h3>Hon. Justice [Name]</h3>
                    <p class="leadership-title">Judge, Industrial Court of Appeal</p>
                    <div class="leadership-bio">
                        <p>An expert in international labor standards with extensive experience in workplace safety regulations and employee rights protection.</p>
                    </div>
                    <button class="bio-toggle">Read More</button>
                </div>
            </div>
        </div>
        
        <div class="leadership-nav">
            <button class="nav-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
            <div class="nav-dots">
                <span class="nav-dot active"></span>
                <span class="nav-dot"></span>
                <span class="nav-dot"></span>
            </div>
            <button class="nav-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- Court Position Section -->
<section class="court-position">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Position in the Judicial Hierarchy</h2>
            <div class="heading-line centered"></div>
        </div>
        
        <div class="hierarchy-visualization">
            <div class="hierarchy-chart" id="hierarchyChart">
                <!-- Dynamic hierarchy chart will be rendered with JavaScript -->
            </div>
            <div class="hierarchy-controls">
                <button class="view-btn active" data-view="vertical">Vertical View</button>
                <button class="view-btn" data-view="horizontal">Horizontal View</button>
            </div>
        </div>
        
        <div class="court-relationships">
            <div class="relationship-item">
                <h3><i class="fas fa-arrow-up"></i> Appeals To</h3>
                <div class="related-court">
                    <img src="assets/images/courts/supreme-court-icon.png" alt="Supreme Court">
                    <div>
                        <h4>Supreme Court</h4>
                        <p>Final appellate authority for all courts in Eswatini</p>
                        <a href="supreme-court.php" class="btn-link">Learn More <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="relationship-item">
                <h3><i class="fas fa-arrow-down"></i> Appeals From</h3>
                <div class="related-court">
                    <img src="assets/images/courts/industrial-court-icon.png" alt="Industrial Court">
                    <div>
                        <h4>Industrial Court</h4>
                        <p>Primary court for labor and employment disputes</p>
                        <a href="industrial-court.php" class="btn-link">Learn More <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appeal Process Section -->
<section id="appeal-process" class="appeal-process">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Appeal Process</h2>
            <div class="heading-line"></div>
            <p>Understanding how to bring a matter to the Industrial Court of Appeal</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-controls">
                <button class="timeline-nav active" data-stage="1">
                    <span class="nav-number">1</span>
                    <span class="nav-text">Filing Notice</span>
                </button>
                <button class="timeline-nav" data-stage="2">
                    <span class="nav-number">2</span>
                    <span class="nav-text">Record Preparation</span>
                </button>
                <button class="timeline-nav" data-stage="3">
                    <span class="nav-number">3</span>
                    <span class="nav-text">Filing Grounds</span>
                </button>
                <button class="timeline-nav" data-stage="4">
                    <span class="nav-number">4</span>
                    <span class="nav-text">Hearing</span>
                </button>
                <button class="timeline-nav" data-stage="5">
                    <span class="nav-number">5</span>
                    <span class="nav-text">Judgment</span>
                </button>
            </div>
            
            <div class="timeline-stages">
                <div class="timeline-stage active" id="stage-1">
                    <div class="stage-content">
                        <h3>Filing Notice of Appeal</h3>
                        <div class="stage-details">
                            <div class="stage-description">
                                <p>The appeal process begins with filing a Notice of Appeal with the Registrar of the Industrial Court of Appeal within 30 days from the date of the Industrial Court's judgment.</p>
                                <ul class="detail-list">
                                    <li>Complete the official Notice of Appeal form</li>
                                    <li>Include details of the Industrial Court case reference</li>
                                    <li>Pay the prescribed filing fee</li>
                                    <li>Serve a copy of the Notice to all respondents</li>
                                    <li>File proof of service with the Registrar</li>
                                </ul>
                                <div class="info-box">
                                    <i class="fas fa-info-circle"></i>
                                    <p>Extensions for filing may be granted in exceptional circumstances upon formal application to the court.</p>
                                </div>
                            </div>
                            <div class="stage-sidebar">
                                <div class="deadline-info">
                                    <h4>Deadline</h4>
                                    <p>30 days from judgment</p>
                                </div>
                                <div class="fees-info">
                                    <h4>Filing Fee</h4>
                                    <p>E500</p>
                                </div>
                                <div class="document-download">
                                    <h4>Required Forms</h4>
                                    <a href="#" class="download-link">Notice of Appeal Form <i class="fas fa-download"></i></a>
                                    <a href="#" class="download-link">Proof of Service Form <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional stages would be included similarly -->
                <div class="timeline-stage" id="stage-2">
                    <div class="stage-content">
                        <h3>Record Preparation</h3>
                        <!-- Content for stage 2 -->
                    </div>
                </div>
                
                <div class="timeline-stage" id="stage-3">
                    <div class="stage-content">
                        <h3>Filing Grounds of Appeal</h3>
                        <!-- Content for stage 3 -->
                    </div>
                </div>
                
                <div class="timeline-stage" id="stage-4">
                    <div class="stage-content">
                        <h3>Appeal Hearing</h3>
                        <!-- Content for stage 4 -->
                    </div>
                </div>
                
                <div class="timeline-stage" id="stage-5">
                    <div class="stage-content">
                        <h3>Judgment and Implementation</h3>
                        <!-- Content for stage 5 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Cases Section -->
<section class="court-cases">
    <div class="container">
        <div class="section-heading with-action">
            <div>
                <h2>Recent Judgments</h2>
                <div class="heading-line"></div>
            </div>
            <div class="cases-filter">
                <label for="caseYearFilter">Filter by Year:</label>
                <select id="caseYearFilter">
                    <option value="all">All Years</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>
        </div>
        
        <div class="cases-search">
            <input type="text" id="caseSearchInput" placeholder="Search cases by keyword, case number, or parties...">
            <button id="caseSearchBtn"><i class="fas fa-search"></i></button>
        </div>
        
        <div class="cases-grid" id="casesGrid">
            <!-- Case cards will be populated dynamically with JavaScript -->
            <div class="case-card">
                <div class="case-header">
                    <span class="case-number">ICA/15/2024</span>
                    <span class="case-date">May 12, 2024</span>
                </div>
                <h3 class="case-title">Employee Association of Eswatini v. National Industries Ltd</h3>
                <p class="case-summary">Appeal against dismissal of collective bargaining application. Court found procedural irregularities in Industrial Court's handling of evidence.</p>
                <div class="case-footer">
                    <span class="case-category">Collective Bargaining</span>
                    <a href="#" class="case-link">View Full Judgment <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            
            <div class="case-card">
                <div class="case-header">
                    <span class="case-number">ICA/09/2024</span>
                    <span class="case-date">March 25, 2024</span>
                </div>
                <h3 class="case-title">Dlamini v. Regional Manufacturing Company</h3>
                <p class="case-summary">Unfair dismissal appeal. Court upheld Industrial Court's finding of substantive fairness but modified remedies awarded.</p>
                <div class="case-footer">
                    <span class="case-category">Unfair Dismissal</span>
                    <a href="#" class="case-link">View Full Judgment <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            
            <!-- Additional case cards would be added here -->
        </div>
        
        <div class="cases-pagination">
            <button class="pagination-btn" disabled><i class="fas fa-chevron-left"></i></button>
            <span class="pagination-info">Page 1 of 5</span>
            <button class="pagination-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
        
        <div class="cases-archive-link">
            <a href="judgments-archive.php" class="btn btn-outline">View Complete Judgments Archive</a>
        </div>
    </div>
</section>

<!-- Court Statistics Section -->
<section class="court-statistics">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Performance</h2>
            <div class="heading-line centered"></div>
            <p>Key statistics on the Industrial Court of Appeal's operations</p>
        </div>
        
        <div class="statistics-controls">
            <button class="stats-toggle active" data-period="annual">Annual View</button>
            <button class="stats-toggle" data-period="quarterly">Quarterly View</button>
            <div class="stats-year-selector">
                <button class="year-nav prev"><i class="fas fa-chevron-left"></i></button>
                <span id="statsYear">2023</span>
                <button class="year-nav next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        
        <div class="statistics-dashboard">
            <div class="stats-overview">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-value" id="casesFiledValue">87</div>
                        <div class="stat-label">Appeals Filed</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>4% from previous year</span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-value" id="casesResolvedValue">79</div>
                        <div class="stat-label">Appeals Resolved</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>7% from previous year</span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-value" id="averageTimeValue">5.3</div>
                        <div class="stat-label">Avg. Months to Resolution</div>
                        <div class="stat-trend negative">
                            <i class="fas fa-arrow-down"></i>
                            <span>12% from previous year</span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-value" id="successRateValue">42%</div>
                        <div class="stat-label">Appeal Success Rate</div>
                        <div class="stat-trend neutral">
                            <i class="fas fa-minus"></i>
                            <span>1% from previous year</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="stats-charts">
                <div class="chart-container">
                    <h3>Appeals by Category</h3>
                    <div class="chart" id="categoriesChart">
                        <!-- Chart will be rendered with JavaScript -->
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-pie"></i>
                            <span>Chart Loading...</span>
                        </div>
                    </div>
                </div>
                
                <div class="chart-container">
                    <h3>Case Resolution Timeline</h3>
                    <div class="chart" id="timelineChart">
                        <!-- Chart will be rendered with JavaScript -->
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-line"></i>
                            <span>Chart Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="court-faq">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-line centered"></div>
            <p>Find answers to common questions about the Industrial Court of Appeal</p>
        </div>
        
        <div class="faq-tabs">
            <div class="faq-tab active" data-tab="general">General</div>
            <div class="faq-tab" data-tab="filing">Filing Appeals</div>
            <div class="faq-tab" data-tab="hearings">Hearings</div>
            <div class="faq-tab" data-tab="after">After Appeal</div>
        </div>
        
        <div class="faq-content active" id="faq-general">
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the role of the Industrial Court of Appeal?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>The Industrial Court of Appeal is a specialized superior court that reviews decisions made by the Industrial Court. Its primary role is to ensure that the Industrial Court has correctly applied employment and labor laws in its decisions. It has the power to uphold, modify, or overturn the lower court's judgments.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who can appeal to the Industrial Court of Appeal?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Any party who is dissatisfied with a decision of the Industrial Court can appeal to the Industrial Court of Appeal, provided they have proper grounds for appeal. This includes employers, employees, trade unions, and employer organizations that were parties to the original case.</p>
                    </div>
                </div>
                
                <!-- Additional FAQ items would be included here -->
            </div>
        </div>
        
        <div class="faq-content" id="faq-filing">
            <!-- Filing Appeals FAQs -->
        </div>
        
        <div class="faq-content" id="faq-hearings">
            <!-- Hearings FAQs -->
        </div>
        
        <div class="faq-content" id="faq-after">
            <!-- After Appeal FAQs -->
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="court-contact">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <div class="section-heading">
                    <h2>Contact Information</h2>
                    <div class="heading-line"></div>
                </div>
                
                <div class="info-blocks">
                    <div class="info-block">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Location</h3>
                            <p>Industrial Court of Appeal Building<br>Hospital Hill, Mbabane<br>Kingdom of Eswatini</p>
                        </div>
                    </div>
                    
                    <div class="info-block">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Office Hours</h3>
                            <p>Monday to Friday: 8:30 AM - 4:30 PM<br>
                            Saturday, Sunday & Public Holidays: Closed</p>
                        </div>
                    </div>
                    
                    <div class="info-block">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Phone</h3>
                            <p>General Inquiries: +268 2404 2731<br>
                            Registry: +268 2404 2732<br>
                            Fax: +268 2404 2730</p>
                        </div>
                    </div>
                    
                    <div class="info-block">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>General Inquiries: ica@judiciary.org.sz<br>
                            Registry: ica.registry@judiciary.org.sz</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-map">
                <div id="courtMap" class="court-map">
                    <!-- Map will be loaded with JavaScript -->
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Map Loading...</span>
                    </div>
                </div>
                <div class="map-actions">
                    <a href="https://maps.google.com" target="_blank" class="map-action-btn">
                        <i class="fas fa-directions"></i>
                        <span>Get Directions</span>
                    </a>
                    <button class="map-action-btn" id="shareBtnLocation">
                        <i class="fas fa-share-alt"></i>
                        <span>Share Location</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="court-inquiry">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Send an Inquiry</h2>
            <div class="heading-line centered"></div>
            <p>For general inquiries, please complete the form below. For case-specific inquiries, please contact the Registry directly.</p>
        </div>
        
        <div class="inquiry-form-container">
            <form id="inquiryForm" class="inquiry-form" action="process-inquiry.php" method="post">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="inquiryType">Inquiry Type *</label>
                        <select id="inquiryType" name="inquiryType" required>
                            <option value="">Select an option</option>
                            <option value="general">General Information</option>
                            <option value="filing">Filing Procedures</option>
                            <option value="hearing">Hearing Schedule</option>
                            <option value="judgment">Judgment Inquiry</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <div class="form-group full-width captcha-group">
                        <div class="captcha-container" id="captchaContainer">
                            <!-- Captcha will be rendered with JavaScript -->
                        </div>
                        <div class="captcha-input">
                            <label for="captcha">Enter the code shown above *</label>
                            <input type="text" id="captcha" name="captcha" required>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <div class="consent-check">
                            <input type="checkbox" id="consent" name="consent" required>
                            <label for="consent">I consent to the processing of my personal data in accordance with the <a href="privacy.php">Privacy Policy</a>.</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                    <button type="reset" class="btn btn-outline">Reset Form</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Related Links Section -->
<section class="related-links">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Related Links</h2>
            <div class="heading-line centered"></div>
        </div>
        
        <div class="links-grid">
            <a href="industrial-court.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Industrial Court</h3>
                <p>Learn about the court of first instance for industrial and labor matters</p>
            </a>
            
            <a href="supreme-court.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Supreme Court</h3>
                <p>Discover Eswatini's apex court and final appellate authority</p>
            </a>
            
            <a href="labor-law-resources.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Labor Law Resources</h3>
                <p>Access useful resources related to employment and labor law</p>
            </a>
            
            <a href="eswatinilii.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>EswatiniLII</h3>
                <p>Search the legal information institute for case law and judgments</p>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="court-cta">
    <div class="container">
        <div class="cta-content reveal-fade">
            <h2>Need Legal Assistance?</h2>
            <p>For matters before the Industrial Court of Appeal, consider seeking professional legal advice to guide you through the process.</p>
            <div class="cta-buttons">
                <a href="legal-aid.php" class="btn btn-primary">Legal Aid Resources</a>
                <a href="lawyers-directory.php" class="btn btn-outline">Find a Lawyer</a>
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