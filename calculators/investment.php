<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Investment Growth & Yield Calculator - FinWise',
    'description' => 'Calculate projected future wealth across stocks, mutual funds, and fixed deposits with variable expected rates of return.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Investment Calculator' => 'calculators/investment.php'],
    'faqs' => [['q' => 'What rate of return should I assume for stock index funds?', 'a' => 'Historically, broad market index funds like the S&P 500 have delivered approximately 7% to 10% average annual returns before inflation.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Investment Growth & Yield Calculator</h1>
        <p>Project long-term wealth accumulation across stock portfolios, index funds, and retirement accounts.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Investment Parameters</h3>
                    <div class="form-group">
                        <label>Starting Capital ($)</label>
                        <input type="number" id="ci-principal" value="25000" min="0" max="5000000">
                    </div>
                    <div class="form-group">
                        <label>Monthly Contribution ($)</label>
                        <input type="number" id="ci-monthly" value="500" min="0" max="100000">
                    </div>
                    <div class="form-group">
                        <label>Expected Return (%)</label>
                        <input type="number" id="ci-rate" value="9" min="1" max="30" step="0.5">
                    </div>
                    <div class="form-group">
                        <label>Investment Years</label>
                        <input type="number" id="ci-years" value="25" min="1" max="50">
                    </div>
                </div>
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Projected Portfolio Value</div>
                        <div class="result-main-value" id="ci-res-total">$780,248</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item"><div class="res-item-lbl">Total Out-of-Pocket</div><div class="res-item-val" id="ci-res-deposits" style="color:#ffffff;">$175,000</div></div>
                        <div class="res-item"><div class="res-item-lbl">Investment Profits</div><div class="res-item-val" id="ci-res-interest" style="color:#34d399;">$605,248</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-layout">
            <div class="article-body">
                <h2>Building Portfolio Assets</h2>
                <p>Consistently contributing monthly payments into low-cost, broadly diversified index funds creates compounding gains that generate passive income in retirement.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Investment Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../finance/investing-basics.php">Investing Basics</a></li>
                        <li><a href="compound-interest.php">Compound Interest Engine</a></li>
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
