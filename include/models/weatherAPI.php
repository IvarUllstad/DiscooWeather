<?php
    echo'<h3>Välj Discgolfbana!</h3>
    <form method="POST">
    <input type="text" name="discbana" placeholder="Skriv in banans namn!"><br>
    <button name="submit" type="submit">Visa väder</button><br>';


    $db = new SQLite3("db/disco_database.db");
    

    $getlatlng = $db->prepare('SELECT * FROM DiscBanorSwe WHERE Namn  = :discbana');
    $getlatlng->bindParam(':discbana', $_POST['discbana']);
    $result = $getlatlng->execute();

    $hashed2 = $result->fetchArray(SQLITE3_ASSOC);
    $lat = $hashed2['X-koordinat'];
    $lng = $hashed2['Y-koordinat']; 

    if($_POST['discbana'] !== $hashed2['Namn']){
        header("Location: ./index.php?error=notexist");
        exit();
    }
    

    if(isset($_POST['submit'])){
    
                
            
    $url = "http://api.openweathermap.org/data/2.5/find?lat=$lat&lon=$lng&units=metric&type=accurate&mode=xml&APPID=1407925d5eb998aa25042dffa58983c5";
    $getweather = simplexml_load_file($url);
    $gethumidity = $getweather->list->item->humidity['value'];
    $gettemp = $getweather->list->item->temperature['value'];
    $getspeed = $getweather->list->item->wind->speed['value'];
    $getcloud = $getweather->list->item->weather['value'];
    $getprecipitation = $getweather->list->item->precipitation['mode'];
    
  

    $urlforcast="http://api.openweathermap.org/data/2.5/forecast?lat=$lat&lon=$lng&units=metric&cnt=5&appid=4f7d232c3905970a64641def6fb34710";
              
        $json = file_get_contents($urlforcast);
        $clima = json_decode($json,true);
        //var_dump($clima);
        
    
    echo "<p>Vädret idag!</p>";
    echo "<li>", 'Luftuktigheten är: ', ($gethumidity), "</li>";
    echo "<li>", 'Temperaturen är: ', ($gettemp), ' grader celsius', "</li>";
    echo "<li>", 'Vindhastigheten är: ', ($getspeed), ' m/s', "</li>";
    echo "<li>", 'Vädret är: ', ($getcloud), "</li>";
    echo "<li>", 'Nederbörd: ', ($getprecipitation), "</li>";
    echo "<p>5-dagars prognos!</p>";       

    foreach($clima['list'] as $data) { 
        echo "<li>", 'Temperaturen uppskattas vara: ', $data['main']['temp']. ' grader celcius', "</li>";
        echo "<li>", 'Vindhastigheten uppskattas vara: ', $data['wind']['speed']. ' m/s', "</li>";
        echo "<li>", 'Vädret uppskattas vara: ', $data['weather'][0]['description']. "</li><br>";
                        
                        
    }
}
?>