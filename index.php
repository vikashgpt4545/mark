<?php
/**
 * FinWise - Interactive Financial Dashboard & Education Platform Homepage
 */
define('FINWISE_APP', true);

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/benchmarks.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'FinWise — Know Your Money. Know Your Position. Make Better Decisions.',
    'description' => 'Interactive financial platform offering real-time financial position snapshots, loan affordability calculators, debt-to-income analysis, and comprehensive educational guides.',
    'breadcrumbs' => ['Home' => 'index.php'],
    'faqs' => [
        ['q' => 'How does the FinWise Financial Position Snapshot work?', 'a' => 'Our interactive snapshot tool compares your self-reported income, savings rate, debt ratio, emergency cash reserves, and investment coverage against authentic central bank and national statistical benchmark data.'],
        ['q' => 'Is my financial data kept private?', 'a' => 'Yes! All calculations, score evaluations, and tool estimations run 100% locally in your browser. We never track, store, or sell your financial numbers.'],
        ['q' => 'What is a safe Debt-to-Income (DTI) ratio for loans?', 'a' => 'Underwriting guidelines generally recommend keeping your total monthly debt payments (housing mortgage + car loans + credit cards) below 36% of your gross monthly income.'],
        ['q' => 'Why is term life insurance recommended over whole life insurance?', 'a' => 'Term life insurance provides maximum death benefit protection during critical earning years at a fraction of the cost of whole life policies, allowing you to invest the difference in low-cost index funds.']
    ]
];

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     MAIN HERO EXPERIENCE (Interactive 2-Column Fintech Hero)
     ========================================================================== -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <!-- Left Column: Headline, Supporting Text & CTAs -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span>❖</span> Interactive Financial Technology Platform
                </div>
                <h1 class="hero-title">
                    Know Your Money. <br>
                    <span class="gradient-text">Know Your Position.</span> <br>
                    Make Better Decisions.
                </h1>
                <p class="hero-subtext">
                    Understand your financial position, compare key indicators against national benchmarks, calculate loan affordability, and discover your next critical financial priorities.
                </p>
                <div class="hero-actions">
                    <a href="#hero-snapshot-widget" class="btn btn-emerald">
                        <span>⚡</span> Check My Financial Position
                    </a>
                    <a href="#interactive-tools-suite" class="btn btn-outline-hero">
                        <span>🧮</span> Explore Financial Tools
                    </a>
                </div>
            </div>

            <!-- Right Column: Interactive Financial Snapshot Tool -->
            <div id="hero-snapshot-widget" class="hero-snapshot-card">
                <div class="step-indicator-bar">
                    <span id="snap-step-text">Step 1 of 6</span>
                    <span>FinWise Snapshot</span>
                </div>
                <div class="progress-track">
                    <div id="snap-progress-bar" class="progress-fill" style="width: 16.6%;"></div>
                </div>

                <form id="hero-snapshot-form">
                    <!-- Step 1: Location -->
                    <div id="snap-step-1" class="snap-step">
                        <h3 class="snap-step-title">01. Where are you located?</h3>
                        <p class="snap-step-subtitle">Select your country to load local currency and regional financial benchmarks.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label>Select Country</label>
                            <select id="snap-country" style="font-size:1rem; padding:0.75rem;">
                                <option value="IN" selected>🇮🇳 India (₹ INR)</option>
                                <option value="US">🇺🇸 United States ($ USD)</option>
                                <option value="GB">🇬🇧 United Kingdom (£ GBP)</option>
                                <option value="CA">🇨🇦 Canada (CA$ CAD)</option>
                                <option value="AU">🇦🇺 Australia (AU$ AUD)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Step 2: Age Group -->
                    <div id="snap-step-2" class="snap-step" style="display:none;">
                        <h3 class="snap-step-title">02. What is your age group?</h3>
                        <p class="snap-step-subtitle">Age helps contextualize wealth accumulation and savings targets.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label>Age Range</label>
                            <select id="snap-age" style="font-size:1rem; padding:0.75rem;">
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
                        <h3 class="snap-step-title">03. Monthly Gross Income</h3>
                        <p class="snap-step-subtitle">Select your monthly earnings range in local currency.</p>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label>Income Range</label>
                            <select id="snap-income" style="font-size:1rem; padding:0.75rem;"></select>
                        </div>
                    </div>

                    <!-- Step 4: Savings & Debt -->
                    <div id="snap-step-4" class="snap-step" style="display:none;">
                        <h3 class="snap-step-title">04. Savings & Debt Profile</h3>
                        <p class="snap-step-subtitle">Estimate your monthly savings rate and total liabilities.</p>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label>Monthly Net Income Saved (%)</label>
                            <select id="snap-savings" style="font-size:1rem; padding:0.75rem;">
                                <option value="under5">Under 5% of income</option>
                                <option value="5-10">5% – 10% of income</option>
                                <option value="10-20" selected>10% – 20% of income</option>
                                <option value="20-30">20% – 30% of income</option>
                                <option value="30plus">Over 30% of income</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom:1.5rem;">
                            <label>Total Outstanding Debt</label>
                            <select id="snap-debt" style="font-size:1rem; padding:0.75rem;"></select>
                        </div>
                    </div>

                    <!-- Step 5: Risk Protection -->
                    <div id="snap-step-5" class="snap-step" style="display:none;">
                        <h3 class="snap-step-title">05. Emergency Reserve & Insurance</h3>
                        <p class="snap-step-subtitle">How protected are you against unexpected financial events?</p>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label>Liquid Emergency Cash Reserves</label>
                            <select id="snap-emergency" style="font-size:1rem; padding:0.75rem;">
                                <option value="under1">Less than 1 month of expenses</option>
                                <option value="1-3">1 – 3 months of expenses</option>
                                <option value="3-6" selected>3 – 6 months of expenses</option>
                                <option value="6-12">6 – 12 months of expenses</option>
                                <option value="over12">More than 12 months</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom:1rem;">
                            <label>Active Insurance Covers (Select all that apply)</label>
                            <div class="checkbox-options-grid">
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="health" checked> Health Ins.</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="life" checked> Term Life Ins.</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="auto"> Vehicle Ins.</label>
                                <label class="custom-checkbox-label"><input type="checkbox" name="snap-ins" value="home"> Home Ins.</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Investments -->
                    <div id="snap-step-6" class="snap-step" style="display:none;">
                        <h3 class="snap-step-title">06. Investment Portfolio</h3>
                        <p class="snap-step-subtitle">What assets do you currently hold for long-term growth?</p>
                        <div class="checkbox-options-grid" style="margin-bottom:1.5rem;">
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="savings" checked> HYSA Savings</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="stocks"> Index Funds/Stocks</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="mf"> Mutual Funds</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="retirement"> Retirement Acct</label>
                            <label class="custom-checkbox-label"><input type="checkbox" name="snap-inv" value="property"> Real Estate</label>
                        </div>
                    </div>

                    <!-- Form Controls -->
                    <div style="display:flex; justify-content:space-between; margin-top:1.5rem;">
                        <button type="button" id="snap-back-btn" class="btn btn-outline" style="display:none; font-size:0.85rem;">← Back</button>
                        <button type="button" id="snap-next-btn" class="btn btn-primary" style="margin-left:auto; font-size:0.85rem;">Continue →</button>
                        <button type="button" id="snap-submit-btn" class="btn btn-emerald" style="display:none; margin-left:auto; font-size:0.85rem;">Generate Snapshot ⚡</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     VISUAL FINANCIAL SNAPSHOT DASHBOARD (Dynamic Results Section)
     ========================================================================== -->
