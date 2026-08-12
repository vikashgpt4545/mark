<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Education & Student Loans Overview - FinWise',
    'description' => 'Federal vs private student loan comparison, income-driven repayment plans, forgiveness programs, and deferment options.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php', 'Education Loans' => 'loans/education-loans.php'],
    'faqs' => [['q' => 'Why are federal student loans preferred over private student loans?', 'a' => 'Federal student loans feature fixed interest rates, income-driven repayment plans, and potential public service loan forgiveness options unavailable with private lenders.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Education & Student Loans Overview</h1>
        <p>Compare federal vs private student financing, income-driven repayment, and loan forgiveness programs.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Financing Higher Education Wisely</h2>
                <p>Education loans finance higher education tuition, books, and living expenses. Understanding the distinction between federal Direct Subsidized/Unsubsidized loans and private student loans is critical to managing student debt after graduation.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Student Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../credit-cards/student-cards.php">Student Credit Cards</a></li>
                        <li><a href="loan-repayment.php">Loan Repayment Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
