<div class="sidebar-overlay" id="sidebar-overlay">
</div>  <script src="webroot/js/heatmap.js"></script>
<article class="content dashboard-page">
    <!-- Ends on stats_heatmap.ctp -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <h1>Stats and Leaderboards</h1>
            </div>
        </div>
        <div class="row sameheight-container">
            <!-- Started in stats_leaderboard.ctp -->
            <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                <div class="card sameheight-item" data-exclude="xs">
                    <div class="card-header card-header-sm bordered">
                        <div class="header-block">
                            <h4>Heatmaps</h4>
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
                                <article class="heatmap">
                                    <div id="sidebar">
                                        <h4>Filter</h4>
                                        <form action="" class="search-filter">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <strong>Date</strong>
                                                    <label for="input_from">From</label>
                                                    <fieldset>
                                                        <input type="text" id="input_from">
                                                    </fieldset>
                                                    <label for="input_tom">To</label>
                                                    <fieldset>
                                                        <input type="text" id="input_to">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="event-filters">
                                                        <strong>Event</strong>
                                                        <div class="can-toggle can-toggle--size-small">
                                                            <input id="tornado" type="checkbox">
                                                            <label for="tornado">
                                                                <div class="can-toggle__label-text">Tornado</div>
                                                                <div class="can-toggle__switch tornado-switch" data-checked="On" data-unchecked="Off"></div>
                                                            </label>
                                                        </div>
                                                        <div class="can-toggle can-toggle--size-small">
                                                            <input id="hail" type="checkbox">
                                                            <label for="hail">
                                                                <div class="can-toggle__label-text">Hail</div>
                                                                <div class="can-toggle__switch hail-switch" data-checked="On" data-unchecked="Off"></div>
                                                            </label>
                                                        </div>
                                                        <div class="can-toggle can-toggle--size-small">
                                                            <input id="wind" type="checkbox">
                                                            <label for="wind">
                                                                <div class="can-toggle__label-text">Wind</div>
                                                                <div class="can-toggle__switch wind-switch" data-checked="On" data-unchecked="Off"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="exp-filters">
                                                        <p><strong>Experience</strong></p>
                                                        <div class="can-toggle can-toggle--size-small">
                                                            <input id="amateur" type="checkbox">
                                                            <label for="amateur">
                                                                <div class="can-toggle__label-text">Enthusiasts</div>
                                                                <div class="can-toggle__switch enthusiasts-switch" data-checked="On" data-unchecked="Off"></div>
                                                            </label>
                                                        </div>
                                                        <div class="can-toggle can-toggle--size-small">
                                                            <input id="mets" type="checkbox">
                                                            <label for="mets">
                                                                <div class="can-toggle__label-text">Meteorologists</div>
                                                                <div class="can-toggle__switch mets-switch" data-checked="On" data-unchecked="Off"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="map"></div>
                                </article>
                            </div>
                            <!-- <div role="tabpanel" class="tab-pane" id="heatmap_team">
                        <div id="map_team"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="heatmap_user">
                         <div id="map_user"></div>
                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-7 history-col">
            <div class="card sameheight-item" data-exclude="xs">
                <div class="card-header card-header-sm bordered">
                    <div class="header-block">
                        <h4>Leaderboards</h4>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs pull-right" role="tablist">
                        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Players</a></li>
                        <li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">Dirty Steve and the Sea Rays</a></li>
                    </ul>
                </div>
                <div class="card-block">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="all">
                            <table class="table table-striped table-bordered table-hover flip-content">
                                <thead class="flip-header">
                                    <tr>
                                        <th>Rank</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                        <th>Tornado MoE</th>
                                        <th>Wind MoE</th>
                                        <th>Hail MoE</th>
                                        <th>Total Moe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>2</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>4</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>5</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>6</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>7</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>8</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>9</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>10</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="team">
                            <table class="table table-striped table-bordered table-hover flip-content">
                                <thead class="flip-header">
                                    <tr>
                                        <th>Rank</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                        <th>Tornado MoE</th>
                                        <th>Wind MoE</th>
                                        <th>Hail MoE</th>
                                        <th>Total Moe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>2</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>3</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>4</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>5</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>6</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>367.5 miles</td>
                                        <td>367.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>7</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>8</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>9</td>
                                        <td>Bob</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>10</td>
                                        <td>Sam</td>
                                        <td>16382</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                        <td>27.5 miles</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <?= $this->Html->script('heatmaps'); ?>
<link rel="stylesheet" href="webroot/css/default.css">
<link rel="stylesheet" href="webroot/css/default.date.css">
<script src="webroot/js/picker.js"></script>
<script src="webroot/js/picker.date.js"></script>
<script>
// Pickadate - http://amsul.ca/pickadate.js/date/

// $('.datepicker').pickadate({
//     max: 0
// });

var from_$input = $('#input_from').pickadate(),
    from_picker = from_$input.pickadate('picker')

var to_$input = $('#input_to').pickadate(),
    to_picker = to_$input.pickadate('picker')


// Check if there’s a “from” or “to” date to start with.
if (from_picker.get('value')) {
    to_picker.set('min', from_picker.get('select'))
}
if (to_picker.get('value')) {
    from_picker.set('max', to_picker.get('select'))
}

// When something is selected, update the “from” and “to” limits.
from_picker.on('set', function(event) {
    if (event.select) {
        to_picker.set('min', from_picker.get('select'))
    } else if ('clear' in event) {
        to_picker.set('min', false)
    }
})
to_picker.on('set', function(event) {
        if (event.select) {
            from_picker.set('max', to_picker.get('select'))
        } else if ('clear' in event) {
            from_picker.set('max', false)
        }
    })
    // Bootstrap Tab Events




$('a[role="tab"]').on('shown.bs.tab', function(e) {

    e.target; // newly activated tab
    e.relatedTarget; // previous active tab

    console.log(e.target);
    console.log(e.relatedTarget);
});
</script>

<!-- Continued on stats_flot_bar.ctp -->
