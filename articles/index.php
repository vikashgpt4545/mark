<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Financial Guides & Educational Knowledge Base - FinWise',
    'description' => 'In-depth educational financial guides covering monthly budgeting, credit score repair, loan rate optimization, insurance comparisons, and wealth strategies.',
    'breadcrumbs' => ['Home' => 'index.php', 'Articles' => 'articles/index.php'],
    'faqs' => [
        ['q' => 'How often are FinWise financial guides updated?', 'a' => 'Our expert guides are updated quarterly to reflect central bank interest rate changes, regulatory shifts, and emerging personal finance strategies.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Financial Educational Guides & Knowledge Base</h1>
        <p>In-depth, step-by-step masterclasses designed to elevate your financial literacy and execution.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="article-grid">
            <?php
            $articles = [
                ['title' => 'Master Monthly Budgeting: 50/30/20 & Zero-Based Blueprints', 'url' => 'articles/monthly-budget-guide.php', 'category' => 'Finance', 'date' => 'May 2024', 'desc' => 'Step-by-step guide to auditing monthly income, eliminating cash leaks, and building an automated 50/30/20 budget framework.'],
                ['title' => 'How Credit Scores Work & How to Boost Yours 100+ Points', 'url' => 'articles/credit-score-guide.php', 'category' => 'Credit Cards', 'date' => 'Jun 2024', 'desc' => 'Deconstruct FICO scoring models, utilization optimization, statement closing date tricks, and credit report dispute steps.'],
                ['title' => 'Understanding Loan Interest: Nominal Rate vs APR Explained', 'url' => 'articles/loan-interest-guide.php', 'category' => 'Loans', 'date' => 'Apr 2024', 'desc' => 'Why APR gives the true cost of a loan by including origination fees, closing costs, and compounding frequencies.'],
                ['title' => 'Fixed vs Variable Interest Rates: Which Is Best For You?', 'url' => 'articles/fixed-vs-variable-rate-guide.php', 'category' => 'Loans', 'date' => 'May 2024', 'desc' => 'Compare stability vs rate discount risks when choosing mortgage, auto, or personal loan rate structures.'],
                ['title' => 'How to Choose the Right Credit Card for Your Lifestyle', 'url' => 'articles/choose-credit-card-guide.php', 'category' => 'Credit Cards', 'date' => 'Jul 2024', 'desc' => 'Analyze your annual spending patterns to pick maximum cashback, travel miles, or zero annual fee rewards cards.'],
                ['title' => 'Life Insurance Demystified: Term vs Whole Life Comparison', 'url' => 'articles/life-insurance-guide.php', 'category' => 'Insurance', 'date' => 'May 2024', 'desc' => 'Learn how much life insurance coverage your dependents need and why term insurance is the most cost-effective solution.'],
                ['title' => 'Health Insurance 101: Deductibles, Copays & Out-of-Pocket Caps', 'url' => 'articles/health-insurance-guide.php', 'category' => 'Insurance', 'date' => 'Jun 2024', 'desc' => 'Understand medical insurance terminology, HMO vs PPO networks, and how to minimize healthcare out-of-pocket expenses.'],
                ['title' => 'The Ultimate Guide to Comparing Insurance Policies', 'url' => 'articles/compare-insurance-guide.php', 'category' => 'Insurance', 'date' => 'Jul 2024', 'desc' => 'A framework for evaluating insurer solvency ratings, claim settlement ratios, rider add-ons, and premium pricing.'],
                ['title' => '10 Proven Tactics to Reduce Total Loan Interest Costs', 'url' => 'articles/reduce-loan-interest-guide.php', 'category' => 'Loans', 'date' => 'Apr 2024', 'desc' => 'Actionable strategies including bi-weekly payment schedules, annual principal lump-sums, and loan refinancing.'],
                ['title' => 'How to Build a 6-Month Emergency Fund Step-by-Step', 'url' => 'articles/build-emergency-fund-guide.php', 'category' => 'Finance', 'date' => 'Mar 2024', 'desc' => 'Calculate your true monthly baseline expenses and automate liquid savings in high-yield accounts for emergency protection.']
            ];

            foreach ($articles as $art) {
                include __DIR__ . '/../components/article-card.php';
            }
            ?>
        </div>

        <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../components/footer.php'; ?>
