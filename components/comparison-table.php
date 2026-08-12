<?php
/**
 * FinWise - Comparison Table Component
 */
if (!defined('FINWISE_APP')) {
    require_once __DIR__ . '/../config/config.php';
}

$headers = $matrix['headers'] ?? ['Product', 'Key Features', 'Rates / Fees', 'Best For'];
$rows = $matrix['rows'] ?? [];
?>
<div class="table-responsive">
    <table class="comparison-table">
        <thead>
            <tr>
                <?php foreach ($headers as $th): ?>
                    <th><?php echo e($th); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <?php foreach ($row as $td): ?>
                        <td><?php echo $td; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
