<?php
/**
 * FinWise - Financial Position Preview Section
 * Matches reference image: gauge + bars + bell curve + people stats + tool cards
 */
if (!defined('FINWISE_APP')) die('Direct access forbidden.');
?>

<section class="fpp-section" id="fpp-preview-section">
    <div class="container container-wide">

        <!-- ================================================================
             TOP ROW: 3-Column Dashboard
             ================================================================ -->
        <div class="fpp-top-grid">

            <!-- PANEL 1: Score Gauge + Category Bars -->
            <div class="fpp-panel fpp-panel-score">
                <div class="fpp-panel-heading">
                    <h2 class="fpp-title">Your Financial Position Preview</h2>
                    <p class="fpp-subtitle">See how you compare with 8+ billion people worldwide</p>
                </div>

                <div class="fpp-score-layout">
                    <!-- Circular Gauge -->
                    <div class="fpp-gauge-block">
                        <div class="fpp-gauge-ring">
                            <svg viewBox="0 0 120 120" class="fpp-gauge-svg">
                                <circle cx="60" cy="60" r="52" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="10"/>
                                <circle id="fpp-gauge-circle" cx="60" cy="60" r="52" fill="none"
                                    stroke="url(#fppGrad)" stroke-width="10"
                                    stroke-linecap="round"
                                    stroke-dasharray="327"
                                    stroke-dashoffset="327"
                                    transform="rotate(-90 60 60)"/>
                                <defs>
                                    <linearGradient id="fppGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="#38bdf8"/>
                                        <stop offset="100%" stop-color="#34d399"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="fpp-gauge-center">
                                <span class="fpp-score-num" id="fpp-score-num">--</span>
                                <span class="fpp-score-denom">/100</span>
                            </div>
                        </div>
                        <div class="fpp-gauge-label" id="fpp-score-label">Pending Selection</div>
                        <div class="fpp-gauge-badge" id="fpp-score-badge">Complete steps above to reveal</div>
                    </div>

                    <!-- Category Bars -->
                    <div class="fpp-bars-block">
                        <div class="fpp-bars-title">Your Score vs World</div>
                        <div class="fpp-bar-row">
                            <span class="fpp-bar-label">Income Level</span>
                            <div class="fpp-bar-track"><div class="fpp-bar-fill fpp-fill-cyan" id="fpp-bar-income" style="width:0%"></div></div>
                            <span class="fpp-bar-pct" id="fpp-pct-income">--%</span>
                        </div>
                        <div class="fpp-bar-row">
                            <span class="fpp-bar-label">Savings Rate</span>
                            <div class="fpp-bar-track"><div class="fpp-bar-fill fpp-fill-cyan" id="fpp-bar-savings" style="width:0%"></div></div>
                            <span class="fpp-bar-pct" id="fpp-pct-savings">--%</span>
                        </div>
                        <div class="fpp-bar-row">
                            <span class="fpp-bar-label">Debt Level</span>
                            <div class="fpp-bar-track"><div class="fpp-bar-fill fpp-fill-cyan" id="fpp-bar-debt" style="width:0%"></div></div>
                            <span class="fpp-bar-pct" id="fpp-pct-debt">--%</span>
                        </div>
                        <div class="fpp-bar-row">
                            <span class="fpp-bar-label">Financial Security</span>
                            <div class="fpp-bar-track"><div class="fpp-bar-fill fpp-fill-violet" id="fpp-bar-security" style="width:0%"></div></div>
                            <span class="fpp-bar-pct" id="fpp-pct-security">--%</span>
                        </div>
                        <div class="fpp-bar-row">
                            <span class="fpp-bar-label">Investment Level</span>
                            <div class="fpp-bar-track"><div class="fpp-bar-fill fpp-fill-cyan" id="fpp-bar-invest" style="width:0%"></div></div>
                            <span class="fpp-bar-pct" id="fpp-pct-invest">--%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PANEL 2: Bell Curve -->
            <div class="fpp-panel fpp-panel-bell">
                <div class="fpp-panel-heading">
                    <h3 class="fpp-panel-title">Where You Stand</h3>
                </div>
                <div class="fpp-bell-wrapper">
                    <svg viewBox="0 0 300 160" class="fpp-bell-svg" id="fpp-bell-svg">
                        <defs>
                            <linearGradient id="bellGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.7"/>
                                <stop offset="100%" stop-color="#38bdf8" stop-opacity="0.05"/>
                            </linearGradient>
                            <linearGradient id="bellHighlight" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#34d399" stop-opacity="0.85"/>
                                <stop offset="100%" stop-color="#34d399" stop-opacity="0.1"/>
                            </linearGradient>
                        </defs>
                        <!-- Bell curve fill (full) -->
                        <path d="M10,148 C40,148 55,50 80,30 C100,14 120,8 150,8 C180,8 200,14 220,30 C245,50 260,148 290,148 Z"
                              fill="url(#bellGrad)" opacity="0.6"/>
                        <!-- Bell curve stroke -->
                        <path d="M10,148 C40,148 55,50 80,30 C100,14 120,8 150,8 C180,8 200,14 220,30 C245,50 260,148 290,148"
                              fill="none" stroke="#38bdf8" stroke-width="2.5" opacity="0.9"/>
                        <!-- "You" vertical arrow line (centered by default) -->
                        <line id="fpp-bell-marker" x1="150" y1="148" x2="150" y2="42" stroke="#34d399" stroke-width="2" stroke-dasharray="4,3"/>
                        <!-- "You" label -->
                        <text x="150" y="36" text-anchor="middle" fill="#34d399" font-size="12" font-weight="700">You</text>
                        <polygon points="150,44 145,36 155,36" fill="#34d399"/>
                        <!-- X axis line -->
                        <line x1="10" y1="148" x2="290" y2="148" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                    </svg>
                    <div class="fpp-bell-labels">
                        <span>Poor</span>
                        <span>Average</span>
                        <span>Excellent</span>
                    </div>
                </div>
                <p class="fpp-bell-status">Complete assessment above to calculate your <strong id="fpp-bell-percentile">global rank</strong></p>
            </div>

            <!-- PANEL 3: People Like You + Global Distribution -->
            <div class="fpp-panel fpp-panel-right">
                <!-- People Like You -->
                <div class="fpp-people-block">
                    <h3 class="fpp-panel-title">People Like You</h3>
                    <div class="fpp-people-grid">
                        <div class="fpp-people-stat">
                            <div class="fpp-people-pct fpp-pct-cyan" id="fpp-earn-more">--%</div>
                            <div class="fpp-people-lbl">Earn More</div>
                            <div class="fpp-people-icons">👥</div>
                        </div>
                        <div class="fpp-people-stat">
                            <div class="fpp-people-pct fpp-pct-amber" id="fpp-earn-less">--%</div>
                            <div class="fpp-people-lbl">Earn Less</div>
                            <div class="fpp-people-icons">👤</div>
                        </div>
                        <div class="fpp-people-stat">
                            <div class="fpp-people-pct fpp-pct-green" id="fpp-same-level">--%</div>
                            <div class="fpp-people-lbl">Same Level</div>
                            <div class="fpp-people-icons">🤝</div>
                        </div>
                        <div class="fpp-people-stat">
                            <div class="fpp-people-pct fpp-pct-muted" id="fpp-no-data">--%</div>
                            <div class="fpp-people-lbl">No Data</div>
                            <div class="fpp-people-icons">❓</div>
                        </div>
                    </div>
                </div>

                <!-- Global Distribution Bar -->
                <div class="fpp-dist-block">
                    <h3 class="fpp-panel-title">Global Distribution</h3>
                    <div class="fpp-dist-bar" id="fpp-dist-bar">
                        <div class="fpp-dist-seg fpp-seg-poor"    style="width:10%">10%</div>
                        <div class="fpp-dist-seg fpp-seg-below"   style="width:22%">22%</div>
                        <div class="fpp-dist-seg fpp-seg-avg fpp-seg-active" style="width:36%">36%</div>
                        <div class="fpp-dist-seg fpp-seg-above"   style="width:22%">22%</div>
                        <div class="fpp-dist-seg fpp-seg-excel"   style="width:10%">10%</div>
                    </div>
                    <div class="fpp-dist-labels">
                        <span>Poor</span>
                        <span>Below Average</span>
                        <span>Average</span>
                        <span>Above Average</span>
                        <span>Excellent</span>
                    </div>
                </div>
            </div>

        </div><!-- /fpp-top-grid -->

        <!-- ================================================================
             BOTTOM ROW: 5 Tool Cards
             ================================================================ -->
        <div class="fpp-tools-row">

            <a href="calculators/loan-affordability.php" class="fpp-tool-card">
                <div class="fpp-tool-icon fpp-icon-violet">💰</div>
                <div class="fpp-tool-body">
                    <div class="fpp-tool-title">Loan Affordability Calculator</div>
                    <div class="fpp-tool-desc">Check your loan eligibility in seconds</div>
                </div>
                <div class="fpp-tool-arrow">→</div>
            </a>

            <a href="calculators/compound-interest.php" class="fpp-tool-card">
                <div class="fpp-tool-icon fpp-icon-green">📈</div>
                <div class="fpp-tool-body">
                    <div class="fpp-tool-title">Investment Growth Calculator</div>
                    <div class="fpp-tool-desc">See your money grow over time</div>
                </div>
                <div class="fpp-tool-arrow">→</div>
            </a>

            <a href="finance/credit-score.php" class="fpp-tool-card">
                <div class="fpp-tool-icon fpp-icon-amber">📊</div>
                <div class="fpp-tool-body">
                    <div class="fpp-tool-title">Credit Score Analyzer</div>
                    <div class="fpp-tool-desc">Understand and improve your credit score</div>
                </div>
                <div class="fpp-tool-arrow">→</div>
            </a>

            <a href="insurance/index.php" class="fpp-tool-card">
                <div class="fpp-tool-icon fpp-icon-blue">🛡️</div>
                <div class="fpp-tool-body">
                    <div class="fpp-tool-title">Insurance Needs Check</div>
                    <div class="fpp-tool-desc">Find the right coverage for your life</div>
                </div>
                <div class="fpp-tool-arrow">→</div>
            </a>

            <a href="calculators/index.php" class="fpp-tool-card fpp-tool-card-highlight">
                <div class="fpp-tool-icon fpp-icon-cyan">🔲</div>
                <div class="fpp-tool-body">
                    <div class="fpp-tool-title">Explore All Tools</div>
                    <div class="fpp-tool-desc">20+ powerful financial tools and calculators</div>
                </div>
                <div class="fpp-tool-arrow">→</div>
            </a>

        </div><!-- /fpp-tools-row -->

    </div><!-- /container -->
</section>
