<?php
/**
 * FinWise - Ad Slot Component
 * Serves banner advertisements across content hubs, sidebars, and homepage.
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$slot_name = $ad_slot_position ?? 'default';
?>
<div class="ad-slot-container ad-slot-<?php echo e($slot_name); ?>">
    <script async="async" data-cfasync="false" src="https://pl30814528.effectivecpmnetwork.com/3575d1b6473de5c91b6c6fdfc8ce1c54/invoke.js"></script>
    <div id="container-3575d1b6473de5c91b6c6fdfc8ce1c54"></div>
</div>
