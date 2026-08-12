<?php
define('FINWISE_APP', true);
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/seo.php';

$page_seo = [
    'title' => 'Travel Insurance: Trip Protection & Emergency Medical - FinWise',
    'description' => 'Protect international and domestic trips against cancellation, baggage loss, flight delays, and emergency medical evacuation.',
    'breadcrumbs' => ['Home' => 'index.php', 'Insurance' => 'insurance/index.php', 'Travel Insurance' => 'insurance/travel-insurance.php'],
    'faqs' => [['q' => 'What does "Cancel For Any Reason" (CFAR) travel insurance cover?', 'a' => 'CFAR is an optional add-on that allows you to cancel your trip for unlisted reasons and receive a 50% to 75% refund of prepaid non-refundable costs.']]
];
include __DIR__ . '/../components/header.php';
?>
<div class="page-header-banner">
    <div class="container">
        <?php include __DIR__ . '/../components/breadcrumbs.php'; ?>
        <h1>Travel Insurance & Trip Protection</h1>
        <p>Shield domestic and international travel against medical emergencies, flight cancellations, and lost luggage.</p>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="content-layout">
            <div class="article-body">
                <h2>International Travel Protection</h2>
                <p>Travel insurance provides essential financial security during overseas trips where primary health coverage does not apply, offering emergency medical evacuation, trip cancellation refunds, and baggage delay stipends.</p>
                <?php $faq_list = $page_seo['faqs']; include __DIR__ . '/../components/faq.php'; ?>
            </div>
            <div>
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Travel Resources</h4>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.5rem;">
                        <li><a href="../credit-cards/travel-cards.php">Travel Credit Cards</a></li>
                        <li><a href="health-insurance.php">Health Insurance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../components/footer.php'; ?>
