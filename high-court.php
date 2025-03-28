<?php
/**
 * Eswatini Judiciary Website - High Court Page
 */

// Set the page title
$pageTitle = "High Court - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/high-court.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/high-court.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="high-court-hero">
    <div class="hero-background">
        <div class="hero-particles" id="heroParticles"></div>
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="court-emblem animate-fade-in">
                <div class="emblem-circle">
                    <i class="fas fa-balance-scale"></i>
                </div>
            </div>
            <h1 class="animate-title">High Court of Eswatini</h1>
            <p class="tagline animate-subtitle">Superior Court of Record with Unlimited Original Jurisdiction</p>
            <div class="hero-buttons animate-fade-in">
                <a href="#jurisdiction" class="btn btn-primary">Explore Jurisdiction</a>
                <a href="#divisions" class="btn btn-outline">Court Divisions</a>
            </div>
        </div>
    </div>
    <div class="hero-shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,74.7C640,75,800,53,960,42.7C1120,32,1280,32,1360,32L1440,32L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path>
        </svg>
    </div>
</section>

<!-- Quick Links Navigation -->
<section class="court-quick-nav">
    <div class="container">
        <div class="quick-nav-container">
            <a href="#overview" class="quick-nav-item active">
                <div class="nav-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <span>Overview</span>
            </a>
            <a href="#composition" class="quick-nav-item">
                <div class="nav-icon">
                    <i class="fas fa-users"></i>
                </div>
                <span>Composition</span>
            </a>
            <a href="#jurisdiction" class="quick-nav-item">
                <div class="nav-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <span>Jurisdiction</span>
            </a>
            <a href="#divisions" class="quick-nav-item">
                <div class="nav-icon">
                    <i class="fas fa-sitemap"></i>
                </div>
                <span>Divisions</span>
            </a>
            <a href="#cases" class="quick-nav-item">
                <div class="nav-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <span>Case Process</span>
            </a>
            <a href="#justices" class="quick-nav-item">
                <div class="nav-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <span>Justices</span>
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="overview" class="court-section overview-section">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Overview</h2>
            <div class="heading-underline"></div>
        </div>

        <div class="overview-container">
            <div class="overview-content">
                <p class="lead-text">The High Court of Eswatini is a Superior Court of Record with unlimited original jurisdiction to hear and determine any civil or criminal proceedings under any law.</p>
                
                <div class="info-grid">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3>Established</h3>
                        <p>The High Court was established as a Superior Court of Record under the Constitution of Eswatini.</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Authority</h3>
                        <p>It has unlimited original jurisdiction in civil and criminal matters and appellate jurisdiction from lower courts.</p>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Supervision</h3>
                        <p>The High Court supervises all subordinate courts and reviews their decisions when necessary.</p>
                    </div>
                </div>
                
                <div class="court-indicators">
                    <div class="indicator" data-count="15">
                        <div class="indicator-value">0</div>
                        <div class="indicator-label">Justices</div>
                    </div>
                    <div class="indicator" data-count="5">
                        <div class="indicator-value">0</div>
                        <div class="indicator-label">Divisions</div>
                    </div>
                    <div class="indicator" data-count="1000">
                        <div class="indicator-value">0</div>
                        <div class="indicator-label">Cases Annually</div>
                    </div>
                </div>
            </div>
            
            <div class="overview-image">
                <div class="image-container reveal-image">
                    <img src="assets/images/courts/high-court-building.jpg" alt="High Court of Eswatini Building">
                    <div class="image-caption">High Court Building in Mbabane</div>
                </div>
                <div class="image-decorations">
                    <div class="decoration-element"></div>
                    <div class="decoration-element"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Composition Section -->
