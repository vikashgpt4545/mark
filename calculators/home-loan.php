<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Home Loan & Mortgage Calculator - FinWise',
    'description' => 'Plan your dream home financing with accurate mortgage estimates, principal-to-interest breakdowns, and tenure options.',
    'breadcrumbs' => ['Home' => 'index.php', 'Calculators' => 'calculators/index.php', 'Home Loan Calculator' => 'calculators/home-loan.php'],
    'faqs' => [['q' => 'How does mortgage loan tenure impact monthly payments versus total interest?', 'a' => 'A 30-year mortgage offers lower monthly payments but significantly higher lifetime interest compared to a 15-year mortgage.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Home Loan & Mortgage Calculator</h1>
        <p>Plan your property acquisition with accurate principal, interest, and monthly mortgage breakdowns.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="calc-wrapper" style="margin-bottom: 3rem;">
            <div class="calc-grid-layout">
                <div class="calc-controls">
                    <h3>Mortgage Inputs</h3>
                    <div class="form-group">
                        <label>Home Loan Amount ($)</label>
                        <input type="number" id="calc-amount" value="300000" min="10000" max="5000000">
                    </div>
                    <div class="form-group">
                        <label>Mortgage Rate (%)</label>
                        <input type="number" id="calc-rate" value="6.5" min="1" max="20" step="0.125">
                    </div>
                    <div class="form-group">
                        <label>Mortgage Tenure</label>
                        <select id="calc-tenure">
                            <option value="15">15-Year Fixed</option>
                            <option value="20">20-Year Fixed</option>
                            <option value="30" selected>30-Year Fixed</option>
                        </select>
                    </div>
                </div>
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Monthly Principal & Interest</div>
                        <div class="result-main-value" id="res-emi">$1,896.20</div>
                    </div>
                    <div class="results-row">
                        <div class="res-item"><div class="res-item-lbl">Total Interest</div><div class="res-item-val" id="res-interest" style="color:#f87171;">$382,633.47</div></div>
                        <div class="res-item"><div class="res-item-lbl">Total Repayment</div><div class="res-item-val" id="res-total" style="color:#34d399;">$682,633.47</div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-layout">
            <div class="article-body">
                <h2>Understanding Mortgage Amortization</h2>
                <p>During the initial 10 to 15 years of a 30-year fixed mortgage, over 70% of each monthly payment goes toward interest charges rather than building home equity.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Mortgage Links</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../loans/home-loans.php">Home Loans Guide</a></li>
                        <li><a href="loan-affordability.php">Affordability Calc</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
