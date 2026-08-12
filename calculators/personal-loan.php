<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Personal Loan Payment Calculator - FinWise',
    'description' => 'Estimate monthly payments and total borrowing costs for unsecured personal loans with custom interest rates and tenures.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Personal Loan Calculator' => 'calculators/personal-loan.php'],
    'faqs' => [['q' => 'How do personal loan interest rates compare to credit cards?', 'a' => 'Personal loan interest rates (typically 6% to 18%) are significantly lower than credit card APRs (18% to 29%), making personal loans ideal for debt consolidation.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Personal Loan Payment Calculator</h1>
        <p>Calculate monthly installments and total borrowing costs for unsecured personal loans.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Personal Loan Parameters</h3>
                    <div class="form-group">
                        <label>Loan Amount ($)</label>
                        <input type="number" id="calc-amount" value="15000" min="1000" max="100000">
                    </div>
                    <div class="form-group">
                        <label>Interest Rate (%)</label>
                        <input type="number" id="calc-rate" value="9.5" min="1" max="36" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Tenure (Years)</label>
                        <select id="calc-tenure">
                            <option value="1">1 Year</option>
                            <option value="2">2 Years</option>
                            <option value="3" selected>3 Years</option>
                            <option value="5">5 Years</option>
                        </select>
                    </div>
                </div>
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Estimated Monthly Payment</div>
                        <div class="result-main-value" id="res-emi">$480.49</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item"><div class="res-item-lbl">Total Interest</div><div class="res-item-val" id="res-interest" style="color:#f87171;">$2,297.64</div></div>
                        <div class="res-item"><div class="res-item-lbl">Total Repayment</div><div class="res-item-val" id="res-total" style="color:#34d399;">$17,297.64</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-layout">
            <div class="article-body">
                <h2>Using Personal Loans for Financial Restructuring</h2>
                <p>Consolidating high-interest revolving credit cards into a single fixed personal loan saves interest while locking in a clear payoff date.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Loan Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/personal-loans.php">Personal Loans Guide</a></li>
                        <li><a href="loan-affordability.php">Affordability Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
