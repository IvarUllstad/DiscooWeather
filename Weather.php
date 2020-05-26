<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>City weather</title>
        <link rel="stylesheet" type="text/css" href="discoCSS.css"/>
    </head>
    <body>
    <header>
                <a href="index.html"><h1>DiscooWeather</h1></a>
                <h3>Alltid redo för en runda!</h3>
            </header>
            <div>
                <a href="index.HTML"><button class="menuBtn">Startsida</button></a>
                <a href="userRegistration.html"><button class="menuBtn">Registrera</button></a>
                <a href="loggain.html"><button class="menuBtn">Logga in</button></a>
                <a href="forum.html"><button class="menuBtn">Forum</button></a>
                <a href="Weather.php"><button class="menuBtn">Weather</button></a>

            </div>
            <br>
            <br>

        <h1>Välj en stad!</h1>
        <form method="POST" action="Weather.php">
        <input type="text" name="stad" placeholder="Välj stad">
        <button type="submit">Submit</button><br>
        </form>
        <div class="top10table">
        <ul>
            <?php 
            if(isset($_POST['stad'])){
                weather();
            }
            function weather(){
                $city = $_POST['stad'];
                $url = "http://api.openweathermap.org/data/2.5/find?q=$city&units=metric&type=accurate&mode=xml&APPID=1407925d5eb998aa25042dffa58983c5";
                $getweather = simplexml_load_file($url);
                $gettemp = $getweather->list->item->temperature['value'];
                $getspeed = $getweather->list->item->wind->speed['value'];
                $getcloud = $getweather->list->item->weather['value'];
                $getprecipitation = $getweather->list->item->precipitation['mode'];
                $getlastupdate = $getweather->list->item->lastupdate['value'];
                  

                echo "<p style='color:green; font-size:30px;'>", $city, "</p>";
                echo "<li style='color:red; font-size:20px;'>", 'Temperaturen är: ', ($gettemp), ' grader celsius', "</li>"; 
                echo "<li style='color:red; font-size:20px;'>", 'Vindhastigheten är: ', ($getspeed), ' m/s', "</li>"; 
                echo "<li style='color:red; font-size:20px;'>", 'Vädret är: ', ($getcloud), "</li>"; 
                echo "<li style='color:red; font-size:20px;'>", 'Nederbörd: ', ($getprecipitation), "</li>"; 
                echo "<li style='color:red; font-size:20px;'>", 'Senaste uppdateringen: ', ($getlastupdate), "</li>"; 
            }
            ?>
        </ul>
        </div>
    </body>

</html>