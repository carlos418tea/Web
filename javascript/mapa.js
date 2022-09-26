const tilesProvider = '	https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png' 

let myMap = L.map('myMap').setView([39.93982, -0.10055], 13);

L.tileLayer(tilesProvider, {
    maxZoom: 18,
}).addTo(myMap);

myMap.on('click', function(e){
    var pixelPosition = e.layerPoint;
    var latLng = myMap.layerPointToLatLng(pixelPosition);
        alert('Position = ' + pixelPosition + '\n LatLng = ' + latLng);    
});

L.Routing.control({
    waypoints: [L.latLng(39.93982, -0.10055), L.latLng(40.410882, -3.700001)],
    routeWhileDragging: true
}).addTo(myMap);
