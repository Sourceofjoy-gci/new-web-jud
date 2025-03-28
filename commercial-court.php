<?php
/**
 * Eswatini Judiciary Website - Commercial Court Page
 */

// Set the page title
$pageTitle = "Commercial Court - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/commercial-court.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/commercial-court.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="commercial-hero">
    <div class="hero-background">
        <div class="hero-bg-image"></div>
        <div class="hero-overlay"></div>
        <div class="hero-elements">
            <div class="floating-circle" id="floatingCircle1"></div>
            <div class="floating-circle" id="floatingCircle2"></div>
            <div class="floating-circle" id="floatingCircle3"></div>
            <div class="floating-line" id="floatingLine1"></div>
            <div class="floating-line" id="floatingLine2"></div>
            <div class="floating-line" id="floatingLine3"></div>
        </div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="court-badge">
                <div class="badge-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="badge-text">High Court Division</div>
            </div>
            <h1 class="fade-in">Commercial Court</h1>
            <p class="tagline fade-in-delay">Resolving Business Disputes with Expertise and Efficiency</p>
            <div class="hero-cta fade-in-delay-2">
                <a href="#case-filing" class="btn btn-primary">File a Commercial Case</a>
                <a href="#business-resources" class="btn btn-outline">Business Resources</a>
            </div>
        </div>
    </div>
    <div class="hero-bottom-graphic">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path d="M0,0 C240,95 480,100 720,80 C960,60 1200,90 1440,80 L1440,100 L0,100 Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Key Stats Section -->
<section class="key-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="stat-content">
                    <h3><span class="counter" data-target="2006">0</span></h3>
                    <p>Established</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-content">
                    <h3><span class="counter" data-target="350">0</span>+</h3>
                    <p>Cases Per Year</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="stat-content">
                    <h3><span class="counter" data-target="3">0</span></h3>
                    <p>Specialized Judges</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="stat-content">
                    <h3><span class="counter" data-target="120">0</span> Days</h3>
                    <p>Average Resolution Time</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Navigation -->
<section class="court-navigation" id="courtNavigation">
    <div class="container">
        <div class="navigation-container">
            <a href="#overview" class="nav-item active">
                <i class="fas fa-info-circle"></i>
                <span>Overview</span>
            </a>
            <a href="#jurisdiction" class="nav-item">
                <i class="fas fa-landmark"></i>
                <span>Jurisdiction</span>
            </a>
            <a href="#case-types" class="nav-item">
                <i class="fas fa-folder-open"></i>
                <span>Case Types</span>
            </a>
            <a href="#case-filing" class="nav-item">
                <i class="fas fa-file-signature"></i>
                <span>Filing Process</span>
            </a>
            <a href="#judges" class="nav-item">
                <i class="fas fa-user-tie"></i>
                <span>Judges</span>
            </a>
            <a href="#case-tracker" class="nav-item">
                <i class="fas fa-tasks"></i>
                <span>Case Tracker</span>
            </a>
            <a href="#business-resources" class="nav-item">
                <i class="fas fa-book"></i>
                <span>Resources</span>
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section id="overview" class="section overview-section">
    <div class="container">
        <div class="section-heading">
            <h2>About the Commercial Court</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="overview-content">
            <div class="overview-text-container">
                <div class="text-column">
                    <p class="lead-text">The Commercial Court is a specialized division of the High Court of Eswatini established to provide efficient resolution of business-related disputes.</p>
                    <p>Established in 2006, the Commercial Court serves as a dedicated forum for resolving complex commercial disputes. The court was created in recognition of the need for specialized judicial expertise in commercial matters and to enhance Eswatini's business environment through efficient dispute resolution.</p>
                    <p>By providing a specialized platform with streamlined procedures, the Commercial Court contributes to creating a more predictable business environment and strengthening investor confidence in Eswatini's justice system.</p>
                </div>
                
                <div class="overview-quote">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <blockquote>
                        The Commercial Court ensures that business disputes are resolved swiftly and efficiently by judges with specialized knowledge in commercial law, contributing to a favorable business environment in the Kingdom.
                    </blockquote>
                    <cite>— Hon. Justice Q. Mabuza, Principal Judge, Commercial Court</cite>
                </div>
            </div>
            
            <div class="overview-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Expedited Procedures</h3>
                    <p>Streamlined case management for faster resolution of business disputes</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Specialized Knowledge</h3>
                    <p>Judges with expertise in business, finance, and commercial law</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Alternative Dispute Resolution</h3>
                    <p>Option for mediation and settlement conferences</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3>International Standards</h3>
                    <p>Procedures aligned with global commercial litigation practices</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jurisdiction Section -->
