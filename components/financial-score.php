<?php
/**
 * FinWise - Financial Score Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="score-card-wrapper" style="background:#fff; border:1px solid var(--clr-border-light); padding:2rem; border-radius:var(--radius-lg); text-align:center; box-shadow:var(--shadow-md);">
    <h3 style="font-size:1.15rem; margin-bottom:1rem; color:var(--clr-primary);">Financial Position Score</h3>
    
    <div class="gauge-score-container">
        <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45" fill="none" stroke="#e2e8f0" stroke-width="8"></circle>
            <circle id="dash-gauge-circle" cx="50" cy="50" r="45" fill="none" stroke="var(--clr-emerald)" stroke-width="8" stroke-dasharray="283" stroke-dashoffset="283" stroke-linecap="round" style="transition: stroke-dashoffset 1s ease-in-out;"></circle>
        </svg>
        <div class="gauge-center-text">
            <div id="dash-score-val" class="gauge-number">--</div>
            <div class="gauge-label">/ 100</div>
        </div>
    </div>

    <div id="dash-score-status" style="font-size:1.3rem; font-weight:700; color:var(--clr-primary); margin-bottom:0.5rem;">
        Complete Assessment
    </div>
    <p id="dash-score-desc" style="font-size:0.875rem; color:var(--clr-text-muted);">
        Submit your financial profile above to generate your score and position classification.
    </p>
</div>
