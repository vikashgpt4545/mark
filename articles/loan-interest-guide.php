<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Understanding Loan Interest: Nominal Rate vs APR Explained - FinWise',
    'description' => 'Why headline interest rates lie and why Annual Percentage Rate (APR) reveals the true total borrowing cost of any loan.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Loan Interest Guide' => 'articles/loan-interest-guide.php'],
    'faqs' => [['q' => 'Why is APR higher than the interest rate?', 'a' => 'APR includes the base interest rate PLUS mandatory finance charges, lender origination fees, and administrative processing fees.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Understanding Loan Interest: Nominal Rate vs APR Explained</h1>
        <p>Demystify nominal interest rates, APR pricing, compounding frequency, and hidden loan fees.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The Difference Between Interest Rate & APR</h2>
                <p>When comparing loan offers, looking only at the headline interest rate can be deceptive. APR normalizes total loan expenses into a unified annual percentage.</p>
                <div class="callout-box">
                    <h4>🧮 Test Monthly Payments</h4>
                    <p>Calculate your loan payments with our <a href="../calculators/loan-emi.php">Loan EMI Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/loan-interest.php">Interest Rate Guide</a></li>
                        <li><a href="fixed-vs-variable-rate-guide.php">Fixed vs Variable Rates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
