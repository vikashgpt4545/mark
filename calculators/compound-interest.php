<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Compound Interest Calculator - Power of Compounding Growth',
    'description' => 'Visualize how your initial deposit and regular monthly contributions grow over time with daily, monthly, or annual compounding frequencies.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Compound Interest' => 'calculators/compound-interest.php'],
    'faqs' => [['q' => 'What is compound interest?', 'a' => 'Compound interest is interest earned on both your initial principal balance AND all previously accumulated interest, creating exponential growth.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Compound Interest Calculator</h1>
        <p>Harness Albert Einstein's "Eighth Wonder of the World"—the exponential power of compounding interest.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <!-- Interactive Compound Interest Engine -->
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Compound Interest Inputs</h3>
                    <div class="form-group">
                        <label>Initial Principal ($)</label>
                        <input type="number" id="ci-principal" value="10000" min="0" max="1000000">
                    </div>
                    <div class="form-group">
                        <label>Monthly Contribution ($)</label>
                        <input type="number" id="ci-monthly" value="300" min="0" max="50000">
                    </div>
                    <div class="form-group">
                        <label>Expected Annual Return (%)</label>
                        <input type="number" id="ci-rate" value="8" min="0" max="30" step="0.5">
                    </div>
                    <div class="form-group">
                        <label>Time Horizon (Years)</label>
                        <input type="number" id="ci-years" value="20" min="1" max="50">
                    </div>
                </div>

                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Projected Future Wealth</div>
                        <div class="result-main-value" id="ci-res-total">$214,028</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item">
                            <div class="res-item-lbl">Total Contributions</div>
                            <div class="res-item-val" id="ci-res-deposits" style="color:#ffffff;">$82,000</div>
                        </div>
                        <div class="res-item">
                            <div class="res-item-lbl">Total Compound Interest</div>
                            <div class="res-item-val" id="ci-res-interest" style="color:#34d399;">$132,028</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-layout">
            <div class="article-body">
                <h2>Formula Breakdown & Mathematical Mechanics</h2>
                <div class="callout-box">
                    <h4>📈 Compound Interest Formula</h4>
                    <p><code>A = P(1 + r/n)^(nt) + PMT × [((1 + r/n)^(nt) - 1) / (r/n)]</code></p>
                    <ul>
                        <li><strong>P:</strong> Initial Principal Balance ($10,000)</li>
                        <li><strong>PMT:</strong> Recurring Monthly Contribution ($300)</li>
                        <li><strong>r:</strong> Annual Nominal Interest Rate (8% = 0.08)</li>
                        <li><strong>t:</strong> Investment Time Horizon in Years (20 Years)</li>
                    </ul>
                </div>
                <h3>Worked Example</h3>
                <p>Starting with $10,000 and contributing $300 monthly at an 8% annual return yields $214,028 after 20 years. Your total out-of-pocket deposits total $82,000, while pure compound interest earnings account for $132,028 (over 60% of your total balance!).</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Growth Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="investment.php">Investment Calculator</a></li>
                        <li><a href="savings.php">Savings Planner</a></li>
                        <li><a href="../finance/investing-basics.php">Investing Basics</a></li>
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

    [pIn, mIn, rIn, yIn].forEach(input => {
        if (input) input.addEventListener('input', updateCI);
    });
    updateCI();
});
</script>

<?php include __DIR__ . '/../components/footer.php'; ?>