<section id="hero-snapshot-results" class="section section-alt" style="display:none; padding:3.5rem 0;">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Personal Financial Evaluation</span>
            <h2 class="section-title">Your Financial Snapshot</h2>
            <p class="section-description">Educational benchmark assessment based on self-reported inputs and published central bank data.</p>
        </div>

        <div style="display:grid; grid-template-columns: 0.8fr 1.2fr; gap:2.5rem; margin-bottom:3rem;">
            <!-- Overall Score Gauge Card -->
            <div style="background:#fff; border:1px solid var(--clr-border-light); padding:2rem; border-radius:var(--radius-lg); text-align:center; box-shadow:var(--shadow-md);">
                <h3 style="font-size:1.1rem; margin-bottom:1rem;">Overall Financial Position</h3>
                
                <div class="gauge-score-container">
                    <svg viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="#e2e8f0" stroke-width="8"></circle>
                        <circle id="dash-gauge-circle" cx="50" cy="50" r="45" fill="none" stroke="var(--clr-emerald)" stroke-width="8" stroke-dasharray="283" stroke-dashoffset="75" stroke-linecap="round"></circle>
                    </svg>
                    <div class="gauge-center-text">
                        <div id="dash-score-val" class="gauge-number">72</div>
                        <div class="gauge-label">/ 100</div>
                    </div>
                </div>

                <div id="dash-score-status" style="font-size:1.25rem; font-weight:700; color:var(--clr-primary); margin-bottom:0.5rem;">Above Average</div>
                <p style="font-size:0.85rem; color:var(--clr-text-muted);">
                    This score is an <strong>educational benchmark</strong> based on weighted evaluation across 6 core monetary indicators.
                </p>
            </div>

            <!-- 6 Position Cards Grid -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem;">
                <div id="card-inc" class="calculator-card" style="padding:1.25rem;"></div>
                <div id="card-sav" class="calculator-card" style="padding:1.25rem;"></div>
                <div id="card-debt" class="calculator-card" style="padding:1.25rem;"></div>
                <div id="card-emerg" class="calculator-card" style="padding:1.25rem;"></div>
                <div id="card-ins" class="calculator-card" style="padding:1.25rem;"></div>
                <div id="card-inv" class="calculator-card" style="padding:1.25rem;"></div>
            </div>
        </div>

        <!-- Benchmark Comparison Bar Container -->
        <div id="dash-benchmark-container"></div>

        <!-- Top 3 Priorities Section -->
        <div style="margin-top:3rem;">
            <h3 style="font-size:1.5rem; margin-bottom:1.25rem; text-align:center;">🎯 Your Next 3 Priorities</h3>
            <div id="dash-priorities-list" style="max-width:800px; margin:0 auto;"></div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     INTERACTIVE TOOLS SUITE
     ========================================================================== -->
