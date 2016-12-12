<?php 
session_start();
?>

<?php
$login=$_POST['login'];
$mdp=md5($_POST['mdp']);

$cle = new mysqli('localhost', 'root', 'root', 'utilisateurs');

$reponse1 = $cle->query("SELECT * FROM users WHERE login='$login'"); 

if ($reponse1->num_rows ==1)
{
    header("Location:inscription.php?error");
}

else{
    $reponse2 = $cle->query("INSERT INTO users (login,mdp) VALUES ('$login','$mdp')");
    header("Location:../session/formulaire.php");
} 
?>