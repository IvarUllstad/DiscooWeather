<?php

$db=new SQLite3("Users.db");

$results = $db->query("SELECT * FROM 'Comments' ORDER BY ID");

while($row = $results->fetchArray())
{
  echo $row['ID'];
  echo '<br>';
  echo $row['Kommentar'];
  echo '<br>';
}

?>