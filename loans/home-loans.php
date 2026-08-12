<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Home Loans & Mortgage Masterclass - FinWise',
    'description' => 'Navigate fixed-rate mortgages, ARM loans, down payment requirements, closing costs, and mortgage refinancing strategies.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Home Loans' => 'loans/home-loans.php'],
    'faqs' => [['q' => 'What is the standard down payment for a home loan?', 'a' => 'While 20% down eliminates Private Mortgage Insurance (PMI), conventional mortgages are accessible with down payments as low as 3% to 5% depending on credit credentials.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Home Loans & Mortgage Masterclass</h1>
        <p>Master mortgage selection, fixed vs adjustable rates, down payments, and closing costs.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Navigating Your Home Loan Journey</h2>
                <p>A home loan or mortgage is a long-term loan secured by real estate property. Because mortgage terms extend across 15 to 30 years, securing even a 0.5% lower interest rate saves tens of thousands of dollars over the lifetime of the loan.</p>
                <div class="callout-box">
                    <h4>🏠 Mortgage EMI Calculator</h4>
                    <p>Calculate exact monthly payments and amortization schedules using our <a href="../calculators/home-loan.php">Home Loan Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Calculators</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/home-loan.php">Home Loan Calculator</a></li>
                        <li><a href="loan-interest.php">Interest Rate Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
