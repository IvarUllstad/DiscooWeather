<?php include 'include/views/head.php'; ?>
    <body>
        <?php if(!isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedInHeader.php' ?>
        <?php include "include/models/validateLogin.php" ?>          
        <form action="include/views/Kommentarer.php" method ="POST">
            <fieldset>
                <legend>Write a comment!</legend>
                <label for= "comment">  Skriv ditt meddelande: </label> <br>
                <textarea id ="comment" rows="10" cols="50" name="comment"></textarea>              
            </fieldset>
            <input type="submit" value="Submit">
        </form>
        <?php include 'include/views/VisaKommentarer.php'; ?>
    </body>  
</html>