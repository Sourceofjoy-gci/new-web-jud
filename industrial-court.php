<?php
/**
 * Eswatini Judiciary Website - Industrial Court Page
 */

// Set the page title
$pageTitle = "Industrial Court - Judiciary of Eswatini";

// Include page-specific styles
$pageStyles = [
    'assets/css/industrial-court.css'
];

// Include page-specific scripts
$pageScripts = [
    'assets/js/industrial-court.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="industrial-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">Industrial Court</h1>
            <p class="tagline reveal-text">Resolving workplace disputes with justice and equity</p>
            <div class="hero-actions reveal-fade">
                <a href="#court-overview" class="btn-primary">Learn More</a>
                <a href="#case-filing" class="btn-outline">File a Case</a>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- Court Overview Section -->
<section id="court-overview" class="court-overview dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>About the Industrial Court</h2>
            <div class="heading-line centered"></div>
            <p>A specialized tribunal established to resolve labor-related disputes and protect employment rights.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-image">
                <div class="image-frame">
                    <img src="assets/images/courts/industrial-court-interior.jpg" alt="Industrial Court Interior">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h3>Established 1980</h3>
                            <p>Serving the people of Eswatini for over 40 years</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="overview-content">
                <div class="content-box">
                    <h3>Role and Function</h3>
                    <p>The Industrial Court plays a vital role in Eswatini's judicial system by adjudicating disputes arising from employer-employee relationships. The court ensures fair labor practices, enforces employment legislation, and provides legal remedies for workplace injustices.</p>
                    
                    <div class="key-features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Specialized Jurisdiction</h4>
                                <p>Dedicated to employment and labor disputes</p>
                            </div>
                        </div>
                        
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Expert Adjudication</h4>
                                <p>Presided over by judges with labor law expertise</p>
                            </div>
                        </div>
                        
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Accessible Procedures</h4>
                                <p>Simplified processes to enhance access to justice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jurisdiction Section -->
<section class="jurisdiction-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Jurisdiction & Powers</h2>
            <div class="heading-line centered"></div>
            <p>Understanding the scope and authority of the Industrial Court</p>
        </div>
        
        <div class="jurisdiction-tabs">
            <div class="tabs-nav" id="jurisdictionTabs">
                <button class="tab active" data-tab="disputes">
                    <i class="fas fa-briefcase"></i>
                    <span>Employment Disputes</span>
                </button>
                <button class="tab" data-tab="remedies">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Remedies & Awards</span>
                </button>
                <button class="tab" data-tab="precedents">
                    <i class="fas fa-landmark"></i>
                    <span>Legal Precedents</span>
                </button>
                <button class="tab" data-tab="limitations">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Limitations</span>
                </button>
            </div>
            
            <div class="tabs-content">
                <div class="tab-content active" id="disputes">
                    <div class="content-card dark-gradient">
                        <h3>Types of Employment Disputes</h3>
                        <p>The Industrial Court has jurisdiction over a wide range of employment disputes and labor-related matters:</p>
                        
                        <div class="disputes-grid">
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-user-times"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Unfair Dismissal</h4>
                                    <p>Claims alleging termination of employment without just cause or proper procedure</p>
                                </div>
                            </div>
                            
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Contract Breaches</h4>
                                    <p>Disputes arising from violations of employment contracts or collective agreements</p>
                                </div>
                            </div>
                            
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Compensation Claims</h4>
                                    <p>Matters related to wages, benefits, severance pay, and other financial entitlements</p>
                                </div>
                            </div>
                            
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Discrimination & Harassment</h4>
                                    <p>Cases involving workplace discrimination, harassment, or victimization</p>
                                </div>
                            </div>
                            
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-industry"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Industrial Actions</h4>
                                    <p>Issues related to strikes, lockouts, and other collective labor actions</p>
                                </div>
                            </div>
                            
                            <div class="dispute-item">
                                <div class="dispute-icon">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <div class="dispute-content">
                                    <h4>Labor Practices</h4>
                                    <p>Disputes concerning unfair labor practices and workplace policies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="remedies">
                    <div class="content-card dark-gradient">
                        <h3>Remedies & Awards</h3>
                        <p>The Industrial Court has the authority to grant various remedies and make binding awards to resolve employment disputes:</p>
                        
                        <div class="remedies-list">
                            <div class="remedy-item">
                                <div class="remedy-icon">
                                    <i class="fas fa-undo"></i>
                                </div>
                                <div class="remedy-content">
                                    <h4>Reinstatement</h4>
                                    <p>Ordering an employer to restore a dismissed employee to their former position</p>
                                </div>
                            </div>
                            
                            <div class="remedy-item">
                                <div class="remedy-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <div class="remedy-content">
                                    <h4>Compensation</h4>
                                    <p>Monetary awards for damages, lost wages, or other financial losses resulting from workplace disputes</p>
                                </div>
                            </div>
                            
                            <div class="remedy-item">
                                <div class="remedy-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <div class="remedy-content">
                                    <h4>Injunctions</h4>
                                    <p>Orders prohibiting certain actions or requiring specific performance by employers or employees</p>
                                </div>
                            </div>
                            
                            <div class="remedy-item">
                                <div class="remedy-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div class="remedy-content">
                                    <h4>Declaratory Orders</h4>
                                    <p>Judicial determinations on the rights, obligations, or legal status of parties in employment relationships</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="precedents">
                    <div class="content-card dark-gradient">
                        <h3>Legal Precedents</h3>
                        <p>The Industrial Court contributes to the development of labor law through the establishment of precedents and interpretations of employment legislation:</p>
                        
                        <div class="precedents-slider" id="precedentsSlider">
                            <div class="precedent-slide">
                                <div class="precedent-card">
                                    <div class="precedent-header">
                                        <h4>Maziya v. Royal Swazi Sugar Corporation</h4>
                                        <span class="precedent-year">2018</span>
                                    </div>
                                    <div class="precedent-body">
                                        <p>This landmark case established the principle that employers must follow procedural fairness in disciplinary proceedings, even when there appears to be substantive grounds for dismissal.</p>
                                    </div>
                                    <div class="precedent-footer">
                                        <span class="precedent-tag">Procedural Fairness</span>
                                        <a href="#" class="precedent-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="precedent-slide">
                                <div class="precedent-card">
                                    <div class="precedent-header">
                                        <h4>Simelane v. Eswatini Telecommunications</h4>
                                        <span class="precedent-year">2015</span>
                                    </div>
                                    <div class="precedent-body">
                                        <p>This case clarified the burden of proof in constructive dismissal claims, requiring employees to demonstrate that continued employment had become intolerable due to employer conduct.</p>
                                    </div>
                                    <div class="precedent-footer">
                                        <span class="precedent-tag">Constructive Dismissal</span>
                                        <a href="#" class="precedent-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="precedent-slide">
                                <div class="precedent-card">
                                    <div class="precedent-header">
                                        <h4>Swazi Metalworkers Union v. Eswatini Steel</h4>
                                        <span class="precedent-year">2019</span>
                                    </div>
                                    <div class="precedent-body">
                                        <p>This precedent established guidelines for determining the legality of industrial actions and the rights of workers to engage in protected strikes.</p>
                                    </div>
                                    <div class="precedent-footer">
                                        <span class="precedent-tag">Industrial Action</span>
                                        <a href="#" class="precedent-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="precedent-navigation">
                                <button class="prev-btn" id="precedentPrevBtn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <div class="precedent-dots" id="precedentDots"></div>
                                <button class="next-btn" id="precedentNextBtn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="limitations">
                    <div class="content-card dark-gradient">
                        <h3>Jurisdictional Limitations</h3>
                        <p>While the Industrial Court has extensive powers in labor matters, there are certain limitations to its jurisdiction:</p>
                        
                        <div class="limitations-list">
                            <div class="limitation-item">
                                <div class="limitation-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="limitation-content">
                                    <h4>Time Limitations</h4>
                                    <p>Cases must generally be filed within 6 months of the dispute arising, with limited exceptions for continuing violations.</p>
                                </div>
                            </div>
                            
                            <div class="limitation-item">
                                <div class="limitation-icon">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="limitation-content">
                                    <h4>Government Exclusions</h4>
                                    <p>Certain categories of government employees may have disputes handled through separate administrative procedures.</p>
                                </div>
                            </div>
                            
                            <div class="limitation-item">
                                <div class="limitation-icon">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <div class="limitation-content">
                                    <h4>Monetary Thresholds</h4>
                                    <p>Small claims below a certain monetary value may be directed to alternative dispute resolution mechanisms.</p>
                                </div>
                            </div>
                            
                            <div class="limitation-item">
                                <div class="limitation-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="limitation-content">
                                    <h4>Prior Conciliation</h4>
                                    <p>Some disputes require attempted conciliation through the Conciliation, Mediation and Arbitration Commission before court proceedings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Process Section -->
<section id="case-filing" class="court-process dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Filing a Case</h2>
            <div class="heading-line centered"></div>
            <p>A step-by-step guide to bringing your employment dispute before the Industrial Court</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-track">
                <div class="timeline-progress" id="timelineProgress"></div>
            </div>
            
            <div class="timeline-steps">
                <div class="timeline-step active" data-step="1">
                    <div class="step-marker">
                        <div class="step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <span class="step-number">1</span>
                    </div>
                    <div class="step-content">
                        <h3>Prepare Documentation</h3>
                        <div class="step-description">
                            <p>Gather all relevant documents including employment contracts, correspondence, disciplinary records, and evidence supporting your claim.</p>
                            <ul class="document-checklist">
                                <li>Employment contract or letter of appointment</li>
                                <li>Pay slips and benefit statements</li>
                                <li>Correspondence related to the dispute</li>
                                <li>Witness statements (if applicable)</li>
                                <li>Records of internal grievance procedures</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" data-step="2">
                    <div class="step-marker">
                        <div class="step-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <span class="step-number">2</span>
                    </div>
                    <div class="step-content">
                        <h3>Complete Court Forms</h3>
                        <div class="step-description">
                            <p>Fill out the appropriate application forms based on the nature of your dispute. These forms can be obtained from the Industrial Court Registry or downloaded from this website.</p>
                            <div class="forms-download">
                                <a href="#" class="download-link">
                                    <i class="fas fa-download"></i>
                                    <span>Form IC-1: Unfair Dismissal Claim</span>
                                </a>
                                <a href="#" class="download-link">
                                    <i class="fas fa-download"></i>
                                    <span>Form IC-2: Contract Dispute Application</span>
                                </a>
                                <a href="#" class="download-link">
                                    <i class="fas fa-download"></i>
                                    <span>Form IC-3: Compensation Claim</span>
                                </a>
                                <a href="#" class="download-link">
                                    <i class="fas fa-download"></i>
                                    <span>Form IC-4: General Application</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" data-step="3">
                    <div class="step-marker">
                        <div class="step-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <span class="step-number">3</span>
                    </div>
                    <div class="step-content">
                        <h3>Pay Filing Fees</h3>
                        <div class="step-description">
                            <p>Pay the required filing fees at the Court Registry. Fee waivers may be available for applicants who demonstrate financial hardship.</p>
                            <div class="fees-table-container">
                                <table class="fees-table">
                                    <thead>
                                        <tr>
                                            <th>Application Type</th>
                                            <th>Filing Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unfair Dismissal Claim</td>
                                            <td>E300</td>
                                        </tr>
                                        <tr>
                                            <td>Contract Dispute</td>
                                            <td>E350</td>
                                        </tr>
                                        <tr>
                                            <td>Compensation Claim</td>
                                            <td>E250 - E1,000 (based on amount claimed)</td>
                                        </tr>
                                        <tr>
                                            <td>General Application</td>
                                            <td>E400</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" data-step="4">
                    <div class="step-marker">
                        <div class="step-icon">
                            <i class="fas fa-share-square"></i>
                        </div>
                        <span class="step-number">4</span>
                    </div>
                    <div class="step-content">
                        <h3>Serve the Respondent</h3>
                        <div class="step-description">
                            <p>Once your application is filed and accepted by the Court Registry, you must serve copies of all documents on the respondent (typically your employer or former employer).</p>
                            <div class="service-methods">
                                <div class="service-method">
                                    <h4>Personal Service</h4>
                                    <p>Documents are handed directly to the respondent or authorized representative.</p>
                                </div>
                                <div class="service-method">
                                    <h4>Registered Post</h4>
                                    <p>Documents sent via registered mail with delivery confirmation.</p>
                                </div>
                                <div class="service-method">
                                    <h4>Sheriff Service</h4>
                                    <p>Court-appointed sheriff delivers documents (additional fees apply).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-step" data-step="5">
                    <div class="step-marker">
                        <div class="step-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <span class="step-number">5</span>
                    </div>
                    <div class="step-content">
                        <h3>Attend Court Proceedings</h3>
                        <div class="step-description">
                            <p>After the respondent files a response, the court will schedule hearing dates. You must attend all scheduled hearings and follow court directions.</p>
                            <div class="hearing-info">
                                <div class="info-card">
                                    <h4>Pre-Hearing Conference</h4>
                                    <p>Initial meeting to clarify issues, exchange information, and explore settlement possibilities.</p>
                                </div>
                                <div class="info-card">
                                    <h4>Main Hearing</h4>
                                    <p>Formal presentation of evidence, witness testimony, and legal arguments before the presiding judge.</p>
                                </div>
                                <div class="info-card">
                                    <h4>Judgment</h4>
                                    <p>The court delivers its decision either immediately after the hearing or at a later date.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="timeline-navigation">
                <button class="prev-step" id="prevStepBtn" disabled>
                    <i class="fas fa-chevron-left"></i>
                    <span>Previous Step</span>
                </button>
                <button class="next-step" id="nextStepBtn">
                    <span>Next Step</span>
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Case Tracker Section -->
<section class="case-tracker">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Case Status Tracker</h2>
            <div class="heading-line centered"></div>
            <p>Check the status of your Industrial Court case</p>
        </div>
        
        <div class="tracker-container">
            <form class="tracker-form">
                <div class="form-group">
                    <label for="caseNumber">Case Number</label>
                    <input type="text" id="caseNumber" placeholder="Enter your case number (e.g., IC/2023/0123)">
                </div>
                
                <div class="form-group">
                    <label for="idNumber">ID Number / Passport</label>
                    <input type="text" id="idNumber" placeholder="Enter your national ID or passport number">
                </div>
                
                <button type="button" class="btn-track" id="trackCaseBtn">
                    <i class="fas fa-search"></i>
                    <span>Track Case</span>
                </button>
            </form>
            
            <div class="tracker-results" id="trackerResults">
                <!-- Results will be displayed here by JavaScript -->
                <div class="results-placeholder">
                    <div class="placeholder-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <p>Enter your case details to check status</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guides Section -->
<section class="court-guides dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Resources & Guides</h2>
            <div class="heading-line centered"></div>
            <p>Helpful resources for navigating the Industrial Court process</p>
        </div>
        
        <div class="guides-grid">
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Employment Rights Handbook</h3>
                <p>A comprehensive guide to understanding your rights under Eswatini's employment legislation.</p>
                <a href="#" class="guide-link">Download PDF</a>
            </div>
            
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>Self-Representation Guide</h3>
                <p>Practical advice for effectively representing yourself in Industrial Court proceedings.</p>
                <a href="#" class="guide-link">Download PDF</a>
            </div>
            
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3>Forms Completion Tutorial</h3>
                <p>Step-by-step instructions for completing Industrial Court application forms correctly.</p>
                <a href="#" class="guide-link">View Tutorial</a>
            </div>
            
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Court Etiquette</h3>
                <p>Guidelines on appropriate behavior, dress code, and protocol in the Industrial Court.</p>
                <a href="#" class="guide-link">Read More</a>
            </div>
            
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>FAQs</h3>
                <p>Answers to commonly asked questions about Industrial Court procedures and processes.</p>
                <a href="#" class="guide-link">View FAQs</a>
            </div>
            
            <div class="guide-card">
                <div class="guide-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Video Tutorials</h3>
                <p>Visual guides explaining key aspects of the Industrial Court process and procedures.</p>
                <a href="#" class="guide-link">Watch Videos</a>
            </div>
        </div>
    </div>
</section>

<!-- Court Officials Section -->
<section class="court-officials">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Officials</h2>
            <div class="heading-line centered"></div>
            <p>Meet the judicial officers presiding over the Industrial Court</p>
        </div>
        
        <div class="officials-slider" id="officialsSlider">
            <div class="officials-track" id="officialsTrack">
                <div class="official-card">
                    <div class="official-image">
                        <img src="assets/images/officials/judge-placeholder.jpg" alt="Judge Sibusiso Nkambule">
                    </div>
                    <div class="official-info">
                        <h3>Hon. Judge Sibusiso Nkambule</h3>
                        <span class="official-title">President of the Industrial Court</span>
                        <p>Appointed in 2018, Judge Nkambule has over 25 years of experience in labor law and industrial relations.</p>
                    </div>
                </div>
                
                <div class="official-card">
                    <div class="official-image">
                        <img src="assets/images/officials/judge-placeholder.jpg" alt="Judge Nomcebo Dlamini">
                    </div>
                    <div class="official-info">
                        <h3>Hon. Judge Nomcebo Dlamini</h3>
                        <span class="official-title">Industrial Court Judge</span>
                        <p>Judge Dlamini specializes in collective labor disputes and has authored several publications on employment law.</p>
                    </div>
                </div>
                
                <div class="official-card">
                    <div class="official-image">
                        <img src="assets/images/officials/judge-placeholder.jpg" alt="Judge Thulani Maseko">
                    </div>
                    <div class="official-info">
                        <h3>Hon. Judge Thulani Maseko</h3>
                        <span class="official-title">Industrial Court Judge</span>
                        <p>With a background in human rights law, Judge Maseko brings a rights-based approach to employment dispute resolution.</p>
                    </div>
                </div>
                
                <div class="official-card">
                    <div class="official-image">
                        <img src="assets/images/officials/judge-placeholder.jpg" alt="Assessor Thandi Shabangu">
                    </div>
                    <div class="official-info">
                        <h3>Mrs. Thandi Shabangu</h3>
                        <span class="official-title">Court Assessor (Employer Representative)</span>
                        <p>As an employer assessor, Mrs. Shabangu brings industry perspective to court deliberations.</p>
                    </div>
                </div>
                
                <div class="official-card">
                    <div class="official-image">
                        <img src="assets/images/officials/judge-placeholder.jpg" alt="Assessor Mandla Zwane">
                    </div>
                    <div class="official-info">
                        <h3>Mr. Mandla Zwane</h3>
                        <span class="official-title">Court Assessor (Employee Representative)</span>
                        <p>With a trade union background, Mr. Zwane provides worker perspective in court proceedings.</p>
                    </div>
                </div>
            </div>
            
            <div class="officials-navigation">
                <button class="prev-official" id="officialPrevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="officials-dots" id="officialsDots"></div>
                <button class="next-official" id="officialNextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="court-contact dark-gradient">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact the Industrial Court</h2>
                <div class="heading-line"></div>
                
                <div class="info-list">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Location</h3>
                            <p>Industrial Court Building<br>Mbhilibhi Street<br>Mbabane, Eswatini</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Phone</h3>
                            <p>+268 2404 2953<br>+268 2404 2954</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>industrialcourt@judiciary.org.sz<br>registry.ic@judiciary.org.sz</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Opening Hours</h3>
                            <p>Monday to Friday: 8:00 AM - 4:30 PM<br>Closed on weekends and public holidays</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="links-container">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14363.274342809156!2d31.12290565!3d-26.31625885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee8cf63f9aaaaa9%3A0xcc88c79c66e8a4e4!2sMbabane%2C%20Swaziland!5e0!3m2!1sen!2sus!4v1640887410193!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
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
            <p>Answers to common questions about the Industrial Court</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-accordion" id="faqAccordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of cases does the Industrial Court handle?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The Industrial Court primarily handles employment-related disputes including unfair dismissal claims, contract breaches, compensation claims, discrimination/harassment cases, industrial actions, and unfair labor practices. The court has specialized jurisdiction over matters arising from employer-employee relationships.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do I need a lawyer to represent me at the Industrial Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>While legal representation is not mandatory at the Industrial Court, it is often advisable, especially for complex cases. You have the right to represent yourself (self-representation), be represented by a lawyer, a trade union representative, or in some cases, by a colleague or friend. The court provides guides for self-represented litigants, but legal expertise can be valuable in presenting your case effectively.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does it take for a case to be resolved at the Industrial Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The duration varies depending on the complexity of the case, the court's caseload, and the cooperation of the parties involved. Simple matters might be resolved within 3-6 months, while more complex cases can take 12-18 months or longer. The court strives to resolve disputes efficiently, but thorough consideration of evidence and legal arguments requires adequate time.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the time limit for filing a case with the Industrial Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Generally, applications must be filed within 6 months from the date the dispute arose or the date of dismissal. However, different time limits may apply to specific types of cases. The court may extend these time limits in exceptional circumstances if you can demonstrate a good reason for the delay, but it's always best to file within the standard timeframe.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I appeal an Industrial Court decision?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, decisions of the Industrial Court can be appealed to the Industrial Court of Appeal. Appeals must be filed within 30 days of the judgment and must be based on specific grounds such as errors of law or fact. The Industrial Court of Appeal's decisions can be further appealed to the Supreme Court on matters of significant legal importance.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What costs are involved in bringing a case to the Industrial Court?</h3>
                        <div class="question-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Costs include filing fees (ranging from E250 to E1,000 depending on the case type), service fees, and potentially legal representation fees if you hire a lawyer. The court may waive filing fees for applicants who demonstrate financial hardship. Each party typically bears their own costs, but the court has discretion to order one party to pay the other's costs in certain circumstances.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-container">
            <div class="cta-content">
                <h2>Need Legal Assistance?</h2>
                <p>Contact the Legal Aid Clinic for free or subsidized legal representation for industrial court matters.</p>
                <div class="cta-buttons">
                    <a href="legal-aid.php" class="btn-primary">
                        <i class="fas fa-balance-scale"></i>
                        <span>Legal Aid Services</span>
                    </a>
                    <a href="contact.php" class="btn-outline">
                        <i class="fas fa-phone-alt"></i>
                        <span>Contact Us</span>
                    </a>
                </div>
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