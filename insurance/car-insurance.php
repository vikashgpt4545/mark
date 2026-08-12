<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Car & Auto Insurance Coverage Deep Dive - FinWise',
    'description' => 'Liability, collision, comprehensive, personal injury protection (PIP), zero-depreciation, and uninsured motorist coverage.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Car Insurance' => 'insurance/car-insurance.php'],
    'faqs' => [['q' => 'What is the difference between Collision and Comprehensive auto coverage?', 'a' => 'Collision covers damage resulting from accidents with other vehicles or objects, while Comprehensive covers non-collision events like weather damage, vandalism, theft, or animal strikes.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Car & Auto Insurance Coverage Deep Dive</h1>
        <p>Liability, collision, comprehensive, zero-depreciation, and uninsured motorist protection.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Protecting Your Vehicle & Drivers</h2>
                <p>Auto insurance balances mandatory state liability protection with optional physical damage coverage. Understanding policy limits and deductible choices prevents financial loss following accidents.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Auto Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/auto-loans.php">Auto Loans Guide</a></li>
                        <li><a href="../calculators/auto-loan.php">Auto Loan Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
