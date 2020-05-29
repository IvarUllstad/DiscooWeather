<?php 
if(!isset($_SESSION['Username'])||$_SESSION['Username']===false){
header("./index.php?error=mustlogin");
exit();
}
else{
  $db=new SQLite3("./db/disco_database.db");

  $results = $db->query("SELECT * FROM 'Comments' ORDER BY ID");
  
  while($row = $results->fetchArray())
  {
      echo "<div class='kommentarbox'>";
      echo "Användarnamn: ";
      echo $_SESSION['username'];
      echo '<br>';
      echo "Email: ";
      echo $_SESSION['email'];
      echo'<br>_________________________________________________________________<br>' ;
      echo "Kommentar: ";
      echo $row['Kommentar'];
      echo '<br><br><br>';
      echo "</div>";
  }
}
?>