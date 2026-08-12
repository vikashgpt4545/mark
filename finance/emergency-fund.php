<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Building & Protecting Your Emergency Fund - FinWise',
    'description' => 'Why 3 to 6 months of liquid expenses saved protects you against job loss, medical emergencies, and predatory debt.',
    'breadcrumbs' => ['Home' => 'index.php', 'Finance' => 'finance/index.php', 'Emergency Fund' => 'finance/emergency-fund.php'],
    'faqs' => [['q' => 'Where should I store my emergency fund?', 'a' => 'Keep your emergency fund in a High-Yield Savings Account (HYSA) for total liquidity, principal safety, and interest earning power.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Building & Protecting Your Emergency Fund</h1>
        <p>Your ultimate financial buffer against unexpected life events.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The Essential Shock Absorber</h2>
                <p>An emergency fund is liquid cash set aside strictly for unplanned financial emergencies. It stops you from accumulating credit card debt or dipping into retirement accounts when unexpected expenses arise.</p>
                <div class="callout-box">
                    <h4>💡 Related Guide</h4>
                    <p>Read our full step-by-step tutorial: <a href="../articles/build-emergency-fund-guide.php">How to Build an Emergency Fund Fast</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Finance Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="saving-money.php">Saving Money Guide</a></li>
                        <li><a href="budgeting.php">Budgeting Strategies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
