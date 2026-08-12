<?php
/**
 * FinWise - People Like You Peer Group Comparison Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="people-like-you-section" style="margin-top:2.5rem;">
    <div style="text-align:center; margin-bottom:1.5rem;">
        <span class="section-subtitle">Demographic Peer Benchmarking</span>
        <h3 style="font-size:1.5rem; color:var(--clr-primary); margin-top:0.25rem;">People Like You</h3>
        <p style="font-size:0.9rem; color:var(--clr-text-muted);">Comparing your financial profile against peers in your country and age group.</p>
    </div>

    <div id="peer-cards-container" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:1.25rem;">
        <!-- Card 1: Earn More -->
        <div class="calculator-card" style="background:#fff; border:1px solid var(--clr-border-light); padding:1.25rem; text-align:center;">
            <div style="font-size:0.8rem; font-weight:700; color:var(--clr-text-muted); text-transform:uppercase;">Earn More</div>
            <div id="peer-val-more" style="font-size:2rem; font-weight:800; color:var(--clr-primary); margin:0.4rem 0;">--%</div>
            <p style="font-size:0.75rem; color:var(--clr-text-muted); margin:0;">Percentage of peer cohort earning a higher income bracket.</p>
        </div>

        <!-- Card 2: Similar Level -->
        <div class="calculator-card" style="background:#fff; border:1px solid var(--clr-border-light); padding:1.25rem; text-align:center;">
            <div style="font-size:0.8rem; font-weight:700; color:var(--clr-text-muted); text-transform:uppercase;">Similar Level</div>
            <div id="peer-val-similar" style="font-size:2rem; font-weight:800; color:var(--clr-primary-accent); margin:0.4rem 0;">--%</div>
            <p style="font-size:0.75rem; color:var(--clr-text-muted); margin:0;">Percentage of peer cohort in the exact same income range.</p>
        </div>

        <!-- Card 3: Earn Less -->
        <div class="calculator-card" style="background:#fff; border:1px solid var(--clr-border-light); padding:1.25rem; text-align:center;">
            <div style="font-size:0.8rem; font-weight:700; color:var(--clr-text-muted); text-transform:uppercase;">Earn Less</div>
            <div id="peer-val-less" style="font-size:2rem; font-weight:800; color:var(--clr-emerald); margin:0.4rem 0;">--%</div>
            <p style="font-size:0.75rem; color:var(--clr-text-muted); margin:0;">Percentage of peer cohort in lower income brackets.</p>
        </div>
    </div>

    <!-- Methodology & Data Status Callout -->
    <div id="peer-data-status" class="callout-box" style="margin-top:1.25rem; background:#f8fafc; border:1px solid var(--clr-border-light); padding:1rem 1.25rem; border-radius:var(--radius-md); font-size:0.85rem; color:var(--clr-text-muted);">
        <strong>Data Transparency:</strong> Select your location and age profile in the snapshot tool above to compare with verified national central bank & census datasets.
    </div>
</div>
