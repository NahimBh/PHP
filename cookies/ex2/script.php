<?php
$panier = $_COOKIE["panier"];

foreach($panier as $article=>$nb)
{
    $n = $_POST[$article];
    setcookie("panier[$article]", $n);
}
echo "Panier MAJ";
?>

<a href="panier.php">Voir le panier</a>