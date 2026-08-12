<?php
/**
 * FinWise - People Like You & Global Distribution Sub-Component
 */

if (!defined('FINWISE_APP')) {
    die('Direct access forbidden.');
}
?>
<div class="people-like-you-wrapper">
    <h4 class="col-title">People Like You</h4>

    <div class="peer-mini-cards-grid">
        <div class="peer-mini-card">
            <div id="peer-val-more" class="peer-mini-val" style="color:#34d399;">32%</div>
            <div class="peer-mini-lbl">Earn More</div>
            <div class="peer-mini-icon">👥</div>
        </div>

        <div class="peer-mini-card">
            <div id="peer-val-less" class="peer-mini-val" style="color:#fbbf24;">35%</div>
            <div class="peer-mini-lbl">Earn Less</div>
            <div class="peer-mini-icon">👥</div>
        </div>

        <div class="peer-mini-card">
            <div id="peer-val-similar" class="peer-mini-val" style="color:#38bdf8;">18%</div>
            <div class="peer-mini-lbl">Same Level</div>
            <div class="peer-mini-icon">👥</div>
        </div>

        <div class="peer-mini-card">
            <div class="peer-mini-val" style="color:#94a3b8;">15%</div>
            <div class="peer-mini-lbl">No Data</div>
            <div class="peer-mini-icon">👥</div>
        </div>
    </div>

    <!-- Global Distribution Section -->
    <div style="margin-top:1.5rem;">
        <h4 class="col-title" style="margin-bottom:0.75rem;">Global Distribution</h4>
        
        <!-- Multi-colored Segmented Distribution Bar -->
        <div class="global-dist-bar">
            <div class="dist-seg seg-poor" style="width:10%;">10%</div>
            <div class="dist-seg seg-below" style="width:22%;">22%</div>
            <div class="dist-seg seg-avg" style="width:36%;">36%</div>
            <div class="dist-seg seg-above" style="width:22%;">22%</div>
            <div class="dist-seg seg-excellent" style="width:10%;">10%</div>
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