<section id="composition" class="court-section composition-section section-alt">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Composition of the High Court</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="composition-content">
            <div class="composition-text">
                <p class="highlight-text">The High Court of Judicature for Eswatini consists of the Chief Justice, ex officio, not less than four Justices of the High Court as may be prescribed, and other Justices of the Superior Court assigned by the Chief Justice.</p>
                
                <div class="composition-details">
                    <h3>Court Constitution</h3>
                    <p>The High Court is duly constituted by:</p>
                    <ul class="styled-list">
                        <li>A single Judge of the High Court sitting alone for regular proceedings</li>
                        <li>A full bench of three Justices of the Superior Courts for more complex or significant cases</li>
                    </ul>
                    
                    <h3>Principal Judge</h3>
                    <p>The Chief Justice designates the most senior Justice of the High Court as the Principal Judge, who:</p>
                    <ul class="styled-list">
                        <li>Presides over the High Court</li>
                        <li>Assigns duties to Justices of the High Court</li>
                        <li>Exercises supervision over Justices of the High Court</li>
                        <li>Ensures the proper and efficient operation of the court</li>
                    </ul>
                </div>
            </div>
            
            <div class="composition-visual">
                <div class="court-structure" id="courtStructure">
                    <!-- SVG will be drawn with JavaScript -->
                    <div class="structure-center-circle">
                        <div class="center-text">High Court</div>
                    </div>
                    <div class="structure-members">
                        <div class="member-node chief-justice" data-label="Chief Justice">
                            <div class="node-circle"></div>
                        </div>
                        <div class="member-node principal-judge" data-label="Principal Judge">
                            <div class="node-circle"></div>
                        </div>
                        <div class="member-node justice" data-label="Justice">
                            <div class="node-circle"></div>
                        </div>
                        <div class="member-node justice" data-label="Justice">
                            <div class="node-circle"></div>
                        </div>
                        <div class="member-node justice" data-label="Justice">
                            <div class="node-circle"></div>
                        </div>
                        <div class="member-node justice" data-label="Justice">
                            <div class="node-circle"></div>
                        </div>
                    </div>
                </div>
                
                <div class="bench-tabs">
                    <div class="tabs-header">
                        <button class="tab-button active" data-tab="single-judge">Single Judge</button>
                        <button class="tab-button" data-tab="full-bench">Full Bench</button>
                    </div>
                    <div class="tabs-body">
                        <div class="tab-content active" id="single-judge">
                            <div class="bench-illustration single">
                                <div class="judge-seat occupied">
                                    <div class="judge-icon"></div>
                                </div>
                            </div>
                            <p>Most High Court cases are heard by a single Judge who has the full authority of the court to determine both questions of fact and law.</p>
                        </div>
                        <div class="tab-content" id="full-bench">
                            <div class="bench-illustration full">
                                <div class="judge-seat occupied">
                                    <div class="judge-icon"></div>
                                </div>
                                <div class="judge-seat occupied principal">
                                    <div class="judge-icon"></div>
                                </div>
                                <div class="judge-seat occupied">
                                    <div class="judge-icon"></div>
                                </div>
                            </div>
                            <p>In cases of exceptional public importance, constitutional matters, or where a significant legal precedent may be set, the court sits as a full bench of three Justices.</p>
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
        <div class="section-heading animated-heading">
            <h2>Jurisdiction and Functions</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="jurisdiction-container">
            <div class="jurisdiction-cards">
                <div class="jurisdiction-card original">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h3>Original Jurisdiction</h3>
                    </div>
                    <div class="card-body">
                        <p>The High Court has unlimited original jurisdiction to hear and determine any civil or criminal proceedings under any law. This makes it the court of first instance for:</p>
                        <ul>
                            <li>Serious criminal offenses including murder, treason, and other capital offenses</li>
                            <li>Complex civil matters and disputes of high value</li>
                            <li>Constitutional issues and applications</li>
                            <li>Administrative law matters and judicial review applications</li>
                        </ul>
                    </div>
                </div>
                
                <div class="jurisdiction-card review">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Review Power</h3>
                    </div>
                    <div class="card-body">
                        <p>The High Court has the power to review the decisions of:</p>
                        <ul>
                            <li>All subordinate courts (Magistrate Courts)</li>
                            <li>All tribunals established by law</li>
                            <li>Any administrative body or official exercising public functions</li>
                        </ul>
                        <p>The review jurisdiction ensures that decisions of lower adjudicative bodies comply with the principles of legality, fairness, and reasonableness.</p>
                    </div>
                </div>
                
                <div class="jurisdiction-card appellate">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-level-up-alt"></i>
                        </div>
                        <h3>Appellate Jurisdiction</h3>
                    </div>
                    <div class="card-body">
                        <p>The High Court hears appeals from:</p>
                        <ul>
                            <li>Magistrate Courts in both civil and criminal matters</li>
                            <li>Specialized courts as prescribed by law</li>
                            <li>Certain administrative tribunals</li>
                        </ul>
                        <p>Appeals to the High Court may be on points of law, points of fact, or mixed questions of law and fact. The court has the power to affirm, reverse, or vary the decision of the lower court.</p>
                    </div>
                </div>
            </div>
            
            <div class="jurisdiction-diagram">
                <div class="diagram-container" id="jurisdictionDiagram">
                    <!-- Will be populated with JavaScript -->
                </div>
                <div class="diagram-legend">
                    <div class="legend-item">
                        <span class="legend-color original"></span>
                        <span>Original Jurisdiction</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color review"></span>
                        <span>Review Power</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color appellate"></span>
                        <span>Appellate Jurisdiction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divisions Section -->
