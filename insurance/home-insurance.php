<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Home & Property Insurance Coverage Guide - FinWise',
    'description' => 'Safeguard your dwelling, personal belongings, liability risks, and additional living expenses against natural disasters.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Home Insurance' => 'insurance/home-insurance.php'],
    'faqs' => [['q' => 'Does standard homeowners insurance cover flood damage?', 'a' => 'No, standard homeowners policies exclude flood damage. Flood insurance must be purchased separately through NFIP or private flood insurers.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Home & Property Insurance Coverage</h1>
        <p>Protect your dwelling structure, personal belongings, and personal liability against catastrophe.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Protecting Real Estate & Belongings</h2>
                <p>Homeowners insurance covers structural replacement (Dwelling Coverage HO-3), personal contents, loss-of-use living expenses, and personal liability if someone is injured on your property.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Home Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/home-loans.php">Home Loans Guide</a></li>
                        <li><a href="insurance-claims.php">Claims Filing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
