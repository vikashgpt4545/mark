<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Auto Loans Guide: Financing New & Used Vehicles - FinWise',
    'description' => 'Compare bank auto financing vs dealership financing, trade-in valuations, loan tenures, and GAP insurance necessity.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Auto Loans' => 'loans/auto-loans.php'],
    'faqs' => [['q' => 'Is it better to get pre-approved for an auto loan before visiting a dealer?', 'a' => 'Yes, pre-approval gives you leverage to negotiate vehicle pricing and prevents dealer finance markup on interest rates.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Auto Loans & Vehicle Financing Guide</h1>
        <p>Compare new and used vehicle financing, bank vs dealer loans, and trade-in valuations.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Smart Vehicle Financing Strategies</h2>
                <p>Auto loans are secured loans backed by the vehicle being purchased. Understanding loan terms, APR, down payment impact, and GAP protection prevents you from becoming "upside-down" on your car loan.</p>
                <div class="callout-box">
                    <h4>🚗 Calculate Vehicle Payments</h4>
                    <p>Estimate payments using our <a href="../calculators/auto-loan.php">Auto Loan Payment Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/auto-loan.php">Auto Loan Calculator</a></li>
                        <li><a href="../insurance/car-insurance.php">Car Insurance Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
