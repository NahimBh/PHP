<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
    </head>
<body>
    
<?php
echo $_SESSION['toto']."<br />";

echo "Bonjour ".$_POST['nom']." ".$_POST['prenom'];

echo "<br />".$_POST['sexe'];
if(isset($_POST['cb'])){
    echo "<br />".$_POST['cb'];
}

foreach($_POST['loisirs']as $loisir){
    echo "<br />".$loisir;
}
?>
    
</body>
</html>