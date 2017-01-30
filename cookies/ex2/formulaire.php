<?php
$panier = $_COOKIE["panier"];
?>

<form method="post" action="script.php">

<?php
foreach($panier as $a =>$n){
    echo "$a <input type='text' name='$a' value='$n'>";
}
?>
    
<input type="submit" name='maj' value="MAJ"> 
</form> 