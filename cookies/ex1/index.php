<?php 
$panier = ["pomme", "poire"];
setcookie("panier", NULL, time()+3600);
foreach($panier as $article) {
    setcookie("panier[$article]", 0);
}
echo "Panier vide créé";
?>
<br />
<a href="panier.php">Voir le Panier</a>