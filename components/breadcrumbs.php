<?php
/**
 * FinWise - Breadcrumbs Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
$items = $breadcrumbs ?? ['Home' => $root . 'index.php'];
?>
<nav class="breadcrumbs" aria-label="Breadcrumb navigation">
    <?php 
    $count = count($items);
    $i = 0;
    foreach ($items as $name => $link): 
        $i++;
        $isLast = ($i === $count);
    ?>
        <?php if ($isLast): ?>
            <span><?php echo e($name); ?></span>
        <?php else: ?>
            <a href="<?php echo (strpos($link, 'http') === 0) ? e($link) : $root . ltrim($link, '/'); ?>">
                <?php echo e($name); ?>
            </a>
            <span class="separator">/</span>
        <?php endif; ?>
    <?php endforeach; ?>
</nav>
