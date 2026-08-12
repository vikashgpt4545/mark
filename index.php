<?php
/**
 * FinWise - Master Homepage
 * Comprehensive ~3,000 words of structured, actionable financial content.
 */

define('FINWISE_APP', true);
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'FinWise - Smart Financial Decisions Start Here | Finance, Loans, Credit Cards & Insurance',
    'description' => 'Comprehensive financial publication & tool portal. Calculate loan EMIs, compare top credit cards, analyze insurance policies, master personal budgeting, and make informed financial decisions.',
    'breadcrumbs' => ['Home' => 'index.php'],
    'faqs' => [
        [
            'q' => 'How do I choose between taking a personal loan and using a credit card?',
            'a' => 'Personal loans typically offer lower, fixed interest rates with structured repayment periods over 1 to 5 years, making them ideal for large, lump-sum financing like debt consolidation or medical bills. Credit cards provide an open line of credit with 0% interest if paid within the grace period, making them superior for short-term daily purchases and earnable rewards.'
        ],
        [
            'q' => 'What is a good Debt-to-Income (DTI) ratio for loan approval?',
            'a' => 'Lenders generally prefer a Debt-to-Income (DTI) ratio of 36% or lower, where no more than 28% of your gross monthly income goes toward housing costs. A lower DTI signals strong borrowing capacity and increases your chances of qualifying for prime interest rates.'
        ],
        [
            'q' => 'How does maintaining a low credit utilization ratio boost my credit score?',
            'a' => 'Credit utilization accounts for 30% of your total FICO credit score. Keeping your total credit balances below 30%—and ideally below 10%—of your total revolving credit limit demonstrates responsible credit management and reduces perceived risk to lenders.'
        ],
        [
            'q' => 'What is the fundamental difference between Term and Whole Life Insurance?',
            'a' => 'Term Life Insurance covers you for a specified timeframe (e.g., 10, 20, or 30 years) with pure life protection and significantly lower premiums. Whole Life Insurance is permanent coverage that includes an equity accumulation cash-value component but comes with considerably higher annual premiums.'
        ],
        [
            'q' => 'Why is an Emergency Fund essential before making stock investments?',
            'a' => 'An emergency fund containing 3 to 6 months of essential living expenses ensures you never have to liquidate volatile equity investments at a market loss during unexpected financial hardships like job displacement or emergency healthcare costs.'
        ]
    ]
];

