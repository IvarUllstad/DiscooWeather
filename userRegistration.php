<?php include 'include/views/head.php'; ?>
    <body>
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedOutHeader.php' ?>
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