<?php 
session_start();

if(!isset($_SESSION['log'])){
    header('Location:formulaire.php');
}

echo $_SESSION['log']."<br />";
?>

<a href="dec.php">Déconnexion</a>