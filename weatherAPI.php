
<!DOCTYPE HTML>

<?php

  $city = $_POST['stad'];
$url = "http://api.openweathermap.org/data/2.5/find?q=$city&units=metric&type=accurate&mode=xml&APPID=1407925d5eb998aa25042dffa58983c5";
$getweather = simplexml_load_file($url);
$gethumidity = $getweather->list->item->humidity['value'];
$gettemp = $getweather->list->item->temperature['value'];
$getspeed = $getweather->list->item->wind->speed['value'];
$getcloud = $getweather->list->item->weather['value'];
$getprecipitation = $getweather->list->item->precipitation['mode'];
$getlastupdate = $getweather->list->item->lastupdate['value'];


?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>City weather</title>
        <link rel="stylesheet" type="text/css" href="discoCSS.css"/>
    </head>
    <body>
        <h1>Välj en stad!</h1>
        <form method="POST">
        <input type="text" name="stad" placeholder="Välj stad">
        <button type="submit">Submit</button><br>
        </form>
        <div class="top10table">
        <ul>
            <?php echo "<p style='color:green; font-size:30px;'>", $city, "</p>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Luftuktigheten är: ', ($gethumidity), "</li>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Temperaturen är: ', ($gettemp), ' grader celsius', "</li>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Vindhastigheten är: ', ($getspeed), ' m/s', "</li>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Vädret är: ', ($getcloud), "</li>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Nederbörd: ', ($getprecipitation), "</li>"; ?>
            <?php echo "<li style='color:red; font-size:20px;'>", 'Senaste uppdateringen: ', ($getlastupdate), "</li>"; ?>
            
        </ul>
        </div>
    </body>

</html>