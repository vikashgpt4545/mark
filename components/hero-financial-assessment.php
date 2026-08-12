<?php
/**
 * FinWise - Primary Fintech Hero Component
 * Matches reference design: Left marketing column + Right step-form card with globe
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}

$countries = finwise_get_global_country_configs();
?>
<section class="hero-section">
    <div class="container container-wide">
        <div class="hero-grid">

            <!-- ============================================================
                 LEFT COLUMN: Marketing Copy, Trust Badges, Social Proof
                 ============================================================ -->
            <div class="hero-left-col">

                <!-- Top Badge Pill -->
                <div class="hero-badge">
                    <span class="pulse-dot"></span>
                    Interactive Financial Intelligence Platform
                </div>

                <!-- Main H1 -->
                <h1 class="hero-title">
                    See Where You Stand<br>
                    <span class="gradient-text">Among 8+ Billion People</span><br>
                    Worldwide
                </h1>

                <!-- Supporting Paragraph -->
                <p class="hero-subtext">
                    Get your personalized financial position, compare with people worldwide, and discover your next best financial moves.
                </p>

                <!-- 4-Item Horizontal Trust Row -->
                <div class="hero-trust-row">
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">🔒</div>
                        <div>
                            <div class="hero-trust-label">100% Free</div>
                            <div class="hero-trust-sub">No Sign Up</div>
                        </div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">📊</div>
                        <div>
                            <div class="hero-trust-label">Personalized</div>
                            <div class="hero-trust-sub">Instant Results</div>
                        </div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">🌐</div>
                        <div>
                            <div class="hero-trust-label">Global Comparison</div>
                            <div class="hero-trust-sub">8+ Billion People</div>
                        </div>
                    </div>
                    <div class="hero-trust-item">
                        <div class="hero-trust-icon">🛡️</div>
                        <div>
                            <div class="hero-trust-label">Bank-level</div>
                            <div class="hero-trust-sub">Security</div>
                        </div>
                    </div>
                </div>

                <!-- Social Proof Row -->
                <div class="hero-social-proof">
                    <div class="hero-avatars">
                        <div class="hero-avatar" style="background:linear-gradient(135deg,#f97316,#ef4444);">A</div>
                        <div class="hero-avatar" style="background:linear-gradient(135deg,#8b5cf6,#6d28d9);">B</div>
                        <div class="hero-avatar" style="background:linear-gradient(135deg,#10b981,#059669);">C</div>
                        <div class="hero-avatar" style="background:linear-gradient(135deg,#0284c7,#0369a1);">D</div>
                        <div class="hero-avatar" style="background:linear-gradient(135deg,#f59e0b,#d97706);">E</div>
                    </div>
                    <p class="hero-social-text">Join <strong style="color:#38bdf8;">2M+</strong> people already improving their financial future</p>
                </div>
            </div>

            <!-- ============================================================
                 RIGHT COLUMN: Step-by-Step Snapshot Card
                 ============================================================ -->
            <div id="hero-snapshot-widget" class="hero-snapshot-card">

                <!-- Card Top Bar: Step indicator + Brand -->
                <div class="snap-topbar">
                    <div class="snap-step-label">
                        <span class="snap-step-current" id="snap-label-current">Step 1 of 6</span>
                        <div class="snap-step-nums">
                            <span id="snap-num-2" class="snap-num">2</span>
                            <span id="snap-num-3" class="snap-num">3</span>
                            <span id="snap-num-4" class="snap-num">4</span>
                            <span id="snap-num-5" class="snap-num">5</span>
                            <span id="snap-num-6" class="snap-num">6</span>
                        </div>
                    </div>
                    <span class="snap-brand-label">FinWise Snapshot</span>
                </div>

                <!-- Progress Bar -->
                <div class="snap-progress-track">
                    <div class="snap-progress-fill" id="snap-progress-bar" style="width:16.66%"></div>
                </div>

                <!-- Card Body: Form Left + Globe Right -->
                <div class="snap-body-grid">

                    <!-- Form Area -->
                    <div class="snap-form-area">
                        <form id="hero-snapshot-form">

                            <!-- Step 1: Location -->
                            <div id="snap-step-1" class="snap-step">
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">01.</span> Where are you located?</h3>
                                <p class="snap-step-desc">Select your country to load local currency and regional financial benchmarks.</p>
                                <div class="snap-form-group">
                                    <label class="snap-label">Select Country</label>
                                    <select id="snap-country" class="form-select-dark">
                                        <?php foreach ($countries as $code => $c): ?>
                                            <option value="<?php echo $code; ?>" <?php echo $code === 'IN' ? 'selected' : ''; ?>>
                                                <?php echo $c['flag'] . ' ' . $c['name'] . ' (' . $c['symbol'] . ' ' . $c['currency'] . ')'; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Step 2: Age -->
                            <div id="snap-step-2" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">02.</span> What is your age group?</h3>
                                <p class="snap-step-desc">Age helps contextualize wealth accumulation against demographic benchmark targets.</p>
                                <div class="snap-form-group">
                                    <label class="snap-label">Age Range</label>
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
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">03.</span> Gross Monthly Income</h3>
                                <p class="snap-step-desc">Select your estimated household earnings bracket in local currency.</p>
                                <div class="snap-form-group">
                                    <label class="snap-label">Monthly Income</label>
                                    <select id="snap-income" class="form-select-dark"></select>
                                </div>
                            </div>

                            <!-- Step 4: Savings & Debt -->
                            <div id="snap-step-4" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">04.</span> Savings & Debt Profile</h3>
                                <p class="snap-step-desc">Estimate your monthly net savings percentage and total debt liabilities.</p>
                                <div class="snap-form-group">
                                    <label class="snap-label">Monthly Net Savings (%)</label>
                                    <select id="snap-savings" class="form-select-dark">
                                        <option value="under5">Under 5% of income</option>
                                        <option value="5-10">5% – 10% of income</option>
                                        <option value="10-20" selected>10% – 20% of income</option>
                                        <option value="20-30">20% – 30% of income</option>
                                        <option value="30plus">Over 30% of income</option>
                                    </select>
                                </div>
                                <div class="snap-form-group" style="margin-top:1rem;">
                                    <label class="snap-label">Total Debt Liabilities</label>
                                    <select id="snap-debt" class="form-select-dark"></select>
                                </div>
                            </div>

                            <!-- Step 5: Protection -->
                            <div id="snap-step-5" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">05.</span> Risk Protection Coverage</h3>
                                <p class="snap-step-desc">How protected are you against sudden emergency financial events?</p>
                                <div class="snap-form-group">
                                    <label class="snap-label">Liquid Emergency Fund</label>
                                    <select id="snap-emergency" class="form-select-dark">
                                        <option value="under1">Less than 1 month</option>
                                        <option value="1-3">1 – 3 months</option>
                                        <option value="3-6" selected>3 – 6 months</option>
                                        <option value="6-12">6 – 12 months</option>
                                        <option value="over12">More than 12 months</option>
                                    </select>
                                </div>
                                <div class="snap-form-group" style="margin-top:1rem;">
                                    <label class="snap-label">Active Insurance Policies</label>
                                    <div class="snap-checkbox-grid">
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="health" checked> Health</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="life" checked> Term Life</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="auto"> Auto</label>
                                        <label class="custom-checkbox-dark"><input type="checkbox" name="snap-ins" value="home"> Home</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 6: Investments -->
                            <div id="snap-step-6" class="snap-step" style="display:none;">
                                <h3 class="snap-step-heading"><span class="snap-step-num-prefix">06.</span> Investment Portfolio</h3>
                                <p class="snap-step-desc">What assets do you hold for long-term compound growth?</p>
                                <div class="snap-checkbox-grid" style="margin-top:1rem;">
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="savings" checked> High-Yield Savings</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="stocks"> Index Funds</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="mf"> Mutual Funds</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="retirement"> Retirement</label>
                                    <label class="custom-checkbox-dark"><input type="checkbox" name="snap-inv" value="property"> Real Estate</label>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="snap-nav-row">
                                <button type="button" id="snap-back-btn" class="snap-btn-back" style="display:none;">← Back</button>
                                <button type="button" id="snap-next-btn" class="snap-btn-continue">Continue →</button>
                                <button type="button" id="snap-submit-btn" class="snap-btn-submit" style="display:none;">Calculate Position ⚡</button>
                            </div>

                        </form>
                    </div>

                    <!-- Globe Visual with Stat Badges -->
                    <div class="snap-globe-area">
                        <div class="snap-globe-wrapper">
                            <svg viewBox="0 0 200 200" class="snap-globe-svg">
                                <defs>
                                    <radialGradient id="gGlow" cx="50%" cy="50%" r="50%">
                                        <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.5"/>
                                        <stop offset="60%" stop-color="#0284c7" stop-opacity="0.2"/>
                                        <stop offset="100%" stop-color="#060d1a" stop-opacity="0"/>
                                    </radialGradient>
                                </defs>
                                <!-- Outer glow -->
                                <circle cx="100" cy="100" r="95" fill="url(#gGlow)"/>
                                <!-- Main sphere -->
                                <circle cx="100" cy="100" r="72" fill="#0f1e3a" stroke="#1d4ed8" stroke-width="1.5"/>
                                <!-- Latitude lines -->
                                <ellipse cx="100" cy="100" rx="72" ry="24" fill="none" stroke="#38bdf8" stroke-width="0.8" opacity="0.5"/>
                                <ellipse cx="100" cy="100" rx="72" ry="50" fill="none" stroke="#38bdf8" stroke-width="0.8" opacity="0.4"/>
                                <!-- Longitude lines -->
                                <ellipse cx="100" cy="100" rx="24" ry="72" fill="none" stroke="#38bdf8" stroke-width="0.8" opacity="0.5"/>
                                <ellipse cx="100" cy="100" rx="50" ry="72" fill="none" stroke="#38bdf8" stroke-width="0.8" opacity="0.4"/>
                                <!-- Continent shape -->
                                <path d="M70 80 Q88 62 112 78 T148 92 T132 128 T92 118 Z" fill="#1d4ed8" opacity="0.5"/>
                                <path d="M55 105 Q65 95 78 108 T72 125 T58 118 Z" fill="#1d4ed8" opacity="0.4"/>
                                <!-- Glowing nodes -->
                                <circle cx="112" cy="82" r="4" fill="#34d399" opacity="0.9"/>
                                <circle cx="112" cy="82" r="8" fill="#34d399" opacity="0.2"/>
                                <circle cx="82" cy="112" r="3.5" fill="#38bdf8" opacity="0.9"/>
                                <circle cx="82" cy="112" r="7" fill="#38bdf8" opacity="0.2"/>
                                <circle cx="128" cy="105" r="3" fill="#f59e0b" opacity="0.9"/>
                                <!-- Connection lines -->
                                <line x1="112" y1="82" x2="82" y2="112" stroke="#38bdf8" stroke-width="0.8" stroke-dasharray="3,3" opacity="0.6"/>
                                <line x1="112" y1="82" x2="128" y2="105" stroke="#34d399" stroke-width="0.8" stroke-dasharray="3,3" opacity="0.6"/>
                            </svg>

                            <!-- Stat Badges -->
                            <div class="snap-globe-badge" style="top:-8px; right:-18px;">
                                <span class="snap-badge-num">8.2 Billion</span>
                                <span class="snap-badge-lbl">People Analyzed</span>
                            </div>
                            <div class="snap-globe-badge" style="bottom:20px; left:-22px;">
                                <span class="snap-badge-num">195+</span>
                                <span class="snap-badge-lbl">Countries</span>
                            </div>
                            <div class="snap-globe-badge" style="bottom:-8px; right:-14px;">
                                <span class="snap-badge-num">24/7</span>
                                <span class="snap-badge-lbl">Real-time Data</span>
                            </div>
                        </div>
                    </div>

                </div><!-- /snap-body-grid -->
            </div><!-- /hero-snapshot-card -->

        </div><!-- /hero-grid -->
    </div><!-- /container -->
</section>
