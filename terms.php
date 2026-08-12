<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'Terms of Service - FinWise',
    'description' => 'Terms of service governing access and use of the FinWise website, tools, content, and calculation software.',
    'breadcrumbs' => ['Home' => 'index.php', 'Terms of Service' => 'terms.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>Terms of Service</h1>
        <p>Terms and conditions governing the use of FinWise financial resources.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="article-body">
            <h2>Acceptance of Terms</h2>
            <p>By accessing or utilizing FinWise guides, interactive calculators, or comparison portals, you agree to comply with these Terms of Service. If you do not agree, please discontinue use of the website.</p>

            <h2>Intellectual Property Rights</h2>
            <p>All content, tools, design assets, software code, and educational material published on FinWise are protected by intellectual property and copyright laws.</p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
