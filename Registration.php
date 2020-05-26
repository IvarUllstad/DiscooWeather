<?php


$username = $_POST['username'];
$email = $_POST['email'];
$lösenord = $_POST['lösenord'];
Registrera($username, $email, $lösenord);

function Registrera($username, $email, $lösenord)
{
    $db=new SQLite3("Users.db");

    $sql="INSERT INTO UserList (Username, Email, Lösenord)
    VALUES (:username, :email, :lösenord)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':email', $email, SQLITE3_TEXT);
    $stmt->bindParam(':lösenord', $lösenord, SQLITE3_TEXT);
    
    if($stmt->execute())
    { 
        $db->close();
        echo "Ditt konto är nu skapat, klicka här för att logga in"; 
        echo ' <a href="loggain.html">Logga in</a>';

        
        return true;
    }
    else
    {
        $db->close();
        return false ;              
    }

}

?>
