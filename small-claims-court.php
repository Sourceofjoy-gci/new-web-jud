<?php
/**
 * Eswatini Judiciary Website - Small Claims Court Page
 */

// Set the page title
$pageTitle = "Small Claims Court - Judiciary of Eswatini";

// Include page-specific styles
$pageStyles = [
    'assets/css/small-claims-court.css'
];

// Include page-specific scripts
$pageScripts = [
    'assets/js/small-claims-court.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="small-claims-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">Small Claims Court</h1>
            <p class="tagline reveal-text">Simple, affordable justice for everyday disputes</p>
            <div class="hero-actions reveal-fade">
                <a href="#eligibility-calculator" class="btn-primary">
                    <i class="fas fa-calculator"></i>
                    <span>Eligibility Calculator</span>
                </a>
                <a href="#filing-process" class="btn-outline">
                    <i class="fas fa-file-alt"></i>
                    <span>File a Claim</span>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- Overview Section -->
<section class="court-overview dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Access to Justice Made Simple</h2>
            <div class="heading-line centered"></div>
            <p>The Small Claims Court provides an affordable, efficient way to resolve minor civil disputes without the need for legal representation.</p>
        </div>
        
        <div class="key-features-container">
            <div class="key-feature">
                <div class="feature-icon">
                    <i class="fas fa-coins"></i>
                </div>
                <h3>Claims up to E10,000</h3>
                <p>Handle monetary disputes with values not exceeding E10,000 through our simplified process.</p>
            </div>
            
            <div class="key-feature">
                <div class="feature-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Self-Representation</h3>
                <p>Represent yourself without the need for an attorney, saving on legal fees.</p>
            </div>
            
            <div class="key-feature">
                <div class="feature-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Fair Resolution</h3>
                <p>Impartial judges ensure fair hearings and equitable outcomes for all parties.</p>
            </div>
            
            <div class="key-feature">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Quick Process</h3>
                <p>Cases are typically resolved within 60 days, compared to months in regular courts.</p>
            </div>
        </div>
    </div>
</section>

<!-- Eligibility Calculator Section -->
<section id="eligibility-calculator" class="eligibility-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Claim Eligibility Calculator</h2>
            <div class="heading-line centered"></div>
            <p>Check if your dispute qualifies for the Small Claims Court by answering a few simple questions.</p>
        </div>
        
        <div class="calculator-container">
            <div class="calculator-card">
                <div class="calculator-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" id="calculatorProgress"></div>
                    </div>
                    <div class="step-indicators">
                        <span class="step-indicator active" data-step="1"><span>1</span></span>
                        <span class="step-indicator" data-step="2"><span>2</span></span>
                        <span class="step-indicator" data-step="3"><span>3</span></span>
                        <span class="step-indicator" data-step="4"><span>4</span></span>
                    </div>
                </div>
                
                <div class="calculator-steps">
                    <!-- Step 1: Claim Amount -->
                    <div class="calculator-step active" id="step1">
                        <h3>What is the value of your claim?</h3>
                        <p>Enter the total amount you are claiming in Eswatini Lilangeni (E).</p>
                        
                        <div class="input-group">
                            <span class="input-prefix">E</span>
                            <input type="number" id="claimAmount" placeholder="Enter amount" min="0">
                        </div>
                        
                        <p class="note">Note: Small Claims Court handles claims up to E10,000 only.</p>
                        
                        <div class="calculator-nav">
                            <button class="btn-next" id="step1Next">Next Question</button>
                        </div>
                    </div>
                    
                    <!-- Step 2: Claim Type -->
                    <div class="calculator-step" id="step2">
                        <h3>What type of claim are you filing?</h3>
                        <p>Select the category that best describes your claim.</p>
                        
                        <div class="radio-options">
                            <label class="radio-option">
                                <input type="radio" name="claimType" value="money_owed">
                                <span class="radio-label">Money Owed</span>
                                <span class="radio-description">Unpaid loans, debts, or services</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="claimType" value="property_damage">
                                <span class="radio-label">Property Damage</span>
                                <span class="radio-description">Damage to personal property</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="claimType" value="contract_dispute">
                                <span class="radio-label">Contract Dispute</span>
                                <span class="radio-description">Breach of contract or agreement</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="claimType" value="consumer_issues">
                                <span class="radio-label">Consumer Issues</span>
                                <span class="radio-description">Faulty goods or services</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="claimType" value="other">
                                <span class="radio-label">Other</span>
                                <span class="radio-description">Other civil disputes</span>
                            </label>
                        </div>
                        
                        <div class="calculator-nav">
                            <button class="btn-prev" id="step2Prev">Previous</button>
                            <button class="btn-next" id="step2Next">Next Question</button>
                        </div>
                    </div>
                    
                    <!-- Step 3: Time Period -->
                    <div class="calculator-step" id="step3">
                        <h3>When did the dispute occur?</h3>
                        <p>Select the approximate time period of the incident or when the debt became due.</p>
                        
                        <div class="radio-options">
                            <label class="radio-option">
                                <input type="radio" name="timePeriod" value="less_than_1_year">
                                <span class="radio-label">Less than 1 year ago</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="timePeriod" value="1_to_3_years">
                                <span class="radio-label">1 to 3 years ago</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="timePeriod" value="more_than_3_years">
                                <span class="radio-label">More than 3 years ago</span>
                            </label>
                            
                            <label class="radio-option">
                                <input type="radio" name="timePeriod" value="ongoing">
                                <span class="radio-label">Ongoing issue</span>
                            </label>
                        </div>
                        
                        <p class="note">Note: Generally, claims must be filed within 3 years of the dispute.</p>
                        
                        <div class="calculator-nav">
                            <button class="btn-prev" id="step3Prev">Previous</button>
                            <button class="btn-next" id="step3Next">Next Question</button>
                        </div>
                    </div>
                    
                    <!-- Step 4: Location -->
                    <div class="calculator-step" id="step4">
                        <h3>Where are you and the respondent located?</h3>
                        <p>Select the region where you or the respondent resides or where the issue occurred.</p>
                        
                        <div class="select-group">
                            <label for="location">Region</label>
                            <select id="location">
                                <option value="">Select a region</option>
                                <option value="hhohho">Hhohho</option>
                                <option value="manzini">Manzini</option>
                                <option value="lubombo">Lubombo</option>
                                <option value="shiselweni">Shiselweni</option>
                                <option value="outside">Outside Eswatini</option>
                            </select>
                        </div>
                        
                        <div class="calculator-nav">
                            <button class="btn-prev" id="step4Prev">Previous</button>
                            <button class="btn-check" id="checkEligibility">Check Eligibility</button>
                        </div>
                    </div>
                    
                    <!-- Results Step -->
                    <div class="calculator-step" id="resultsStep">
                        <div class="results-container" id="eligibilityResults">
                            <!-- Results will be displayed here by JavaScript -->
                        </div>
                        
                        <div class="calculator-nav">
                            <button class="btn-reset" id="resetCalculator">Start Over</button>
                            <a href="#filing-process" class="btn-primary" id="proceedButton" style="display: none;">
                                <i class="fas fa-file-alt"></i>
                                <span>Start Filing Process</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Types Section -->
<section class="case-types-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Common Case Types</h2>
            <div class="heading-line centered"></div>
            <p>The Small Claims Court handles a variety of minor civil disputes between individuals, businesses, and organizations.</p>
        </div>
        
        <div class="case-types-grid">
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Unpaid Debts</h3>
                <p>Claims for money owed from personal loans, unpaid bills, or other debts under E10,000.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>Jane lent E5,000 to her neighbor for home repairs with an agreement to repay in 6 months. After 8 months and several reminders, the neighbor has not repaid the loan.</p>
                    </div>
                </div>
            </div>
            
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-car-crash"></i>
                </div>
                <h3>Property Damage</h3>
                <p>Claims for compensation related to damage to personal property or possessions.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>A tree from a neighbor's yard fell onto Thomas's fence during normal weather conditions, causing E8,000 in damage. The neighbor refuses to pay for repairs.</p>
                    </div>
                </div>
            </div>
            
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>Contract Disputes</h3>
                <p>Claims arising from breaches of agreements or contracts with monetary values under E10,000.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>Sarah paid a contractor E7,500 to renovate her bathroom. The work was never completed, and the contractor has stopped responding to calls.</p>
                    </div>
                </div>
            </div>
            
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3>Consumer Complaints</h3>
                <p>Claims regarding defective products, unsatisfactory services, or unfair business practices.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>Alex purchased a refrigerator that stopped working after 2 months. Despite the warranty, the store refuses to repair or replace it.</p>
                    </div>
                </div>
            </div>
            
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Landlord/Tenant Issues</h3>
                <p>Claims related to rental deposits, property maintenance, or minor lease violations.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>David moved out of his apartment in clean condition but his landlord has refused to return his E6,000 security deposit without explanation.</p>
                    </div>
                </div>
            </div>
            
            <div class="case-type-card">
                <div class="card-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Delivery of Goods</h3>
                <p>Claims regarding non-delivery of paid goods or delivery of incorrect or damaged items.</p>
                <div class="example-container">
                    <div class="example-toggle">
                        <span>View Example</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="example-content">
                        <p class="example-title">Example Case:</p>
                        <p>Maria ordered and paid E3,500 for custom furniture that was never delivered. The company refuses to provide a refund.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filing Process Section -->
<section id="filing-process" class="filing-process">
    <div class="container">
        <div class="section-heading text-center">
            <h2>How to File a Claim</h2>
            <div class="heading-line centered"></div>
            <p>Follow these steps to file your claim with the Small Claims Court.</p>
        </div>
        
        <div class="process-flow">
            <div class="flow-container">
                <div class="process-item">
                    <div class="item-number">
                        <span>1</span>
                    </div>
                    <div class="item-content">
                        <h3>Complete the Claim Form</h3>
                        <p>Fill out the Small Claims Court complaint form with details about yourself, the respondent, and your claim.</p>
                        <div class="item-action">
                            <a href="#" class="btn-download">
                                <i class="fas fa-download"></i>
                                <span>Download Form</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="process-connector"></div>
                
                <div class="process-item">
                    <div class="item-number">
                        <span>2</span>
                    </div>
                    <div class="item-content">
                        <h3>Gather Supporting Documents</h3>
                        <p>Collect all documents that support your claim, such as receipts, contracts, photos, or correspondence.</p>
                        <div class="item-action">
                            <button class="btn-toggle-info" data-target="documentsList">
                                <i class="fas fa-list"></i>
                                <span>Document Checklist</span>
                            </button>
                            <div class="hidden-info" id="documentsList">
                                <ul class="document-checklist">
                                    <li>Contracts or agreements</li>
                                    <li>Invoices or receipts</li>
                                    <li>Photos of damage</li>
                                    <li>Communication records (emails, messages)</li>
                                    <li>Witness statements</li>
                                    <li>Bank statements or payment records</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="process-connector"></div>
                
                <div class="process-item">
                    <div class="item-number">
                        <span>3</span>
                    </div>
                    <div class="item-content">
                        <h3>Pay the Filing Fee</h3>
                        <p>Submit your claim form and pay the required filing fee at the Small Claims Court registry.</p>
                        <div class="item-action">
                            <button class="btn-toggle-info" data-target="feesList">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>View Fee Schedule</span>
                            </button>
                            <div class="hidden-info" id="feesList">
                                <div class="fees-table-container">
                                    <table class="fees-table">
                                        <thead>
                                            <tr>
                                                <th>Claim Amount</th>
                                                <th>Filing Fee</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Up to E1,000</td>
                                                <td>E50</td>
                                            </tr>
                                            <tr>
                                                <td>E1,001 - E5,000</td>
                                                <td>E100</td>
                                            </tr>
                                            <tr>
                                                <td>E5,001 - E10,000</td>
                                                <td>E200</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="process-connector"></div>
                
                <div class="process-item">
                    <div class="item-number">
                        <span>4</span>
                    </div>
                    <div class="item-content">
                        <h3>Serve the Respondent</h3>
                        <p>Notify the respondent about your claim by serving them with a copy of your filed documents.</p>
                        <div class="item-action">
                            <button class="btn-toggle-info" data-target="serviceOptions">
                                <i class="fas fa-info-circle"></i>
                                <span>Service Options</span>
                            </button>
                            <div class="hidden-info" id="serviceOptions">
                                <div class="service-options">
                                    <div class="service-option">
                                        <h4>Registered Mail</h4>
                                        <p>Send documents via registered mail with delivery confirmation.</p>
                                        <p class="option-cost">Cost: E30-E50</p>
                                    </div>
                                    <div class="service-option">
                                        <h4>Court Sheriff</h4>
                                        <p>Have the court sheriff deliver documents to the respondent.</p>
                                        <p class="option-cost">Cost: E100-E200</p>
                                    </div>
                                    <div class="service-option">
                                        <h4>Personal Service</h4>
                                        <p>Have a third party (not yourself) deliver the documents.</p>
                                        <p class="option-cost">Cost: Varies</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="process-connector"></div>
                
                <div class="process-item">
                    <div class="item-number">
                        <span>5</span>
                    </div>
                    <div class="item-content">
                        <h3>Attend the Hearing</h3>
                        <p>Appear at the scheduled hearing date to present your case before the magistrate.</p>
                        <div class="item-action">
                            <button class="btn-toggle-info" data-target="hearingTips">
                                <i class="fas fa-gavel"></i>
                                <span>Hearing Tips</span>
                            </button>
                            <div class="hidden-info" id="hearingTips">
                                <div class="hearing-tips">
                                    <ul>
                                        <li><strong>Be punctual</strong> - Arrive at least 30 minutes before your scheduled hearing time.</li>
                                        <li><strong>Organize documents</strong> - Bring all supporting documents in chronological order.</li>
                                        <li><strong>Be respectful</strong> - Address the magistrate as "Your Worship" and remain professional.</li>
                                        <li><strong>Be prepared</strong> - Practice explaining your case clearly and concisely.</li>
                                        <li><strong>Listen carefully</strong> - Pay attention to questions and only speak when it's your turn.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Claim Value Calculator -->
<section class="calculator-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Claim Value Calculator</h2>
            <div class="heading-line centered"></div>
            <p>Use this tool to estimate the total value of your claim and determine the appropriate filing fee.</p>
        </div>
        
        <div class="calculator-wrapper">
            <div class="calculator-card">
                <form id="claimCalculatorForm">
                    <div class="calc-section">
                        <h3>Principal Amount</h3>
                        <div class="input-group">
                            <span class="input-prefix">E</span>
                            <input type="number" id="principalAmount" placeholder="Enter the main amount claimed" min="0">
                        </div>
                    </div>
                    
                    <div class="calc-section">
                        <h3>Interest (if applicable)</h3>
                        <div class="interest-container">
                            <div class="switch-container">
                                <label class="switch">
                                    <input type="checkbox" id="includeInterest">
                                    <span class="slider round"></span>
                                </label>
                                <span class="switch-label">Include Interest</span>
                            </div>
                            
                            <div class="interest-fields" style="display: none;">
                                <div class="input-row">
                                    <div class="input-group">
                                        <label for="interestRate">Interest Rate (%)</label>
                                        <input type="number" id="interestRate" placeholder="e.g., 10" min="0" max="100" step="0.01">
                                    </div>
                                    
                                    <div class="input-group">
                                        <label for="interestPeriod">Period (months)</label>
                                        <input type="number" id="interestPeriod" placeholder="e.g., 6" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="calc-section">
                        <h3>Additional Costs</h3>
                        <div class="costs-container">
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="damageCosts">Damages/Repairs</label>
                                    <div class="input-with-prefix">
                                        <span class="input-prefix">E</span>
                                        <input type="number" id="damageCosts" placeholder="0" min="0">
                                    </div>
                                </div>
                                
                                <div class="input-group">
                                    <label for="transportCosts">Transport Costs</label>
                                    <div class="input-with-prefix">
                                        <span class="input-prefix">E</span>
                                        <input type="number" id="transportCosts" placeholder="0" min="0">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="otherCosts">Other Costs</label>
                                    <div class="input-with-prefix">
                                        <span class="input-prefix">E</span>
                                        <input type="number" id="otherCosts" placeholder="0" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="calc-actions">
                        <button type="button" id="calculateClaimBtn" class="btn-primary">Calculate Total</button>
                        <button type="button" id="resetCalcBtn" class="btn-outline">Reset</button>
                    </div>
                </form>
                
                <div class="calculation-results" id="calculationResults" style="display: none;">
                    <div class="results-summary">
                        <h3>Claim Summary</h3>
                        <table class="results-table">
                            <tr>
                                <td>Principal Amount:</td>
                                <td id="resultPrincipal">E0.00</td>
                            </tr>
                            <tr class="interest-result" style="display: none;">
                                <td>Interest Amount:</td>
                                <td id="resultInterest">E0.00</td>
                            </tr>
                            <tr>
                                <td>Additional Costs:</td>
                                <td id="resultCosts">E0.00</td>
                            </tr>
                            <tr class="result-total">
                                <td>Total Claim Value:</td>
                                <td id="resultTotal">E0.00</td>
                            </tr>
                            <tr class="filing-fee">
                                <td>Filing Fee:</td>
                                <td id="resultFee">E0.00</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="eligibility-indicator">
                        <div class="indicator-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="indicator-message" id="eligibilityMessage">
                            Your claim is eligible for Small Claims Court.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courtroom Preparation -->
<section class="preparation-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Prepare for Your Day in Court</h2>
            <div class="heading-line centered"></div>
            <p>Tips and guidance to help you effectively present your case in the Small Claims Court.</p>
        </div>
        
        <div class="preparation-container">
            <div class="preparation-tabs">
                <div class="tab active" data-tab="before-court">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Before Court</span>
                </div>
                <div class="tab" data-tab="during-court">
                    <i class="fas fa-gavel"></i>
                    <span>During the Hearing</span>
                </div>
                <div class="tab" data-tab="after-court">
                    <i class="fas fa-flag-checkered"></i>
                    <span>After the Judgment</span>
                </div>
            </div>
            
            <div class="preparation-content">
                <div class="tab-content active" id="before-court">
                    <div class="content-grid">
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-folder-open"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Organize Your Documents</h3>
                                <p>Arrange all supporting documents in chronological order and make at least three copies: one for yourself, one for the respondent, and one for the court.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Arrange Witnesses</h3>
                                <p>If you have witnesses who can support your claim, ensure they are available to attend the hearing. Prepare them by explaining what questions you may ask.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Practice Your Presentation</h3>
                                <p>Practice explaining your case clearly and concisely. Focus on the facts and avoid emotional arguments or irrelevant details.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Plan Your Trip</h3>
                                <p>Confirm the court location and plan to arrive at least 30 minutes early. Check transportation options and parking facilities in advance.</p>
                            </div>
                        </div>
                        
                        <div class="prep-interactive">
                            <h3>Document Checklist Tool</h3>
                            <p>Use this interactive checklist to ensure you have all necessary documents for your specific case type.</p>
                            
                            <div class="checklist-tool">
                                <div class="tool-selector">
                                    <label for="caseTypeSelector">Select your case type:</label>
                                    <select id="caseTypeSelector">
                                        <option value="">Select case type</option>
                                        <option value="unpaid_debt">Unpaid Debt</option>
                                        <option value="property_damage">Property Damage</option>
                                        <option value="contract_dispute">Contract Dispute</option>
                                        <option value="consumer_complaint">Consumer Complaint</option>
                                        <option value="landlord_tenant">Landlord/Tenant Issue</option>
                                    </select>
                                </div>
                                
                                <div class="document-checklist-container" id="documentChecklistContainer">
                                    <p class="select-prompt">Please select a case type to see the recommended documents.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="during-court">
                    <div class="content-grid">
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Dress Appropriately</h3>
                                <p>Dress neatly and conservatively. Business casual attire is appropriate. Your appearance shows respect for the court process.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Address the Court Properly</h3>
                                <p>Address the magistrate as "Your Worship." Speak clearly and respectfully. Stand when the magistrate enters or leaves the courtroom.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Present Your Case Clearly</h3>
                                <p>Start with a brief overview of your claim, then present your evidence in a logical order. Focus on facts rather than emotions or opinions.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Listen Carefully</h3>
                                <p>Pay attention to questions from the magistrate and the respondent. Wait for your turn to speak and never interrupt others.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item full-width">
                            <div class="prep-icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Common Questions from Magistrates</h3>
                                <div class="common-questions">
                                    <div class="question-item">
                                        <div class="question-toggle">
                                            <span>"What is the specific amount you are claiming and how did you calculate it?"</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="question-answer">
                                            <p>Be prepared to break down your claim amount into specific components (principal, interest, costs) and explain how you arrived at each figure.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="question-item">
                                        <div class="question-toggle">
                                            <span>"Have you attempted to resolve this matter with the respondent?"</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="question-answer">
                                            <p>Describe your efforts to resolve the dispute before coming to court. Bring copies of letters, emails, or records of phone calls showing your attempts.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="question-item">
                                        <div class="question-toggle">
                                            <span>"Do you have evidence to support your claim?"</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="question-answer">
                                            <p>Present your documents in an organized manner. For each piece of evidence, briefly explain what it is and how it supports your claim.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="question-item">
                                        <div class="question-toggle">
                                            <span>"What remedy are you seeking from the court?"</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <div class="question-answer">
                                            <p>Clearly state what you want the court to order (e.g., payment of a specific amount, return of property, specific performance of a contract).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="after-court">
                    <div class="content-grid">
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Understand the Judgment</h3>
                                <p>Listen carefully to the magistrate's decision. If anything is unclear, politely ask for clarification before leaving the courtroom.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Collecting Your Judgment</h3>
                                <p>If you win, the court will provide instructions on how the respondent should pay. If they fail to pay, you may need to take additional enforcement steps.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Appeal Options</h3>
                                <p>If you disagree with the judgment, you have 14 days to file an appeal to the High Court. Note that appeals can only be made on points of law, not simply because you disagree with the outcome.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item">
                            <div class="prep-icon">
                                <i class="fas fa-folder"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Keep Records</h3>
                                <p>Maintain copies of all court documents, including the judgment. These will be necessary if further enforcement action is required.</p>
                            </div>
                        </div>
                        
                        <div class="prep-item full-width">
                            <div class="prep-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="prep-content">
                                <h3>Enforcement Options</h3>
                                <div class="enforcement-options">
                                    <div class="option-item">
                                        <h4>Garnishee Order</h4>
                                        <p>The court can order the respondent's employer to deduct money directly from their wages.</p>
                                        <div class="option-link">
                                            <a href="#" class="link-more">Learn More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="option-item">
                                        <h4>Writ of Execution</h4>
                                        <p>The court can authorize the seizure and sale of the respondent's property to satisfy the judgment.</p>
                                        <div class="option-link">
                                            <a href="#" class="link-more">Learn More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="option-item">
                                        <h4>Installment Order</h4>
                                        <p>The court can set up a payment plan for the respondent to pay the judgment amount in installments.</p>
                                        <div class="option-link">
                                            <a href="#" class="link-more">Learn More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Locations Map -->
<section class="locations-section dark-gradient">
    <div class="container">
        <div class="section-heading text-center light">
            <h2>Small Claims Court Locations</h2>
            <div class="heading-line centered"></div>
            <p>Find the nearest Small Claims Court location in Eswatini.</p>
        </div>
        
        <div class="map-container">
            <div class="interactive-map" id="smallClaimsMap">
                <!-- Map will be loaded here by JavaScript -->
                <div class="map-loading">
                    <div class="loading-spinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </div>
                    <p>Loading map...</p>
                </div>
            </div>
            
            <div class="location-sidebar">
                <div class="location-search">
                    <div class="search-input">
                        <input type="text" id="locationSearchInput" placeholder="Search by region or town...">
                        <button id="searchLocationBtn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <button class="my-location-btn" id="findNearestBtn">
                        <i class="fas fa-location-arrow"></i>
                        <span>Find Nearest Court</span>
                    </button>
                </div>
                
                <div class="location-list" id="courtLocationsList">
                    <!-- Court locations will be populated here by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Frequently Asked Questions</h2>
            <div class="heading-line centered"></div>
            <p>Find answers to common questions about the Small Claims Court process.</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-accordion" id="faqAccordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of cases can be heard in Small Claims Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>The Small Claims Court handles civil disputes with monetary values up to E10,000. This includes unpaid debts, property damage, contract disputes, consumer complaints, landlord/tenant issues, and delivery of goods. It cannot handle criminal matters, family law cases (divorce, custody), or complex business disputes.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do I need a lawyer to represent me in Small Claims Court?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>No, legal representation is not required in Small Claims Court. The procedures are simplified to allow individuals to represent themselves. In fact, one of the main benefits of Small Claims Court is that you can avoid the cost of hiring a lawyer. However, you may seek legal advice before filing if you wish.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a Small Claims Court case take to resolve?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Most Small Claims Court cases are resolved within 60 days from filing to judgment. After filing your claim, a hearing date is typically scheduled within 30-45 days. Simple cases may be resolved in a single hearing, while more complex matters might require multiple hearings. The court aims to provide swift justice for minor disputes.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if the respondent doesn't show up for the hearing?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>If the respondent fails to appear at the scheduled hearing after being properly served with the claim, the court may grant a default judgment in your favor. You will still need to provide evidence supporting your claim. The magistrate will review your evidence and may award all or part of your claim if satisfied with the merits of your case.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What if I disagree with the court's decision?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>If you disagree with the Small Claims Court judgment, you have 14 days to file an appeal to the High Court. Appeals can only be made on points of law, not simply because you disagree with the outcome. This means you must demonstrate that the magistrate incorrectly applied the law or made a procedural error. Appeals require payment of additional fees and may involve more complex procedures.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I collect money if I win my case?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>If you win your case, the court will order the respondent to pay the judgment amount. They may be given a specific timeframe to make payment. If they fail to pay voluntarily, you can apply for enforcement measures such as a garnishee order (to deduct from their wages), a writ of execution (to seize and sell property), or an installment order (payment plan). Each enforcement option requires additional applications to the court.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I claim for court fees and other costs?</h3>
                        <div class="question-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you can include filing fees, service costs, and other reasonable expenses related to bringing your claim in the total amount you're seeking. If you win your case, the magistrate may order the respondent to reimburse these costs in addition to the principal amount. Be sure to keep receipts for all expenses and include them in your claim documents.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section dark-gradient">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Need Assistance?</h2>
                <div class="heading-line"></div>
                <p>Contact the Small Claims Court registry for guidance on filing your claim or general inquiries about the court process.</p>
                
                <div class="info-items">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Main Office</h3>
                            <p>Small Claims Court Registry<br>Judicial Building<br>Mbabane, Eswatini</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <p>+268 2404 3000<br>+268 2404 3001</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>smallclaims@judiciary.org.sz<br>info@judiciary.org.sz</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Hours</h3>
                            <p>Monday to Friday: 8:00 AM - 4:30 PM<br>Closed on weekends and public holidays</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <div class="form-heading">
                    <h3>Send an Inquiry</h3>
                    <p>Fill out the form below and we'll respond to your query as soon as possible.</p>
                </div>
                
                <form class="contact-form" id="inquiryForm">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Enter your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inquiryType">Type of Inquiry</label>
                        <select id="inquiryType" required>
                            <option value="">Select an option</option>
                            <option value="filing">Filing a Claim</option>
                            <option value="process">Court Process</option>
                            <option value="fees">Court Fees</option>
                            <option value="locations">Court Locations</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" rows="5" placeholder="Describe your inquiry in detail" required></textarea>
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
<section class="resources-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Helpful Resources</h2>
            <div class="heading-line centered"></div>
            <p>Access forms, guides, and additional information to help you navigate the Small Claims Court process.</p>
        </div>
        
        <div class="resources-grid">
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-file-download"></i>
                </div>
                <h3>Claim Forms</h3>
                <p>Download official Small Claims Court forms and application templates.</p>
                <span class="resource-link">View Forms <i class="fas fa-arrow-right"></i></span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Self-Help Guide</h3>
                <p>Comprehensive guide to representing yourself in Small Claims Court.</p>
                <span class="resource-link">Download Guide <i class="fas fa-arrow-right"></i></span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Video Tutorials</h3>
                <p>Watch step-by-step videos explaining the Small Claims Court process.</p>
                <span class="resource-link">Watch Videos <i class="fas fa-arrow-right"></i></span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Court Calendar</h3>
                <p>View court schedules and check availability for hearings.</p>
                <span class="resource-link">View Calendar <i class="fas fa-arrow-right"></i></span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Legal Terminology</h3>
                <p>Glossary of common legal terms used in Small Claims Court.</p>
                <span class="resource-link">View Glossary <i class="fas fa-arrow-right"></i></span>
            </a>
            
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Legal Aid</h3>
                <p>Information about free or low-cost legal assistance programs.</p>
                <span class="resource-link">Find Help <i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-box">
            <div class="cta-content">
                <h2>Ready to File Your Claim?</h2>
                <p>Get started with your Small Claims Court case today and take the first step toward resolving your dispute.</p>
            </div>
            <div class="cta-buttons">
                <a href="#eligibility-calculator" class="btn-primary">
                    <i class="fas fa-calculator"></i>
                    <span>Check Eligibility</span>
                </a>
                <a href="#filing-process" class="btn-outline">
                    <i class="fas fa-file-alt"></i>
                    <span>Start Filing Process</span>
                </a>
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