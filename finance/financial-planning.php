<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Comprehensive Financial Planning Blueprint & Net Worth Roadmap',
    'description' => 'Step-by-step roadmap to align financial goals, retirement accounts (401k/IRA), estate planning, and risk management.',
    'breadcrumbs' => ['Home' => 'index.php', 'Finance' => 'finance/index.php', 'Financial Planning' => 'finance/financial-planning.php'],
    'faqs' => [['q' => 'What is the difference between a traditional IRA and a Roth IRA?', 'a' => 'Traditional IRAs offer upfront tax-deductible contributions with taxed withdrawals, whereas Roth IRAs use after-tax contributions with 100% tax-free growth and tax-free qualified withdrawals.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Comprehensive Financial Planning Blueprint</h1>
        <p>Aligning life milestones with retirement structures, net worth goals, and tax-advantaged accounts.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Structuring Your Lifecycle Financial Plan</h2>
                <p>A comprehensive financial plan integrates cash flow, debt elimination, insurance protection, investment growth, and estate distribution into a unified master strategy.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Finance Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="tax-basics.php">Tax Basics Guide</a></li>
                        <li><a href="../insurance/life-insurance.php">Life Insurance Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
