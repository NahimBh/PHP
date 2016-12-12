<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
    </head>
<body>
    
<form method="post" action="authentification.php">
<label for="login">Login :</label>
<input type="text" id="login" name="login" value="">
    
<label for="mdp">MDP :</label>
<input type="password" id="mdp" name="mdp" value="">
    
<input type="submit" id="bouton" name="bouton" value="Se Connecter"> 
</form>
</body>
</html>