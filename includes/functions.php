<?php
/**
 * FinWise - Global Helper Functions
 * Escaping, URL normalization, search processing, breadcrumb generation.
 */

if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

/**
 * Safe HTML output escaping
 */
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Format currency amounts nicely
 */
function format_currency(float|int|string $amount, string $symbol = '$'): string {
    if (!is_numeric($amount)) return $symbol . '0';
    return $symbol . number_format((float)$amount, 2);
}

/**
 * Sanitize query strings
 */
function sanitize_input(?string $data): string {
    return trim(strip_tags($data ?? ''));
}

/**
 * Get site root relative path for scripts/styles
 */
function get_root_prefix(): string {
    $current_dir = dirname($_SERVER['SCRIPT_NAME']);
    $relative = str_replace('\\', '/', $current_dir);
    $depth = substr_count(trim($relative, '/'), '/');
    
    // Check relative depth from root folder
    $script_path = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
    if (strpos($script_path, '/finance/') !== false || 
        strpos($script_path, '/loans/') !== false || 
        strpos($script_path, '/credit-cards/') !== false || 
        strpos($script_path, '/insurance/') !== false || 
        strpos($script_path, '/calculators/') !== false || 
        strpos($script_path, '/articles/') !== false) {
        return '../';
    }
    return './';
}

/**
 * Master Content Index for search engine, sitemap, and dynamic article cards
 */
