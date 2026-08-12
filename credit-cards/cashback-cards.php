<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Cashback Credit Cards: Earn Money Back on Everyday Spend',
    'description' => 'Maximize flat-rate vs rotating tier cashback cards on grocery, gas, dining, and online shopping spending categories.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Cashback Cards' => 'credit-cards/cashback-cards.php'],
    'faqs' => [['q' => 'What is the difference between flat-rate and tiered cashback cards?', 'a' => 'Flat-rate cards pay a uniform percentage (e.g., 2% on all purchases), whereas tiered cards pay higher percentages (e.g., 3% to 5%) on specific categories like dining or groceries.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Cashback Credit Cards Guide</h1>
        <p>Earn liquid dollar rebates on daily groceries, dining out, gas, and online shopping.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Unlocking Cashback Value</h2>
                <p>Cashback credit cards return a direct percentage of your spending as statement credits, bank deposits, or gift cards. Choosing between a simple 2% flat-rate card and a 5% category card depends on your spending distribution.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Card Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="rewards-cards.php">Rewards Cards</a></li>
                        <li><a href="credit-card-fees.php">Credit Card Fees</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