<section id="divisions" class="court-section divisions-section section-alt">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Court Divisions</h2>
            <div class="heading-underline"></div>
        </div>
        
        <p class="section-intro">The High Court may have multiple divisions as determined by the Chief Justice in consultation with the Minister responsible for Justice and the President of the Swaziland Law Society. These specialized divisions ensure efficient and expert handling of specific types of cases.</p>
        
        <div class="divisions-carousel-wrapper">
            <div class="divisions-carousel" id="divisionsCarousel">
                <div class="carousel-track">
                    <div class="division-card">
                        <div class="division-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3>Main Division</h3>
                        <p>Handles general civil and criminal matters that don't fall under specialized divisions. This is the primary division of the High Court.</p>
                        <ul class="division-features">
                            <li>Serious criminal cases</li>
                            <li>General civil litigation</li>
                            <li>Tort and delict claims</li>
                            <li>Property disputes</li>
                        </ul>
                    </div>
                    
                    <div class="division-card">
                        <div class="division-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Constitutional Division</h3>
                        <p>Specializes in matters relating to the interpretation and application of the Constitution of Eswatini.</p>
                        <ul class="division-features">
                            <li>Constitutional interpretation</li>
                            <li>Human rights cases</li>
                            <li>Challenges to legislation</li>
                            <li>Jurisdictional disputes</li>
                        </ul>
                    </div>
                    
                    <div class="division-card">
                        <div class="division-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Commercial Division</h3>
                        <p>Focuses on business and commercial disputes, providing specialized expertise in commercial law matters.</p>
                        <ul class="division-features">
                            <li>Business disputes</li>
                            <li>Contract enforcement</li>
                            <li>Banking and financial matters</li>
                            <li>Corporate governance issues</li>
                        </ul>
                    </div>
                    
                    <div class="division-card">
                        <div class="division-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Civil Division</h3>
                        <p>Deals with general civil matters including property disputes, personal injury claims, and other non-commercial civil litigation.</p>
                        <ul class="division-features">
                            <li>Property law</li>
                            <li>Personal injury</li>
                            <li>Professional negligence</li>
                            <li>Civil appeals</li>
                        </ul>
                    </div>
                    
                    <div class="division-card">
                        <div class="division-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3>Criminal Division</h3>
                        <p>Handles serious criminal cases and appeals from criminal proceedings in the Magistrate Courts.</p>
                        <ul class="division-features">
                            <li>Serious criminal offenses</li>
                            <li>Criminal appeals</li>
                            <li>Bail applications</li>
                            <li>Criminal reviews</li>
                        </ul>
                    </div>
                </div>
                
                <div class="carousel-nav">
                    <button class="carousel-prev" id="divisionPrev" aria-label="Previous division">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel-dots" id="divisionDots">
                        <!-- Will be populated with JavaScript -->
                    </div>
                    <button class="carousel-next" id="divisionNext" aria-label="Next division">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Process Section -->
