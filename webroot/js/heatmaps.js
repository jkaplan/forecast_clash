// All Players Heatmap

var map = L.map('map', {
    doubleClickZoom: false
});
map.setView([35.2226, -97.4395], 9); // will probably want to set view to user location if given

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
var amateur = document.getElementById('amateur');
var meteorologist = document.getElementById('meteorologist');
var both = document.getElementById('both');
console.log('test');

// // All Amateur Heatmap Points
// var heatmap_all_amateur = L.heatLayer([
//     [35.5226, -97.4395, 0.7], // lat, lng, intensity
//     [35.55, -97.876, 1.7],
//     [35.54, -97.567, 0.9],
//     [35.56, -97.4397, 0.9],
//     [35.54, -97.56, 0.9],
//     [35.54, -97.456397, 0.9],
//     [35.54, -97.4397, 0.9],
//     [35.54, -97.56, 0.9],
//     [35.565, -97.4397, 0.9],
//     [35.54, -97.4397, 0.7],
//     [35.44, -97.4397, 0.7]

// ], {
//     radius: 25
// }).addTo(map);

// // All Met Heatmap Points
// var heatmap_all_mets = L.heatLayer([
//     [35.2226, -97.4395, 0.7], // lat, lng, intensity
//     [35.7845, -97.876, 1.7],
//     [35.44, -97.567, 0.9],
//     [35.46, -97.4397, 0.9],
//     [35.544, -97.56, 0.9],
//     [35.44, -97.456397, 0.9],
//     [35.44, -97.4397, 0.9],
//     [35.44, -97.56, 0.9],
//     [35.565, -97.4397, 0.9],
//     [35.44, -97.4397, 0.7],
//     [35.44, -97.4397, 0.7]

// ], {
//     radius: 25
// }).addTo(map);

// // All Both Met/Amateur Heatmap Points
// var heatmap_all_both = L.heatLayer([
//     [35.2226, -97.4395, 0.7], // lat, lng, intensity
//     [35.45, -97.876, 1.7],
//     [35.44, -97.567, 0.9],
//     [35.46, -97.4397, 0.9],
//     [35.44, -97.56, 0.9],
//     [35.44, -97.456397, 0.9],
//     [35.44, -97.4397, 0.9],
//     [35.44, -97.56, 0.9],
//     [35.565, -97.4397, 0.9],
//     [35.44, -97.4397, 0.7],
//     [35.44, -97.4397, 0.7]

// ], {
//     radius: 25
// }).addTo(map);

