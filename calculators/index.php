<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Financial Calculators Portal - Free Interactive Tools | FinWise',
    'description' => 'Free interactive financial calculators for Loan EMI, Mortgage Payments, Auto Financing, Compound Interest Growth, Savings Goals, and Credit Card Payoffs.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php'],
    'faqs' => [
        ['q' => 'Are these financial calculators free to use?', 'a' => 'Yes, all FinWise calculators are 100% free, run directly in your web browser, and require no account registration or personal data submission.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Financial Calculators Directory</h1>
        <p>Make data-backed financial decisions with real-time interactive computation tools.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="calc-cards-grid">
            <?php
            $calculators = [
                ['title' => 'Loan EMI Calculator', 'url' => 'calculators/loan-emi.php', 'icon' => '🧮', 'desc' => 'Calculate Equated Monthly Installments, total interest payable, and full loan amortization schedule.'],
                ['title' => 'Personal Loan Calculator', 'url' => 'calculators/personal-loan.php', 'icon' => '💰', 'desc' => 'Estimate monthly payments and total borrowing costs for unsecured personal loans.'],
                ['title' => 'Home Loan & Mortgage Calculator', 'url' => 'calculators/home-loan.php', 'icon' => '🏠', 'desc' => 'Plan home financing with mortgage payments, interest splits, and tenure comparisons.'],
                ['title' => 'Auto Loan Payment Calculator', 'url' => 'calculators/auto-loan.php', 'icon' => '🚗', 'desc' => 'Determine vehicle payments based on purchase price, down payment, trade-in, and APR.'],
                ['title' => 'Compound Interest Calculator', 'url' => 'calculators/compound-interest.php', 'icon' => '📈', 'desc' => 'Visualize exponential wealth accumulation with variable compounding frequencies.'],
                ['title' => 'Investment Growth Calculator', 'url' => 'calculators/investment.php', 'icon' => '📊', 'desc' => 'Project future investment portfolio wealth across stocks, index funds, and CDs.'],
                ['title' => 'Savings Goal Calculator', 'url' => 'calculators/savings.php', 'icon' => '🏦', 'desc' => 'Find out how long it takes to reach your target savings goal or monthly savings requirements.'],
                ['title' => 'Credit Card Interest Calculator', 'url' => 'calculators/credit-card-interest.php', 'icon' => '💳', 'desc' => 'See exact credit card payoff timeline and interest savings by increasing monthly payments.'],
                ['title' => 'Loan Affordability Calculator', 'url' => 'calculators/loan-affordability.php', 'icon' => '⚖️', 'desc' => 'Calculate your maximum safe borrowing capacity based on Debt-to-Income (DTI) ratio limits.']
            ];

            foreach ($calculators as $calc) {
                include __DIR__ . '/../components/calculator-card.php';
            }
            ?>
        </div>

        <div style="margin-top: 3.5rem;">
            <h2>Why Use FinWise Calculators?</h2>
            <p>Financial mathematics can involve complex exponential compounding and reducing-balance matrix formulas. Our calculation engines process equations instantly in client-side JavaScript, protecting your financial privacy while delivering immediate calculations.</p>
        </div>

        <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../components/footer.php'; ?>
