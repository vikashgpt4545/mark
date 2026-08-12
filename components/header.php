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
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <!-- Logo -->
        <a href="<?php echo $root; ?>index.php" class="brand-logo" title="FinWise Financial Insights">
            <div class="logo-icon">❖</div>
            <div>Fin<span class="accent">Wise</span></div>
        </a>

        <!-- Desktop Navigation -->
        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?php echo $root; ?>index.php" class="nav-link">Home</a>
                </li>
                <?php foreach ($nav as $key => $item): ?>
                    <li class="nav-item">
                        <a href="<?php echo $root . ltrim($item['url'], '/'); ?>" class="nav-link">
                            <?php echo e($item['title']); ?>
                            <?php if (!empty($item['sub'])): ?>▾<?php endif; ?>
                        </a>
                        <?php if (!empty($item['sub'])): ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($item['sub'] as $subTitle => $subUrl): ?>
                                    <li class="dropdown-item">
                                        <a href="<?php echo $root . ltrim($subUrl, '/'); ?>">
                                            <?php echo e($subTitle); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- Search & Actions -->
        <div class="header-actions">
            <form action="<?php echo $root; ?>search.php" method="GET" class="search-form-header">
                <span class="search-icon">🔍</span>
                <input type="text" name="q" placeholder="Search guides, tools..." required>
            </form>
            <button class="mobile-toggle" aria-label="Toggle navigation menu">☰</button>
        </div>
    </div>
</header>