<section id="cases" class="court-section cases-section">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Case Process</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="process-container">
            <div class="process-filters">
                <button class="filter-btn active" data-process="civil">Civil Cases</button>
                <button class="filter-btn" data-process="criminal">Criminal Cases</button>
                <button class="filter-btn" data-process="appeal">Appeals</button>
            </div>
            
            <div class="process-timeline-container">
                <!-- Civil Process Timeline -->
                <div class="process-timeline active" id="civil-process">
                    <div class="timeline-progress-bar">
                        <div class="progress-indicator" style="width: 0%"></div>
                    </div>
                    
                    <div class="timeline-steps">
                        <div class="timeline-step active" data-step="1">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Filing</h4>
                                <p>Plaintiff files a summons and particulars of claim with the High Court Registry.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="2">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Service</h4>
                                <p>The summons is served on the defendant through the Sheriff of the High Court.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="3">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Pleadings</h4>
                                <p>Defendant files a notice of intention to defend followed by a plea. Further pleadings may be exchanged.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="4">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Discovery</h4>
                                <p>Parties exchange relevant documents and information that will be used during the trial.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="5">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Pre-Trial</h4>
                                <p>A pre-trial conference is held to narrow issues and explore settlement possibilities.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="6">
                            <div class="step-number">6</div>
                            <div class="step-content">
                                <h4>Trial</h4>
                                <p>Evidence is presented and witnesses are examined before a Judge of the High Court.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="7">
                            <div class="step-number">7</div>
                            <div class="step-content">
                                <h4>Judgment</h4>
                                <p>The Judge delivers a reasoned judgment resolving the dispute between the parties.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-navigation">
                        <button class="timeline-btn prev" id="civilPrev" disabled>Previous</button>
                        <button class="timeline-btn next" id="civilNext">Next</button>
                    </div>
                </div>
                
                <!-- Criminal Process Timeline -->
                <div class="process-timeline" id="criminal-process">
                    <div class="timeline-progress-bar">
                        <div class="progress-indicator" style="width: 0%"></div>
                    </div>
                    
                    <div class="timeline-steps">
                        <div class="timeline-step active" data-step="1">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Indictment</h4>
                                <p>The Director of Public Prosecutions files an indictment with the High Court.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="2">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Arraignment</h4>
                                <p>The accused appears before the Court and the charge is read; the accused pleads guilty or not guilty.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="3">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Bail Hearing</h4>
                                <p>If not already granted, the accused may apply for bail pending trial.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="4">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Pre-Trial</h4>
                                <p>Pre-trial conference to address preliminary issues and disclosure of evidence.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="5">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Trial</h4>
                                <p>The prosecution presents its case, followed by the defense case. Witnesses are examined and evidence presented.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="6">
                            <div class="step-number">6</div>
                            <div class="step-content">
                                <h4>Judgment</h4>
                                <p>The Judge delivers a verdict of guilty or not guilty based on the evidence presented.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="7">
                            <div class="step-number">7</div>
                            <div class="step-content">
                                <h4>Sentencing</h4>
                                <p>If found guilty, the Judge imposes an appropriate sentence after hearing mitigation.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-navigation">
                        <button class="timeline-btn prev" id="criminalPrev" disabled>Previous</button>
                        <button class="timeline-btn next" id="criminalNext">Next</button>
                    </div>
                </div>
                
                <!-- Appeal Process Timeline -->
                <div class="process-timeline" id="appeal-process">
                    <div class="timeline-progress-bar">
                        <div class="progress-indicator" style="width: 0%"></div>
                    </div>
                    
                    <div class="timeline-steps">
                        <div class="timeline-step active" data-step="1">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Notice of Appeal</h4>
                                <p>Appellant files a notice of appeal with the lower court and the High Court.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="2">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Record Compilation</h4>
                                <p>The record of proceedings from the lower court is compiled and filed with the High Court.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="3">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Filing Grounds</h4>
                                <p>Appellant files detailed grounds of appeal outlining the alleged errors in the lower court's decision.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="4">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Respondent's Brief</h4>
                                <p>Respondent files a response to the grounds of appeal.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="5">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Hearing</h4>
                                <p>The appeal is heard by a Judge of the High Court (or a panel) with arguments from both sides.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-step" data-step="6">
                            <div class="step-number">6</div>
                            <div class="step-content">
                                <h4>Judgment</h4>
                                <p>The High Court delivers its judgment, which may affirm, reverse, or vary the lower court's decision.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-navigation">
                        <button class="timeline-btn prev" id="appealPrev" disabled>Previous</button>
                        <button class="timeline-btn next" id="appealNext">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Justices Section -->
