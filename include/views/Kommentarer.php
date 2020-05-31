<?php
$comment = $_POST['comment'];
$användarnamn = $_SESSION['Username'];
Kommentera($comment, $användarnamn);

function Kommentera($comment, $användarnamn)
{
    $db=new SQLite3("./db/disco_database.db");

    $sql="INSERT INTO Comments ('Kommentar', 'Användarnamn') VALUES (:comment, :användarnamn)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);
    $stmt->bindParam(':användarnamn', $användarnamn, SQLITE3_TEXT);
    
    if($stmt->execute()){ 
        $db->close();
        echo "Kommentar skickad!";
        return true;
    }
    else{
        $db->close();
        return false ;  
    }
}
?>