<section id="jurisdiction" class="section jurisdiction-section section-alt">
    <div class="container">
        <div class="section-heading">
            <h2>Jurisdiction & Authority</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="jurisdiction-content">
            <div class="jurisdiction-diagram" id="jurisdictionDiagram">
                <div class="diagram-center">
                    <div class="center-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="center-text">Commercial Court</div>
                </div>
                <div class="diagram-connections">
                    <!-- Added via JavaScript -->
                </div>
                <div class="diagram-nodes">
                    <div class="jurisdiction-node" data-position="top-left">
                        <div class="node-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="node-text">Monetary Claims</div>
                    </div>
                    <div class="jurisdiction-node" data-position="top-right">
                        <div class="node-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="node-text">Corporate Disputes</div>
                    </div>
                    <div class="jurisdiction-node" data-position="right">
                        <div class="node-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div class="node-text">Contract Disputes</div>
                    </div>
                    <div class="jurisdiction-node" data-position="bottom-right">
                        <div class="node-icon">
                            <i class="fas fa-trademark"></i>
                        </div>
                        <div class="node-text">Intellectual Property</div>
                    </div>
                    <div class="jurisdiction-node" data-position="bottom-left">
                        <div class="node-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="node-text">Banking & Finance</div>
                    </div>
                    <div class="jurisdiction-node" data-position="left">
                        <div class="node-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="node-text">Trade & Commerce</div>
                    </div>
                </div>
            </div>
            
            <div class="jurisdiction-details">
                <div class="details-tabs">
                    <button class="tab-button active" data-tab="monetary">Monetary Claims</button>
                    <button class="tab-button" data-tab="corporate">Corporate Disputes</button>
                    <button class="tab-button" data-tab="contracts">Contract Disputes</button>
                    <button class="tab-button" data-tab="ip">Intellectual Property</button>
                    <button class="tab-button" data-tab="banking">Banking & Finance</button>
                    <button class="tab-button" data-tab="trade">Trade & Commerce</button>
                </div>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="monetary">
                        <h3>Monetary Claims</h3>
                        <p>The Commercial Court has jurisdiction over commercial disputes involving monetary claims exceeding E500,000.</p>
                        <ul class="jurisdiction-list">
                            <li>Commercial debt recovery</li>
                            <li>Commercial damages claims</li>
                            <li>Securities and investment disputes</li>
                            <li>Financial instrument disputes</li>
                            <li>Claims involving business assets</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="corporate">
                        <h3>Corporate Disputes</h3>
                        <p>The Commercial Court adjudicates disputes related to corporate governance and business entities.</p>
                        <ul class="jurisdiction-list">
                            <li>Shareholder disputes</li>
                            <li>Director liability claims</li>
                            <li>Corporate restructuring</li>
                            <li>Mergers and acquisitions disputes</li>
                            <li>Joint venture disagreements</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="contracts">
                        <h3>Contract Disputes</h3>
                        <p>The court handles disputes arising from commercial agreements and contracts between businesses.</p>
                        <ul class="jurisdiction-list">
                            <li>Breach of commercial contracts</li>
                            <li>Service agreement disputes</li>
                            <li>Supply contract disputes</li>
                            <li>Distribution agreement conflicts</li>
                            <li>Commercial lease disputes</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="ip">
                        <h3>Intellectual Property</h3>
                        <p>The Commercial Court has jurisdiction over intellectual property disputes with commercial implications.</p>
                        <ul class="jurisdiction-list">
                            <li>Trademark infringement cases</li>
                            <li>Copyright disputes</li>
                            <li>Patent litigation</li>
                            <li>Trade secret misappropriation</li>
                            <li>Licensing agreement disputes</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="banking">
                        <h3>Banking & Finance</h3>
                        <p>The court adjudicates disputes involving financial institutions and financial transactions.</p>
                        <ul class="jurisdiction-list">
                            <li>Banking disputes</li>
                            <li>Loan and credit facility disagreements</li>
                            <li>Insurance claims disputes</li>
                            <li>Guarantees and security enforcement</li>
                            <li>Investment disputes</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="trade">
                        <h3>Trade & Commerce</h3>
                        <p>The Commercial Court has jurisdiction over disputes related to trade activities and commercial transactions.</p>
                        <ul class="jurisdiction-list">
                            <li>Import/export disputes</li>
                            <li>International trade conflicts</li>
                            <li>Shipping and logistics disputes</li>
                            <li>Agency and distribution conflicts</li>
                            <li>Commercial landlord-tenant disputes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="jurisdiction-note">
            <div class="note-icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <p>The Commercial Court does not handle consumer disputes where one party is not acting in a business capacity, nor does it handle employment disputes which fall under the jurisdiction of the Industrial Court.</p>
        </div>
    </div>
