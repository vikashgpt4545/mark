<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Travel & Airline Credit Cards Unlocked - FinWise',
    'description' => 'Airline miles, hotel upgrades, airport lounge access, zero foreign transaction fees, and trip insurance benefits.',
    'breadcrumbs' => ['Home' => 'index.php', 'Credit Cards' => 'credit-cards/index.php', 'Travel Cards' => 'credit-cards/travel-cards.php'],
    'faqs' => [['q' => 'What is a foreign transaction fee?', 'a' => 'A foreign transaction fee is a 1% to 3% surcharge added by banks when making purchases outside your home country. Dedicated travel cards waive this fee completely.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Travel & Airline Credit Cards</h1>
        <p>Unlock airport lounges, airline miles, hotel upgrades, and zero foreign transaction fees.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>Premium Travel Benefits</h2>
                <p>Travel credit cards reward frequent flyers and vacationers with point multipliers, free checked bags, priority boarding, Global Entry/TSA PreCheck fee credits, and comprehensive trip interruption coverage.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Travel Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../insurance/travel-insurance.php">Travel Insurance</a></li>
                        <li><a href="rewards-cards.php">Rewards Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
