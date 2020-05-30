<?php require 'include/views/head.php'; ?>
    <body>
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php require 'include/views/loggedOutHeader.php' ?>
        <form method="POST">
            <fieldset>
                <legend>Logga in</legend>
                <label for="username"> Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password"> Password:</label><br>
                <input type="password" id="password" name="password"><br>
            </fieldset>
            <button id="submitlogin" name = "submit">Logga in</button>   
        </form>
        <?php 
        if(isset($_POST['submit'])){
        include ("include/models/validateLogin.php");
        }
        ?>
    </body>
</html>