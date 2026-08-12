<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Business Insurance & Liability Risk Protection - FinWise',
    'description' => 'General liability, professional liability (E&O), commercial property insurance, and workers\' compensation basics.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Business Insurance' => 'insurance/business-insurance.php'],
    'faqs' => [['q' => 'What is a Business Owner\'s Policy (BOP)?', 'a' => 'A BOP bundles General Liability, Commercial Property, and Business Interruption insurance into a cost-effective single policy.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Business Insurance & Liability Risk Protection</h1>
        <p>Protect commercial property, professional advice, and employee safety against liability suits.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Commercial Risk Protection</h2>
                <p>Business insurance safeguards enterprises against lawsuits, property destruction, data breaches, and worker injuries, ensuring continuity during operational disruptions.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Business Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/business-loans.php">Business Loans</a></li>
                        <li><a href="insurance-terms.php">Insurance Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
