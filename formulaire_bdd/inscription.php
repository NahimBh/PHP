<?php 
session_start();
?>

<?php
    if(isset($_GET['error']))
    {
        echo "Login déjà utilisé";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
    </head>
<body>
    
<form method="post" action="insertion.php">
<label for="login">Login :</label>
<input type="text" id="login" name="login" value="">
    
<label for="mdp">MDP :</label>
<input type="password" id="mdp" name="mdp" value="">
    
<input type="submit" id="bouton" name="bouton" value="S'inscrire"> 
</form>
</body>
</html>