</section>

<!-- Case Types Section -->
<section id="case-types" class="section case-types-section">
    <div class="container">
        <div class="section-heading">
            <h2>Commercial Case Categories</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="case-types-filter">
            <button class="filter-btn active" data-filter="all">All Cases</button>
            <button class="filter-btn" data-filter="high-value">High Value</button>
            <button class="filter-btn" data-filter="corporate">Corporate</button>
            <button class="filter-btn" data-filter="banking">Banking</button>
            <button class="filter-btn" data-filter="intellectual">Intellectual Property</button>
            <button class="filter-btn" data-filter="international">International</button>
        </div>
        
        <div class="case-types-grid">
            <div class="case-type-card" data-category="high-value corporate">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity high">High Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Shareholder Disputes</h3>
                    <p>Conflicts between shareholders or between shareholders and the company regarding governance, dividend policies, or shareholder rights.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">6-18 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Trial, Mediation</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Minority Shareholder Rights in Private Company Restructuring</li>
                        <li>Dividend Distribution Policies in Family-Owned Businesses</li>
                    </ul>
                </div>
            </div>
            
            <div class="case-type-card" data-category="high-value banking">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity medium">Medium Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Banking & Financial Disputes</h3>
                    <p>Disputes involving banking transactions, loans, securities, investments, and other financial instruments or services.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">4-10 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Summary Judgment, Trial</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Enforcement of Security Interests in Commercial Properties</li>
                        <li>Letter of Credit Disputes in International Transactions</li>
                    </ul>
                </div>
            </div>
            
            <div class="case-type-card" data-category="corporate">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity medium">Medium Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Contract Breaches</h3>
                    <p>Disputes arising from alleged breaches of commercial contracts, including supply agreements, service contracts, and distribution agreements.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">3-9 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Trial, Settlement Conference</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Supply Chain Disruption Disputes Due to Force Majeure</li>
                        <li>Service Level Agreement Breaches in IT Contracts</li>
                    </ul>
                </div>
            </div>
            
            <div class="case-type-card" data-category="intellectual">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity high">High Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Intellectual Property Disputes</h3>
                    <p>Cases involving trademarks, patents, copyrights, trade secrets, and other intellectual property rights in a commercial context.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">8-24 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Trial, Expert Determination</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Trademark Infringement in Digital Marketing</li>
                        <li>Commercial Copyright Disputes in Software Development</li>
                    </ul>
                </div>
            </div>
            
            <div class="case-type-card" data-category="international">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity high">High Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>International Trade Disputes</h3>
                    <p>Conflicts arising from international commercial transactions, import/export activities, and cross-border business relationships.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">6-18 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Trial, International Arbitration</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Cross-Border Distribution Agreement Disputes</li>
                        <li>International Joint Venture Conflicts in Manufacturing</li>
                    </ul>
                </div>
            </div>
            
            <div class="case-type-card" data-category="high-value">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="complexity-meter">
                        <span class="complexity medium">Medium Complexity</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Real Estate & Construction</h3>
                    <p>Commercial disputes related to property development, construction contracts, commercial leases, and property investments.</p>
                    <div class="case-details">
                        <div class="detail-item">
                            <span class="detail-label">Typical Duration:</span>
                            <span class="detail-value">5-12 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resolution Method:</span>
                            <span class="detail-value">Trial, Expert Determination</span>
                        </div>
                    </div>
                </div>
                <div class="case-examples">
                    <h4>Recent Examples</h4>
                    <ul>
                        <li>Commercial Construction Delay and Defect Claims</li>
                        <li>Shopping Mall Development Financing Disputes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Filing Process -->
