<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Life Insurance Demystified: Term vs Whole Life Comparison - FinWise',
    'description' => 'Calculate your exact family protection needs and see why term life insurance provides maximum protection at minimal cost.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Life Insurance Guide' => 'articles/life-insurance-guide.php'],
    'faqs' => [['q' => 'At what age should I purchase term life insurance?', 'a' => 'Purchasing term life in your 20s or 30s locks in extremely low rates for 20 to 30 years while health risks are minimal.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Life Insurance Demystified: Term vs Whole Life</h1>
        <p>Determine required payout coverage multipliers and protect dependents effectively.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Determining Ideal Coverage Multipliers</h2>
                <p>Calculate coverage requirements by summing total outstanding debt obligations (mortgage, car loans), replacing 10 years of annual income, and factoring in child education funds.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../insurance/life-insurance.php">Life Insurance Detail</a></li>
                        <li><a href="compare-insurance-guide.php">Comparing Insurers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
