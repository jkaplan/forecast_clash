<!-- Started in stats_leaderboard.ctp -->
<div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
    <div class="card sameheight-item" data-exclude="xs">
        <div class="card-header card-header-sm bordered">
            <div class="header-block">
                <h4>Heatmaps</h4>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs pull-right" role="tablist">
                <li role="presentation" class="active"><a href="#heatmap_all" aria-controls="heatmap_all" role="tab" data-toggle="tab">All</a></li>
                <li role="presentation"><a href="#heatmap_team" aria-controls="heatmap_team" role="tab" data-toggle="tab">Dirty Steve and the Sea Rays</a></li>
                <li role="presentation"><a href="#heatmap_user" aria-controls="heatmap_user" role="tab" data-toggle="tab">Steve Miller</a></li>
            </ul>
        </div>
        <div class="card-block">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="heatmap_all">
                    <p>All Players</p>
                    <article class="heatmap">
                        <div id="sidebar">
                            <h4>Filter</h4>
                            <form action="" class="search-filter">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Date</strong></p>
                                        <div class="input-group input-daterange">
                                            <input type="text" class="form-control" value="01-01-2017">
                                            <div class="input-group-addon">to</div>
                                            <input type="text" class="form-control" value="01-02-2017">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="event-filters">
                                            <p><strong>Event</strong></p>
                                            <label for="tornado">
                                                <input id="tornado" type="radio" name="event" value="tornado"> Tornado
                                            </label>
                                            <label for="hail">
                                                <input id="hail" type="radio" name="event" value="hail"> Hail
                                            </label>
                                            <label for="wind">
                                                <input id="wind" type="radio" name="event" value="wind"> Wind
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="exp-filters">
                                            <p><strong>Experience Level</strong></p>
                                            <label for="amateur">
                                                <input id="all_amateur" type="radio" name="experience" value="amateur"> Amateur
                                            </label>
                                            <label for="meteorologists">
                                                <input id="all_meteorologists" type="radio" name="experience" value="meteorologists"> Meteorologists
                                            </label>
                                            <label for="both">
                                                <input id="all_both" type="radio" name="experience" value="both"> Both
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div id="map"></div>
                    </article>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="heatmap_team">
                        <p> Dirty Steve and the Sea Rays</p>
                        <!-- <div id="map_team"></div> -->
                    </div>
                    <div role="tabpanel" class="tab-pane" id="heatmap_user">
                        <p>Steve Miller</p>
                        <!--  <div id="map_user"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</article>
<link rel="stylesheet" href="webroot/css/datepicker.css">
<script src="webroot/js/datepicker.js"></script>
<script>
$('.input-daterange input').each(function() {
    $(this).datepicker({
        autoclose: true
    });
});
</script>
