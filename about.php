<?php
/**
 * Eswatini Judiciary Website - About Page
 */

// Set the page title
$pageTitle = "About Us - Judiciary of Eswatini";

// Include any page-specific styles
$pageStyles = [
    'assets/css/about.css'
];

// Include any page-specific scripts
$pageScripts = [
    'assets/js/about.js'
];

// Start output buffering to capture the page content
ob_start();
?>

<!-- Hero Section -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="reveal-text">About the Judiciary</h1>
            <p class="tagline reveal-text">Upholding Justice, Preserving Independence, Serving the Nation</p>
            <div class="hero-actions reveal-fade">
                <a href="#about-content" class="btn-scroll">
                    <span>Explore</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</section>

<!-- About Content Section -->
<section id="about-content" class="about-content">
    <div class="container">
        <div class="about-grid">
            <!-- Sidebar Navigation -->
            <div class="about-sidebar reveal-left">
                <div class="sidebar-sticky">
                    <div class="sidebar-header">
                        <h3>Explore</h3>
                    </div>
                    <ul class="sidebar-nav">
                        <li><a href="#vision-mission" class="sidebar-link active"><i class="fas fa-eye"></i> Vision & Mission</a></li>
                        <li><a href="#judicial-power" class="sidebar-link"><i class="fas fa-gavel"></i> Judicial Power</a></li>
                        <li><a href="#judiciary-structure" class="sidebar-link"><i class="fas fa-sitemap"></i> Judiciary Structure</a></li>
                        <li><a href="#chief-justice" class="sidebar-link"><i class="fas fa-user-tie"></i> Chief Justice Functions</a></li>
                        <li><a href="#independence" class="sidebar-link"><i class="fas fa-balance-scale"></i> Independence</a></li>
                        <li><a href="#history" class="sidebar-link"><i class="fas fa-history"></i> History</a></li>
                    </ul>
                    <div class="sidebar-support">
                        <h4>Need Assistance?</h4>
                        <p>Contact us for any inquiries about the Eswatini Judiciary.</p>
                        <a href="contact.php" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="about-main">
                <!-- Vision & Mission Section -->
                <section id="vision-mission" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">01</span>
                        <h2>Vision & Mission</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="vision-mission-cards">
                        <div class="card vision-card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3>Our Vision</h3>
                            </div>
                            <div class="card-body">
                                <p>To uphold the rule of law and effectively dispense justice to all citizens of the Kingdom, ensuring that the judiciary maintains its independence and respect.</p>
                            </div>
                        </div>
                        
                        <div class="card mission-card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3>Our Mission</h3>
                            </div>
                            <div class="card-body">
                                <p>To administer justice fairly and to all members of society regardless of status, to uphold the provisions of the Constitution of the country, and to offer public service of the highest standard.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="values-container">
                        <h3>Our Core Values</h3>
                        <div class="values-grid">
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4>Integrity</h4>
                                <p>Maintaining the highest standards of professional and personal conduct</p>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h4>Impartiality</h4>
                                <p>Making decisions free from bias and external influence</p>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4>Respect</h4>
                                <p>Treating all people with dignity and understanding</p>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h4>Excellence</h4>
                                <p>Striving for the highest standards in all our operations</p>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h4>Independence</h4>
                                <p>Maintaining judicial autonomy in decision-making</p>
                            </div>
                            
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <h4>Accountability</h4>
                                <p>Being answerable for our actions and decisions</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Judicial Power Section -->
                <section id="judicial-power" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">02</span>
                        <h2>Judicial Power</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="judicial-power-content">
                        <div class="power-illustration">
                            <img src="assets/images/judicial-power.svg" alt="Judicial Power Illustration">
                        </div>
                        
                        <div class="power-description">
                            <p>The judicial power of Eswatini is vested in the Judiciary. This power is derived from the Constitution, which establishes the Judiciary as the third arm of government alongside the Executive and the Legislature.</p>
                            
                            <h3>Constitutional Foundation</h3>
                            <p>The Constitution of Eswatini establishes that judicial power is vested exclusively in the Judiciary, which shall be independent and subject only to the Constitution. This forms the basis for the administration of justice throughout the Kingdom.</p>
                            
                            <div class="power-principles">
                                <h3>Key Constitutional Principles</h3>
                                <div class="principles-grid">
                                    <div class="principle-card">
                                        <div class="principle-number">01</div>
                                        <h4>Rule of Law</h4>
                                        <p>All persons and institutions are accountable to the law, which is fairly applied and enforced.</p>
                                    </div>
                                    
                                    <div class="principle-card">
                                        <div class="principle-number">02</div>
                                        <h4>Judicial Independence</h4>
                                        <p>The Judiciary functions independently of the executive and legislative branches of government.</p>
                                    </div>
                                    
                                    <div class="principle-card">
                                        <div class="principle-number">03</div>
                                        <h4>Equality Before the Law</h4>
                                        <p>All persons, regardless of status, are entitled to equal protection of the law.</p>
                                    </div>
                                    
                                    <div class="principle-card">
                                        <div class="principle-number">04</div>
                                        <h4>Access to Justice</h4>
                                        <p>All persons have the right to seek legal redress through the court system.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Judiciary Structure Section -->
                <section id="judiciary-structure" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">03</span>
                        <h2>Judiciary Structure</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="structure-content">
                        <div class="court-hierarchy">
                            <div class="hierarchy-level supreme-court">
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <h3>Supreme Court</h3>
                                    <p>Final Appellate Court</p>
                                </div>
                                <div class="hierarchy-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            
                            <div class="hierarchy-level superior-courts">
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <h3>High Court</h3>
                                    <p>Superior Court</p>
                                </div>
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <h3>Industrial Court of Appeal</h3>
                                    <p>Labor Appeal Court</p>
                                </div>
                                <div class="hierarchy-arrow">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            
                            <div class="hierarchy-level specialized-courts">
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-gavel"></i>
                                    </div>
                                    <h3>Magistrate Courts</h3>
                                    <p>First Instance Courts</p>
                                </div>
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-balance-scale-right"></i>
                                    </div>
                                    <h3>Industrial Court</h3>
                                    <p>Labor Disputes</p>
                                </div>
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <h3>Small Claims Court</h3>
                                    <p>Minor Civil Disputes</p>
                                </div>
                                <div class="court-card">
                                    <div class="court-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h3>Swazi National Courts</h3>
                                    <p>Customary Law</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="structure-tabs">
                            <div class="tab-navigation">
                                <button class="tab-btn active" data-tab="jurisdiction">Jurisdiction</button>
                                <button class="tab-btn" data-tab="appeals">Appeals Process</button>
                                <button class="tab-btn" data-tab="specialized">Specialized Courts</button>
                                <button class="tab-btn" data-tab="access">Access to Justice</button>
                            </div>
                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="jurisdiction">
                                    <h3>Court Jurisdiction</h3>
                                    <p>Each court in the Eswatini judicial system has specific jurisdictional powers defined by law:</p>
                                    <ul>
                                        <li><strong>Supreme Court:</strong> Final appellate jurisdiction over all matters.</li>
                                        <li><strong>High Court:</strong> Unlimited original jurisdiction in civil and criminal matters, and appellate jurisdiction from lower courts.</li>
                                        <li><strong>Magistrate Courts:</strong> Limited jurisdiction in civil and criminal matters as prescribed by statute.</li>
                                        <li><strong>Industrial Court:</strong> Exclusive jurisdiction over labor and employment disputes.</li>
                                        <li><strong>Small Claims Court:</strong> Civil matters involving claims below a specified monetary threshold.</li>
                                        <li><strong>Swazi National Courts:</strong> Matters of Swazi law and custom between Swazi citizens.</li>
                                    </ul>
                                </div>
                                
                                <div class="tab-pane" id="appeals">
                                    <h3>Appeals Process</h3>
                                    <p>The appeals process follows a hierarchical structure:</p>
                                    <ol>
                                        <li>Decisions of the Magistrate Courts, Small Claims Court, and Swazi National Courts may be appealed to the High Court.</li>
                                        <li>Decisions of the Industrial Court may be appealed to the Industrial Court of Appeal.</li>
                                        <li>Decisions of the High Court and Industrial Court of Appeal may be appealed to the Supreme Court, which is the final court of appeal.</li>
                                    </ol>
                                    <p>Appeals must be filed within prescribed time limits and according to established court rules and procedures.</p>
                                </div>
                                
                                <div class="tab-pane" id="specialized">
                                    <h3>Specialized Courts</h3>
                                    <p>The Eswatini judiciary includes specialized courts designed to handle specific types of cases:</p>
                                    <ul>
                                        <li><strong>Industrial Court:</strong> Resolves labor disputes, unfair dismissal claims, and workplace issues.</li>
                                        <li><strong>Commercial Court:</strong> A division of the High Court that handles complex commercial and business disputes.</li>
                                        <li><strong>Small Claims Court:</strong> Provides quick, informal resolution of minor civil disputes.</li>
                                        <li><strong>Children's Court:</strong> A specialized court dealing with matters related to children and juveniles.</li>
                                    </ul>
                                </div>
                                
                                <div class="tab-pane" id="access">
                                    <h3>Access to Justice</h3>
                                    <p>The Eswatini Judiciary is committed to improving access to justice through:</p>
                                    <ul>
                                        <li><strong>Court Modernization:</strong> Implementing electronic case management and digital services.</li>
                                        <li><strong>Legal Aid:</strong> Supporting pro bono services and legal aid initiatives for disadvantaged citizens.</li>
                                        <li><strong>Court Proximity:</strong> Establishing magistrate courts throughout the country to bring justice closer to communities.</li>
                                        <li><strong>Public Education:</strong> Conducting outreach programs to educate the public about their legal rights and the court system.</li>
                                        <li><strong>Alternative Dispute Resolution:</strong> Promoting mediation and arbitration as alternatives to litigation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Chief Justice Functions Section -->
                <section id="chief-justice" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">04</span>
                        <h2>Chief Justice Functions</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="chief-justice-content">
                        <div class="cj-profile">
                            <div class="cj-image-container">
                                <div class="cj-image-frame">
                                    <img src="assets/images/chief-justice.jpg" alt="Chief Justice">
                                </div>
                            </div>
                            <div class="cj-info">
                                <h3>Chief Justice</h3>
                                <p class="cj-title">Head of the Judiciary</p>
                                <p class="cj-description">The Chief Justice is the head of the Judiciary and is responsible for the administration and supervision of the courts.</p>
                            </div>
                        </div>
                        
                        <div class="cj-functions">
                            <h3>Key Functions</h3>
                            <div class="functions-grid">
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>Performance Monitoring</h4>
                                        <p>Monitor and evaluate the performance of all courts and judicial officers.</p>
                                    </div>
                                </div>
                                
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>Administrative Procedures</h4>
                                        <p>Establish administrative procedures for the efficient operation of courts.</p>
                                    </div>
                                </div>
                                
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>Annual Reporting</h4>
                                        <p>Submit annual reports on the judiciary to the King and Parliament.</p>
                                    </div>
                                </div>
                                
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>Making Recommendations</h4>
                                        <p>Make recommendations for improving the administration of justice.</p>
                                    </div>
                                </div>
                                
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>Supervision of Staff</h4>
                                        <p>Supervise and direct the performance of judicial officers and staff.</p>
                                    </div>
                                </div>
                                
                                <div class="function-card">
                                    <div class="function-icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="function-details">
                                        <h4>JSC Leadership</h4>
                                        <p>Chair the Judicial Service Commission for judicial appointments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Independence Section -->
                <section id="independence" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">05</span>
                        <h2>Independence of the Judiciary</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="independence-content">
                        <div class="independence-banner">
                            <div class="banner-content">
                                <div class="banner-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Judicial Independence</h3>
                            </div>
                        </div>
                        
                        <div class="independence-description">
                            <p>In the Kingdom of Eswatini, the Judiciary is vested with judicial power and shall be independent and subject only to the Constitution. Neither the Crown nor Parliament shall have the power to control the exercise of judicial power.</p>
                            
                            <p>The essence of judicial independence lies in the freedom of a judicial officer to hear and decide cases without external pressure or influence and with only the law and conscience as guides. This principle is foundational to the rule of law and the protection of the rights of all persons within the jurisdiction.</p>
                            
                            <div class="independence-quote">
                                <i class="fas fa-quote-left quote-icon"></i>
                                <blockquote>
                                    The independence of the judiciary is not a privilege of judicial officers but a guarantee for the people to get impartial justice.
                                </blockquote>
                            </div>
                        </div>
                        
                        <div class="independence-aspects">
                            <h3>Key aspects of judicial independence in Eswatini include:</h3>
                            
                            <div class="aspects-grid">
                                <div class="aspect-card">
                                    <div class="aspect-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <h4>Institutional independence</h4>
                                    <p>The Judiciary as an institution is separate from the executive and legislative branches of government.</p>
                                </div>
                                
                                <div class="aspect-card">
                                    <div class="aspect-icon">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <h4>Individual independence</h4>
                                    <p>Individual judges and judicial officers are protected from improper influences in their decision-making.</p>
                                </div>
                                
                                <div class="aspect-card">
                                    <div class="aspect-icon">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                    <h4>Financial autonomy</h4>
                                    <p>The Judiciary has a separate budget allocation to ensure operational independence.</p>
                                </div>
                                
                                <div class="aspect-card">
                                    <div class="aspect-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>Security of tenure</h4>
                                    <p>Judicial officers have security of tenure, protecting them from arbitrary removal.</p>
                                </div>
                                
                                <div class="aspect-card">
                                    <div class="aspect-icon">
                                        <i class="fas fa-tasks"></i>
                                    </div>
                                    <h4>Administrative independence</h4>
                                    <p>The Judiciary has control over administrative decisions that directly affect the exercise of its judicial function.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- History Section -->
                <section id="history" class="content-section reveal-right">
                    <div class="section-header">
                        <span class="section-number">06</span>
                        <h2>History</h2>
                        <div class="section-line"></div>
                    </div>
                    
                    <div class="history-content">
                        <div class="history-intro">
                            <p>The judicial system of Eswatini has evolved over centuries, from traditional dispute resolution methods to the modern court system we see today. This evolution reflects the Kingdom's unique blend of traditional customary law and Roman-Dutch common law.</p>
                        </div>
                        
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>Pre-1907</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Traditional Era</h3>
                                    <p>Justice was administered through traditional Swazi customary law. Disputes were resolved by chiefs and eventually could be appealed to the King (Ngwenyama) if necessary.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>1907</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Colonial Influence</h3>
                                    <p>Formal courts were established during the colonial period, introducing European legal concepts while maintaining traditional courts for customary matters.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>1968</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Independence</h3>
                                    <p>Upon gaining independence, Eswatini retained the dual legal system while beginning to develop its own unique judicial framework.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>1980s-90s</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Modernization</h3>
                                    <p>Significant reforms began to modernize the court system, including establishment of specialized courts like the Industrial Court.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>2005</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Constitutional Era</h3>
                                    <p>The adoption of the Constitution formalized judicial independence and established the current structure of the judiciary.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-year">
                                    <span>Present</span>
                                </div>
                                <div class="timeline-content">
                                    <h3>Current System</h3>
                                    <p>Today's judiciary balances traditional values with modern legal principles, continuing to evolve to meet the needs of all citizens.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dual-system">
                            <h3>The Dual Legal System</h3>
                            <div class="dual-system-grid">
                                <div class="dual-card common-law">
                                    <div class="dual-icon">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <h4>Roman-Dutch Common Law</h4>
                                    <ul>
                                        <li>Applied in formal courts</li>
                                        <li>Written law and precedent</li>
                                        <li>Handles civil, criminal, commercial matters</li>
                                        <li>Presided over by trained legal professionals</li>
                                    </ul>
                                </div>
                                
                                <div class="dual-card customary-law">
                                    <div class="dual-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <h4>Swazi Customary Law</h4>
                                    <ul>
                                        <li>Applied in Swazi National Courts</li>
                                        <li>Based on traditions and customs</li>
                                        <li>Handles matters between Swazi citizens</li>
                                        <li>Emphasizes reconciliation and community harmony</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="about-cta">
    <div class="container">
        <div class="cta-content reveal-fade">
            <h2>Committed to Justice and the Rule of Law</h2>
            <p>Learn more about our courts and services or contact us with any questions.</p>
            <div class="cta-buttons">
                <a href="courts.php" class="btn btn-primary">Explore Our Courts</a>
                <a href="contact.php" class="btn btn-outline">Contact Us</a>
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