<?php include 'include/views/head.php'; ?>
    <body>     
        <?php if(isset($_SESSION['Username'])){
            include 'include/views/loggedInHeader.php' ;
        }
        else{
            include 'include/views/loggedOutHeader.php' ;
        }  
        ?>
        <div class="top10table">
            <?php include 'include/models/weatherAPI.php'; ?>
        </div><br>
        <div class="map" id="map">   
            <script>
                var mymap = L.map('map').setView([64.85, 16.7], 5);
                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',{
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoibmVkaW5kZWwiLCJhIjoiY2thZjhjaDByMGZ3YzJxdGVvZng2d21kZCJ9.ohjAKkawBa-2Xn_XKKcsKQ'
                }).addTo(mymap);

                

                /*map.on('popupopen', function(e){
                    var popup = e.popup;
                    popup.setContent('coordinates: ' + popup.getLatLng().lng + '/'¨+ popup.getLatLng().lat);
                });*/

                

                
            </script>';   
            
            <?php   
                $db = new SQLite3("db/disco_database.db");
                $createMarker = $db->query("SELECT * FROM 'DiscBanorSwe' ORDER BY ID"); 

                while($uniqueMarker = $createMarker->fetchArray()){
                
                    echo'
                    <script>
                        var marker = L.marker(["'.$uniqueMarker['X-koordinat'].'","'.$uniqueMarker['Y-koordinat'].'"]).addTo(mymap);
                        marker.bindPopup("'.$uniqueMarker['Namn'].'");
                        
                    </script>';
                }
            ?>
            
        </div>       
    </body>
</html>
