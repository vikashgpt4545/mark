<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Best Credit Cards Comparison & Guide - FinWise',
    'description' => 'In-depth review of top credit cards across all categories: cashback, travel perks, zero annual fee, and sign-up bonuses.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Best Credit Cards' => 'credit-cards/best-credit-cards.php'],
    'faqs' => [['q' => 'What makes a credit card one of the "best"?', 'a' => 'The best credit card depends on your personal spending habits—maximizing rewards where you spend most (e.g., dining, travel, groceries) while charging minimal annual fees.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Best Credit Cards Overview</h1>
        <p>Top-rated credit cards evaluated across rewards, annual fees, APR, and sign-up bonuses.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Top Credit Card Category Comparison</h2>
                <?php
                $matrix = [
                    'headers' => ['Card Category', 'Typical Annual Fee', 'Primary Reward Structure', 'Introductory Bonus', 'Best Consumer Target'],
                    'rows' => [
                        ['<strong>Cashback Cards</strong>', '$0', '1.5% to 5% Cash Rebates', '$150 - $200 Bonus', 'Everyday domestic shoppers'],
                        ['<strong>Travel Rewards Cards</strong>', '$95 - $550', '2x to 5x Flight/Hotel Points', '60,000+ Travel Miles', 'Frequent flyers & vacationers'],
                        ['<strong>0% Intro APR Cards</strong>', '$0', '0% APR for 15-21 Months', 'Balance Transfer Option', 'Refinancing high-interest card debt'],
                        ['<strong>Student Starter Cards</strong>', '$0', '1% - 2% Cash Back + Good Grade Bonus', '$50 Bonus', 'College students building first credit']
                    ]
                ];
                include __DIR__ . '/../components/comparison-table.php';
                ?>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Card Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="cashback-cards.php">Cashback Cards</a></li>
                        <li><a href="travel-cards.php">Travel Cards</a></li>
                        <li><a href="credit-score.php">Credit Score Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
