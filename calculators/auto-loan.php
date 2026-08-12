<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Auto & Car Loan Payment Calculator - FinWise',
    'description' => 'Determine your monthly vehicle payments based on purchase price, down payment, trade-in allowance, and interest rate.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Auto Loan Calculator' => 'calculators/auto-loan.php'],
    'faqs' => [['q' => 'What is a good tenure for an auto loan?', 'a' => 'A 48 to 60 month loan tenure balances affordable monthly payments while preventing you from owing more than the vehicle is worth.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Auto & Car Loan Payment Calculator</h1>
        <p>Break down monthly vehicle financing, interest charges, and total loan costs.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Vehicle Financing Inputs</h3>
                    <div class="form-group">
                        <label>Vehicle Loan Amount ($)</label>
                        <input type="number" id="calc-amount" value="28000" min="2000" max="200000">
                    </div>
                    <div class="form-group">
                        <label>Auto Loan Rate (%)</label>
                        <input type="number" id="calc-rate" value="5.8" min="1" max="25" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Tenure (Years)</label>
                        <select id="calc-tenure">
                            <option value="3">3 Years (36 mos)</option>
                            <option value="4">4 Years (48 mos)</option>
                            <option value="5" selected>5 Years (60 mos)</option>
                            <option value="6">6 Years (72 mos)</option>
                        </select>
                    </div>
                </div>
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Estimated Monthly Payment</div>
                        <div class="result-main-value" id="res-emi">$538.74</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item"><div class="res-item-lbl">Total Interest</div><div class="res-item-val" id="res-interest" style="color:#f87171;">$4,324.40</div></div>
                        <div class="res-item"><div class="res-item-lbl">Total Cost</div><div class="res-item-val" id="res-total" style="color:#34d399;">$32,324.40</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-layout">
            <div class="article-body">
                <h2>Vehicle Loan Optimization</h2>
                <p>Putting down 20% upfront and choosing tenures under 60 months minimizes total interest and prevents negative equity on depreciating vehicles.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Auto Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/auto-loans.php">Auto Loans Guide</a></li>
                        <li><a href="../insurance/car-insurance.php">Car Insurance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
