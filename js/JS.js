function CreateMarkers(){
    var marker = L.marker([65.8273707, 21.6915669]).addTo(mymap);
    marker.bindPopup("Namn: Antal hål:");
}

function CreateMap(){
    var mymap = L.map('map').setView([59.85, 17.7], 10);
    var marker = L.marker([59.85, 17.7]).addTo(mymap);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',{
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibmVkaW5kZWwiLCJhIjoiY2thZjhjaDByMGZ3YzJxdGVvZng2d21kZCJ9.ohjAKkawBa-2Xn_XKKcsKQ'
    }).addTo(mymap);
}

// SKIT I DENNA RACKARUSING