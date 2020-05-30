<?php include 'include/views/head.php'; ?>
    <body>
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedOutHeader.php' ?>
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "usertaken"){
                echo "<p>Användarnamnet finns redan, välj ett nytt</p>";
            }
            if($_GET['error'] == "emailtaken"){
                echo "<p>Email-adressen finns redan, välj en ny</p>";
            }
            if($_GET['error'] == "wrongemail"){
                echo "<p>Felaktig email-adress</p>";
            }
        }
        ?>
        <form method ="POST">
            <fieldset>
                <legend>Create a User</legend>
                <label for="username"> Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="email"> E-mail:</label><br>
                <input type="text" id="email" name="email"> <br>
                <label for="lösenord"> Password:</label><br>
                <input type="text" id="lösenord" name="lösenord"><br>
                <button name = "submit" onclick="<?php require 'include/models/Registration.php' ?>">Submit</button>                 
            </fieldset>
        </form>
        

    </body>
</html>
