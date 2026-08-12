<?php
/**
 * FinWise - Footer Component
 */

if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
?>
<footer class="site-footer">
    <div class="container">
        <!-- Financial Disclaimer Banner -->
        <div class="disclaimer-banner">
            <strong>Important Financial Disclaimer:</strong> Content published on FinWise is provided solely for educational, informational, and personal planning purposes. FinWise is an independent publisher and financial comparison resource, not a registered bank, lender, or certified investment advisor. Financial products, rates, terms, and regulatory provisions are subject to change. Always consult a qualified CPA, legal counsel, or accredited financial consultant before entering into binding loan, insurance, or investment contracts.
        </div>

        <div class="footer-grid">
            <!-- Column 1: Brand Info -->
            <div class="footer-brand">
                <a href="<?php echo $root; ?>" class="brand-logo" style="color: #ffffff;">
                    <div class="logo-icon">❖</div>
                    <div>Fin<span class="accent">Wise</span></div>
                </a>
                <p>Empowering millions to make smarter monetary decisions with real-time financial tools, unbiased loan analysis, credit card strategies, and comprehensive insurance guides.</p>
            </div>

            <!-- Column 2: Finance -->
            <div class="footer-col">
                <h5>Finance</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $root; ?>finance/personal-finance.php">Personal Finance</a></li>
                    <li><a href="<?php echo $root; ?>finance/budgeting.php">Budgeting Strategies</a></li>
                    <li><a href="<?php echo $root; ?>finance/saving-money.php">Saving Money</a></li>
                    <li><a href="<?php echo $root; ?>finance/banking.php">Banking Guide</a></li>
                    <li><a href="<?php echo $root; ?>finance/investing-basics.php">Investing Basics</a></li>
                    <li><a href="<?php echo $root; ?>finance/financial-planning.php">Financial Planning</a></li>
                </ul>
            </div>

            <!-- Column 3: Loans -->
            <div class="footer-col">
                <h5>Loans</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $root; ?>loans/personal-loans.php">Personal Loans</a></li>
                    <li><a href="<?php echo $root; ?>loans/home-loans.php">Home Loans</a></li>
                    <li><a href="<?php echo $root; ?>loans/auto-loans.php">Auto Loans</a></li>
                    <li><a href="<?php echo $root; ?>loans/business-loans.php">Business Loans</a></li>
                    <li><a href="<?php echo $root; ?>loans/education-loans.php">Education Loans</a></li>
                    <li><a href="<?php echo $root; ?>loans/loan-emi.php">Loan EMI Guide</a></li>
                </ul>
            </div>

            <!-- Column 4: Credit Cards -->
            <div class="footer-col">
                <h5>Credit Cards</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $root; ?>credit-cards/best-credit-cards.php">Best Credit Cards</a></li>
                    <li><a href="<?php echo $root; ?>credit-cards/cashback-cards.php">Cashback Cards</a></li>
                    <li><a href="<?php echo $root; ?>credit-cards/rewards-cards.php">Rewards Cards</a></li>
                    <li><a href="<?php echo $root; ?>credit-cards/travel-cards.php">Travel Cards</a></li>
                    <li><a href="<?php echo $root; ?>credit-cards/credit-score.php">Credit Score Guide</a></li>
                    <li><a href="<?php echo $root; ?>credit-cards/credit-utilization.php">Credit Utilization</a></li>
                </ul>
            </div>

            <!-- Column 5: Insurance -->
            <div class="footer-col">
                <h5>Insurance</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $root; ?>insurance/life-insurance.php">Life Insurance</a></li>
                    <li><a href="<?php echo $root; ?>insurance/health-insurance.php">Health Insurance</a></li>
                    <li><a href="<?php echo $root; ?>insurance/car-insurance.php">Car Insurance</a></li>
                    <li><a href="<?php echo $root; ?>insurance/travel-insurance.php">Travel Insurance</a></li>
                    <li><a href="<?php echo $root; ?>insurance/home-insurance.php">Home Insurance</a></li>
                    <li><a href="<?php echo $root; ?>insurance/insurance-terms.php">Insurance Terms</a></li>
                </ul>
            </div>

            <!-- Column 6: Company & Legal -->
            <div class="footer-col">
                <h5>Company</h5>
                <ul class="footer-links">
                    <li><a href="<?php echo $root; ?>about.php">About Us</a></li>
                    <li><a href="<?php echo $root; ?>contact.php">Contact</a></li>
                    <li><a href="<?php echo $root; ?>editorial-policy.php">Editorial Policy</a></li>
                    <li><a href="<?php echo $root; ?>privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="<?php echo $root; ?>terms.php">Terms of Service</a></li>
                    <li><a href="<?php echo $root; ?>disclaimer.php">Disclaimer</a></li>
                    <li><a href="<?php echo $root; ?>sitemap.php">Sitemap</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div>&copy; <?php echo date('Y'); ?> FinWise Financial Insights. All Rights Reserved.</div>
            <div>Designed for clarity, precision & financial trust.</div>
        </div>
    </div>
</footer>

<!-- Social Bar Ad Script -->
<script src="https://pl30814529.effectivecpmnetwork.com/41/bc/0a/41bc0afe84453a88eeb84609d49e78d4.js"></script>

<script src="<?php echo $root; ?>assets/js/main.js"></script>
<script src="<?php echo $root; ?>assets/js/calculators.js"></script>
<script src="<?php echo $root; ?>assets/js/snapshot-engine.js"></script>
<script src="<?php echo $root; ?>assets/js/financial-assessment.js"></script>
<script src="<?php echo $root; ?>assets/js/financial-dashboard.js"></script>
</body>
</html>
