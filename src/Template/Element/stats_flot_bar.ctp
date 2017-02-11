<script src="webroot/js/jquery.flot.min.js"></script>
<script src="webroot/js/jquery.flot.categories.min.js"></script>
<script src="webroot/js/jquery.flot.pie.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){




    $(function() {

        var data = [ ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9] ];

        $.plot("#placeholder", [ data ], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.6,
                    align: "center"
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            }
        });

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });

});
</script>


<!-- Started in stats_leaderboard.ctp -->
<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
        <div class="card sameheight-item" data-exclude="xs">
            <div class="card-header card-header-sm bordered">
                <div class="header-block">
                    <h4>Charts</h4>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs pull-right" role="tablist">
                    <li role="presentation" class="active all-tab"><a href="#heatmap_all" aria-controls="heatmap_all" role="tab" data-toggle="tab">All Players</a></li>
                    <li role="presentation" class="team-tab"><a href="#heatmap_team" aria-controls="heatmap_team" role="tab" data-toggle="tab">Dirty Steve and the Sea Rays</a></li>
                    <li role="presentation" class="user-tab"><a href="#heatmap_user" aria-controls="heatmap_user" role="tab" data-toggle="tab">Steve Miller</a></li>
                </ul>
            </div>
            <div class="card-block">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Pie Chart Example </h3>
                                        </div>
                                        <section class="example">
                                            <div class="flot-chart">
                                                <div class="flot-chart-pie-content" id="flot-pie-chart"></div>
                                            </div>
                                        </section>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Started in stats_leaderboard.ctp -->
</section>
</article>






















