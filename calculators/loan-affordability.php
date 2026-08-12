<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Loan Affordability & Max Borrowing Calculator - FinWise',
    'description' => 'Input gross monthly income and existing debt payments to discover your maximum safe borrowing limit based on debt ratios.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Loan Affordability' => 'calculators/loan-affordability.php'],
    'faqs' => [['q' => 'What is the 36% Debt-to-Income (DTI) benchmark rule?', 'a' => 'Financial institutions recommend keeping total monthly debt obligations (housing + car loans + credit cards) below 36% of gross monthly income for safe borrowing.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Loan Affordability & Max Borrowing Calculator</h1>
        <p>Determine your safe borrowing limit and maximum approved loan amount based on DTI underwriting guidelines.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Affordability Inputs</h3>
                    <div class="form-group">
                        <label>Gross Monthly Income ($)</label>
                        <input type="number" id="aff-income" value="7500" min="500" max="100000">
                    </div>
                    <div class="form-group">
                        <label>Existing Monthly Debt Payments ($)</label>
                        <input type="number" id="aff-debts" value="800" min="0" max="50000">
                    </div>
                    <div class="form-group">
                        <label>Target Interest Rate (%)</label>
                        <input type="number" id="aff-rate" value="7.0" min="1" max="25" step="0.25">
                    </div>
                    <div class="form-group">
                        <label>Tenure (Years)</label>
                        <select id="aff-tenure">
                            <option value="3">3 Years</option>
                            <option value="5" selected>5 Years</option>
                            <option value="15">15 Years</option>
                            <option value="30">30 Years</option>
                        </select>
                    </div>
                </div>

                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Max Safe Loan Amount</div>
                        <div class="result-main-value" id="aff-res-maxloan">$95,951</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item">
                            <div class="res-item-lbl">Max Monthly EMI Limit</div>
                            <div class="res-item-val" id="aff-res-maxemi" style="color:#34d399;">$1,900</div>
                        </div>
                        <div class="res-item">
                            <div class="res-item-lbl">Max DTI Benchmark</div>
                            <div class="res-item-val" style="color:#ffffff;">36% Cap</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-layout">
            <div class="article-body">
                <h2>Debt-to-Income (DTI) Underwriting Principles</h2>
                <p>Lenders compute your front-end and back-end Debt-to-Income (DTI) ratios before granting loan pre-approvals. Maintaining a debt ratio under 36% ensures comfortable loan repayment without financial strain.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Eligibility Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/loan-eligibility.php">Loan Eligibility Guide</a></li>
                        <li><a href="loan-emi.php">EMI Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const incIn = document.getElementById('aff-income');
    const debIn = document.getElementById('aff-debts');
    const ratIn = document.getElementById('aff-rate');
    const tenIn = document.getElementById('aff-tenure');

    const resLoan = document.getElementById('aff-res-maxloan');
    const resEMI = document.getElementById('aff-res-maxemi');

    function updateAffordability() {
        if (!incIn || !resLoan) return;
        const res = window.FinWiseCalc.calculateAffordability(incIn.value, debIn.value, ratIn.value, tenIn.value);
        resLoan.textContent = window.FinWiseCalc.formatCurrency(res.maxLoan);
        resEMI.textContent = window.FinWiseCalc.formatCurrency(res.maxMonthlyPayment);
    }

    [incIn, debIn, ratIn, tenIn].forEach(input => { if (input) input.addEventListener('input', updateAffordability); });
    updateAffordability();
});
</script>

<?php include __DIR__ . '/../components/footer.php'; ?>
