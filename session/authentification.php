<?php 
session_start();
?>

<?php
$login=$_POST['login'];
$mdp=md5($_POST['mdp']);

$cle = new mysqli('localhost', 'root', 'root', 'utilisateurs');

$reponse = $cle->query("SELECT * FROM users WHERE login='$login' AND mdp='$mdp'");

if ($reponse->num_rows ==1)
{
    $_SESSION['log']=$login;
    header("Location:fichier.php");
}

else{
    header("Location:formulaire.php");
} 
?>