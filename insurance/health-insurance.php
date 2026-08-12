<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Health & Medical Insurance Purchasing Guide - FinWise',
    'description' => 'Demystifying deductibles, copays, coinsurance, out-of-pocket maximums, HMO vs PPO networks, and critical illness add-ons.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Health Insurance' => 'insurance/health-insurance.php'],
    'faqs' => [['q' => 'What is the difference between an HMO and a PPO?', 'a' => 'HMOs require primary care physician (PCP) referrals and restrict coverage to in-network providers, while PPOs allow out-of-network care and specialist visits without PCP referrals.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Health & Medical Insurance Purchasing Guide</h1>
        <p>Demystify deductibles, copays, out-of-pocket caps, HMO vs PPO networks, and critical illness add-ons.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Navigating Health Policy Mechanics</h2>
                <p>Health insurance shields you from catastrophic medical expenses. Understanding the interplay between monthly premiums, annual deductibles, coinsurance splits, and maximum out-of-pocket limits ensures you choose optimal medical coverage.</p>
                <div class="callout-box">
                    <h4>💡 Related Guide</h4>
                    <p>Read our full tutorial: <a href="../articles/health-insurance-guide.php">How Health Insurance Works Guide</a>.</p>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="life-insurance.php">Life Insurance Guide</a></li>
                        <li><a href="insurance-terms.php">Glossary of Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
