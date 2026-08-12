<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'Financial Disclaimer - FinWise',
    'description' => 'Important disclosure regarding educational content, calculator estimations, and professional financial/legal advice boundaries.',
    'breadcrumbs' => ['Home' => 'index.php', 'Financial Disclaimer' => 'disclaimer.php']
];

include __DIR__ . '/components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
        <h1>Financial Disclaimer</h1>
        <p>Important information regarding educational publishing and calculation estimations.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="article-body">
            <h2>Educational & Informational Purpose Only</h2>
            <p>FinWise is an independent financial education portal. All calculators, guides, rates, matrices, and comparisons are provided strictly for educational and self-analytical purposes.</p>

            <h2>No Professional Financial or Fiduciary Advice</h2>
            <p>FinWise is not a licensed financial advisor, lender, insurer, broker, or legal firm. Calculation results are estimates based on user inputs and mathematical formulas. Always consult a certified financial planner (CFP) or legal professional before executing major borrowing or investment commitments.</p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
