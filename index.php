<?php
/**
 * FinWise - Interactive Global Financial Intelligence Platform Homepage
 */
define('FINWISE_APP', true);

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/benchmarks.php';
require_once __DIR__ . '/includes/seo.php';

$page_seo = [
    'title' => 'FinWise — See Where You Stand Among 8+ Billion People Worldwide',
    'description' => 'Interactive global financial intelligence platform. Discover your personal financial position, compare indicators against demographic benchmarks, and calculate loan affordability.',
    'breadcrumbs' => ['Home' => 'index.php'],
    'faqs' => [
        ['q' => 'How does the FinWise Financial Position assessment work?', 'a' => 'Our interactive snapshot tool compares your self-reported income, savings rate, debt ratio, emergency cash reserves, and investment coverage against authentic central bank and national statistical benchmark data.'],
        ['q' => 'Is my financial data kept private?', 'a' => 'Yes! All calculations, score evaluations, and tool estimations run 100% locally in your browser. We never track, store, or sell your financial numbers.'],
        ['q' => 'What is a safe Debt-to-Income (DTI) ratio for loans?', 'a' => 'Underwriting guidelines generally recommend keeping your total monthly debt payments (housing mortgage + car loans + credit cards) below 36% of your gross monthly income.'],
        ['q' => 'Why is term life insurance recommended over whole life insurance?', 'a' => 'Term life insurance provides maximum death benefit protection during critical earning years at a fraction of the cost of whole life policies, allowing you to invest the difference in low-cost index funds.']
    ]
];

include __DIR__ . '/components/header.php';
?>

<!-- ==========================================================================
     MAIN HERO EXPERIENCE (Global Financial Assessment)
     ========================================================================== -->
<?php include __DIR__ . '/components/hero-financial-assessment.php'; ?>

<!-- ==========================================================================
     UNIFIED FINANCIAL POSITION DASHBOARD (Immediately Below Hero)
     ========================================================================== -->
<section id="hero-snapshot-results" class="section section-dark-dashboard" style="padding: 3rem 0;">
    <div class="container container-wide">
        <!-- Unified 3-Column Dark Glassmorphism Dashboard Card -->
        <?php include __DIR__ . '/components/financial-comparison.php'; ?>

        <!-- 5 Feature Cards Grid -->
        <div class="feature-cards-5col-grid">
            <!-- Card 1: Loan Affordability Calculator -->
            <a href="calculators/loan-affordability.php" class="feature-card-dark">
                <div class="feature-card-icon violet">💳</div>
                <div>
                    <h4 class="feature-card-title">Loan Affordability Calculator</h4>
                    <p class="feature-card-desc">Check your loan eligibility in seconds</p>
                </div>
                <span class="feature-card-arrow">→</span>
            </a>

            <!-- Card 2: Investment Growth Calculator -->
            <a href="calculators/compound-interest.php" class="feature-card-dark">
                <div class="feature-card-icon green">📈</div>
                <div>
                    <h4 class="feature-card-title">Investment Growth Calculator</h4>
                    <p class="feature-card-desc">See your money grow over time</p>
                </div>
                <span class="feature-card-arrow">→</span>
            </a>

            <!-- Card 3: Credit Score Analyzer -->
            <a href="credit-cards/credit-score.php" class="feature-card-dark">
                <div class="feature-card-icon amber">🛡️</div>
                <div>
                    <h4 class="feature-card-title">Credit Score Analyzer</h4>
                    <p class="feature-card-desc">Understand and improve your credit score</p>
                </div>
                <span class="feature-card-arrow">→</span>
            </a>

            <!-- Card 4: Insurance Needs Check -->
            <a href="insurance/index.php" class="feature-card-dark">
                <div class="feature-card-icon blue">🔒</div>
                <div>
                    <h4 class="feature-card-title">Insurance Needs Check</h4>
                    <p class="feature-card-desc">Find the right coverage for your life</p>
                </div>
                <span class="feature-card-arrow">→</span>
            </a>

            <!-- Card 5: Explore All Tools -->
            <a href="calculators/index.php" class="feature-card-dark">
                <div class="feature-card-icon cyan">🧮</div>
                <div>
                    <h4 class="feature-card-title">Explore All Tools</h4>
                    <p class="feature-card-desc">20+ powerful financial tools and calculators</p>
                </div>
                <span class="feature-card-arrow">→</span>
            </a>
        </div>

        <!-- Priorities Section -->
        <div style="margin-top:3rem;">
            <div style="text-align:center; margin-bottom:1.5rem;">
                <span class="section-subtitle">Personalized Action Roadmap</span>
                <h3 style="font-size:1.5rem; color:#fff; margin-top:0.25rem;">Your Top 3 Priorities</h3>
            </div>
            <div id="dash-priorities-list" style="max-width:820px; margin:0 auto;">
                <div class="priority-card" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); padding:1.5rem; border-radius:var(--radius-md); text-align:center; color:#94a3b8;">
                    Complete your financial snapshot in the hero above to generate your customized top 3 priority roadmap.
                </div>
            </div>
        </div>

        <!-- Methodology & Disclaimer -->
        <?php include __DIR__ . '/components/benchmark-message.php'; ?>
    </div>
</section>

<!-- ==========================================================================
     CORE 4 NICHES CONNECTIVITY
     ========================================================================== -->
<section class="section section-alt">
    <div class="container container-wide">
        <div class="section-header">
            <span class="section-subtitle">FinWise Knowledge Pillars</span>
            <h2 class="section-title">Four Core Financial Domains</h2>
            <p class="section-description">Deep-dive into our specialized hubs covering personal finance, loans, credit cards, and insurance.</p>
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
     EDUCATIONAL CONTENT & 3,000 WORDS SEO STRUCTURE
     ========================================================================== -->
<section class="section">
    <div class="container container-wide">
        <div class="content-layout">
            <div class="article-body">
                <h2>Understanding Global Personal Financial Intelligence & Position Benchmarking</h2>
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
                        <li><a href="calculators/index.php">Calculator Directory</a></li>
                        <li><a href="articles/index.php">Financial Guides Hub</a></li>
                        <li><a href="search.php">Search Site</a></li>
                        <li><a href="about.php">About FinWise</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
