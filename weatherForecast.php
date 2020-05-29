<?php
            
    $longitud = $_POST['longitud'];
    $latitud = $_POST['latitud'];
                
            
    $urlforcast="http://api.openweathermap.org/data/2.5/forecast?lat=$latitud&lon=$longitud&units=metric&cnt=5&appid=4f7d232c3905970a64641def6fb34710";
              
    $json = file_get_contents($urlforcast);
    $clima = json_decode($json,true);
    //var_dump($clima);
    foreach($clima['list'] as $data) { 
        echo $data['main']['temp']. "<br>";
        echo $data['wind']['speed']. "<br>";
        echo $data['weather'][0]['description']. "<br>";
                        
                        
    }
    
?>
        