<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Tax Basics & Deduction Strategies - FinWise',
    'description' => 'Understand tax brackets, marginal vs effective tax rates, standard deductions, tax credits, and tax-advantaged accounts.',
    'breadcrumbs' => ['Home' => 'index.php', 'Finance' => 'finance/index.php', 'Tax Basics' => 'finance/tax-basics.php'],
    'faqs' => [['q' => 'What is the difference between a tax credit and a tax deduction?', 'a' => 'A tax deduction reduces your taxable income, while a tax credit directly reduces your final dollar-for-dollar tax liability.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Tax Basics & Deduction Strategies</h1>
        <p>Keep more of what you earn with smart tax planning and deduction optimization.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Understanding How Taxes Impact Net Income</h2>
                <p>Tax literacy is critical to wealth building. Understanding marginal tax brackets, deductions, and tax-advantaged accounts like 401(k)s, IRAs, and HSAs enables you to legally minimize your tax burden.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Finance Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="financial-planning.php">Financial Planning</a></li>
                        <li><a href="investing-basics.php">Investing Basics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
