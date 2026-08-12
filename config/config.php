<?php
/**
 * FinWise - Core Configuration File
 * Global settings, URLs, site metadata, and configuration helpers.
 */

// Prevent direct script access if needed
if (!defined('FINWISE_APP')) {
    define('FINWISE_APP', true);
}

// Site Details
define('SITE_NAME', 'FinWise');
define('SITE_TAGLINE', 'Smart Financial Decisions Start Here');
define('SITE_DESCRIPTION', 'Empowering your monetary journey with expert guides, real-time calculators, loan comparisons, credit card insights, and comprehensive insurance strategies.');

// Dynamic Base URL detection
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_name = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_path = rtrim($script_name, '/') . '/';
// Normalize base path if in root
if ($base_path === '//' || $base_path === '/') {
    $base_path = '/';
}
define('SITE_URL', rtrim($protocol . $host . $base_path, '/') . '/');
define('BASE_PATH', __DIR__ . '/../');

// Database credentials (for safe dynamic content / search fallback)
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'finwise_db');

// Enable error reporting in development, disable in production
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

// Navigation Structure for Header & Footer
$GLOBALS['main_navigation'] = [
    'finance' => [
        'title' => 'Finance',
        'url' => '/finance/',
        'sub' => [
            'Personal Finance' => '/finance/personal-finance.php',
            'Budgeting Strategies' => '/finance/budgeting.php',
            'Saving Money' => '/finance/saving-money.php',
            'Banking Guide' => '/finance/banking.php',
            'Investing Basics' => '/finance/investing-basics.php',
            'Financial Planning' => '/finance/financial-planning.php',
            'Emergency Fund' => '/finance/emergency-fund.php',
            'Tax Basics' => '/finance/tax-basics.php',
        ]
    ],
    'loans' => [
        'title' => 'Loans',
        'url' => '/loans/',
        'sub' => [
            'Personal Loans' => '/loans/personal-loans.php',
            'Home Loans' => '/loans/home-loans.php',
            'Auto Loans' => '/loans/auto-loans.php',
            'Business Loans' => '/loans/business-loans.php',
            'Education Loans' => '/loans/education-loans.php',
            'Loan EMI Guide' => '/loans/loan-emi.php',
            'Interest Rates Explained' => '/loans/loan-interest.php',
            'Loan Eligibility' => '/loans/loan-eligibility.php',
            'Repayment Strategies' => '/loans/loan-repayment.php',
        ]
    ],
    'credit_cards' => [
        'title' => 'Credit Cards',
        'url' => '/credit-cards/',
        'sub' => [
            'Best Credit Cards' => '/credit-cards/best-credit-cards.php',
            'Cashback Cards' => '/credit-cards/cashback-cards.php',
            'Rewards Cards' => '/credit-cards/rewards-cards.php',
            'Travel Cards' => '/credit-cards/travel-cards.php',
            'Student Cards' => '/credit-cards/student-cards.php',
            'Credit Card Fees' => '/credit-cards/credit-card-fees.php',
            'Interest Rates & APR' => '/credit-cards/credit-card-interest.php',
            'Credit Score Guide' => '/credit-cards/credit-score.php',
            'Credit Utilization' => '/credit-cards/credit-utilization.php',
        ]
    ],
    'insurance' => [
        'title' => 'Insurance',
        'url' => '/insurance/',
        'sub' => [
            'Life Insurance' => '/insurance/life-insurance.php',
            'Health Insurance' => '/insurance/health-insurance.php',
            'Car Insurance' => '/insurance/car-insurance.php',
            'Bike Insurance' => '/insurance/bike-insurance.php',
            'Travel Insurance' => '/insurance/travel-insurance.php',
            'Home Insurance' => '/insurance/home-insurance.php',
            'Business Insurance' => '/insurance/business-insurance.php',
            'Insurance Premiums' => '/insurance/insurance-premium.php',
            'Claims Guide' => '/insurance/insurance-claims.php',
            'Insurance Terms Glossary' => '/insurance/insurance-terms.php',
        ]
    ],
    'calculators' => [
        'title' => 'Calculators',
        'url' => '/calculators/',
        'sub' => [
            'Loan EMI Calculator' => '/calculators/loan-emi.php',
            'Personal Loan Calculator' => '/calculators/personal-loan.php',
            'Home Loan Calculator' => '/calculators/home-loan.php',
            'Auto Loan Calculator' => '/calculators/auto-loan.php',
            'Compound Interest Calculator' => '/calculators/compound-interest.php',
            'Investment Calculator' => '/calculators/investment.php',
            'Savings Calculator' => '/calculators/savings.php',
            'Credit Card Interest Calculator' => '/calculators/credit-card-interest.php',
            'Loan Affordability Calculator' => '/calculators/loan-affordability.php',
        ]
    ],
    'articles' => [
        'title' => 'Guides',
        'url' => '/articles/',
        'sub' => []
    ]
];
