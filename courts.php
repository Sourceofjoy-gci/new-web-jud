<?php
/**
 * Eswatini Judiciary Website - Courts Page
 */

// Set the page title
$pageTitle = "Our Courts - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/courts.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/courts.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="courts-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">Our Courts</h1>
            <p class="tagline reveal-text">Discover the Eswatini Judicial System</p>
            <div class="hero-actions reveal-fade">
                <a href="#courts-explorer" class="btn-scroll">
                    <span>Explore</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- Courts Overview Section -->
<section id="courts-overview" class="courts-overview">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Judicial Structure</h2>
            <div class="heading-line centered"></div>
            <p>The judiciary of Eswatini operates through a hierarchical court system designed to ensure efficient and fair administration of justice.</p>
        </div>
        
        <div class="hierarchy-visualization">
            <div class="hierarchy-container" id="hierarchyContainer">
                <!-- Hierarchy visualization will be rendered with JavaScript -->
            </div>
            
            <div class="hierarchy-legend">
                <div class="legend-item">
                    <span class="legend-color supreme"></span>
                    <span class="legend-text">Apex Court</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color superior"></span>
                    <span class="legend-text">Superior Courts</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color specialized"></span>
                    <span class="legend-text">Specialized Courts</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color magistrate"></span>
                    <span class="legend-text">Magistrate Courts</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courts Explorer Section -->
<section id="courts-explorer" class="courts-explorer">
    <div class="container">
        <div class="section-heading with-action">
            <div>
                <h2>Explore Our Courts</h2>
                <div class="heading-line"></div>
            </div>
            <div class="explorer-controls">
                <div class="view-toggle">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
                <div class="filter-dropdown">
                    <button class="filter-toggle">
                        <span>Filter</span>
                        <i class="fas fa-filter"></i>
                    </button>
                    <div class="filter-options">
                        <label class="filter-option">
                            <input type="checkbox" value="all" checked>
                            <span>All Courts</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" value="apex">
                            <span>Apex Court</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" value="superior">
                            <span>Superior Courts</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" value="specialized">
                            <span>Specialized Courts</span>
                        </label>
                        <label class="filter-option">
                            <input type="checkbox" value="magistrate">
                            <span>Magistrate Courts</span>
                        </label>
                    </div>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search courts..." id="courtSearch">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        
        <div class="courts-grid" id="courtsContainer">
            <!-- Court cards will be rendered with JavaScript -->
            <div class="court-placeholder"></div>
            <div class="court-placeholder"></div>
            <div class="court-placeholder"></div>
            <div class="court-placeholder"></div>
            <div class="court-placeholder"></div>
            <div class="court-placeholder"></div>
        </div>
    </div>
</section>

<!-- Court Comparison Section -->
<section class="court-comparison">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Comparison</h2>
            <div class="heading-line centered"></div>
            <p>Compare the jurisdiction and functions of different courts to understand their roles in the judicial system.</p>
        </div>
        
        <div class="comparison-container">
            <div class="comparison-selector">
                <div class="selector-group">
                    <label>First Court</label>
                    <select id="firstCourtSelect">
                        <option value="">Select a court</option>
                        <option value="supreme-court">Supreme Court</option>
                        <option value="high-court">High Court</option>
                        <option value="industrial-court-appeal">Industrial Court of Appeal</option>
                        <option value="commercial-court">Commercial Court</option>
                        <option value="industrial-court">Industrial Court</option>
                        <option value="small-claims-court">Small Claims Court</option>
                        <option value="magistrate-courts">Magistrate Courts</option>
                    </select>
                </div>
                
                <div class="selector-vs">
                    <span>VS</span>
                </div>
                
                <div class="selector-group">
                    <label>Second Court</label>
                    <select id="secondCourtSelect">
                        <option value="">Select a court</option>
                        <option value="supreme-court">Supreme Court</option>
                        <option value="high-court">High Court</option>
                        <option value="industrial-court-appeal">Industrial Court of Appeal</option>
                        <option value="commercial-court">Commercial Court</option>
                        <option value="industrial-court">Industrial Court</option>
                        <option value="small-claims-court">Small Claims Court</option>
                        <option value="magistrate-courts">Magistrate Courts</option>
                    </select>
                </div>
            </div>
            
            <div class="comparison-table-container">
                <table class="comparison-table" id="comparisonTable">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th id="firstCourtHeader">First Court</th>
                            <th id="secondCourtHeader">Second Court</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jurisdiction</td>
                            <td id="firstCourtJurisdiction">-</td>
                            <td id="secondCourtJurisdiction">-</td>
                        </tr>
                        <tr>
                            <td>Appeal Process</td>
                            <td id="firstCourtAppeal">-</td>
                            <td id="secondCourtAppeal">-</td>
                        </tr>
                        <tr>
                            <td>Judges</td>
                            <td id="firstCourtJudges">-</td>
                            <td id="secondCourtJudges">-</td>
                        </tr>
                        <tr>
                            <td>Case Types</td>
                            <td id="firstCourtCaseTypes">-</td>
                            <td id="secondCourtCaseTypes">-</td>
                        </tr>
                        <tr>
                            <td>Court Fees</td>
                            <td id="firstCourtFees">-</td>
                            <td id="secondCourtFees">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Court Locations Section -->
