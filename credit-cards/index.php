<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Credit Cards Hub & Comparison Portal - FinWise',
    'description' => 'Find the best cashback, rewards, travel, and student credit cards. Learn about credit scores, APR, utilization, and fee reduction strategies.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php'],
    'faqs' => [
        ['q' => 'How can I avoid paying interest on a credit card?', 'a' => 'Pay your statement balance in full before the monthly grace period due date. This avoids all daily compounding APR charges.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Credit Cards Hub & Comparison Portal</h1>
        <p>Compare top cashback, rewards, travel, and student cards while optimizing your FICO credit score.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Maximizing Credit Card Value & Building Credit</h2>
                <p>When used responsibly, credit cards offer unparalleled fraud protection, cashback rewards, travel perks, and essential credit history building. However, carrying balances month-to-month exposes you to expensive high-APR interest traps.</p>

                <div class="article-grid" style="margin: 2rem 0;">
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="best-credit-cards.php">Best Credit Cards Overview</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Top overall credit cards ranked by sign-up bonuses, fee waivers, and perks.</p>
                        <a href="best-credit-cards.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">View Top Cards →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="cashback-cards.php">Cashback Credit Cards</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Flat-rate vs rotating category cashback cards for grocery, gas, and dining.</p>
                        <a href="cashback-cards.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">View Cashback Cards →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="rewards-cards.php">Rewards & Points Cards</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Earn and redeem flexible point currencies across gift cards and statement credits.</p>
                        <a href="rewards-cards.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">View Rewards Cards →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="travel-cards.php">Travel & Airline Cards</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Airline miles, hotel perks, airport lounge access, and zero foreign fees.</p>
                        <a href="travel-cards.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">View Travel Cards →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="student-cards.php">Student & Starter Cards</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Secured and starter cards designed to build initial credit safely.</p>
                        <a href="student-cards.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">View Student Cards →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="credit-card-fees.php">Credit Card Fees Breakdown</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">How to avoid annual fees, late charges, balance transfer fees, and cash advance fees.</p>
                        <a href="credit-card-fees.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Learn Fee Reduction →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="credit-card-interest.php">Interest Rates & APR Mechanics</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">How daily compounding APR works, grace periods, and 0% intro balance transfers.</p>
                        <a href="credit-card-interest.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Learn APR Mechanics →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="credit-score.php">Credit Score Guide</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">The 5 key factors driving FICO scores and actionable steps to boost your rating.</p>
                        <a href="credit-score.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Boost Credit Score →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="credit-utilization.php">Credit Utilization Ratio</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Why maintaining under 30% (or under 10%) utilization improves score fast.</p>
                        <a href="credit-utilization.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Learn Utilization Tips →</a>
                    </div>
                </div>

                <div class="callout-box">
                    <h4>💳 Planning Credit Card Debt Payoff?</h4>
                    <p>Use our <a href="../calculators/credit-card-interest.php">Credit Card Interest & Payoff Calculator</a> to see how much interest you save by increasing monthly payments.</p>
                </div>

                <h2>Frequently Asked Questions</h2>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Credit Card Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/credit-card-interest.php">Payoff Calculator</a></li>
                        <li><a href="credit-score.php">Credit Score Guide</a></li>
                        <li><a href="credit-utilization.php">Utilization Tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
