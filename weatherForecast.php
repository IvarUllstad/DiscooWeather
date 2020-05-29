<!DOCTYPE HTML> 
<html>
    <head>

    </head>
    <body>
    <h1>Välj en plats!</h1>
    <form method="POST">
        <input type="text" name="latitud" placeholder="Välj latitud"><br>
        <input type="text" name="longitud" placeholder="Välj longitud">
        <button type="submit">Submit</button><br>
    </form>
    <div class="top10table">
        <ul>
            <?php
            if(isset($_POST['latitud']) && isset($_POST['longitud'])){
                weatherforecast();
            }
            function weatherforecast(){
                $longitud = $_POST['longitud'];
                $latitud = $_POST['latitud'];
                //$json = file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=$latitud&lon=$longitud&
                //exclude=hourly&appid=4f7d232c3905970a64641def6fb34710");
                //$data = json_decode($json, true);
            
                $urlforcast="http://api.openweathermap.org/data/2.5/forecast/daily?lat=$latitud&lon=$longitud&units=metric&cnt=5&appid=4f7d232c3905970a64641def6fb34710";
                $json = file_get_contents($urlforcast);
                $data = json_decode($json,true);
                foreach($data['list'] as $day => $value) { 
                $desc = $value['weather'][0]['description'];
                $max_temp = $value['temp']['max'];
                $min_temp = $value['temp']['min'];
                $pressure = $value['pressure'];

                var_dump($desc);
                var_dump($max_temp);
                var_dump($min_temp);
                var_dump($pressure);


                //var_dump($data);
                //$getweatherforecast = simplexml_load_file($url);

                
                


            }





            ?>
        </ul>
        </div>



    </body>
</html>