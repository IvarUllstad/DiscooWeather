<?php 
  if(!isset($_SESSION['Username'])||$_SESSION['Username']===false){
    header("./index.php?error=mustlogin");
    exit();
  } 
  else{
    $db=new SQLite3("./db/disco_database.db");


    if($sökord == "")
        $results = $db->query("SELECT * FROM 'Comments' ORDER BY ID");
    else
        $results = $db->query("SELECT * FROM 'Comments' WHERE Kommentar LIKE '%$sökord%'"); 
  
    $count = 0;
    while($row = $results->fetchArray())
    {
      if(!$row['Bild'] == "")
        $bild = "<img id='kommentarBild' src='img/commentPictures/$row[Bild]'>";
      else
        $bild = "";

        echo "<div class='kommentarbox'>";
        echo "Användarnamn: ";
        echo $row['Användarnamn'];
        echo '<br>';
        echo "KommentarsID: ";
        echo $row['ID'];
        echo '<br>_________________________________________________________________<br><br>';
        echo "Kommentar: ";
        echo $row['Kommentar'];
        echo '<br><br>';
        echo $bild;
        echo "</div>";
        $count ++;
    }
    if($count == 0)
      echo '<label>Inget inlägg matchade tyvärr sökordet :(</label>';
  }
?>