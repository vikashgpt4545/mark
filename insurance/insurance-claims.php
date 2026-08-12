<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Step-by-Step Insurance Claims Process Guide - FinWise',
    'description' => 'How to file claims fast, required documentation, dealing with claim adjusters, and contesting claim denials successfully.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Insurance Claims' => 'insurance/insurance-claims.php'],
    'faqs' => [['q' => 'What should I do if an insurance claim is denied?', 'a' => 'Review the written denial letter for cited exclusion policy clauses, collect supporting proof/photographs, and file a formal internal appeal or state insurance commissioner complaint.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Step-by-Step Insurance Claims Process Guide</h1>
        <p>File claims efficiently, collect documentation, negotiate with adjusters, and contest unfair denials.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Filing & Settling Insurance Claims</h2>
                <p>Navigating insurance claims requires prompt notification, clear loss documentation, photo evidence, police/medical reports, and accurate cost estimates.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="insurance-terms.php">Insurance Glossary</a></li>
                        <li><a href="car-insurance.php">Auto Claims</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
