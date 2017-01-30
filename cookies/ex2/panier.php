<?php
$panier = $_COOKIE["panier"];
foreach($panier as $article=>$nb){
    echo "$article : $nb<br />";
}
?>

<a href="index.php">Nouveau Panier</a>
<a href="formulaire.php">Modifier le Panier</a>