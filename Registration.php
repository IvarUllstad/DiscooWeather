<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
Registrera($username, $email, $password);

function Registrera($username, $email, $password)
{
    $db=new SQLite3("Users.db");

    $sql="INSERT INTO UserList (Username, Email, Lösenord)
    VALUES (:username, :email, :password)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':email', $mail, SQLITE3_TEXT);
    $stmt->bindParam(':password', $password, SQLITE3_TEXT);
    if($stmt -> execute())
    {
        
        $db -> close();
        return true;
    }
    else
    {
        $db -> close();
        return false ;              
    }

}

?>