<section id="case-filing" class="section filing-section section-alt">
    <div class="container">
        <div class="section-heading">
            <h2>Commercial Case Filing Process</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="filing-process">
            <div class="process-diagram">
                <div class="process-track">
                    <div class="process-progress" id="processProgress"></div>
                </div>
                
                <div class="process-steps">
                    <div class="process-step active" id="step1">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Case Evaluation</h3>
                            <p>Determine if your case falls within the Commercial Court's jurisdiction and meets the minimum claim threshold of E500,000.</p>
                            <div class="step-details">
                                <h4>Requirements:</h4>
                                <ul>
                                    <li>Commercial nature of dispute</li>
                                    <li>Business relationship between parties</li>
                                    <li>Minimum value threshold verification</li>
                                </ul>
                                <div class="detail-note">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Consult with a commercial attorney to determine jurisdiction and strategy.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step" id="step2">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Document Preparation</h3>
                            <p>Prepare and compile all required documents for filing a commercial case.</p>
                            <div class="step-details">
                                <h4>Required Documents:</h4>
                                <ul>
                                    <li>Commercial Court Summons (Form C-1)</li>
                                    <li>Particulars of Claim (detailed)</li>
                                    <li>Supporting documentation (contracts, correspondence, etc.)</li>
                                    <li>Commercial Case Information Sheet</li>
                                    <li>List of potential witnesses</li>
                                </ul>
                                <div class="detail-link">
                                    <a href="commercial-court-forms.php" class="link-with-icon">
                                        <i class="fas fa-file-download"></i>
                                        <span>Download Required Forms</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step" id="step3">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Payment of Fees</h3>
                            <p>Pay the required filing fees based on the value of your commercial claim.</p>
                            <div class="step-details">
                                <h4>Fee Structure:</h4>
                                <div class="fee-table">
                                    <div class="fee-row header">
                                        <div class="fee-cell">Claim Value (E)</div>
                                        <div class="fee-cell">Filing Fee (E)</div>
                                    </div>
                                    <div class="fee-row">
                                        <div class="fee-cell">500,000 - 1,000,000</div>
                                        <div class="fee-cell">5,000</div>
                                    </div>
                                    <div class="fee-row">
                                        <div class="fee-cell">1,000,001 - 5,000,000</div>
                                        <div class="fee-cell">10,000</div>
                                    </div>
                                    <div class="fee-row">
                                        <div class="fee-cell">5,000,001 - 10,000,000</div>
                                        <div class="fee-cell">15,000</div>
                                    </div>
                                    <div class="fee-row">
                                        <div class="fee-cell">Above 10,000,000</div>
                                        <div class="fee-cell">20,000</div>
                                    </div>
                                </div>
                                <div class="detail-note">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Additional fees may apply for specific applications or procedures.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step" id="step4">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Case Filing</h3>
                            <p>Submit your completed documents to the Commercial Court Registry.</p>
                            <div class="step-details">
                                <h4>Filing Location:</h4>
                                <div class="location-details">
                                    <div class="detail-row">
                                        <span class="detail-label">Address:</span>
                                        <span class="detail-text">Commercial Court Registry, High Court Building, Mbabane</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Hours:</span>
                                        <span class="detail-text">Monday to Friday, 8:30 AM - 3:30 PM</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Contact:</span>
                                        <span class="detail-text">+268 2404 3500</span>
                                    </div>
                                </div>
                                <div class="detail-note">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Bring original documents plus 3 copies for filing.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step" id="step5">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Case Service</h3>
                            <p>Arrange for proper service of the court documents on the opposing party.</p>
                            <div class="step-details">
                                <h4>Service Options:</h4>
                                <ul>
                                    <li>Sheriff Service (official court service)</li>
                                    <li>Courier Service (with proof of delivery)</li>
                                    <li>Registered Mail (with acknowledgment of receipt)</li>
                                </ul>
                                <div class="detail-note">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span>Proof of service must be filed with the Court within 7 days of service.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="process-step" id="step6">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Case Management Conference</h3>
                            <p>Attend the initial case management conference with the assigned Commercial Court judge.</p>
                            <div class="step-details">
                                <h4>Conference Agenda:</h4>
                                <ul>
                                    <li>Identification of key issues</li>
                                    <li>Setting of case timeline</li>
                                    <li>Exploration of settlement possibilities</li>
                                    <li>Scheduling of pre-trial events</li>
                                    <li>Determination of necessary expert witnesses</li>
                                </ul>
                                <div class="detail-note">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Both parties' legal representatives must attend with full authority.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="process-navigation">
                    <button class="process-btn prev" id="prevStep" disabled>
                        <i class="fas fa-arrow-left"></i>
                        <span>Previous</span>
                    </button>
                    <div class="step-dots">
                        <span class="dot active" data-step="1"></span>
                        <span class="dot" data-step="2"></span>
                        <span class="dot" data-step="3"></span>
                        <span class="dot" data-step="4"></span>
                        <span class="dot" data-step="5"></span>
                        <span class="dot" data-step="6"></span>
                    </div>
                    <button class="process-btn next" id="nextStep">
                        <span>Next</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="filing-assistance">
            <div class="assistance-heading">
                <h3>Need Assistance with Filing?</h3>
                <p>Our commercial court staff can provide procedural guidance for filing your case.</p>
            </div>
            <div class="assistance-options">
                <a href="tel:+2682404 3500" class="assistance-option">
                    <div class="option-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="option-text">Call Registry</div>
                </a>
                <a href="commercial-filing-guide.pdf" class="assistance-option">
                    <div class="option-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div class="option-text">Filing Guide</div>
                </a>
                <a href="mailto:commercial.registry@judiciary.org.sz" class="assistance-option">
                    <div class="option-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="option-text">Email Registry</div>
                </a>
                <a href="commercial-court-faqs.php" class="assistance-option">
                    <div class="option-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="option-text">FAQs</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Judges Section -->