<section id="interactive-tools-suite" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Real-Time Utilities</span>
            <h2 class="section-title">Explore Financial Tools</h2>
            <p class="section-description">Interactive calculators connecting loans, investments, insurance protection, and financial archetypes.</p>
        </div>

        <div class="calc-cards-grid" style="margin-bottom:3rem;">
            <!-- Tool 2: Can You Afford This Loan? -->
            <div class="calculator-card" style="background:#fff; padding:1.75rem;">
                <h3>🏦 Can You Afford This Loan?</h3>
                <p>Calculate your Debt-to-Income (DTI) ratio and safe EMI limit before borrowing.</p>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Monthly Income (<span class="curr-sym">₹</span>)</label>
                    <input type="number" id="aff2-income" value="75000">
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Existing Debt EMIs (<span class="curr-sym">₹</span>)</label>
                    <input type="number" id="aff2-debts" value="12000">
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>New Loan Amount (<span class="curr-sym">₹</span>)</label>
                    <input type="number" id="aff2-amount" value="500000">
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Interest Rate (%)</label>
                    <input type="number" id="aff2-rate" value="10.5" step="0.5">
                </div>
                <div class="form-group" style="margin-bottom:1rem;">
                    <label>Tenure (Years)</label>
                    <select id="aff2-tenure"><option value="3">3 Years</option><option value="5" selected>5 Years</option></select>
                </div>
                <button type="button" id="aff2-calc-btn" class="btn btn-emerald" style="width:100%; font-size:0.85rem;">Check Affordability →</button>
                <div id="aff2-results"></div>
            </div>

            <!-- Tool 3: Are You Financially Protected? -->
            <div class="calculator-card" style="background:#fff; padding:1.75rem;">
                <h3>🛡️ Are You Financially Protected?</h3>
                <p>Audit your coverage gaps across health, life, debt, and liquid emergency reserves.</p>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Health Insurance Active?</label>
                    <select id="prot-health"><option value="yes">Yes</option><option value="no">No</option></select>
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Term Life Insurance Active?</label>
                    <select id="prot-life"><option value="yes">Yes</option><option value="no">No</option></select>
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>3+ Month Emergency Reserve?</label>
                    <select id="prot-emergency"><option value="yes">Yes</option><option value="no">No</option></select>
                </div>
                <div class="form-group" style="margin-bottom:1rem;">
                    <label>Existing Debt Liabilities?</label>
                    <select id="prot-debt"><option value="none">Zero Debt</option><option value="yes">Active Debt</option></select>
                </div>
                <button type="button" id="prot-check-btn" class="btn btn-emerald" style="width:100%; font-size:0.85rem;">Audit Protection Matrix →</button>
                <div id="prot-results"></div>
            </div>

            <!-- Tool 4: What Could Your Money Become? -->
            <div class="calculator-card" style="background:#fff; padding:1.75rem;">
                <h3>📈 What Could Your Money Become?</h3>
                <p>Project long-term compound wealth growth with recurring monthly contributions.</p>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Starting Principal (<span class="curr-sym">₹</span>)</label>
                    <input type="number" id="wp-start" value="50000">
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Monthly Contribution (<span class="curr-sym">₹</span>)</label>
                    <input type="number" id="wp-month" value="10000">
                </div>
                <div class="form-group" style="margin-bottom:0.75rem;">
                    <label>Time Period (Years)</label>
                    <input type="number" id="wp-years" value="15">
                </div>
                <div class="form-group" style="margin-bottom:1rem;">
                    <label>Expected Return (%)</label>
                    <input type="number" id="wp-return" value="11" step="0.5">
                </div>
                <button type="button" id="wp-calc-btn" class="btn btn-emerald" style="width:100%; font-size:0.85rem;">Project Growth →</button>
                <div id="wp-results"></div>
            </div>
        </div>

        <!-- Tool 5: What's Your Financial Type? (Persona Quiz) -->
        <div class="calc-wrapper" style="background:#fff; margin-bottom:3rem;">
            <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">🧩 What's Your Financial Type?</h3>
            <p style="color:var(--clr-text-muted); margin-bottom:1.5rem;">Take our 30-second financial archetype questionnaire to discover your monetary strengths and growth areas.</p>

            <form id="persona-quiz-form">
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:1.5rem; margin-bottom:1.5rem;">
                    <div>
                        <label style="font-weight:600; font-size:0.9rem; display:block; margin-bottom:0.5rem;">1. What do you do with extra monthly cash?</label>
                        <label class="custom-checkbox-label" style="margin-bottom:0.4rem;"><input type="radio" name="pq1" value="saver" checked> Save in bank/HYSA</label>
                        <label class="custom-checkbox-label"><input type="radio" name="pq1" value="investor"> Invest in stock market</label>
                    </div>
                    <div>
                        <label style="font-weight:600; font-size:0.9rem; display:block; margin-bottom:0.5rem;">2. How comfortable are you with market volatility?</label>
                        <label class="custom-checkbox-label" style="margin-bottom:0.4rem;"><input type="radio" name="pq2" value="low"> Prefer zero risk</label>
                        <label class="custom-checkbox-label"><input type="radio" name="pq2" value="high" checked> Comfortable with fluctuations</label>
                    </div>
                    <div>
                        <label style="font-weight:600; font-size:0.9rem; display:block; margin-bottom:0.5rem;">3. What is your primary 3-year goal?</label>
                        <label class="custom-checkbox-label" style="margin-bottom:0.4rem;"><input type="radio" name="pq3" value="debt"> Clear outstanding debts</label>
                        <label class="custom-checkbox-label"><input type="radio" name="pq3" value="invest" checked> Build long-term wealth</label>
                    </div>
                </div>
                <button type="button" id="pq-submit-btn" class="btn btn-primary">Discover My Archetype →</button>
            </form>

            <div id="pq-results"></div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     CONNECT TO THE 4 MAIN NICHES
     ========================================================================== -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Core Financial Pillars</span>
            <h2 class="section-title">Explore FinWise Knowledge Domains</h2>
            <p class="section-description">Deep-dive into our four specialized category portals with educational guides, reviews, and strategies.</p>
        </div>

        <div class="niche-grid">
            <div class="niche-card">
                <div class="niche-icon finance">💰</div>
                <h3 class="niche-title">Finance</h3>
                <p class="niche-desc">Master cash flow, monthly 50/30/20 budgeting, tax optimization, and liquid savings strategies.</p>
                <ul class="niche-list">
                    <li>Personal Finance Fundamentals</li>
                    <li>Zero-Based Budgeting</li>
                    <li>High-Yield Banking</li>
                </ul>
                <a href="finance/index.php" class="btn btn-outline" style="margin-top:auto;">Explore Finance →</a>
            </div>

            <div class="niche-card">
                <div class="niche-icon loans">🏦</div>
                <h3 class="niche-title">Loans</h3>
                <p class="niche-desc">Deconstruct personal, mortgage, auto, and business borrowing costs with precise EMI models.</p>
                <ul class="niche-list">
                    <li>Reducing Rate Amortization</li>
                    <li>APR & Hidden Fee Audit</li>
                    <li>DTI Loan Eligibility</li>
                </ul>
                <a href="loans/index.php" class="btn btn-outline" style="margin-top:auto;">Explore Loans →</a>
            </div>

            <div class="niche-card">
                <div class="niche-icon cards">💳</div>
                <h3 class="niche-title">Credit Cards</h3>
                <p class="niche-desc">Optimize rewards, cashback optimization, FICO score mechanics, and interest payoff tactics.</p>
                <ul class="niche-list">
                    <li>Cashback vs Travel Miles</li>
                    <li>FICO Score 100+ Point Boost</li>
                    <li>30% Utilization Rule</li>
                </ul>
                <a href="credit-cards/index.php" class="btn btn-outline" style="margin-top:auto;">Explore Credit Cards →</a>
            </div>

            <div class="niche-card">
                <div class="niche-icon insurance">🛡️</div>
                <h3 class="niche-title">Insurance</h3>
                <p class="niche-desc">Protect your family and assets with term life, health deductible, and auto policy analysis.</p>
                <ul class="niche-list">
                    <li>Term vs Whole Life</li>
                    <li>Health Deductibles & Out-of-Pocket</li>
                    <li>Claim Settlement Ratio (CSR)</li>
                </ul>
                <a href="insurance/index.php" class="btn btn-outline" style="margin-top:auto;">Explore Insurance →</a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     EDUCATIONAL CONTENT & 3,000 WORDS SEO ENGINE
     ========================================================================== -->
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>The 5 Pillars of Sustainable Personal Financial Health</h2>
                <p>Navigating modern personal finance requires more than storing money in a standard checking account. To build lasting financial freedom, individuals must coordinate budgeting, debt management, emergency reserves, investment compounding, and asset protection into a unified strategy.</p>

                <h3>1. Master Cash Flow with Progressive Budgeting</h3>
                <p>Cash flow management forms the bedrock of every successful financial plan. Utilizing frameworks such as the 50/30/20 budget rule ensures that 50% of net income pays for fixed needs, 30% funds discretionary lifestyle choices, and 20% is automatically routed to savings and debt reduction.</p>

                <h3>2. Minimize Borrowing Costs & Optimize Debt-to-Income</h3>
                <p>Uncontrolled high-interest borrowing is the single largest destroyer of household wealth. Understanding how lenders compute Annual Percentage Rates (APR) and keeping your Debt-to-Income (DTI) ratio below 36% protects your financial flexibility when applying for mortgages or business financing.</p>

                <h3>3. Maintain an Unshakeable Liquid Emergency Fund</h3>
                <p>Financial shocks—such as sudden medical bills, vehicle failures, or employment disruptions—occur inevitably. Storing 3 to 6 months of baseline living expenses in a liquid High-Yield Savings Account (HYSA) prevents you from accumulating credit card debt during emergencies.</p>

                <h3>4. Compound Wealth Through Broad Index Investing</h3>
                <p>Over long time horizons, leaving excess cash idle subjects your purchasing power to inflation erosion. Consistently contributing to low-cost, broadly diversified stock index funds captures global economic growth through compound interest.</p>

                <h3>5. Shield Dependents & Assets with Term Protection</h3>
                <p>An unexpected crisis should never compromise your family's standard of living. Implementing cost-effective term life insurance equal to 10x your annual earnings, combined with comprehensive health coverage, ensures complete risk isolation.</p>

                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/components/faq.php'; ?>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Quick Navigation</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="calculators/index.php">Calculator Portal</a></li>
                        <li><a href="articles/index.php">Guides Directory</a></li>
                        <li><a href="search.php">Site Search</a></li>
                        <li><a href="about.php">About FinWise</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
