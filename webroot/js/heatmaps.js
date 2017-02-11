// initialize leaflet map 
var map = L.map('map', {
    doubleClickZoom: false,
});

map.setView([35.2226, -97.4395], 7);

L.tileLayer('http://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
}).addTo(map);

var sidebar = L.control.sidebar('sidebar', {
    closeButton: true,
    position: 'left'
});


map.addControl(sidebar);

setTimeout(function() {
    sidebar.show();
}, 500);


map.on('click', function(e) {
    sidebar.show();
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    console.log("Lat, Lon : " + lat + ", " + lng);

});

// Heatmap Layers
var hm_met = L.heatLayer([
    [35.35635, -97.456397, 11111], // lat, lng, intensity
    [35.345635, -97.4397, 1111],
    [35.3456737, -97.56, 1111],
    [35.45684, -97.56, 1111],
    [35.4784, -97.456397, 1111],
    [35.47847, -97.4397, 1111],
    [35.4568, -97.56, 1111],
    [35.4784, -97.56, 1111],
    [35.46848, -97.456397, 1111],
    [35.3647, -97.4397, 1111],
    [35.367, -97.56, 1111],
    [35.5683874, -97.56, 1111]
], { radius: 25 }).addTo(map);

var hm_amateur = L.heatLayer([
    [36.368, -97.4395, 1111.7], 
    [36.90450, -97.876, 1111.7],
    [36.0896, -97.567, 1111.9],
    [36.680, -97.4397, 1111.9],
    [36.68, -97.56, 1111.9],
    [36.3336463, -97.456397, 1111.9],
    [36.115432, -97.4397, 1111.9],
    [36.3457, -97.56, 1111.9],
    [36.3738, -97.4397, 1111.9],
    [36.4844, -97.4397, 1111.7],
    [36.232226, -97.4397, 1111.7],
    [36.37367, -97.876, 1111.7],
    [36.2226, -97.567, 1111.9],
    [36.467, -97.4397, 1111.9],
    [36.52467226, -97.56, 1111.9]
], { radius: 25 }).addTo(map);

var amateur = document.getElementById('all_amateur');
var meteorologist = document.getElementById('all_meteorologists');
var both = document.getElementById('all_both');

$(document).ready(function() {
    $(amateur).change(
        function() {
            if ($(amateur).is(':checked')) {
                hm_amateur.addTo(map);
                hm_met.removeFrom(map);
            } else {

            }
        });
    $(meteorologist).change(
        function() {
            if ($(this).is(':checked')) {
                hm_met.addTo(map);
                hm_amateur.removeFrom(map);
            }
        });
    $(both).change(
        function() {
            if ($(this).is(':checked')) {
                hm_amateur.addTo(map);
                hm_met.addTo(map);
            }
        });

})

sidebar.on('show', function() {
    console.log('Sidebar will be visible.');
});

sidebar.on('shown', function() {
    console.log('Sidebar is visible.');
});

sidebar.on('hide', function() {
    console.log('Sidebar will be hidden.');
});

sidebar.on('hidden', function() {
    console.log('Sidebar is hidden.');
});

L.DomEvent.on(sidebar.getCloseButton(), 'click', function() {
    console.log('Close button clicked.');
});
