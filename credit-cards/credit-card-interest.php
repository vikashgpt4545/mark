<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Credit Card Interest Rates & Daily Compounding APR - FinWise',
    'description' => 'How credit card interest is calculated daily, grace periods, balance transfer 0% intro promos, and avoiding interest entirely.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Card Interest' => 'credit-cards/credit-card-interest.php'],
    'faqs' => [['q' => 'What happens if I make only the minimum monthly payment on a credit card?', 'a' => 'Paying only the minimum balance extends your payoff timeline over decades and incurs interest charges that can double or triple the original purchase cost.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Credit Card Interest Rates & APR Mechanics</h1>
        <p>Learn daily periodic interest rates, grace period rules, and debt elimination tactics.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The Math Behind Credit Card APR</h2>
                <p>Credit card interest accrues on an Average Daily Balance formula: <code>(APR ÷ 365) × Daily Balance</code>. Carrying balances month-to-month revokes your interest-free grace period on new purchases.</p>
                <div class="callout-box">
                    <h4>💳 Payoff Debt Faster</h4>
                    <p>Calculate your custom payoff timeline with our <a href="../calculators/credit-card-interest.php">Credit Card Interest & Payoff Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Calculators</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/credit-card-interest.php">Payoff Calculator</a></li>
                        <li><a href="credit-utilization.php">Utilization Tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
