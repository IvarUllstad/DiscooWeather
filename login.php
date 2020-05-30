<?php require 'include/views/head.php'; ?>
    <body>
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php require 'include/views/loggedOutHeader.php' ?>
        <form method="POST" action="./index.php">
            <fieldset>
                <legend>Logga in</legend>
                <label for="username"> Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password"> Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <button id="submitlogin" name = "submit">Submit</button>                 

            </fieldset>
<<<<<<< HEAD
            <button type="submit" value="Submit">Logga in</button>
=======
>>>>>>> b053711ab90b16d2b165a76b86d345402cb75583
        </form>
        <?php 
        if(isset($_POST['submit'])){
        include ("include/models/validateLogin.php");
        }
        ?>
    </body>
</html>