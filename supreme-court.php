<?php
/**
 * Eswatini Judiciary Website - Supreme Court Page
 */

// Set the page title
$pageTitle = "Supreme Court - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/supreme-court.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/supreme-court.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="supreme-court-hero">
    <div class="hero-parallax-bg" id="heroParallax"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animate-title">The Supreme Court</h1>
            <p class="tagline animate-subtitle">The Apex Court of the Kingdom of Eswatini</p>
            <div class="hero-badge animate-badge">
                <div class="badge-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="badge-text">Est. 1954</div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
        <div class="arrow">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</section>

<!-- Court Navigation -->
<section class="court-quick-nav">
    <div class="container">
        <div class="nav-container">
            <a href="#overview" class="nav-item active">
                <i class="fas fa-info-circle"></i>
                <span>Overview</span>
            </a>
            <a href="#composition" class="nav-item">
                <i class="fas fa-users"></i>
                <span>Composition</span>
            </a>
            <a href="#jurisdiction" class="nav-item">
                <i class="fas fa-balance-scale"></i>
                <span>Jurisdiction</span>
            </a>
            <a href="#appeal-process" class="nav-item">
                <i class="fas fa-file-contract"></i>
                <span>Appeal Process</span>
            </a>
            <a href="#justices" class="nav-item">
                <i class="fas fa-user-tie"></i>
                <span>Justices</span>
            </a>
            <a href="#decisions" class="nav-item">
                <i class="fas fa-landmark"></i>
                <span>Recent Decisions</span>
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="overview" class="court-section overview-section">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Overview</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="overview-content">
            <div class="content-columns">
                <div class="content-column">
                    <p class="lead-text">The Supreme Court was established by the Court of Appeal Act of 1954, as well as by Sections 145 and 146 of the Constitution.</p>
                    <p>It is the court of last instance in the land and has jurisdiction over all criminal and civil appeals from the High Court sitting in its original or appellate jurisdiction. It also has conferred jurisdiction under the Constitution or any other law.</p>
                    <p>The Supreme Court also has supervisory and review powers over all courts in Eswatini.</p>
                    
                    <div class="court-stats">
                        <div class="stat-item" data-value="69">
                            <div class="stat-value">0</div>
                            <div class="stat-label">Years of Service</div>
                        </div>
                        <div class="stat-item" data-value="5">
                            <div class="stat-value">0</div>
                            <div class="stat-label">Justices</div>
                        </div>
                        <div class="stat-item" data-value="85">
                            <div class="stat-value">0</div>
                            <div class="stat-label">Cases Per Year</div>
                        </div>
                    </div>
                </div>
                
                <div class="content-column">
                    <div class="image-feature">
                        <img src="assets/images/courts/supreme-court-building.jpg" alt="Supreme Court Building" class="rounded-image">
                        <div class="image-caption">The Supreme Court Building, Mbabane</div>
                    </div>
                </div>
            </div>
            
            <div class="key-features">
                <div class="key-feature">
                    <div class="feature-icon">
                        <i class="fas fa-balance-scale-right"></i>
                    </div>
                    <h3>Final Authority</h3>
                    <p>Highest court in the judicial system, making final decisions on all legal matters.</p>
                </div>
                <div class="key-feature">
                    <div class="feature-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Constitutional Guardian</h3>
                    <p>Interprets and upholds the Constitution as the supreme law of the land.</p>
                </div>
                <div class="key-feature">
                    <div class="feature-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Legal Precedent</h3>
                    <p>Sets legal precedents that guide all lower courts in the Kingdom.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Composition Section -->