<section id="justices" class="court-section justices-section section-alt">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Meet Our Justices</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="justices-grid">
            <div class="justice-profile principal-profile">
                <div class="profile-wrapper">
                    <div class="profile-front">
                        <div class="profile-image">
                            <img src="assets/images/justices/principal-judge.jpg" alt="Principal Judge">
                            <div class="profile-badge">Principal Judge</div>
                        </div>
                        <div class="profile-info">
                            <h3>Hon. Justice Qinisile Mabuza</h3>
                            <p class="profile-role">Principal Judge of the High Court</p>
                            <p class="profile-note">Appointed Principal Judge in 2018</p>
                        </div>
                    </div>
                    <div class="profile-back">
                        <div class="back-content">
                            <h3>Hon. Justice Qinisile Mabuza</h3>
                            <p class="profile-bio">Justice Mabuza has served with distinction on the High Court bench since 2010. She has extensive experience in both civil and criminal matters and has delivered several landmark judgments in constitutional cases.</p>
                            <div class="profile-credentials">
                                <div class="credential">
                                    <i class="fas fa-university"></i>
                                    <span>LL.B, University of Swaziland</span>
                                </div>
                                <div class="credential">
                                    <i class="fas fa-gavel"></i>
                                    <span>Appointed to High Court: 2010</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="justice-grid">
                <!-- Justice 1 -->
                <div class="justice-profile">
                    <div class="profile-wrapper">
                        <div class="profile-front">
                            <div class="profile-image">
                                <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                            </div>
                            <div class="profile-info">
                                <h3>Hon. Justice Mumcy Dlamini</h3>
                                <p class="profile-role">Justice of the High Court</p>
                                <p class="profile-note">Commercial Division</p>
                            </div>
                        </div>
                        <div class="profile-back">
                            <div class="back-content">
                                <h3>Hon. Justice Mumcy Dlamini</h3>
                                <p class="profile-bio">Justice Dlamini specializes in commercial and corporate law. Prior to her appointment to the bench, she practiced as a commercial attorney for 15 years.</p>
                                <div class="profile-credentials">
                                    <div class="credential">
                                        <i class="fas fa-university"></i>
                                        <span>LL.M, University of Pretoria</span>
                                    </div>
                                    <div class="credential">
                                        <i class="fas fa-gavel"></i>
                                        <span>Appointed to High Court: 2015</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Justice 2 -->
                <div class="justice-profile">
                    <div class="profile-wrapper">
                        <div class="profile-front">
                            <div class="profile-image">
                                <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                            </div>
                            <div class="profile-info">
                                <h3>Hon. Justice Titus Mlangeni</h3>
                                <p class="profile-role">Justice of the High Court</p>
                                <p class="profile-note">Criminal Division</p>
                            </div>
                        </div>
                        <div class="profile-back">
                            <div class="back-content">
                                <h3>Hon. Justice Titus Mlangeni</h3>
                                <p class="profile-bio">With a background as a public prosecutor, Justice Mlangeni brings significant criminal law expertise to the bench. He is known for his thorough judgments in complex criminal matters.</p>
                                <div class="profile-credentials">
                                    <div class="credential">
                                        <i class="fas fa-university"></i>
                                        <span>LL.B, University of Swaziland</span>
                                    </div>
                                    <div class="credential">
                                        <i class="fas fa-gavel"></i>
                                        <span>Appointed to High Court: 2012</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Justice 3 -->
                <div class="justice-profile">
                    <div class="profile-wrapper">
                        <div class="profile-front">
                            <div class="profile-image">
                                <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                            </div>
                            <div class="profile-info">
                                <h3>Hon. Justice Nkosinathi Maseko</h3>
                                <p class="profile-role">Justice of the High Court</p>
                                <p class="profile-note">Constitutional Division</p>
                            </div>
                        </div>
                        <div class="profile-back">
                            <div class="back-content">
                                <h3>Hon. Justice Nkosinathi Maseko</h3>
                                <p class="profile-bio">Justice Maseko is a constitutional law expert who has published extensively on human rights and constitutional interpretation. He has contributed significantly to Eswatini's constitutional jurisprudence.</p>
                                <div class="profile-credentials">
                                    <div class="credential">
                                        <i class="fas fa-university"></i>
                                        <span>PhD, University of Cape Town</span>
                                    </div>
                                    <div class="credential">
                                        <i class="fas fa-gavel"></i>
                                        <span>Appointed to High Court: 2013</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Justice 4 -->
                <div class="justice-profile">
                    <div class="profile-wrapper">
                        <div class="profile-front">
                            <div class="profile-image">
                                <img src="assets/images/justices/justice-placeholder.jpg" alt="Justice">
                            </div>
                            <div class="profile-info">
                                <h3>Hon. Justice Lydia Nkosi</h3>
                                <p class="profile-role">Justice of the High Court</p>
                                <p class="profile-note">Civil Division</p>
                            </div>
                        </div>
                        <div class="profile-back">
                            <div class="back-content">
                                <h3>Hon. Justice Lydia Nkosi</h3>
                                <p class="profile-bio">Before joining the bench, Justice Nkosi was a respected civil litigation attorney. She specializes in property law and family law matters.</p>
                                <div class="profile-credentials">
                                    <div class="credential">
                                        <i class="fas fa-university"></i>
                                        <span>LL.B, University of Witwatersrand</span>
                                    </div>
                                    <div class="credential">
                                        <i class="fas fa-gavel"></i>
                                        <span>Appointed to High Court: 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="justices-more">
                <a href="high-court-justices.php" class="btn btn-primary">
                    <i class="fas fa-users"></i> View All Justices
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Recent Judgments Section -->
<section class="court-section judgments-section">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Recent Judgments</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="judgments-filter">
            <div class="filter-group">
                <label for="judgmentCategory">Category:</label>
                <select id="judgmentCategory" class="filter-select">
                    <option value="all">All Categories</option>
                    <option value="civil">Civil</option>
                    <option value="criminal">Criminal</option>
                    <option value="constitutional">Constitutional</option>
                    <option value="commercial">Commercial</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="judgmentYear">Year:</label>
                <select id="judgmentYear" class="filter-select">
                    <option value="all">All Years</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            
            <div class="filter-group search-group">
                <input type="text" id="judgmentSearch" placeholder="Search judgments...">
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
        </div>
        
        <div class="judgments-grid" id="judgmentsGrid">
            <!-- Judgment 1 -->
            <div class="judgment-card" data-category="constitutional" data-year="2023">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category constitutional">Constitutional</span>
                        <span class="judgment-date">15 May 2023</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Mkhwanazi v Attorney General</h3>
                    <p class="judgment-desc">Constitutional challenge to the Public Order Act. The Court held that certain provisions of the Act were inconsistent with constitutional guarantees of freedom of assembly and expression.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/12/2023</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
            
            <!-- Judgment 2 -->
            <div class="judgment-card" data-category="criminal" data-year="2023">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category criminal">Criminal</span>
                        <span class="judgment-date">28 Apr 2023</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Rex v Dlamini and Others</h3>
                    <p class="judgment-desc">Criminal trial involving organized crime charges. The Court addressed important issues regarding admissibility of electronic evidence and accomplice testimony.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/23/2023</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
            
            <!-- Judgment 3 -->
            <div class="judgment-card" data-category="commercial" data-year="2023">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category commercial">Commercial</span>
                        <span class="judgment-date">12 Mar 2023</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Standard Bank v Simelane Enterprises</h3>
                    <p class="judgment-desc">Commercial dispute concerning breach of loan agreements. Key judgment on the interpretation of force majeure clauses in commercial contracts.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/45/2023</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
            
            <!-- Judgment 4 -->
            <div class="judgment-card" data-category="civil" data-year="2022">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category civil">Civil</span>
                        <span class="judgment-date">17 Nov 2022</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Zwane v Minister of Education</h3>
                    <p class="judgment-desc">Judicial review of administrative decision by the Ministry of Education. Significant ruling on procedural fairness in public service employment.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/89/2022</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
            
            <!-- Judgment 5 -->
            <div class="judgment-card" data-category="constitutional" data-year="2022">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category constitutional">Constitutional</span>
                        <span class="judgment-date">03 Oct 2022</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Law Society of Eswatini v Minister of Justice</h3>
                    <p class="judgment-desc">Constitutional challenge to amendments to the Legal Practitioners Act. The Court ruled on the independence of the legal profession.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/72/2022</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
            
            <!-- Judgment 6 -->
            <div class="judgment-card" data-category="criminal" data-year="2022">
                <div class="judgment-header">
                    <div class="judgment-meta">
                        <span class="judgment-category criminal">Criminal</span>
                        <span class="judgment-date">22 Aug 2022</span>
                    </div>
                    <div class="judgment-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
                <div class="judgment-body">
                    <h3 class="judgment-title">Rex v Nxumalo</h3>
                    <p class="judgment-desc">Criminal appeal concerning the appropriate sentencing for corruption offenses. Established sentencing guidelines for public corruption cases.</p>
                </div>
                <div class="judgment-footer">
                    <div class="judgment-case">Case No: HC/54/2022</div>
                    <a href="#" class="judgment-link">
                        <i class="fas fa-file-pdf"></i> Read Full Judgment
                    </a>
                </div>
            </div>
        </div>
        
        <div class="judgments-pagination">
            <button class="pagination-btn" disabled>
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="pagination-numbers">
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
        
        <div class="judgments-view-all">
            <a href="judgments-archive.php" class="btn btn-primary">
                <i class="fas fa-book"></i> View All Judgments
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="court-section faq-section section-alt">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="faq-container">
            <div class="faq-accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of cases does the High Court handle?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The High Court has unlimited original jurisdiction to hear and determine any civil or criminal proceedings. It typically handles serious criminal cases like murder, treason, and rape; complex civil matters such as high-value disputes, land matters, and matrimonial causes; constitutional matters; and appeals from Magistrate Courts.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I file a case at the High Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>To file a case at the High Court, you need to prepare the appropriate originating process (such as a summons or petition) with supporting documents and file them at the High Court registry. You will need to pay the prescribed filing fees. It is advisable to seek legal representation due to the complex nature of High Court proceedings.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I appeal a decision of the High Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, decisions of the High Court can be appealed to the Supreme Court of Eswatini. Appeals must typically be filed within 30 days of the judgment. You will need to file a notice of appeal specifying the grounds of appeal and comply with the rules governing appeals to the Supreme Court.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a High Court case typically take?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The duration of High Court cases varies significantly depending on the nature and complexity of the matter. Simple cases may be resolved within 6-12 months, while complex cases can take several years. Factors that affect duration include the court's caseload, the complexity of legal and factual issues, and the conduct of the parties.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do I need a lawyer to represent me at the High Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>While it is legally possible to represent yourself (appear in person) at the High Court, it is strongly recommended to have legal representation. High Court proceedings involve complex legal procedures and substantive law. A qualified attorney will help navigate these complexities and present your case effectively.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the costs involved in High Court litigation?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>High Court litigation costs include filing fees (which vary depending on the type of case), service fees, legal representation fees, and potentially security for costs in certain cases. Legal fees are typically the most significant expense and vary based on the complexity of the case and the experience of your attorney. The losing party may also be ordered to pay the winning party's costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="court-section contact-section">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Contact Information</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="contact-container">
            <div class="contact-card">
                <div class="contact-map" id="contactMap">
                    <!-- Map will be loaded with JavaScript -->
                    <img src="assets/images/courts/high-court-map.jpg" alt="High Court Location Map" class="placeholder-map">
                </div>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Address</h3>
                            <p>High Court of Eswatini<br>Hospital Hill<br>Mbabane, Eswatini</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Phone</h3>
                            <p>Registry: +268 2404 3000<br>Civil Section: +268 2404 3001<br>Criminal Section: +268 2404 3002</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>highcourt@judiciary.org.sz<br>registry@highcourt.org.sz</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Operating Hours</h3>
                            <p>Monday - Friday: 8:30 AM - 4:30 PM<br>Closed on Weekends and Public Holidays</p>
                        </div>
                    </div>
                    
                    <div class="contact-actions">
                        <a href="https://maps.google.com/?q=High+Court+of+Eswatini,Mbabane" target="_blank" class="btn btn-outline">
                            <i class="fas fa-directions"></i> Get Directions
                        </a>
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-envelope"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Links Section -->
<section class="court-section related-links-section section-alt">
    <div class="container">
        <div class="section-heading animated-heading">
            <h2>Related Links</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="links-grid">
            <a href="supreme-court.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Supreme Court</h3>
                <p>Learn about the highest court in Eswatini's judicial system.</p>
            </a>
            
            <a href="master.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3>Master of the High Court</h3>
                <p>Information about the office that administers deceased estates.</p>
            </a>
            
            <a href="commercial-court.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Commercial Court</h3>
                <p>Specialized division handling business and commercial disputes.</p>
            </a>
            
            <a href="magistrate-courts.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Magistrate Courts</h3>
                <p>Information on subordinate courts throughout Eswatini.</p>
            </a>
            
            <a href="eswatinilii.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>EswatiniLII</h3>
                <p>Access the legal information institute and case database.</p>
            </a>
            
            <a href="calendar.php" class="link-card">
                <div class="link-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Court Calendar</h3>
                <p>View upcoming High Court sessions and case schedule.</p>
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