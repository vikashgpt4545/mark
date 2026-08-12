<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Business Loans & Commercial Financing Solutions - FinWise',
    'description' => 'Explore SBA loans, working capital lines of credit, equipment financing, invoice factoring, and business credit qualifications.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Business Loans' => 'loans/business-loans.php'],
    'faqs' => [['q' => 'What is an SBA loan?', 'a' => 'SBA loans are small business loans partially guaranteed by the U.S. Small Business Administration, offering competitive rates and longer terms.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Business Loans & Commercial Financing</h1>
        <p>Fund business expansion, working capital, inventory, and equipment acquisitions.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Commercial Lending Options</h2>
                <p>Commercial financing helps entrepreneurs start, scale, and protect businesses. Understanding SBA 7(a) loans, working capital lines, equipment financing, and commercial real estate loans ensures you pick the right debt vehicle.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Business Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../insurance/business-insurance.php">Business Insurance</a></li>
                        <li><a href="loan-eligibility.php">Loan Eligibility</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