<section id="composition" class="court-section composition-section section-alt">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Composition of the Supreme Court</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="composition-content">
            <div class="composition-visual">
                <div class="composition-diagram">
                    <div class="chief-justice position">
                        <div class="position-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="position-title">Chief Justice</div>
                        <div class="position-desc">Presiding Officer</div>
                    </div>
                    <div class="justices-row">
                        <div class="justice-position position">
                            <div class="position-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="position-title">Justice</div>
                        </div>
                        <div class="justice-position position">
                            <div class="position-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="position-title">Justice</div>
                        </div>
                        <div class="justice-position position">
                            <div class="position-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="position-title">Justice</div>
                        </div>
                        <div class="justice-position position">
                            <div class="position-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="position-title">Justice</div>
                        </div>
                    </div>
                    <svg class="composition-lines" width="100%" height="100%" id="compositionLines"></svg>
                </div>
            </div>
            
            <div class="composition-details">
                <p>The Supreme Court of Judicature for Eswatini consists of the Chief Justice and not less than four other Justices of the Supreme Court.</p>
                
                <div class="composition-card">
                    <h3>Court Constitution</h3>
                    <ul class="check-list">
                        <li>The Supreme Court shall be duly constituted for its ordinary work by not less than three Justices of the Supreme Court.</li>
                        <li>A full bench of the Supreme Court shall consist of five Justices of that Court.</li>
                        <li>The Chief Justice shall preside at sittings of the Supreme Court, and when not sitting, the most senior of the Justices constituting the court shall preside.</li>
                    </ul>
                </div>
                
                <div class="composition-tabs">
                    <div class="tabs-nav">
                        <button class="tab-btn active" data-tab="ordinary">Ordinary Bench</button>
                        <button class="tab-btn" data-tab="full">Full Bench</button>
                    </div>
                    <div class="tabs-content">
                        <div class="tab-content active" id="ordinary">
                            <div class="bench-visual">
                                <div class="bench-justice"></div>
                                <div class="bench-justice"></div>
                                <div class="bench-justice chief"></div>
                                <div class="bench-justice"></div>
                                <div class="bench-justice"></div>
                            </div>
                            <p>The ordinary bench consists of three Justices of the Supreme Court. This bench handles most appeal cases that come before the Supreme Court.</p>
                        </div>
                        <div class="tab-content" id="full">
                            <div class="bench-visual full">
                                <div class="bench-justice"></div>
                                <div class="bench-justice"></div>
                                <div class="bench-justice chief"></div>
                                <div class="bench-justice"></div>
                                <div class="bench-justice"></div>
                            </div>
                            <p>The full bench consists of five Justices of the Supreme Court. Cases of exceptional importance, constitutional matters, or where there is a potential for overturning a previous Supreme Court decision will typically be heard by a full bench.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jurisdiction Section -->
<section id="jurisdiction" class="court-section jurisdiction-section">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Jurisdiction and Powers</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="jurisdiction-content">
            <div class="jurisdiction-card appellate">
                <div class="card-icon">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3>Appellate Jurisdiction</h3>
                <p>The Supreme Court has jurisdiction to hear and determine appeals from the High Court and such other courts and tribunals as Parliament may prescribe.</p>
                <ul class="card-list">
                    <li>Appeals from the High Court in its original jurisdiction</li>
                    <li>Appeals from the High Court in its appellate jurisdiction</li>
                    <li>Appeals from the Industrial Court of Appeal</li>
                </ul>
            </div>
            
            <div class="jurisdiction-card constitutional">
                <div class="card-icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <h3>Constitutional Powers</h3>
                <p>The Supreme Court serves as the final authority on constitutional matters and interpretation of the Constitution of Eswatini.</p>
                <ul class="card-list">
                    <li>Final interpretation of constitutional provisions</li>
                    <li>Adjudication of constitutional disputes</li>
                    <li>Protection of constitutional rights and freedoms</li>
                </ul>
            </div>
            
            <div class="jurisdiction-card supervisory">
                <div class="card-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Supervisory Powers</h3>
                <p>The Supreme Court has supervisory and review powers over all courts in Eswatini and may issue directives to ensure proper administration of justice.</p>
                <ul class="card-list">
                    <li>Review of decisions by lower courts</li>
                    <li>Issuance of practice directions</li>
                    <li>Setting procedural standards</li>
                </ul>
            </div>
            
            <div class="jurisdiction-card advisory">
                <div class="card-icon">
                    <i class="fas fa-comment-alt"></i>
                </div>
                <h3>Advisory Opinions</h3>
                <p>The Supreme Court may provide advisory opinions on legal questions of exceptional public importance when requested by the Head of State.</p>
                <ul class="card-list">
                    <li>Legal advice on matters of national importance</li>
                    <li>Interpretation of international treaties</li>
                    <li>Guidance on complex legal matters</li>
                </ul>
            </div>
        </div>
        
        <div class="jurisdiction-note">
            <div class="note-icon">
                <i class="fas fa-info-circle"></i>
            </div>
            <p>The decisions of the Supreme Court are binding on all other courts in Eswatini and can only be departed from by the Supreme Court itself. This ensures consistency in the application of the law throughout the Kingdom.</p>
        </div>
    </div>