include __DIR__ . '/components/header.php';
?>

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-text-content">
            <div class="hero-badge">
                <span>🛡️ Independent Financial Education Platform</span>
            </div>
            <h1 class="hero-title">
                Smart Financial Decisions <span class="gradient-text">Start Here</span>
            </h1>
            <p class="hero-subtext">
                FinWise helps you demystify complex monetary products, calculate exact borrowing costs, compare credit card rewards, evaluate insurance coverage, and execute strategic wealth-building plans with total clarity.
            </p>
            <div class="hero-actions">
                <a href="#interactive-calculators" class="btn btn-emerald">
                    ⚡ Explore Financial Tools
                </a>
                <a href="#four-niches" class="btn btn-primary">
                    📊 Compare Financial Options
                </a>
                <a href="<?php echo get_root_prefix(); ?>articles/" class="btn btn-outline-hero">
                    📚 Read Financial Guides
                </a>
            </div>
        </div>

        <!-- HERO VISUAL FINANCIAL DASHBOARD -->
        <div class="hero-dashboard-widget">
            <div class="dash-header">
                <h4>FinWise Metrics Dashboard</h4>
                <span class="badge badge-emerald">Live Rate Engine</span>
            </div>

            <div class="dash-grid">
                <div class="metric-card">
                    <div class="metric-label">Prime Mortgage Rate</div>
                    <div class="metric-val cyan">6.85%</div>
                    <div style="font-size:0.75rem; color:#94a3b8; margin-top:0.2rem;">Fixed 30-Year Benchmark</div>
                </div>
                <div class="metric-card">
                    <div class="metric-label">Optimal Credit Score</div>
                    <div class="metric-val emerald">750+</div>
                    <div style="font-size:0.75rem; color:#94a3b8; margin-top:0.2rem;">Prime Tier Threshold</div>
                </div>
            </div>

            <!-- Mini EMI Calculator Visual -->
            <div class="mini-calculator-preview">
                <div class="mini-calc-title">
                    <span>⚡ Quick Loan EMI Snapshot</span>
                    <span style="font-weight: normal; font-size: 0.75rem;">$25,000 @ 8.5%</span>
                </div>
                <div class="mini-calc-row">
                    <span>Tenure (Years):</span>
                    <strong style="color: #ffffff;">5 Years</strong>
                </div>
                <div class="mini-calc-row">
                    <span>Estimated Monthly Payment:</span>
                    <strong style="color: #34d399; font-size: 1.1rem;">$512.91 / mo</strong>
                </div>
                <div class="mini-calc-row">
                    <span>Total Interest Saved by Extra Payoff:</span>
                    <strong style="color: #38bdf8;">$1,420.00</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 1: SITE POSITIONING & EXECUTIVE INTRODUCTION -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Financial Empowerment</span>
            <h2 class="section-title">Your Authoritative Guide Through Modern Monetary Landscape</h2>
            <p class="section-description">
                Navigating global banking, personal lending, credit structures, and insurance contracts can feel overwhelming. FinWise provides clear, data-driven financial publishing designed to protect your wealth and accelerate your financial independence.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 2rem;">
            <div class="article-card" style="padding: 1.75rem; background: #fff;">
                <div style="font-size: 2rem; color: var(--clr-primary-accent); margin-bottom: 0.75rem;">🔍</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Unbiased Comparisons</h3>
                <p style="font-size: 0.925rem; color: var(--clr-text-muted);">
                    We objectively analyze interest structures, fee schedules, annual percentage rates (APR), and insurance claim ratios across major market providers without hidden promotional bias.
                </p>
            </div>
            <div class="article-card" style="padding: 1.75rem; background: #fff;">
                <div style="font-size: 2rem; color: var(--clr-emerald); margin-bottom: 0.75rem;">🧮</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Mathematical Precision</h3>
                <p style="font-size: 0.925rem; color: var(--clr-text-muted);">
                    Our interactive financial engines use exact compound interest and reducing balance loan amortization mathematical formulas to ensure your calculations are instant and accurate.
                </p>
            </div>
            <div class="article-card" style="padding: 1.75rem; background: #fff;">
                <div style="font-size: 2rem; color: var(--clr-amber); margin-bottom: 0.75rem;">🛡️</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Consumer-First Protection</h3>
                <p style="font-size: 0.925rem; color: var(--clr-text-muted);">
                    Learn how to identify predatory loan clauses, credit card fee traps, policy coverage exclusions, and unnecessary insurance riders before committing your hard-earned income.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: FOUR CORE NICHES HUB OVERVIEW -->
<section class="section section-alt" id="four-niches">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Core Specialization Niches</span>
            <h2 class="section-title">Explore Our Four Main Financial Sectors</h2>
            <p class="section-description">
                Tailored guides, comparison portals, and interactive tools divided across four critical pillars of modern wealth management.
            </p>
        </div>

        <div class="niche-grid">
            <!-- Niche 1: Finance -->
            <?php 
            $cat = [
                'name' => 'Finance',
                'type' => 'finance',
                'icon' => '💵',
                'desc' => 'Master everyday money management, strategic budgeting, high-yield banking, compound savings, tax optimization, and wealth building.',
                'url' => 'finance/',
                'items' => [
                    'Personal Finance Frameworks',
                    'Strategic Budgeting Rules (50/30/20)',
                    'High-Yield Savings & CDs',
                    'Beginner Investment Basics',
                    'Tax Deduction Strategies'
                ]
            ];
            include __DIR__ . '/components/category-card.php';
            ?>

            <!-- Niche 2: Loans -->
            <?php 
            $cat = [
                'name' => 'Loans',
                'type' => 'loans',
                'icon' => '🏦',
                'desc' => 'Understand borrowing structures, personal lines, mortgages, vehicle loans, commercial financing, student aid, and interest calculations.',
                'url' => 'loans/',
                'items' => [
                    'Personal Loans & Consolidation',
                    'Fixed & Adjustable Mortgages',
                    'Auto Financing & Lease Math',
                    'Business Credit & SBA Loans',
                    'Loan Amortization & Repayment'
                ]
            ];
            include __DIR__ . '/components/category-card.php';
            ?>

            <!-- Niche 3: Credit Cards -->
            <?php 
            $cat = [
                'name' => 'Credit Cards',
                'type' => 'cards',
                'icon' => '💳',
                'desc' => 'Discover high-reward cards, cashback optimization, travel miles perks, student credit builders, FICO credit score repair, and fee removal.',
                'url' => 'credit-cards/',
                'items' => [
                    'Top Tier Cashback & Reward Cards',
                    'Travel Miles & Airline Lounges',
                    'Credit Score Factors & FICO',
                    'Credit Utilization Ratio Tips',
                    'Avoiding Card Interest & APR'
                ]
            ];
            include __DIR__ . '/components/category-card.php';
            ?>

            <!-- Niche 4: Insurance -->
            <?php 
            $cat = [
                'name' => 'Insurance',
                'type' => 'insurance',
                'icon' => '🛡️',
                'desc' => 'Protect your family and capital assets with comprehensive coverage analysis for life, medical health, auto, property, and trip policies.',
                'url' => 'insurance/',
                'items' => [
                    'Term vs Whole Life Insurance',
                    'Health Deductibles & Out-of-Pocket',
                    'Comprehensive Auto Protection',
                    'Property & Homeowners Coverage',
                    'Filing Successful Insurance Claims'
                ]
            ];
            include __DIR__ . '/components/category-card.php';
            ?>
        </div>
    </div>
