<?php session_start();
if(!isset($_SESSION['Username'])||$_SESSION['Username']===false){
header("./index.php?error=mustlogin");
exit();
}
else{
  $db=new SQLite3("./db/disco_database.db");

  $results = $db->query("SELECT * FROM 'Comments' ORDER BY ID");
  
  while($row = $results->fetchArray())
  {
    echo $row['ID'];
    echo '<br>';
    echo $row['Kommentar'];
    echo '<br>';
  }
}
?>