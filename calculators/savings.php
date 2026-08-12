<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Savings Goal & Growth Calculator - FinWise',
    'description' => 'Find out how long it will take to reach your target savings goal or how much you must save monthly to achieve it.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Savings Calculator' => 'calculators/savings.php'],
    'faqs' => [['q' => 'Where should I keep short-term savings?', 'a' => 'Store short-term savings (needed within 1 to 3 years) in liquid High-Yield Savings Accounts (HYSA) or short-term CDs to protect capital against market fluctuations.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Savings Goal & Growth Calculator</h1>
        <p>Set targets for house down payments, emergency funds, or vacation funds and track progress.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Savings Goal Inputs</h3>
                    <div class="form-group">
                        <label>Current Savings ($)</label>
                        <input type="number" id="ci-principal" value="5000" min="0" max="500000">
                    </div>
                    <div class="form-group">
                        <label>Monthly Savings ($)</label>
                        <input type="number" id="ci-monthly" value="400" min="10" max="10000">
                    </div>
                    <div class="form-group">
                        <label>HYSA Interest Rate (%)</label>
                        <input type="number" id="ci-rate" value="4.5" min="0.1" max="15" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Savings Period (Years)</label>
                        <input type="number" id="ci-years" value="5" min="1" max="30">
                    </div>
                </div>
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Total Savings Balance</div>
                        <div class="result-main-value" id="ci-res-total">$32,714</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item"><div class="res-item-lbl">Total Out-of-Pocket</div><div class="res-item-val" id="ci-res-deposits" style="color:#ffffff;">$29,000</div></div>
                        <div class="res-item"><div class="res-item-lbl">Interest Earned</div><div class="res-item-val" id="ci-res-interest" style="color:#34d399;">$3,714</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-layout">
            <div class="article-body">
                <h2>Achieving Specific Savings Milestones</h2>
                <p>Automating monthly transfers ensures your savings targets are reached on schedule without relying on willpower alone.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Savings Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../finance/saving-money.php">Saving Money Tips</a></li>
                        <li><a href="../finance/emergency-fund.php">Emergency Fund</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const pIn = document.getElementById('ci-principal');
    const mIn = document.getElementById('ci-monthly');
    const rIn = document.getElementById('ci-rate');
    const yIn = document.getElementById('ci-years');

    const resTot = document.getElementById('ci-res-total');
    const resDep = document.getElementById('ci-res-deposits');
    const resInt = document.getElementById('ci-res-interest');

    function updateCI() {
        if (!pIn || !resTot) return;
        const res = window.FinWiseCalc.calculateCompoundInterest(
            pIn.value, rIn.value, yIn.value, 12, mIn.value
        );
        resTot.textContent = window.FinWiseCalc.formatCurrency(res.futureValue);
        resDep.textContent = window.FinWiseCalc.formatCurrency(res.totalDeposits);
        resInt.textContent = window.FinWiseCalc.formatCurrency(res.interestEarned);
    }
    [pIn, mIn, rIn, yIn].forEach(input => { if (input) input.addEventListener('input', updateCI); });
    updateCI();
});
</script>
<?php include __DIR__ . '/../components/footer.php'; ?>
