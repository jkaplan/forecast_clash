<?= $this->element('header'); ?>
<?= $this->element('sidebar'); ?>

<div class="sidebar-overlay" id="sidebar-overlay">
</div>  

<article class="content dashboard-page">
    <?= $this->element('stats_heatmap_leaderboard'); ?>
    <?= $this->element('stats_flot_bar'); ?>
</article>
