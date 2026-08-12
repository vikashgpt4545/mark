<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Rewards & Points Credit Cards Master Guide - FinWise',
    'description' => 'How to earn, multiply, and redeem rewards points for maximum value across gift cards, statement credits, and merchandise.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Rewards Cards' => 'credit-cards/rewards-cards.php'],
    'faqs' => [['q' => 'Do rewards points expire?', 'a' => 'Points generally do not expire as long as your account remains open and in good standing, but terms vary by issuing bank.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Rewards & Points Credit Cards</h1>
        <p>Multiply points on everyday purchases and optimize your redemption value.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Maximizing Flexible Reward Points</h2>
                <p>Flexible point currencies allow cardholders to transfer points directly to airline and hotel loyalty partners or redeem them for cash rebates.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Card Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="travel-cards.php">Travel Cards</a></li>
                        <li><a href="cashback-cards.php">Cashback Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
