<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Loan EMI Calculator - Instant Monthly Payment & Amortization',
    'description' => 'Free online Loan EMI Calculator. Calculate your exact Equated Monthly Installments, total interest, and full repayment schedule.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Loan EMI Calculator' => 'calculators/loan-emi.php'],
    'faqs' => [
        ['q' => 'How is EMI calculated?', 'a' => 'EMI is calculated using the formula: E = P × r × (1 + r)^n / ((1 + r)^n - 1), where P is principal, r is monthly rate, and n is number of months.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Loan EMI Calculator</h1>
        <p>Estimate monthly installments, cumulative interest payable, and total loan cost.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <!-- Interactive Calculator Widget -->
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Calculate Loan EMI</h3>
                    <div class="form-group">
                        <label>Loan Amount ($)</label>
                        <div class="input-with-symbol">
                            <span class="input-symbol">$</span>
                            <input type="number" id="calc-amount" value="50000" min="1000" max="1000000">
                        </div>
                        <input type="range" id="calc-amount-slider" class="range-slider" min="1000" max="250000" value="50000">
                    </div>
                    <div class="form-group">
                        <label>Annual Interest Rate (%)</label>
                        <input type="number" id="calc-rate" value="7.5" min="1" max="30" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Loan Tenure (Years)</label>
                        <select id="calc-tenure">
                            <option value="1">1 Year</option>
                            <option value="3">3 Years</option>
                            <option value="5" selected>5 Years</option>
                            <option value="7">7 Years</option>
                            <option value="10">10 Years</option>
                            <option value="15">15 Years</option>
                            <option value="20">20 Years</option>
                            <option value="30">30 Years</option>
                        </select>
                    </div>
                </div>

                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Monthly EMI Payment</div>
                        <div class="result-main-value" id="res-emi">$1,001.90</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item">
                            <div class="res-item-lbl">Total Interest</div>
                            <div class="res-item-val" id="res-interest" style="color:#f87171;">$10,113.88</div>
                        </div>
                        <div class="res-item">
                            <div class="res-item-lbl">Total Repayment</div>
                            <div class="res-item-val" id="res-total" style="color:#34d399;">$60,113.88</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-layout">
            <div class="article-body">
                <h2>Formula & Explanation</h2>
                <p>Equated Monthly Installment (EMI) represents the fixed dollar amount paid to a lender every month. Each payment pays down accruing monthly interest while allocating the remainder toward principal reduction.</p>
                
                <div class="callout-box">
                    <h4>📐 Amortization Mathematical Formula</h4>
                    <p><code>EMI = P × r × (1 + r)ⁿ / ((1 + r)ⁿ - 1)</code></p>
                    <ul>
                        <li><strong>P:</strong> Principal loan balance ($50,000)</li>
                        <li><strong>r:</strong> Monthly interest rate (7.5% ÷ 12 ÷ 100 = 0.00625)</li>
                        <li><strong>n:</strong> Total monthly installments (5 years × 12 = 60 months)</li>
                    </ul>
                </div>

                <h3>Real-World Example</h3>
                <p>Borrowing $50,000 at a 7.5% fixed interest rate for 5 years results in a monthly EMI of $1,001.90. Over 60 months, you will repay $60,113.88 in total, comprising $50,000 principal and $10,113.88 in cumulative interest charges.</p>

                <h2>Frequently Asked Questions</h2>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Related Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="personal-loan.php">Personal Loan Calculator</a></li>
                        <li><a href="home-loan.php">Home Loan Calculator</a></li>
                        <li><a href="../loans/loan-emi.php">EMI Mechanics Guide</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../components/footer.php'; ?>
