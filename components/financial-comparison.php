<?php
/**
 * FinWise - Financial Category Comparison & Distribution Graph Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="financial-comparison-wrapper">
    <!-- Category Position Horizontal Bars -->
    <div style="background:#fff; border:1px solid var(--clr-border-light); padding:1.75rem; border-radius:var(--radius-lg); margin-bottom:2rem; box-shadow:var(--shadow-sm);">
        <h3 style="font-size:1.2rem; margin-bottom:1.25rem; color:var(--clr-primary);">Financial Category Breakdown</h3>
        
        <div class="category-bars-container">
            <!-- Income Position -->
            <div class="cat-bar-row" style="margin-bottom:1rem;">
                <div style="display:flex; justify-content:space-between; font-size:0.875rem; font-weight:600; margin-bottom:0.3rem;">
                    <span>Income Position</span>
                    <span id="val-cat-inc">--%</span>
                </div>
                <div class="progress-track" style="height:8px; margin-bottom:0;">
                    <div id="bar-cat-inc" class="progress-fill" style="width:0%;"></div>
                </div>
            </div>

            <!-- Savings Position -->
            <div class="cat-bar-row" style="margin-bottom:1rem;">
                <div style="display:flex; justify-content:space-between; font-size:0.875rem; font-weight:600; margin-bottom:0.3rem;">
                    <span>Savings Position</span>
                    <span id="val-cat-sav">--%</span>
                </div>
                <div class="progress-track" style="height:8px; margin-bottom:0;">
                    <div id="bar-cat-sav" class="progress-fill" style="width:0%;"></div>
                </div>
            </div>

            <!-- Debt Position -->
            <div class="cat-bar-row" style="margin-bottom:1rem;">
                <div style="display:flex; justify-content:space-between; font-size:0.875rem; font-weight:600; margin-bottom:0.3rem;">
                    <span>Debt Position</span>
                    <span id="val-cat-debt">--%</span>
                </div>
                <div class="progress-track" style="height:8px; margin-bottom:0;">
                    <div id="bar-cat-debt" class="progress-fill" style="width:0%;"></div>
                </div>
            </div>

            <!-- Financial Security -->
            <div class="cat-bar-row" style="margin-bottom:1rem;">
                <div style="display:flex; justify-content:space-between; font-size:0.875rem; font-weight:600; margin-bottom:0.3rem;">
                    <span>Financial Security</span>
                    <span id="val-cat-sec">--%</span>
                </div>
                <div class="progress-track" style="height:8px; margin-bottom:0;">
                    <div id="bar-cat-sec" class="progress-fill" style="width:0%;"></div>
                </div>
            </div>

            <!-- Investment Position -->
            <div class="cat-bar-row">
                <div style="display:flex; justify-content:space-between; font-size:0.875rem; font-weight:600; margin-bottom:0.3rem;">
                    <span>Investment Position</span>
                    <span id="val-cat-inv">--%</span>
                </div>
                <div class="progress-track" style="height:8px; margin-bottom:0;">
                    <div id="bar-cat-inv" class="progress-fill" style="width:0%;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- "Where You Stand" Distribution Graph -->
    <div style="background:#fff; border:1px solid var(--clr-border-light); padding:1.75rem; border-radius:var(--radius-lg); box-shadow:var(--shadow-sm);">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
            <h3 style="font-size:1.2rem; margin:0; color:var(--clr-primary);">Where You Stand</h3>
            <span id="curve-rank-badge" class="badge badge-emerald">Interactive Assessment</span>
        </div>

        <div id="where-stand-graph-container" style="position:relative; margin:1.5rem 0;">
            <!-- Bell Curve SVG -->
            <svg viewBox="0 0 500 120" style="width:100%; height:auto; overflow:visible;">
                <!-- Distribution Bell Curve Background Path -->
                <path d="M 10 110 Q 125 110 180 60 T 250 15 T 320 60 Q 375 110 490 110" fill="none" stroke="#e2e8f0" stroke-width="4" />
                <path id="curve-filled-path" d="M 10 110 Q 125 110 180 60 T 250 15 T 320 60 Q 375 110 490 110 L 490 115 L 10 115 Z" fill="url(#curveGlow)" opacity="0.15" />
                <defs>
                    <linearGradient id="curveGlow" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#ef4444" />
                        <stop offset="50%" stop-color="#0284c7" />
                        <stop offset="100%" stop-color="#10b981" />
                    </linearGradient>
                </defs>

                <!-- Dynamic Position Pin Marker (X position animated via JS) -->
                <g id="curve-pin-group" transform="translate(250, 20)" style="transition: transform 0.8s ease;">
                    <circle cx="0" cy="0" r="8" fill="#10b981" stroke="#fff" stroke-width="2.5" class="pin-pulse" />
                    <rect x="-45" y="-28" width="90" height="20" rx="4" fill="#0f2b48" />
                    <text id="curve-pin-text" x="0" y="-14" fill="#fff" font-size="10" font-weight="700" text-anchor="middle">Your Position</text>
                </g>
            </svg>

            <!-- Distribution Axis Labels -->
            <div style="display:flex; justify-content:space-between; font-size:0.75rem; font-weight:600; color:var(--clr-text-muted); margin-top:0.5rem;">
                <span>Poor</span>
                <span>Below Average</span>
                <span>Average</span>
                <span>Above Average</span>
                <span>Excellent</span>
            </div>
        </div>

        <p id="curve-explanation-text" style="font-size:0.875rem; color:var(--clr-text-muted); text-align:center; margin:0;">
            Complete your financial snapshot to position your profile on the demographic bell curve.
        </p>
    </div>
</div>
