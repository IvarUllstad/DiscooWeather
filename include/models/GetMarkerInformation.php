<?php   
    $db = new SQLite3("disco_database.db");
    $createMarker = $db->query("SELECT * FROM 'DiscBanorSwe' ORDER BY ID"); 

    while($uniqueMarker = $createMarker->fetchArray()){   
        echo $uniqueMarker['X-koordinat'];
        echo $uniqueMarker['Y-koordinat'];
        echo $uniqueMarker['Namn'];
        echo $uniqueMarker['Hål'];
        echo '<br>';
    }
    var_dump($uniqueMarker['X-koordinat']);
    var_dump($uniqueMarker['Y-koordinat']);
    var_dump($uniqueMarker['Namn']);
    var_dump($uniqueMarker['Hål']);
?>