</section>

<!-- Appeal Process Section -->
<section id="appeal-process" class="court-section appeal-section section-alt">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Appeal Process</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-track">
                <div class="timeline-progress" id="timelineProgress"></div>
            </div>
            
            <div class="timeline-steps">
                <div class="timeline-step active" id="step1">
                    <div class="step-indicator">
                        <div class="indicator-circle">1</div>
                    </div>
                    <div class="step-content">
                        <h3>Notice of Appeal</h3>
                        <p>File a notice of appeal with the Supreme Court registry within 30 days of the High Court or Industrial Court of Appeal judgment.</p>
                        <div class="step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" id="step2">
                    <div class="step-indicator">
                        <div class="indicator-circle">2</div>
                    </div>
                    <div class="step-content">
                        <h3>Record Preparation</h3>
                        <p>The appellant must prepare and file the record of proceedings from the lower court within 60 days of filing the notice of appeal.</p>
                        <div class="step-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" id="step3">
                    <div class="step-indicator">
                        <div class="indicator-circle">3</div>
                    </div>
                    <div class="step-content">
                        <h3>Filing of Briefs</h3>
                        <p>Appellant files a brief of argument, followed by the respondent's brief. A reply brief may be filed by the appellant if necessary.</p>
                        <div class="step-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" id="step4">
                    <div class="step-indicator">
                        <div class="indicator-circle">4</div>
                    </div>
                    <div class="step-content">
                        <h3>Hearing</h3>
                        <p>The case is set down for hearing, during which both parties present oral arguments before a panel of Supreme Court Justices.</p>
                        <div class="step-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" id="step5">
                    <div class="step-indicator">
                        <div class="indicator-circle">5</div>
                    </div>
                    <div class="step-content">
                        <h3>Judgment</h3>
                        <p>After deliberation, the Supreme Court delivers its judgment. This may affirm, reverse, or modify the decision of the lower court.</p>
                        <div class="step-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="timeline-navigation">
                <button class="nav-btn prev" id="prevStep" disabled>
                    <i class="fas fa-arrow-left"></i>
                    <span>Previous</span>
                </button>
                <button class="nav-btn next" id="nextStep">
                    <span>Next</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
        
        <div class="appeal-requirements">
            <h3>Requirements for Appeal</h3>
            <div class="requirements-grid">
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Time Limit</h4>
                    <p>Appeals must be filed within 30 days of the judgment being appealed against.</p>
                </div>
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h4>Filing Fees</h4>
                    <p>Payment of prescribed filing fees at the Supreme Court registry.</p>
                </div>
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <i class="fas fa-stamp"></i>
                    </div>
                    <h4>Grounds of Appeal</h4>
                    <p>Clear statement of the grounds upon which the appeal is based.</p>
                </div>
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4>Legal Representation</h4>
                    <p>Appellants are typically represented by legal counsel at the Supreme Court level.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Justices Section -->
