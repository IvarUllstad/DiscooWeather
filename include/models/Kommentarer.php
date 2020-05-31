<?php
$comment = $_POST['comment'];
$picture = $_POST['bildInlägg'];
$användarnamn = $_SESSION['Username'];

if(trim($comment) != "" || trim($picture != ""))
    Kommentera($comment, $användarnamn, $picture);

function Kommentera($comment, $användarnamn, $picture)
{
    $db=new SQLite3("./db/disco_database.db");

    $sql="INSERT INTO Comments ('Kommentar', 'Användarnamn', 'Bild') VALUES (:comment, :användarnamn, :picture)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':comment', $comment, SQLITE3_TEXT);
    $stmt->bindParam(':användarnamn', $användarnamn, SQLITE3_TEXT);
    $stmt->bindParam(':picture', $picture, SQLITE3_TEXT);
    
    if($stmt->execute()){ 
        $db->close();
        echo "<label>Kommentar skickad!</label>";
        return true;
    }
    else{
        $db->close();
        return false ;  
    }
}
?>
