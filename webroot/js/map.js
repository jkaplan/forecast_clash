var map = L.map('map', 
    {
        doubleClickZoom: false
    }
    );
map.setView([51.2, 7], 9);

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: 'Map data &copy; OpenStreetMap contributors'
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

    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    console.log("Lat, Lon : " + lat + ", " + lng);

    var marker = L.marker([lat, lng],
        {draggable: true}
        ).addTo(map).on('click', function() {
        sidebar.toggle();
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
