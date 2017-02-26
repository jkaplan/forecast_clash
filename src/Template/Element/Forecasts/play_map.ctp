<style>
.container-fluid {
    padding-left: 0;
    padding-right: 0;
}

</style>
<article class="play-container">
    <div id="play-sidebar">
        <div class="container-fluid sidebar-header">
            <h4>Welcome to Forecast Clash</h4>
        </div>
        <div class="sidebar-content">
            <div class="instructions">
                <h5><strong>Instructions</strong></h5>
                <ul>
                    <li>Here you will select your severe weather event forecasts.</li>
                    <li>Forecasts are selected for events any day in the following 8 days, AM or PM.</li>
                    <li>Forecasts can be updated as often as you choose.</li>
                </ul>
                <h5><strong>Scoring</strong></h5>
                <ul>
                    <li>Points are scored by distance from reported event location and your forecast location.</li>
                    <li>The earlier you select your forecast, the more points you will receive.</li>
                </ul>
                <p>Press the <i class="fa fa-question" aria-hidden="true"></i> see these instructions again.</p>
            </div>
            <div class="scoring">
                <p>Click the icon to the right followed by a point on the map .</p>
                <i class="fa fa-question" aria-hidden="true"></i>
                <!-- Nav tabs -->
                <div>
                   
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tornado-control">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="search-filter forecast-tornado" id="forecastForm">
                                        <h4><span class="forecast-type">Tornado</span> Forecast</h4>
                                        <fieldset>
                                            <label for="latlng">Lat/Lng</label>
                                            <input id="latlng" name="location" type="text" value="">
                                        </fieldset>
                                        <fieldset>
                                            <label for="event_date">Date</label>
                                            <input type="text" name="forecast_date" class="datepicker" id="event_date">
                                        </fieldset>
                                        <fieldset class="time">
                                            <h5><strong>Time</strong></h5>
                                            <label for="am">AM</label>
                                            <input type="radio" name="am_pm" id="am" value="0">
                                            <br>
                                            <label for="pm">PM</label>
                                            <input type="radio" name="am_pm" id="pm" value="1">
                                        </fieldset>
                                        <input type="radio" class="" name="weather_event_id" id="tornado-event" value="1">
                                        <input type="radio" class="" name="weather_event_id" id="hail-event" value="2">
                                        <input type="radio" class="" name="weather_event_id" id="wind-event" value="3">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-footer">
            <button class="btn btn-primary scoring-btn">To Forecast</button>
            <input class="btn btn-primary forecast-btn login" type="submit" value="Make Your Forecast" id="forecast">
        </div>
    </div>
    <div id="map"></div>
</article>
<link rel="stylesheet" href="webroot/css/leaflet.awesome-markers.css">
<?= $this->Html->script('L.Control.Sidebar'); ?>
<?= $this->Html->script('play_map'); ?>
<?= $this->Html->script('leaflet.awesome-markers.min'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet-easybutton@2.0.0/src/easy-button.css">
<script src="https://unpkg.com/leaflet-easybutton@2.0.0/src/easy-button.js"></script>
<link rel="stylesheet" href="webroot/css/default.css">
<link rel="stylesheet" href="webroot/css/default.date.css">
<script src="webroot/js/picker.js"></script>
<script src="webroot/js/picker.date.js"></script>
<script>
// Get tomorrows date for min date
var tomorrow = new Date();
var dd_tomorrow = tomorrow.getDate() + 1;
var mm_tomorrow = tomorrow.getMonth() + 1; //January is 0!
var yyyy_tomorrow = tomorrow.getFullYear();

if (dd_tomorrow < 10) {
    dd_tomorrow = '0' + dd_tomorrow
}

if (mm_tomorrow < 10) {
    mm_tomorrow = '0' + mm_tomorrow
}

// Get 8 days out for max date
var event_week = new Date();
var dd_week = event_week.getDate() + 8;
var mm_week = event_week.getMonth() + 1; //January is 0!
var yyyy_week = event_week.getFullYear();

if (dd_week < 10) {
    dd_week = '0' + dd_week
}

if (mm_week < 10) {
    mm_week = '0' + mm_week
}

tomorrow = mm_tomorrow + '/' + dd_tomorrow + '/' + yyyy_tomorrow;
console.log('Tomorrow:' + tomorrow);
event_week = mm_week + '/' + dd_week + '/' + yyyy_week;
console.log('Week:' + event_week);

// Pickadate - http://amsul.ca/pickadate.js/date/

$('.datepicker').pickadate({
    min: new Date(tomorrow),
    max: new Date(event_week),
    format: 'mmmm d, yyyy',
    closeOnSelect: false
});


// Bootstrap Tab Events


</script>