<section id="judges" class="section judges-section">
    <div class="container">
        <div class="section-heading">
            <h2>Commercial Court Judges</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="judges-intro">
            <p>The Commercial Court benefits from judges with specialized expertise in business law, finance, and commercial litigation. These judges bring a wealth of experience from private practice, academia, and the judiciary to ensure effective resolution of complex business disputes.</p>
        </div>
        
        <div class="judges-carousel-container">
            <div class="carousel-controls">
                <button class="control-btn prev" id="judgesPrev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="control-btn next" id="judgesNext">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="judges-carousel" id="judgesCarousel">
                <div class="judge-card principal">
                    <div class="judge-image">
                        <img src="assets/images/judges/commercial-principal-judge.jpg" alt="Principal Judge">
                        <div class="judge-tag">Principal Judge</div>
                    </div>
                    <div class="judge-details">
                        <h3>Hon. Justice Q. Mabuza</h3>
                        <div class="judge-title">Principal Judge, Commercial Court</div>
                        <div class="judge-credentials">
                            <div class="credential">
                                <i class="fas fa-university"></i>
                                <span>LLB, MBA (University of Pretoria)</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-gavel"></i>
                                <span>Appointed: 2018</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-briefcase"></i>
                                <span>Former Banking Law Specialist</span>
                            </div>
                        </div>
                        <p class="judge-bio">Justice Mabuza brings over 20 years of experience in commercial law to the bench. Before her judicial appointment, she was a senior partner at a leading law firm specializing in banking and finance law. She has published extensively on commercial jurisprudence in Eswatini.</p>
                        <div class="judge-expertise">
                            <h4>Areas of Expertise:</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Banking Law</span>
                                <span class="expertise-tag">Corporate Governance</span>
                                <span class="expertise-tag">Financial Regulations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="judge-card">
                    <div class="judge-image">
                        <img src="assets/images/judges/commercial-judge-2.jpg" alt="Commercial Court Judge">
                    </div>
                    <div class="judge-details">
                        <h3>Hon. Justice T. Dlamini</h3>
                        <div class="judge-title">Justice, Commercial Court</div>
                        <div class="judge-credentials">
                            <div class="credential">
                                <i class="fas fa-university"></i>
                                <span>LLB (UNISWA), LLM (Wits University)</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-gavel"></i>
                                <span>Appointed: 2019</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-briefcase"></i>
                                <span>Former Corporate Counsel</span>
                            </div>
                        </div>
                        <p class="judge-bio">Justice Dlamini served as corporate counsel for major enterprises in Eswatini before joining the bench. His experience in corporate restructuring and international business transactions brings valuable insight to complex commercial disputes.</p>
                        <div class="judge-expertise">
                            <h4>Areas of Expertise:</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">International Trade</span>
                                <span class="expertise-tag">Contract Law</span>
                                <span class="expertise-tag">Corporate Restructuring</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="judge-card">
                    <div class="judge-image">
                        <img src="assets/images/judges/commercial-judge-3.jpg" alt="Commercial Court Judge">
                    </div>
                    <div class="judge-details">
                        <h3>Hon. Justice S. Nkambule</h3>
                        <div class="judge-title">Justice, Commercial Court</div>
                        <div class="judge-credentials">
                            <div class="credential">
                                <i class="fas fa-university"></i>
                                <span>LLB (UNISWA), LLM (UCT), Dip. Tax Law</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-gavel"></i>
                                <span>Appointed: 2020</span>
                            </div>
                            <div class="credential">
                                <i class="fas fa-briefcase"></i>
                                <span>Former Tax Law Specialist</span>
                            </div>
                        </div>
                        <p class="judge-bio">With a background in taxation and business law, Justice Nkambule specializes in cases involving complex financial structures and corporate taxation. Before joining the judiciary, she practiced at a leading accounting and legal consultancy firm.</p>
                        <div class="judge-expertise">
                            <h4>Areas of Expertise:</h4>
                            <div class="expertise-tags">
                                <span class="expertise-tag">Tax Law</span>
                                <span class="expertise-tag">Company Law</span>
                                <span class="expertise-tag">Financial Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="carousel-indicators" id="judgesIndicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
            </div>
        </div>
    </div>
