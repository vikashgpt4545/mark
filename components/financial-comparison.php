<?php
/**
 * FinWise - Complete Large Financial Position Dashboard Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="financial-dashboard-main-card">
    <div class="dash-card-header">
        <div>
            <h2 class="dash-main-heading">YOUR FINANCIAL POSITION</h2>
            <p class="dash-main-subheading">See how your financial profile compares with available demographic benchmarks</p>
        </div>
    </div>

    <!-- Top Grid: Score Gauge + Category Breakdown -->
    <div class="dash-top-grid">
        <!-- Score Card -->
        <?php include __DIR__ . '/financial-score.php'; ?>

        <!-- Category Breakdown Card -->
        <div class="dash-cat-breakdown-card">
            <h3 class="col-title" style="margin-bottom:1.25rem;">Financial Category Breakdown</h3>
            
            <div class="category-bars-list">
                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Income Level</span>
                        <span id="val-cat-inc" class="cat-val">78%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-inc" class="progress-fill-cyan" style="width:78%;"></div>
                    </div>
                </div>

                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Savings Rate</span>
                        <span id="val-cat-sav" class="cat-val">55%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-sav" class="progress-fill-emerald" style="width:55%;"></div>
                    </div>
                </div>

                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Debt Management</span>
                        <span id="val-cat-debt" class="cat-val">62%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-debt" class="progress-fill-cyan" style="width:62%;"></div>
                    </div>
                </div>

                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Emergency Reserve</span>
                        <span id="val-cat-sec" class="cat-val">48%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-sec" class="progress-fill-emerald" style="width:48%;"></div>
                    </div>
                </div>

                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Risk Insurance</span>
                        <span id="val-cat-ins" class="cat-val">70%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-ins" class="progress-fill-cyan" style="width:70%;"></div>
                    </div>
                </div>

                <div class="cat-bar-item">
                    <div class="cat-label-row">
                        <span class="cat-name">Investment Portfolio</span>
                        <span id="val-cat-inv" class="cat-val">65%</span>
                    </div>
                    <div class="progress-track-dark-lg">
                        <div id="bar-cat-inv" class="progress-fill-emerald" style="width:65%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Section: Large "Where You Stand" SVG Bell Curve Graph -->
    <div class="dash-curve-section-card">
        <h3 class="col-title" style="text-align:center; font-size:1.35rem; margin-bottom:0.25rem;">Where You Stand</h3>
        <p style="text-align:center; font-size:0.85rem; color:#94a3b8; margin-bottom:1.5rem;">Demographic percentile distribution curve</p>

        <div id="where-stand-graph-container" class="bell-curve-svg-wrapper">
            <svg viewBox="0 0 600 160" class="bell-curve-svg">
                <defs>
                    <linearGradient id="bellGlowLarge" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#0284c7" stop-opacity="0.2" />
                        <stop offset="50%" stop-color="#38bdf8" stop-opacity="0.9" />
                        <stop offset="100%" stop-color="#10b981" stop-opacity="0.2" />
                    </linearGradient>
                    <linearGradient id="bellFillLarge" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.4" />
                        <stop offset="100%" stop-color="#0284c7" stop-opacity="0.0" />
                    </linearGradient>
                </defs>
                <!-- Axis Line -->
                <line x1="20" y1="140" x2="580" y2="140" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" />
                <!-- Bell Curve Path -->
                <path d="M 20 140 Q 150 140 210 80 T 300 18 T 390 80 Q 450 140 580 140" fill="none" stroke="url(#bellGlowLarge)" stroke-width="4" />
                <path d="M 20 140 Q 150 140 210 80 T 300 18 T 390 80 Q 450 140 580 140 L 580 142 L 20 142 Z" fill="url(#bellFillLarge)" />

                <!-- Dynamic Position Pin Marker -->
                <g id="curve-pin-group" transform="translate(390, 80)" style="transition: transform 1s cubic-bezier(0.34, 1.56, 0.64, 1);">
                    <line x1="0" y1="0" x2="0" y2="60" stroke="#34d399" stroke-width="2" stroke-dasharray="3,3" />
                    <circle cx="0" cy="0" r="8" fill="#34d399" stroke="#ffffff" stroke-width="2.5" class="pin-pulse" />
                    <rect x="-32" y="-30" width="64" height="22" rx="5" fill="#0284c7" />
                    <text id="curve-pin-text" x="0" y="-15" fill="#ffffff" font-size="11" font-weight="800" text-anchor="middle">YOU</text>
                </g>
            </svg>

            <div class="bell-labels-row-large">
                <span>Poor</span>
                <span>Below Average</span>
                <span>Average</span>
                <span>Above Average</span>
                <span>Excellent</span>
            </div>
        </div>

        <p id="curve-explanation-text" class="curve-status-text-large">
            You are in the <strong style="color:#34d399;">top 32% worldwide</strong> based on demographic benchmark surveys.
        </p>
    </div>

    <!-- Bottom Section: People Like You & Global Distribution -->
    <div style="margin-top:2rem;">
        <?php include __DIR__ . '/people-like-you.php'; ?>
    </div>
</div>
