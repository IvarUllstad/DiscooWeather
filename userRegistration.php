<!DOCTYPE html>
    <html>
        <head>
            <title>DiscooWeather Homepage</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="discoCSS.css"/>
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
            <form action="Registration.php" method ="POST">
                <fieldset>
                    <legend>Create a User</legend>
                    <label for="username"> Username:</label><br>
                    <input type="text" id="username" name="username"><br>
                    <label for="email"> E-mail:</label><br>
                    <input type="text" id="email" name="email"> <br>
                    <label for="lösenord"> Password:</label><br>
                    <input type="text" id="lösenord" name="lösenord"><br>
                    
                </fieldset>
                <button onclick="Registrera()">Submit </button>                
            </form>
        </body>
    </html>
