<link rel="stylesheet" type="text/css" href="discoCSS.css"/>
<?php
$username = $_POST['username'];
$email = $_POST['email'];
$lösenord = $_POST['lösenord'];
$hashed = password_hash($lösenord, PASSWORD_DEFAULT);
Registrera($username, $email, $hashed);

function Registrera($username, $email, $hashed)
{
    $db=new SQLite3("./db/disco_database.db");
    $valid = true;

    $getname = $db->prepare('SELECT Username FROM UserList WHERE Username = :username');
    $getname->bindParam(':username', $_POST['username']);
        
    $userresult = $getname->execute();
    $bindresult = $userresult->fetchArray(SQLITE3_ASSOC);
    if(!$bindresult === false){
            
        $valid = false;
    
        header("Location http://localhost/Projektuppgift/DiscooWeather/Registration.php?error=usertaken");
        exit();
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        
        $valid = false;
        header("Location http://localhost/Projektuppgift/DiscooWeather/Registration.php?error=wrongemail");
        exit();
    }
    else{
        $getemail = $db->prepare('SELECT Email FROM UserList WHERE Email = :email');
        $getemail->bindParam(':email', $_POST['email']);
        
        $result = $getemail->execute();
        $finalresult = $result->fetchArray(SQLITE3_ASSOC);
        
        if(!$finalresult === false){
            
            $valid = false;
            
            header("Location http://localhost/Projektuppgift/DiscooWeather/Registration.php?error=emailtaken");
            exit();
        }
    }
    if($valid){

    

    $sql="INSERT INTO UserList (Username, Email, Lösenord)
    VALUES (:username, :email, :lösenord)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':email', $email, SQLITE3_TEXT);
    $stmt->bindParam(':lösenord', $hashed, SQLITE3_TEXT);
    
    if($stmt->execute())
    { 
        $db->close();
        echo "Ditt konto är nu skapat, klicka här för att logga in"; 
        echo ' <a href="loggain.php">Logga in</a>';
        return true;
    }
    else
    {
        $db->close();
        return false ;              
    }

}
}

?>
