<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Understanding Loan Interest Rates & APR - FinWise',
    'description' => 'Deep dive into Nominal Interest Rates vs APR, fixed vs floating rates, central bank prime rate impacts, and rate negotiation tips.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Loan Interest' => 'loans/loan-interest.php'],
    'faqs' => [['q' => 'What is the difference between Interest Rate and APR?', 'a' => 'The interest rate represents the annual cost of borrowing the principal amount, while APR (Annual Percentage Rate) includes the interest rate PLUS origination fees, closing costs, and processing charges.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Understanding Loan Interest Rates & APR</h1>
        <p>Distinguish nominal interest rates from APR, fixed vs floating mechanics, and lender pricing models.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Decoding Borrowing Costs</h2>
                <p>Understanding the true cost of borrowing requires analyzing Annual Percentage Rates (APR) rather than simple headline interest rates alone.</p>
                <div class="callout-box">
                    <h4>💡 Related Guide</h4>
                    <p>Read our full comparison guide: <a href="../articles/fixed-vs-variable-rate-guide.php">Fixed vs Variable Interest Rates Guide</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="loan-emi.php">Loan EMI Mechanics</a></li>
                        <li><a href="loan-repayment.php">Loan Repayment Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
