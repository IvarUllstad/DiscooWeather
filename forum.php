<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>DiscooWeather Homepage</title>
            <meta charset="UTF-8">
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

            <form action="Kommentarer.php" method ="POST">
                <fieldset>
                    <legend>Write a comment!</legend>
                    <label for= "comment">  Skriv ditt meddelande: </label> <br>
                    <textarea id ="comment" rows="10" cols="50" name="comment"></textarea>              
                </fieldset>
                <input type="submit" value="Submit">
            </form>
            <?php
            include_once("VisaKommentarer.php");
        ?>
        </body>  
</html>