<section id="justices" class="court-section justices-section">
    <div class="container">
        <div class="section-heading with-line">
            <h2>The Justices</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="justices-carousel-container">
            <div class="justices-carousel" id="justicesCarousel">
                <div class="carousel-track" id="carouselTrack">
                    <!-- Justice cards will be loaded with JavaScript -->
                    <div class="justice-card chief-card">
                        <div class="justice-image">
                            <img src="assets/images/justices/chief-justice.jpg" alt="Chief Justice">
                            <div class="justice-badge">Chief Justice</div>
                        </div>
                        <div class="justice-info">
                            <h3>Hon. Justice Bheki Maphalala</h3>
                            <p class="justice-title">Chief Justice</p>
                            <p class="justice-bio">Appointed as Chief Justice in 2015, Justice Maphalala has extensive experience in constitutional and commercial law matters.</p>
                            <div class="justice-details">
                                <div class="detail-item">
                                    <i class="fas fa-university"></i>
                                    <span>LLB, University of Swaziland</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Appointed to Supreme Court: 2012</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="justice-card">
                        <div class="justice-image">
                            <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                        </div>
                        <div class="justice-info">
                            <h3>Hon. Justice M.C.B. Maphalala</h3>
                            <p class="justice-title">Justice of the Supreme Court</p>
                            <p class="justice-bio">Justice with expertise in constitutional law and human rights, renowned for detailed and thorough judgments.</p>
                            <div class="justice-details">
                                <div class="detail-item">
                                    <i class="fas fa-university"></i>
                                    <span>LLM, University of Pretoria</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Appointed to Supreme Court: 2010</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="justice-card">
                        <div class="justice-image">
                            <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                        </div>
                        <div class="justice-info">
                            <h3>Hon. Justice S.B. Maphalala</h3>
                            <p class="justice-title">Justice of the Supreme Court</p>
                            <p class="justice-bio">Distinguished jurist with background in commercial law and international legal principles.</p>
                            <div class="justice-details">
                                <div class="detail-item">
                                    <i class="fas fa-university"></i>
                                    <span>LLB, University of Cape Town</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Appointed to Supreme Court: 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="justice-card">
                        <div class="justice-image">
                            <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                        </div>
                        <div class="justice-info">
                            <h3>Hon. Justice J.M. Dlamini</h3>
                            <p class="justice-title">Justice of the Supreme Court</p>
                            <p class="justice-bio">Renowned for expertise in criminal law and procedure with extensive experience in complex appellate matters.</p>
                            <div class="justice-details">
                                <div class="detail-item">
                                    <i class="fas fa-university"></i>
                                    <span>LLM, University of London</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Appointed to Supreme Court: 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="justice-card">
                        <div class="justice-image">
                            <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                        </div>
                        <div class="justice-info">
                            <h3>Hon. Justice T.L. Dlamini</h3>
                            <p class="justice-title">Justice of the Supreme Court</p>
                            <p class="justice-bio">Expert in administrative law and judicial review with significant contributions to legal scholarship.</p>
                            <div class="justice-details">
                                <div class="detail-item">
                                    <i class="fas fa-university"></i>
                                    <span>PhD, University of Witwatersrand</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Appointed to Supreme Court: 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="carousel-navigation">
                <button class="carousel-arrow prev" id="carouselPrev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="carousel-indicators" id="carouselIndicators">
                    <!-- Indicators will be added with JavaScript -->
                </div>
                <button class="carousel-arrow next" id="carouselNext">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Recent Decisions Section -->