</section>

<!-- SECTION 3: INTERACTIVE CALCULATOR ENGINE -->
<section class="section" id="interactive-calculators">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Real-Time Interactive Tools</span>
            <h2 class="section-title">Master Your Monthly Payment & Amortization</h2>
            <p class="section-description">
                Use our instant JavaScript Loan EMI Calculator to test loan amounts, interest rates, and loan terms without submitting any personal data.
            </p>
        </div>

        <div class="calc-wrapper">
            <div class="calc-grid-layout">
                <!-- Controls -->
                <div class="calc-controls">
                    <h3 style="font-size: 1.35rem; margin-bottom: 0.5rem; color: var(--clr-primary);">Loan EMI & Interest Calculator</h3>
                    <p style="font-size: 0.875rem; color: var(--clr-text-muted); margin-bottom: 1rem;">
                        Adjust the sliders below to calculate your monthly installment, principal balance, and cumulative borrowing costs.
                    </p>

                    <div class="form-group">
                        <label>
                            <span>Loan Amount ($)</span>
                            <span id="amount-val-display" style="font-weight: 700; color: var(--clr-primary-accent);">$25,000</span>
                        </label>
                        <div class="input-with-symbol">
                            <span class="input-symbol">$</span>
                            <input type="number" id="calc-amount" value="25000" min="1000" max="1000000" step="500">
                        </div>
                        <input type="range" id="calc-amount-slider" class="range-slider" min="1000" max="250000" value="25000" step="500">
                    </div>

                    <div class="form-group">
                        <label>Annual Interest Rate (%)</label>
                        <input type="number" id="calc-rate" value="8.5" min="1" max="30" step="0.1">
                    </div>

                    <div class="form-group">
                        <label>Loan Tenure (Years)</label>
                        <select id="calc-tenure">
                            <option value="1">1 Year (12 Months)</option>
                            <option value="2">2 Years (24 Months)</option>
                            <option value="3">3 Years (36 Months)</option>
                            <option value="5" selected>5 Years (60 Months)</option>
                            <option value="7">7 Years (84 Months)</option>
                            <option value="10">10 Years (120 Months)</option>
                            <option value="15">15 Years (180 Months)</option>
                            <option value="20">20 Years (240 Months)</option>
                            <option value="30">30 Years (360 Months)</option>
                        </select>
                    </div>
                </div>

                <!-- Results Output Card -->
                <div class="calc-results-card">
                    <div class="result-main">
                        <div class="result-main-label">Estimated Monthly Installment (EMI)</div>
                        <div class="result-main-value" id="res-emi">$512.91</div>
                        <div style="font-size:0.8rem; color:#94a3b8; margin-top:0.3rem;">Fixed monthly payment required for full payoff</div>
                    </div>

                    <div class="results-row">
                        <div class="res-item">
                            <div class="res-item-lbl">Total Interest Payable</div>
                            <div class="res-item-val" id="res-interest" style="color: #f87171;">$5,774.60</div>
                        </div>
                        <div class="res-item">
                            <div class="res-item-lbl">Total Repayment Amount</div>
                            <div class="res-item-val" id="res-total" style="color: #34d399;">$30,774.60</div>
                        </div>
                    </div>

                    <div style="margin-top: 1.5rem; text-align: center;">
                        <a href="<?php echo get_root_prefix(); ?>calculators/loan-emi.php" class="btn btn-emerald" style="width: 100%;">
                            Open Advanced Loan Calculator Page →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Calculator Directory Links -->
        <div style="margin-top: 3rem;">
            <h3 style="text-align: center; margin-bottom: 1.5rem; color: var(--clr-primary);">Explore All Interactive Financial Calculators</h3>
            <div class="calc-cards-grid">
                <?php
                $calculators_list = [
                    ['title' => 'Loan EMI Calculator', 'url' => 'calculators/loan-emi.php', 'icon' => '🧮', 'desc' => 'Calculate monthly payments & complete principal vs interest amortization schedules.'],
                    ['title' => 'Personal Loan Calculator', 'url' => 'calculators/personal-loan.php', 'icon' => '💰', 'desc' => 'Estimate monthly payments and total borrowing costs for unsecured personal loans.'],
                    ['title' => 'Home Loan Calculator', 'url' => 'calculators/home-loan.php', 'icon' => '🏠', 'desc' => 'Plan home buying with mortgage payments, property taxes, and tenure comparisons.'],
                    ['title' => 'Auto Loan Calculator', 'url' => 'calculators/auto-loan.php', 'icon' => '🚗', 'desc' => 'Vehicle payment breakdown based on trade-in value, down payment, and loan tenure.'],
                    ['title' => 'Compound Interest Calculator', 'url' => 'calculators/compound-interest.php', 'icon' => '📈', 'desc' => 'Visualize exponential wealth accumulation with variable compounding frequencies.'],
                    ['title' => 'Investment Growth Calculator', 'url' => 'calculators/investment.php', 'icon' => '📊', 'desc' => 'Project future investment portfolio returns across stocks, mutual funds, and CDs.'],
                    ['title' => 'Savings Goal Calculator', 'url' => 'calculators/savings.php', 'icon' => '🏦', 'desc' => 'Determine monthly savings requirements to achieve major long-term target goals.'],
                    ['title' => 'Credit Card Interest Calculator', 'url' => 'calculators/credit-card-interest.php', 'icon' => '💳', 'desc' => 'See exact payoff timeline and interest savings by increasing monthly credit card payments.'],
                    ['title' => 'Loan Affordability Calculator', 'url' => 'calculators/loan-affordability.php', 'icon' => '⚖️', 'desc' => 'Calculate maximum safe borrowing limit based on your Debt-to-Income (DTI) ratio.']
                ];

                foreach ($calculators_list as $calc) {
                    include __DIR__ . '/components/calculator-card.php';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: MASTER FINANCIAL COMPARISON MATRICES -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Financial Product Comparison</span>
            <h2 class="section-title">Direct Comparison Matrix Across Key Products</h2>
            <p class="section-description">
                Understand key structural differences, interest mechanics, and ideal user profiles before choosing financial products.
            </p>
        </div>

        <!-- Matrix 1: Personal Loan vs Credit Card vs Home Loan -->
        <h3 style="margin-bottom: 1rem; color: var(--clr-primary);">1. Loan Product Structural Comparison</h3>
        <?php
        $matrix = [
            'headers' => ['Loan Category', 'Interest Structure', 'Typical Tenure', 'Borrowing Limit', 'Best Purpose', 'Primary Advantage'],
            'rows' => [
                [
                    '<strong>Personal Loan</strong>',
                    'Fixed Annual Rate (6% - 24%)',
                    '1 to 7 Years',
                    '$2,000 to $50,000',
                    'Debt consolidation, major home upgrades, unexpected medical bills',
                    '<span class="badge badge-emerald">Fixed Monthly EMI</span>'
                ],
                [
                    '<strong>Credit Card</strong>',
                    'Revolving APR (15% - 29.99%)',
                    'Revolving (Open-ended)',
                    '$500 to $25,000+',
                    'Everyday purchases, travel bookings, short-term cash flow gaps',
                    '<span class="badge badge-blue">0% Interest Grace Period</span>'
                ],
                [
                    '<strong>Home Loan (Mortgage)</strong>',
                    'Fixed or Adjustable (5% - 8%)',
                    '15 to 30 Years',
                    '$100,000 to $1,000,000+',
                    'Residential real estate acquisition, property construction',
                    '<span class="badge badge-emerald">Lowest Relative Interest Rate</span>'
                ],
                [
                    '<strong>Auto Loan</strong>',
                    'Fixed Rate (4% - 12%)',
                    '3 to 7 Years',
                    '$10,000 to $80,000',
                    'New or certified pre-owned vehicle purchases',
                    '<span class="badge badge-amber">Secured by Vehicle Asset</span>'
                ]
            ]
        ];
        include __DIR__ . '/components/comparison-table.php';
        ?>

        <!-- Matrix 2: Insurance Comparison -->
        <h3 style="margin-top: 2.5rem; margin-bottom: 1rem; color: var(--clr-primary);">2. Core Insurance Protection Matrix</h3>
        <?php
        $matrix = [
            'headers' => ['Insurance Type', 'Primary Coverage Target', 'Key Cost Factors', 'Essential Riders / Add-ons', 'Ideal Consumer'],
            'rows' => [
                [
                    '<strong>Term Life Insurance</strong>',
                    'Financial income replacement upon policyholder death',
                    'Age, health history, coverage amount, term length',
                    'Critical illness rider, accidental disability waiver',
                    'Breadwinners with dependents or outstanding mortgages'
                ],
                [
                    '<strong>Medical Health Insurance</strong>',
                    'Hospitalization, surgery, emergency care, prescription drugs',
                    'Deductible size, co-insurance percentage, network scope',
                    'Maternity coverage, dental/vision benefit, room upgrade',
                    'All individuals and families seeking medical safety'
                ],
                [
                    '<strong>Comprehensive Auto Insurance</strong>',
                    'Vehicle collision damage, theft, weather, third-party liability',
                    'Vehicle model valuation, driver record, garage location',
                    'Zero depreciation rider, roadside assistance, GAP insurance',
                    'Vehicle owners protecting against physical damage & liability'
                ]
            ]
        ];
        include __DIR__ . '/components/comparison-table.php';
        ?>
    </div>
</section>

<!-- SECTION 5: DEEP FINANCIAL MANAGEMENT & WEALTH ROADMAP (EDUCATIONAL DEEP DIVE) -->
<section class="section">
    <div class="container">
        <div class="content-layout">
            <!-- Left Main Content Area -->
            <div class="article-body">
                <span class="section-subtitle">Financial Blueprint</span>
                <h2>The 5 Pillar Strategy for Permanent Wealth & Debt Freedom</h2>
                <p>
                    Achieving long-term financial security requires more than just earning a high income; it demands disciplined money allocation, defensive risk protection, and strategic debt management. Whether you are aiming to eliminate high-interest credit card balances or plan a comfortable retirement, mastering these five foundational pillars will transform your monetary trajectory.
                </p>

                <h3>Pillar 1: Execute a Cash Flow & Spending Audit</h3>
                <p>
                    Before you can save or invest effectively, you must understand exactly where your income flows each month. Most households experience "budget leak"—small, unnoticed recurring payments and impulse expenditures that consume 15% to 30% of net income.
                </p>
                <div class="callout-box">
                    <h4>💡 The 50/30/20 Budgeting Rule Explained</h4>
                    <p>
                        A simple, reliable framework: Allocate <strong>50% of net income</strong> to Needs (housing, utilities, groceries, basic transportation), <strong>30% to Wants</strong> (dining out, entertainment, hobbies), and <strong>20% directly to Savings & Debt Payoff</strong>.
                    </p>
                </div>

                <h3>Pillar 2: Construct a 6-Month Emergency Liquid Cushion</h3>
                <p>
                    An emergency fund is your financial shock absorber. Without a dedicated liquid cash buffer stored in a High-Yield Savings Account (HYSA), any sudden event—such as a vehicle repair, medical emergency, or job displacement—forces you to take on expensive credit card debt or liquidate long-term investments at an unfavorable time.
                </p>
                <ul>
                    <li><strong>Starter Cushion:</strong> Save $1,000 as fast as possible to handle immediate micro-emergencies.</li>
                    <li><strong>Fully-Funded Buffer:</strong> Build 3 to 6 months of essential living expenses in a liquid, FDIC-insured account.</li>
                </ul>

                <h3>Pillar 3: Eradicate Toxic High-Interest Debt</h3>
                <p>
                    Not all debt is equal. While low-interest mortgages can be strategic financial leverage, revolving credit card balances charging 20% to 29% APR are mathematically guaranteed to erode your wealth.
                </p>
                <div style="margin: 1.5rem 0; padding: 1.25rem; background: #fff; border: 1px solid var(--clr-border-light); border-radius: var(--radius-md);">
                    <h4 style="margin-bottom: 0.5rem; color: var(--clr-primary);">Two Proven Payoff Methodologies:</h4>
                    <p><strong>1. Debt Avalanche Method:</strong> Make minimum payments on all debts, then direct all surplus cash toward the account with the highest interest rate. This mathematically minimizes total interest paid.</p>
                    <p style="margin-top:0.5rem;"><strong>2. Debt Snowball Method:</strong> Pay off the smallest dollar balance first to achieve quick psychological wins, building momentum as each balance reaches zero.</p>
                </div>

                <h3>Pillar 4: Optimize Credit Score & Utilization Metrics</h3>
                <p>
                    Your credit score impacts everything from mortgage interest rates and credit card approvals to tenant screening and insurance premiums. Lenders evaluate your creditworthiness using five distinct weighted components:
                </p>
                <ol>
                    <li><strong>Payment History (35%):</strong> Consistently paying on time with zero 30+ day delinquencies.</li>
                    <li><strong>Credit Utilization (30%):</strong> Keeping reported balances under 30% of total credit limits.</li>
                    <li><strong>Length of Credit History (15%):</strong> Average age of all open revolving and installment accounts.</li>
                    <li><strong>Credit Mix (10%):</strong> Healthy balance between revolving credit cards and installment loans.</li>
                    <li><strong>New Credit Inquiries (10%):</strong> Minimizing hard inquiries over short timeframes.</li>
                </ol>

                <h3>Pillar 5: Implement Defensive Risk Management (Insurance)</h3>
                <p>
                    Wealth accumulation is meaningless if a single lawsuit, illness, or disability can wipe out your assets. Proper insurance coverage acts as a protective perimeter around your net worth:
                </p>
                <ul>
                    <li><strong>Health Insurance:</strong> Prevents catastrophic medical bills from triggering personal bankruptcy.</li>
                    <li><strong>Term Life Insurance:</strong> Guarantees income replacement for your family during primary earning years.</li>
                    <li><strong>Property & Auto Insurance:</strong> Protects high-value physical assets against destruction or liability claims.</li>
                </ul>
            </div>

            <!-- Sidebar -->
            <div>
                <!-- Sidebar Widget 1: Popular Calculators -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">⚡ Essential Calculators</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.75rem;">
                        <li><a href="<?php echo get_root_prefix(); ?>calculators/loan-emi.php" style="font-weight:600;">📊 Loan EMI Calculator →</a></li>
                        <li><a href="<?php echo get_root_prefix(); ?>calculators/compound-interest.php" style="font-weight:600;">📈 Compound Interest Engine →</a></li>
                        <li><a href="<?php echo get_root_prefix(); ?>calculators/credit-card-interest.php" style="font-weight:600;">💳 Credit Card Payoff Planner →</a></li>
                        <li><a href="<?php echo get_root_prefix(); ?>calculators/loan-affordability.php" style="font-weight:600;">⚖️ Max Borrowing Capacity →</a></li>
                    </ul>
                </div>

                <!-- Sidebar Widget 2: Ad Placement Placeholder -->
                <?php 
                $ad_slot_position = 'sidebar'; 
                include __DIR__ . '/components/ad-slot.php'; 
                ?>

                <!-- Sidebar Widget 3: Quick Tip Callout -->
                <div class="sidebar-widget" style="background: linear-gradient(135deg, #0284c7, #0369a1); color:#fff;">
                    <h4 style="color:#fff; margin-bottom:0.5rem;">💡 Smart Money Rule</h4>
                    <p style="font-size:0.875rem; color:#e0f2fe;">
                        Always check for prepayment penalties before refinancing a home or personal loan. Making bi-weekly payments instead of monthly payments results in one extra full monthly payment each year, cutting years off your repayment schedule!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: FEATURED GUIDES & ARTICLES -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Financial Knowledge Base</span>
            <h2 class="section-title">Featured Financial Guides & Tutorials</h2>
            <p class="section-description">
                In-depth articles written to guide you step-by-step through budgeting, credit score improvement, loan selection, and insurance policy analysis.
            </p>
        </div>

        <div class="article-grid">
            <?php
            $articles_list = [
                [
                    'title' => 'How to Create a Master Monthly Budget That Actually Works',
                    'desc' => 'A practical tutorial to audit spending, categorize expenses, and implement stress-free monthly budgeting frameworks like 50/30/20.',
                    'url' => 'articles/monthly-budget-guide.php',
                    'category' => 'Finance',
                    'read_time' => '6 min read'
                ],
                [
                    'title' => 'How Credit Scores Work: The Ultimate FICO Breakdown',
                    'desc' => 'Everything about credit score factors, payment history, credit utilization ratios, and how to boost your score over 750+ points.',
                    'url' => 'articles/credit-score-guide.php',
                    'category' => 'Credit Cards',
                    'read_time' => '8 min read'
                ],
                [
                    'title' => 'How Loan Interest Is Calculated: Simple vs Compound Amortization',
                    'desc' => 'Understand the mathematical formulas behind daily interest accrual, reducing balance methods, and nominal rates vs APR.',
                    'url' => 'articles/loan-interest-guide.php',
                    'category' => 'Loans',
                    'read_time' => '7 min read'
                ],
                [
                    'title' => 'Fixed vs Variable Interest Rates: Which Is Right for You?',
                    'desc' => 'Weighing the predictability of fixed interest rates against potential savings of variable rates in fluctuating market environments.',
                    'url' => 'articles/fixed-vs-variable-rate-guide.php',
                    'category' => 'Loans',
                    'read_time' => '5 min read'
                ],
                [
                    'title' => 'How to Choose a Credit Card Aligned with Your Spending',
                    'desc' => 'Avoid common marketing traps and select the ideal credit card for cashback rebates, travel perks, and fee waivers.',
                    'url' => 'articles/choose-credit-card-guide.php',
                    'category' => 'Credit Cards',
                    'read_time' => '6 min read'
                ],
                [
                    'title' => 'How Term Life Insurance Works: Policy Analysis & Rider Guide',
                    'desc' => 'Demystifying underwriting, coverage multipliers based on annual income, and tax implications of life insurance payouts.',
                    'url' => 'articles/life-insurance-guide.php',
                    'category' => 'Insurance',
                    'read_time' => '9 min read'
                ]
            ];

            foreach ($articles_list as $art) {
                include __DIR__ . '/components/article-card.php';
            }
            ?>
        </div>

        <div style="text-align: center; margin-top: 2.5rem;">
            <a href="<?php echo get_root_prefix(); ?>articles/" class="btn btn-primary">
                View All Financial Articles & Guides →
            </a>
        </div>
    </div>
</section>

<!-- SECTION 7: FREQUENTLY ASKED QUESTIONS (FAQS) -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Financial Questions</h2>
            <p class="section-description">
                Clear answers to common questions about loans, credit scores, insurance coverage, and personal finance strategies.
            </p>
        </div>

        <div style="max-width: 860px; margin: 0 auto;">
            <?php 
            $faq_list = $page_seo['faqs'];
            include __DIR__ . '/components/faq.php'; 
            ?>
        </div>
    </div>
</section>

<!-- SECTION 8: FINAL CALL TO ACTION (CTA) -->
<section class="section" style="background: linear-gradient(135deg, #0b132b, #0f2b48); color:#ffffff; padding: 4.5rem 0; text-align: center;">
    <div class="container" style="max-width: 800px;">
        <span class="hero-badge" style="background: rgba(16, 185, 129, 0.2); border-color: rgba(16, 185, 129, 0.4); color: #34d399;">
            🚀 Take Control of Your Money Today
        </span>
        <h2 style="font-size: 2.5rem; color: #ffffff; margin: 1rem 0;">Ready to Make Smarter Financial Choices?</h2>
        <p style="font-size: 1.1rem; color: #94a3b8; margin-bottom: 2rem;">
            Calculate your monthly loan payments, find the perfect credit card rewards structure, or compare insurance protection policies in seconds.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo get_root_prefix(); ?>calculators/" class="btn btn-emerald" style="padding: 0.9rem 2rem; font-size: 1rem;">
                🧮 Use Financial Calculators
            </a>
            <a href="<?php echo get_root_prefix(); ?>loans/" class="btn btn-primary" style="padding: 0.9rem 2rem; font-size: 1rem;">
                🏦 Compare Loans & Rates
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
