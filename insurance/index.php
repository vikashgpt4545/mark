<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Insurance Protection & Coverage Center - FinWise',
    'description' => 'Comprehensive information on life, health, auto, bike, travel, home, and business insurance policies and premium calculations.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php'],
    'faqs' => [
        ['q' => 'Why is insurance an essential part of financial planning?', 'a' => 'Insurance transfers high-impact financial risks (such as medical emergencies, house fires, or loss of income) to an insurer in exchange for predictable premium payments, preserving your accumulated net worth.']
    ]
];

include __DIR__ . '/../components/header.php';
?>

<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Insurance Protection & Coverage Center</h1>
        <p>Protect your life, health, vehicle, home, and business with unbiased policy guides and premium advice.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Defensive Wealth Protection Framework</h2>
                <p>Accumulating wealth is only half the financial battle—protecting your capital against unforeseen illness, accidents, natural disasters, and liability claims is equally critical. Explore our comprehensive insurance resource portals below.</p>

                <div class="article-grid" style="margin: 2rem 0;">
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="life-insurance.php">Life Insurance Guide</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Term vs Whole life policies, beneficiary protection, and coverage multipliers.</p>
                        <a href="life-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Life Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="health-insurance.php">Health Insurance Guide</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Deductibles, copays, out-of-pocket maximums, HMO vs PPO network structures.</p>
                        <a href="health-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Health Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="car-insurance.php">Car & Auto Insurance</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Liability, collision, comprehensive, zero-depreciation riders, and claims.</p>
                        <a href="car-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Car Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="bike-insurance.php">Bike & Motorcycle Insurance</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Third-party requirements vs comprehensive two-wheeler policy coverage.</p>
                        <a href="bike-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Bike Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="travel-insurance.php">Travel Insurance</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Trip cancellation, flight delay, medical evacuation, and lost luggage cover.</p>
                        <a href="travel-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Travel Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="home-insurance.php">Home & Property Insurance</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Dwelling, personal property, hazard, and personal liability protection.</p>
                        <a href="home-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Home Insurance →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="business-insurance.php">Business Insurance</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">General liability, professional liability (E&O), and commercial property cover.</p>
                        <a href="business-insurance.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Explore Business Cover →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="insurance-premium.php">Insurance Premium Factors</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">How underwriting pricing works and practical tactics to lower premium costs.</p>
                        <a href="insurance-premium.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Lower Your Premium →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="insurance-claims.php">Claims Filing Guide</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Step-by-step claims filing, adjuster negotiations, and contesting denials.</p>
                        <a href="insurance-claims.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Filing Claims Guide →</a>
                    </div>
                    <div class="article-card" style="padding: 1.5rem; background:#fff;">
                        <h3 style="font-size:1.15rem; margin-bottom:0.5rem;"><a href="insurance-terms.php">Insurance Technical Terms</a></h3>
                        <p style="font-size:0.875rem; color:var(--clr-text-muted);">Glossary of deductibles, copays, riders, endorsements, and underwriting terms.</p>
                        <a href="insurance-terms.php" style="font-weight:600; font-size:0.85rem; margin-top:0.75rem; display:inline-block;">Insurance Glossary →</a>
                    </div>
                </div>

                <h2>Frequently Asked Insurance Questions</h2>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>

            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Insurance Tools</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="life-insurance.php">Life Insurance Guide</a></li>
                        <li><a href="health-insurance.php">Health Insurance Guide</a></li>
                        <li><a href="insurance-claims.php">Claims Process</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
