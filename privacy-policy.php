<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'Privacy Policy - FinWise',
    'description' => 'Our privacy policy details how FinWise protects user data, manages cookie preferences, and respects client-side calculation privacy.',
    'breadcrumbs' => ['Home' => 'index.php', 'Privacy Policy' => 'privacy-policy.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>Privacy Policy</h1>
        <p>Transparency regarding how we handle data and preserve your privacy online.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="article-body">
            <h2>Data Collection & Processing</h2>
            <p>At FinWise, your financial privacy is paramount. All calculator inputs (loan amounts, interest rates, salary numbers) execute entirely client-side inside your web browser. We do not store, track, or transmit your calculator inputs to external servers.</p>

            <h2>Cookies & Analytics</h2>
            <p>We use standard, non-identifying cookies to analyze site traffic performance, improve page loading speed, and optimize user experience across modern browsers.</p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
