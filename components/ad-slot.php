<?php
/**
 * FinWise - Ad Slot Component
 * Configurable placeholder for AdSense or direct financial sponsor banners.
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$slot_name = $ad_slot_position ?? 'default';
$is_active = $GLOBALS['ad_slots_active'] ?? false; // Central toggle
?>
<?php if ($is_active): ?>
    <div class="ad-slot-container ad-slot-<?php echo e($slot_name); ?>">
        <div class="ad-label">Sponsored Advertisement</div>
        <!-- Insert Ad Network Tag Here -->
        <div class="ad-content-box" style="min-height: 90px; background: #e2e8f0; display:flex; align-items:center; justify-content:center; color:#64748b; font-size:0.85rem;">
            [Ad Placement: <?php echo e(strtoupper($slot_name)); ?>]
        </div>
    </div>
<?php endif; ?>
