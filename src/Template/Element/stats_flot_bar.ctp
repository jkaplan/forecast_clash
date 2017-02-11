<script src="webroot/js/jquery.flot.min.js"></script>
<script src="webroot/js/jquery.flot.categories.min.js"></script>
<script src="webroot/js/jquery.flot.pie.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    $(function() {

        var data = [ ["Tornado", 10], ["Hail", 8], ["Wind", 4]];

        $.plot("#flot-pie-chart", [ data ], {
            series: {
                bars: {
                    show: true,
                    barWidth: .7,
                    align: "center",
                    fillColor: "rgb(61, 182, 239)",
                    hightlightColor: "rgb(61,182,239)",
                    lineWidth: 0
                }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0,
                color: 'rgb(61, 182, 239)'
            },
        });

    });


    var xaxisLabel = $("<div class='axisLabel xaxisLabel'></div>").text("Weather Event").appendTo($('.flot-chart'));

    var yaxisLabel = $("<div class='axisLabel yaxisLabel'></div>").text("Miles from Target").appendTo($('.flot-chart'));
    // yaxisLabel.css("margin-top", yaxisLabel.width() / 2 - 20);

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
<!--                                         <label class="y-axis-label">Miles from Event Location</label>
 -->                                            <div class="flot-chart">
                                                <div class="flot-chart-pie-content" id="flot-pie-chart"></div>
<!--                                                 <label class="x-axis-label">Weather Event</label>
 -->                                            </div>
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














