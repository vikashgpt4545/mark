<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Loans & Lending Resource Center - FinWise',
    'description' => 'Compare personal, home, auto, business, and education loans. Calculate EMIs, explore interest rates, and understand loan eligibility.',
    'breadcrumbs' => ['Home' => 'index.php', 'Loans' => 'loans/index.php'],
    'faqs' => [
        ['q' => 'What factors determine my loan interest rate?', 'a' => 'Lenders evaluate your credit score, debt-to-income ratio, employment history, loan tenure, and whether the loan is secured or unsecured.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Loans & Lending Resource Center</h1>
        <p>Compare personal, mortgage, auto, business, and student loans with clear rate mechanics and calculation tools.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Navigating the World of Borrowing</h2>
                <p>Loans are powerful financial instruments that allow individuals and businesses to fund major life investments. Selecting the right loan type with favorable interest rates and repayment terms is critical to maintaining long-term financial health.</p>

                <div class="article-grid" style="margin: 2rem 0;">
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="personal-loans.php">Personal Loans</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Unsecured borrowing for debt consolidation, medical expenses, and major purchases.</p>
                        <a href="personal-loans.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Personal Loans →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="home-loans.php">Home Loans & Mortgages</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Fixed-rate and adjustable mortgages, refinancing tips, and down payment advice.</p>
                        <a href="home-loans.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Mortgages →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="auto-loans.php">Auto Loans</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">New and used vehicle financing, bank vs dealer loans, and trade-in calculations.</p>
                        <a href="auto-loans.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Auto Loans →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="business-loans.php">Business Loans</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">SBA loans, working capital, equipment lines, and commercial credit options.</p>
                        <a href="business-loans.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Business Loans →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="education-loans.php">Student & Education Loans</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Federal vs private student loans, income-driven repayment plans, and forgiveness.</p>
                        <a href="education-loans.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Student Loans →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="loan-emi.php">Loan EMI Mechanics</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">How Equated Monthly Installments work and principal vs interest amortization.</p>
                        <a href="loan-emi.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Learn EMI Mechanics →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="loan-interest.php">Interest Rates & APR</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Nominal interest rates vs APR, fixed vs floating rates, and rate negotiations.</p>
                        <a href="loan-interest.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Understand Rates & APR →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="loan-eligibility.php">Loan Eligibility Criteria</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">DTI ratios, credit score thresholds, proof of income, and approval boosters.</p>
                        <a href="loan-eligibility.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Check Eligibility Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="loan-repayment.php">Loan Repayment Tactics</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Accelerated payoff strategies, debt avalanche/snowball, and prepayments.</p>
                        <a href="loan-repayment.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Repayment Tactics →</a>
                    </div>
                </div>

                <div class="callout-box">
                    <h4>⚡ Calculate Your Monthly Payments Instantaneously</h4>
                    <p>Try our <a href="../calculators/loan-emi.php">Loan EMI Calculator</a> or check your borrowing capacity with the <a href="../calculators/loan-affordability.php">Loan Affordability Calculator</a>.</p>
                </div>

                <h2>Frequently Asked Questions</h2>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../calculators/loan-emi.php">Loan EMI Calculator</a></li>
                        <li><a href="../calculators/personal-loan.php">Personal Loan Calc</a></li>
                        <li><a href="../calculators/home-loan.php">Home Loan Calc</a></li>
                        <li><a href="../calculators/auto-loan.php">Auto Loan Calc</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
