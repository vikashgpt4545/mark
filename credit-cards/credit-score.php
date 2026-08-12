<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Demystifying Your Credit Score & Rating - FinWise',
    'description' => 'The 5 key factors influencing FICO/Vantage scores, how credit bureaus operate, and actionable steps to boost your score 100+ points.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Credit Score' => 'credit-cards/credit-score.php'],
    'faqs' => [['q' => 'What is considered a prime FICO credit score?', 'a' => 'A FICO score of 740 to 799 is considered Very Good, while 800+ is Exceptional, unlocking the lowest interest rates on loans.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Demystifying Your Credit Score</h1>
        <p>Master FICO scoring factors and implement rapid credit rating repair techniques.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The 5 Pillars of FICO Credit Scoring</h2>
                <div class="table-responsive">
                    <table class="comparison-table">
                        <thead>
                            <tr><th>FICO Factor</th><th>Weight</th><th>Optimization Action</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Payment History</strong></td><td>35%</td><td>Set 100% automatic payments to avoid 30+ day delinquencies.</td></tr>
                            <tr><td><strong>Credit Utilization</strong></td><td>30%</td><td>Keep reported balances under 30% (ideally under 10%).</td></tr>
                            <tr><td><strong>Credit History Length</strong></td><td>15%</td><td>Keep oldest credit card accounts open indefinitely.</td></tr>
                            <tr><td><strong>Credit Mix</strong></td><td>10%</td><td>Maintain balance between credit cards and installment loans.</td></tr>
                            <tr><td><strong>New Credit Inquiries</strong></td><td>10%</td><td>Limit new hard inquiries to less than 2 per year.</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="callout-box">
                    <h4>💡 Related Guide</h4>
                    <p>Read our full tutorial: <a href="../articles/credit-score-guide.php">How Credit Scores Work Guide</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Credit Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="credit-utilization.php">Utilization Ratio Tips</a></li>
                        <li><a href="best-credit-cards.php">Best Credit Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
