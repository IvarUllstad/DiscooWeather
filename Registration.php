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
    $stmt->bindParam(':email', $mail, SQLITE3_TEXT);
    $stmt->bindParam(':lösenord', $lösenord, SQLITE3_TEXT);
    

}

?>