<section class="court-locations">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Locations</h2>
            <div class="heading-line centered"></div>
            <p>Find court locations across Eswatini. Use the map to locate the nearest court to you.</p>
        </div>
        
        <div class="locations-container">
            <div class="map-container">
                <div id="courtsMap" class="courts-map">
                    <!-- Interactive map will be loaded with JavaScript -->
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Map Loading...</span>
                    </div>
                </div>
                <button class="location-finder">
                    <i class="fas fa-location-arrow"></i>
                    <span>Find Nearest Court</span>
                </button>
            </div>
            
            <div class="locations-list">
                <div class="location-filter">
                    <input type="text" placeholder="Search locations..." id="locationSearch">
                    <div class="location-categories">
                        <button class="category-btn active" data-category="all">All</button>
                        <button class="category-btn" data-category="principal">Principal</button>
                        <button class="category-btn" data-category="regional">Regional</button>
                        <button class="category-btn" data-category="magistrate">Magistrate</button>
                    </div>
                </div>
                
                <div class="locations-grid" id="locationsContainer">
                    <!-- Location cards will be rendered with JavaScript -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Procedures Section -->
<section class="court-procedures">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Procedures</h2>
            <div class="heading-line centered"></div>
            <p>Learn about the general procedures for filing cases and navigating the court system.</p>
        </div>
        
        <div class="procedures-tabs">
            <div class="tabs-nav">
                <button class="procedure-tab active" data-tab="file-case">
                    <i class="fas fa-file-alt"></i>
                    <span>Filing a Case</span>
                </button>
                <button class="procedure-tab" data-tab="court-fees">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Court Fees</span>
                </button>
                <button class="procedure-tab" data-tab="trial-process">
                    <i class="fas fa-balance-scale"></i>
                    <span>Trial Process</span>
                </button>
                <button class="procedure-tab" data-tab="appeals">
                    <i class="fas fa-gavel"></i>
                    <span>Appeals</span>
                </button>
            </div>
            
            <div class="tabs-content">
                <div class="procedure-content active" id="file-case">
                    <h3>How to File a Case</h3>
                    <div class="procedure-steps">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Prepare Documents</h4>
                                <p>Gather all necessary documents, including the complaint or petition, supporting evidence, and identification documents.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Complete Court Forms</h4>
                                <p>Fill out the appropriate court forms based on your case type. Forms are available at the court registry or online.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Pay Filing Fees</h4>
                                <p>Pay the required filing fees at the court registry. Fee waivers may be available for those who qualify.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>Submit Documents</h4>
                                <p>Submit your completed forms and documents to the court registry. Ensure you keep copies for your records.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>Serve the Other Party</h4>
                                <p>Arrange for the other party to be served with a copy of your court documents according to court rules.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="procedure-content" id="court-fees">
                    <h3>Court Fees</h3>
                    <p>Court fees vary depending on the type of case and the court in which it is filed. Below is a general overview of court fees:</p>
                    
                    <div class="fees-table-container">
                        <table class="fees-table">
                            <thead>
                                <tr>
                                    <th>Court</th>
                                    <th>Filing Fee</th>
                                    <th>Additional Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Supreme Court</td>
                                    <td>E1,000 - E5,000</td>
                                    <td>Varies by case</td>
                                </tr>
                                <tr>
                                    <td>High Court</td>
                                    <td>E500 - E2,500</td>
                                    <td>Service fees, certification</td>
                                </tr>
                                <tr>
                                    <td>Industrial Court</td>
                                    <td>E300 - E1,000</td>
                                    <td>Representation fees</td>
                                </tr>
                                <tr>
                                    <td>Magistrate Courts</td>
                                    <td>E100 - E500</td>
                                    <td>Service fees, witness fees</td>
                                </tr>
                                <tr>
                                    <td>Small Claims Court</td>
                                    <td>E50 - E200</td>
                                    <td>Minimal additional fees</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="fees-note">
                        <p><strong>Note:</strong> Fee waivers may be available for indigent individuals. Consult with the court registry for current and specific fee information.</p>
                    </div>
                </div>
                
                <div class="procedure-content" id="trial-process">
                    <h3>Trial Process</h3>
                    <div class="trial-timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Pleadings Phase</h4>
                                <p>Exchange of formal written documents outlining each party's claims and defenses.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Discovery Phase</h4>
                                <p>Parties exchange relevant information and evidence through depositions, interrogatories, and document requests.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Pre-Trial Conference</h4>
                                <p>Meeting with the judge to discuss procedural matters, potential settlement, and trial scheduling.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Trial</h4>
                                <p>Formal presentation of evidence and arguments before a judge or jury, following specific court procedures.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Judgment</h4>
                                <p>Court's decision based on the evidence and arguments presented during the trial.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>Enforcement</h4>
                                <p>Implementation of the court's decision, which may include payment of damages or specific performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="procedure-content" id="appeals">
                    <h3>Appeals Process</h3>
                    <p>Appeals allow parties to seek review of a court's decision by a higher court. The appeals process generally follows these steps:</p>
                    
                    <div class="appeals-flow">
                        <div class="appeal-step">
                            <div class="appeal-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="appeal-content">
                                <h4>Notice of Appeal</h4>
                                <p>File a notice of appeal within the specified timeframe, usually within 30 days of the judgment.</p>
                            </div>
                        </div>
                        
                        <div class="appeal-arrow">
                            <i class="fas fa-long-arrow-alt-down"></i>
                        </div>
                        
                        <div class="appeal-step">
                            <div class="appeal-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                            <div class="appeal-content">
                                <h4>Record Preparation</h4>
                                <p>Prepare the trial record, including transcripts and exhibits, for review by the appellate court.</p>
                            </div>
                        </div>
                        
                        <div class="appeal-arrow">
                            <i class="fas fa-long-arrow-alt-down"></i>
                        </div>
                        
                        <div class="appeal-step">
                            <div class="appeal-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="appeal-content">
                                <h4>Filing Briefs</h4>
                                <p>Submit written arguments outlining the legal basis for the appeal and the relief sought.</p>
                            </div>
                        </div>
                        
                        <div class="appeal-arrow">
                            <i class="fas fa-long-arrow-alt-down"></i>
                        </div>
                        
                        <div class="appeal-step">
                            <div class="appeal-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="appeal-content">
                                <h4>Oral Arguments</h4>
                                <p>Present oral arguments before the appellate court, if permitted or requested.</p>
                            </div>
                        </div>
                        
                        <div class="appeal-arrow">
                            <i class="fas fa-long-arrow-alt-down"></i>
                        </div>
                        
                        <div class="appeal-step">
                            <div class="appeal-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="appeal-content">
                                <h4>Appellate Decision</h4>
                                <p>Receive the appellate court's decision, which may affirm, reverse, or modify the lower court's judgment.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="appeals-hierarchy">
                        <h4>Appeals Hierarchy</h4>
                        <ul>
                            <li>Magistrate Court decisions may be appealed to the High Court</li>
                            <li>Industrial Court decisions may be appealed to the Industrial Court of Appeal</li>
                            <li>High Court and Industrial Court of Appeal decisions may be appealed to the Supreme Court</li>
                            <li>The Supreme Court is the final court of appeal in Eswatini</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="courts-faq">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-line centered"></div>
            <p>Find answers to commonly asked questions about the court system and procedures.</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the difference between civil and criminal cases?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Civil cases involve disputes between individuals or organizations, where one party seeks compensation or specific action from another. Criminal cases involve actions considered harmful to society as a whole, where the government prosecutes an individual or entity for violating criminal laws.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do I need a lawyer to go to court?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>While you have the right to represent yourself (known as appearing "pro se"), having legal representation is highly recommended, especially for complex cases. However, in Small Claims Court, the procedures are simplified to allow individuals to represent themselves more easily.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does a court case typically take?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>The duration of a court case varies widely depending on the type and complexity of the case, the court's caseload, and the actions of the parties involved. Simple matters might be resolved in months, while complex litigation can take several years.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What happens if I can't afford court fees?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>If you cannot afford court fees, you may apply for a fee waiver or reduction by submitting an affidavit of indigency or financial hardship to the court. Additionally, legal aid organizations may provide assistance to those who qualify.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can I appeal a court decision I disagree with?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, court decisions can generally be appealed to a higher court. However, appeals must be based on legal errors in the original proceeding, not simply disagreement with the outcome. Appeals must be filed within specific time limits, which vary by court and case type.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How is a judge or magistrate assigned to my case?</h3>
                    <div class="faq-toggle">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Judges or magistrates are typically assigned to cases through a random assignment process or based on the court's internal rotation system. This helps ensure impartiality and equitable distribution of the caseload among judicial officers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Resources Section -->
