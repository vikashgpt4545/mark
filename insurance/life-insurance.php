<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Life Insurance Overview: Term vs Whole Life - FinWise',
    'description' => 'Compare affordable term life policies with cash-value whole life insurance to protect your family\'s financial future.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Life Insurance' => 'insurance/life-insurance.php'],
    'faqs' => [['q' => 'How much life insurance coverage do I need?', 'a' => 'A common financial rule of thumb is securing coverage equal to 10 to 12 times your annual gross income, plus outstanding debt obligations like mortgages.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Life Insurance Overview: Term vs Whole Life</h1>
        <p>Safeguard your family's future with pure term protection or permanent cash-value policies.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Term vs Whole Life Policy Comparison</h2>
                <?php
                $matrix = [
                    'headers' => ['Feature', 'Term Life Insurance', 'Whole Life Insurance'],
                    'rows' => [
                        ['<strong>Coverage Duration</strong>', 'Fixed period (10, 20, 30 years)', 'Permanent (Lifelong)'],
                        ['<strong>Premium Cost</strong>', 'Significantly lower (Affordable)', '5x to 10x higher premiums'],
                        ['<strong>Cash Value Component</strong>', 'None (Pure life protection)', 'Accumulates tax-deferred cash equity'],
                        ['<strong>Best Consumer Profile</strong>', 'Families protecting earning years & debt', 'High net worth estate tax planning']
                    ]
                ];
                include __DIR__ . '/../components/comparison-table.php';
                ?>
                <div class="callout-box">
                    <h4>💡 Related Guide</h4>
                    <p>Read our full guide: <a href="../articles/life-insurance-guide.php">How Life Insurance Works Guide</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="health-insurance.php">Health Insurance</a></li>
                        <li><a href="insurance-premium.php">Lower Premiums</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
