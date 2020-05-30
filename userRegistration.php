<?php include 'include/views/head.php'; ?>

    <body>
        
        <?php if(isset($_SESSION['Username'])) header('Location: index.php') ?>
        <?php include 'include/views/loggedOutHeader.php' ?>
       
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "usertaken"){
                echo "<p>Användarnamnet finns redan, välj ett nytt</p>";
                
            }
            if($_GET['error'] == "emailtaken"){
                echo "<p>Email-adressen finns redan, välj en ny</p>";
                
            }
            if($_GET['error'] == "wrongemail"){
                echo "<p>Felaktig email-adress</p>";
                
            }
        }
        ?>
        <form method ="POST">
            <fieldset>
                <legend>Create a User</legend>
                <label for="username"> Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="email"> E-mail:</label><br>
                <input type="text" id="email" name="email"> <br>
                <label for="lösenord"> Password:</label><br>
                <input type="text" id="lösenord" name="lösenord"><br>
                <button id="submitregister" name = "submit">Submit</button>                 
            </fieldset>
        </form>
        
        
    <script type="text/javascript">


    document.getElementById("submitregister").addEventListener("click", function(event){
    let checkname = document.getElementById("username").value;
    let checkemail = document.getElementById("email").value;
    var checkAt = checkemail.includes("@");           
    var checkDot = checkemail.includes(".");
    
    checkname = checkname.replace(/^\s+/, '').replace(/\s+$/, '');
    
    if(checkname === ''){
        alert("Namnrutan får inte vara tom");
        event.preventDefault();
    }
    else if(!checkAt || !checkDot){
            
        alert("Ej giltig email-adress");
        event.preventDefault();
    }
   
    
});


</script>

<?php 
if(isset($_POST['submit'])){
    include ("include/models/Registration.php");
}

 ?>
        

    </body>
</html>