</section>

<!-- Case Tracker Dashboard -->
<section id="case-tracker" class="section tracker-section section-alt">
    <div class="container">
        <div class="section-heading">
            <h2>Commercial Court Performance</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="performance-dashboard">
            <div class="dashboard-nav">
                <button class="dashboard-nav-btn active" data-view="caseload">Caseload</button>
                <button class="dashboard-nav-btn" data-view="resolution">Resolution Time</button>
                <button class="dashboard-nav-btn" data-view="categories">Case Categories</button>
                <div class="year-selector">
                    <label for="yearSelect">Year:</label>
                    <select id="yearSelect">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            
            <div class="dashboard-view active" id="caseloadView">
                <h3>Annual Caseload Statistics</h3>
                <div class="chart-wrapper">
                    <canvas id="caseloadChart"></canvas>
                </div>
                <div class="chart-insights">
                    <div class="insight-item">
                        <div class="insight-icon positive">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="insight-content">
                            <h4>95% Case Clearance Rate</h4>
                            <p>The Commercial Court maintains a high case clearance ratio, resolving 95% of filed cases within 12 months.</p>
                        </div>
                    </div>
                    <div class="insight-item">
                        <div class="insight-icon neutral">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="insight-content">
                            <h4>15% Annual Increase in Filings</h4>
                            <p>Commercial case filings have increased by 15% annually, reflecting growing business activity and confidence in the court.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-view" id="resolutionView">
                <h3>Case Resolution Timeframes</h3>
                <div class="chart-wrapper">
                    <canvas id="resolutionChart"></canvas>
                </div>
                <div class="chart-insights">
                    <div class="insight-item">
                        <div class="insight-icon positive">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="insight-content">
                            <h4>120 Days Average Resolution Time</h4>
                            <p>The average time from filing to disposition has decreased from 180 days in 2020 to 120 days in 2024.</p>
                        </div>
                    </div>
                    <div class="insight-item">
                        <div class="insight-icon positive">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="insight-content">
                            <h4>40% Pre-Trial Settlement Rate</h4>
                            <p>Enhanced case management processes have increased pre-trial settlements from 25% to 40% over the past three years.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-view" id="categoriesView">
                <h3>Case Categories Distribution</h3>
                <div class="chart-wrapper">
                    <canvas id="categoriesChart"></canvas>
                </div>
                <div class="chart-insights">
                    <div class="insight-item">
                        <div class="insight-icon neutral">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="insight-content">
                            <h4>Banking Cases Leading Category</h4>
                            <p>Banking and financial services disputes represent 35% of the Commercial Court caseload.</p>
                        </div>
                    </div>
                    <div class="insight-item">
                        <div class="insight-icon positive">
                            <i class="fas fa-globe-africa"></i>
                        </div>
                        <div class="insight-content">
                            <h4>Growing International Cases</h4>
                            <p>International trade disputes have increased from 10% to 18% of total cases in the past two years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="case-calculator">
            <h3>Commercial Case Duration Estimator</h3>
            <p>Use this tool to estimate the potential duration of your commercial case based on its characteristics.</p>
            
            <div class="calculator-form">
                <div class="form-group">
                    <label for="caseType">Case Type:</label>
                    <select id="caseType">
                        <option value="">Select Case Type</option>
                        <option value="contract">Contract Dispute</option>
                        <option value="corporate">Corporate/Shareholder Dispute</option>
                        <option value="banking">Banking/Financial Dispute</option>
                        <option value="ip">Intellectual Property Dispute</option>
                        <option value="international">International Trade Dispute</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="claimValue">Claim Value (E):</label>
                    <input type="number" id="claimValue" placeholder="Enter claim amount" min="500000">
                </div>
                
                <div class="form-group">
                    <label for="complexity">Case Complexity:</label>
                    <select id="complexity">
                        <option value="">Select Complexity</option>
                        <option value="low">Low - Straightforward issues</option>
                        <option value="medium">Medium - Multiple issues</option>
                        <option value="high">High - Complex issues, multiple parties</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Potential for Settlement:</label>
                    <div class="radio-options">
                        <label class="radio-option">
                            <input type="radio" name="settlement" value="high">
                            <span class="radio-label">High</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="settlement" value="medium">
                            <span class="radio-label">Medium</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="settlement" value="low">
                            <span class="radio-label">Low</span>
                        </label>
                    </div>
                </div>
                
                <button type="button" id="calculateBtn" class="btn btn-primary">Calculate Estimate</button>
            </div>
            
            <div class="calculator-result" id="calculatorResult">
                <div class="result-heading">
                    <i class="fas fa-clock"></i>
                    <h4>Estimated Case Duration</h4>
                </div>
                <div class="result-time">
                    <span class="time-range" id="timeRange">--</span>
                    <span class="time-unit">months</span>
                </div>
                <div class="result-details" id="resultDetails">
                    <!-- Details will be populated by JavaScript -->
                </div>
                <div class="result-disclaimer">
                    <i class="fas fa-info-circle"></i>
                    <p>This is an estimate based on historical data. Actual duration may vary depending on specific case circumstances.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Resources Section -->
