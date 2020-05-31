<?php include 'include/views/head.php'; 
if ( $_SESSION['Roll'] == "mod") 
{
   echo '<a href="RemovePost.php"> <button method ="POST" type ="submit" id="RemovePost" name="RemovePost">Ta bort inlägg</button></a>';
}
?>



    <body>
        <?php if(!isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedInHeader.php' ?>
        <fieldset>
            <form action="forum.php" method ="POST"> 
                <legend>Posta ett inlägg!</legend><br>
                <textarea id="comment" rows="10" cols="50" name="comment"></textarea><br>
                <label >Lägg till en bild:</laberl>
                <input type="file" id="fil" name="bildInlägg" accept="image/gif, image/jpeg, image/png"><br><br> 
                <button name="skicka" >Posta</button> <br><br>              
            </form>
            <form action="forum.php" method ="POST">
                <input type="text" name ="sökord" placeholder="Ange sökord"><br>
                <button id="sökordKnapp" name="sök">Leta efter sökord</button>
            </form>
        </form>
        </fieldset><br>
        <?php
        if(isset($_POST['skicka'])){
            include("include/models/Kommentarer.php");
            include("include/views/VisaKommentarer.php");           
        }
        else if(isset($_POST['sök']))
            include("include/views/VisaKommentarer.php");   
        else
            include("include/views/VisaKommentarer.php");
        ?>
    </body>  
</html>