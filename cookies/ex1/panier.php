<?php
$panier = $_COOKIE["panier"];
foreach($panier as $article=>$nb){
    setcookie("panier[$article]", $nb+=1);
    echo "$article : $nb<br/>";
}
?>

<a href="panier.php">Ajout d'un article</a>