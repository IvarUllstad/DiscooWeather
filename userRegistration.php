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
<<<<<<< HEAD
                <button name = "submit" >Submit</button>                 
            </fieldset>
        </form>
        <?php
        if(isset($_POST['skicka']))
        {
        include("Registration.php");
        }
        ?>
=======
                <button name = "submit">Submit</button>                 
            </fieldset>
        </form>
        <?php require 'include/models/Registration.php' ?>
        
>>>>>>> 1f3c035307f08b3c73d70513fc95f8a7f9203556

    </body>
</html>
