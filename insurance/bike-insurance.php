<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Two-Wheeler & Bike Insurance Protection - FinWise',
    'description' => 'Third-party bike insurance requirements vs comprehensive coverage, zero depreciation add-ons, and claims assistance.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Bike Insurance' => 'insurance/bike-insurance.php'],
    'faqs' => [['q' => 'Is third-party bike insurance mandatory?', 'a' => 'Yes, third-party liability insurance is legally required to cover bodily injury or property damage caused to third parties.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Two-Wheeler & Bike Insurance Protection</h1>
        <p>Compare mandatory third-party liability vs comprehensive two-wheeler policy coverage.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Protecting Your Two-Wheeler</h2>
                <p>Motorcycle and scooter policies safeguard riders against third-party liabilities, personal accident damages, and physical bike loss or theft.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="car-insurance.php">Car Insurance</a></li>
                        <li><a href="insurance-claims.php">Filing Claims</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
