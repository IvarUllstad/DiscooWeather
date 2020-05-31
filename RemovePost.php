<!DOCTYPE html>
<html>
<?php
    include 'include/views/head.php';
    if ($_SESSION['ID'] == 10) 
    {

        echo' <form method ="POST">
            <fieldset>
                <legend>Ta bort inlägg</legend>
                <label for="email"> Ange PostId som du vill ta bort </label><br>
                <input type="text" id="ID" name="ID"> <br>
                <button type = "submit" id="submit" name = "submit">Submit</button>                 
            </fieldset>
        </form>';
    
        if(isset($_POST['submit']))
        {
            $ID = $_POST['ID'];
            $db = new SQLite3("./db/disco_database.db");
            $remove = $db->prepare('DELETE FROM Comments WHERE ID = :ID');
           
            $remove->bindParam(':ID', $ID, SQLITE3_TEXT);
            $getid = $remove->execute();
            echo "Borttagning lyckades!";

        }
        echo'<a href="forum.php"><button id="forum" >Forum</button></a>';

    }
         
else
{
    echo "Dra tillbaka där du kom ifrån";
    header ("Location: index.php?error=notadmin");  
} 
    
?>


