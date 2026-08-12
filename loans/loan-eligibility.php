<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Loan Eligibility Criteria & Maximizing Approval - FinWise',
    'description' => 'Key factors lenders evaluate: Debt-to-Income (DTI) ratio, credit history, proof of income, employment stability, and co-signers.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Loan Eligibility' => 'loans/loan-eligibility.php'],
    'faqs' => [['q' => 'How does my Debt-to-Income (DTI) ratio affect loan approval?', 'a' => 'Lenders prefer a DTI ratio below 36% to 43%. A lower DTI proves you have sufficient residual cash to service new monthly loan debt.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Loan Eligibility Criteria & Maximizing Approval</h1>
        <p>Master Debt-to-Income (DTI) thresholds, credit score benchmarks, and document readiness.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>How Lenders Evaluate Borrowers</h2>
                <p>Securing prime loan approval requires meeting key financial benchmarks across credit history, income stability, and overall leverage.</p>
                <div class="callout-box">
                    <h4>⚖️ Check Your Maximum Borrowing Capacity</h4>
                    <p>Calculate your safe loan ceiling using our <a href="../calculators/loan-affordability.php">Loan Affordability Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Eligibility Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/loan-affordability.php">Affordability Calculator</a></li>
                        <li><a href="../credit-cards/credit-score.php">Credit Score Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
