<?php
/**
 * FinWise - Complete Unified Dashboard Presentation Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="unified-dashboard-card">
    <div class="dash-card-header">
        <h3 style="font-size:1.3rem; color:#fff; margin:0;">Your Financial Position Preview</h3>
        <p style="font-size:0.875rem; color:#94a3b8; margin-top:0.25rem;">See how you compare with people worldwide based on demographic datasets</p>
    </div>

    <div class="unified-dash-3col-grid">
        <!-- Column 1: Score & Category Bars -->
        <div>
            <?php include __DIR__ . '/financial-score.php'; ?>
        </div>

        <!-- Column 2: "Where You Stand" Bell Curve -->
        <div class="dash-curve-col">
            <h4 class="col-title" style="text-align:center;">Where You Stand</h4>

            <div id="where-stand-graph-container" style="position:relative; margin:2rem 0 1rem 0;">
                <svg viewBox="0 0 400 140" style="width:100%; height:auto; overflow:visible;">
                    <defs>
                        <linearGradient id="bellGlow" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#0284c7" stop-opacity="0.2" />
                            <stop offset="50%" stop-color="#38bdf8" stop-opacity="0.8" />
                            <stop offset="100%" stop-color="#10b981" stop-opacity="0.2" />
                        </linearGradient>
                        <linearGradient id="bellFill" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.35" />
                            <stop offset="100%" stop-color="#0284c7" stop-opacity="0.0" />
                        </linearGradient>
                    </defs>
                    <!-- Bell Curve Path -->
                    <path d="M 10 120 Q 100 120 140 70 T 200 15 T 260 70 Q 300 120 390 120" fill="none" stroke="url(#bellGlow)" stroke-width="3.5" />
                    <path d="M 10 120 Q 100 120 140 70 T 200 15 T 260 70 Q 300 120 390 120 L 390 125 L 10 125 Z" fill="url(#bellFill)" />
                    
                    <!-- Dynamic Position Pin Marker -->
                    <g id="curve-pin-group" transform="translate(200, 20)" style="transition: transform 0.8s ease;">
                        <line x1="0" y1="0" x2="0" y2="100" stroke="#34d399" stroke-width="1.5" stroke-dasharray="3,3" />
                        <circle cx="0" cy="0" r="7" fill="#34d399" stroke="#fff" stroke-width="2" class="pin-pulse" />
                        <rect x="-24" y="-26" width="48" height="18" rx="4" fill="#0284c7" />
                        <text id="curve-pin-text" x="0" y="-13" fill="#fff" font-size="10" font-weight="700" text-anchor="middle">You</text>
                    </g>
                </svg>

                <div class="bell-labels-row">
                    <span>Poor</span>
                    <span>Average</span>
                    <span>Excellent</span>
                </div>
            </div>

            <p id="curve-explanation-text" class="curve-status-text">
                You are in the <strong style="color:#34d399;">top 32% worldwide</strong>
            </p>
        </div>

        <!-- Column 3: "People Like You" & Global Distribution Bar -->
        <div class="dash-peer-col">
            <?php include __DIR__ . '/people-like-you.php'; ?>
        </div>
    </div>
</div>
