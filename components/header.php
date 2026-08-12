<?php
/**
 * FinWise - Header Component
 */

if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
$nav = $GLOBALS['main_navigation'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    if (class_exists('SEO')) {
        SEO::render($page_seo ?? []);
    }
    ?>
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/style.css">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💎</text></svg>">
    <!-- Social Bar Ad Script -->
    <script type="text/javascript" src="//pl30814529.effectivecpmnetwork.com/41/bc/0a/41bc0afe84453a88eeb84609d49e78d4.js"></script>
</head>
<body>

<header class="site-header">
    <div class="container container-wide header-inner">
        <!-- Logo -->
        <a href="<?php echo $root; ?>" class="brand-logo" title="FinWise Financial Intelligence">
            <div class="logo-icon">❖</div>
            <div>Fin<span class="accent">Wise</span></div>
        </a>

        <!-- Navigation Links -->
        <nav>
            <ul class="nav-menu">
                <li class="nav-item"><a href="<?php echo $root; ?>finance/" class="nav-link">Finance</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>loans/" class="nav-link">Loans</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>credit-cards/" class="nav-link">Credit Cards</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>insurance/" class="nav-link">Insurance</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>finance/investing-basics.php" class="nav-link">Investing</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>calculators/" class="nav-link">Calculators</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>articles/" class="nav-link">Guides</a></li>
                <li class="nav-item"><a href="<?php echo $root; ?>about.php" class="nav-link">About</a></li>
            </ul>
        </nav>

        <!-- Search & Position CTA -->
        <div class="header-actions">
            <form action="<?php echo $root; ?>search.php" method="GET" class="search-form-header">
                <span class="search-icon">🔍</span>
                <input type="text" name="q" placeholder="Search tools..." required>
            </form>
            <a href="<?php echo $root; ?>#hero-snapshot-widget" class="btn btn-emerald" style="padding:0.45rem 0.9rem; font-size:0.85rem;">Check Your Position</a>
            <button class="mobile-toggle" aria-label="Toggle navigation menu">☰</button>
        </div>
    </div>
</header>
