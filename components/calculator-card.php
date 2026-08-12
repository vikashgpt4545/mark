<?php
/**
 * FinWise - Calculator Card Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
$calc_title = $calc['title'] ?? 'Financial Calculator';
$calc_desc = $calc['desc'] ?? '';
$calc_url = $calc['url'] ?? 'calculators/';
$calc_icon = $calc['icon'] ?? '🧮';
?>
<div class="calculator-card">
    <div style="font-size: 2rem; margin-bottom: 0.75rem; color: var(--clr-primary-accent);"><?php echo $calc_icon; ?></div>
    <h3><a href="<?php echo $root . ltrim($calc_url, '/'); ?>"><?php echo e($calc_title); ?></a></h3>
    <p><?php echo e($calc_desc); ?></p>
    <a href="<?php echo $root . ltrim($calc_url, '/'); ?>" class="btn btn-outline" style="width: 100%; font-size:0.875rem; padding:0.5rem;">
        Launch Calculator →
    </a>
</div>
