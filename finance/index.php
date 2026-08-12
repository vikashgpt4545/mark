<?php
/**
 * FinWise - Finance Niche Hub Page
 */

define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Personal Finance & Money Management Hub - FinWise',
    'description' => 'Master your wealth with our personal finance guides. Explore budgeting techniques, high-yield savings strategies, banking guides, beginner investing, tax basics, and emergency fund planning.',
    'breadcrumbs' => ['Home' => 'index.php', 'Finance' => 'finance/index.php'],
    'faqs' => [
        [
            'q' => 'What is the first step in starting a personal financial plan?',
            'a' => 'The first step is conducting a complete income and expense audit to calculate your net cash flow. Once you know where your money goes, establish a $1,000 liquid emergency fund before aggressively tackling debt or investing.'
        ],
        [
            'q' => 'How much money should I keep in my checking vs savings account?',
            'a' => 'Keep approximately 1 to 2 months of living expenses in your checking account to cover regular bills and buffer against overdrafts. Transfer all remaining emergency reserves into a High-Yield Savings Account (HYSA) to maximize interest returns.'
        ]
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Personal Finance & Money Management</h1>
        <p>Build unshakeable financial independence with strategic budgeting, smart banking, compound growth, and tax-efficient wealth planning.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Mastering the Fundamentals of Wealth Creation</h2>
                <p>
                    Personal finance is the science of managing your income, spending, savings, investments, and financial protection to meet life goals. Achieving financial freedom does not require a finance degree or extreme austerity—it requires consistency, compounding, and executing clear money management systems.
                </p>

                <div class="article-grid" style="margin: 2rem 0;">
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="personal-finance.php">Personal Finance Overview</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">The core framework for cash flow management, net worth calculation, and wealth accumulation.</p>
                        <a href="personal-finance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="budgeting.php">Budgeting Strategies</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Explore zero-based budgeting, envelope systems, and the 50/30/20 budget framework.</p>
                        <a href="budgeting.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="saving-money.php">Saving Money Techniques</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Actionable methods to eliminate money drains and automate high-yield savings targets.</p>
                        <a href="saving-money.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="banking.php">Banking & Account Selection</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Compare checking, high-yield savings, money market, and CD account structures.</p>
                        <a href="banking.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="investing-basics.php">Investing Basics for Beginners</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Demystifying index funds, stocks, ETFs, mutual funds, and asset allocation strategies.</p>
                        <a href="investing-basics.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="financial-planning.php">Financial Planning Blueprint</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Aligning short-term goals with long-term retirement accounts and net worth tracking.</p>
                        <a href="financial-planning.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="emergency-fund.php">Emergency Fund Guide</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Why 3 to 6 months of liquid cash is your ultimate defense against unexpected debt.</p>
                        <a href="emergency-fund.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="tax-basics.php">Tax Basics & Deductions</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Navigating tax brackets, tax credits, deductions, and tax-advantaged retirement accounts.</p>
                        <a href="tax-basics.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Read Guide →</a>
                    </div>
                </div>

                <h2>Interactive Tools for Your Financial Strategy</h2>
                <div class="callout-box">
                    <h4>🧮 Test Your Wealth Growth with Our Calculators</h4>
                    <p>Calculate your long-term compound interest earnings and savings milestones using our free tools:</p>
                    <div style="display:flex; gap:1rem; margin-top:1rem; flex-wrap:wrap;">
                        <a href="../calculators/compound-interest.php" class="btn btn-emerald" style="font-size:0.85rem; padding:0.5rem 1rem;">Compound Interest Engine</a>
                        <a href="../calculators/savings.php" class="btn btn-primary" style="font-size:0.85rem; padding:0.5rem 1rem;">Savings Goal Calculator</a>
                    </div>
                </div>

                <h2>Frequently Asked Personal Finance Questions</h2>
                <?php 
                $faq_list = $page_seo['faqs'];
                include __DIR__ . '/../components/faq.php'; 
                ?>
            </div>

            <!-- Sidebar -->
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">📌 Quick Financial Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.6rem;">
                        <li><a href="../calculators/compound-interest.php">Compound Interest Calculator</a></li>
                        <li><a href="../calculators/savings.php">Savings Planner</a></li>
                        <li><a href="../loans/personal-loans.php">Personal Loan Rates</a></li>
                        <li><a href="../credit-cards/credit-score.php">Credit Score Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../components/footer.php'; ?>
