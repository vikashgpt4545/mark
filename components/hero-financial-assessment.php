<?php
/**
 * FinWise - Primary Fintech Hero Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}

$countries = finwise_get_global_country_configs();
?>
<section class="hero-section">
    <div class="container container-wide">
        <div class="hero-grid">
            <!-- Left Side (45% Width): High Impact Product Headline & Trust -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="pulse-dot"></span> Interactive Financial Intelligence Platform
                </div>

                <h1 class="hero-title">
                    See Where You Stand <br>
                    <span class="gradient-text">Among 8+ Billion People</span> <br>
                    Worldwide
                </h1>



                <!-- Compact 2x2 Trust Indicators -->
                <div class="trust-indicators-grid">
                    <div class="trust-item">
                        <div class="trust-icon">⚡</div>
                        <div>
                            <strong>FREE</strong>
                            <div class="trust-sub">No signup</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">📊</div>
                        <div>
                            <strong>PERSONALIZED</strong>
                            <div class="trust-sub">Instant result</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">🌐</div>
                        <div>
                            <strong>GLOBAL</strong>
                            <div class="trust-sub">Benchmark data</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">🔒</div>
                        <div>
                            <strong>PRIVATE</strong>
                            <div class="trust-sub">Minimal data</div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Right Side (55% Width): Large Interactive Financial Dashboard Card -->
            <div id="hero-snapshot-widget" class="hero-snapshot-card">
                <div class="snap-card-top-bar">
                    <span class="snap-card-title-main">Your Financial Snapshot</span>
                    <div class="step-pills-row">
                        <span id="step-pill-1" class="step-pill active">01</span>
                        <span id="step-pill-2" class="step-pill">02</span>
                        <span id="step-pill-3" class="step-pill">03</span>
                        <span id="step-pill-4" class="step-pill">04</span>
                        <span id="step-pill-5" class="step-pill">05</span>
                        <span id="step-pill-6" class="step-pill">06</span>
                    </div>
                </div>

                <div class="snap-card-content-grid">
                    <!-- Form Container -->
                    <div class="snap-form-container">
                        <form id="hero-snapshot-form">
                            <!-- Step 1: Location -->
                            <div id="snap-step-1" class="snap-step">
                                <h3 class="snap-step-heading">Where are you located?</h3>
                                <p class="snap-step-desc">Select your country to use the appropriate currency and available benchmark information.</p>
                                
                                <div class="form-group" style="margin-bottom:1.5rem;">
                                    <label for="snap-country" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Select Country</label>
                                    <select id="snap-country" class="form-select-dark">
                                        <?php foreach ($countries as $code => $c): ?>
                                            <option value="<?php echo $code; ?>" <?php echo $code === 'IN' ? 'selected' : ''; ?>>
                                                <?php echo $c['flag'] . ' ' . $c['name'] . ' (' . $c['symbol'] . ' ' . $c['currency'] . ')'; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Step 2: About You -->
                            <div id="snap-step-2" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading">About You (Age Group)</h3>
                                <p class="snap-step-desc">Age helps contextualize wealth accumulation against demographic benchmark targets.</p>
                                <div class="form-group" style="margin-bottom:1.5rem;">
                                    <label for="snap-age" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Age Range</label>
                                    <select id="snap-age" class="form-select-dark">
                                        <option value="18-24">18 – 24 years</option>
                                        <option value="25-34" selected>25 – 34 years</option>
                                        <option value="35-44">35 – 44 years</option>
                                        <option value="45-54">45 – 54 years</option>
                                        <option value="55plus">55+ years</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Step 3: Income -->
                            <div id="snap-step-3" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading">Gross Monthly Income</h3>
                                <p class="snap-step-desc">Select your estimated household earnings bracket in local currency.</p>
                                <div class="form-group" style="margin-bottom:1.5rem;">
                                    <label for="snap-income" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Monthly Income</label>
                                    <select id="snap-income" class="form-select-dark"></select>
                                </div>
                            </div>

                            <!-- Step 4: Savings & Debt -->
                            <div id="snap-step-4" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading">Savings & Debt Profile</h3>
                                <p class="snap-step-desc">Estimate your monthly net savings percentage and total debt liabilities.</p>
                                <div class="form-group" style="margin-bottom:1.2rem;">
                                    <label for="snap-savings" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Monthly Net Savings (%)</label>
                                    <select id="snap-savings" class="form-select-dark">
                                        <option value="under5">Under 5% of income</option>
                                        <option value="5-10">5% – 10% of income</option>
                                        <option value="10-20" selected>10% – 20% of income</option>
                                        <option value="20-30">20% – 30% of income</option>
                                        <option value="30plus">Over 30% of income</option>
                                    </select>
                                </div>
                                <div class="form-group" style="margin-bottom:1.5rem;">
                                    <label for="snap-debt" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Total Debt Liabilities</label>
                                    <select id="snap-debt" class="form-select-dark"></select>
                                </div>
                            </div>

                            <!-- Step 5: Protection -->
                            <div id="snap-step-5" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading">Risk Protection Coverage</h3>
                                <p class="snap-step-desc">How protected are you against sudden emergency financial events?</p>
                                <div class="form-group" style="margin-bottom:1.2rem;">
                                    <label for="snap-emergency" style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Liquid Emergency Fund</label>
                                    <select id="snap-emergency" class="form-select-dark">
                                        <option value="under1">Less than 1 month</option>
                                        <option value="1-3">1 – 3 months</option>
                                        <option value="3-6" selected>3 – 6 months</option>
                                        <option value="6-12">6 – 12 months</option>
                                        <option value="over12">More than 12 months</option>
                                    </select>
                                </div>
                                <div class="form-group" style="margin-bottom:1rem;">
                                    <label style="color:#94a3b8; font-size:0.9rem; font-weight:600; margin-bottom:0.6rem; display:block;">Active Insurance Policies</label>
                                    <div class="checkbox-options-grid">
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="health" checked> Health Policy</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="life" checked> Term Life Policy</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="auto"> Auto Policy</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="home"> Home Policy</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 6: Investments -->
                            <div id="snap-step-6" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading">Investment Portfolio</h3>
                                <p class="snap-step-desc">What assets do you hold for long-term compound growth?</p>
                                <div class="checkbox-options-grid" style="margin-bottom:1.5rem;">
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="savings" checked> High-Yield Savings</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="stocks"> Index Funds / Stocks</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="mf"> Mutual Funds</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="retirement"> Retirement Account</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="property"> Real Estate</label>
                                </div>
                            </div>

                            <!-- Controls -->
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:1.75rem;">
                                <button type="button" id="snap-back-btn" class="btn btn-outline-hero" style="display:none; padding:0.65rem 1.4rem;">← Back</button>
                                <button type="button" id="snap-next-btn" class="btn btn-gradient-blue btn-lg" style="margin-left:auto;">Continue →</button>
                                <button type="button" id="snap-submit-btn" class="btn btn-emerald btn-lg" style="display:none; margin-left:auto;">Calculate Position ⚡</button>
                            </div>
                        </form>
                    </div>

                    <!-- Single Integrated 3D Globe Visual -->
                    <div class="globe-visual-container">
                        <div class="globe-3d-wrapper">
                            <svg viewBox="0 0 200 200" class="globe-svg">
                                <defs>
                                    <radialGradient id="globeGlow3" cx="50%" cy="50%" r="50%">
                                        <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.4" />
                                        <stop offset="70%" stop-color="#0284c7" stop-opacity="0.15" />
                                        <stop offset="100%" stop-color="#0b132b" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                                <circle cx="100" cy="100" r="92" fill="url(#globeGlow3)" />
                                <circle cx="100" cy="100" r="75" fill="none" stroke="#38bdf8" stroke-width="1.2" stroke-dasharray="4,4" />
                                <circle cx="100" cy="100" r="65" fill="#0f172a" stroke="#0284c7" stroke-width="1.8" />
                                <ellipse cx="100" cy="100" rx="65" ry="25" fill="none" stroke="#38bdf8" stroke-width="1" opacity="0.6" />
                                <ellipse cx="100" cy="100" rx="65" ry="48" fill="none" stroke="#38bdf8" stroke-width="1" opacity="0.6" />
                                <ellipse cx="100" cy="100" rx="25" ry="65" fill="none" stroke="#38bdf8" stroke-width="1" opacity="0.6" />
                                <path d="M 65 85 Q 85 65 110 80 T 145 95 T 130 130 T 90 120 Z" fill="#0284c7" opacity="0.4" />
                                <circle cx="115" cy="85" r="4.5" fill="#34d399" class="node-glow" />
                                <circle cx="85" cy="110" r="4" fill="#38bdf8" class="node-glow" />
                            </svg>

                            <div class="floating-badge badge-top-right">
                                <span class="badge-num">Global Context</span>
                                <span class="badge-lbl">Demographic Benchmarks</span>
                            </div>
                            <div class="floating-badge badge-bot-right">
                                <span class="badge-num">100% Private</span>
                                <span class="badge-lbl">Browser Calculated</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
