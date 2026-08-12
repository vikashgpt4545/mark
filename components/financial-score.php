<?php
/**
 * FinWise - Financial Score & Category Position Sub-Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="dash-score-container-card">
    <h3 class="col-title" style="margin-bottom:1.25rem;">Financial Position Score</h3>
    
    <div class="score-ring-row">
        <!-- Circular Gauge -->
        <div class="gauge-score-large">
            <svg viewBox="0 0 120 120" class="gauge-svg-large">
                <circle cx="60" cy="60" r="50" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="10"></circle>
                <circle id="dash-gauge-circle" cx="60" cy="60" r="50" fill="none" stroke="#34d399" stroke-width="10" stroke-dasharray="314" stroke-dashoffset="314" stroke-linecap="round" style="transition: stroke-dashoffset 1.2s ease-in-out;"></circle>
            </svg>
            <div class="gauge-center-text">
                <div id="dash-score-val" class="gauge-number-lg">72</div>
                <div class="gauge-denom">/ 100</div>
            </div>
        </div>

        <!-- Score Status & Percentile Badge -->
        <div class="score-meta">
            <div id="dash-score-status" class="score-status-text">
                ABOVE AVERAGE
            </div>
            <div id="dash-score-percentile-pill" class="score-percentile-badge">
                Better than 68% of benchmark group
            </div>
            <p id="dash-score-desc" style="font-size:0.8rem; color:#94a3b8; margin-top:0.5rem; line-height:1.4;">
                Calculated across 6 core monetary indicators against regional demographic benchmarks.
            </p>
        </div>
    </div>
</div>
