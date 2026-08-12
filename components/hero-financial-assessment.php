<?php
/**
 * FinWise - Modular Global Hero Financial Assessment Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}

$countries = finwise_get_global_country_configs();
?>
<section class="hero-section">
    <div class="container container-wide">
        <div class="hero-grid">
            <!-- Left Side (45% Width): Brand & Global Value Proposition -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="pulse-dot"></span> Interactive Global Financial Intelligence
                </div>
                <h1 class="hero-title">
                    See Where You Stand <br>
                    <span class="gradient-text">Among 8+ Billion People</span> <br>
                    Worldwide
                </h1>
                <p class="hero-subtext">
                    Get your personalized financial position, compare key financial indicators with relevant country & demographic benchmarks, and discover the priority areas that matter most for your future.
                </p>

                <!-- Lightweight SVG World Connection Data Network Visual -->
                <div class="global-network-visual">
                    <svg viewBox="0 0 500 180" class="world-svg" aria-hidden="true">
                        <defs>
                            <linearGradient id="arcGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#0284c7" stop-opacity="0.2" />
                                <stop offset="50%" stop-color="#38bdf8" stop-opacity="0.9" />
                                <stop offset="100%" stop-color="#10b981" stop-opacity="0.2" />
                            </linearGradient>
                        </defs>
                        <!-- Continents Outline Mock SVG Arc Routes -->
                        <path d="M 60 120 Q 150 40 240 100 T 420 80" fill="none" stroke="url(#arcGrad)" stroke-width="2" stroke-dasharray="6,4" class="animated-arc" />
                        <path d="M 110 140 Q 280 20 400 130" fill="none" stroke="url(#arcGrad)" stroke-width="1.5" />
                        <!-- Glowing Regional Financial Data Nodes -->
                        <g class="node-group">
                            <circle cx="80" cy="110" r="5" fill="#38bdf8" class="node-glow"></circle>
                            <text x="80" y="130" fill="#94a3b8" font-size="10" text-anchor="middle">Americas</text>
                            
                            <circle cx="230" cy="70" r="5" fill="#38bdf8" class="node-glow"></circle>
                            <text x="230" y="52" fill="#94a3b8" font-size="10" text-anchor="middle">Europe</text>
                            
                            <circle cx="340" cy="115" r="6" fill="#10b981" class="node-glow"></circle>
                            <text x="340" y="135" fill="#34d399" font-size="10" font-weight="700" text-anchor="middle">Asia-Pacific</text>
                            
                            <circle cx="430" cy="85" r="4" fill="#38bdf8" class="node-glow"></circle>
                        </g>
                    </svg>
                </div>

                <!-- Trust / Value Indicators -->
                <div class="trust-indicators-grid">
                    <div class="trust-item"><span>✓</span> Free to use</div>
                    <div class="trust-item"><span>✓</span> Personalized results</div>
                    <div class="trust-item"><span>✓</span> Global comparison</div>
                    <div class="trust-item"><span>✓</span> No account required</div>
                    <div class="trust-item"><span>✓</span> 100% Privacy-focused</div>
                </div>

                <div class="hero-actions">
                    <a href="#hero-snapshot-widget" class="btn btn-emerald">
                        <span>⚡</span> Check Your Position
                    </a>
                    <a href="#interactive-tools-suite" class="btn btn-outline-hero">
                        <span>🧮</span> Explore Financial Tools
                    </a>
                </div>
            </div>

            <!-- Right Side (55% Width): Large Premium Dashboard Card -->
            <div id="hero-snapshot-widget" class="hero-snapshot-card">
                <div class="snap-card-header">
                    <h3>Your Financial Snapshot</h3>
                    <span id="snap-step-text" class="step-badge">Step 1 of 6</span>
                </div>
                <div class="progress-track">
                    <div id="snap-progress-bar" class="progress-fill" style="width: 16.6%;"></div>
                </div>

                <form id="hero-snapshot-form">
                    <!-- Step 1: Location -->
                    <div id="snap-step-1" class="snap-step">
                        <h4 class="snap-step-title">Where are you located?</h4>
                        <p class="snap-step-subtitle">Select your country to load the appropriate currency, benchmark data and financial context.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label for="snap-country">Country & Local Currency</label>
                            <select id="snap-country" class="form-select-lg">
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
                        <h4 class="snap-step-title">About You (Age Group)</h4>
                        <p class="snap-step-subtitle">Age helps contextualize wealth accumulation and savings targets against age benchmarks.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label for="snap-age">Select Age Bracket</label>
                            <select id="snap-age" class="form-select-lg">
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
                        <h4 class="snap-step-title">Monthly Gross Income</h4>
                        <p class="snap-step-subtitle">Select your estimated monthly household earnings range.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label for="snap-income">Gross Monthly Income</label>
                            <select id="snap-income" class="form-select-lg"></select>
                        </div>
                    </div>

                    <!-- Step 4: Savings & Debt -->
                    <div id="snap-step-4" class="snap-step" style="display:none;">
                        <h4 class="snap-step-title">Savings & Debt Profile</h4>
                        <p class="snap-step-subtitle">Estimate your monthly savings rate and total liabilities balance.</p>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label for="snap-savings">Monthly Net Income Saved (%)</label>
                            <select id="snap-savings" class="form-select-lg">
                                <option value="under5">Under 5% of income</option>
                                <option value="5-10">5% – 10% of income</option>
                                <option value="10-20" selected>10% – 20% of income</option>
                                <option value="20-30">20% – 30% of income</option>
                                <option value="30plus">Over 30% of income</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label for="snap-debt">Total Outstanding Liabilities</label>
                            <select id="snap-debt" class="form-select-lg"></select>
                        </div>
                    </div>

                    <!-- Step 5: Protection -->
                    <div id="snap-step-5" class="snap-step" style="display:none;">
                        <h4 class="snap-step-title">Financial Risk Protection</h4>
                        <p class="snap-step-subtitle">How protected are you and your family against emergency events?</p>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label for="snap-emergency">Liquid Cash Emergency Fund</label>
                            <select id="snap-emergency" class="form-select-lg">
                                <option value="under1">Less than 1 month expenses</option>
                                <option value="1-3">1 – 3 months expenses</option>
                                <option value="3-6" selected>3 – 6 months expenses</option>
                                <option value="6-12">6 – 12 months expenses</option>
                                <option value="over12">More than 12 months</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label>Active Insurance Policies</label>
                            <div class="checkbox-options-grid">
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="health" checked> Health Policy</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="life" checked> Term Life Policy</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="auto"> Auto Cover</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="home"> Home Cover</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Investments -->
                    <div id="snap-step-6" class="snap-step" style="display:none;">
                        <h4 class="snap-step-title">Investment Portfolio</h4>
                        <p class="snap-step-subtitle">What assets do you currently hold for long-term compound growth?</p>
                        <div class="checkbox-options-grid" style="margin-bottom:1.5rem;">
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="savings" checked> High-Yield Savings</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="stocks"> Index Funds / Equities</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="mf"> Mutual Funds</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="retirement"> Retirement Account</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="property"> Real Estate</label>
                        </div>
                    </div>

                    <!-- Form Controls -->
                    <div class="form-nav-actions">
                        <button type="button" id="snap-back-btn" class="btn btn-outline" style="display:none; font-size:0.85rem;">← Back</button>
                        <button type="button" id="snap-next-btn" class="btn btn-primary" style="margin-left:auto; font-size:0.85rem;">Continue →</button>
                        <button type="button" id="snap-submit-btn" class="btn btn-emerald" style="display:none; margin-left:auto; font-size:0.85rem;">Calculate Financial Position ⚡</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
