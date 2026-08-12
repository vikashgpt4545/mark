<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Loan EMI Mechanics & Formula Breakdown - FinWise',
    'description' => 'Learn how Equated Monthly Installments work, how principal and interest amortize over time, and techniques to shorten tenure.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Loan EMI' => 'loans/loan-emi.php'],
    'faqs' => [['q' => 'What does EMI stand for?', 'a' => 'EMI stands for Equated Monthly Installment—a fixed monthly payment made by a borrower to a lender on a specified date each month.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Loan EMI Mechanics & Formula Breakdown</h1>
        <p>Understand reducing balance amortization, interest vs principal breakdown, and EMI reduction tips.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Mathematical Mechanics of Loan EMI</h2>
                <p>Equated Monthly Installments (EMI) combine principal repayment and interest charges into a uniform monthly amount across your loan tenure.</p>
                <div class="callout-box">
                    <h4>🧮 Amortization Mathematical Formula</h4>
                    <p><code>EMI = [P x R x (1+R)^N] / [(1+R)^N - 1]</code></p>
                    <p style="font-size:0.875rem; margin-top:0.5rem;">Where <strong>P</strong> = Principal Loan Amount, <strong>R</strong> = Monthly Interest Rate, and <strong>N</strong> = Number of Monthly Installments.</p>
                </div>
                <p><a href="../calculators/loan-emi.php" class="btn btn-emerald">Launch Interactive Loan EMI Calculator →</a></p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="loan-interest.php">Interest Rates & APR</a></li>
                        <li><a href="loan-repayment.php">Accelerated Payoff</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
