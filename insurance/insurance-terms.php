<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Insurance Terminology & Technical Glossary - FinWise',
    'description' => 'Easy-to-understand definitions for essential insurance terms: rider, premium, endorsement, deductible, policyholder, underwriting.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Insurance Terms' => 'insurance/insurance-terms.php'],
    'faqs' => [['q' => 'What is an insurance rider?', 'a' => 'An insurance rider (or endorsement) is an optional policy amendment that adds specific benefits or expands coverage beyond standard policy terms.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Insurance Terminology & Technical Glossary</h1>
        <p>Plain-English definitions for complex insurance legal terms, riders, and policy jargon.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Mastering Insurance Terminology</h2>
                <div class="table-responsive">
                    <table class="comparison-table">
                        <thead>
                            <tr><th>Term</th><th>Plain-English Definition</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Deductible</strong></td><td>The amount you must pay out-of-pocket before insurance coverage kicks in.</td></tr>
                            <tr><td><strong>Premium</strong></td><td>The recurring fee paid monthly or annually to maintain policy coverage active.</td></tr>
                            <tr><td><strong>Copay</strong></td><td>A fixed dollar amount ($25) paid at the time of medical service.</td></tr>
                            <tr><td><strong>Rider</strong></td><td>An optional policy add-on modifying standard policy benefits.</td></tr>
                            <tr><td><strong>Underwriting</strong></td><td>The risk assessment process used by insurers to set pricing and approval.</td></tr>
                        </tbody>
                    </table>
                </div>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="insurance-claims.php">Claims Process</a></li>
                        <li><a href="life-insurance.php">Life Insurance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
