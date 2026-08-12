<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'How Credit Scores Work & How to Boost Yours 100+ Points - FinWise Guide',
    'description' => 'Master the FICO credit scoring model, utilization hacks, statement closing date tricks, and dispute procedures to elevate your credit rating.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Credit Score Guide' => 'articles/credit-score-guide.php'],
    'faqs' => [['q' => 'How long does a hard credit inquiry stay on my credit report?', 'a' => 'Hard inquiries remain on your credit report for 2 years, but usually only impact your score for the first 12 months.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>How Credit Scores Work & How to Boost Yours 100+ Points</h1>
        <p>Deconstruct credit scoring algorithms, reported balance mechanics, and credit repair strategies.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The FICO Score Architecture</h2>
                <p>Your credit score is a three-digit numerical representation (ranging from 300 to 850) of your creditworthiness. Understanding the 5 core weighting factors allows you to strategically raise your score.</p>
                <div class="callout-box">
                    <h4>💳 Payoff High-Interest Debt</h4>
                    <p>Lower credit utilization using our <a href="../calculators/credit-card-interest.php">Credit Card Payoff Calculator</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Related Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../credit-cards/credit-score.php">Credit Score Overview</a></li>
                        <li><a href="../credit-cards/credit-utilization.php">Utilization Ratio Tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
