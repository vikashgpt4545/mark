<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Student Credit Cards & Building First Credit - FinWise',
    'description' => 'Safe starter credit cards for students, secured cards, building good financial habits, and avoiding debt traps early.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Student Cards' => 'credit-cards/student-cards.php'],
    'faqs' => [['q' => 'What is a secured credit card?', 'a' => 'A secured credit card requires a refundable cash security deposit (e.g., $200) that serves as your credit line, allowing you to build credit with minimal approval barriers.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Student Credit Cards & Building Credit</h1>
        <p>Starter credit options designed to help college students establish strong FICO credit scores early.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Building Credit Responsibly as a Student</h2>
                <p>Establishing credit history early provides a significant head start when applying for post-graduation apartment leases, auto loans, or mortgages.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Student Guides</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="credit-score.php">Credit Score Guide</a></li>
                        <li><a href="../loans/education-loans.php">Student Loans Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
