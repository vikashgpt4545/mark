<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'The Ultimate Guide to Comparing Insurance Policies - FinWise',
    'description' => 'Framework for evaluating insurer financial strength ratings, claim settlement ratios, rider add-ons, and policy exclusions.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Compare Insurance Guide' => 'articles/compare-insurance-guide.php'],
    'faqs' => [['q' => 'What is a Claim Settlement Ratio (CSR)?', 'a' => 'Claim Settlement Ratio represents the percentage of total claims settled and paid by an insurer out of the total claims received during a financial year. Look for CSRs above 95% to 98%.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>The Ultimate Guide to Comparing Insurance Policies</h1>
        <p>A systematic framework for analyzing insurer financial stability, claim settlement speed, and exclusions.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Key Criteria for Policy Comparison</h2>
                <p>Compare insurance offers beyond price alone by auditing claim settlement ratios (CSR), solvency ratios, network hospital/garage density, and critical policy exclusion fine print.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../insurance/index.php">Insurance Center</a></li>
                        <li><a href="../insurance/insurance-premium.php">Lower Premiums</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
