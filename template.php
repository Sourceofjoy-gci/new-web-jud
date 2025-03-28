<?php
/**
 * Eswatini Judiciary Website Template
 * Redesigned header and footer components
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Judiciary of Eswatini' : 'Judiciary of Eswatini'; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Additional page-specific CSS can be included here -->
    <?php if (isset($pageStyles)): ?>
        <?php foreach ($pageStyles as $style): ?>
            <link rel="stylesheet" href="<?php echo $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <!-- Header Section -->
    <header class="site-header">
        <!-- Top Information Bar -->
        <div class="top-info-bar">
            <div class="container">
                <div class="info-contacts">
                    <a href="mailto:info@judiciary.org.sz" class="info-link">
                        <i class="fas fa-envelope"></i>
                        <span>info@judiciary.org.sz</span>
                    </a>
                    <a href="tel:+2682404 2968" class="info-link">
                        <i class="fas fa-phone-alt"></i>
                        <span>+268 2404 2968</span>
                    </a>
                </div>
                <div class="info-socials">
                    <a href="#" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Main Header -->
        <div class="main-header">
            <div class="container">
                <div class="header-wrapper">
                    <!-- Logo -->
                    <div class="logo-container">
                        <a href="index.php" class="logo">
                            <span class="logo-text">JUDICIARY<span>OF</span>ESWATINI</span>
                        </a>
                    </div>
                    
                    <!-- Navigation -->
                    <nav class="main-navigation">
                        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
                            <span class="menu-icon"></span>
                            <span class="screen-reader-text">Menu</span>
                        </button>
                        
                        <div class="navigation-wrapper" id="primary-menu">
                            <ul class="nav-menu">
                                <li class="nav-item active">
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item has-submenu">
                                    <a href="about.php" class="nav-link">
                                        About Us
                                        <i class="fas fa-chevron-down dropdown-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="about.php#vision-mission">Vision & Mission</a></li>
                                        <li><a href="about.php#judicial-power">Judicial Power</a></li>
                                        <li><a href="about.php#judiciary-structure">Judiciary Structure</a></li>
                                        <li><a href="about.php#chief-justice">Chief Justice Functions</a></li>
                                        <li><a href="about.php#independence">Independence of the Judiciary</a></li>
                                        <li><a href="about.php#history">History</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item has-submenu">
                                    <a href="courts.php" class="nav-link">
                                        Our Courts
                                        <i class="fas fa-chevron-down dropdown-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="supreme-court.php">Supreme Court</a></li>
                                        <li><a href="high-court.php">High Court</a></li>
                                        <li><a href="commercial-court.php">Commercial Court</a></li>
                                        <li><a href="industrial-court.php">Industrial Court</a></li>
                                        <li><a href="industrial-court-appeal.php">Industrial Court of Appeal</a></li>
                                        <li><a href="small-claims-court.php">Small Claims Court</a></li>
                                        <li><a href="magistrate-courts.php">Magistrate Courts</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="master.php" class="nav-link">Master of High Court</a>
                                </li>
                                <li class="nav-item">
                                    <a href="jsc.php" class="nav-link">JSC</a>
                                </li>
                                <li class="nav-item">
                                    <a href="news.php" class="nav-link">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="site-content">
        <?php if (isset($pageContent)): ?>
            <?php echo $pageContent; ?>
        <?php else: ?>
            <!-- Default content or placeholder -->
            <div class="container">
                <h1>Welcome to the Judiciary of Eswatini</h1>
                <p>Please specify page content.</p>
            </div>
        <?php endif; ?>
    </main>

    <!-- Footer Section -->
    <footer class="site-footer">
        <!-- Newsletter Section -->
        <div class="footer-newsletter">
            <div class="container">
                <div class="newsletter-wrapper">
                    <div class="newsletter-content">
                        <h3>Subscribe to Our Newsletter</h3>
                        <p>Stay informed with the latest news, updates, and announcements from the Judiciary of Eswatini.</p>
                    </div>
                    <form action="subscribe.php" method="post" class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email Address" required>
                            <button type="submit" class="btn-subscribe">Subscribe <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Main Footer -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-widgets">
                    <!-- About Widget -->
                    <div class="footer-widget about-widget">
                        <div class="widget-logo">
                            <span class="logo-text">JUDICIARY<span>OF</span>ESWATINI</span>
                        </div>
                        <p class="about-text">The judicial power of Eswatini vests in the Judiciary. Accordingly, an organ or agency of the Crown shall not have or be conferred with final...</p>
                        <a href="about.php" class="widget-link">Read More</a>
                    </div>
                    
                    <!-- Quick Links Widget -->
                    <div class="footer-widget links-widget">
                        <h4 class="widget-title">Popular Links</h4>
                        <ul class="widget-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="eswatinilii.php">EswatiniLii</a></li>
                            <li><a href="https://www.gov.sz" target="_blank">Eswatini Government</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="news.php">News</a></li>
                        </ul>
                    </div>
                    
                    <!-- Secondary Links Widget -->
                    <div class="footer-widget links-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="widget-links">
                            <li><a href="faqs.php">FAQs</a></li>
                            <li><a href="help.php">Help</a></li>
                            <li><a href="terms.php">Terms</a></li>
                            <li><a href="privacy.php">Privacy</a></li>
                            <li><a href="sitemap.php">Site Map</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info Widget -->
                    <div class="footer-widget contact-widget">
                        <h4 class="widget-title">Contact Information</h4>
                        <div class="contact-info">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h5>High Court of Eswatini</h5>
                                    <p>Hospital Hill, Mbabane, Eswatini</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h5>Email Us</h5>
                                    <a href="mailto:info@judiciary.org.sz">info@judiciary.org.sz</a>
                                </div>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <h5>Call Us</h5>
                                    <a href="tel:+2682404 2968">+268 2404 2968</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> Judiciary of Eswatini. All Rights Reserved.</p>
                </div>
                <div class="footer-bottom-links">
                    <a href="terms.php">Terms of Use</a>
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="accessibility.php">Accessibility</a>
                </div>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Back to Top Button -->
        <button id="back-to-top" aria-label="Back to Top">
            <i class="fas fa-chevron-up"></i>
        </button>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/header-footer.js"></script>
    <!-- Additional page-specific scripts can be included here -->
    <?php if (isset($pageScripts)): ?>
        <?php foreach ($pageScripts as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>