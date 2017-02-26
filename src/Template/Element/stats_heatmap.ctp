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
            <li role="presentation"><a href="#heatmap_team" aria-controls="heatmap_team" role="tab" data-toggle="tab">Dirty Steve and the Sear Rays</a></li>
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
                            <p>Experience Level</p>
                            <label for="amateur">
                                <input type="radio" name="experience" value="amateur"> Amateur
                            </label>
                            <label for="meteorologists">
                                <input type="radio" name="experience" value="meteorologists"> Meteorologists
                            </label>
                            <label for="both">
                                <input type="radio" name="experience" value="both"> Both
                            </label>
                        </form>
                    </div>
                    <div id="map"></div>
                </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="heatmap_team">
                <p> Dirty Steve and the Sea Rays</p>
                <article>
                    <div id="sidebar_team">
                        <h4>Filter</h4>
                        <form action="" class="search-filter">
                            <p>Experience Level</p>
                            <label for="amateur">
                                <input type="radio" name="experience" value="amateur"> Amateur
                            </label>
                            <label for="meteorologists">
                                <input type="radio" name="experience" value="meteorologists"> Meteorologists
                            </label>
                            <label for="both">
                                <input type="radio" name="experience" value="both"> Both
                            </label>
                        </form>
                    </div>
                    <!-- <div id="map_team"></div> -->
                </article>
            </div>
            <div role="tabpanel" class="tab-pane" id="heatmap_user">
                <p>Steve Miller</p>
                <article>
                    <div id="sidebar_user">
                        <h4>Filter</h4>
                        <form action="" class="search-filter">
                            <p>Experience Level</p>
                            <label for="amateur">
                                <input type="radio" name="experience" value="amateur"> Amateur
                            </label>
                            <label for="meteorologists">
                                <input type="radio" name="experience" value="meteorologists"> Meteorologists
                            </label>
                            <label for="both">
                                <input type="radio" name="experience" value="both"> Both
                            </label>
                        </form>
                    </div>
                   <!--  <div id="map_user"></div> -->
                </article>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>
</article>



