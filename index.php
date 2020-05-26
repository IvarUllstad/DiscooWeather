<!DOCTYPE html>
    <html>
        <head>
            <title>DiscooWeather Homepage</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="discoCSS.css"/>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
            integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
            crossorigin=""/>
            <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>
            <script type="text/javascript" src="JS.js"></script>
        </head>
        <body>
            <header>
                <a href="index.php"><h1>DiscooWeather</h1></a>
                <h3>Alltid redo för en runda!</h3>
            </header>
            <div>
                <a href="index.php"><button class="menuBtn">Startsida</button></a>
                <a href="userRegistration.php"><button class="menuBtn">Registrera</button></a>
                <a href="loggain.php"><button class="menuBtn">Logga in</button></a>
                <a href="forum.php"><button class="menuBtn">Forum</button></a>
                <a href="Weather.php"><button class="menuBtn">Weather</button></a>
            </div>
            <br>
            <br>
            <div class="top10table">
                HÄR SKA TOP 10 Närmsta discbanorna ligga!
            </div>
            <br>
            <div class="map" id="map">            
                <script>
                    var mymap = L.map('map').setView([62.85, 17.7], 4);
                    var marker = L.marker([65.8273707, 21.6915669]).addTo(mymap);
                    marker.bindPopup("Namn: Antal hål:");
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    maxZoom: 18,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'pk.eyJ1IjoibmVkaW5kZWwiLCJhIjoiY2thZjhjaDByMGZ3YzJxdGVvZng2d21kZCJ9.ohjAKkawBa-2Xn_XKKcsKQ'
                    }).addTo(mymap);
                </script>                              
            </div>
            <?php include 'GetMarkerInformation.php' ?>  
        </body>
    </html>
