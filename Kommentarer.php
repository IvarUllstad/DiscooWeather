<link rel="stylesheet" type="text/css" href="discoCSS.css"/>
<?php


$comment = $_POST['comment'];
Kommentera($comment);

function Kommentera($comment)
{
    $db=new SQLite3("Users.db");

    $sql="INSERT INTO Comments (Kommentar)
    VALUES (:comment)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);
    
    if($stmt->execute())
    { 
        $db->close();
        
        return true;
    }
    else
    {
        $db->close();
        return false ;              
    }

}

?>
