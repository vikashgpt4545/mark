<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'About FinWise - Our Financial Mission & Integrity',
    'description' => 'Learn about FinWise, our editorial standards, financial calculation accuracy principles, and commitment to accessible financial education.',
    'breadcrumbs' => ['Home' => 'index.php', 'About Us' => 'about.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>About FinWise</h1>
        <p>Empowering individuals and households with transparent financial guidance and precision calculation engines.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Our Mission</h2>
                <p>FinWise was founded on a simple principle: financial decision-making should be driven by clear data, transparent mathematical models, and unbiased education—not opaque sales pitches or hidden fees.</p>

                <h2>Editorial Integrity & Calculation Standards</h2>
                <p>All financial calculators available on FinWise execute standard mathematical formulas (reducing balance amortization, daily periodic compound interest, and DTI underwriting thresholds) locally in your browser. We never monetize or sell personal calculation inputs.</p>

                <div class="callout-box">
                    <h4>🔒 Financial Disclaimer</h4>
                    <p>FinWise is an educational and informational publisher. Read our full <a href="disclaimer.php">Financial Disclaimer</a> for details.</p>
                </div>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Company Info</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                        <li><a href="disclaimer.php">Financial Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
