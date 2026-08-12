<?php
/**
 * FinWise - Category Card Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
$cat_name = $cat['name'] ?? '';
$cat_desc = $cat['desc'] ?? '';
$cat_url = $cat['url'] ?? '';
$cat_icon = $cat['icon'] ?? '📊';
$cat_type = $cat['type'] ?? 'finance';
$cat_list = $cat['items'] ?? [];
?>
<div class="niche-card">
    <div class="niche-icon <?php echo e($cat_type); ?>"><?php echo $cat_icon; ?></div>
    <h3 class="niche-title"><?php echo e($cat_name); ?></h3>
    <p class="niche-desc"><?php echo e($cat_desc); ?></p>
    
    <?php if (!empty($cat_list)): ?>
        <ul class="niche-list">
            <?php foreach ($cat_list as $item): ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="<?php echo $root . ltrim($cat_url, '/'); ?>" class="btn btn-primary" style="width: 100%; margin-top: auto;">
        Explore <?php echo e($cat_name); ?> →
    </a>
</div>
