<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'How to Build a 6-Month Emergency Fund Step-by-Step - FinWise',
    'description' => 'Calculate your true baseline living expenses and automate high-yield savings to establish an unshakeable cash safety net.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Build Emergency Fund' => 'articles/build-emergency-fund-guide.php'],
    'faqs' => [['q' => 'Should I pay off debt before building an emergency fund?', 'a' => 'Build a starter $1,000 emergency fund first to prevent taking on new debt during minor emergencies. Then aggressively pay off high-interest debt before expanding the fund to 3-6 months.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>How to Build a 6-Month Emergency Fund Step-by-Step</h1>
        <p>Calculate true essential expenses and establish a liquid cash reserve to protect against job loss and unexpected bills.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Building Your Liquid Safety Net</h2>
                <p>An emergency fund is your financial shield against unexpected job loss, emergency medical bills, or costly vehicle repairs. Store funds in high-yield liquid savings accounts for maximum security and immediate access.</p>
                <div class="callout-box">
                    <h4>🏦 Plan Savings Goals</h4>
                    <p>Track your timeline with our <a href="../calculators/savings.php">Savings Goal Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Finance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../finance/emergency-fund.php">Emergency Fund Hub</a></li>
                        <li><a href="../finance/saving-money.php">Saving Money Tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
