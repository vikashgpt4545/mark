<?php
/**
 * FinWise - Financial Score & Category Position Sub-Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="dash-score-col">
    <div style="display:flex; align-items:center; gap:1.5rem; margin-bottom:1.5rem;">
        <div class="gauge-score-container">
            <svg viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="42" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="8"></circle>
                <circle id="dash-gauge-circle" cx="50" cy="50" r="42" fill="none" stroke="var(--clr-emerald)" stroke-width="8" stroke-dasharray="264" stroke-dashoffset="264" stroke-linecap="round" style="transition: stroke-dashoffset 1s ease-in-out;"></circle>
            </svg>
            <div class="gauge-center-text">
                <div id="dash-score-val" class="gauge-number" style="color:#fff;">--</div>
                <div class="gauge-label" style="color:#94a3b8;">/ 100</div>
            </div>
        </div>

        <div>
            <div id="dash-score-status" style="font-size:1.35rem; font-weight:800; color:#fff; margin-bottom:0.25rem;">
                Pending Assessment
            </div>
            <span id="dash-score-percentile-pill" class="badge badge-emerald" style="font-size:0.75rem;">
                Better than 68% of people
            </span>
        </div>
    </div>

    <!-- Category Progress Bars -->
    <div class="category-bars-container">
        <div class="cat-bar-row">
            <div class="cat-label-row">
                <span>Income Level</span>
                <span id="val-cat-inc">78%</span>
            </div>
            <div class="progress-track-dark">
                <div id="bar-cat-inc" class="progress-fill-cyan" style="width:78%;"></div>
            </div>
        </div>

        <div class="cat-bar-row">
            <div class="cat-label-row">
                <span>Savings Rate</span>
                <span id="val-cat-sav">55%</span>
            </div>
            <div class="progress-track-dark">
                <div id="bar-cat-sav" class="progress-fill-emerald" style="width:55%;"></div>
            </div>
        </div>

        <div class="cat-bar-row">
            <div class="cat-label-row">
                <span>Debt Level</span>
                <span id="val-cat-debt">62%</span>
            </div>
            <div class="progress-track-dark">
                <div id="bar-cat-debt" class="progress-fill-cyan" style="width:62%;"></div>
            </div>
        </div>

        <div class="cat-bar-row">
            <div class="cat-label-row">
                <span>Financial Security</span>
                <span id="val-cat-sec">48%</span>
            </div>
            <div class="progress-track-dark">
                <div id="bar-cat-sec" class="progress-fill-emerald" style="width:48%;"></div>
            </div>
        </div>

        <div class="cat-bar-row">
            <div class="cat-label-row">
                <span>Investment Level</span>
                <span id="val-cat-inv">70%</span>
            </div>
            <div class="progress-track-dark">
                <div id="bar-cat-inv" class="progress-fill-cyan" style="width:70%;"></div>
            </div>
        </div>
    </div>
</div>
