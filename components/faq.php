<?php
/**
 * FinWise - FAQ Accordion Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$faqs = $faq_list ?? [];
?>
<?php if (!empty($faqs)): ?>
    <div class="faq-accordion">
        <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <button class="faq-question">
                    <span><?php echo e($faq['q']); ?></span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p><?php echo $faq['a']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
