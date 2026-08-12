<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Credit Card Interest & Payoff Time Calculator - FinWise',
    'description' => 'See how long it takes to clear credit card debt paying minimum balances versus fixed monthly payments, and how much interest you save.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Credit Card Payoff' => 'calculators/credit-card-interest.php'],
    'faqs' => [['q' => 'How much interest can I save by doubling my minimum credit card payment?', 'a' => 'Doubling your minimum payment often cuts your payoff timeframe by 60% to 80% and saves thousands of dollars in interest charges.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Credit Card Interest & Payoff Time Calculator</h1>
        <p>Calculate exact payoff months, interest savings, and debt payoff acceleration plans.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Credit Card Debt Inputs</h3>
                    <div class="form-group">
                        <label>Card Balance ($)</label>
                        <input type="number" id="cc-balance" value="8000" min="100" max="100000">
                    </div>
                    <div class="form-group">
                        <label>Card APR (%)</label>
                        <input type="number" id="cc-apr" value="22.5" min="1" max="40" step="0.1">
                    </div>
                    <div class="form-group">
                        <label>Fixed Monthly Payment ($)</label>
                        <input type="number" id="cc-payment" value="300" min="10" max="10000">
                    </div>
                </div>

                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Payoff Timeline</div>
                        <div class="result-main-value" id="cc-res-months">35 Months</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item">
                            <div class="res-item-lbl">Total Interest Paid</div>
                            <div class="res-item-val" id="cc-res-interest" style="color:#f87171;">$2,482</div>
                        </div>
                        <div class="res-item">
                            <div class="res-item-lbl">Total Out-of-Pocket</div>
                            <div class="res-item-val" id="cc-res-total" style="color:#34d399;">$10,482</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-layout">
            <div class="article-body">
                <h2>Accelerating Credit Card Debt Eradication</h2>
                <p>Paying only the minimum requirement keeps you trapped in high-APR interest compounding. Switching to a fixed payment strategy dramatically speeds up debt freedom.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Payoff Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../credit-cards/credit-card-interest.php">APR Mechanics Guide</a></li>
                        <li><a href="personal-loan.php">Consolidation Calc</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const balIn = document.getElementById('cc-balance');
    const aprIn = document.getElementById('cc-apr');
    const pmtIn = document.getElementById('cc-payment');

    const resM = document.getElementById('cc-res-months');
    const resI = document.getElementById('cc-res-interest');
    const resT = document.getElementById('cc-res-total');

    function updateCC() {
        if (!balIn || !resM) return;
        const res = window.FinWiseCalc.calculateCreditCardPayoff(balIn.value, aprIn.value, pmtIn.value);
        if (res.months === Infinity) {
            resM.textContent = 'Never (Warning!)';
            resI.textContent = 'Infinity';
            resT.textContent = 'Increase Payment';
        } else {
            resM.textContent = res.months + ' Months';
            resI.textContent = window.FinWiseCalc.formatCurrency(res.totalInterest);
            resT.textContent = window.FinWiseCalc.formatCurrency(res.totalPaid);
        }
    }

    [balIn, aprIn, pmtIn].forEach(input => { if (input) input.addEventListener('input', updateCC); });
    updateCC();
});
</script>

<?php include __DIR__ . '/../components/footer.php'; ?>
