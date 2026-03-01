<?php if (!empty($product['detail_plans'])): ?>
<?php $plans = $product['detail_plans']; $colCount = count($plans['columns']); ?>
<div class="detail-plans-wrapper">
    <button class="detail-plans-toggle" type="button">
        <span>Detail Plans</span>
        <i class="fas fa-chevron-up"></i>
    </button>
    <div class="detail-plans-panel">
        <div class="detail-plans-inner">
            <!-- Badges -->
            <div class="detail-plans-badges">
                <?php foreach ($plans['badges'] as $badge): ?>
                <div class="dp-badge">
                    <?php if (stripos($badge, 'INSTALLATION') !== false): ?>
                    <i class="fas fa-cog"></i>
                    <?php elseif (stripos($badge, 'DELIVERY') !== false): ?>
                    <i class="fas fa-truck"></i>
                    <?php endif; ?>
                    <span><?= $badge ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($plans['group_label'])): ?>
            <div class="dp-group-label"><?= $plans['group_label'] ?></div>
            <?php endif; ?>

            <!-- Table -->
            <table class="detail-plans-table">
                <thead>
                    <!-- Header row (Outright / RTO group labels) -->
                    <?php
                        $hasHeaders = false;
                        foreach ($plans['columns'] as $col) {
                            if (!empty($col['header'])) { $hasHeaders = true; break; }
                        }
                    ?>
                    <?php if ($hasHeaders): ?>
                    <tr class="dp-header-group">
                        <th class="dp-label-cell"></th>
                        <?php foreach ($plans['columns'] as $col): ?>
                        <th class="dp-col-header"><?= $col['header'] ?? '' ?></th>
                        <?php endforeach; ?>
                    </tr>
                    <?php endif; ?>
                    <!-- Plans pricing row -->
                    <tr class="dp-header-plans">
                        <th class="dp-label-cell">Plans</th>
                        <?php foreach ($plans['columns'] as $col): ?>
                        <th class="dp-plan-cell">
                            <div class="dp-plan-price"><?= $col['label'] ?></div>
                            <?php if (!empty($col['sublabel'])): ?>
                            <div class="dp-plan-sub"><?= $col['sublabel'] ?></div>
                            <?php endif; ?>
                        </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($plans['rows'] as $row): ?>
                    <tr>
                        <td class="dp-label-cell"><?= $row['label'] ?></td>
                        <?php if (isset($row['value'])): ?>
                        <!-- Spanning value -->
                        <td colspan="<?= $colCount ?>" class="dp-value-cell dp-span">
                            <div><?= $row['value'] ?></div>
                            <?php if (!empty($row['note'])): ?>
                            <div class="dp-note"><?= $row['note'] ?></div>
                            <?php endif; ?>
                        </td>
                        <?php else: ?>
                        <!-- Per-column values -->
                        <?php foreach ($row['values'] as $val): ?>
                        <td class="dp-value-cell"><?= $val ?></td>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>