<section class="court-resources">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Court Resources</h2>
            <div class="heading-line centered"></div>
            <p>Access useful resources to help navigate the court system.</p>
        </div>
        
        <div class="resources-grid">
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-file-download"></i>
                </div>
                <h3>Court Forms</h3>
                <p>Download standard court forms for various proceedings.</p>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Court Calendar</h3>
                <p>View upcoming court sessions and schedules.</p>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Legal Research</h3>
                <p>Access case law, statutes, and legal resources.</p>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Legal Aid</h3>
                <p>Find information on legal assistance programs.</p>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-language"></i>
                </div>
                <h3>Interpretation Services</h3>
                <p>Learn about language assistance in court proceedings.</p>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Educational Resources</h3>
                <p>Access guides and materials about the judicial system.</p>
            </a>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="courts-cta">
    <div class="container">
        <div class="cta-content reveal-fade">
            <h2>Have Questions About Our Courts?</h2>
            <p>Our team is available to provide guidance and answer any questions you may have about the courts system in Eswatini.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">Contact Us</a>
                <a href="faqs.php" class="btn btn-outline">View FAQs</a>
            </div>
        </div>
    </div>
</section>

<script>
    // This script helps preload the court data for faster rendering
    window.courtData = [
        {
            id: "supreme-court",
            name: "Supreme Court",
            type: "apex",
            description: "The Supreme Court is the highest court in Eswatini and the final court of appeal for all matters. It hears appeals from the High Court and the Industrial Court of Appeal.",
            image: "assets/images/courts/supreme-court.jpg",
            jurisdiction: "Final appellate jurisdiction over all matters from the High Court and Industrial Court of Appeal.",
            location: "Mbabane",
            established: "1968",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "high-court",
            name: "High Court",
            type: "superior",
            description: "The High Court has original jurisdiction in civil and criminal matters, as well as appellate jurisdiction from subordinate courts. It handles serious criminal cases and complex civil matters.",
            image: "assets/images/courts/high-court.jpg",
            jurisdiction: "Original and appellate jurisdiction in civil and criminal matters.",
            location: "Mbabane",
            established: "1954",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "industrial-court-appeal",
            name: "Industrial Court of Appeal",
            type: "superior",
            description: "The Industrial Court of Appeal hears appeals from the Industrial Court on matters related to employment and labor disputes.",
            image: "assets/images/courts/industrial-court-appeal.jpg",
            jurisdiction: "Appeals from the Industrial Court on employment and labor matters.",
            location: "Mbabane",
            established: "1980",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "commercial-court",
            name: "Commercial Court",
            type: "specialized",
            description: "The Commercial Court is a division of the High Court that specializes in business and commercial disputes.",
            image: "assets/images/courts/commercial-court.jpg",
            jurisdiction: "Commercial and business disputes of significant value.",
            location: "Mbabane",
            established: "2005",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "industrial-court",
            name: "Industrial Court",
            type: "specialized",
            description: "The Industrial Court handles disputes related to employment, labor relations, and workplace issues.",
            image: "assets/images/courts/industrial-court.jpg",
            jurisdiction: "Employment and labor disputes, unfair dismissal claims, and workplace issues.",
            location: "Mbabane",
            established: "1980",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "small-claims-court",
            name: "Small Claims Court",
            type: "specialized",
            description: "The Small Claims Court handles minor civil disputes with a simplified procedure to allow easier access to justice.",
            image: "assets/images/courts/small-claims-court.jpg",
            jurisdiction: "Civil claims below E10,000.",
            location: "Multiple locations",
            established: "1998",
            coordinates: [-26.3054, 31.1367]
        },
        {
            id: "magistrate-courts",
            name: "Magistrate Courts",
            type: "magistrate",
            description: "Magistrate Courts are the primary courts of first instance, handling a wide range of civil and criminal matters across the country.",
            image: "assets/images/courts/magistrate-courts.jpg",
            jurisdiction: "Limited civil and criminal jurisdiction as prescribed by statute.",
            location: "Multiple locations",
            established: "1907",
            coordinates: [-26.3054, 31.1367]
        }
    ];
</script>

<?php
// Get the buffered content
$pageContent = ob_get_clean();

// Include the template
include 'template.php';
?>