<section id="business-resources" class="section resources-section">
    <div class="container">
        <div class="section-heading">
            <h2>Business & Legal Resources</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="resources-intro">
            <p>Access practical resources to help navigate commercial litigation and understand business law in Eswatini. These tools are designed to assist businesses, legal practitioners, and litigants in commercial disputes.</p>
        </div>
        
        <div class="resources-grid">
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Commercial Court Rules</h3>
                <p>Official rules governing procedures and processes in the Commercial Court of Eswatini.</p>
                <a href="downloads/commercial-court-rules.pdf" class="card-link">
                    <i class="fas fa-download"></i>
                    <span>Download PDF</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Practice Directions</h3>
                <p>Directives and guidelines issued by the Commercial Court to standardize procedures.</p>
                <a href="commercial-practice-directions.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>View Directions</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3>Court Forms</h3>
                <p>Standard forms required for various commercial court processes and applications.</p>
                <a href="commercial-court-forms.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Access Forms</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Case Precedents</h3>
                <p>Database of significant commercial judgments establishing legal precedents in Eswatini.</p>
                <a href="commercial-judgments.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Search Database</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3>Business Law Guide</h3>
                <p>Comprehensive guide to business law principles and commercial regulations in Eswatini.</p>
                <a href="downloads/business-law-guide.pdf" class="card-link">
                    <i class="fas fa-download"></i>
                    <span>Download Guide</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Court Calendar</h3>
                <p>Commercial Court schedule showing upcoming hearings, trials, and administrative sessions.</p>
                <a href="commercial-court-calendar.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>View Calendar</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Business Law Workshops</h3>
                <p>Information about upcoming workshops and seminars on commercial law topics.</p>
                <a href="business-workshops.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Event Schedule</span>
                </a>
            </div>
            
            <div class="resource-card">
                <div class="card-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Legal Directory</h3>
                <p>Directory of attorneys and legal practitioners specializing in commercial law.</p>
                <a href="commercial-law-directory.php" class="card-link">
                    <i class="fas fa-external-link-alt"></i>
                    <span>View Directory</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section section-alt">
    <div class="container">
        <div class="section-heading">
            <h2>Commercial Court FAQs</h2>
            <div class="heading-underline"></div>
        </div>
        
        <div class="faq-container">
            <div class="faq-accordion" id="faqAccordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of cases can be filed in the Commercial Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The Commercial Court handles disputes of a business nature where both parties are acting in a business capacity. This includes contract disputes, banking and financial matters, corporate governance issues, business property disputes, intellectual property claims in a commercial context, and international trade conflicts. Cases must generally have a minimum value of E500,000 to qualify for the Commercial Court's jurisdiction.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does it typically take to resolve a commercial case?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The Commercial Court strives to resolve cases efficiently, with the average case taking approximately 4-6 months from filing to disposition. More complex cases involving multiple parties or requiring expert testimony may take 9-12 months. The court employs active case management to ensure cases progress according to established timelines. Approximately 40% of cases are resolved through pre-trial settlements, which can significantly reduce the time to resolution.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the fees for filing a commercial case?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Filing fees for commercial cases are based on the value of the claim:</p>
                        <ul>
                            <li>Claims between E500,000 - E1,000,000: E5,000</li>
                            <li>Claims between E1,000,001 - E5,000,000: E10,000</li>
                            <li>Claims between E5,000,001 - E10,000,000: E15,000</li>
                            <li>Claims above E10,000,000: E20,000</li>
                        </ul>
                        <p>Additional fees may apply for specific applications, motions, or procedural steps. Fee waivers are generally not available for commercial cases given their business nature, but payment plans can be arranged in certain circumstances.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do I need a lawyer to represent me in the Commercial Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>While legal representation is not mandatory, it is highly recommended for commercial cases due to their complexity. Companies and corporations must be represented by legal counsel as they cannot appear in person. Individual business owners can technically represent themselves, but given the complex legal and procedural aspects of commercial litigation, professional legal representation significantly improves the likelihood of a favorable outcome.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can the Commercial Court order mediation or other alternative dispute resolution?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, the Commercial Court actively encourages alternative dispute resolution (ADR). During the initial case management conference, the judge will explore whether the case is suitable for mediation, arbitration, or settlement discussions. The court can order parties to attend mediation or a settlement conference before proceeding to trial. This approach has resulted in approximately 40% of cases being resolved before trial, saving time and costs for the involved businesses.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How are judges assigned to commercial cases?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Commercial Court judges are assigned to cases based on a combination of factors including their specific expertise, current caseload, and the nature of the dispute. Each case is assigned to a single judge who will oversee the entire process from the initial case management conference through to final judgment. This "single judge" approach ensures consistency and efficiency throughout the litigation process.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-more">
                <a href="commercial-court-faqs.php" class="btn btn-secondary">
                    <span>View All FAQs</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Contact the Commercial Court</h2>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Address</h3>
                            <p>Commercial Court Division<br>High Court Building<br>Mbabane, Eswatini</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Phone</h3>
                            <p>Registry: +268 2404 3500<br>Registrar: +268 2404 3501</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>commercial.registry@judiciary.org.sz</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Hours</h3>
                            <p>Monday - Friday: 8:30 AM - 4:00 PM<br>Closed on weekends and public holidays</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
            
            <div class="contact-map">
                <div class="map-container" id="commercialCourtMap">
                    <img src="assets/images/commercial-court-map.jpg" alt="Commercial Court Location" class="static-map">
                </div>
                <div class="map-actions">
                    <a href="https://maps.google.com/?q=Commercial+Court,Mbabane,Eswatini" target="_blank" class="map-btn">
                        <i class="fas fa-directions"></i>
                        <span>Get Directions</span>
                    </a>
                    <button class="map-btn" id="shareLocationBtn">
                        <i class="fas fa-share-alt"></i>
                        <span>Share Location</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content">
            <h2>Expert Resolution for Business Disputes</h2>
            <p>The Commercial Court is committed to providing efficient, expert resolution of business disputes to support Eswatini's economic growth and business environment.</p>
            <div class="cta-buttons">
                <a href="#case-filing" class="btn btn-primary">File a Case</a>
                <a href="commercial-court-schedule.php" class="btn btn-outline">Court Schedule</a>
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