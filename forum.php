<?php include 'include/views/head.php'; ?>
    <body>
        <?php if(!isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedInHeader.php' ?>
        <form action="forum.php" method ="POST">
            <fieldset>
                <legend>Write a comment!</legend>
                <label for= "comment">  Skriv ditt meddelande: </label> <br>
                <textarea id ="comment" rows="10" cols="50" name="comment"></textarea>
            </fieldset>
            <button name = "skicka" >Posta</button> <br><br>

        </form>
        <?php
        if(isset($_POST['skicka']))
        {
            include("include/views/Kommentarer.php");
            include("include/views/VisaKommentarer.php");           
        }
        else
        {
            include("include/views/VisaKommentarer.php");
        }
        ?>

    </body>  
</html>