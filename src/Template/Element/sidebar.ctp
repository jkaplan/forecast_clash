<aside class="sidebar-navigation">
    <div class="sidebar-container">
        <div class="sidebar-navigation-header">
            <span class="hidden-lg hidden-md">
                <span class="mobile-nav-close">
                    <i class="fa fa-times" aria-hidden="true"><span class="close-label">Close</span></i>
                </span>
            </span>
            <div class="brand">
                <a href="#" class="logo"><?= $this->Html->image('logo-light-blue.png', ['alt' => 'Forecast Clash Logo']) ?></a>
            </div>
        </div>
        <nav class="menu">
            <ul class="nav metismenu" id="sidebar-menu">
                <li>
                    <a href="/forecast_clash"> <i class="fa fa-gamepad"></i> Play </a>
                </li>
                <li class="active">
                    <a href="/forecast_clash/pages/stats"> <i class="fa fa-bar-chart"></i> Leaderboard </a>
                </li>
                <li>
                    <a href="team.php"> <i class="fa fa-users" aria-hidden="true"></i> Team </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<script>
$(document).ready(function() {
        $("#sidebar-collapse-btn").click(function(){
    $(".mobile-nav-close").fadeIn(3000);
});

});
</script>