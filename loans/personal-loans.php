<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Personal Loans Guide: Rates, Terms & Approval - FinWise',
    'description' => 'Comprehensive guide to unsecured personal loans. Compare interest rates, approval limits, repayment schedules, and debt consolidation benefits.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Personal Loans' => 'loans/personal-loans.php'],
    'faqs' => [['q' => 'Can I pay off a personal loan early without penalty?', 'a' => 'Many modern lenders offer fee-free pre-payment options, but always verify whether your loan agreement includes prepayment penalty fees.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Personal Loans Master Guide</h1>
        <p>Everything you need to know about rates, limits, approval requirements, and debt consolidation.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>What is a Personal Loan?</h2>
                <p>A personal loan is an installment loan provided by banks, credit unions, or online lenders that supplies a lump sum of cash repaid over fixed monthly installments ranging from 1 to 7 years.</p>
                <div class="callout-box">
                    <h4>🧮 Estimate Your Monthly Payment</h4>
                    <p>Use our <a href="../calculators/personal-loan.php">Personal Loan Calculator</a> to test interest rates and terms.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="loan-emi.php">Loan EMI Guide</a></li>
                        <li><a href="loan-eligibility.php">Loan Eligibility</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
