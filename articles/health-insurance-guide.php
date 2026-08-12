<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Health Insurance 101: Deductibles, Copays & Caps - FinWise',
    'description' => 'Understand medical insurance terminology, HMO vs PPO networks, and how to minimize healthcare out-of-pocket expenses.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php', 'Health Insurance Guide' => 'articles/health-insurance-guide.php'],
    'faqs' => [['q' => 'What is an out-of-pocket maximum in health insurance?', 'a' => 'The out-of-pocket maximum is the absolute cap on what you pay for covered medical services in a policy year. After reaching this limit, the insurer pays 100% of covered costs.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Health Insurance 101: Deductibles, Copays & Out-of-Pocket Caps</h1>
        <p>Master healthcare policy jargon, provider network restrictions, and out-of-pocket cost caps.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Decoding Healthcare Costs</h2>
                <p>Navigating health insurance requires evaluating premium costs against deductible limits, copay obligations, coinsurance ratios, and out-of-pocket maximum caps.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../insurance/health-insurance.php">Health Insurance Hub</a></li>
                        <li><a href="../insurance/insurance-terms.php">Insurance Glossary</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
