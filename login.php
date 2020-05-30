<?php require 'include/views/head.php'; ?>
    <body>
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php require 'include/views/loggedOutHeader.php' ?>
        <?php require 'include/models/validateLogin.php' ?>
        <form method="POST" action="./index.php">
            <fieldset>
                <legend>Logga in</legend>
                <label for="username"> Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password"> Password:</label><br>
                <input type="text" id="password" name="password"><br>
            </fieldset>
            <button type="submit" value="Submit">Logga in</button>
        </form>
    </body>
</html>