<section id="decisions" class="court-section decisions-section section-alt">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Recent Notable Decisions</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="decisions-filter">
            <div class="filter-tabs">
                <button class="filter-tab active" data-category="all">All</button>
                <button class="filter-tab" data-category="constitutional">Constitutional</button>
                <button class="filter-tab" data-category="civil">Civil</button>
                <button class="filter-tab" data-category="criminal">Criminal</button>
                <button class="filter-tab" data-category="commercial">Commercial</button>
            </div>
            <div class="search-container">
                <input type="text" id="decisionSearch" placeholder="Search decisions...">
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
        </div>
        
        <div class="decisions-grid" id="decisionsGrid">
            <!-- Decision cards will be loaded with JavaScript -->
            <div class="decision-card" data-category="constitutional">
                <div class="decision-header">
                    <div class="decision-category">Constitutional</div>
                    <div class="decision-date">15 Jan 2023</div>
                </div>
                <h3 class="decision-title">Attorney General v. Maseko & Others</h3>
                <p class="decision-summary">Landmark ruling on freedom of expression and the constitutionality of certain provisions in the Sedition and Subversive Activities Act.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 12/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>Full Bench</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
            
            <div class="decision-card" data-category="civil">
                <div class="decision-header">
                    <div class="decision-category">Civil</div>
                    <div class="decision-date">03 Mar 2023</div>
                </div>
                <h3 class="decision-title">Nkambule v. Eswatini Development Bank</h3>
                <p class="decision-summary">Important decision on contract interpretation and the duty of good faith in banking relationships.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 18/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>3 Justices</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
            
            <div class="decision-card" data-category="commercial">
                <div class="decision-header">
                    <div class="decision-category">Commercial</div>
                    <div class="decision-date">22 Apr 2023</div>
                </div>
                <h3 class="decision-title">Royal Eswatini Sugar Corp v. Maziya & Co.</h3>
                <p class="decision-summary">Significant commercial law decision on corporate governance and director responsibilities in joint ventures.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 24/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>3 Justices</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
            
            <div class="decision-card" data-category="criminal">
                <div class="decision-header">
                    <div class="decision-category">Criminal</div>
                    <div class="decision-date">08 Jun 2023</div>
                </div>
                <h3 class="decision-title">Rex v. Dlamini</h3>
                <p class="decision-summary">Key ruling on the admissibility of evidence and the right to a fair trial in serious criminal cases.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 32/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>5 Justices</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
            
            <div class="decision-card" data-category="constitutional">
                <div class="decision-header">
                    <div class="decision-category">Constitutional</div>
                    <div class="decision-date">17 Jul 2023</div>
                </div>
                <h3 class="decision-title">Sithole v. Electoral Commission</h3>
                <p class="decision-summary">Significant ruling on the interpretation of electoral laws and the constitutional right to political participation.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 36/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>Full Bench</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
            
            <div class="decision-card" data-category="civil">
                <div class="decision-header">
                    <div class="decision-category">Civil</div>
                    <div class="decision-date">29 Aug 2023</div>
                </div>
                <h3 class="decision-title">Zwane v. Minister of Education</h3>
                <p class="decision-summary">Important case clarifying the scope of administrative law and proper exercise of ministerial powers.</p>
                <div class="decision-meta">
                    <div class="meta-item">
                        <i class="fas fa-file-alt"></i>
                        <span>Case No: 41/2022</span>
                    </div>
                    <div class="meta-item judges">
                        <i class="fas fa-user-tie"></i>
                        <span>3 Justices</span>
                    </div>
                </div>
                <a href="#" class="decision-link">Read Full Judgment</a>
            </div>
        </div>
        
        <div class="decisions-pagination">
            <button class="pagination-btn" disabled>
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="page-numbers">
                <span class="page-number active">1</span>
                <span class="page-number">2</span>
                <span class="page-number">3</span>
                <span class="page-ellipsis">...</span>
                <span class="page-number">8</span>
            </div>
            <button class="pagination-btn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="decisions-link-container">
            <a href="eswatinilii.php" class="btn btn-primary">
                <i class="fas fa-external-link-alt"></i>
                <span>Browse All Supreme Court Decisions</span>
            </a>
        </div>
    </div>
</section>

