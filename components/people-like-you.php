<?php
/**
 * FinWise - People Like You & Global Distribution Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="people-like-you-wrapper">
    <div style="margin-bottom:1.25rem;">
        <h3 class="col-title" style="margin:0;">People Like You</h3>
        <p style="font-size:0.8rem; color:#94a3b8; margin-top:0.2rem;">Compare your profile with relevant benchmark groups</p>
    </div>

    <!-- 4 Position Cards Grid -->
    <div class="peer-benchmark-cards-grid">
        <div class="peer-card-item">
            <div class="peer-card-cat">INCOME</div>
            <div id="peer-status-inc" class="peer-card-status status-above">ABOVE BENCHMARK</div>
            <div class="peer-card-sub">Top Earning Bracket</div>
        </div>

        <div class="peer-card-item">
            <div class="peer-card-cat">SAVINGS</div>
            <div id="peer-status-sav" class="peer-card-status status-similar">SIMILAR BENCHMARK</div>
            <div class="peer-card-sub">10% - 20% Net Savings</div>
        </div>

        <div class="peer-card-item">
            <div class="peer-card-cat">DEBT</div>
            <div id="peer-status-debt" class="peer-card-status status-above">LOWER BENCHMARK</div>
            <div class="peer-card-sub">Controlled Liabilities</div>
        </div>

        <div class="peer-card-item">
            <div class="peer-card-cat">INVESTMENTS</div>
            <div id="peer-status-inv" class="peer-card-status status-dev">DEVELOPING</div>
            <div class="peer-card-sub">Asset Accumulation</div>
        </div>
    </div>

    <!-- Global Distribution Section -->
    <div style="margin-top:2rem;">
        <h4 class="col-title" style="font-size:0.95rem; margin-bottom:0.75rem;">Global Distribution</h4>
        
        <!-- Multi-colored Segmented Distribution Bar -->
        <div class="global-dist-bar-large">
            <div id="dist-seg-1" class="dist-seg-lg seg-poor" style="width:12%;">POOR</div>
            <div id="dist-seg-2" class="dist-seg-lg seg-below" style="width:20%;">BELOW AVG</div>
            <div id="dist-seg-3" class="dist-seg-lg seg-avg" style="width:36%;">AVERAGE</div>
            <div id="dist-seg-4" class="dist-seg-lg seg-above active-user-seg" style="width:20%;">ABOVE AVG</div>
            <div id="dist-seg-5" class="dist-seg-lg seg-excellent" style="width:12%;">EXCELLENT</div>
        </div>

        <div class="global-dist-labels">
            <span>Poor</span>
            <span>Below Average</span>
            <span>Average</span>
            <span>Above Average</span>
            <span>Excellent</span>
        </div>
    </div>
</div>
