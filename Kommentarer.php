<?php session_start();?>
<link rel="stylesheet" type="text/css" href="discoCSS.css"/>
<?php


$comment = $_POST['comment'];
Kommentera($comment);

function Kommentera($comment)
{
    $db=new SQLite3("./db/Users.db");

    $sql="INSERT INTO Comments (Kommentar)
    VALUES (:comment)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);
    
    if($stmt->execute())
    { 
        $db->close();
        echo "Kommentar skickad!";
        echo ' <a href="Forum.php">Gå tillbaka</a>';
        return true;
        

    }
    else
    {
        $db->close();
        return false ;              
    }

}

?>