<!-- Courtroom Virtual Tour Section -->
<section class="court-section virtual-tour-section">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Virtual Courtroom Tour</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="virtual-tour-container">
            <div class="tour-preview" id="tourPreview">
                <img src="assets/images/courts/supreme-court-courtroom.jpg" alt="Supreme Court Courtroom" class="tour-image">
                <div class="tour-overlay">
                    <div class="tour-play-button" id="tourPlayButton">
                        <i class="fas fa-play"></i>
                    </div>
                    <p>Click to explore the Supreme Court</p>
                </div>
            </div>
            
            <div class="tour-info">
                <h3>Experience the Supreme Court</h3>
                <p>Take a virtual tour of the Supreme Court building and courtroom to familiarize yourself with the highest court in Eswatini. Explore the architectural features, courtroom layout, and historical artifacts.</p>
                <div class="tour-features">
                    <div class="feature">
                        <i class="fas fa-video"></i>
                        <span>360° View</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-info-circle"></i>
                        <span>Interactive Info Points</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-history"></i>
                        <span>Historical Context</span>
                    </div>
                </div>
                <div class="tour-disclaimer">
                    <p><i class="fas fa-exclamation-circle"></i> Please note that photography and video recording are prohibited during actual court sessions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="court-section faq-section section-alt">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="faq-container">
            <div class="faq-accordion" id="faqAccordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often does the Supreme Court sit?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The Supreme Court typically holds two regular sessions per year, usually in May and November. However, special sessions may be convened if necessary to address urgent matters.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I appeal any case to the Supreme Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Not all cases can be appealed to the Supreme Court. Generally, appeals lie from decisions of the High Court or the Industrial Court of Appeal. In some instances, leave to appeal may be required. Minor matters from subordinate courts must first be appealed to the High Court before they can potentially reach the Supreme Court.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the costs involved in Supreme Court appeals?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Filing an appeal at the Supreme Court involves various costs, including filing fees (ranging from E1,000 to E5,000 depending on the case type), preparation of court records, security for costs (if ordered), and legal representation fees. In exceptional cases of financial hardship, one may apply for waiver of court fees.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does an appeal take to be heard?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The time frame for an appeal to be heard varies depending on the court's calendar and the complexity of the case. Typically, once all documentation is filed and complete, an appeal may be scheduled for hearing within 3-6 months. However, more complex cases may take longer to be scheduled.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I represent myself in the Supreme Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>While legally you have the right to represent yourself (appear in person) before the Supreme Court, it is highly discouraged due to the complex nature of appellate advocacy and procedural requirements. The Court strongly recommends obtaining legal representation from qualified attorneys with experience in appellate matters.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are Supreme Court hearings open to the public?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, Supreme Court hearings are generally open to the public, promoting transparency in the administration of justice. However, in exceptional circumstances, the Court may order proceedings to be held in camera (private) where publicity would prejudice the interests of justice or where sensitive matters of state security or public morality are involved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="court-section contact-section">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact the Supreme Court</h2>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Supreme Court of Eswatini<br>Hospital Hill<br>Mbabane, Eswatini</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>+268 2404 3000</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>supremecourt@judiciary.org.sz</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <p>Monday to Friday: 8:30 AM - 4:30 PM<br>Closed on weekends and public holidays</p>
                        </div>
                    </div>
                </div>
                <div class="contact-links">
                    <a href="contact.php" class="btn btn-outline">Contact Registry</a>
                    <a href="faqs.php" class="btn btn-outline">View FAQs</a>
                </div>
            </div>
            <div class="contact-map">
                <div class="map-container" id="courtMap">
                    <!-- Map will be loaded with JavaScript -->
                    <img src="assets/images/courts/supreme-court-map.jpg" alt="Supreme Court Location" class="static-map">
                </div>
                <div class="map-actions">
                    <a href="https://maps.google.com/?q=Supreme+Court+of+Eswatini,Mbabane" target="_blank" class="map-action">
                        <i class="fas fa-directions"></i>
                        <span>Get Directions</span>
                    </a>
                    <button class="map-action" id="shareLoc">
                        <i class="fas fa-share-alt"></i>
                        <span>Share Location</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Resources Section -->
<section class="court-section resources-section section-alt">
    <div class="container">
        <div class="section-heading with-line">
            <h2>Related Resources</h2>
            <div class="heading-line"></div>
        </div>
        
        <div class="resources-grid">
            <a href="https://www.eswatinilii.org" target="_blank" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>EswatiniLII</h3>
                <p>Access a comprehensive database of Supreme Court judgments and legal resources.</p>
            </a>
            
            <a href="high-court.php" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>High Court</h3>
                <p>Learn about the High Court, which serves as the primary court of original jurisdiction.</p>
            </a>
            
            <a href="jsc.php" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Judicial Service Commission</h3>
                <p>Information about the body responsible for judicial appointments and discipline.</p>
            </a>
            
            <a href="legal-resources.php" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Legal Resources</h3>
                <p>Access legal publications, research materials, and reference documents.</p>
            </a>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$pageContent = ob_get_clean();

// Include the template
include 'template.php';
?>