<header>
    <a href="index.php"><h1>DiscooWeather</h1></a>
    <h3>Alltid redo för en runda!</h3>
</header>
<div class="knappMeny">
    <a href="index.php"><button class="menuBtn">Startsida</button></a>
    <button class="menuBtn" id="gråKnapp">Registrera</button>
    <button name="logout" class="menuBtn" onclick="logout()">Logga ut</button>
    <a href="forum.php"><button class="menuBtn">Forum</button></a>
</div>
<?php
function logout(){
    session_start();
    session_destroy();
    header("Location: ./index.php");
}
?>