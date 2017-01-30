<?php 
$panier = ["pomme", "poire"];
setcookie("panier", NULL, time()+36000);
foreach($panier as $article) {
    setcookie("panier[$article]", 0);
}
echo "Panier vide créé";
?>
<br />
<a href="panier.php">Voir le Panier</a>
<a href="formulaire.php">Modifier le Panier</a>