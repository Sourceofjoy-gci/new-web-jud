<?php
/**
 * Eswatini Judiciary Website - Magistrate Courts Page
 */

// Set the page title
$pageTitle = "Magistrate Courts - Judiciary of Eswatini";

// Include page-specific styles
$pageStyles = [
    'assets/css/magistrate-courts.css'
];

// Include page-specific scripts
$pageScripts = [
    'assets/js/magistrate-courts.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="magistrate-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">Magistrate Courts</h1>
            <p class="tagline reveal-text">The cornerstone of justice in your community</p>
            <div class="hero-stats reveal-fade">
                <div class="stat-item">
                    <div class="stat-number">7</div>
                    <div class="stat-label">Locations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Magistrates</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">90%</div>
                    <div class="stat-label">Case Resolution</div>
                </div>
            </div>
            <div class="hero-actions reveal-fade">
                <a href="#court-finder" class="btn-primary">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Find Your Court</span>
                </a>
                <a href="#jurisdiction" class="btn-outline">
                    <i class="fas fa-gavel"></i>
                    <span>Jurisdiction & Services</span>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- Overview Section -->
<section class="courts-overview dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>About Magistrate Courts</h2>
            <div class="heading-line centered"></div>
            <p>Magistrate Courts serve as the primary courts of first instance in Eswatini, handling the majority of legal matters and ensuring accessible justice for all citizens.</p>
        </div>
        
        <div class="overview-container">
            <div class="overview-video">
                <div class="video-wrapper">
                    <div class="video-placeholder">
                        <i class="fas fa-play-circle"></i>
                        <span>Introduction to Magistrate Courts</span>
                    </div>
                </div>
            </div>
            
            <div class="overview-content">
                <div class="content-box">
                    <h3>The Gateway to Justice</h3>
                    <p>Magistrate Courts handle approximately 80% of all cases in Eswatini's legal system. These courts are strategically located throughout the country to ensure citizens have convenient access to justice in their communities.</p>
                    
                    <div class="court-levels">
                        <div class="level-item">
                            <div class="level-icon">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <div class="level-content">
                                <h4>Principal Magistrate Courts</h4>
                                <p>Located in major urban centers, these courts handle more complex cases and have wider jurisdiction.</p>
                            </div>
                        </div>
                        
                        <div class="level-item">
                            <div class="level-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="level-content">
                                <h4>Senior Magistrate Courts</h4>
                                <p>Handle a broad range of civil and criminal matters with moderate complexity and monetary value.</p>
                            </div>
                        </div>
                        
                        <div class="level-item">
                            <div class="level-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="level-content">
                                <h4>District Magistrate Courts</h4>
                                <p>Provide access to justice in smaller communities, handling less complex cases and minor offenses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Finder Section -->
<section id="court-finder" class="court-finder">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Find Your Nearest Court</h2>
            <div class="heading-line centered"></div>
            <p>Locate the Magistrate Court serving your community through our interactive map and directory.</p>
        </div>
        
        <div class="finder-tabs">
            <div class="tabs-nav">
                <button class="tab active" data-tab="map-view">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>Map View</span>
                </button>
                <button class="tab" data-tab="list-view">
                    <i class="fas fa-list"></i>
                    <span>List View</span>
                </button>
            </div>
            
            <div class="tabs-content">
                <div class="tab-content active" id="map-view">
                    <div class="map-container">
                        <div class="map-filters">
                            <div class="filter-group">
                                <label>Court Type</label>
                                <div class="filter-options">
                                    <label class="filter-option">
                                        <input type="checkbox" value="all" checked>
                                        <span>All</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="principal">
                                        <span>Principal</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="senior">
                                        <span>Senior</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="district">
                                        <span>District</span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="filter-group">
                                <label>Region</label>
                                <div class="filter-options">
                                    <label class="filter-option">
                                        <input type="checkbox" value="all" checked>
                                        <span>All Regions</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="hhohho">
                                        <span>Hhohho</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="manzini">
                                        <span>Manzini</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="lubombo">
                                        <span>Lubombo</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="shiselweni">
                                        <span>Shiselweni</span>
                                    </label>
                                </div>
                            </div>
                            
                            <button class="btn-locate-me">
                                <i class="fas fa-crosshairs"></i>
                                <span>Find Nearest Court</span>
                            </button>
                        </div>
                        
                        <div class="interactive-map" id="courtsMap">
                            <!-- Map will be inserted here via JavaScript -->
                            <div class="map-loading">
                                <div class="spinner"></div>
                                <span>Loading map...</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="list-view">
                    <div class="courts-list-container">
                        <div class="list-filters">
                            <div class="search-box">
                                <input type="text" id="courtSearch" placeholder="Search by name, location, or services...">
                                <button class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            
                            <div class="sort-options">
                                <label>Sort by:</label>
                                <select id="sortCourts">
                                    <option value="name">Name (A-Z)</option>
                                    <option value="type">Court Type</option>
                                    <option value="region">Region</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="courts-grid" id="courtsGrid">
                            <!-- Court cards will be populated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Jurisdiction Section -->
<section id="jurisdiction" class="jurisdiction-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Jurisdiction & Services</h2>
            <div class="heading-line centered"></div>
            <p>Understand the types of cases handled by Magistrate Courts and the services they provide.</p>
        </div>
        
        <div class="jurisdiction-container">
            <div class="jurisdiction-tabs">
                <button class="j-tab active" data-tab="civil">
                    <i class="fas fa-file-contract"></i>
                    <span>Civil Jurisdiction</span>
                </button>
                <button class="j-tab" data-tab="criminal">
                    <i class="fas fa-gavel"></i>
                    <span>Criminal Jurisdiction</span>
                </button>
                <button class="j-tab" data-tab="special">
                    <i class="fas fa-balance-scale"></i>
                    <span>Special Proceedings</span>
                </button>
                <button class="j-tab" data-tab="services">
                    <i class="fas fa-concierge-bell"></i>
                    <span>Court Services</span>
                </button>
            </div>
            
            <div class="jurisdiction-content">
                <div class="j-content active" id="civil">
                    <h3>Civil Jurisdiction</h3>
                    <p>Magistrate Courts have jurisdiction to hear and determine civil cases with varying monetary limits based on the court's level:</p>
                    
                    <div class="jurisdiction-cards">
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>Principal Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Up to E100,000</p>
                                <ul class="case-types">
                                    <li>Contract disputes</li>
                                    <li>Debt collection</li>
                                    <li>Property damage claims</li>
                                    <li>Personal injury (limited)</li>
                                    <li>Landlord-tenant disputes</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>Senior Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Up to E50,000</p>
                                <ul class="case-types">
                                    <li>Contract disputes</li>
                                    <li>Debt collection</li>
                                    <li>Property damage claims</li>
                                    <li>Landlord-tenant disputes</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>District Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Up to E20,000</p>
                                <ul class="case-types">
                                    <li>Minor contract disputes</li>
                                    <li>Small debt collection</li>
                                    <li>Minor property damage</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="exclusions">
                        <h4>Matters Excluded from Magistrate Court Jurisdiction</h4>
                        <ul>
                            <li>Divorce and matrimonial property division</li>
                            <li>Constitutional matters</li>
                            <li>Custody of children (except in limited circumstances)</li>
                            <li>Claims against the government exceeding E20,000</li>
                            <li>Title to land (except in limited circumstances)</li>
                        </ul>
                    </div>
                </div>
                
                <div class="j-content" id="criminal">
                    <h3>Criminal Jurisdiction</h3>
                    <p>Magistrate Courts handle criminal cases with varying sentencing powers based on the court's level:</p>
                    
                    <div class="jurisdiction-cards">
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>Principal Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Imprisonment up to 10 years</p>
                                <p class="limit">Fines up to E50,000</p>
                                <ul class="case-types">
                                    <li>Theft and fraud (below certain thresholds)</li>
                                    <li>Assault (including some cases of GBH)</li>
                                    <li>Traffic offenses</li>
                                    <li>Public order offenses</li>
                                    <li>Domestic violence cases</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>Senior Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Imprisonment up to 7 years</p>
                                <p class="limit">Fines up to E30,000</p>
                                <ul class="case-types">
                                    <li>Minor theft and fraud</li>
                                    <li>Common assault</li>
                                    <li>Traffic offenses</li>
                                    <li>Public order offenses</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="j-card">
                            <div class="j-card-header">
                                <h4>District Magistrate</h4>
                                <div class="j-card-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                            </div>
                            <div class="j-card-content">
                                <p class="limit">Imprisonment up to 3 years</p>
                                <p class="limit">Fines up to E10,000</p>
                                <ul class="case-types">
                                    <li>Petty theft</li>
                                    <li>Minor assaults</li>
                                    <li>Traffic violations</li>
                                    <li>By-law infractions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="exclusions">
                        <h4>Serious Crimes Handled by the High Court</h4>
                        <ul>
                            <li>Murder and attempted murder</li>
                            <li>Rape and sexual offenses</li>
                            <li>Robbery with aggravating circumstances</li>
                            <li>Treason</li>
                            <li>Major fraud and corruption</li>
                        </ul>
                    </div>
                </div>
                
                <div class="j-content" id="special">
                    <h3>Special Proceedings</h3>
                    <p>Magistrate Courts handle several specialized proceedings beyond standard civil and criminal matters:</p>
                    
                    <div class="special-proceedings">
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Protection Orders</h4>
                                <p>Magistrate Courts can issue protection orders in cases of domestic violence, harassment, and stalking to protect victims from further harm.</p>
                                <a href="#" class="read-more">Learn more about protection orders</a>
                            </div>
                        </div>
                        
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Maintenance Proceedings</h4>
                                <p>Courts handle applications for child maintenance and enforce maintenance orders to ensure children receive financial support.</p>
                                <a href="#" class="read-more">Learn more about maintenance proceedings</a>
                            </div>
                        </div>
                        
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Eviction Proceedings</h4>
                                <p>Landlords can apply for eviction orders, which the court will grant only after ensuring legal requirements are met and tenants' rights protected.</p>
                                <a href="#" class="read-more">Learn more about eviction proceedings</a>
                            </div>
                        </div>
                        
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Small Claims</h4>
                                <p>Some Magistrate Courts have a Small Claims division that handles minor civil disputes through simplified procedures.</p>
                                <a href="small-claims-court.php" class="read-more">Learn more about Small Claims</a>
                            </div>
                        </div>
                        
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Traffic Offenses</h4>
                                <p>Dedicated traffic courts handle various traffic violations, from speeding to driving under the influence cases.</p>
                                <a href="#" class="read-more">Learn more about traffic courts</a>
                            </div>
                        </div>
                        
                        <div class="proc-item">
                            <div class="proc-icon">
                                <i class="fas fa-balance-scale-right"></i>
                            </div>
                            <div class="proc-content">
                                <h4>Preliminary Inquiries</h4>
                                <p>For serious criminal cases that will be tried in the High Court, Magistrate Courts conduct preliminary inquiries to determine if there's sufficient evidence.</p>
                                <a href="#" class="read-more">Learn more about preliminary inquiries</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="j-content" id="services">
                    <h3>Court Services</h3>
                    <p>Magistrate Courts provide various services to assist the public with legal matters and administrative processes:</p>
                    
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h4>Document Commissioning</h4>
                            <p>Magistrates serve as commissioners of oaths who can certify the authenticity of documents and witness affidavits.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h4>Records Search</h4>
                            <p>The public can request searches of court records for cases, judgments, and orders issued by the court.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-copy"></i>
                            </div>
                            <h4>Certified Copies</h4>
                            <p>The court can provide certified copies of court orders, judgments, and other official court documents.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h4>Fine Payments</h4>
                            <p>Payment facilities for court-imposed fines, penalties, and other financial obligations.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <h4>Bail Applications</h4>
                            <p>Processing of bail applications and related documentation for accused persons.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h4>Case Filing</h4>
                            <p>Facilities for filing new cases, including guidance on required forms and procedures.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h4>Case Scheduling</h4>
                            <p>Scheduling and management of court appearances, trials, and hearings.</p>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h4>Legal Assistance Referrals</h4>
                            <p>Information and referrals to legal aid providers for those who cannot afford legal representation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Filing Wizard -->
<section class="case-wizard">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Case Filing Wizard</h2>
            <div class="heading-line centered"></div>
            <p>Determine where and how to file your case with our interactive filing assistant.</p>
        </div>
        
        <div class="wizard-container">
            <div class="wizard-progress">
                <div class="progress-bar">
                    <div class="progress-fill" id="wizardProgress"></div>
                </div>
                <div class="step-indicators">
                    <div class="step active" data-step="1">
                        <div class="step-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <span class="step-label">Case Type</span>
                    </div>
                    <div class="step" data-step="2">
                        <div class="step-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <span class="step-label">Value</span>
                    </div>
                    <div class="step" data-step="3">
                        <div class="step-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span class="step-label">Location</span>
                    </div>
                    <div class="step" data-step="4">
                        <div class="step-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <span class="step-label">Result</span>
                    </div>
                </div>
            </div>
            
            <div class="wizard-content">
                <!-- Step 1: Case Type -->
                <div class="wizard-step active" id="step1">
                    <h3>What type of case do you want to file?</h3>
                    <p>Select the category that best describes your legal matter.</p>
                    
                    <div class="case-type-options">
                        <label class="case-option">
                            <input type="radio" name="caseType" value="civil">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Civil Case</h4>
                                    <p>Disputes between individuals or organizations, including contract disputes, property damage, debt collection, etc.</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="case-option">
                            <input type="radio" name="caseType" value="criminal">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Criminal Complaint</h4>
                                    <p>Report a criminal offense to be prosecuted by the state, such as theft, assault, fraud, etc.</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="case-option">
                            <input type="radio" name="caseType" value="protection">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Protection Order</h4>
                                    <p>Application for protection against domestic violence, harassment, or stalking.</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="case-option">
                            <input type="radio" name="caseType" value="maintenance">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-child"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Maintenance Application</h4>
                                    <p>Request for child support or maintenance from a parent or spouse.</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="case-option">
                            <input type="radio" name="caseType" value="eviction">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Eviction Application</h4>
                                    <p>Landlord's application to evict a tenant from a rental property.</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="case-option">
                            <input type="radio" name="caseType" value="other">
                            <div class="option-content">
                                <div class="option-icon">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <div class="option-details">
                                    <h4>Other Matters</h4>
                                    <p>Other legal matters not listed above, including administrative applications.</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <div class="wizard-nav">
                        <button class="btn-next" id="step1Next" disabled>Continue</button>
                    </div>
                </div>
                
                <!-- Step 2: Case Value -->
                <div class="wizard-step" id="step2">
                    <h3>What is the value or severity of your case?</h3>
                    <p>This helps determine which level of Magistrate Court has jurisdiction.</p>
                    
                    <div class="value-section" id="civilValueSection" style="display: none;">
                        <h4>Monetary Value</h4>
                        <p>Enter the approximate monetary value of your claim:</p>
                        
                        <div class="input-group">
                            <span class="input-prefix">E</span>
                            <input type="number" id="caseValue" min="0" placeholder="Enter amount">
                        </div>
                        
                        <div class="value-slider-container">
                            <div class="value-slider">
                                <div class="slider-track">
                                    <div class="slider-fill"></div>
                                </div>
                                <div class="slider-thumb"></div>
                            </div>
                            <div class="slider-labels">
                                <span>E0</span>
                                <span>E50,000</span>
                                <span>E100,000+</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="value-section" id="criminalValueSection" style="display: none;">
                        <h4>Offense Severity</h4>
                        <p>Select the category that best describes the severity of the offense:</p>
                        
                        <div class="severity-options">
                            <label class="severity-option">
                                <input type="radio" name="criminalSeverity" value="minor">
                                <div class="severity-content">
                                    <h5>Minor Offense</h5>
                                    <p>Petty theft, minor assault, traffic violations, etc.</p>
                                </div>
                            </label>
                            
                            <label class="severity-option">
                                <input type="radio" name="criminalSeverity" value="moderate">
                                <div class="severity-content">
                                    <h5>Moderate Offense</h5>
                                    <p>Theft, common assault, fraud (below E20,000), etc.</p>
                                </div>
                            </label>
                            
                            <label class="severity-option">
                                <input type="radio" name="criminalSeverity" value="serious">
                                <div class="severity-content">
                                    <h5>Serious Offense</h5>
                                    <p>Assault GBH, significant fraud, serious property crimes, etc.</p>
                                </div>
                            </label>
                            
                            <label class="severity-option">
                                <input type="radio" name="criminalSeverity" value="verySerious">
                                <div class="severity-content">
                                    <h5>Very Serious Offense</h5>
                                    <p>Murder, rape, armed robbery, major fraud, etc.</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="value-section" id="otherValueSection" style="display: none;">
                        <!-- This section will be shown for protection orders, maintenance, etc. -->
                        <div class="note-card">
                            <div class="note-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="note-content">
                                <h4>No Value Selection Required</h4>
                                <p>For this type of case, monetary value is not a determining factor for jurisdiction. Please proceed to the next step.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="wizard-nav">
                        <button class="btn-prev" id="step2Prev">Previous</button>
                        <button class="btn-next" id="step2Next">Continue</button>
                    </div>
                </div>
                
                <!-- Step 3: Location -->
                <div class="wizard-step" id="step3">
                    <h3>Where are you located?</h3>
                    <p>This helps determine which court has geographical jurisdiction over your case.</p>
                    
                    <div class="location-options">
                        <div class="location-option">
                            <h4>By Region</h4>
                            <div class="select-group">
                                <select id="regionSelect">
                                    <option value="">Select region</option>
                                    <option value="hhohho">Hhohho Region</option>
                                    <option value="manzini">Manzini Region</option>
                                    <option value="lubombo">Lubombo Region</option>
                                    <option value="shiselweni">Shiselweni Region</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="location-separator">
                            <span>OR</span>
                        </div>
                        
                        <div class="location-option">
                            <h4>By Nearest Town/City</h4>
                            <div class="select-group">
                                <select id="townSelect">
                                    <option value="">Select town/city</option>
                                    <option value="mbabane">Mbabane</option>
                                    <option value="manzini">Manzini</option>
                                    <option value="nhlangano">Nhlangano</option>
                                    <option value="siteki">Siteki</option>
                                    <option value="piggsPeak">Pigg's Peak</option>
                                    <option value="hlatikulu">Hlatikulu</option>
                                    <option value="simunye">Simunye</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="location-auto">
                        <button class="btn-locate-auto">
                            <i class="fas fa-crosshairs"></i>
                            <span>Use My Current Location</span>
                        </button>
                    </div>
                    
                    <div class="wizard-nav">
                        <button class="btn-prev" id="step3Prev">Previous</button>
                        <button class="btn-next" id="step3Next">Continue</button>
                    </div>
                </div>
                
                <!-- Step 4: Result -->
                <div class="wizard-step" id="step4">
                    <h3>Filing Recommendation</h3>
                    <p>Based on your selections, we recommend filing your case at:</p>
                    
                    <div class="result-container" id="filingResult">
                        <!-- Results will be populated by JavaScript -->
                    </div>
                    
                    <div class="result-actions">
                        <a href="#" class="btn-download" id="resultDownload">
                            <i class="fas fa-file-download"></i>
                            <span>Download Filing Guide</span>
                        </a>
                        <button class="btn-restart" id="wizardRestart">
                            <i class="fas fa-redo"></i>
                            <span>Start Over</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Documents and Forms Section -->
<section class="documents-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Documents & Forms</h2>
            <div class="heading-line centered"></div>
            <p>Access the forms and documents required for various Magistrate Court proceedings.</p>
        </div>
        
        <div class="documents-tabs">
            <button class="doc-tab active" data-tab="civil-forms">
                <i class="fas fa-file-contract"></i>
                <span>Civil Forms</span>
            </button>
            <button class="doc-tab" data-tab="criminal-forms">
                <i class="fas fa-gavel"></i>
                <span>Criminal Forms</span>
            </button>
            <button class="doc-tab" data-tab="special-forms">
                <i class="fas fa-file-alt"></i>
                <span>Special Proceedings</span>
            </button>
            <button class="doc-tab" data-tab="guides">
                <i class="fas fa-book"></i>
                <span>Guides & Manuals</span>
            </button>
        </div>
        
        <div class="documents-content">
            <div class="doc-content active" id="civil-forms">
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search civil forms...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filter-dropdown">
                        <select>
                            <option value="all">All Categories</option>
                            <option value="summons">Summons</option>
                            <option value="pleadings">Pleadings</option>
                            <option value="applications">Applications</option>
                            <option value="orders">Orders</option>
                        </select>
                    </div>
                </div>
                
                <div class="documents-grid">
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Civil Summons (Form MC-1)</h4>
                            <p>To initiate a civil action against an individual or organization</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">125 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Particulars of Claim (Form MC-2)</h4>
                            <p>To detail the specifics of your civil claim</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">110 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Notice of Motion (Form MC-3)</h4>
                            <p>For applications to the court in civil proceedings</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">98 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Affidavit Template (Form MC-4)</h4>
                            <p>For sworn statements to be submitted to the court</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">115 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Notice of Appearance (Form MC-5)</h4>
                            <p>To indicate intention to defend a civil claim</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">85 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Subpoena (Form MC-6)</h4>
                            <p>To compel witness attendance or document production</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">92 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Writ of Execution (Form MC-7)</h4>
                            <p>To enforce a judgment through seizure of property</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">103 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Bill of Costs (Form MC-8)</h4>
                            <p>To detail legal costs for taxation purposes</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">118 KB</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="documents-pagination">
                    <a href="#" class="pagination-prev disabled">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="pagination-number active">1</a>
                    <a href="#" class="pagination-number">2</a>
                    <a href="#" class="pagination-number">3</a>
                    <a href="#" class="pagination-next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="doc-content" id="criminal-forms">
                <!-- Criminal forms content will be similar to civil forms -->
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search criminal forms...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filter-dropdown">
                        <select>
                            <option value="all">All Categories</option>
                            <option value="charges">Charges</option>
                            <option value="bail">Bail</option>
                            <option value="pleas">Pleas</option>
                            <option value="sentencing">Sentencing</option>
                        </select>
                    </div>
                </div>
                
                <div class="documents-grid">
                    <!-- Criminal forms will be listed here -->
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Criminal Complaint (Form MC-C1)</h4>
                            <p>To file a criminal complaint against an individual</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">130 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Additional criminal forms would be listed here -->
                </div>
            </div>
            
            <div class="doc-content" id="special-forms">
                <!-- Special proceedings forms -->
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search special proceedings forms...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filter-dropdown">
                        <select>
                            <option value="all">All Categories</option>
                            <option value="protection">Protection Orders</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="eviction">Eviction</option>
                            <option value="other">Other Proceedings</option>
                        </select>
                    </div>
                </div>
                
                <div class="documents-grid">
                    <!-- Special proceedings forms will be listed here -->
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Protection Order Application (Form MC-P1)</h4>
                            <p>To apply for protection against domestic violence or harassment</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">145 KB</span>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Additional special proceedings forms would be listed here -->
                </div>
            </div>
            
            <div class="doc-content" id="guides">
                <!-- Guides and manuals -->
                <div class="search-filter">
                    <div class="search-box">
                        <input type="text" placeholder="Search guides and manuals...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="filter-dropdown">
                        <select>
                            <option value="all">All Categories</option>
                            <option value="civil">Civil Proceedings</option>
                            <option value="criminal">Criminal Proceedings</option>
                            <option value="special">Special Proceedings</option>
                            <option value="general">General Information</option>
                        </select>
                    </div>
                </div>
                
                <div class="documents-grid">
                    <!-- Guides and manuals will be listed here -->
                    <a href="#" class="document-card">
                        <div class="doc-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="doc-info">
                            <h4>Guide to Civil Proceedings</h4>
                            <p>Comprehensive guide to civil case procedures in Magistrate Courts</p>
                            <div class="doc-meta">
                                <span class="doc-type">PDF</span>
                                <span class="doc-size">1.2 MB</span>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Additional guides and manuals would be listed here -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Officials Section -->
<section class="officials-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Meet Our Court Officials</h2>
            <div class="heading-line centered"></div>
            <p>Get to know the magistrates and key officials who serve in the Magistrate Courts of Eswatini.</p>
        </div>
        
        <div class="officials-filter">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All Officials</button>
                <button class="filter-btn" data-filter="principal">Principal Magistrates</button>
                <button class="filter-btn" data-filter="senior">Senior Magistrates</button>
                <button class="filter-btn" data-filter="district">District Magistrates</button>
                <button class="filter-btn" data-filter="administration">Administration</button>
            </div>
        </div>
        
        <div class="officials-grid" id="officialsGrid">
            <!-- Official cards will be populated by JavaScript -->
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-line centered"></div>
            <p>Find answers to common questions about Magistrate Courts and their procedures.</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-search">
                <input type="text" id="faqSearch" placeholder="Search FAQs...">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            
            <div class="faq-categories">
                <button class="category-btn active" data-category="all">All Categories</button>
                <button class="category-btn" data-category="general">General</button>
                <button class="category-btn" data-category="civil">Civil Cases</button>
                <button class="category-btn" data-category="criminal">Criminal Cases</button>
                <button class="category-btn" data-category="procedures">Procedures</button>
            </div>
            
            <div class="faq-list" id="faqList">
                <div class="faq-item" data-category="general">
                    <div class="faq-question">
                        <h3>What is the difference between Magistrate Courts and High Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Magistrate Courts are courts of first instance that handle the majority of legal cases in Eswatini. They have jurisdiction over civil matters up to a certain monetary value (depending on the level of the court) and criminal matters carrying penalties up to a certain threshold.</p>
                        <p>The High Court, on the other hand, has unlimited jurisdiction in civil and criminal matters. It handles more serious criminal cases, complex civil matters, and serves as an appellate court for Magistrate Courts decisions. It also has exclusive jurisdiction over certain matters like constitutional issues, divorce, and administration of deceased estates.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-category="general">
                    <div class="faq-question">
                        <h3>Do I need a lawyer to appear in Magistrate Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>No, legal representation is not mandatory in Magistrate Courts. You have the right to represent yourself (known as appearing "pro se"). However, if your case involves complex legal issues or substantial consequences, it's advisable to seek legal representation.</p>
                        <p>If you cannot afford a lawyer, you may qualify for legal aid through organizations like the Legal Aid Clinic or pro bono services offered by legal professionals. The court clerk can provide information about these resources.</p>
                    </div>
                </div>
                
                <!-- Additional FAQ items would be listed here -->
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Contact Us</h2>
            <div class="heading-line centered"></div>
            <p>Get in touch with the Magistrate Courts administration for general inquiries and information.</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Main Administration Office</h3>
                        <p>Chief Magistrate's Office<br>Mbabane Magistrate Court Building<br>Mbabane, Eswatini</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Phone</h3>
                        <p>+268 2404 2501<br>+268 2404 2502</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p>magistrate@judiciary.org.sz<br>info@judiciary.org.sz</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Office Hours</h3>
                        <p>Monday to Friday: 8:00 AM - 4:30 PM<br>Closed on weekends and public holidays</p>
                    </div>
                </div>
                
                <div class="contact-note">
                    <p>For case-specific inquiries, please contact the relevant court directly. Contact information for individual courts can be found using our <a href="#court-finder">Court Finder</a>.</p>
                </div>
            </div>
            
            <div class="contact-form-container">
                <h3>Send a Message</h3>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" required></textarea>
                    </div>
                    
                    <div class="form-group captcha-group">
                        <div class="captcha-container">
                            <div class="captcha-image">
                                <span class="captcha-text">8F3W7P</span>
                            </div>
                            <button class="btn-refresh-captcha" type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                        <div class="captcha-input">
                            <label for="captcha">Enter Captcha</label>
                            <input type="text" id="captcha" required>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="resources-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Additional Resources</h2>
            <div class="heading-line centered"></div>
            <p>Explore these resources to learn more about the judiciary system and legal processes.</p>
        </div>
        
        <div class="resources-grid">
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Legal Education</h3>
                <p>Resources to help understand your legal rights and responsibilities.</p>
                <span class="resource-link">Learn More</span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Court Etiquette</h3>
                <p>Guidelines on proper conduct and attire when appearing in court.</p>
                <span class="resource-link">Learn More</span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Legal Aid</h3>
                <p>Information on accessing free or affordable legal assistance.</p>
                <span class="resource-link">Learn More</span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Legal Dictionary</h3>
                <p>Explanations of common legal terms and concepts used in court.</p>
                <span class="resource-link">Learn More</span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Eswatini Laws</h3>
                <p>Access to statutes, regulations, and legal publications of Eswatini.</p>
                <span class="resource-link">Learn More</span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Alternative Dispute Resolution</h3>
                <p>Options for resolving legal disputes outside the formal court process.</p>
                <span class="resource-link">Learn More</span>
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