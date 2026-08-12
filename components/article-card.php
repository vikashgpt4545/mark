<?php
/**
 * FinWise - Article / Guide Card Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$root = get_root_prefix();
$title = $art['title'] ?? '';
$desc = $art['desc'] ?? '';
$url = $art['url'] ?? '';
$category = $art['category'] ?? 'Guide';
$readTime = $art['read_time'] ?? '5 min read';
?>
<div class="article-card">
    <div class="article-card-body">
        <div class="article-meta">
            <span class="article-category"><?php echo e($category); ?></span>
            <span>•</span>
            <span><?php echo e($readTime); ?></span>
        </div>
        <h3 class="article-title">
            <a href="<?php echo $root . ltrim($url, '/'); ?>"><?php echo e($title); ?></a>
        </h3>
        <p class="article-excerpt"><?php echo e($desc); ?></p>
        <a href="<?php echo $root . ltrim($url, '/'); ?>" style="font-weight: 600; font-size: 0.9rem; margin-top: auto; display: inline-flex; align-items: center; gap: 0.25rem;">
            Read Guide →
        </a>
    </div>
</div>