function get_all_site_pages(): array {
    return [
        // Core Hubs
        [
            'title' => 'Personal Finance & Money Management Guide',
            'url' => 'finance/index.php',
            'category' => 'Finance',
            'desc' => 'Master your money with essential guides on budgeting, saving strategies, banking, investing basics, and smart financial planning.',
            'keywords' => 'finance, personal finance, budgeting, saving money, emergency fund, investing, tax'
        ],
        [
            'title' => 'Loans & Lending Resource Center',
            'url' => 'loans/index.php',
            'category' => 'Loans',
            'desc' => 'Compare personal, home, auto, business, and education loans. Calculate EMIs, explore interest rates, and understand loan eligibility.',
            'keywords' => 'loans, personal loan, home loan, auto loan, loan emi, interest rates, eligibility, repayment'
        ],
        [
            'title' => 'Credit Cards Hub & Comparison Portal',
            'url' => 'credit-cards/index.php',
            'category' => 'Credit Cards',
            'desc' => 'Find the best cashback, rewards, travel, and student credit cards. Learn about credit scores, APR, utilization, and fee reduction.',
            'keywords' => 'credit cards, cashback, rewards, travel cards, credit score, credit utilization, apr, card fees'
        ],
        [
            'title' => 'Insurance Protection & Coverage Center',
            'url' => 'insurance/index.php',
            'category' => 'Insurance',
            'desc' => 'Comprehensive information on life, health, auto, bike, travel, home, and business insurance policies and premium calculations.',
            'keywords' => 'insurance, life insurance, health insurance, car insurance, travel insurance, premium, claims'
        ],
        [
            'title' => 'Financial Calculators Portal',
            'url' => 'calculators/index.php',
            'category' => 'Calculators',
            'desc' => 'Free interactive financial calculators for Loan EMI, Affordability, Compound Interest, Investments, Savings, and Credit Card Interest.',
            'keywords' => 'calculators, loan emi calculator, compound interest, investment calculator, savings, affordability'
        ],

        // Finance Detail Pages
        [
            'title' => 'Personal Finance Fundamentals',
            'url' => 'finance/personal-finance.php',
            'category' => 'Finance',
            'desc' => 'A complete roadmap to managing personal wealth, debt elimination, cash flow management, and achieving long-term financial independence.',
            'keywords' => 'personal finance, wealth management, debt payoff, cash flow, financial independence'
        ],
        [
            'title' => 'Strategic Budgeting Methods & Blueprints',
            'url' => 'finance/budgeting.php',
            'category' => 'Finance',
            'desc' => 'Explore popular budgeting frameworks like the 50/30/20 rule, zero-based budgeting, and envelope systems to control spending.',
            'keywords' => 'budgeting, 50 30 20 rule, zero based budget, spending tracking, monthly budget'
        ],
        [
            'title' => 'High-Yield Saving Money Strategies',
            'url' => 'finance/saving-money.php',
            'category' => 'Finance',
            'desc' => 'Actionable techniques to grow your savings faster, automate savings goals, and eliminate wasteful subscription drains.',
            'keywords' => 'saving money, high yield savings, automatic savings, frugality, wealth building'
        ],
        [
            'title' => 'Modern Banking & Account Optimisation',
            'url' => 'finance/banking.php',
            'category' => 'Finance',
            'desc' => 'Understand checking, high-yield savings accounts, CDs, money market accounts, digital banking safety, and fee avoidance.',
            'keywords' => 'banking, checking account, high yield savings account, cd rates, FDIC insurance'
        ],
        [
            'title' => 'Investing Basics for Beginners',
            'url' => 'finance/investing-basics.php',
            'category' => 'Finance',
            'desc' => 'Demystifying stock markets, index funds, ETFs, mutual funds, asset allocation, and risk management for new investors.',
            'keywords' => 'investing, stocks, index funds, etf, portfolio diversification, asset allocation'
        ],
        [
            'title' => 'Comprehensive Financial Planning Blueprint',
            'url' => 'finance/financial-planning.php',
            'category' => 'Finance',
            'desc' => 'Step-by-step framework to align your financial goals, retirement accounts (401k/IRA), estate plans, and risk tolerance.',
            'keywords' => 'financial planning, retirement planning, 401k, ira, estate planning, net worth'
        ],
        [
            'title' => 'Building & Protecting Your Emergency Fund',
            'url' => 'finance/emergency-fund.php',
            'category' => 'Finance',
            'desc' => 'Why you need 3 to 6 months of liquid expenses saved, where to store emergency funds, and when to tap into them safely.',
            'keywords' => 'emergency fund, liquidity, cash buffer, rainy day fund, financial security'
        ],
        [
            'title' => 'Tax Basics & Deduction Strategies',
            'url' => 'finance/tax-basics.php',
            'category' => 'Finance',
            'desc' => 'Essential guidance on tax brackets, marginal vs effective tax rates, standard deductions, tax credits, and tax-advantaged accounts.',
            'keywords' => 'tax basics, tax deductions, income tax, tax brackets, tax credits, tax return'
        ],

        // Loan Detail Pages
        [
            'title' => 'Personal Loans Guide: Rates, Terms & Approval',
            'url' => 'loans/personal-loans.php',
            'category' => 'Loans',
            'desc' => 'Everything about secured vs unsecured personal loans, borrowing limits, interest rate factors, and pre-approval tips.',
            'keywords' => 'personal loans, debt consolidation, unsecured loans, loan rates, credit requirement'
        ],
        [
            'title' => 'Home Loans & Mortgage Masterclass',
            'url' => 'loans/home-loans.php',
            'category' => 'Loans',
            'desc' => 'Navigate fixed-rate mortgages, ARM loans, down payment options, closing costs, and refinancing possibilities.',
            'keywords' => 'home loans, mortgage, fixed rate mortgage, refinancing, home buying, down payment'
        ],
        [
            'title' => 'Auto Loans: Financing New & Used Vehicles',
            'url' => 'loans/auto-loans.php',
            'category' => 'Loans',
            'desc' => 'Compare dealership financing vs bank auto loans, trade-in valuations, loan tenures, and GAP insurance necessity.',
            'keywords' => 'auto loans, car loan, vehicle financing, APR, car buying, loan term'
        ],
        [
            'title' => 'Business Loans & Commercial Financing Solutions',
            'url' => 'loans/business-loans.php',
            'category' => 'Loans',
            'desc' => 'Explore SBA loans, working capital lines, equipment financing, invoice factoring, and business credit requirements.',
            'keywords' => 'business loans, sba loan, commercial financing, working capital, business credit'
        ],
        [
            'title' => 'Education & Student Loans Overview',
            'url' => 'loans/education-loans.php',
            'category' => 'Loans',
            'desc' => 'Federal vs private student loan comparison, income-driven repayment plans, forgiveness programs, and deferment options.',
            'keywords' => 'student loans, education loans, FAFSA, loan forgiveness, student interest rate'
        ],
        [
            'title' => 'Loan EMI Mechanics & Formula Breakdown',
            'url' => 'loans/loan-emi.php',
            'category' => 'Loans',
            'desc' => 'Learn how Equated Monthly Installments work, how principal and interest amortize, and strategies to shorten your loan tenure.',
            'keywords' => 'loan emi, emi calculation, amortization schedule, principal payment, interest calculation'
        ],
        [
            'title' => 'Understanding Loan Interest Rates & APR',
            'url' => 'loans/loan-interest.php',
            'category' => 'Loans',
            'desc' => 'Deep dive into Nominal Interest Rates vs APR, fixed vs floating rates, central bank rate impacts, and rate negotiations.',
            'keywords' => 'interest rates, nominal rate, apr, fixed rate, floating rate, central bank prime rate'
        ],
        [
            'title' => 'Loan Eligibility Criteria & Maximizing Approval',
            'url' => 'loans/loan-eligibility.php',
            'category' => 'Loans',
            'desc' => 'Factors lenders evaluate: Debt-to-Income (DTI) ratio, credit history, proof of income, employment stability, and co-signers.',
            'keywords' => 'loan eligibility, dti ratio, credit score requirement, loan approval, co signer'
        ],
        [
            'title' => 'Accelerated Loan Repayment & Prepayment Strategies',
            'url' => 'loans/loan-repayment.php',
            'category' => 'Loans',
            'desc' => 'Effective methods to pay off loans early, debt avalanche vs snowball methods, prepayment penalty checks, and refinancing.',
            'keywords' => 'loan repayment, debt payoff, debt snowball, debt avalanche, loan prepayment'
        ],

        // Credit Card Pages
        [
            'title' => 'Best Credit Cards Comparison & Guide',
            'url' => 'credit-cards/best-credit-cards.php',
            'category' => 'Credit Cards',
            'desc' => 'In-depth review of top credit cards across all categories: cashback, travel perks, zero annual fee, and sign-up bonuses.',
            'keywords' => 'best credit cards, top credit cards, card reviews, sign up bonus, credit rewards'
        ],
        [
            'title' => 'Cashback Credit Cards: Earn Money Back on Everyday Purchases',
            'url' => 'credit-cards/cashback-cards.php',
            'category' => 'Credit Cards',
            'desc' => 'Maximize flat-rate vs rotating tier cashback cards on grocery, gas, dining, and online shopping categories.',
            'keywords' => 'cashback cards, cash back credit card, rotating categories, rebate, everyday spend'
        ],
        [
            'title' => 'Rewards & Points Credit Cards Master Guide',
            'url' => 'credit-cards/rewards-cards.php',
            'category' => 'Credit Cards',
            'desc' => 'How to earn, multiply, and redeem rewards points for maximum value across gift cards, statement credits, and merchandise.',
            'keywords' => 'rewards cards, reward points, redemption value, point multiplier, loyalty programs'
        ],
        [
            'title' => 'Travel & Airline Credit Cards Unlocked',
            'url' => 'credit-cards/travel-cards.php',
            'category' => 'Credit Cards',
            'desc' => 'Airline miles, hotel upgrades, lounge access, zero foreign transaction fees, and travel insurance benefits explained.',
            'keywords' => 'travel cards, airline miles, airport lounge access, no foreign transaction fee, hotel points'
        ],
        [
            'title' => 'Student Credit Cards & Building First Credit',
            'url' => 'credit-cards/student-cards.php',
            'category' => 'Credit Cards',
            'desc' => 'Safe starter credit cards for students, secured cards, building good financial habits, and avoiding debt traps early.',
            'keywords' => 'student credit cards, starter cards, secured credit card, building credit, college finance'
        ],
        [
            'title' => 'Credit Card Fees: How to Identify & Eliminate Them',
            'url' => 'credit-cards/credit-card-fees.php',
            'category' => 'Credit Cards',
            'desc' => 'Breakdown of annual fees, late payment charges, balance transfer fees, cash advance penalties, and foreign transaction costs.',
            'keywords' => 'credit card fees, annual fee, late fee, balance transfer fee, cash advance fee'
        ],
        [
            'title' => 'Credit Card Interest Rates & Daily Compounding APR',
            'url' => 'credit-cards/credit-card-interest.php',
            'category' => 'Credit Cards',
            'desc' => 'How credit card interest is calculated daily, grace periods, balance transfer 0% intro promos, and avoiding interest entirely.',
            'keywords' => 'credit card interest, apr calculation, grace period, introductory apr, balance transfer'
        ],
        [
            'title' => 'Demystifying Your Credit Score & Rating',
            'url' => 'credit-cards/credit-score.php',
            'category' => 'Credit Cards',
            'desc' => 'The 5 key factors influencing FICO/Vantage scores, how credit bureaus operate, and actionable steps to boost your score 100+ points.',
            'keywords' => 'credit score, fico score, credit report, credit bureau, credit improvement'
        ],
        [
            'title' => 'Credit Utilization Ratio Optimization',
            'url' => 'credit-cards/credit-utilization.php',
            'category' => 'Credit Cards',
            'desc' => 'Why maintaining under 30% (or under 10%) credit utilization boosts your credit rating fast and how statement closing dates matter.',
            'keywords' => 'credit utilization, credit limit, balance reporting, credit score impact'
        ],

        // Insurance Pages
        [
            'title' => 'Life Insurance Overview: Term vs Whole Life',
            'url' => 'insurance/life-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Compare affordable term life policies with cash-value whole life insurance to protect your family\'s financial future.',
            'keywords' => 'life insurance, term life, whole life, death benefit, beneficiary protection'
        ],
        [
            'title' => 'Health & Medical Insurance Purchasing Guide',
            'url' => 'insurance/health-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Demystifying deductibles, copays, coinsurance, out-of-pocket maximums, HMO vs PPO networks, and critical illness add-ons.',
            'keywords' => 'health insurance, medical policy, deductible, copay, hmo, ppo, health coverage'
        ],
        [
            'title' => 'Car & Auto Insurance Coverage Deep Dive',
            'url' => 'insurance/car-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Liability, collision, comprehensive, personal injury protection (PIP), and uninsured motorist coverage breakdown.',
            'keywords' => 'car insurance, auto policy, liability coverage, collision, comprehensive, auto premium'
        ],
        [
            'title' => 'Two-Wheeler & Bike Insurance Protection',
            'url' => 'insurance/bike-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Third-party bike insurance requirements vs comprehensive coverage, zero depreciation add-ons, and claims assistance.',
            'keywords' => 'bike insurance, motorcycle coverage, third party insurance, zero depreciation'
        ],
        [
            'title' => 'Travel Insurance: Trip Protection & Emergency Medical',
            'url' => 'insurance/travel-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Protect international and domestic trips against cancellation, baggage loss, flight delays, and emergency medical evacuation.',
            'keywords' => 'travel insurance, trip cancellation, medical evacuation, flight delay insurance'
        ],
        [
            'title' => 'Home & Property Insurance Coverage Guide',
            'url' => 'insurance/home-insurance.php',
            'category' => 'Insurance',
            'desc' => 'Safeguard your dwelling, personal belongings, liability risks, and additional living expenses against disaster.',
            'keywords' => 'home insurance, homeowners insurance, property protection, hazard insurance'
        ],
        [
            'title' => 'Business Insurance & Liability Risk Protection',
            'url' => 'insurance/business-insurance.php',
            'category' => 'Insurance',
            'desc' => 'General liability, professional liability (E&O), commercial property insurance, and workers\' compensation basics.',
            'keywords' => 'business insurance, general liability, errors and omissions, commercial insurance'
        ],
        [
            'title' => 'Insurance Premiums: Calculation & Reduction Tips',
            'url' => 'insurance/insurance-premium.php',
            'category' => 'Insurance',
            'desc' => 'Factors that determine premium costs and practical strategies to lower your insurance bills without sacrificing protection.',
            'keywords' => 'insurance premium, lower premium, insurance discounts, policy cost factors'
        ],
        [
            'title' => 'Step-by-Step Insurance Claims Process Guide',
            'url' => 'insurance/insurance-claims.php',
            'category' => 'Insurance',
            'desc' => 'How to file claims fast, required documentation, dealing with claim adjusters, and contesting claim denials successfully.',
            'keywords' => 'insurance claims, file claim, claim settlement, claim adjuster, claim denial appeal'
        ],
        [
            'title' => 'Insurance Terminology & Technical Glossary',
            'url' => 'insurance/insurance-terms.php',
            'category' => 'Insurance',
            'desc' => 'Easy-to-understand definitions for essential insurance terms: rider, premium, endorsement, deductible, policyholder, rider.',
            'keywords' => 'insurance glossary, insurance terms, deductible definition, policy rider, underwriting'
        ],

        // Calculator Pages
        [
            'title' => 'Loan EMI Calculator - Instant Monthly Payment Estimate',
            'url' => 'calculators/loan-emi.php',
            'category' => 'Calculators',
            'desc' => 'Calculate your exact Equated Monthly Installments, total interest payable, and full loan payoff schedule instantaneously.',
            'keywords' => 'loan emi calculator, emi calculation, monthly loan installment, repayment calculator'
        ],
        [
            'title' => 'Personal Loan Payment Calculator',
            'url' => 'calculators/personal-loan.php',
            'category' => 'Calculators',
            'desc' => 'Estimate monthly payments and total borrowing costs for unsecured personal loans with custom interest rates and tenures.',
            'keywords' => 'personal loan calculator, unsecured loan calculation, monthly installment'
        ],
        [
            'title' => 'Home Loan & Mortgage EMI Calculator',
            'url' => 'calculators/home-loan.php',
            'category' => 'Calculators',
            'desc' => 'Plan your dream home financing with accurate mortgage estimates, principal-to-interest breakdowns, and tenure options.',
            'keywords' => 'home loan calculator, mortgage calculator, property loan emi, home financing'
        ],
        [
            'title' => 'Auto & Car Loan Payment Calculator',
            'url' => 'calculators/auto-loan.php',
            'category' => 'Calculators',
            'desc' => 'Determine your monthly vehicle payments based on purchase price, down payment, trade-in allowance, and interest rate.',
            'keywords' => 'auto loan calculator, car loan payment, vehicle financing calculator'
        ],
        [
            'title' => 'Compound Interest Calculator - Power of Compounding',
            'url' => 'calculators/compound-interest.php',
            'category' => 'Calculators',
            'desc' => 'Visualize how your initial deposit and regular contributions grow over time with daily, monthly, or annual compounding frequencies.',
            'keywords' => 'compound interest calculator, interest compounding, investment growth, future value'
        ],
        [
            'title' => 'Investment Growth & Yield Calculator',
            'url' => 'calculators/investment.php',
            'category' => 'Calculators',
            'desc' => 'Calculate projected future wealth across stocks, mutual funds, and fixed deposits with variable expected rates of return.',
            'keywords' => 'investment calculator, portfolio growth, wealth projections, return on investment'
        ],
        [
            'title' => 'Savings Goal & Growth Calculator',
            'url' => 'calculators/savings.php',
            'category' => 'Calculators',
            'desc' => 'Find out how long it will take to reach your target savings goal or how much you must save monthly to achieve it.',
            'keywords' => 'savings calculator, savings goal, deposit growth, emergency fund planner'
        ],
        [
            'title' => 'Credit Card Interest & Payoff Time Calculator',
            'url' => 'calculators/credit-card-interest.php',
            'category' => 'Calculators',
            'desc' => 'See how long it takes to clear credit card debt paying minimum balances versus fixed monthly payments, and how much interest you save.',
            'keywords' => 'credit card interest calculator, credit card payoff, balance repayment, credit debt'
        ],
        [
            'title' => 'Loan Affordability & Max Borrowing Calculator',
            'url' => 'calculators/loan-affordability.php',
            'category' => 'Calculators',
            'desc' => 'Input your gross monthly income and existing debt payments to discover your maximum safe borrowing limit based on debt ratios.',
            'keywords' => 'loan affordability calculator, max loan eligibility, borrowing capacity, debt ratio'
        ],

        // Article/Guide Pages
        [
            'title' => 'How to Create a Master Monthly Budget That Actually Works',
            'url' => 'articles/monthly-budget-guide.php',
            'category' => 'Guides',
            'desc' => 'A practical step-by-step tutorial to audit spending, categorize expenses, and implement stress-free monthly budgeting systems.',
            'keywords' => 'monthly budget guide, create budget, spending audit, budget template, personal budgeting'
        ],
        [
            'title' => 'How Credit Scores Work: The Ultimate Breakdown',
            'url' => 'articles/credit-score-guide.php',
            'category' => 'Guides',
            'desc' => 'Everything you need to know about FICO scoring models, payment history, credit mix, and hard inquiries.',
            'keywords' => 'how credit scores work, credit rating, credit factors, hard inquiry, fico score'
        ],
        [
            'title' => 'How Loan Interest Is Calculated: Simple vs Compound Amortization',
            'url' => 'articles/loan-interest-guide.php',
            'category' => 'Guides',
            'desc' => 'Understand mathematical formulas behind daily interest accrual, reducing balance methods, and nominal rates.',
            'keywords' => 'how loan interest is calculated, simple interest, compound amortization, APR formula'
        ],
        [
            'title' => 'Fixed vs Variable Interest Rates: Which Is Right for You?',
            'url' => 'articles/fixed-vs-variable-rate-guide.php',
            'category' => 'Guides',
            'desc' => 'Weighing the predictability of fixed interest rates against potential savings of variable rates in fluctuating market environments.',
            'keywords' => 'fixed vs variable interest, loan interest rate type, arm vs fixed rate'
        ],
        [
            'title' => 'How to Choose a Credit Card Aligned with Your Spending',
            'url' => 'articles/choose-credit-card-guide.php',
            'category' => 'Guides',
            'desc' => 'Avoid common card marketing traps and pick the ideal credit card for your lifestyle, credit score, and financial objectives.',
            'keywords' => 'how to choose a credit card, selecting credit card, card comparison, best credit card match'
        ],
        [
            'title' => 'How Life Insurance Works: Policies, Beneficiaries & Claims',
            'url' => 'articles/life-insurance-guide.php',
            'category' => 'Guides',
            'desc' => 'Demystifying underwriting, coverage multipliers based on income, and tax implications of life insurance payouts.',
            'keywords' => 'how life insurance works, life insurance policy guide, underwriting, beneficiary'
        ],
        [
            'title' => 'How Health Insurance Works: Navigating Deductibles & Coverage',
            'url' => 'articles/health-insurance-guide.php',
            'category' => 'Guides',
            'desc' => 'A plain-English guide to health coverage mechanics, network providers, preventive care, and out-of-pocket caps.',
            'keywords' => 'how health insurance works, medical insurance guide, deductible explained, copay vs coinsurance'
        ],
        [
            'title' => 'How to Compare Insurance Policies Like a Pro',
            'url' => 'articles/compare-insurance-guide.php',
            'category' => 'Guides',
            'desc' => 'Key metrics to analyze when comparing policy quotes: claim settlement ratios, exclusion clauses, and rider options.',
            'keywords' => 'compare insurance policies, policy comparison guide, claim settlement ratio, policy exclusions'
        ],
        [
            'title' => '10 Proven Tactics to Reduce Loan Interest Costs',
            'url' => 'articles/reduce-loan-interest-guide.php',
            'category' => 'Guides',
            'desc' => 'Actionable tips including bi-weekly payments, principal lump sums, rate negotiation, and refinancing tricks.',
            'keywords' => 'reduce loan interest, lower interest rate, pay off loan early, refinancing savings'
        ],
        [
            'title' => 'How to Build an Unshakeable Emergency Fund Fast',
            'url' => 'articles/build-emergency-fund-guide.php',
            'category' => 'Guides',
            'desc' => 'A realistic strategy to save $1,000 quickly, then build up 3-6 months of essential living expenses without extreme sacrifice.',
            'keywords' => 'build emergency fund, save emergency cash, rainy day savings, financial cushion'
        ]
    ];
}
