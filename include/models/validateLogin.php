<?php
$db = new SQLite3("./db/disco_database.db");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $getusername=$db->prepare('SELECT * FROM UserList WHERE Username = :username');
    $getusername->bindParam(':username', $_POST['username']);
    $userresult=$getusername->execute();
    $result = $userresult -> fetchArray(SQLITE3_ASSOC);
    if(password_verify($_POST['password'], $result['Lösenord'])){
        $_SESSION['Username']=$result['Username'];
        $_SESSION['ID'] = $result['ID'];
        $_SESSION['Roll'] =$result['Roll'];
        header("Location: ./index.php");
        exit();
    }
    else{
        echo" <label> Felaktiga inloggningsuppgifter </label>";
    }
}
?>